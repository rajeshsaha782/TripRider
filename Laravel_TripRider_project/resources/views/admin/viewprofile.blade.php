@extends('layouts.admin')


<style>
.checked {
    color: orange;
}
</style>
@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{$admin->name}}</h1>
        
    </div>
</div>


            <!-- /.row -->
<div class="row">
    <div class="col-sm-6" align="center">  

        <table class="table table-striped" style="width: 80%">
            <tr>
              <td width="40%">Name</td>
              <td class="text-justify">{{$admin->name}}</td>
            </tr>
            <tr >
              <td width="40%">Email</td>
              <td class="text-justify">{{$admin->email}}</td>
            </tr>
            <tr >
              <td width="40%">Address</td>
              <td>
                {{$admin->address}}
              </td>
            </tr>
            <tr >
              <td width="40%">Phone number</td>
              <td class="text-justify">{{$admin->phonenumber}}</td>
            </tr>
          </table>

    </div>
    <div class="col-sm-4" style="color: blue;">
     
               <div class="col-4">
                <img src="/img/user_pic.jpg" class="img-rounded" alt="Cinque Terre" height="200px" width="200px"><br/>
                
            </div>
    </div>
@endsection

<script>   
$(document).ready(function() {
    $('#dataTables-example').DataTable({
        responsive: true
    });
});
</script>

