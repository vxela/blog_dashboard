@extends('auth.layouts.main')

@section('content')
    <h2 class="auth-title">Login</h2>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" name="email" class="form-control form-control-l" placeholder="Email">
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password" class="form-control form-control-l" placeholder="Password">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <div class="form-check form-check-md d-flex align-items-end">
            <input class="form-check-input me-2" name="remember" type="checkbox" value="" id="remember_me">
            <label class="form-check-label text-gray-600" for="remember_me">
                {{ __('Keep me logged in') }}
            </label>
        </div>
        <button type="submit" class="btn btn-primary btn-block shadow-lg mt-4">Log in</button>
    </form>

    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">
            Don't have an account?
            <a href="{{ route('register') }}" class="font-bold">Sign up</a>.
        </p>
        <p>
            <a class="font-bold" href="{{ route('password.request') }}">Forgot password?</a>.
        </p>
    </div>
@stop