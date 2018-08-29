@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Admin</h1>
        
    </div>
</div>

<div class="row">
    <div class="col-sm-6" align="center">  
        <table class="table table-striped" style="width: 80%">
            <tr>
              <td width="40%">Name</td>
              <td class="text-justify">{{$adminview->name}}</td>
            </tr>
            <tr >
              <td width="40%">Email</td>
              <td class="text-justify">{{$adminview->email}}</td>
            </tr>
            <tr >
              <td width="40%">Phone number</td>
              <td class="text-justify">{{$adminview->phonenumber}}</td>
            </tr>
          </table>

    </div>
    <div class="col-sm-4" style="color: blue;">
        <div class="row" align="center" >
            <img src="/img/rajesh.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">
        </div>
    </div>
</div>

@endsection
