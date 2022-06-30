@extends('auth.layouts.main')

@section('content')
    <h1 class="auth-title">Login</h1>

    <form action="index.html">
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" class="form-control form-control-l" placeholder="Username">
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" class="form-control form-control-l" placeholder="Password">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <button class="btn btn-primary btn-block shadow-lg">Log in</button>
    </form>

    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">Don't have an account? <a href="auth-register.html" class="font-bold">Sign
                up</a>.</p>
        <p><a class="font-bold" href="auth-forgot-password.html">Forgot password?</a>.</p>
    </div>
@stop