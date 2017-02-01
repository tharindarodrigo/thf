@extends('frontend.layouts.app')

@section('content')
<br>
        <div class="container a_acoount">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1 fbfcfc pr_l_bar">
                    <div class="profile_rd">
                        <img src="{{asset('frontend/img/profile_img.jpg')}}" alt=""/>
                        <div class="profile_rd_overlay">
                            <img src="{{asset('frontend/img/icon-cam')}}.png" alt=""/>
                        </div>
                    </div>
                    <h2 class="s18 text-center mbn">Store Credit</h2>
                    <h1 class="eb008a text-center s48 mtn">$300<span class="s18 dzero">00</span></h1>

                    <ul class="lnone text-center pln">
                        <li>
                            <a href="#" >Profile</a>
                        </li>
                        <li>
                            <a href="#">Password</a>
                        </li>
                        <li >
                            <a href="#">Commission</a>
                        </li>
                       
                        <li class="active">
                            <a href="#">Social</a>
                        </li>

                    </ul>

                </div>
                <div class="col-sm-6 pr_r_contain">
                    <h1 class="s26">Connect your social</h1>
                    <form>
     
                        <div class="form-group np3 col-sm-1 col-xs-2">
                            <i class="fa fa-instagram fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="form-group np3 col-sm-11  col-xs-10">
                            <label class="field__label" for="exampleInputEmail3">Instagram</label>
                            <input type="text" class="form-control " id="exampleInputEmail3" placeholder="Instagram">
                        </div>
                        <div class="clearfix"></div>
                            
                        <div class="form-group np3 col-sm-1 col-xs-2">
                            <i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="form-group np3 col-sm-11  col-xs-10">
                            <label class="field__label" for="exampleInputEmail3">Facebook</label>
                            <input type="text" class="form-control " id="exampleInputEmail3" placeholder="Facebook">
                        </div>
                        <div class="clearfix"></div>
                        
                        <div class="form-group np3 col-sm-1 col-xs-2">
                            <i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i>
                        </div>
                        <div class="form-group np3 col-sm-11  col-xs-10">
                            <label class="field__label" for="exampleInputEmail3">Twitter</label>
                            <input type="text" class="form-control " id="exampleInputEmail3" placeholder="Twitter">
                        </div>
                        <div class="clearfix"></div>
                        
                        <div class="form-group np3 col-sm-1 col-xs-2">
                            <img src="{{asset('frontend/img/styleseat.jpg')}}" style="margin-top: 15px"/>
                        </div>
                        <div class="form-group np3 col-sm-11  col-xs-10">
                            <label class="field__label" for="exampleInputEmail3">Styleseat</label>
                            <input type="text" class="form-control " id="exampleInputEmail3" placeholder="Styleseat">
                        </div>
                        <div class="clearfix"></div>
                        
                        <button class="col-sm-4 bupdate">Update</button>
                            
                    </form>
                </div>

            </div>

        </div>
<br><br><br><br>
@endsection
