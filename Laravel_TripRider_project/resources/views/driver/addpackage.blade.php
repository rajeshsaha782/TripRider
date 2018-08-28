@extends('layouts.driver')

@section('title')
	Add Package |Driver
@endsection

@section('mapjs')
<script type="text/javascript">
    // function getLocation(type) 
    //     {
    //       if (navigator.geolocation) {
    //           navigator.geolocation.getCurrentPosition(success, fail);
    //       } else { 
    //           alert("Browser not supported");
    //       }

    //       function success(position) 
    //       {
    //         if(type=="start")
    //         {
    //             $.ajax({
    //               // method: 'POST', 
    //               data: { 'start_lat': position.coords.latitude, 'start_lan': position.coords.longitude },
    //               url : "{{action('DriverController@start')}}", 
    //               success : function (data) {
    //                   //alert(data);
    //                   address(newLat,newLng,"start");
    //                   window.location="{{route('driver.addpackage')}}";
    //               }
    //               });
    //         }
    //         else if(type=="end")
    //         {
    //             $.ajax({
    //               // method: 'POST', 
    //               data: { 'end_lat': position.coords.latitude, 'end_lan': position.coords.longitude },
    //               url : "{{action('DriverController@end')}}", 
    //               success : function (data) {
    //                   //alert(data);
    //                   address(newLat,newLng,"end");
    //                   window.location="{{route('driver.addpackage')}}";
    //               }
    //               });
    //         }

               
    //       }
    //       function fail() {
    //           alert("it fails to get CurrentPosition");
    //       }
  </script>
  {!! $map['js'] !!}
@endsection

@section('content')

<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Add Package</h2>
                </div>
                
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

           <form method="post" enctype="multipart/form-data" class="form-signin">
           	{{csrf_field()}}
				<div class="form-label-group">
			  <label for="inputUserame">Package Name</label>
                <input type="text" name="Name" id="inputName" value="{{old('Name')}}" class="form-control" placeholder="Package Name" required autofocus>
                
              </div>

              <!-- <div class="form-label-group">
              	
			  <label for="inputUserame">From</label>
                <input type="text" name="From" id="inputName" class="form-control" placeholder="From" required autofocus>
                
              </div>

              <div class="form-label-group">
			   <label for="to">To</label>
                <input type="text" name="To" id="to" class="form-control" placeholder="To" required>
               
              </div> -->
          

              <div class="form-label-group">
			         <label for="inputPassword">Triplength(days)</label>
                <input type="number" name="Triplength" value="{{old('Triplength')}}" id="inputPassword" class="form-control" placeholder="Triplength" required>
         
              </div>
              
              <div class="form-label-group">
              <label for="inputConfirmPassword">Description</label>
                <textarea type="text" rows="4" name="Description"  id="inputConfirmPassword" class="form-control" placeholder="Description" required>{{old('Description')}}</textarea>
          
              </div>

              <br/>
              <div class="form-label-group">
              <label for="">Car Type</label>
              
               <select name="Car_type" class="form-control" required>
                 <option value="Taxi" @if (old( 'Car_type')=="Taxi" ){{ 'selected'}} @endif>Taxi</option>
                 <option value="Micro"@if (old( 'Car_type')=="Micro" ){{ 'selected'}} @endif>Micro</option>
                 <option value="Noah"@if (old( 'Car_type')=="Noah" ){{ 'selected'}} @endif>Noah</option>
                 <option value="Hiace"@if (old( 'Car_type')=="Hiace" ){{ 'selected'}} @endif>Hiace</option>
               </select>
                
          
              </div>
               
              <br/>
              <div class="form-label-group">
			        <label for="">Trip Type</label>
               <input type="radio" name="Trip_Type" value="oneway" @if (old( 'Trip_Type')=="oneway" ){{ 'checked'}} @endif required>Oneway 
                 <input type="radio" name="Trip_Type" value="bothway" @if (old( 'Trip_Type')=="bothway" ){{ 'checked'}} @endif required>Bothway
          
              </div>
			         <br/>

			  <div class="form-label-group">
			         <label for="inputPassword">Total Sits(Number of People allowed)</label>
                <input type="number" name="TotalSits" id="inputPassword" value="{{old('TotalSits')}}" class="form-control" placeholder="Total Sits" required>
         
              </div>
			  <div class="form-label-group">
			         <label for="inputPassword">Total Cost(Tk)</label>
					
                <input type="number" name="TotalCost" id="inputPassword" value="{{old('TotalCost')}}" class="form-control" placeholder="Total Cost" required>
         
              </div>
			  <div class="form-label-group">
			    <label for="">Image</label>
					
                <input  type="file" name="image" id="image" value="{{old('myfile')}}" class="form-control" required>
                <span style="color: red">{{session('message')}}</span>
              </div>
			  <br/>
			  <div class="form-label-group">

          @if($errors->first('startaddress') || $errors->first('endaddress'))
                <div class="card-body"style="background-color: red;opacity: 0.7;">
                  <ul>
                   
                      <span style="color: white">{{$errors->first('startaddress')}}</span><br/>
                      <span style="color: white">{{$errors->first('endaddress')}}</span>
                    
                  </ul>
                </div>
               @endif 

              
               <label >From</label><input id="from" placeholder="From" class="form-control" name="from" />
               <label >To</label><input id="to" placeholder="To" class="form-control"   name="to" />
               <br/>
              <br/>

               <button class="btn btn-primary" onclick="getLocation_start()" >Set Start as my current location</button>
               <button class="btn btn-primary" onclick="getLocation_end()" >Set End as my current location</button>
			         {!! $map['html'] !!}
               
                <input id="startaddress" style="visibility: hidden;" name="startaddress" />
               <input id="endaddress" style="visibility: hidden;" name="endaddress" />
              </div>
			  
		


              <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Add Package</button>
          
              <hr class="my-4">
              
            </form>

        <script type="text/javascript">

          function getLocation_start() {
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

          function getLocation_end() {
          if (navigator.geolocation) {
              navigator.geolocation.getCurrentPosition(success, fail);
          } else { 
              alert("Browser not supported");
          }

          function success(position) 
          {
             
               $.ajax({
                  // method: 'POST', 
                  data: { 'end_lat': position.coords.latitude, 'end_lan': position.coords.longitude },
                  url : "{{action('DriverController@end')}}", 
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
                //alert(data);
                address(newLat,newLng,"start");
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
                //alert(data);
                address(newLat,newLng,"end");
            }
            });
        }

        
      </script>

      <script type="text/javascript">

        

      function address(lat,lan,type)
      {

        //alert('address called');

        var latLng = new google.maps.LatLng(lat, lan);
        geocoder.geocode( { 'latLng': latLng}, function(results, status) 
        {
          if (status == google.maps.GeocoderStatus.OK) 
          {
            if (results[0]) 
            {
              alert(results[0].formatted_address);
              if(type=="start")
              {
                //alert('start address set');
                document.getElementById('startaddress').value = results[0].formatted_address;
                document.getElementById('from').value = results[0].formatted_address;

              } 
              else
              {
                //alert('end address set');
                document.getElementById('endaddress').value = results[0].formatted_address;
                document.getElementById('to').value = results[0].formatted_address;
              
              } 
                

              }
          } 
          else {
            alert('Geocode was not successful for the following reason: ' + status);
          }
        });
      }


      </script>
@endsection