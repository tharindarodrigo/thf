@extends('frontend.layouts.app')

@section('content')
    <div class="container signgin">
        <div class="row">
            <div class="col-sm-4  col-sm-offset-4 sign">

                <h1 class="eb008a text-center">Forgot Password?</h1>

                {!! Form::open()!!}

                    <div class="form-group np3 {{ !$errors->has('email') ? ' has-error' : '' }}">
                        <label class="field__label" for="email">Email</label>
                        {!! Form::text('email',old("email"), ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                        @if ($errors->has('email'))
                            <span class="help-block">
                            <strong>{{ $errors->first('email') }}</strong>
                        </span>
                        @endif

                    </div>

                    <div class="clearfix"></div>

                    <button type="submit" class="btn btn-lg bff0096 s26 bsign">Reset Password</button>
                    <div class="clearfix"></div>
                {!! Form::close() !!}

            </div>
        </div>

    </div>
@endsection
