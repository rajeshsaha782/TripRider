@extends('layouts.admin')


@section('content')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">  {{$package->title}}</h1>
        
    </div>
</div>


            <!-- /.row -->
<div class="row">
    <div class="col-sm-4" align="center">  

        <h4 class="page-header" style="color: blue">Driver : <a href="{{route('admin.driverviewprofile', ['id' => $package->driver_id])}}">{{$driver->name}}</a></h4>
        <h2>Rating</h2>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
            <br/>
                    {{$package->from}}- {{$package->to}}<br/>
                    2days-3nights<br/>
                    {{$package->total_cost}}tk<br/>
    </div>
            
    <div class="col-sm-4" style="color: blue;">
        <div class="row" align="center" >
            <img src="/img/rajesh.jpg" class="img-rounded" alt="Cinque Terre" style="width: 90%;height: 25%">
        </div>
    </div>
    <div class="col-sm-4" align="center">
                <table class="table table-bordered" style="width: 100%;shape-margin: 0">
                    <tbody>
                        <tr>
                          <th>Task</th>
                          <th style="width: 40px">Number</th>
                        </tr>
                        <tr>
                          <td> Complete Rides</td>
                          <td><span class="badge bg-red">{{$completetrip}}</span></td>
                        </tr>
                        <tr>
                          <td>Pending Rides</td>
                          <td><span class="badge bg-yellow">{{$pendingtrip}}</span></td>
                        </tr>
                        <tr>
                          <td>Cancel Rides</td>
                          <td><span class="badge bg-light-blue">{{$ongoingtrip}}</span></td>
                        </tr>
                  </tbody>
                </table>
                                         
            </div>

    </div>
<div class="row">
    <div class="panel-body">
        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Rider</th>
                    <th>Title</th>
                    <th>From</th>
                    <th>To</th>

                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
             @foreach($packages as $package)

                <tr class="odd gradeX">
                   
                    <td><a href="viewprofilerider.html">{{$package->name}}</a></td>
                    <td class="center">{{$package->title}}</td>
                    <td class="center">{{$package->from}}</td>
                    <td class="center">{{$package->to}}</td>
                    <td class="center">{{$package->total_cost}}</td>

                </tr>
                        @endforeach

            </tbody>
        </table>
    </div>
</div>
    
@endsection