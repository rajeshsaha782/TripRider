@extends('layouts.rider')

@section('title')
 Dashboard | Rider
@endsection

@section('content')

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
                  <b style="font-size:16px">Trip Type: {{$requestedmanualtrip->trip_type}}<br/>
                  Trip Fare: {{$requestedmanualtrip->total_cost}}Tk</b>
                  <a href="{{route('rider.requestedtripdetail',$requestedmanualtrip->id)}}"><button class="pull-right btn btn-primary" >View</button>
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
    @if(count($completedmanualtrips)!=0)
          <div class="card ">
                        <div class="card-header bg-success text-white">
                            <b>Completed Requested Trips</b>
                        </div>
                        
            <div class="card-block">
              <div style="padding:10px">
                
                @foreach($completedmanualtrips as $completedmanualtrip)
                <div class="card">
                <div class="card-block">
                                    <p>
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Rider: {{$completedmanualtrip->name}}</strong>
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>
                                            <b>From</b>-{{$completedmanualtrip->from}}<br/>
                                            <b>To</b>-{{$completedmanualtrip->to}}<br/>
                                            <b>Trip Started</b>- {{$completedmanualtrip->start_date}}<br/>
                                            <b>Trip Ended</b>- {{$completedmanualtrip->end_date}}<br/>
                                        </span>
                                    </p>
                  <i>Phone no: {{$completedmanualtrip->phonenumber}}</i>
                  <hr/>
                  <b style="font-size:16px">Trip Type: {{$completedmanualtrip->trip_type}}<br/>
                  Trip Fare: {{$completedmanualtrip->total_cost}}Tk</b>
                  <a href="{{route('rider.requestedtripdetail',$completedmanualtrip->id)}}"><button class="pull-right btn btn-primary" >View</button></a>
                                </div>
                </div>
                @endforeach
                <br/>
                <br/>
                
                
                
              </div>
            </div>
                        
                    </div>
     @endif


     @if(count($completedpackagetrips)!=0)
          <div class="card ">
                        <div class="card-header bg-success text-white">
                            <b>Completed Package Trips</b>
                        </div>
                        
            <div class="card-block">
              <div style="padding:10px">
                
                @foreach($completedpackagetrips as $completedpackagetrips)
                <div class="card">
                <div class="card-block">
                                    <p>
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Rider: {{$completedpackagetrips->name}}</strong>
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>
                                            <b>From</b>-{{$completedpackagetrips->from}}<br/>
                                            <b>To</b>-{{$completedpackagetrips->to}}<br/>
                                            <b>Trip Started</b>- {{$completedpackagetrips->start_date}}<br/>
                                            <b>Trip Ended</b>- {{$completedpackagetrips->end_date}}<br/>
                                        </span>
                                    </p>
                  <i>Phone no: {{$completedpackagetrips->phonenumber}}</i>
                  <hr/>
                  <b style="font-size:16px">Trip Type: {{$completedpackagetrips->trip_type}}<br/>
                  Trip Fare: {{$completedpackagetrips->total_cost}}Tk</b>
                  <a href="{{route('rider.requestedtripdetail',$completedpackagetrips->id)}}"><button class="pull-right btn btn-primary" >View</button></a>
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