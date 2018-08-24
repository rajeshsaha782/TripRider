@extends('layouts.driver')

@section('title')
	Add Package |Driver
@endsection

@section('mapjs')
  {!! $map['js'] !!}
@endsection

@section('content')
<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Add Package</h2>
                </div>
                @if($errors->any())
                <div class="card-body"style="background-color: red;opacity: 0.7;">
                  <ul>
                    @foreach($errors->all() as $err)
                      <li style="color: white">{{$err}}</li>
                    @endforeach
                  </ul>
                </div>
                @endif
            </div>
           <form method="post" class="form-signin">
           	{{csrf_field()}}
				<div class="form-label-group">
			  <label for="inputUserame">Package Name</label>
                <input type="text" name="Name" id="inputName" class="form-control" placeholder="Package Name" required autofocus>
                
              </div>

              <div class="form-label-group">
              	
			  <label for="inputUserame">From</label>
                <input type="text" name="From" id="inputName" class="form-control" placeholder="From" required autofocus>
                
              </div>

              <div class="form-label-group">
			   <label for="to">To</label>
                <input type="text" name="To" id="to" class="form-control" placeholder="To" required>
               
              </div>
          

              <div class="form-label-group">
			         <label for="inputPassword">Triplength(days)</label>
                <input type="number" name="Triplength" id="inputPassword" class="form-control" placeholder="Triplength" required>
         
              </div>
              
              <div class="form-label-group">
              <label for="inputConfirmPassword">Description</label>
                <textarea type="text" rows="4" name="Description" id="inputConfirmPassword" class="form-control" placeholder="Description" required></textarea>
          
              </div>

              <div class="form-label-group">
			        <label for="inputConfirmPassword">Trip Type</label>
                 <input type="radio" name="Trip_Type" value="oneway" id="inputPassword" class="form-control" required>Oneway 
                 <input type="radio" name="Trip_Type" value="bothway" id="inputPassword" class="form-control" required>Bothway
          
              </div>
			  
			  <div class="form-label-group">
			         <label for="inputPassword">Total Sits(Number of People allowed)</label>
                <input type="number" name="TotalSits" id="inputPassword" class="form-control" placeholder="Total Sits" required>
         
              </div>
			  <div class="form-label-group">
			         <label for="inputPassword">Total Cost(Tk)</label>
					
                <input type="number" name="TotalCost" id="inputPassword" class="form-control" placeholder="Total Cost" required>
         
              </div>
			  <div class="form-label-group">
			    <label for="">Image</label>
					
                <input type="file" id="file" class="form-control" placeholder="Total Cost" required>
         
              </div>
			  <br/>
			  <div class="form-label-group">
			         {!! $map['html'] !!}
              </div>
			  
			  <script type="text/javascript">

          function getLocation() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(success, fail);
          } else { 
              alert("Browser not supported");
          }

          function success(position) 
          {
             
               $.ajax({
                  // method: 'POST', 
                  data: { 'start_lat': position.coords.latitude, 'start_lan': position.coords.longitude },
                  url : "{{action('DriverController@start')}}", 
                  success : function (data) {
                      //alert(data);
                      window.location="{{route('driver.addpackage')}}";
                  }
                  });
          }
          function fail() {
              alert("it fails to get CurrentPosition");
          }
      }
      </script>

      <script type="text/javascript">
    //geoLocationInit();
        function set_start(newLat, newLng)
        {
            //alert(newLat+","+newLng);

            $.ajax({
            // method: 'POST', 
            data: { 'start_lat': newLat, 'start_lan': newLng },
            url : "{{action('DriverController@start')}}", 
            success : function (data) {
                alert(data);
            }
            });
        }

         function set_end(newLat, newLng)
        {
            //alert(newLat+","+newLng);

            $.ajax({
            // method: 'POST', 
            data: { 'end_lat': newLat, 'end_lan': newLng },
            url : "{{action('DriverController@end')}}", 
            success : function (data) {
                alert(data);
            }
            });
        }
      </script>




              <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Add Package</button>
          
              <hr class="my-4">
              
            </form>
@endsection