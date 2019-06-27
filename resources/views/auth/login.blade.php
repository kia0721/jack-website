@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5 col-sm-10 col-xs-12">
            <div class="card authCard">
                <div class="card-header authHeader"><label><i class="glyphicon glyphicon-user"></i> {{ __('Login') }}</label></div>

                <div class="card-body loginCardBody">
                    <h5>Welcome! Please enter username and password to log in</h5>
                    <form method="POST" action="{{ route('login') }}" aria-label="{{ __('Login') }}">
                        @csrf

                        <div class="form-group ">
                            <div class="input-group {{ $errors->has('email') ? ' is-invalid' : '' }}">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}"  required autofocus>
                            </div>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                           
                        </div>

                        <div class="form-group ">
                            <div class="input-group {{ $errors->has('password') ? ' is-invalid' : '' }}">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" placeholder="Password" required>
                            </div>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                           
                        </div>

                        <div class="form-group ">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group ">
                            <div class="col-md-12">
                                <button type="submit" class="btn loginButton">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
