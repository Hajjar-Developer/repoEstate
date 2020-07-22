@extends('layouts.app')


@section('title')


All Estates


@endsection


@section('header')

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
        background-color: #1a5996;
    } 
      .itemsearch{
        
        margin-bottom: 12px;
    } 
      .breadcrumb{
      background-color: #171616;
    }


 </style>



@endsection


@section('content')
 


 <div class="container-fluid" >
        <div class="container container-pad" id="property-listings">
            
            <div class="row">
              <div class="col-md-9">
                <h1>Million Dollar Home Listings</h1>
                <p style="font-weight: bold;">A snippet I recently used to display homes for a local brokerage.  Focused more on images when accessed through mobile</p>
                <br>
              </div>

               <div class="col-md-3">

     

          
          </div>
            </div>
  
        </div><!-- End container -->



<div class="container dis" >
    <div class="row profile">
        <div class="col-md-3" >
            <div class="profile-sidebar dis2">
              
              <h2 style="margin:10px"> Advanced search </h2>

                  <div class="profile-usermenu" >
                    {!! Form::open(['url'=>'search','action'=>'post'])!!}
                   {{ csrf_field() }}
                    
                    <ul class="nav-link nav nav-pills nav-sidebar flex-column">
                       <li class="itemsearch">
                        {!! Form::text('es_price_from',null, ['class'=>'form-control','placeholder'=>'Price from'])!!}
                       </li>
                       <li class="itemsearch">
                       {!! Form::text('es_price_to',null, ['class'=>'form-control','placeholder'=>'Price to'])!!}
                       </li>
                       <li class="itemsearch">
                        {!! Form::select('es_rooms',es_room_number(), null, ['class'=>'form-control','placeholder'=>'Number of rooms'])!!}
                       </li>
                       <li class="itemsearch">
             {!! Form::select('es_type',es_type(), null, ['class'=>'form-control','placeholder'=>'Type'])!!}
                       </li>
                       <li class="itemsearch">
              {!! Form::select('es_rent',es_rent(), null, ['class'=>'form-control','placeholder'=>'Rent'])!!}
                       </li>
                       <li class="itemsearch">
         {!! Form::text('es_sequar', null, ['class'=>'form-control' ,'placeholder'=>'Sequar'])!!}
                       </li>
                       <li class="itemsearch">
                {!! Form::submit("search", ['class'=>'banner_btn' ])!!}
                       </li>
                    </ul>
                    {!! Form::close()!!}
                 </div>

              <hr>
              <hr>
              <br>

          </div>
             <div class="profile-sidebar dis2" style="background-color:#1a5996">
               
              <h5 style="margin:3px">
                  Advanced estates
              </h5>



             
                <div class="profile-usermenu" >
                    <ul class="nav-link nav nav-pills nav-sidebar flex-column">
                        <li class="active">
                            <a href="{{url('/ShowAllBuilding')}}">
                            <i class="glyphicon glyphicon-user"></i>All esate </a>
                        </li>
                 </ul>
                 <ul class="nav-link nav nav-pills nav-sidebar flex-column">
                        <li class="active">
                            <a href="{{url('/forRent')}}">
                            <i class="glyphicon glyphicon-user"></i>
                           For Rent  </a>
                        </li>

                        <li class="active">
                            <a href="{{url('/forBuy')}}" >
                          <i class="glyphicon glyphicon-user"></i>
                           For Buy </a>
                        </li>

                        <li class="active">
                            <a href="{{url('/forMortgage')}}" >
                          <i class="glyphicon glyphicon-user"></i>
                           For mortgage </a>
                        </li>
                       
                      
                    </ul>
                    <ul  class="nav-link nav nav-pills nav-sidebar flex-column">
                          <li class="active">
                            <a href="{{url('/type/0')}}">
                       <i class="glyphicon glyphicon-user"></i>
                            flat </a>
                        </li>
                           <li class="active">
                            <a href="{{url('/type/1')}}">
                       <i class=" glyphicon-user"></i>
                           villa </a>
                        </li>
                           <li class="active">
                            <a href="{{url('/type/2')}}">
                       <i class=" glyphicon-user"></i>
                           normal </a>
                      </li>
                    </ul>
                </div>
                <!-- END MENU -->
            </div>
        </div>


        <div class="col-md-9">

           <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a> </li>

                @if(isset($array))
                 @if(!empty($array))
                    @foreach ($array as $key => $value)
                        <li class="breadcrumb-item" ><a href="{{url('/search?'.$key.'='.$value)}}">
                            {{search_name_field()[$key]}} ->
                            @if($key=='es_type') {{es_type()[$value]}}
                            @elseif($key=='es_rent') {{es_rent()[$value]}}
                            @elseif($key=='es_place') {{es_place()[$value]}}
                            @else {{$value}}
                            @endif

                         </a></li>
                    @endforeach 
                  @endif
               @endif
            </ol>




            <div class="profile-content">
                @include('website.es.sharefile')
                
            </div>
        </div>
    </div>
</div>
                <div >
                    {{$esAll->appends(Request::except('page'))}}
                </div>
<center>
<strong>Powered by <a href="/" target="_blank">Hasan IT</a></strong>
</center>
<br>
<br>

 </div>

      

@endsection