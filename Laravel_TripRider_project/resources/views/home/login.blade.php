@extends('layouts.home')

@section('title')
 Login | TripRider
@endsection

@section('content')

<header class="masthead">
      <div class="masthead" style="padding-top:150px;">
		<div class="modal-dialog modal-sm">
			<div class="modal-content">
				
				<div class="modal-body" >
					<form class="form-signin">
		              <div class="form-label-group">
		              	<label for="inputEmail">Email address</label>
		                <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
		                
		              </div>

		              <div class="form-label-group">
		              	<label for="inputPassword">Password</label>
		                <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
		                
		              </div>
		              <br/>
		              <a class="btn btn-primary btn-block" href="../Rider/index.html">Login</a>
		              <!-- <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" >Sign in</button> -->
		              <hr class="my-4">
					  <!--
		              <div class="text-center">
		                <a class="d-block small" href="forgot-password.html">Forgot Password?</a>
		              </div>-->
		            </form>
					
					
				</div>
				
			</div>
		</div>
	</div>
    </header>
@endsection