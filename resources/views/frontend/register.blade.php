@extends('frontend.layouts.app')

@section('content')
    <div class="container signgin">
        <div class="row">
            <div class="col-sm-4  col-sm-offset-4 sign">

                <h1 class="eb008a text-center">Register</h1>
                <a href="{{ url('/auth/facebook') }}" class="btn btn-lg col-sm-12 b3b5998 s26"><i
                            class="fa fa-facebook-square"
                            aria-hidden="true"></i> Register with Facebook
                </a>
                <p class="cd5d5d5 text-center s26">or</p>


                    {!! Form::open() !!}
                    <div class="form-group np3{{ $errors->has('name') ? ' has-error' : '' }}">
                        <label class="field__label" for="email">Name</label>
                        {!! Form::text('name',old("name"), ['class'=>'form-control', 'placeholder'=>'Name']) !!}
                        @if ($errors->has('name'))
                            <span class="help-block">
                            <strong>{{ $errors->first('name') }}</strong>
                        </span>
                        @endif

                    </div>

                    <div class="form-group np3{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label class="field__label" for="email">Email</label>
                        {!! Form::text('email',old("name"), ['class'=>'form-control', 'placeholder'=>'Email']) !!}

                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                    </div>

                    <div class="form-group np3 mpb{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label class="field__label" for="password">Password</label>
                        {!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Password']) !!}

                        @if ($errors->has('password'))
                            <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                    <div class="form-group np3 mpb">
                        <label class="field__label" for="password-confirm">Confirm Password</label>
                        {!! Form::password('password_confirmation', ['class'=>'form-control', 'placeholder'=>'Confirm Password']) !!}

                    </div>

                    <div class="clearfix"></div>

                    <button type="submit" class="btn btn-lg bff0096 s26 bsign">Register</button>
                    <div class="clearfix"></div>

                    {!! Form::close() !!}


                <p class="text-center">Have an account? <a href="{{ url('/signIn') }}" class="ff0096">Sign In</a></p>

            </div>


        </div>

    </div>
@endsection
