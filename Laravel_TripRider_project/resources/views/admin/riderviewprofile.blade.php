@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{$rider->name}}</h1>
        
    </div>
</div>

<div class="row">
    <div class="col-sm-4" align="center">  
          <table class="table table-striped">
            <tr >
              <td width="40%">Email</td>
              <td class="text-justify">{{$rider->email}}</td>
            </tr>
            <tr >
              <td width="40%">Address</td>
              <td>
                Bashundhara
              </td>
            </tr>
            <tr >
              <td width="40%">Phone number</td>
              <td class="text-justify">{{$rider->phonenumber}}</td>
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
                          <th>Progress</th>
                          <th style="width: 40px">Number</th>
                        </tr>
                        <tr>
                          <td> Complete Rides</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-red">{{$completetrip}}</span></td>
                        </tr>
                        <tr>
                          <td>Pending Rides</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-yellow">{{$pendingtrip}}</span></td>
                        </tr>
                        <tr>
                          <td>On going Rides</td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-blue">{{$ongoingtrip}}</span></td>
                        </tr>
                  </tbody>
                </table>
            </div>
    </div>
<h3>Noraml Trip</h3>

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
