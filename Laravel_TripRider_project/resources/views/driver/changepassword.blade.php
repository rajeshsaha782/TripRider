@extends('layouts.driver')

@section('title')
  Change Password |Driver
@endsection

@section('content')
			<div class="row">
            <div class="col-lg-12">
                    <h2 class="page-header">Change Password</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
			
			<div class="row">
            <div class="col-md-8">
			
           <form class="form-signin">
				<div class="form-label-group">
			  <label for="inputUserame">Old Password</label>
                <input type="password" id="inputName" class="form-control" placeholder="Old Password" value="89869869869" required autofocus>
                
              </div>
              <div class="form-label-group">
			  <label for="inputUserame">New Password</label>
                <input type="password" id="inputName" class="form-control" placeholder="New Password" value="89869869869" required autofocus>
                
              </div>

          
          

              <div class="form-label-group">
			         <label for="inputPassword">Retype Password</label>
                <input type="password" id="inputPassword" class="form-control" placeholder="Retype Password" value="89869869869" required>
         
              </div>
              
             
			 
          
              <hr class="my-4">
              
			  <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Save Changes</button>
            
			</div>

			
            </div>
			
			</form>
@endsection