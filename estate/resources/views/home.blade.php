@extends('layouts.app')


@section('title')


Home page


@endsection


@section('header')


@endsection


@section('content')

  <!-- banner -->
    <div class="banner" id="home"> 
        <div class="cd-radial-slider-wrapper"> 




            <ul class="cd-radial-slider" data-radius1="60" data-radius2="1364" data-centerx1="110" data-centerx2="1290">
                 <li class="visible"> 
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated Hasan</title>
                            <defs>
                                <clipPath id="cd-image-2">
                                    <circle id="cd-circle-2" cx="110" cy="400" r="1364"/>
                                </clipPath>
                            </defs> 
                            <image height='800px' width="1400px" clip-path="url(#cd-image-2)" xlink:href="{{Request::root()}}/website/images/2.jpg"></image>
                        </svg>
                    </div> <!-- .svg-wrapper --> 
                    <div class="cd-radial-slider-content">
                        <div class="wrapper">
                            <div class="text-center">

                                <h2>  Hajjar   </h2>
                                <h5> find your home for Real Estate </h5>
                                <a href="search" class="read">Search for the best your demand <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li> 
              
                <li class="next-slide">
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-1">
                                    <circle id="cd-circle-1" cx="1290" cy="400" r="60"/>
                                </clipPath>
                            </defs> 
                            <image height='800px' width="1400px" clip-path="url(#cd-image-1)" xlink:href="{{Request::root()}}/website/images/1.jpg"></image>
                        </svg>
                    </div> <!-- .svg-wrapper --> 
                    <div class="cd-radial-slider-content text-center">
                        <div class="wrapper">
                            <div class="text-center"> 
                                  <h2>Hajjar   </h2>
                                <h3> find your home for Real Estate </h3>
                                <a href="search" class="read">Search for the best your demand <i class="fas fa-caret-right"></i></a>
                                
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li> 

               
                
                <li>
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-3">
                                    <circle id="cd-circle-3" cx="110" cy="400" r="60"/>
                                </clipPath>
                            </defs> 
                            <image height='800px' width="1400px" clip-path="url(#cd-image-3)" xlink:href="{{Request::root()}}/website/images/3.jpg"></image>
                            
                        </svg>
                    </div> <!-- .svg-wrapper --> 
                    <div class="cd-radial-slider-content text-center">
                        <div class="wrapper">
                            <div class="text-center"> 
                                <h2>Hajjar   </h2>
                                <h3> find your home for Real Estate </h3>
                                <a href="search" class="read">Search for the best your demand <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li> 
                <li class="prev-slide">
                    <div class="svg-wrapper">
                        <svg viewBox="0 0 1400 800">
                            <title>Animated SVG</title>
                            <defs>
                                <clipPath id="cd-image-4">
                                    <circle id="cd-circle-4" cx="110" cy="400" r="60"/>
                                </clipPath>
                            </defs> 
                            <image height='800px' width="1400px" clip-path="url(#cd-image-4)" xlink:href="{{Request::root()}}/website/images/4.jpg"></image>
                        </svg>
                    </div> <!-- .svg-wrapper --> 
                    <div class="cd-radial-slider-content text-center">
                        <div class="wrapper">
                            <div class="text-center"> 
                             <h2>Hajjar   </h2>
                                <h3> find your home for Real Estate </h3>
                                <a href="search" class="read">Search for the best your demand <i class="fas fa-caret-right"></i></a>
                            </div>
                        </div>
                    </div> <!-- .cd-radial-slider-content -->
                </li> 
            </ul> <!-- .cd-radial-slider --> 
            <ul class="cd-radial-slider-navigation">
                <li><a href="#0" class="next"><i class="fas fa-chevron-right"></i></a></li>
                <li><a href="#0" class="prev"><i class="fas fa-chevron-left"></i></a></li>
            </ul> <!-- .cd-radial-slider-navigation -->
        </div> <!-- .cd-radial-slider-wrapper --> 
    </div>
<!-- //banner --> 
content

@endsection
