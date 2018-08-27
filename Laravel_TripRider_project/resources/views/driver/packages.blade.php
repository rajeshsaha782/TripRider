@extends('layouts.driver')

@section('title')
	My Packages |Driver
@endsection

@section('content')

<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Packages</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>

    @foreach($packages as $package)
			
	<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            {{$package->packageName}}
        </div>
        <div class="panel-body">

            <img src="/img/p1.jpg" class="img-rounded" alt="Cinque Terre" style="width: 70%;height: 15%" >
            <p>
                <b>From:</b>{{$package->from}}<br/>
                <b>To:</b>{{$package->to}}<br/>
                <b>Length:</b>{{$package->trip_length}}days<br/>
                <b>Max </b> {{$package->total_sits}} people<br/>
               
                <button type="button" class="btn btn-dark"><h4 style="color: green;text-align: center;"> {{$package->total_cost}}tk</h4> </button>
            </p>
            Driver: <a href="{{route('driver.viewprofile',session('user')->id)}}">{{$package->driverName}}</a>

        </div>
        <div class="panel-footer">
           <a href="{{route('driver.packagedetail',$package->id)}}"><button type="button" class="btn btn-success">Details</button></a>
            <a href="{{route('driver.packageedit',$package->id)}}"><button type="button" class="btn btn-primary">Edit</button></a>
        </div>
    </div>
</div>
			
@endforeach		


@endsection