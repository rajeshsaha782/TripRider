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
    <form method="post" class="form-signin">
    {{csrf_field()}}
      <div class="row">
        <div class="col-8">
          <table class="table table-striped" style="width: 80%">
            <tr>
              <td width="40%">Name</td>
              <td class="text-justify"><input type="text" name="Name" value="{{$rider->name}}"/></td>
            </tr>
            <tr >
              <td width="40%">Email</td>
              <td class="text-justify" disabled>useremail@gmail.com</td>
            </tr>
           
            <tr >
              <td width="40%">Phone number</td>
              <td class="text-justify"><input type="number" name="PhoneNumber" value="{{$rider->phonenumber}}"/></td>
            </tr>
          </table>
        </div>
        <div class="col-4"  style="padding-right: 100px">
           <img src="/img/user_pic.jpg" class="img-thumbnail" alt="Cinque Terre" style="width:100%">
        </div>
     </div>
    </div>
     <br/><button class="btn btn-success btn-lg btn-block text-uppercase" type="submit">Save Changes</button>
    </form>
@endsection