@extends('adminlte::page')

@section('title', 'User Management')

@section('content_header')
    <h1>
        User
        <small>Management</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">User</li>
    </ol>
    @endsection

    @section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12 col-sm-12">
            @include('flash::message')
            <div class="panel panel-info">
                <div class="panel-heading">
                    Search By
                    <span class="pull-right"><a class="btn btn-success btn-xs" href="{{route('user.create')}}">Create new user</a></span>
                </div>
                <div class="panel-body">
                    <form role="search" action="{{route('user.index')}}" method="get" name="search_form">
                        <div class="{{auth()->user()->isA('admin')?'col-md-2':'col-md-3'}} col-sm-12 form-group">
                            <select name="role" id="role" class="form-control">
                                <option value="">--- Select Role ---</option>
                                @foreach($roles as $role)
                                    <option value="{{$role}}">{{ucfirst($role)}}</option>
                                @endforeach
                            </select>
                        </div>
                        @if(auth()->user()->isA('admin'))
                            <div class="col-md-4 col-sm-12 form-group">
                                <select name="company" id="company" class="form-control">
                                    <option value="">--- Select Company ---</option>
                                    {{--@foreach($companies as $key => $value)
                                        <option value="{{$key}}">{{$value}}</option>
                                    @endforeach--}}
                                </select>
                            </div>
                        @endif
                        <div class="{{auth()->user()->isA('admin')?'col-md-2':'col-md-3'}} col-sm-12 form-group">
                            <input type="text" class="form-control" name="name" placeholder="User name">
                        </div>
                        <div class="{{auth()->user()->isA('admin')?'col-md-2':'col-md-3'}} col-sm-12 form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email">
                        </div>

                        <div class="{{auth()->user()->isA('admin')?'col-md-2':'col-md-3'}} col-sm-12 form-group">
                            <button type="submit" class="btn btn-block btn-primary" name="search" value="true">Search</button>
                        </div>
                    </form>
                </div>
            </div>
            <table class="table">
                <thead>
                <tr class="bg-gray">
                    <th>Name</th>
                    <th>E-Mail</th>
                    {{--@if(auth()->user()->isA('admin'))<th>Company</th>@endif--}}
                    <th class="text-center">Role</th>
                    <th class="text-center">Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        {{--@if(auth()->user()->isA('admin'))<td>{{isset($user->company->name)?$user->company->name:'N/A'}}</td>@endif--}}
                        <td class="text-center">
                            @if($user->roles->isEmpty())
                                <span class="label label-default">Not Assigned</span>
                            @else
                                @foreach($user->roles->pluck('name') as $role)
                                    <span class="label label-{{config('design.color.'.$role)}}">{{$role}}</span>
                                @endforeach
                            @endif
                        </td>
                        <td class="text-center">
                            <a title="View" class="btn btn-info" href="{{route('user.show',$user->slug)}}"><i class="fa fa-eye"></i></a>
                            <a title="Edit" class="btn btn-warning" href="{{route('user.edit',$user->slug)}}"><i class="fa fa-edit"></i></a>
                            <a title="Delete" class="btn btn-danger" data-id="{{ $user->slug }}"><i class="fa fa-trash-o"></i></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div><!-- ./col -->
        <div class="col-sm-12 col-md-12"><span class="pull-right">{{$users->links()}}</span></div>
    </div><!-- /.row -->
    <!-- Main row -->
@stop