@extends('layouts.admin')


@section('content')


<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">  {{$package->name}}</h1>
        
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
                          <td><span class="badge bg-red">50</span></td>
                        </tr>
                        <tr>
                          <td>Pending Rides</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-yellow">30</span></td>
                        </tr>
                        <tr>
                          <td>Cancel Rides</td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-blue">20</span></td>
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
                    <th>Starting Date</th>
                    <th>End Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    <td><a href="viewprofilerider.html">rakib</a></td>
                    <td class="center">12-05-18</td>
                    <td class="center">12-05-18</td>
                    <td class="center">1200</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
    
@endsection