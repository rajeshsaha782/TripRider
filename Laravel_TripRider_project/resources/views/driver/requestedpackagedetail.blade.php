@extends('layouts.driver')

@section('title')
	Package Detail |Driver
@endsection


@section('mapjs')

  {!! $map['js'] !!}
@endsection

@section('content')
    <div class="panel panel-red ">
                        <div class="panel-heading ">
                            Trip Detail
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            
                            <div class="panel panel-default">
                                    <p>
                                        <img class="rounded" width="10%" src="/img/user_pic.jpg"/> &nbsp &nbsp &nbsp <strong style="font-size:20px"> Rider: {{$requestedtrip->name}}</strong>
                                        <span class="pull-right text-muted" style="font-size:16px"><br/>
                                            <b>From</b>-{{$requestedtrip->from}}<br/>
                                            <b>To</b>-{{$requestedtrip->to}}<br/>

                                            <b>Distance</b>-{{$distance['distance']}}<br/>
                                            <b>Estimeted Time</b>-{{$distance['time']}}<br/>
                                            
                                            <b>Trip Starting</b>- {{$requestedtrip->start_date}}<br/>
                                            <b>Trip Ending</b>- {{$requestedtrip->end_date}}<br/>
                                        </span>
                                    </p>
                                   
                                    <i>Phone no: {{$requestedtrip->phonenumber}}</i><br/><br/>
                                    <b style="font-size:16px">Trip Type: {{$requestedtrip->trip_type}}<br/>
                                        Maximum Person: {{$requestedtrip->total_sits}}<br/>
                                        Car Type: {{$requestedtrip->car_type}}<br/>
                                        Trip Length: {{$requestedtrip->trip_length}} Day(s)<br/>

                                    <b style="font-size:16px; color: green">Trip Status: {{$requestedtrip->status}}<br/>
                                    Trip Fare: {{$requestedtrip->total_cost}}Tk</b>
                            </div>
            
                                    <hr/>  
            <div class="panel panel-default">
                                  <table>
            <tr>
            <td width="30%">
            <img src="/uploads/package/{{$requestedtrip->image}}" height="200" width="280" class="img-rounded" alt="Cinque Terre">
            </td>
            <td width="3%">
            </td>
            <td>
               {{$requestedtrip->description}} </td>
            </tr>
            </table> 
            </div> 

                            {!! $map['html'] !!}
         
                        <div id="directionsDiv"></div>
                           
                        </div>
                        <div class="panel-footer" style="text-align: center;">

                            @if($requestedtrip->status=="Pending")
                            
                                 <a href="{{route('driver.confirmmanualtrip',$requestedtrip->id)}}"><button class="btn btn-primary" >Accept</button></a>
                            
                            @endif

                            @if($requestedtrip->status=="Ongoing")
                            
                                <a href="{{route('driver.endtrip',$requestedtrip->id)}}"><button class="btn btn-primary" >Payment Recieved and End Trip</button></a>
                            
                            @endif
                       
                        </div>
                        <!-- /.panel-body -->
                    </div>
@endsection