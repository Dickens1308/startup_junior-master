@extends('auth.app')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div id="content-body">
                    <div class="p-3 p-md-5">
                        <h5>Welcome back</h5>
                        <p>
                            <small class="text-muted">Login to manage your account</small>
                        </p>
                        <form action="{{ route('login') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Email</label>
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                    name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                @error('email')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror

                                <div class="my-3 text-right">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-check text-left">
                                                <input class="form-check-input float-left " type="checkbox" name="remember"
                                                    id="remember" {{ old('remember') ? 'checked' : '' }}>

                                                <label class="form-check-label" for="remember">
                                                    {{ __('Remember Me') }}
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}" class="text-muted">Forgot
                                                    password?</a>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="row mb-3">

                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary mb-4">Sign in</button>
                            <div>Do not have an account?
                                <a href="{{ route('register') }}" class="text-primary">Sign up</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection
