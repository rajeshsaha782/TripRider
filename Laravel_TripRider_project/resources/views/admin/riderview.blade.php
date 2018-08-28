@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Rider</h1>
    </div>
</div>
        <!-- /.row -->
<div class="row" >
  
  <div class="col-sm-3">
    <div class="row" align="center">
        <img src="../img/c.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%;" >
    </div>
    <div class="row" align="center">
        <a href="{{route('admin.riderviewprofile')}}"><button type="button" class="btn btn-success">View Profile</button></a>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="row" align="center">
        <img src="../img/d.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">
    </div>
    <div class="row" align="center">
         <a href="{{route('admin.riderviewprofile')}}"><button type="button" class="btn btn-success">View Profile</button></a>
    </div>
  </div>


  <div class="col-sm-3">
    <div class="row" align="center">
        <img src="../img/e.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">
    </div>
    <div class="row" align="center">
         <a href="{{route('admin.riderviewprofile')}}"><button type="button" class="btn btn-success">View Profile</button></a>
    </div>
  </div>


  <div class="col-sm-3">
    <div class="row" align="center">
         <img src="../img/d.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">
   </div>
    <div class="row" align="center">
         <a href="{{route('admin.riderviewprofile')}}"><button type="button" class="btn btn-success">View Profile</button></a>
    </div>
  </div>

</div>

<div class="row">
    <div class="col-sm-3">
    <div class="row" align="center">
         <img src="../img/e.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">
   </div>
    <div class="row" align="center">
         <a href="{{route('admin.riderviewprofile')}}"><button type="button" class="btn btn-success">View Profile</button></a>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="row" align="center">
        <img src="../img/b.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">
   </div>
    <div class="row" align="center">
         <a href="{{route('admin.riderviewprofile')}}"><button type="button" class="btn btn-success">View Profile</button></a>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="row" align="center">
          <img src="../img/d.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">
   </div>
    <div class="row" align="center">
         <a href="{{route('admin.riderviewprofile')}}"><button type="button" class="btn btn-success">View Profile</button></a>
    </div>
  </div>

  <div class="col-sm-3">
    <div class="row" align="center">
         <img src="../img/a.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">
   </div>
    <div class="row" align="center">
         <a href="{{route('admin.riderviewprofile')}}"><button type="button" class="btn btn-success">View Profile</button></a>
    </div>
  </div>
        
    
</div>


@endsection
