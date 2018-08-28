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
                                    <div class="huge">12</div>
                                    <div>Total Active Trips</div>
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
                                    <div class="huge">124</div>
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
				<div class="col-lg-12">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            Active Trip
                        </div>
                        
						<div class="panel-body">
                                     <p>
                                        <img class="rounded" width="10%" src="../img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Rider</strong><!--<img class="rounded" style="padding-left:15%" width="40%" src="../img/p1.jpg"/>-->
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>From-Bashundhara-To-Narayanganj<br/>Trip Started : 2018-08-28 23:59:59</span>
                                    </p>
                                    <i>Phone no: 019xxxxxxxx</i>
                                    <hr/>
                                    <b style="font-size:16px">Trip Type: Both Way<br/>
                                    Payment Status: Half paid<br/>
                                    Trip Fare: 120</b>
                                    <button class="pull-right btn btn-primary" onclick="window.location='activetrip.html'">View</button>
                                </div>
                        
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
			</div>
			
			<div class="row">
				<div class="col-lg-12">
                    <div class="panel panel-yellow">
                        <div class="panel-heading">
                            Rider Requested Trips for Texi
                        </div>
                        
						<div class="panel-body">
                            <div class="panel panel-default">
                                    <p>
                                        <img class="rounded" width="10%" src="../img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Rider</strong><!--<img class="rounded" style="padding-left:15%" width="40%" src="../img/p1.jpg"/>-->
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>From-Bashundhara-To-Narayanganj</span>
                                    </p>
                                    <button class="pull-right btn btn-primary" onclick="window.location='pendingtrip.html'">View</button>
                                    <i>Phone no: 019xxxxxxxx</i><br/><br/>
                                    <b style="font-size:16px">Trip Type: Both Way<br/>
                                    Trip Fare: 120</b>
                                    </div>
                                    
                                    <hr/>      
                        </div>
                        
                    </div>
                    <!-- /.col-lg-4 -->
                </div>
			</div>
@endsection