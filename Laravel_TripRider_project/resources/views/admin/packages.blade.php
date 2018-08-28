@extends('layouts.admin')


@section('content')

  @foreach($packages as $packages)
<div class="col-sm-4">
    <div class="panel panel-primary">
        <div class="panel-heading">
            {{$packages->name}}
        </div>
        <div class="panel-body">

            <img src="../img/p1.jpg" class="img-rounded" alt="Cinque Terre" style="width: 70%;height: 15%" >
            <p>
                {{$packages->from}}- {{$packages->to}}<br/>
                2days-3nights<br/>
                {{$packages->total_cost}}tk<br/>
            </p>
            Driver: <a href="{{route('admin.driverviewprofile', ['id' => $packages->driver_id])}}">Rifat</a>

        </div>
        <div class="panel-footer">
            <a href="{{route('admin.packagedetails',['id' => $packages->id])}}"><button type="button" class="btn btn-success">Details</button></a>
        </div>
    </div>
</div>
        @endforeach



@endsection
