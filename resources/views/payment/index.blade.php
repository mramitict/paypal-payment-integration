@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>
        Subscription
        <small>Management</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{url('/home')}}"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Subscription</li>
    </ol>
    @endsection

    @section('content')
    <!-- Small boxes (Stat box) -->
    <div class="row">
        <div class="col-md-12 col-xs-12">
            <div class="panel panel-info">
                <div class="panel-heading">
                    Choose Package
                    <span class="pull-right"></span>
                </div>
                <div class="panel-body">
                    <form action="{{route('payment.create')}}" method="post" class="form-horizontal">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label class="control-label col-sm-2" for="email">Amount:</label>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="amount" placeholder="Enter Amount">
                            </div>
                            <div class="col-sm-2"><input type="submit" class="btn btn-info" value="Pay Now"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div><!-- ./col -->
    </div><!-- /.row -->
    <!-- Main row -->
@stop