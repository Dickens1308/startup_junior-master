@extends('auth.app')

@section('content')
    <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4">
            <div class="card">
                <div id="content-body">
                    <div class="p-3 p-md-5">
                        <h5>Welcome</h5>
                        <p>
                            <small class="text-muted">Register to manage your account</small>
                        </p>
                        <form action="{{ route('register') }}" method="POST">
                            @csrf

                            <div class="form-group">
                                <label>Username</label>
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                    name="name" required autocomplete="name">
                                @error('name')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

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
                            </div>

                            <div class="form-group">
                                <label>Confirm Password</label>
                                <input id="password" type="password"
                                    class="form-control @error('password_confirmation') is-invalid @enderror"
                                    name="password_confirmation" required autocomplete="current-password">

                                @error('password_confirmation')
                                    <span class="text-danger" role="alert">
                                        {{ $message }}
                                    </span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <div class="row mb-3">

                                </div>
                            </div>

                            <button type="submit" class="btn btn-block btn-primary mb-4">Sign Up</button>
                            <div>I have an account?
                                <a href="{{ route('login') }}" class="text-primary">Sign in</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>
@endsection
