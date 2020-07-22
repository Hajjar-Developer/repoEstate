@extends('admin.layouts.layout')




@section('title')
      Alter settings for website
@endsection

@section('header')





@endsection



@section('content')

 <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Alter settings for website</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="{{url('/adminpannel')}}"> Home </a></li>

              <li class="breadcrumb-item active"><a href="{{url('/adminpannel/sitesitting')}}">  Alter settings for website </a></li>
         

            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>



       <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header" style="margin: 10px">
              <h3 class="card-title">
                

              </h3>
            </div>
            
      {!! Form::open(['url' => '/adminpannel/sitesitting', 'class' => 'form-horizontal', 'method' => 'post'],'files'=> true]) !!}  
  {{csrf_field()}}
    @foreach($sitesetting as $sitting)
        <div class="form-group row">
            <label for="namesetting" class="col-md-4  text-md-right"> name </label>
            <div class="col-lg-3">
              {{$sitting->slug}}
            </div>
            <div class="col-md-9">
              @if($sitting->type==0)
               {!! Form::text($sitting->namesetting, $sitting->value , ['class'=>'form-control']) !!}
              @elseif($sitting->type==3)
               {!! Form::file($sitting->namesetting, $sitting->value , ['class'=>'form-control']) !!}
              @else
               {!! Form::textarea($sitting->namesetting , $sitting->value , ['class'=>'form-control']) !!}
              @endif
                @error($sitting->namesetting)
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

        </div>

    @endforeach
       <div class="form-group">
            <div class="col-lg-10 col-lg-offset-2">
                {!! Form::submit('Add Estate', ['class' => 'btn btn-primary  pull-right'] ) !!}
            </div>
        </div>
  



 {!! Form::close()  !!}
            </div>
            </div>
            </div>
    </section>


@endsection




@section('footer')




@endsection