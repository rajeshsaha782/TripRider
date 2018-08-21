@extends('layouts.rider')

@section('title')
 Dashboard | Rider
@endsection

@section('content')
    <div class="container-fluid">
      <!-- Breadcrumbs
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
	  -->
	  
	  
    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/js/gijgo.min.js" type="text/javascript"></script>
    <link href="https://cdn.jsdelivr.net/npm/gijgo@1.9.10/css/gijgo.min.css" rel="stylesheet" type="text/css" />
	
      <table style="padding-left:20px" width="60%"><tr><td>
    <label >Departure Date:</label><input id="datepicker" width="276" /><br/>
	</td><td>
	<label >Return Date:</label><input id="datepicker2" width="276" /><br/>
    </td>
	</tr>
	<tr><td>
    <label >From:</label><input id="datepicker" width="276" /><br/>
	</td><td>
	<label >To:</label><input id="datepicker" width="276" /><br/>
    </td>
	</tr>
	</table>
	<br/>
	<div id="map" style="width:100%;height:400px;"></div><br/><br/>
	<table width="100%">
	<tr>
	<td style="text-align:center">
	<button  type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#successfulModal">Request</button>
	</td>
	</tr>
	</table>

<script>
function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(23.821931, 90.427497), zoom: 10
  };
  var map = new google.maps.Map(mapCanvas, mapOptions);
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>
	
	
	<script>
        $('#datepicker').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
	<script>
        $('#datepicker2').datepicker({
            uiLibrary: 'bootstrap4'
        });
    </script>
    </div>
	<div class="modal fade" id="successfulModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send Successful</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body" style="margin: 0px auto;width:50%"><img src="../img/ok.png" style="width:100%" class="rounded-circle"> </div>
          
        </div>
      </div>
    </div>
    
@endsection