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

        <!-- <div class="col-xl-3 col-sm-6 mb-3">
          <div class="card text-white bg-primary o-hidden  "> 
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
        </div> --> 
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-danger o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-list"></i>
              </div>
              <div class="mr-5">{{count($requestedmanualtrips) + count($requestedpackagetrips)}} Pending Trips!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="#">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <div class="col-xl-6 col-sm-6 mb-3">
          <div class="card text-white bg-success o-hidden">
            <div class="card-body">
              <div class="card-body-icon">
                <i class="fa fa-fw fa-shopping-cart"></i>
              </div>
              <div class="mr-5">{{$totalcompletedtrips}} Completed Trips!</div>
            </div>
            <a class="card-footer text-white clearfix small z-1" href="{{route('rider.completedtrips')}}">
              <span class="float-left">View Details</span>
              <span class="float-right">
                <i class="fa fa-angle-right"></i>
              </span>
            </a>
          </div>
        </div>
        <!-- <div class="col-xl-3 col-sm-6 mb-3">
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
        </div> -->
      </div>
      <!-- Area Chart Example-->
      @if($activetrip!=null)
      <div class="card ">
                    <div class="card-header bg-primary text-white">
                        <b>Active Trip</b>
                    </div>
                    
        <div class="card-block">
        <div style="padding:10px">
              <p>
                  <img class="rounded-circle" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Driver:{{$activetrip->name}}</strong>
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
             <a href="{{route('rider.requestedtripdetail',$activetrip->id)}}"><button class="pull-right btn btn-primary" >View</button></a>
                                </div>
                            </div>
        </div>
                    
                </div>
                 @endif
          <br/>
          
          <br/>
          <br/>
    <!--pending-->  
 @if(count($requestedmanualtrips)!=0)
          <div class="card ">
                        <div class="card-header bg-warning text-white">
                            <b>Pending Your Requested Trips</b>
                        </div>
                        
            <div class="card-block">
              <div style="padding:10px">
                
                @foreach($requestedmanualtrips as $requestedmanualtrip)
                <div class="card">
                <div class="card-block">
                                    <p>
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Rider: {{$requestedmanualtrip->name}}</strong>
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>
                                            <b>From</b>-{{$requestedmanualtrip->from}}<br/>
                                            <b>To</b>-{{$requestedmanualtrip->to}}<br/>
                                            <b>Trip Started</b>- {{$requestedmanualtrip->start_date}}<br/>
                                            <b>Trip Ended</b>- {{$requestedmanualtrip->end_date}}<br/>
                                        </span>
                                    </p>
                  <i>Phone no: {{$requestedmanualtrip->phonenumber}}</i>
                  <hr/>
                  <b style="font-size:16px">Car Type: {{$requestedmanualtrip->car_type}}<br/>
                  Trip Type: {{$requestedmanualtrip->trip_type}}<br/>
                  Trip Fare: {{$requestedmanualtrip->total_cost}}Tk</b>
                  <a href="{{route('rider.requestedtripdetail',$requestedmanualtrip->id)}}"><button class="pull-right btn btn-primary" >View</button></a>
                                </div>
                </div>
                @endforeach
                <br/>
                <br/>
                
                
                
              </div>
            </div>
                        
                    </div>
     @endif

     @if(count($requestedpackagetrips)!=0)
          <div class="card ">
                        <div class="card-header bg-secondary text-white">
                            <b>Pending Package Request Trips</b>
                        </div>
                        
            <div class="card-block">
              <div style="padding:10px">
                
                @foreach($requestedpackagetrips as $requestedpackagetrip)
                <div class="card">
                <div class="card-block">
                                    <p>
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Driver: {{$requestedpackagetrip->name}}</strong>
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>
                                            <b>From</b>-{{$requestedpackagetrip->from}}<br/>
                                            <b>To</b>-{{$requestedpackagetrip->to}}<br/>
                                            <b>Trip Started</b>- {{$requestedpackagetrip->start_date}}<br/>
                                            <b>Trip Ended</b>- {{$requestedpackagetrip->end_date}}<br/>
                                        </span>
                                    </p>
                  <i>Phone no: {{$requestedpackagetrip->phonenumber}}</i>
                  <hr/>
                  <b style="font-size:16px">Trip Type: {{$requestedpackagetrip->trip_type}}<br/>
                  Trip Fare: {{$requestedpackagetrip->total_cost}}Tk</b>
                  <button class="pull-right btn btn-primary" onclick="window.location='pendingtripsdetails.html'">View</button>
                                </div>
                </div>
                @endforeach
                <br/>
                <br/>
                
                
                
              </div>
            </div>
                        
                    </div>
     @endif
    
@endsection