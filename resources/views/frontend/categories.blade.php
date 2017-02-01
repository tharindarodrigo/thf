@extends('frontend.layouts.app')

@section('content')

<div class="container p_cat">
    <h1 class="text-center cat-txt1">Select your favorite style </h1>
    <div class="row">
        <div class="col-sm-12  gallary">
            <div class="col-sm-3 imggala col-xs-6">

                <img class="cat_img_th"  src="{{ asset('frontend/img/categories_img1.jpg') }}" alt=""/>
                <div class="row ga_row">
                    <img class=" hair" src="{{ asset('frontend/img/pro_curl.png') }}" alt=""/>
                    <p class="imglbl">Curly Hair</p>
                </div>
            </div>
            <div class="col-sm-3 imggala col-xs-6">
                <img class="cat_img_th"  src="{{ asset('frontend/img/cat2.jpg') }}" alt=""/>
                <div class="row ga_row">
                    <img class=" hair" src="{{ asset('frontend/img/pro_loosewave.png') }}" alt=""/>
                    <p class="imglbl">Loose Wave</p>
                </div>
            </div>
            <div class="col-sm-3 imggala col-xs-6">
                <img class="cat_img_th"  src="{{ asset('frontend/img/categories_img3.jpg') }}" alt=""/>
                <div class="row ga_row">
                    <img class=" hair" src="{{ asset('frontend/img/pro_closure.png') }}" alt=""/>
                    <p class="imglbl">Closure</p>
                </div>
            </div>
            <div class="col-sm-3 imggala col-xs-6">
                <img class="cat_img_th"  src="{{ asset('frontend/img/categories_img4.jpg') }}" alt=""/>
                <div class="row ga_row">
                     <img class=" hair" src="{{ asset('frontend/img/pro_fronttail.png') }}" alt=""/>
                    <p class="imglbl">Straight</p>
                </div>
            </div>
        </div>
        <br><br><br>
        <div class="col-sm-12">
            <div class="col-sm-3 imggala col-xs-6">
                <img class="cat_img_th"  src="{{ asset('frontend/img/categories_img5.jpg') }}" alt=""/>
                <div class="row ga_row"><img class=" hair" src="{{ asset('frontend/img/pro_straught.png') }}" alt=""/>

                    <p class="imglbl">Frontals</p>
                </div>
            </div>
            <div class="col-sm-3 imggala col-xs-6">
                <img class="cat_img_th"  src="{{ asset('frontend/img/categories_img6.jpg') }}" alt=""/>
                <div class="row ga_row">
                    <img class="hair" src="{{ asset('frontend/img/pro_bodywave.png') }}" alt=""/>
                    <p class="imglbl">Body Wave</p>
                </div>
            </div>
            <div class="col-sm-3 imggala col-xs-6">
                <img class="cat_img_th"  src="{{ asset('frontend/img/categories_img7.jpg') }}" alt=""/>
                <div class="row ga_row">
                    <img class=" hair" src="{{ asset('frontend/img/pro_deepwave.png') }}" alt=""/>
                    <p class="imglbl">Deep Wave</p>
                </div>
            </div>
        </div>
    </div>
</div>
    <br><br><br><br><br><br><br><br>


@endsection