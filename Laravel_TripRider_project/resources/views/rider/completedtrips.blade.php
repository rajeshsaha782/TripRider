@extends('layouts.rider')

@section('title')
 Completed Trips | Rider
@endsection

@section('content')


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
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Driver: {{$completedmanualtrip->name}}</strong>
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
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Driver: {{$completedpackagetrips->name}}</strong>
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