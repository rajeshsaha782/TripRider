@extends('layouts.driver')

@section('title')
	Edit Profile  |Driver
@endsection

@section('content')
			<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Edit Profile</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			<div class="row">
            <div class="col-md-8">
			
           <form class="form-signin">
				<div class="form-label-group">
			  <label for="inputUserame">Name</label>
                <input type="text" id="inputName" class="form-control" placeholder="name" value="Name" required autofocus>
                
              </div>
              <div class="form-label-group">
			  <label for="inputUserame">Email</label>
                <input type="email" id="inputName" class="form-control" placeholder="email" value="r@gmail.com" required autofocus>
                
              </div>

              <div class="form-label-group">
			   <label for="inputEmail">Address</label>
               <textarea type="text" rows="4" id="inputConfirmPassword" class="form-control" placeholder="Address"  required>Address
				</textarea>
          
               
              </div>
          

              <div class="form-label-group">
			         <label for="inputPassword">Phone Number</label>
                <input type="number" id="inputPassword" class="form-control" placeholder="Phone Number" value="89869869869" required>
         
              </div>
              
             
			 
          
              <hr class="my-4">
              
            
			</div>
               
			   
			<div class="col-4">
				<img src="../img/user_pic.jpg" class="img-rounded" alt="Cinque Terre" height="200px" width="200px"><br/>
				Change Image<input type="file"/>
			</div>
			
            </div>
			
			  <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Save Changes</button>
			</form>
@endsection