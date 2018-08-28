@extends('layouts.rider')

@section('title')
 Dashboard | Rider
@endsection

@section('content')
    <div class="container-fluid">
      <!-- Breadcrumbs
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="#">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">My Dashboard</li>
      </ol>
      <!-- Icon Cards-->
    @if(session('message'))
                <div class=""style="background-color: green;opacity: 0.7;">
                <ul>
                 
                    <li style="color: white">{{session('message')}}</li>
                  
                </ul>
              </div>
                  
    @endif
      <div class="row">

        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden  "> <!--h-100-->
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-comments"></i>
              </div>
              <div class="mr-5">26 New Messages!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-warning o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">11 New Tasks!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">123 Completed Trips!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{route('rider.completedtrips')}}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden ">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-support"></i>
              </div>
              <div class="mr-5">13 New Tickets!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
      </div>
      <!-- Area Chart Example-->
      <div class="card ">
                        <div class="card-header bg-primary text-white">
                            <b>Active Trip</b>
                        </div>
                        
            <div class="card-block">
            <div style="padding:10px">
                                    <p>
                                        <img class="rounded-circle" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Driver</strong><!--<img class="rounded" style="padding-left:15%" width="40%" src="../img/p1.jpg"/>-->
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>From-Bashundhara-To-Narayanganj<br/>Trip Started : 2018-08-28 23:59:59</span>
                                    </p>
                  <i>Phone no: 019xxxxxxxx</i>
                  <hr/>
                  <b style="font-size:16px">Trip Type: Both Way<br/>
                  Payment Status: Half paid<br/>
                  Trip Fare: 120</b>
                  <button class="pull-right btn btn-primary" onclick="window.location='tripsdetails.html'">View</button>
                                </div>
            </div>
                        
                    </div>
          <br/>
          
          <br/>
          <br/>
    <!--pending-->  

          <div class="card ">
                        <div class="card-header bg-warning text-white">
                            <b>Pending Trips</b>
                        </div>
                        
            <div class="card-block">
              <div style="padding:10px">
                
                
                <div class="card">
                <div class="card-block">
                                    <p>
                                        <img class="rounded-circle" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Driver</strong><!--<img class="rounded" style="padding-left:15%" width="40%" src="../img/p1.jpg"/>-->
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>From-Bashundhara-To-Narayanganj<br/>Trip Date : 2018-08-28</span>
                                    </p>
                  <i>Phone no: 019xxxxxxxx</i>
                  <hr/>
                  <b style="font-size:16px">Trip Type: Both Way<br/>
                  Trip Fare: 120</b>
                  <button class="pull-right btn btn-primary" onclick="window.location='pendingtripsdetails.html'">View</button>
                                </div>
                </div>
                
                <br/>
                <br/>
                
                
                
              </div>
            </div>
                        
                    </div>
    
@endsection