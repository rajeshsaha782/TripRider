@extends('layouts.admin')

<style>
.checked {
    color: orange;
}
</style>

@section('content')
			<div class="row">
            <div class="col-lg-12"><h2 class="page-header">Edit Profile</h2>
            </div>
            </div>
			
			<div class="row">
	<form method="post" class="form-signin">
		{{csrf_field()}}
            <div class="col-md-8">
        
			<div class="form-label-group">
			  <label for="inputUserame">Name</label>
                <input type="text" id="inputName" name="Name" class="form-control" placeholder="name" value="{{$admin->name}}" required autofocus>
                
              </div>
              <div class="form-label-group">
			  <label for="inputUserame">Email</label>
                <input type="email" id="inputName" name="Email" class="form-control" placeholder="email" value="{{$admin->email}}" disabled>
                
              </div>

              <div class="form-label-group">
			   <label for="inputEmail">Phone number</label>
               <input type="number" id="number" name="PhoneNumber" class="form-control" placeholder="PhoneNumber" value="{{$admin->phonenumber}}" required autofocus>
               
              </div>
          

              <div class="form-label-group">
			         <label for="inputPassword">Car Number</label>
                <input type="number" id="number" name="CarNumber" class="form-control" placeholder="Car Number" value="{{$admin->carnumber}}" disabled>
         
              </div>
            
              <hr class="my-4">
              
			</div>
               
			   
			<div class="col-4">
				<img src="/img/user_pic.jpg" class="img-rounded" alt="Cinque Terre" height="200px" width="200px"><br/>
				Change Image<input type="file"/>
			</div>
			
            
			
			  <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Save Changes</button>

	</form>
	</div>
@endsection
