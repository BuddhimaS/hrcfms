<?php
/**
 * Featured posts on blog index.
 *
 * @package Hestia
 */

/**
 * Class Hestia_Featured_Posts
 */
class Hestia_Featured_Posts extends Hestia_Abstract_Main {

	/**
	 * Posts that will be skipped.
	 *
	 * @var array
	 */
	private $posts_id_to_skip = array();

	/**
	 * Initialize Featured Posts
	 */
	public function init() {
		add_action( 'hestia_before_index_posts_loop', array( $this, 'render_featured_posts' ) );
		add_action( 'hestia_after_archive_content', array( $this, 'after_archive_content' ) );
		add_filter(
			'hestia_filter_skipped_posts_in_main_loop',
			array(
				$this,
				'remove_featured_posts_in_main_loop',
			),
			0
		);
	}

	/**
	 * Display the latest 3 posts on top of the blog page.
	 *
	 * @return array|void
	 */
	public function render_featured_posts() {

		if ( is_404() ) {
			return;
		}

		$paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
		if ( $paged !== 1 ) {
			return;
		}

		/**
		 * Check if section is enabled. If it isn't, exit.
		 */
		$featured_posts_category = hestia_featured_posts_enabled();
		if ( $featured_posts_category === false ) {
			return;
		}

		/**
		 * By default, we will show only the last 3 posts but the number of posts can be changed in a child theme.
		 */
		$number_of_posts = apply_filters( 'hestia_blog_featured_posts_number', 3 );

		$post = new WP_Query(
			array(
				'post_type'           => 'post',
				'posts_per_page'      => ! empty( $number_of_posts ) ? absint( $number_of_posts ) : 3,
				'order'               => 'DESC',
				'ignore_sticky_posts' => true,
				'category__in'        => $featured_posts_category,
			)
		);

		if ( ! $post->have_posts() ) {
			return;
		}

		/**
		 * Index of the current post that is showed in loop.
		 */
		$item_index = 0;

		/**
		 * The total number of posts.
		 */
		$category    = get_category( $featured_posts_category[0] );
		$total_posts = $category->category_count;

		echo '<div class="hestia-blog-featured-posts ' . esc_attr( $this->wrapper_class() ) . '"><div class="row">';
		while ( $post->have_posts() ) {
			$post->the_post();

			$item_index ++;

			/**
			 * Based on the post index, decide if the post should display full width or just 50% of the page. If it's
			 * the only post, display it as full width.
			 */
			$card_class       = $this->get_card_class( $item_index, $total_posts );
			$card_inner_class = 'card card-raised';

			/**
			 * If the post has a thumbnail, we add the class card-background which adds overlay on the image, center
			 * the content and change the color of the text.
			 */
			$thumb_style = '';
			if ( has_post_thumbnail() ) {
				$card_inner_class .= ' card-background';
				$thumb_url         = get_the_post_thumbnail_url();
				$thumb_style       = 'style="background-image:url(' . esc_url( $thumb_url ) . ')"';
			}

			// Get the data (title, category, content) and display the post.
			$pid = get_the_ID();
			array_push( $this->posts_id_to_skip, $pid );
			$post_url = esc_url( get_permalink() );
			$title    = get_the_title();
			$content  = get_the_excerpt();
			$content  = preg_replace( '/<a class="moretag" (.*?)>(.*?)<\/a>/i', '...', $content );

			echo '<article class="hestia-blog-featured-card ' . join( ' ', get_post_class() ) . ' ' . esc_attr( $card_class ) . '">';
			echo '<div class="' . esc_attr( $card_inner_class ) . '" ' . $thumb_style . '>';
			echo '<div class="card-body">';
			echo '<span class="category text-info">';
			echo hestia_category();
			echo '</span>';

			if ( ! empty( $title ) ) {
				echo '<a href="' . esc_url( $post_url ) . '" rel="bookmark">';
				echo '<h2 class="card-title entry-title">' . wp_kses_post( $title ) . '</h2>';
				echo '</a>';
			}

			if ( ! empty( $content ) ) {
				echo '<p class="card-description entry-summary">';
				echo wp_kses_post( $content );
				echo '</p>';
			}

			echo '<a href="' . esc_url( $post_url ) . '" class="btn colored-button">';
			echo apply_filters( 'hestia_features_blog_posts_button_text', esc_html__( 'Read more', 'hestia' ) );
			echo '</a>';

			echo '</div>';
			echo '</div>';
			echo '</article>';
		}
		wp_reset_postdata();
		echo '</div></div>';
	}

	/**
	 * Filter main loop posts for featured area exclusion.
	 *
	 * @param array $posts the posts array.
	 *
	 * @return array
	 */
	public function remove_featured_posts_in_main_loop( $posts ) {
		return array_merge( $posts, $this->posts_id_to_skip );
	}

	/**
	 * Based on the post index, decide if the post should display full width or just 50% of the page.
	 *
	 * @param int $index Post  index.
	 * @param int $total_posts Number of posts in category.
	 *
	 * @return string
	 */
	private function get_card_class( $index, $total_posts ) {
		if ( $total_posts > 1 ) {
			if ( $index % 3 === 1 ) {
				return 'col-md-6';
			}
			if ( $index % 3 === 2 ) {
				return 'col-md-6';
			}

			return 'col-md-12';
		}
	}

	/**
	 * Featured posts wrapper class.
	 *
	 * @return string
	 */
	private function wrapper_class() {
		$default             = hestia_get_blog_layout_default();
		$blog_sidebar_layout = apply_filters( 'hestia_sidebar_layout', get_theme_mod( 'hestia_blog_sidebar_layout', $default ) );
		if ( $blog_sidebar_layout === 'full-width' || ( ! is_active_sidebar( 'sidebar-1' ) && ! is_customize_preview() ) ) {
			return ' col-md-10 col-md-offset-1 ';
		} else {
			return ' col-md-12 ';
		}
	}

	/**
	 * Localize script data on the `after_archive_content` hook.
	 *
	 * @return null|void
	 */
	public function after_archive_content() {
		if ( false === hestia_featured_posts_enabled() ) {
			return;
		}
		global $wp_query;

		if ( wp_script_is( 'hestia-infinit-scroll' ) && $wp_query->posts ) {
			$posts_id_to_skip       = array_map(
				function( $p ) {
					return $p->ID;
				},
				$wp_query->posts
			);
			$this->posts_id_to_skip = array_merge( $this->posts_id_to_skip, $posts_id_to_skip );
			$max_pages              = $wp_query->max_num_pages;

			$data = array(
				'ajaxurl'     => admin_url( 'admin-ajax.php' ),
				'max_page'    => absint( $max_pages ),
				'nonce'       => wp_create_nonce( 'hestia-infinite-scroll' ),
				'postsToSkip' => $this->posts_id_to_skip,
			);

			if ( Hestia_Public::should_enqueue_masonry() === true ) {
				$data['masonry'] = true;
			}
			wp_localize_script( 'hestia-infinit-scroll', 'infinite', $data );
		}
	}
}
