@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-sm-12">
        <h1 class="page-header">{{$driver->name}}</h1>
    </div>
</div>

<div class="row">
    <div class="col-sm-4" align="center">  
        <h4 class="page-header" style="color: blue">Level one Driver</h4>
        <h2>Rating</h2>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star checked"></span>
            <span class="fa fa-star"></span>
            <span class="fa fa-star"></span>
        <br> <br>

         <table class="table table-striped">
            <tr >
              <td width="40%">Email</td>
              <td class="text-justify">{{$driver->email}}</td>
            </tr>
            
            <tr >
              <td width="40%">Phone number</td>
              <td class="text-justify">{{$driver->phonenumber}}</td>
            </tr>
          </table>
    </div>
    <div class="col-sm-4" style="color: blue;">
        <div class="row" align="center" >
            <img src="/img/rajesh.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">
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
<h3>Packages Trip</h3>
<div class="row">
    <div class="panel-body">
         <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Driver</th>
                    <th>Package Name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Starting Date</th>
                    <th>End Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($result as $result)
                <tr class="odd gradeX">
                    <td><a href="{{route('admin.driverviewprofile', ['id' => $result->driver_id])}}">{{$result->name}}</a></td>
                    <td><a href="{{route('admin.packagedetails', ['id' => $result->id])}}">Prremium</a></td>
                    <td>{{$result->from}}</td>
                    <td>{{$result->to}}</td>
                    <td class="center">{{$result->start_date}}</td>
                    <td class="center">{{$result->end_date}}</td>
                    <td class="center">{{$result->total_cost}}</td>
                </tr>
                 @endforeach
                
            </tbody>
        </table>
    </div>
</div>

<h3>Manual Trip</h3>
<div class="row">
    <div class="panel-body">
         <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Driver</th>
                    <th>Package Name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Starting Date</th>
                    <th>End Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                @foreach($resultmanultrip as $result)
                <tr class="odd gradeX">
                    <td><a href="{{route('admin.driverviewprofile', ['id' => $result->driver_id])}}">{{$result->name}}</a></td>
                    <td><a href="{{route('admin.packagedetails', ['id' => $result->id])}}">Prremium</a></td>
                    <td>{{$result->from}}</td>
                    <td>{{$result->to}}</td>
                    <td class="center">{{$result->start_date}}</td>
                    <td class="center">{{$result->end_date}}</td>
                    <td class="center">{{$result->cost}}</td>
                </tr>
                 @endforeach
                
            </tbody>
        </table>
    </div>
</div>

@endsection
