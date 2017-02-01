@extends('frontend.layouts.app')

@section('content')
<br>
<div class="container a_acoount">
    <div class="row">
        <div class="col-sm-4 col-sm-offset-1 fbfcfc pr_l_bar">
            <div class="profile_rd">
                <img src="img/profile_img.jpg" alt=""/>
                <div class="profile_rd_overlay">
                    <img src="img/icon-cam.png" alt=""/>
                </div>
            </div>
            <h2 class="s18 text-center mbn">Store Credit</h2>
            <h1 class="eb008a text-center s48 mtn">$300<span class="s18 dzero">00</span></h1>

            <ul class="lnone text-center pln">
                <li>
                    <a href="#">Profile</a>
                </li>
                <li class="active">
                    <a href="#">Password</a>
                </li>
                <li>
                    <a href="#">Commission</a>
                </li>

                <li>
                    <a href="#">Social</a>
                </li>

            </ul>

        </div>
        <div class="col-sm-6 pr_r_contain">
            <h1 class="s26">Update Your password</h1>
            {!! Form::open()!!}
            <div class="form-group np3">
                <label class="field__label" for="exampleInputEmail3">Current Password</label>

                {!! Form::password('password',['class'=>'form-control', 'placeholder'=>'Current Password']) !!}
            </div>
            <div class="form-group np3">
                <label class="field__label" for="exampleInputEmail3">New Password</label>

                {!! Form::password('newPassword',['class'=>'form-control', 'placeholder'=>'New Password']) !!}

            </div>
            <div class="form-group np3">
                <label class="field__label" for="exampleInputEmail3">Re-type New Password</label>

                {!! Form::password('retypeNewPassword',['class'=>'form-control', 'placeholder'=>'Re-type New Password'])
                !!}

            </div>
            <div class="checkbox">
                <label>
                    {{ Form::checkbox('name', 'value') }}
                    <label for="tripfrequency"><span></span></label> Show Password
                </label>
            </div>
            <button class="col-sm-4 bupdate">Update</button>

            {!! Form::close() !!}
        </div>

    </div>

</div>
<br><br><br>
@endsection
