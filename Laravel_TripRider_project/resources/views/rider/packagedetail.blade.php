@extends('layouts.rider')

@section('title')
	Package Detail |Rider
@endsection

@section('mapjs')

  {!! $map['js'] !!}
@endsection

@section('content')

<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Packages</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>

            <div class="card cta cta--featured">
          <span class="header-line gradient-color-1"></span>
          <div class="card-block">
            <h3 class="card-title no-margin-top">{{$package->name}}<span class="fa fa-map pull-right"></span></h3>
            <h6 class="card-subtitle text-muted">Driver: <b>{{$package->driverName}}</b></h6>
          </div>
          <div class="card-block">
            <table>
                                    <tr>
                                    <td width="30%">
                                    <img src="/uploads/package/{{$package->image}}" height="200" width="380" class="img-rounded" alt="Cinque Terre">
                                    </td>
                                    <td width="3%">
                                    </td>
                                    <td>
                                        {{$package->description}}</td>
                                    </tr>
                                    </table>
                                    <hr/>
                    <table width="100%">
                                    <tr>
                                    <td width="50%">
                                        <h4>Details</h4>
                                        <p>Price: {{$package->total_cost}} taka<br/>
                                        Starting Point: {{$package->from}}<br/>
                                        Ending Point: {{$package->to}}<br/>
                                        <br/>
                                        Maximum person: {{$package->total_sits}}<br/>
                                        Trip type: {{$package->trip_type}} <br/>
                                        Car: {{$package->car_type}}<br/>
                                        Trip Length: {{$package->trip_length}}<br/>
                                        One way Distance: {{$distance['distance']}}<br/>
                                        One way Estimated time: {{$distance['time']}}<br/>
                                        
                                        <br/>
                                        </p>
                                    </td>
                                    <td>
                                       {!! $map['html'] !!}
         
                                            <div id="directionsDiv"></div>
                                    </td>
                                    </tr>
                                    </table>
                                    <hr/>
                                    <table>
                                        <tr>
                                            <td width="30%">
                                            <img class="rounded-circle" width="70%" src="/img/user_pic.jpg"/>
                                            </td>
                                            <td style="text-align:center">
                                                <table width="100%">
                                                    <tr>
                                                        <td  style="text-align:center" width="40%">
                                                            <h4>{{$package->driverName}}</h4>
                                                        </td>
                                                        <td style="text-align:center">
                                                            Completed Trips:111
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="text-align:center">Rating
                                                            <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                                                            <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                                                            <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                                                            <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                                                            <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                                                        </td>
                                                        <td style="text-align:center">
                                                            Contact No:{{$package->phonenumber}}
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td  style="text-align:center" colspan="2">
                                                            <br/>
                                                            <br/>
                                                            <button onclick="window.location='viewDriver.html';" class="btn btn-secondary" >Reviews</button>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                            <td>
                                            </td>
                                        </tr>
                                    </table>
                                    <hr/>
                <div class="row " style="text-align: center;">
                    <div class="col-12">
                        <a href="{{route('rider.packagebook',$package->id)}}"><button class="btn btn-primary">Request</button></a>
                    </div>
                </div>
                        
          </div>
        </div>

  
@endsection