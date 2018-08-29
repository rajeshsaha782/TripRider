@extends('layouts.rider')

@section('title')
	Trip Detail |Rider
@endsection


@section('mapjs')

  {!! $map['js'] !!}
@endsection

@section('content')
    <div class="card">
                        <div class="card-header ">
                            Trip Detail
                        </div>
                        <!-- /.panel-heading -->
                        <div class="card-block">
                            
                            <div class="card">
                                    <p>
                                        

                                        <img class="rounded" width="20%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp 

                                        @if($requestedtrip->driver_id!=null)
                                            <strong style="font-size:20px"> Driver: {{$requestedtrip->name}}
                                                </strong>

                                        @endif

                                        <span class="pull-right text-muted" style="font-size:16px"><br/>
                                            <b>From</b>-{{$requestedtrip->from}}<br/>
                                            <b>To</b>-{{$requestedtrip->to}}<br/>

                                            <b>Distance</b>-{{$distance['distance']}}<br/>
                                            <b>Estimeted Time</b>-{{$distance['time']}}<br/>
                                            
                                            <b>Trip Starting</b>- {{$requestedtrip->start_date}}<br/>
                                            <b>Trip Ending</b>- {{$requestedtrip->end_date}}<br/>
                                        </span>
                                    </p>
                                   
                                   @if($requestedtrip->driver_id!=null)
                                    <i>Phone no: {{$requestedtrip->phonenumber}}</i>
                                    @endif

                                    <b style="font-size:16px">Trip Type: {{$requestedtrip->trip_type}}<br/>
                                    <b style="font-size:16px; color: green">Trip Status: {{$requestedtrip->status}}<br/>
                                    Trip Fare: {{$requestedtrip->total_cost}}Tk</b>
                            </div>
                                    
                                    <hr/>  

                            {!! $map['html'] !!}
         
                        <div id="directionsDiv"></div>
                           
                        </div>
                        <div class="panel-footer" style="text-align: center;">

                            @if($requestedtrip->status=="Pending")
                            
                                 <a href="{{route('rider.cancelmanualtrip',$requestedtrip->id)}}"><button class="btn btn-danger" >Cancel</button></a>
                            
                            @endif

                           
                       
                        </div>
                        <!-- /.panel-body -->
                    </div>
@endsection