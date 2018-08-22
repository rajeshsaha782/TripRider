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

			<form method="post" class="form-signin">
        {{csrf_field()}}
			<div class="row">
            <div class="col-md-8">

			@if(session('message'))
                    <div class="card-body"style="background-color: green;opacity: 0.7;">
                    <ul>
                     
                        <li style="color: white">{{session('message')}}</li>
                      
                    </ul>
                  </div>
              
            @endif
            @if(session('errmessage'))
                    <div class="card-body"style="background-color: red;opacity: 0.7;">
                    <ul>
                     
                        <li style="color: white">{{session('errmessage')}}</li>
                      
                    </ul>
                  </div>
              
            @endif
           
				<div class="form-label-group">
			  <label for="inputUserame">Old Password</label>
                <input type="password" name="oldpass" id="inputName" class="form-control" placeholder="Old Password"  required autofocus>
                
              </div>
              <div class="form-label-group">
			  <label for="inputUserame">New Password</label>
                <input type="password" name="newpass" id="inputName" class="form-control" placeholder="New Password"  required autofocus>
                
              </div>

          
          

              <div class="form-label-group">
			         <label for="inputPassword">Retype Password</label>
                <input type="password" name="repass" id="inputPassword" class="form-control" placeholder="Retype Password" required>
         
              </div>
              
             
			 
          
              <hr class="my-4">
              
			  <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Save Changes</button>
            
			</div>

			
            </div>
			
			</form>
@endsection