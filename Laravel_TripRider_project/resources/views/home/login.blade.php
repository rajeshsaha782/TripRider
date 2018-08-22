@extends('layouts.home')

@section('title')
 Login | TripRider
@endsection

@section('content')

<header class="masthead">
      <div class="masthead" style="padding-top:150px;">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				
				<div class="modal-body" >

					 @if($errors->any())
			          <div class="card-body"style="background-color: red;opacity: 0.7;">
			            <ul>
			              @foreach($errors->all() as $err)
			                <li style="color: white">{{$err}}</li>
			              @endforeach
			            </ul>
			          </div>
			          @endif

			         
			          	@if(session('message'))
				          	<div class="card-body"style="background-color: red;opacity: 0.7;">
				            <ul>
				             
				                <li style="color: white">{{session('message')}}</li>
				              
				            </ul>
				          </div>
							
						@endif

					<form method="post" class="form-signin">
						{{csrf_field()}}
		              <div class="form-label-group">
		              	<label for="inputEmail">Email address</label>
		                <input type="email" id="inputEmail" name="Email" value="{{old('Email')}}" class="form-control" placeholder="Email address" required autofocus>
		                
		              </div>

		              <div class="form-label-group">
		              	<label for="inputPassword">Password</label>
		                <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
		                
		              </div>
		              <br/>
		              <!-- <a class="btn btn-primary btn-block" href="../Rider/index.html">Login</a> -->
		             <button class="btn btn-primary btn-block text-uppercase" type="submit">Login</button>
		              <hr class="my-4">
					  
		              <div class="text-center">
		              	Not a Member yet? 
		                <a class="d-block small" href="{{route('signupRider')}}">Signup as Rider</a>
		              </div>
		            </form>
					
					
				</div>
				
			</div>
		</div>
	</div>
    </header>
@endsection