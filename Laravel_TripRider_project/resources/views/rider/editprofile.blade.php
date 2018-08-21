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
      <div class="row">
        <div class="col-8">
          <table class="table table-striped" style="width: 80%">
            <tr>
              <td width="40%">Name</td>
              <td class="text-justify"><input type="text" name="name" value="User Name"/></td>
            </tr>
            <tr >
              <td width="40%">Email</td>
              <td class="text-justify">useremail@gmail.com</td>
            </tr>
            <tr >
              <td width="40%">Address</td>
              <td>
                <textarea id="Address" name="Address" style="height:100px;width:300px">Bashundhara</textarea>
              </td>
            </tr>
            <tr >
              <td width="40%">Phone number</td>
              <td class="text-justify"><input type="text" name="Phone" value="019xxxxxxx"/></td>
            </tr>
          </table>
        </div>
        <div class="col-4"  style="padding-right: 100px">
           <img src="../img/user_pic.jpg" class="img-thumbnail" alt="Cinque Terre" style="width:100%">
        </div>
     </div>
    </div>
    
@endsection