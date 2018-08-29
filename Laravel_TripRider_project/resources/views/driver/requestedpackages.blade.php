@extends('layouts.driver')

@section('title')
 Pending Package Requests | Driver
@endsection

@section('content')


@if(count($requestedpackages)!=0)
          <div class="panel panel-red ">
                        <div class="panel-heading">
                            <b>Pending Package Requests</b>
                        </div>
                        
            <div class="panel-body">
              <div style="padding:10px">
                
                @foreach($requestedpackages as $requestedpackage)
                <div class="panel panel-danger">
                <div class="panel-body">
                                    <p>
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Rider: {{$requestedpackage->name}}</strong>
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>
                                            <b>From</b>-{{$requestedpackage->from}}<br/>
                                            <b>To</b>-{{$requestedpackage->to}}<br/>
                                            <b>Trip Started</b>- {{$requestedpackage->start_date}}<br/>
                                            <b>Trip Ended</b>- {{$requestedpackage->end_date}}<br/>
                                        </span>
                                    </p>
                  <i>Phone no: {{$requestedpackage->phonenumber}}</i>
                  <hr/>
                  <b style="font-size:16px">Trip Type: {{$requestedpackage->trip_type}}<br/>
                  Trip Fare: {{$requestedpackage->total_cost}}Tk</b>
                  <a href="{{route('driver.requestedpackagedetail',$requestedpackage->bid)}}"><button class="pull-right btn btn-primary" >View</button></a>
                                </div>
                </div>
                <hr/>
                @endforeach
                <br/>
                <br/>
                
                
                
              </div>
            </div>
                        
                    </div>
     @endif


    

@endsection