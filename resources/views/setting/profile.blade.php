@extends('adminlte::page')

@section('title', 'Profile Management')

@section('content_header')
    <h1>
        Profile
        <small>Management</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Profile</li>
    </ol>
    @endsection

    @section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12 col-xs-12">

        </div><!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->
@stop