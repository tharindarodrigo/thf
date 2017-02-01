@extends('frontend.layouts.app')

@section('content')
    <div class="container quest2">
        <div class="row">
            <div class="col-sm-7  col-sm-offset-3">
                <h1 class="eb008a">Please fill the form to become a member</h1>
            </div>
            <div class="clearfix"></div>
            <br>
            <br>

            {!! Form::open(['route'=>['seller.post-sign-up.step2']]) !!}

            <div class="clearfix"></div>
            <div class="col-sm-6  col-sm-offset-3 npr ">
                <p class="s26"><span class="eb008a">1.</span> Have you seen or worn The Hair Factory hair before?*
                </p>
            </div>
            <div class="form-group np3 col-sm-4 col-sm-offset-3">
                <div class="checkbox_q2 fist">
                    {!! Form::checkbox('seen_or_worn',1) !!}
                    Yes
                </div>
                <div class="checkbox_q2 active last">
                    {!! Form::checkbox('seen_or_worn',0) !!}
                    No
                </div>
            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6  col-sm-offset-3 ">
                <p class="s26"><span class="eb008a">2.</span> Do you have a bank account, so we can direct deposit
                    your commissions?*</p>
            </div>
            <div class="form-group np3 col-sm-4 col-sm-offset-3">
                <div class="checkbox_q2 fist">
                    {!! Form::checkbox('has_bank_account',1) !!}
                    Yes
                </div>
                <div class="checkbox_q2 last">
                    {!! Form::checkbox('has_bank_account',0) !!}
                    No
                </div>

            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6  col-sm-offset-3 ">
                <p class="s26"><span class="eb008a">3.</span> Do you have a Styleseat account?*</p>
            </div>
            <div class="form-group np3 col-sm-4 col-sm-offset-3">
                <div class="checkbox_q2 fist">
                    {!! Form::checkbox('has_styleseat_account',1) !!}
                    Yes
                </div>
                <div class="checkbox_q2 last">
                    {!! Form::checkbox('has_styleseat_account',0) !!}
                    No
                </div>

            </div>
            <div class="clearfix"></div>
            <div class="col-sm-6  col-sm-offset-3 ">
                <p class="s26"><span class="eb008a">4.</span> Do you currently do hair?*</p>
            </div>
            <div class="form-group np3 col-sm-4 col-sm-offset-3">
                <div class="checkbox_q2 fist">
                    {!! Form::checkbox('currently_do_hair',1) !!}
                    Yes
                </div>
                <div class="checkbox_q2 last">
                    {!! Form::checkbox('currently_do_hair',0) !!}
                    No
                </div>
            </div>
            <div class="col-sm-4  col-sm-offset-3">
                <div class="btn-block">
                    <button class="btn btn-lg col-sm-12 bff0096 s26">Finish
                        <i class="fa fa-arrow-circle-right fa-lg" aria-hidden="true"></i></button>
                </div>
            </div>
            {!! Form::close() !!}

        </div>
        <div class="clearfix"></div>
        <br/>
        <br/>

    </div>

    <div class="container-fluid bf2f2f2">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4 text-center percentage">
                    <div class="progress" style="height: 8px;">
                        <div class="bar progress-bar" style="width: 10%;background-color:#ff0096;height: 100%;"></div>
                    </div>
                    <p>10% Completed</p>
                </div>
                <div class="arrows col-sm-4 percentage2">
                    <i class="fa fa-arrow-circle-o-up fa-lg"></i>
                    <i class="fa fa-arrow-circle-o-down fa-lg"></i>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
<script>
    $(document).ready(function () {
        $('.checkbox_q2').click(function () {
            if ($(this).hasClass("active")) {
                $(this).removeClass('active');
            } else {
                $(this).addClass('active');
            }
//        $(this).closest('.checkbox_q2').removeClass('active');
            if ($(this).hasClass("fist")) {
                $(this).next().removeClass('active');
            } else {
                $(this).prev().removeClass('active');
            }
        })
    });
</script>
@endpush
