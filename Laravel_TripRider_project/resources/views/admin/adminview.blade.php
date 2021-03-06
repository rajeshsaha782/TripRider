@extends('layouts.admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Admin</h1>
        </div>
    </div>
    <div class="row" >
        @foreach($totaladmin as $admin)
          <div class="col-sm-3">
            <div class="row" align="center">
                <img src="/img/rajesh.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%;" >
            </div>
            <div class="row" align="center">
                <p>{{$admin->name}}</p>
                <a href="{{route('admin.adminviewprofile', ['id' => $admin->id])}}">
                    <button type="button" class="btn btn-success">View Profile</button></a>
            </div>
          </div>
        @endforeach
    </div>
@endsection
