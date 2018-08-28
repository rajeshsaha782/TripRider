@extends('layouts.driver')

@section('title')
	Dashboard |Driver
@endsection

@section('content')
<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Dashboard</h2>
                </div>

                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            @if(session('message'))
                    <div class="card-body"style="background-color: green;opacity: 0.7;">
                    <ul>
                     
                        <li style="color: white">{{session('message')}}</li>
                      
                    </ul>
                  </div>
              
            @endif
            <div class="row">
                <div class="col-md-3">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-cubes fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{$totalPackages}}</div>
                                    <div>Total Packages</div>
                                </div>
                            </div>
                        </div>
                        <a href="{{route('driver.packages')}}">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-car fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">1</div>
                                    <div>Total Completed Trips</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-shopping-cart fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">{{count($requestedtrips)}}</div>
                                    <div>Requested Texi Trips</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class=" col-md-3">
                    <div class="panel panel-red">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="fa fa-support fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">13</div>
                                    <div>Requests</div>
                                </div>
                            </div>
                        </div>
                        <a href="#">
                            <div class="panel-footer">
                                <span class="pull-left">View Details</span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
			
			<div class="row">
                @if($activetrip!=null)
				<div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Active Trip
                        </div>
                        
                        
						<div class="panel-body">
                                     <p>
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Rider:{{$activetrip->name}}</strong><!--<img class="rounded" style="padding-left:15%" width="40%" src="../img/p1.jpg"/>-->
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>
                                            <b>From</b>-{{$activetrip->from}}<br/>
                                            <b>To</b>-{{$activetrip->to}}<br/>
                                            <b>Trip Started</b>- {{$activetrip->start_date}}<br/>
                                            <b>Trip Ended</b>- {{$activetrip->end_date}}<br/>
                                        </span>
                                    </p>
                                    <i>Phone no: {{$activetrip->phonenumber}}</i>
                                    <hr/>
                                    <b style="font-size:16px">Trip Type: {{$activetrip->trip_type}}<br/>
                                    Payment Status: {{$activetrip->payment_info}}<br/>
                                    Trip Fare: {{$activetrip->total_cost}}Tk</b>
                                    <button class="pull-right btn btn-primary" onclick="window.location='activetrip.html'">View</button>
                                </div>
                        
                        
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
                @endif
			</div>
			

            @if($requestedtrips!=null)
			<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Rider Requested Trips for Texi
                        </div>
                        
						<div class="panel-body">
                            @foreach($requestedtrips as $requestedtrip)
                            <div class="panel panel-default">
                                    <p>
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Rider: {{$requestedtrip->name}}</strong>
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>
                                            <b>From</b>-{{$requestedtrip->from}}<br/>
                                            <b>To</b>-{{$requestedtrip->to}}<br/>
                                            <b>Trip Started</b>- {{$requestedtrip->start_date}}<br/>
                                            <b>Trip Ended</b>- {{$requestedtrip->end_date}}<br/>
                                        </span>
                                    </p>
                                    <button class="pull-right btn btn-primary" onclick="window.location='pendingtrip.html'">View</button>
                                    <i>Phone no: {{$requestedtrip->phonenumber}}</i><br/><br/>
                                    <b style="font-size:16px">Trip Type: {{$requestedtrip->trip_type}}<br/>
                                    Trip Fare: {{$requestedtrip->total_cost}}</b>
                                    </div>
                                    
                                    <hr/>   
                            @endforeach   
                        </div>
                        
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
			</div>
            @endif
@endsection