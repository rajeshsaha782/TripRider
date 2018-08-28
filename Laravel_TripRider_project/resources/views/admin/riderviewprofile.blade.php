@extends('layouts.admin')


@section('content')

<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">{{$rider->name}}</h1>
        
    </div>
</div>

<div class="row">
    <div class="col-sm-4" align="center">  
          <table class="table table-striped">
            <tr >
              <td width="40%">Email</td>
              <td class="text-justify">{{$rider->email}}</td>
            </tr>
            <tr >
              <td width="40%">Address</td>
              <td>
                Bashundhara
              </td>
            </tr>
            <tr >
              <td width="40%">Phone number</td>
              <td class="text-justify">{{$rider->phonenumber}}</td>
            </tr>
          </table>
        

    </div>
    <div class="col-sm-4" style="color: blue;">
        <div class="row" align="center" >
            <img src="/img/rajesh.jpg" class="img-circle" alt="Cinque Terre" style="width: 70%">


        </div>
    </div>
    <div class="col-sm-4" align="center">
                <table class="table table-bordered" style="width: 100%;shape-margin: 0">
                    <tbody>
                        <tr>
                          <th>Task</th>
                          <th>Progress</th>
                          <th style="width: 40px">Number</th>
                        </tr>
                        <tr>
                          <td> Complete Rides</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-danger" style="width: 55%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-red">50</span></td>
                        </tr>
                        <tr>
                          <td>Pending Rides</td>
                          <td>
                            <div class="progress progress-xs">
                              <div class="progress-bar progress-bar-yellow" style="width: 70%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-yellow">30</span></td>
                        </tr>
                        <tr>
                          <td>Cancel Rides</td>
                          <td>
                            <div class="progress progress-xs progress-striped active">
                              <div class="progress-bar progress-bar-primary" style="width: 30%"></div>
                            </div>
                          </td>
                          <td><span class="badge bg-light-blue">20</span></td>
                        </tr>
                  </tbody>
                </table>
                                         
            </div>

    </div>
<div class="row">
    <div class="panel-body">
         <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
            <thead>
                <tr>
                    <th>Driver</th>
                    <th>Package Name</th>
                    <th>From</th>
                    <th>To</th>
                    <th>Starting Date</th>
                    <th>End Date</th>
                    <th>Amount</th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd gradeX">
                    <td><a href="viewprofile.html">rakib</a></td>
                    <td><a href="packagedetails.html">Trident</a></td>
                    
                    <td>Khilkhet</td>
                    <td>Chittagong</td>
                    <td class="center">12-05-18</td>
                    <td class="center">12-05-18</td>
                    <td class="center">1200</td>
                </tr>
                <tr class="even gradeC">
                    <td><a href="viewprofile.html">rakib</a></td>
                    <td><a href="packagedetails.html">Trident</a></td>
                    
                    <td>Kuril</td>
                    <td>Comilla</td>
                    <td class="center">12-05-18</td>
                    <td class="center">12-05-18</td>
                    <td class="center">500</td>
                </tr>
                <tr class="odd gradeA">
                    <td><a href="viewprofile.html">rakib</a></td>
                    <td><a href="packagedetails.html">Trident</a></td>
                    
                    <td>Comilla</td>
                    <td>Borisal</td>
                    <td class="center">12-05-18</td>
                    <td class="center">12-05-18</td>
                    <td class="center">500</td>
                </tr>
                <tr class="even gradeA">
                    <td><a href="viewprofile.html">rakib</a></td>
                    <td><a href="packagedetails.html">Trident</a></td>
                   
                    <td>Sylhet</td>
                    <td>Dhaka</td>
                    <td class="center">12-05-18</td>
                    <td class="center">12-05-18</td>
                    <td class="center">500</td>
                </tr>
                <tr class="odd gradeA">
                    <td><a href="viewprofile.html">rakib</a></td>
                    <td><a href="packagedetails.html">Trident</a></td>
                    
                    <td>Pubna</td>
                    <td>Dhaka</td>
                    <td class="center">12-05-18</td>
                    <td class="center">12-05-18</td>
                    <td class="center">500</td>
                </tr>
                <tr class="even gradeA">
                    <td><a href="viewprofile.html">rakib</a></td>
                    <td><a href="packagedetails.html">Trident</a></td>
                    
                    <td>Dhaka</td>
                    <td>Comilla</td>
                    <<td class="center">12-05-18</td>
                    <td class="center">12-05-18</td>
                    <td class="center">500</td>
                </tr>
                <tr class="gradeA">
                    <td><a href="viewprofile.html">rakib</a></td>
                    <td><a href="packagedetails.html">Trident</a></td>
                    
                    <td>Dhaka</td>
                    <td>Comilla</td>
                    <td class="center">12-05-18</td>
                    <td class="center">12-05-18</td>
                    <td class="center">500</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
  

@endsection
