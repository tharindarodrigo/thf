@extends('frontend.layouts.app')

@section('content')

<div class="container-fluid quarantee">
    <div class="container">
        <div class="row" style="min-height: 500px; margin-top: 50px;">
            <div class="col-sm-4 col-sm-offset-1" style="text-align: center; background: #f4f5f5; border: 1px solid #f4f5f5; height: 450px; max-width: 100%;">
                <img src="{{ asset('frontend/img/gurantee.png') }}" style="margin-top: 100px;margin-bottom: 10px" alt=""/>
                <p class="s25">We guarantee that</p>
                <p class="s25">you'll love Mayvenn hair!</p>
            </div>
            <div class="col-sm-6">
                <div>
                    <h3 style="margin-top: 50px;" class="s18 eb008a">EXCHANGES</h3>
                    <p class="s20">Wear it, dye it, even flat iron it. If you do not love your Mayvenn hair
                        we will exchange it within 30 days of purchase. Just call us:</p>
                    <p class="s20">1-888-562-7952</p>
                </div>
                <hr>
                <div>
                    <h3  class="s18 eb008a">RETURNS</h3>
                    <p class="s20">If you are not completely happy with your Mayvenn hair before it is
                        installed, we will refund your purchase if the bundle is unopened and
                        the hair is in its original condition. Just call us:</p>
                    <p class="s20">1-888-562-7952</p>
                </div>
                <hr>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>

@endsection
