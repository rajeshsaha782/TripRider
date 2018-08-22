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

         @if($errors->any())
          <div class="card-body"style="background-color: red;opacity: 0.7;">
            <ul>
              @foreach($errors->all() as $err)
                <li style="color: white">{{$err}}</li>
              @endforeach
            </ul>
          </div>
          @endif

        <form method="post"  class="form-signin">

           {{csrf_field()}}
          <div class="form-label-group">
                    <label for="Name">Name</label>
                    <input type="text" id="Name" name="Name" value="{{old('Name')}}" class="form-control" placeholder="Name" required autofocus>
                    
                  </div>
                  <div class="form-label-group">
                    <label for="inputEmail">Email address</label>
                    <input type="email" id="inputEmail" name="Email" value="{{old('Email')}}" class="form-control" placeholder="Email address" required autofocus>
                    
                  </div>

                   <div class="form-label-group">

                    <div class="row">
                      <div class="col-6">
                         <label for="inputEmail">PhoneNumber</label>
                    <input type="number" id="PhoneNumber" name="PhoneNumber" value="{{old('PhoneNumber')}}" class="form-control" placeholder="PhoneNumber" required autofocus>
                      </div>
                      <div class="col-6">
                         <label for="Car-number">Car Number</label>
                    <input type="text" id="Car-number" name="CarNumber" value="{{old('CarNumber')}}" class="form-control" placeholder="Car-number" required autofocus>
                      </div>
                    </div>
                    
                    
                  </div>

                  <div class="form-label-group">

                <div class="row">
                  <div class="col-6">
                    <label for="inputPassword">Password</label>
                    <input type="password" id="inputPassword" name="Password" class="form-control" placeholder="Password" required>
                  </div>
                  <div class="col-6">
                    <label for="inputPassword">Confirm Password</label>
                    <input type="password" id="inputPassword" name="ConfirmPassword" class="form-control" placeholder="Confirm Password" required>
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