<nav class="navbar navbar-default header header-page">
    <div class="container-fluid">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="{{url('')}}">
                    <img class="img-responsive" src="{{asset('frontend/img/logo.png')}}" alt=""
                         style="margin-top: -5px"/><span class="hair_by_richar">hair by Richar</span>
                </a>

            </div>

            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <button type="button" class="button--close-nav navbar-toggle" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="true">&nbsp;</button>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="index_v2.php">Home</a></li>
                    <li><a href="#">Shop</a></li>
                    <li><a href="#">Shop By Look</a></li>
                    <li><a href="#">Gurantee</a></li>


                    @if(Auth::check())
                        <li><a href="#"><img class="img-responsive"
                                             style="width: 30px; margin-right: -19px; border: 2px solid #acdeec; border-radius: 50%;"
                                             src="{{asset('frontend/img/model.jpg')}}" alt=""/></a></li>
                        <li class="dropdown">

                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                               role="button" aria-haspopup="true" aria-expanded="false">{!! Auth::user()->name !!} <span
                                        class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Action</a></li>
                                <li><a href="#">Another action</a></li>
                                <li><a href="#">Something else here</a></li>
                                <li role="separator" class="divider"></li>
                                <li><a href="{{route('logout')}}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>
                                </li>

                                <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}

                            </ul>
                        </li>
                    @else
                        <li><a href="{{url('/login')}}">Login</a></li>
                        <li><a href="{{url('/register')}}">Sign Up</a></li>
                        <li><a href="{{route('seller.register')}}">Become a Member</a></li>
                    @endif

                    <li><a href="#">

                            <img class="img-responsive" style="width: 30px;   margin-top: -6px;"
                                 src="{{asset('frontend/img/shopping-bag.png')}}" alt=""/></a></li>
                </ul>
            </div>
        </div>
    </div>
</nav>