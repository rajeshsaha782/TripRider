@extends('layouts.driver')

@section('title')
	ViewProfile |Driver
@endsection

@section('content')
	
			<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">View Profile</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			<div class="row">
            <div class="col-md-8">

            	@if(session('message'))
                    <div class="card-body"style="background-color: green;opacity: 0.7;">
                    <ul>
                     
                        <li style="color: white">{{session('message')}}</li>
                      
                    </ul>
                  </div>
              
           		 @endif

				<table class="table table-striped" style="height: 250px">
					<tr>
					  <th width="40%">Name</th>
					  <td class="text-justify">{{$driver->name}}</td>
					</tr>
					<tr >
					  <th width="40%">Email</th>
					  <td class="text-justify">{{$driver->email}}</td>
					</tr>
					
					<tr >
					  <th width="40%">Phone number</th>
					  <td class="text-justify">{{$driver->phonenumber}}</td>
					</tr>
					<tr >
					  <th width="40%">Car Number</th>
					  <td class="text-justify">{{$driver->carnumber}}</td>
					</tr>
					<tr >
					  <th width="40%">Member Science</th>
					  <td class="text-justify">{{$driver->created_at}}</td>
					</tr>
				  </table>
          
             
              
            
			</div>
               
			   
			<div class="col-4">
				<img src="/img/user_pic.jpg" class="img-rounded" alt="Cinque Terre" height="200px" width="200px"><br/>
				
			</div>
			
            </div>
			
			  <br/>
			  <a href="{{route('driver.editprofile',session('user')->id)}}"><button class="btn btn-success text-uppercase" type="submit">Edit</button></a>
			</form>
@endsection