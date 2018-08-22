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
				<table class="table table-striped" style="height: 250px">
					<tr>
					  <td width="40%">Name</td>
					  <td class="text-justify">{{$driver->name}}</td>
					</tr>
					<tr >
					  <td width="40%">Email</td>
					  <td class="text-justify">{{$driver->email}}</td>
					</tr>
					
					<tr >
					  <td width="40%">Phone number</td>
					  <td class="text-justify">{{$driver->phonenumber}}</td>
					</tr>
					<tr >
					  <td width="40%">Car Number</td>
					  <td class="text-justify">{{$driver->carnumber}}</td>
					</tr>
					<tr >
					  <td width="40%">Member Science</td>
					  <td class="text-justify">{{$driver->created_at}}</td>
					</tr>
				  </table>
          
             
              
            
			</div>
               
			   
			<div class="col-4">
				<img src="/img/user_pic.jpg" class="img-rounded" alt="Cinque Terre" height="200px" width="200px"><br/>
				Change Image<input type="file"/>
			</div>
			
            </div>
			
			  <br/>
			  <a href="{{route('driver.editprofile',session('user')->id)}}"><button class="btn btn-success text-uppercase" type="submit">Edit</button></a>
			</form>
@endsection