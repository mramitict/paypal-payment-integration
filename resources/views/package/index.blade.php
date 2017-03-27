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
                    Search By
                    <span class="pull-right"><a class="btn btn-success btn-xs" href="{{route('package.create')}}">Create new package</a></span>
                </div>
                <div class="panel-body">
                    <form role="search" action="{{route('package.index')}}" method="get" name="search_form">
                        <div class="col-md-3 col-sm-12 form-group">
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
                        </div>
                        <div class="col-md-3 col-sm-12 form-group">
                            <button type="submit" class="btn btn-block btn-primary" name="search" value="true">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            {{--@include('errors.input')--}}
            <table class="table">
                <thead>
                <tr class="bg-gray">
                    <th>Name</th>
                    <th class="text-center">User</th>
                    <th class="text-center">Form</th>
                    <th class="text-center">Checklist</th>
                    <th class="text-center">Space(GB)</th>
                    <th class="text-center">Image</th>
                    <th class="text-center">Status</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                {{--@foreach ($packages as $package)
                    <tr data-id="{{ $package->idEncrypt() }}">
                        <td>{{$package->name}}</td>
                        <td class="text-center">{{$package->max_user}}</td>
                        <td class="text-center">{{$package->max_form}}</td>
                        <td class="text-center">{{$package->max_checklist}}</td>
                        <td class="text-center">{{$package->max_space}}</td>
                        <td class="text-center">{{$package->max_image}}</td>
                        <td class="text-center">
                            <select name="status">
                                @if($package->status==0)
                                    <option value="0" selected>In Active</option>
                                    <option value="1">Publish</option>
                                    <option value="2">Active</option>
                                @elseif($package->status==1)
                                    <option value="0">In Active</option>
                                    <option value="1" selected>Publish</option>
                                    <option value="2">Active</option>
                                @else
                                    <option value="0">In Active</option>
                                    <option value="1">Publish</option>
                                    <option value="2" selected>Active</option>
                                @endif

                            </select>

                        </td>
                        <td class="text-center">
                            <a title="View" class="btn btn-info" href="{{route('package.show',$package->idEncrypt())}}"><i class="fa fa-eye"></i></a>
                            <a title="Edit" class="btn btn-warning" href="{{route('package.edit',$package->idEncrypt())}}"><i class="fa fa-edit"></i></a>
                            <a title="Delete" class="btn btn-danger"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach--}}
                </tbody>
            </table>
        </div><!-- ./col -->
    </div><!-- /.row -->
<!-- Main row -->
@stop