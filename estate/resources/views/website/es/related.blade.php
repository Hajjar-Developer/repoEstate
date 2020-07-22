@if(count((array)$esinfo) > 0)
    <div class="row">
@foreach( $esinfo  as $key => $e)
 
        
            	
                <div class="col-md-6"> 
                	
                    <!-- Begin Listing: 609 W GRAVERS LN-->
                    <div class="brdr bgc-fff pad-10 box-shad btm-mrg-20 property-listing">
                        <div class="media col-sm-12">
                        	   <div class="col-sm-4">
                            <a class="pull-left">
                            <img src="{{ URL::to('/') }}/images/{{ $e->es_image }}" class="img-thumbnail"  />
                                </div>
                            <div class="media-body col-sm-8">
                                <a href="#" target="_parent"></a>
                                <h4 class="media-heading">
                                  <a href="#" target="_parent">$ {{$e->es_price}}</a></h4>
                                <ul class="list-inline mrg-0 btm-mrg-10 clr-535353">
                                    <li>{{$e->es_sequar}} SqFt </li>
                                </ul>
                                <p >{{$e->es_small_dis}}</p>
                                <span > {{$e->es_name}}  </span>
                              
                              <a href="{{url('/SingelBuilding/'.$e->id)}}" class="btn btn-block bg-gradient-info btn-xs  colorHasan" role="button" style="background-color:#171616; color:blue">Show Detail <span class="fa fa-arrow-circle-o-left" style="..."></span> </a>

                            </div>
                            
                        </div>
                    </div><!-- End Listing-->
                </div>
			 
          
    @endforeach
      </div><!-- End row -->
    <div class="clearfix"></div>
@else
    <div class="alert alert-danger">
      "not found yet"  
    </div>
@endif