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
					  <td class="text-justify">User Name</td>
					</tr>
					<tr >
					  <td width="40%">Email</td>
					  <td class="text-justify">useremail@gmail.com</td>
					</tr>
					<tr >
					  <td width="40%">Address</td>
					  <td>
						Bashundhara
					  </td>
					</tr>
					<tr >
					  <td width="40%">Phone number</td>
					  <td class="text-justify">019xxxxxxx</td>
					</tr>
				  </table>
          
             
              
            
			</div>
               
			   
			<div class="col-4">
				<img src="../img/user_pic.jpg" class="img-rounded" alt="Cinque Terre" height="200px" width="200px"><br/>
				Change Image<input type="file"/>
			</div>
			
            </div>
			
			  <br/>
			  <a href="editProfile.html"><button class="btn btn-success text-uppercase" type="submit">Edit</button></a>
			</form>
@endsection