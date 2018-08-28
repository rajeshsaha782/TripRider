@extends('layouts.rider')

@section('title')
 Dashboard | Rider
@endsection

@section('content')
    <div class="container-fluid">
      <!-- Breadcrumbs
      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="index.html">Dashboard</a>
        </li>
        <li class="breadcrumb-item active">Blank Page</li>
      </ol>
	  -->
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
    <form method="post" class="form-signin">
        {{csrf_field()}}
      <div class="row">
        <div class="col-8">
          <table class="table table-striped" style="width: 80%">
            <tr>
              <td width="40%" style="color: red"><b>Old Password</b></td>
              <td class="text-justify"><input type="Password" name="oldpass"  /></td>
            </tr>
            
           
            <tr>
              <td width="40%" style="color: green"><b>New Password</b></td>
              <td class="text-justify"><input type="Password"  name="newpass" /></td>
            </tr>

            <tr>
              <td width="40%" style="color: blue"><b>Retype Password</b></td>
              <td class="text-justify"><input type="Password"  name="repass"  /></td>
            </tr>
          </table>
        </div>
<hr class="my-4">
              
        <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Save Changes</button>
     </div>
    </div>
    </form>
@endsection