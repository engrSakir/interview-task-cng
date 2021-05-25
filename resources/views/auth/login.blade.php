@extends('layouts.frontend.app')
@section('content')
    <div class="login-area ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="login-content">
                        <div class="login-title">
                            <h4>login</h4>
                            <p>Please login using account detail bellow.</p>
                        </div>
                        <div class="login-form">
                            <form action="{{ route('login') }}" method="post">
                                @csrf
                                <input name="email" placeholder="Email" type="email" title="Enter your email" value="{{ old('email') }}" required>
                                @error('email')
                                <div class="alert alert-danger" role="alert">
                                    {{ $message }}
                                </div>
                                @enderror
                                <input name="password" placeholder="Password" type="password" title="Enter your password" required>
                                <div class="button-remember">
                                    <div class="checkbox-remember">
                                        <input id="checkbox" type="checkbox" name="remember">
                                        <label>Remember me</label>
                                        <a href="#">Forgot your Password?</a>
                                    </div>
                                    <button class="login-btn" type="submit">Login</button>
                                    <a href="{{ route('login.github') }}" class="button login-btn text-center" type="submit">Login GitHub</a>
                                    <a href="{{ route('login.google') }}" class="button login-btn text-center" type="submit">Login Google</a>
                                </div>
                                <div class="new-account">
                                    <p>new here ? <a href="{{ route('register') }}">Create an new account .</a></p>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
