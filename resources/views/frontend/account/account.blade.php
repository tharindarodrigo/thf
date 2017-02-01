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
                        <li class="active">
                            <a href="#" >Profile</a>
                        </li>
                        <li>
                            <a href="#">Password</a>
                        </li>
                        <li >
                            <a href="#">Commission</a>
                        </li>
                       
                        <li>
                            <a href="#">Social</a>
                        </li>

                    </ul>

                </div>
                <div class="col-sm-6 pr_r_contain">
                    <h1 class="s26">Update your info</h1>
                    <form>
     
                        <div class="form-group np3 col-sm-6">
                            <label class="field__label">Full Name</label>
                            <input type="text" class="form-control " id="exampleInputEmail3" placeholder="First Name">
                        </div>
                        <div class="form-group np3 col-sm-6">
                            <label class="field__label">Last Name</label>
                            <input type="text" class="form-control " id="exampleInputEmail3" placeholder="Last Name">
                        </div>
                        <div class="clearfix"></div>
                            
                        <div class="form-group np3">
                            <label class="field__label">Mobile Phone</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Mobile Phone">
                        </div>
                        <div class="form-group np3">
                            <label class="field__label">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                       <div class="form-group np3">
                            <label class="field__label">Birthday</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Birthday">
                        </div>
                        <button class="col-sm-4 bupdate">Update</button>
                            
                    </form>
                </div>

            </div>

        </div>
<br><br><br>
@endsection
