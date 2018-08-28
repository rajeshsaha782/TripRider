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

    <div class="panel panel-primary ">
                        <div class="panel-heading ">
                            {{$package->name}}
                        </div>
                        <!-- /.panel-heading -->
    <div class="panel-body">
    <table>
            <tr>
            <td width="30%">
            <img class="img-thumbnail center" alt="Cinque Terre"  style="width:100%;" src="/img/p1.jpg"/>
            </td>
            <td width="3%">
            </td>
            <td>
               {{$package->description}} </td>
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
            
            </tr>
            </table>

           {!! $map['html'] !!}
         
            <div id="directionsDiv"></div>
       
        </div>

        <div class="panel-footer">
        <a href=""><button type="button" class="btn btn-primary">Edit</button></a>

        <a href=""><button type="button" class="btn btn-danger">Delete</button></a>
        
        </div>
        <!-- /.panel-body -->
    </div>

@endsection