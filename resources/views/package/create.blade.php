@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>
        Package
        <small>Management</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Package</li>
    </ol>
    @endsection

    @section('content')
            <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Create Package
                </div>
                <div class="panel-body">
                    <form class="form-horizontal" role="search" action="{{route('package.index')}}" method="get" name="search_form">
                        {{--<div class="col-md-3 col-sm-12 form-group">
                            <input type="text" class="form-control" name="name" placeholder="Package name">
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <input type="text" class="form-control" name="user" placeholder="No of user(s)">
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <input type="text" class="form-control" name="form" placeholder="No of form(s)">
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <input type="text" class="form-control" name="checklist" placeholder="No of checklist(s)">
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <input type="text" class="form-control" name="space" placeholder="Space(GB)">
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <input type="text" class="form-control" name="image" placeholder="No of image(s)">
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <select name="status" class="form-control">
                                <option value="">-- Select Status --</option>
                                <option value="0">In Active</option>
                                <option value="1">Publish</option>
                                <option value="2">Active</option>
                            </select>
                        </div>--}}
                        {{--<div class="col-md-3 col-sm-12 form-group">
                            <button type="submit" class="btn btn-block btn-primary" name="search" value="true">Search</button>
                        </div>--}}
                    </form>
                </div>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->
@stop