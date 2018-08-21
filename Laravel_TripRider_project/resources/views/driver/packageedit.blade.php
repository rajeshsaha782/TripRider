@extends('layouts.driver')

@section('title')
	Package Edit|Driver
@endsection

@section('content')
<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Edit Package</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			<div class="row">
            <div class="col-md-8">
			
           <form class="form-signin">
				<div class="form-label-group">
			  <label for="inputUserame">Package name</label>
                <input type="text" id="inputName" class="form-control" placeholder="Package name" value="Name" required autofocus>
                
              </div>
              <div class="form-label-group">
			  <label for="inputUserame">From</label>
                <input type="text" id="inputName" class="form-control" placeholder="From" value="Dhaka" required autofocus>
                
              </div>

              <div class="form-label-group">
			   <label for="inputEmail">To</label>
                <input type="text" id="inputEmail" class="form-control" placeholder="To" value="Comilla" required>
               
              </div>
          

              <div class="form-label-group">
			         <label for="inputPassword">Triplength(days)</label>
                <input type="number" id="inputPassword" class="form-control" placeholder="Triplength" value="2" required>
         
              </div>
              
              <div class="form-label-group">
			        <label for="inputConfirmPassword">Description</label>
                <textarea type="text" rows="4" id="inputConfirmPassword" class="form-control" placeholder="Description"  required>Description
				</textarea>
          
              </div>
			  
			  <div class="form-label-group">
			         <label for="inputPassword">Total Sits(Number of People allowed)</label>
                <input type="number" id="inputPassword" class="form-control" placeholder="Total Sits" value="4" required>
         
              </div>
			  <div class="form-label-group">
			         <label for="inputPassword">Total Cost(Tk)</label>
					
                <input type="number" id="inputPassword" class="form-control" placeholder="Total Cost" value="1200" required>
         
              </div>
			  <br/>
			  

            
          
              <hr class="my-4">
              
            
			</div>
               
			   
			<div class="col-4">
				<img src="../img/p1.jpg" class="img-rounded" alt="Cinque Terre" height="200px" width="300px"><br/>
				Change Image<input type="file"/>
			</div>
           
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
			  <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Save Changes</button>
			</form>
@endsection