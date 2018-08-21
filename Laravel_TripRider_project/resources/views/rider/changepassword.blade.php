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
              <td width="40%" style="color: red"><b>Old Password</b></td>
              <td class="text-justify"><input type="password" name="oldPass" /></td>
            </tr>
            
           
            <tr>
              <td width="40%" style="color: green"><b>New Password</b></td>
              <td class="text-justify"><input type="password" name="newPass" /></td>
            </tr>

            <tr>
              <td width="40%" style="color: blue"><b>Retype Password</b></td>
              <td class="text-justify"><input type="password" name="rePass" /></td>
            </tr>
          </table>
        </div>

     </div>
    </div>
    
@endsection