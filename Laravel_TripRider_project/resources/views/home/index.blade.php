@extends('layouts.home')

@section('title')
 TripRider
@endsection

@section('content')

<header class="masthead">
      <div style="padding-top:200px" class="container d-flex h-100 ">
        <div class="mx-auto text-center">
          <h1 class="mx-auto my-0 text-uppercase">Welcome To</h1>
          <h2 class="text-white-50 mx-auto mt-2 mb-5"><img src="img/logo.png" style="width:200px"/></h2>
          <a href="{{route('login')}}" class="btn btn-primary js-scroll-trigger">Get Started</a>
        </div>
      </div>
    </header>
@endsection