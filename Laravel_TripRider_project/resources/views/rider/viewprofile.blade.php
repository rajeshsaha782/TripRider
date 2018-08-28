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

    <div>
      @if(session('message'))
                    <div class="card-body"style="background-color: green;opacity: 0.7;">
                    <ul>
                     
                        <li style="color: white">{{session('message')}}</li>
                      
                    </ul>
                  </div>
              
               @endif
    </div>
      <div class="row">
        
        <div class="col-8">
          <table class="table table-striped" style="width: 80%">
            <tr>
              <td width="40%">Name</td>
              <td class="text-justify">{{$rider->name}}</td>
            </tr>
            <tr >
              <td width="40%">Email</td>
              <td class="text-justify">{{$rider->email}}</td>
            </tr>
            
            <tr >
              <td width="40%">Phone number</td>
              <td class="text-justify">{{$rider->phonenumber}}</td>
            </tr>
          </table>
        </div>
        <div class="col-4"  style="padding-right: 100px">
           <img src="/img/user_pic.jpg" class="img-thumbnail" alt="Cinque Terre" style="width:100%">
        </div>
		<table width="100%">
		<tr>
		<td style="text-align:center">
		<a href="{{route('rider.editprofile',session('user')->id)}}"> <button  class="btn btn-outline-primary" >Edit</button></a>
		</td>
		</tr>
		</table>
     </div>
    </div>
    
@endsection