<html>
<head>
    <title>{{ config('app.name', 'The Hair Factory') }}</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="http://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
    <script src="{{asset('frontend/js/jquery-3.1.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('frontend/css/style1.css')}}" rel="stylesheet" type="text/css"/>
</head>
<body><!-- for pages -->


<div class="container-fluid sect_0 home">
    <nav class="navbar navbar-default header header-home">
        <div class="container-fluid">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="{{url('')}}">
                        <img src="{{asset('frontend/img/ind_white.png')}}" alt="" style="margin-top: -5px"/>
                        <span class="hair_by_richar">hair by Richar</span>
                    </a>

                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <button type="button" class="button--close-nav navbar-toggle" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="true">&nbsp;</button>
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="#">Shop</a></li>
                        <li><a href="#">Shop By Look</a></li>
                        <li><a href="#">Grantee</a></li>


                        @if(Auth::check())
                            <li><a href="#">
                                    <img class="img-responsive"
                                         style="width: 30px;    margin-right: -19px;border: 2px solid #acdeec; border-radius: 50%;"
                                         src="{{asset('frontend/img/model.jpg')}}" alt=""/>
                                </a>
                            </li>

                            <li class="dropdown">

                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                   role="button" aria-haspopup="true" aria-expanded="false">{!! Auth::user()->name !!}
                                    <span
                                            class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Action</a></li>
                                    @role('admin')
                                    <li><a href="{{url('/control-panel/welcome')}}">Control Panel</a></li>
                                    @endrole
                                    <li><a href="#">Something else here</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                                    </li>

                                    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </ul>
                            </li>
                            <li><a href="#"><img id="sb" class="img-responsive" style=" margin-top: -2px;"
                                                 src="{{asset('frontend/img/shopping-bag-red.png')}}" alt=""/></a></li>
                        @else
                            <li><a href="{{url('/signIn')}}">Sign In</a></li>
                            <li><a href="{{url('/register')}}">Sign Up</a></li>
                            <li><a href="{{route('seller.register')}}">Become a Member</a></li>
                        @endif
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div>
        </div><!-- /.container-fluid -->
    </nav>
    <div class="row">
        <img class="img-responsive" src=""/>
        <div class="container">
            <div class="col-sm-10 col-sm-offset-1 topsec">
                <h1 class="s75 mbn">100%</h1>
                <h2 class="s40 mtn">Virgin Human Hair</h2>
                <h5 class="s30">+ free Shipping</h5>
                <button class="btn indxbtn1">Shop Now</button>
            </div>
        </div>
    </div>
</div>

<div class="home">

    <div class="container">
        <div class="row text-center">
            <div class="col-sm-10 col-sm-offset-1 gallary">

                <div class="col-sm-3 col-xs-6 imggala">

                    <img class="img-responsive w100" src="{{asset('frontend/img/categories_img1.jpg')}}" alt=""/>
                    <div class="row ga_row">
                        <img class=" hair" src="{{asset('frontend/img/pro_curl.png')}}" alt=""/>
                        <p class="imglbl">Curly Hair</p>
                    </div>
                </div>
                <div class="col-sm-3 col-xs-6 imggala">
                    <img class="img-responsive w100" src="{{asset('frontend/img/cat2.jpg')}}" alt=""/>
                    <div class="row ga_row">
                        <img class=" hair" src="{{asset('frontend/img/pro_loosewave.png')}}" alt=""/>
                        <p class="imglbl">Loose Wave</p>
                    </div>
                </div>
                <div class="col-sm-3  col-xs-6 imggala">
                    <img class="img-responsive w100" src="{{asset('frontend/img/categories_img3.jpg')}}" alt=""/>
                    <div class="row ga_row">
                        <img class=" hair" src="{{asset('frontend/img/pro_closure.png')}}" alt=""/>
                        <p class="imglbl">Closure</p>
                    </div>
                </div>
                <div class="col-sm-3   col-xs-6 imggala">
                    <img class="img-responsive w100" src="{{asset('frontend/img/categories_img4.jpg')}}" alt=""/>
                    <div class="row ga_row">
                        <img class=" hair" src="{{asset('frontend/img/pro_straught.png')}}" alt=""/>
                        <p class="imglbl">Straught</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-8 col-sm-offset-2 plr3">
                <div class="col-sm-4  col-xs-6 imggala">
                    <img class="img-responsive w100" src="{{asset('frontend/img/categories_img5.jpg')}}" alt=""/>
                    <div class="row ga_row">
                        <img class=" hair" src="{{asset('frontend/img/pro_fronttail.png')}}" alt=""/>
                        <p class="imglbl">Frontals</p>
                    </div>
                </div>
                <div class="col-sm-4  col-xs-6 imggala">
                    <img class="img-responsive w100" src="{{asset('frontend/img/categories_img6.jpg')}}" alt=""/>
                    <div class="row ga_row">
                        <img class="hair" src="{{asset('frontend/img/pro_bodywave.png')}}" alt=""/>
                        <p class="imglbl">Body Wave</p>
                    </div>
                </div>
                <div class="col-sm-4  col-xs-6 imggala">
                    <img class="img-responsive w100" src="{{asset('frontend/img/categories_img7.jpg')}}" alt=""/>
                    <div class="row ga_row">
                        <img class=" hair" src="{{asset('frontend/img/pro_deepwave.png')}}" alt=""/>
                        <p class="imglbl">Deep Wave</p>
                    </div>
                </div>
                <div class="clearfix"></div>
                <div class="row sec-4">
                    <div class="col-sm-7 gallery_b_head">
                        <h1 class="sec3txt1 text-uppercase">Pick your style</h1>
                        <p class="sec3txt2">100% Virgin Human Hair + free Shipping</p>

                    </div>
                    <div class="col-sm-5 gallery_b_button">
                        <button class="btn indxbtn2">Shop Now</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid vdo_container">
        <div class="row">

            <div class="container ">
                <div class="vdo">
                    <div class="col-sm-6">
                        <img src="{{asset('frontend/img/video.jpg')}}" alt=""/>
                    </div>

                    <div class="col-sm-6 vdo_r_text">
                        <h1 class="s50">The Hair Factory in action</h1>
                        <p class="s30">See what real customer say</p>
                    </div>
                </div>
            </div>

        </div>

    </div>
    <div class="clearfix"></div>
    <div class="container">
        <div class="row text-center sec-6 ">
            <div class="col-sm-4  col-sm-offset-1">
                <p class="sectxt1">We deliver all over <br> the country.</p>
                <img src="{{asset('frontend/img/map.png')}}" alt=""/>
            </div>
            <div class="col-sm-6 col-sm-offset-1">
                <img src="{{asset('frontend/img/3in1.png')}}" alt=""/>
                <p class="sectxt2">Browse our The Hair Products Collection</p>
                <button class="btn indxbtn3 row" style="">Shop Now</button>
            </div>
        </div>
        <br>
    </div>
</div>
<div class="clearfix"></div>


@include('frontend.layouts.footer')

<script>
    $(document).ready(function () {
        $('input, textarea').on('keyup keydown keypress change paste', function () {
            if ($(this).val() == '') {
//                  $(this).css('padding', '15px 12px');
                if ($(this).hasClass('form-control_2')) {
                    $(this).removeClass('form-control_2');
                }
                $(this).parent().find('label').css('opacity', '0');
            } else {
//                  $(this).css('padding', '23px 12px 7px');
                if ($(this).hasClass('form-control_2')) {

                } else {
                    $(this).addClass('form-control_2');
                }

                $(this).parent().find('label').css('opacity', '1');
            }
        });

//        $('.button--close-nav').click(function(){
//            $('#bs-example-navbar-collapse-1').removeClass('in');
//        });

    });

</script>
</body>
</html>
