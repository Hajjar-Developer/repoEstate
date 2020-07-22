
@extends('layouts.app')

@section('title')


Welcome page

@endsection

@section('header')

  



@endsection




  

 <body  style="direction: ltl;" >
@section('content')
<!-- about -->
<section class="wthree-row py-5">
    <div class="container py-lg-5 py-3">
        <h3 class="heading text-capitalize mb-sm-5 mb-4"> About us </h3>
        <div class="row d-flex justify-content-center">
            <div class="card col-lg-3 col-md-6 border-0">
                <div class="card-body bg-light pl-0 pr-0 pt-0">
                    <h5 class=" card-title titleleft">Dining Chairs</h5>
                    <p class="card-text mb-3">Wellcome to your in our project for Estate.</p>
                    <a href="#ab-bot" class="btn scroll">View More</a>
                </div>
                <img class="card-img-top" src="{{Request::root()}}/website/images/a1.jpg" alt="Card image cap">
            </div>
            <div class="card col-lg-3 col-md-6 border-0 mt-md-0 mt-5">
                <img class="card-img-top" src="{{Request::root()}}/website/images/a2.jpg " alt="Card image cap ">
                <div class="card-body bg-light text-center">
                    <h5 class="card-title pt-3">Office Chairs</h5>
                    <p class="card-text mb-3 ">Wellcome to your in our project for Estate..</p>
                    <a href="#ab-bot" class="btn scroll">View More</a>
                </div>
            </div>
            <div class="card col-lg-3 col-md-6 border-0 mt-lg-0 mt-5 ">
                <img class="card-img-top " src="{{Request::root()}}/website/images/a3.jpg " alt="Card image cap ">
                <div class="card-body bg-light text-center">
                    <h5 class="card-title pt-3">Home Chairs</h5>
                    <p class="card-text mb-3 ">Wellcome to your in our project for Estate..</p>
                    <a href="#ab-bot" class="btn scroll">View More</a>
                </div>
            </div>
            <div class="card col-lg-3 col-md-6 border-0 mt-lg-0 mt-5 text-right">
                <div class="card-body bg-light pl-0 pr-0 pt-0">
                    <h5 class="card-title titleright">Architecture</h5>
                    <p class="card-text mb-3">Wellcome to your in our project for Estate.</p>
                    <a href="#ab-bot" class="btn scroll">View More</a>
                </div>
                <img class="card-img-top " src="{{Request::root()}}/website/images/a4.jpg " alt="Card image cap ">
            </div>
        </div>
    </div>
</section>
<!-- //about -->

<!-- why choose us -->
<section class="why">
    <div class="layer py-5">
    <div class="container py-3">
        <h3 class="heading text-capitalize mb-sm-5 mb-4"> Why Choose us </h3>
        <div class="row why-grids">
            <div class="col-lg-3 col-sm-6 why-grid1">
                <i class="fas icon fa-tags"></i>
                <h4>10 year Gurantee</h4>
                <p class="mb-lg-5 mb-4">taciti aptent</p>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="col-lg-3 col-sm-6 mt-sm-0 mt-5 why-grid1">
                <i class="fas icon fa-puzzle-piece"></i>
                <h4>Comfortable support</h4>
                <p class="mb-lg-5 mb-4">taciti aptent</p>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 why-grid1">
                <i class="fab icon fa-angellist"></i>
                <h4>Quality In Furniture</h4>
                <p class="mb-lg-5 mb-4">taciti aptent</p>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
            <div class="col-lg-3 col-sm-6 mt-lg-0 mt-5 why-grid1">
                <i class="fas icon fa-dollar-sign"></i>
                <h4>100% Money Back</h4>
                <p class="mb-lg-5 mb-4">taciti aptent</p>
                <a href="#"><i class="fas fa-long-arrow-alt-right"></i></a>
            </div>
        </div>
    </div>
    </div>
</section>
<!-- //why choose us -->

<!-- team -->
<section class="w3ls-team py-5">
    <div class="container py-3">
        <h3 class="heading text-capitalize mb-sm-5 mb-4"> Our Team </h3>
        <div class="row team-grids">
            <div class="col-md-3 col-sm-6 w3_agileits-team1">
                <img class="img-fluid" src="{{Request::root()}}/website/images/t1.jpg" alt="">
                <h5 class="mt-3">Elmore</h5>
                <p>Lorem ipsum</p>
                <div class="social-icons mt-2">
                    <ul>
                        <li>
                            <a href="#" class="fab fa-facebook-f icon-border facebook"> </a>
                        </li>
                        <li class="mx-1">
                            <a href="#" class="fab fa-twitter  icon-border twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="fab fa-google-plus-g icon-border googleplus"> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mt-sm-0 mt-5 w3_agileits-team1">
                <img class="img-fluid" src="{{Request::root()}}/website/images/t2.jpg" alt="">
                <h5 class="mt-3">Blanton</h5>
                <p>Lorem ipsum</p>
                <div class="social-icons mt-2">
                    <ul>
                        <li>
                            <a href="#" class="fab fa-facebook-f icon-border facebook"> </a>
                        </li>
                        <li class="mx-1">
                            <a href="#" class="fab fa-twitter  icon-border twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="fab fa-google-plus-g icon-border googleplus"> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mt-md-0 mt-5 w3_agileits-team1">
                <img class="img-fluid" src="{{Request::root()}}/website/images/t3.jpg" alt="">
                <h5 class="mt-3"> Bass</h5>
                <p>Lorem ipsum</p>
                <div class="social-icons mt-2">
                    <ul>
                        <li>
                            <a href="#" class="fab fa-facebook-f icon-border facebook"> </a>
                        </li>
                        <li class="mx-1">
                            <a href="#" class="fab fa-twitter  icon-border twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="fab fa-google-plus-g icon-border googleplus"> </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mt-md-0 mt-5 w3_agileits-team1">
                <img class="img-fluid" src="{{Request::root()}}/website/images/t4.jpg" alt="">
                <h5 class="mt-3"> Glickon</h5>
                <p>Lorem ipsum</p>
                <div class="social-icons mt-2">
                    <ul>
                        <li>
                            <a href="#" class="fab fa-facebook-f icon-border facebook"> </a>
                        </li>
                        <li class="mx-1">
                            <a href="#" class="fab fa-twitter  icon-border twitter"> </a>
                        </li>
                        <li>
                            <a href="#" class="fab fa-google-plus-g icon-border googleplus"> </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- //team -->

<!-- Clients -->
<section class="clients-main">
    <div class="wthree-different-dot1 py-5">
        <div class="container py-sm-3">
            <!-- Owl-Carousel -->
            <h3 class="heading text-capitalize mb-sm-5 mb-4">What People Say </h3>
            <div class="cli-ent">
                <section class="slider">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="item g1">
                                    <div class="agile-dish-caption">
                                    <img class="lazyOwl" src="{{Request::root()}}/website/images/t1.jpg" alt="" />
                                        <h5>Michael</h5>
                                        <h4>Best Quality Furniture</h4>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> noooooooooooooooooooooooooooooooooooooooooooooo</p>
                                </div>
                            </li>
                            <li>
                                <div class="item g1">
                                    <div class="agile-dish-caption">
                                    <img class="lazyOwl" src="{{Request::root()}}/website/images/t2.jpg" alt="" />
                                        <h5>don libero</h5>
                                        <h4>Great Place For Great Price</h4>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> noooooooooooooooooooooooooooooooooooooooooooooo.</p>
                                </div>
                            </li>
                            <li>
                                <div class="item g1">
                                    <div class="agile-dish-caption">
                                    <img class="lazyOwl" src="{{Request::root()}}/website/images/t3.jpg" alt="" />
                                        <h5>Elisa</h5>
                                        <h4>Lot Of Furniture Design</h4>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                    <p class="para-w3-agile"><span class="fa fa-quote-left" aria-hidden="true"></span> noooooooooooooooooooooooooooooooooooooooooooooo</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </section>
            </div>
            <!--// Owl-Carousel -->
        </div>
    </div>
</section>
<!--// Clients -->

<!-- latest news -->
<div class="news py-5 my-sm-3">
    <div class="container">
        <h3 class="heading text-capitalize mb-sm-5 mb-4"> Latest News </h3>
        <div class="row news-grids">
            <div class="col-md-4 newsgrid1 text-center">
                <img src="{{Request::root()}}/website/images/1.jpg" alt="news image" class="img-fluid" />
                <h4 class=" mt-4 text-uppercase">Interior Design Tips</h4>
                <p class="mt-4"> Praesent in congue leo, et rutrum justo. Integer porta nulla eu lorem.</p>
                <a href="single.html">View Post</a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5 newsgrid1 text-center">
                <img src="{{Request::root()}}/website/images/2.jpg" alt="news image" class="img-fluid" />
                <h4 class=" mt-4 text-uppercase">Interior Design Tips</h4>
                <p class="mt-4"> Praesent in congue leo, et rutrum justo. Integer porta nulla eu lorem.</p>
                <a href="single.html">View Post</a>
            </div>
            <div class="col-md-4 mt-md-0 mt-5 newsgrid1 text-center">
                <img src="{{Request::root()}}/website/images/3.jpg" alt="news image" class="img-fluid" />
                <h4 class=" mt-4 text-uppercase">Interior Design Tips</h4>
                <p class="mt-4"> Praesent in congue leo, et rutrum justo. Integer porta nulla eu lorem.</p>
                <a href="single.html">View Post</a>
            </div>
        </div>
    </div>
</div>
<!-- //latest news -->






        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

        </div>

   @endsection
    </body>

@section('footer')




   {!! Html::script('website/js/jquery-2.2.3.min.js') !!}
    {!! Html::script('website/js/bootstrap.js') !!} <!-- Necessary-JavaScript-File-For-Bootstrap --> 
    <!-- //js -->
    
    <!-- banner js -->
    {!! Html::script('website/js/snap.svg-min.js') !!}
    {!! Html::script('website/js/main.js') !!} <!-- Resource jQuery -->  
    <!-- //banner js --> 

    <!-- flexSlider --><!-- for testimonials -->
    {!! Html::script('website/js/jquery.flexslider.js') !!}

        <!-- start-smoth-scrolling -->
     {!! Html::script('website/js/SmoothScroll.min.js') !!}
     {!! Html::script('website/js/move-top.js') !!}
     {!! Html::script('website/js/easing.js') !!}

@endsection
