@extends('layouts.rider')

@section('title')
 Dashboard | Rider
@endsection

@section('content')

    <div class="row">
            <div class="col-6">
                    <h2 class="page-header">Packages</h2>
                </div>
                 <div class="col-6">
                    <a href="{{route('rider.manualtrip')}}"><button class="btn btn-primary float-right" style="font-size:15px">Make your Trip</button></a>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <hr/>

<div class="row">
    @foreach($packages as $package)
	
    <div class="col-md-4" style="padding-left:30px;padding-right:30px;padding-bottom:30px">
        <div class="card cta cta--featured">
          <span class="header-line gradient-color-1"></span>
          <div class="card-block">
            <h3 class="card-title no-margin-top">{{$package->packageName}}<span class="fa fa-map pull-right"></span></h3>
            <h6 class="card-subtitle text-muted">Driver: <b>{{$package->driverName}}</b></h6>
          </div>
          <div class="card-block">
           <img src="/uploads/package/{{$package->image}}" height="200" width="280" class="img-rounded" alt="Cinque Terre"><hr/>
            <p class="card-text" style="text-align: center;">
                <b>From:</b>{{$package->from}}<br/>
                <b>To:</b>{{$package->to}}<br/>
                <b>Length:</b>{{$package->trip_length}}days<br/>
                <b>Max </b> {{$package->total_sits}} people<br/>
               
                <button type="button" class="btn btn-light"><h4 style="color: green;text-align: center;"> {{$package->total_cost}}tk</h4> </button>

                            </p>
           <a href="{{route('rider.packagedetail',$package->id)}}"><button type="button" class="btn btn-success">Details</button></a>
          </div>
        </div>
    </div>

   


	
@endforeach		
 </div>
@endsection