@extends ('layouts.app')
@section('content')

<div class="d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg p-4" style="width: 400px;">
        <h3 class="text-center mb-4">Login</h3>
        @if(session('error'))
        <div class="alert alert-danger">{{session('error')}}</div>
        @endif
        <form method="post" action="{{ route('login') }}" novalidate>
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control @error('password') is-invalid @enderror" id="password" name="password" required>
                @error('password')
                <div class="invalid-feedback">{{ $message }}</div>
                @enderror
            </div>
            <div class="d-grid">
                <button type="submit" class="btn btn-primary" style="background-color:#dfa974; border-color: #dfa974";>Login</button>
            </div>
            <div class="text-center mt-3"style="color: #dfa974;>
                <a href=">Forgot Password?</a>
            </div>
        </form>
    </div>
</div>


@endsection