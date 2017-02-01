@extends('frontend.layouts.app')

@section('content')
    <div class="container p_contact">
        <div class="row">
            <div class="col-sm-5 col-sm-offset-1">
                <h1 class="eb008a">Get in touch</h1><br/>
                <p class="eb008a"><strong>Contact Us</strong></p>
                <form>
                    {!! Form::open()!!}
                    <div class="form-group">
                        <label class="field__label" for="exampleInputEmail3">Name</label>
                        {!! Form::text('name',null, ['class'=>'form-control', 'placeholder'=>'Name']) !!}
                    </div>
                    <div class="form-group">
                        <label class="field__label" for="exampleInputEmail3">Email</label>
                        {!! Form::text('email',null, ['class'=>'form-control', 'placeholder'=>'Email']) !!}
                    </div>
                    <div class="form-group">
                        <label class="field__label" for="exampleInputEmail3">Subject</label>
                        {!! Form::text('subject',null, ['class'=>'form-control', 'placeholder'=>'Subject']) !!}
                    </div>
                    <div class="form-group">
                        <label class="field__label" for="exampleInputEmail3">Message</label>
                        {{ Form::textarea('message', 'Message', ['class' => 'form-control','size' => '55x5']) }}
                    </div>
                    <button class="btn btn-lg bff0096">Send</button>

                    {!! Form::close() !!}
            </div>
            <div class="col-sm-5 col-sm-offset-1">
                <br><br>
                <h1 class="s26 c868686">Any concerns or inquiries?<br/>
                    Need advice on a style or product?<br>
                    Here are few ways to get a hold of us.
                </h1>
                <div class="col-sm-5 fq_con text-center">
                    <img src="{{ asset('frontend/img/faqimg.png') }}">
                    <h2 class="s21 mbn">FAQS</h2>
                    <p class="s12">Visit our help center</p>
                </div>
                <div class="col-sm-5 fq_con text-center">

                    <img src="{{ asset('frontend/img/emailimg.png') }}">
                    <h2 class="s21 mbn">EMAIL</h2>
                    <p class="s12">help@thehairfactory.com</p>
                </div>
                <div class="clearfix"></div>

                <p><span class="eb008a"><strong>Company Information</strong></span><br>
                    <strong>Headquarters:</strong><br/>
                    10241 Coursey Blvd<br/>
                    Suite F 70816<p>
                    <br/>
                <p><strong>Email:</strong><br/>
                    Info@thehairfactoryinc.com</p>
                <br/>
                <p><strong>Phone:</strong><br/>
                    225-400- 9022</p>
                <br/>
                <p><strong>Website:</strong><br/>
                    https://mayvenn.com
                </p>

                <p>Time of operation will be 9am to 7pm central ! Monday -Saturday!<br/>
                    Orders place before 12:00 noon central time ship that day !!

                </p>
            </div>
        </div>
    </div>

@endsection
