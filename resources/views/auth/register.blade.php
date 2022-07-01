@extends('auth.layouts.main')

@section('content')
    <h1 class="auth-title">Sign Up</h1>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />

    <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="text" name="name" :value="old('name')" required autofocus class="form-control form-control" placeholder="Your name">
            <div class="form-control-icon">
                <i class="bi bi-person"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="email" name="email" :value="old('email')" required class="form-control form-control" placeholder="Email">
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password" required class="form-control form-control" placeholder="Password">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <div class="form-group position-relative has-icon-left mb-4">
            <input type="password" name="password_confirmation" required class="form-control form-control" placeholder="Confirm Password">
            <div class="form-control-icon">
                <i class="bi bi-shield-lock"></i>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block shadow mt-4">Submit</button>
    </form>

    <div class="text-center mt-5 text-lg fs-4">
        <p class="text-gray-600">
            {{ __('Already registered?') }}
            <a href="{{ route('login') }}" class="font-bold">Sign in</a>.
        </p>
    </div>
@stop