@extends('frontend.layouts.app')

@section('content')
    <div class="container signgin">
        <div class="row">
            <div class="col-sm-4  col-sm-offset-4 sign">

                <h1 class="eb008a text-center">Sign in to your account</h1>
                <a href="{{ url('/auth/facebook') }}" class="btn btn-lg col-sm-12 b3b5998 s26"><i
                            class="fa fa-facebook-square"
                            aria-hidden="true"></i> Sign in with Facebook
                </a>
                <p class="cd5d5d5 text-center s26">or</p>

                {!! Form::open(['url'=>'/login'])!!}

                    <div class="form-group np3{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="field__label" for="email">Email</label>
                        {!! Form::text('email',old("email"), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                    </div>

                    <div class="form-group np3 mpb{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="field__label" for="password">Password</label>
                        {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Password']) !!}
                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>


                    <div class="clearfix"></div>

                    <div class="checkbox  c808080 col-sm-6 sh_pass np col-xs-6">
                        <label>

                            {{ Form::checkbox('name', 'value') }}
                            <label for="tripfrequency"><span></span></label> Show Password
                        </label>
                    </div>
                    <div class="checkbox  c808080 col-sm-6 np col-xs-6">
                        <p class="pull-right c808080 checkbox"><a href="{{ url('/password/reset') }}" class="c808080 p10"> Forget Password?</a></p>
                    </div>
                    <button type="submit" class="btn btn-lg bff0096 s26 bsign">Sign In</button>
                    <div class="clearfix"></div>
                {!! Form::close() !!}


                <p class="text-center">Don't have an account? <a href="{{ url('register') }}" class="ff0096">Register Here</a></p>

            </div>


        </div>

    </div>
@endsection
