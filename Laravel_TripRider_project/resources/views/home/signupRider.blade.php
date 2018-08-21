 @extends('layouts.home')

@section('title')
 TripRider | Signup
@endsection

@section('content')
 <header class="masthead">
      <div style="padding-top:100px" class="container">
    <div class="card card-register mx-auto mt-5">
      <div class="card-header">Register As a Rider</div>
      <div class="card-body">

        <form class="form-signin">

          <div class="form-label-group">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" class="form-control" placeholder="Name" required autofocus>
                    
                  </div>
                  <div class="form-label-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    
                  </div>
                   <div class="form-label-group">
                    <label for="inputEmail">PhoneNumber</label>
                    <input type="number" id="PhoneNumber" class="form-control" placeholder="PhoneNumber" required autofocus>
                    
                  </div>

                  <div class="form-label-group">

                <div class="row">
                  <div class="col-6">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="col-6">
                    <label for="inputPassword">Confirm Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
                  </div>
                </div>
                    
                    
                  </div>
                
                  <br/>
                  <!-- <a class="btn btn-primary btn-block" href="../Rider/index.html">Login</a> -->
                 <button class="btn btn-primary btn-block text-uppercase" type="submit">Register</button>
                  <hr class="my-4">
            
                </form>

        <div class="text-center">
          <a class="d-block small mt-3" href="{{route('login')}}">Login</a>

        </div>
      </div>
    </div>
  </div>
    </header>
@endsection