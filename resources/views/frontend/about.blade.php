@extends('frontend.layouts.app')

@section('content')
<div class="container-fluid about_us">
    <div class="container">
        <div class="col-sm-10 col-sm-offset-1 as-sec-1 text-center">
            <h1 class="as-sec-txt1">About Us</h1>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                industry's standard
                dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                a type specimen
                book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining
                essentially
                unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum
                passages, and more
                recently with desktop publishing software.</p>
        </div>
        <div class="row as-sec-2">
            <div class="col-sm-4 col-sm-offset-7 bgpnk">
                <h1>Our Philosophy</h1>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard
                    dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                <button class="btn indxbtn1">Shop Now</button>
            </div>
            <div class="col-sm-12" style="padding:0;">
                <img class="img-responsive w100" src="{{ asset('frontend/img/hairstyle_hair.jpg') }}" alt=""/>
            </div>
        </div>
        <div class="row sec-3">
            <div class="col-sm-10 col-sm-offset-1">

                <div class="col-sm-6" style="margin-top:30px; margin-bottom: 30px;">
                    <img class="img-responsive" src="{{ asset('frontend/img/girls_hair_smile.jpg') }}" alt=""/>
                </div>
                <div class="col-sm-6 as-sec-3b">
                    <h1 class="as-sec-txt1">About Us</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of
                        type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also
                        the
                        leap. </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row as_sec-4">
        <div class="col-sm-12 text-center bg_ntgrl">
            <p>Lorem Ipsum is simply dummy text of the printing<br>
                and typesetting industry. Lorem Ipsum has been the industry's standard dummy</p>
            <button class="btn indxbtn1">Shop Now</button>
        </div>
    </div>
</div>

@endsection
