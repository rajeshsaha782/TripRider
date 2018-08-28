@extends('layouts.driver')

@section('title')
	Package Edit|Driver
@endsection

@section('mapjs')

  {!! $map['js'] !!}
@endsection

@section('content')

<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Package: <small>{{$package->from}}  To  {{$package->to}}</small>  </h2>
                </div>
                
            </div>

            <form method="post" enctype="multipart/form-data" class="form-signin">
            {{csrf_field()}}

            <div class="row">
            <div class="col-lg-12">
                    <img src="/uploads/package/{{$package->image}}" height="200" width="280" class="img-rounded" alt="Cinque Terre">
                    <input  type="file" name="image" id="image"  class="form-control"><br/>
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
                <input type="text" name="Name" id="inputName" value="{{$package->name}}" class="form-control" placeholder="Package Name" required autofocus>
                
              </div>

              <!-- <div class="form-label-group">
              	
			  <label for="inputUserame">From</label>
                <input type="text" name="From"  value="{{$package->from}}" class="form-control" disabled>
                
              </div>

              <div class="form-label-group">
			   <label for="to">To</label>
                <input type="text" name="To" value="{{$package->to}}" class="form-control" disabled>
               
              </div> -->
          

              <div class="form-label-group">
			         <label for="inputPassword">Triplength(days)</label>
                <input type="number" name="Triplength" value="{{$package->trip_length}}" id="inputPassword" class="form-control" placeholder="Triplength" required>
         
              </div>
              
              <div class="form-label-group">
              <label for="inputConfirmPassword">Description</label>
                <textarea type="text" rows="4" name="Description"  id="inputConfirmPassword" class="form-control" placeholder="Description" required>{{$package->description}}</textarea>
          
              </div>


              <br/>
              <div class="form-label-group">
              <label for="">Car Type</label>
              
               <select name="Car_type" class="form-control" required>
                 <option value="Taxi" @if ($package->Car_type=="Taxi" ){{ 'selected'}} @endif>Taxi</option>
                 <option value="Micro" @if ($package->Car_type=="Micro" ){{ 'selected'}} @endif>Micro</option>
                 <option value="Noah" @if ($package->Car_type=="Noah" ){{ 'selected'}} @endif>Noah</option>
                 <option value="Hiace" @if ($package->Car_type=="Hiace" ){{ 'selected'}} @endif>Hiace</option>
               </select>
                
          
              </div>

              <br/>
              <div class="form-label-group">
			        <label for="">Trip Type</label>
               <input type="radio" name="Trip_Type" value="oneway" @if ($package->trip_type =="oneway" ){{ 'checked'}} @endif required>Oneway 
                 <input type="radio" name="Trip_Type" value="bothway" @if ($package->trip_type)=="bothway" ){{ 'checked'}} @endif required>Bothway
          
              </div>
			         <br/>

			  <div class="form-label-group">
			         <label for="inputPassword">Total Sits(Number of People allowed)</label>
                <input type="number" name="TotalSits" id="inputPassword" value="{{$package->total_sits}}" class="form-control" placeholder="Total Sits" required>
         
              </div>
			  <div class="form-label-group">
			         <label for="inputPassword">Total Cost(Tk)</label>
					
                <input type="number" name="TotalCost" id="inputPassword" value="{{$package->total_cost}}" class="form-control" placeholder="Total Cost" required>
         
              </div>
			  <!-- <div class="form-label-group">
			    <label for="">Image</label>
					
                <input  type="file" name="image" id="image"  class="form-control" required>
                <span style="color: red">{{$errors->first('image')}}</span>
              </div> -->
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


              <label >From</label><input id="from" value="{{$package->from}}" placeholder="From" class="form-control" name="from" />
               <label >To</label><input id="to" value="{{$package->to}}"  placeholder="To" class="form-control"   name="to" />
               <br/>
              <br/>


               <button class="btn btn-primary" onclick="getLocation_start()" >Set Start as my current location</button>
               <button class="btn btn-primary" onclick="getLocation_end()" >Set End as my current location</button>
			         {!! $map['html'] !!}
               <input id="startaddress" value="{{$package->from}}" style="visibility: hidden;" name="startaddress" />
               <input id="endaddress"  value="{{$package->to}}" style="visibility: hidden;" name="endaddress" />
              </div>
			  
		


              <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Save Changes</button>
          
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
                      window.location="{{route('driver.packageedit',$package->id)}}";
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
                      window.location="{{route('driver.packageedit',$package->id)}}";
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