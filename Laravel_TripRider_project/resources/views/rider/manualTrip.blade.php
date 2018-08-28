@extends('layouts.rider')

@section('title')
 Dashboard | Make Trip
@endsection


@section('mapjs')
{!! $map['js'] !!}
@endsection

@section('content')


<form method="post" class="form-signin">
            {{csrf_field()}}
        <div class="form-label-group">

          <div class="row">
            <div class="col-6">
              <label for="inputUserame">Departure Date</label>
                <input type="date" name="dDate" id="inputName" value="{{old('dDate')}}" class="form-control" placeholder="Departure Date" required autofocus>
            </div>
            <div class="col-6">
              <label for="inputUserame">Return Date</label>
                <input type="date" name="rDate" id="inputName" value="{{old('rDate')}}" class="form-control" placeholder="Return Date" required autofocus>
            </div>
          </div>

        
                
          </div>
          
            

              <br/>

              <div class="form-label-group">


                <div class="row">
            <div class="col-6">
             <label for="">Car Type</label>
              
               <select name="Car_type" class="form-control" required>
                 <option value="Taxi" @if (old( 'Car_type')=="Taxi" ){{ 'selected'}} @endif>Taxi</option>
                 <option value="Micro"@if (old( 'Car_type')=="Micro" ){{ 'selected'}} @endif>Micro</option>
                 <option value="Noah"@if (old( 'Car_type')=="Noah" ){{ 'selected'}} @endif>Noah</option>
                 <option value="Hiace"@if (old( 'Car_type')=="Hiace" ){{ 'selected'}} @endif>Hiace</option>
               </select>
            </div>
            <div class="col-6">
              <br/>
               <label for="">Trip Type</label>
               <input type="radio" name="Trip_Type" value="oneway" @if (old( 'Trip_Type')=="oneway" ){{ 'checked'}} @endif required>Oneway 
                 <input type="radio" name="Trip_Type" value="bothway" @if (old( 'Trip_Type')=="bothway" ){{ 'checked'}} @endif required>Bothway
            </div>
          </div>

              
                
          
              </div>
               
              

      
        <div>
               

                <label >From</label><input id="from" name="from" placeholder="From" disabled class="form-control" name="from" />
               <label >To</label><input id="to" name="to" placeholder="To" disabled class="form-control"   name="to" />
         
         <div class="row">
           <div class="col-4">
             <label for="cost">Distance(km)</label>
          
                <input  id="dist" name="dist" value="{{old('dist')}}" disabled class="form-control" placeholder="Distance" required>
           </div>
           <div class="col-4">
             <label for="cost">Estimated Cost(Tk)</label>
          
                <input  id="cost" name="cost" value="{{old('cost')}}" disabled class="form-control" placeholder="Estimated Cost" required>
           </div>
           <div class="col-4">
             <label for="cost">Estimated Time</label>
          
                <input  id="time" name="time" value="{{old('cost')}}" disabled class="form-control" placeholder="Estimated Time" required>
           </div>
         </div>
         

      </div>

  <br/>

  <button class="btn btn-primary" onclick="getLocation_start()" >Set Start as my current location</button>
  <button class="btn btn-primary" onclick="getLocation_end()" >Set End as my current location</button>
               {!! $map['html'] !!}
   <input id="startaddress" style="visibility: hidden;" name="startaddress" />
    <input id="endaddress" style="visibility: hidden;" name="endaddress" />
    <input id="totalcost" style="visibility: hidden;" name="totalcost" />


  <br/><br/>
  <table width="100%">
  <tr>
  <td style="text-align:center">
  <button  type="submit" class="btn btn-primary" >Request</button>
  </td>
  </tr>
  </table>

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
                  url : "{{action('RiderController@start')}}", 
                  success : function (data) {
                      //alert(data);
                      window.location="{{route('rider.manualtrip')}}";
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
                  url : "{{action('RiderController@end')}}", 
                  success : function (data) {
                      //alert(data);
                      window.location="{{route('rider.manualtrip')}}";
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
            url : "{{action('RiderController@start')}}", 
            success : function (data) {
                //alert(data);
                address(newLat,newLng,"start");
                calculate_cost();
            }
            });
        }

        function set_end(newLat, newLng)
        {
            //alert(newLat+","+newLng);

            $.ajax({
            // method: 'POST', 
            data: { 'end_lat': newLat, 'end_lan': newLng },
            url : "{{action('RiderController@end')}}", 
            success : function (data) {
                //alert(data);
                address(newLat,newLng,"end");
                calculate_cost();
            }
            });
        }


        function calculate_cost()
        {
           // alert("called");

            $.ajax({
            // method: 'POST', 
            //data: { 'end_lat': newLat, 'end_lan': newLng },
            url : "{{action('RiderController@calculatecost')}}", 
            success : function (data) {
                //alert(data);
                document.getElementById('totalcost').value = data['cost'];
                document.getElementById('cost').value = data['cost'];
                document.getElementById('dist').value = data['distance']/1000;
                document.getElementById('time').value = data['time'];
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