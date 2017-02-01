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
                            <a href="#" >Profile</a>
                        </li>
                        <li>
                            <a href="#">Password</a>
                        </li>
                        <li class="active">
                            <a href="#">Commission</a>
                        </li>
                       
                        <li>
                            <a href="#">Social</a>
                        </li>

                    </ul>

                </div>
                <div class="col-sm-6 pr_r_contain">
                    <h1 class="s26">Update commission info</h1>
                    <form>
                        
                        <div class="form-group col-sm-5  np3 field__input-wrapper--select">
                            <lable class="lap_in">Payment Method</lable>
                            <select class="form-control lab_in_in">
                                <option>Select Option</option>
                                <option>Paypal</option>
                                <option>Paypal</option>
                                <option>Paypal</option>
                            </select>
                            
                        </div>
                        <div class="form-group col-sm-7 np3">
                            <label class="field__label" for="exampleInputEmail3">Email</label>
                            <input type="email" class="form-control" id="exampleInputEmail3" placeholder="Email">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-sm-7  np3">
                            <label class="field__label" for="exampleInputEmail3">Address</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Address">
                            
                        </div>
                        <div class="form-group col-sm-5 np3">
                            <label class="field__label" for="exampleInputEmail3">Apt, Suite, etc. (optional)</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="Apt, Suite, etc. (optional)">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-sm-7  np3">
                            <label class="field__label" for="exampleInputEmail3">City</label>
                            <input type="text" class="form-control" id="exampleInputEmail3" placeholder="City">
                            
                        </div>
                        <div class="form-group col-sm-5 np3 field__input-wrapper--select">
                            <lable class="lap_in">State</lable>
                            <select name="" class="form-control lab_in_in ">
                                <option>Maryland</option>
                            </select>
                        </div>
                        <div class="clearfix"></div>
                        <button class="col-sm-4 bupdate">Update</button>
                            
                    </form>
                </div>

            </div>

        </div>
<br><br><br><br>
@endsection
