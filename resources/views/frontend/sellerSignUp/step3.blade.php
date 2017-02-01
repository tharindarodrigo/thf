@extends('frontend.layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-sm-6  col-sm-offset-3 quest2">
            <img src="{{asset('frontend/img/questionnaire_step3.jpg')}}" class="img-responsive quest_img"/>
            <h1 class="eb008a text-center">You've just taken the first step towards<br/>
                becoming a The Hair Factory Member!</h1>
            <h2 class="s26 text-center c808080">We'll be giving you a call very soon.<br/>
                Watch for our Caller ID: 510-250-2320 </h2>


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
                    <div class="bar progress-bar" style="width: 100%;background-color:#ff0096;height: 100%;"></div>
                </div>
                <p class="s16 c868686">100% Completed</p>
            </div>
        </div>
    </div>
</div>


@endsection