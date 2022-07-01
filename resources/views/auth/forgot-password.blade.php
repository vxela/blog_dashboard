@extends('auth.layouts.main')

@section('content')
    <h2 class="auth-title">Forgot Password</h2>

    <p class="auth-subtitle mb-5">Input your email and we will send you reset password link.</p>


    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Validation Errors -->
    <x-auth-validation-errors class="mb-4" :errors="$errors" />
    
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="form-group position-relative has-icon-left mb-2">
            <input type="email" name="email" :value="old('email')" required autofocus class="form-control form-control-l" placeholder="Email">
            <div class="form-control-icon">
                <i class="bi bi-envelope"></i>
            </div>
        </div>
        <button class="btn btn-primary btn-block btn shadow mt-5">Send</button>
    </form>

    <div class="text-center mt-5 text-lg fs-4">
        <p class='text-gray-600'>Remember your account? <a href="{{ route('login') }}" class="font-bold">Log in</a>.
        </p>
    </div>

@stop