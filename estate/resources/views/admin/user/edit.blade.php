@extends('admin.layouts.layout')




@section('title')
       Edit user
       {{$user->name}}
@endsection

@section('header')





@endsection



@section('content')
     
{!!Form::model($user, ['route' => ['adminpannel.users.edit', $user->id], 'method' => 'PATCH']) !! }
       @include('admin.user.form')
{!! Form::close() !!}     



@endsection




@section('footer')




@endsection