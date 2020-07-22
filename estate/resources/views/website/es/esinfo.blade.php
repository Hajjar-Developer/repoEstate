@extends('layouts.app')


@section('title')


Information of the estate: {{$esinfo->es_name}}


@endsection


@section('header')



 <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAvu55dhvD8NYS6SW3icAqvmnkyBozeq7k&callback=initMap"
  type="text/javascript"></script>

 {!! Html::style('cus/esall.css') !!}
 
 <style type="text/css">
    hr{
        margin-top: 10px;
        margin-bottom: 10px;
    } 
      .dis{
        padding-top: 10px;
        padding-bottom: 10px;
        margin-bottom: 10px;
    } 
       .dis2{
        padding-top: 10px;
        padding-bottom: 10px;
        padding-left: : 33px;
        padding-right: : 10px;
        margin-bottom: 10px;
    } 
      .itemsearch{
        
        margin-bottom: 12px;
    } 
      .breadcrumb{
      background-color: #171616;
    }
    .ref{
      font-size: 24px;      background-color:black;     padding: 10px;  
           margin: 12px  ;
    }
   

 </style>



@endsection


@section('content')

        <div class="col-md-9">
           <ol class="breadcrumb">
                <li><a href="{{url('/')}}">Home</a> </li>
                <li><a href="{{url('/ShowAllBuilding')}}">All estate</a> </li>
                <li><a href="{{url('/SingleBuilding/'.$esinfo->id)}}">{{$esinfo->es_name}}</a> </li>
                
           </ol>
            <div class="profile-content ">
              <h1 class="ref" >
                {{$esinfo->es_name}}
              </h1>
              <hr>
              <div class="btn-group" role="group">
                <a href="{{url('/search?es_price'.$esinfo->es_price)}}" class="btn ref"> Price: {{$esinfo->es_price}} 
                </a>
                  <a href="{{url('/search?es_sequar='.$esinfo->es_sequar)}}" class="btn ref"> Sequar: {{$esinfo->es_sequar}} 
                </a>
                  <a href="{{url('/search?es_place='.$esinfo->es_place)}}" class="btn ref btn-default"> Place: {{es_place()[$esinfo->es_place]}} 
                </a>
                  <a href="{{url('/search?es_rooms='.$esinfo->es_rooms)}}" class="btn ref btn-default"> Number of rooms: {{$esinfo->es_rooms}} 
                </a>
                  <a href="{{url('/search?es_type='.$esinfo->es_type)}}" class="btn ref btn-default"> Type: {{es_type()[$esinfo->es_type]}} 
                </a>
                  <a href="{{url('/search?es_rent='.$esinfo->es_rent)}}" class="btn ref btn-default"> Type of operation: {{es_rent()[$esinfo->es_rent]}} 
                </a>
              </div>
              <p class="ref">
                {!! nl2br($esinfo->es_larg_dis)!!}
              </p>
             <img src="{{ URL::to('/') }}/images/{{ $esinfo->es_image }}" class="img-thumbnail"  />
                @include('website.es.pages')
                

                <div id="googleMap" style="width:100%;height:400px;">
                  
                </div>




            </div>
            <br>
                <p style="font-size: 28px; color: blue" class="breadcrumb" >
                the related Estates to your search
                </p>
              
              <div class="profile-content">
               @include('website.es.related',['esinfo'=>$same_rent])
               @include('website.es.related',['esinfo'=>$same_type])
                </div>
        </div>

@endsection





@section('footer')
    <script>
        function initMap() {
            // The location of Uluru
            var uluru = {lat: 36.20124, lng: 37.16117};
            // The map, centered at Uluru
            var map = new google.maps.Map(
                document.getElementById('googleMap'), {zoom: 15, center: uluru});
            // The marker, positioned at Uluru
            var marker = new google.maps.Marker({position: uluru, map: map});
        }
    </script>


@endsection