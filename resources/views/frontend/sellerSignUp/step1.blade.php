@extends('frontend.layouts.app')

@section('content')
    <div class="container quest">
        <div class="row">
            <div class="col-sm-6  col-sm-offset-3 ">
                <br/>
                <h1 class="eb008a text-center">Become a The Hair Factory Member</h1>
                <h1 class="text-center s26 c808080">Becoming a Mayvenn is fast and free.<br/>
                    Contact us today and be selling tomorrow!</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-sm-offset-4">
                {!! Form::open(['route'=>['seller.post-sign-up.step1']]) !!}
                    <div class="form-group np3">
                        <label class="field__label" for="first_name">First Name</label>
                        {!! Form::text('first_name',null, ['class'=>'form-control', 'placeholder'=>'First Name']) !!}

                    </div>
                    <div class="form-group np3">
                        <label class="field__label" for="last_name">Last Name</label>
                        {!! Form::text('last_name',null, ['class'=>'form-control', 'placeholder'=>'Last Name']) !!}

                    </div>
                    <div class="form-group np3">
                        <label class="field__label" for="email">Email</label>
                        {!! Form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}

                    </div>
                    <div class="form-group np3">
                        <label class="field__label" for="phone_number">Phone Number</label>
                        {!! Form::text('phone_number',null, ['class'=>'form-control', 'placeholder'=>'Phone Number']) !!}

                    </div>
                    <button class="btn btn-lg col-sm-12 bff0096 s26">Continue <i class="fa fa-arrow-circle-right fa-lg"
                                                                                 aria-hidden="true"></i></button>
                {!! Form::close() !!}
                <div class="clearfix"></div>
                <br/>
                <br/>

            </div>


        </div>

    </div>
    <div class="container-fluid bf2f2f2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 text-center percentage">
                    <div class="progress" style="height: 8px;">
                        <div class="bar progress-bar" style="width: 1%;background-color:#ff0096;height: 100%;"></div>
                    </div>
                    <p>0% Completed</p>
                </div>
            </div>
        </div>
    </div>
@endsection
