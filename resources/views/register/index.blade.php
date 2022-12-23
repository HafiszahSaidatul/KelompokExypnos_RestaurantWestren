@extends('layouts.login')

@section('container')
    <div class="container p-4">
        <div class="row main mt-5">
            <!-- sign up form -->
            <div class="col-md-6" id="signUp">
                <h1 class="display-4 text-center ">Sign up</h1>
                <form action="/register" method="post" class="d-flex justify-content-center mt-4">
                    @csrf
                    <div class="w-75 ">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" class="@error('name') is-invalid @enderror" id="name"
                                placeholder="" required value="{{ old('name') }}">
                            @error('name')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" name="username" class="@error('username') is-invalid @enderror"
                                id="username" placeholder="" requiredvalue="{{ old('username') }}">
                            @error('username')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email"
                                placeholder="" required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group my-2">
                            <label for="password">Password</label>
                            <input type="password" name="password"
                                class="rounded-bottom @error('password') is-invalid @enderror" id="password" placeholder=""
                                required>
                            @error('password')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>

                        <button type="submit">Register</button>
                        <div class="d-flex justify-content-between mt-2">
                            <a class="links text-black" href="/login" style="text-decoration: none" id="loginLink">Already
                                have an Account ?</a>
                        </div>
                    </div>
                </form>
            </div>

            <!-- Login Form  -->
            <div class="col-md-6 p-5" id="login">
                @if (session()->has('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if (session()->has('loginError'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        {{ session('loginError') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <button class="col-md-3 p2">
                    <a style="text-decoration: none" class="{{ $active === 'home' ? 'active' : '' }} text-white"
                        href="/">Back To Home</a>
                </button>
                <h1 class="display-4 text-center ">Login</h1>
                <form action="/login" method="post" class="d-flex justify-content-center mt-4">
                    @csrf
                    <div class="w-75 ">
                        <div class="form-group">
                            <label for="email">Email address</label>
                            <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email"
                                placeholder="" autofocus required value="{{ old('email') }}">
                            @error('email')
                                <div class="invalid-feedback">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group my-4">
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" placeholder="" required>
                        </div>

                        <button type="submit">Login</button>
                        <div class="d-flex justify-content-between mt-5">
                            <a class="links text-black" href="/register" style="text-decoration: none"
                                id="registerLink">Create an Account ?</a>
                        </div>
                    </div>
                </form>
            </div>
            <div id="overlay-register"></div>
        </div>
    </div>
@endsection
