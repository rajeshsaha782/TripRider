@extends('layouts.driver')

@section('title')
	Add Package |Driver
@endsection

@section('content')
<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Add Package</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
           <form class="form-signin">
				<div class="form-label-group">
			  <label for="inputUserame">Package Name</label>
                <input type="text" id="inputName" class="form-control" placeholder="Package Name" required autofocus>
                
              </div>
              <div class="form-label-group">
			  <label for="inputUserame">From</label>
                <input type="text" id="inputName" class="form-control" placeholder="From" required autofocus>
                
              </div>

              <div class="form-label-group">
			   <label for="to">To</label>
                <input type="text" id="to" class="form-control" placeholder="To" required>
               
              </div>
          

              <div class="form-label-group">
			         <label for="inputPassword">Triplength(days)</label>
                <input type="number" id="inputPassword" class="form-control" placeholder="Triplength" required>
         
              </div>
              
              <div class="form-label-group">
			        <label for="inputConfirmPassword">Description</label>
                <textarea type="text" rows="4" id="inputConfirmPassword" class="form-control" placeholder="Description" required></textarea>
          
              </div>
			  
			  <div class="form-label-group">
			         <label for="inputPassword">Total Sits(Number of People allowed)</label>
                <input type="number" id="inputPassword" class="form-control" placeholder="Total Sits" required>
         
              </div>
			  <div class="form-label-group">
			         <label for="inputPassword">Total Cost(Tk)</label>
					
                <input type="number" id="inputPassword" class="form-control" placeholder="Total Cost" required>
         
              </div>
			  <div class="form-label-group">
			    <label for="">Image</label>
					
                <input type="file" id="file" class="form-control" placeholder="Total Cost" required>
         
              </div>
			  <br/>
			  <div class="form-label-group">
			         <div id="googleMap" style="height:400px;width:100%;"></div>
              </div>
			  
			  <script>
		function myMap() {
			var myCenter = new google.maps.LatLng(23.822324, 90.427520);
			var mapProp = {center:myCenter, zoom:12, scrollwheel:false, draggable:false, mapTypeId:google.maps.MapTypeId.ROADMAP};
			var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
			var marker = new google.maps.Marker({position:myCenter});
			marker.setMap(map);
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA7a-pVRxc_cx00QNTiPWQZW50qxiqZGO0&callback=myMap"></script>

              <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Add Package</button>
          
              <hr class="my-4">
              
            </form>
@endsection