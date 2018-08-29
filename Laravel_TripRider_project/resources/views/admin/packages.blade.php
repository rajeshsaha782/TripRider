@extends('layouts.admin')


@section('content')

   @foreach($packages as $package)
            

    <div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            {{$package->packageName}}
        </div>
        <div class="panel-body">

            <img src="/uploads/package/{{$package->image}}" height="200" width="280" class="img-rounded" alt="Cinque Terre">
            <p>
                <b>From:</b>{{$package->from}}<br/>
                <b>To:</b>{{$package->to}}<br/>
                <b>Length:</b>{{$package->trip_length}}days<br/>
                <b>Max </b> {{$package->total_sits}} people<br/>
                <button type="button" class="btn btn-dark"><h4 style="color: green;text-align: center;"> {{$package->total_cost}}tk</h4> </button>
            </p>
            Driver: <a href="{{route('admin.driverviewprofile', ['id' => $package->driver_id])}}">{{$package->driverName}}</a>

        </div>
        <div class="panel-footer">
           <a href="{{route('admin.packagedetails',$package->id)}}"><button type="button" class="btn btn-success">Details</button></a>
        </div>
    </div>
</div>
           
@endforeach     


@endsection
