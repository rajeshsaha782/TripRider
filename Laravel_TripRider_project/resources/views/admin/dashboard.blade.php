@extends('layouts.admin')


@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">Dashboard</h1>
    </div>
    <!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-3 col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$TotalAdmin}}</div>
                        <div>Admin</div>
                    </div>
                </div>
            </div>
            <a href="admin.html">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$TotalDriver}}</div>
                        <div>Driver</div>
                    </div>
                </div>
            </div>
            <a href="driver.html">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-shopping-cart fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">{{$TotalRider}}</div>
                        <div>Rider</div>
                    </div>
                </div>
            </div>
            <a href="rider.html">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-md-3">
        <div class="panel panel-red">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-support fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">13</div>
                        <div>Requests</div>
                    </div>
                </div>
            </div>
            <a href="#">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
</div>


<div class="row">
    <div class="col-lg-3 col-md-3">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-comments fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">26</div>
                        <div>Current Rides</div>
                    </div>
                </div>
            </div>
            <a href="currentrides.html">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>Complete Rides</div>
                    </div>
                </div>
            </div>
            <a href="completerides.html">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>

    <div class="col-lg-3 col-md-3">
        <div class="panel panel-green">
            <div class="panel-heading">
                <div class="row">
                    <div class="col-xs-3">
                        <i class="fa fa-tasks fa-5x"></i>
                    </div>
                    <div class="col-xs-9 text-right">
                        <div class="huge">12</div>
                        <div>Packages</div>
                    </div>
                </div>
            </div>
            <a href="packages.html">
                <div class="panel-footer">
                    <span class="pull-left">View Details</span>
                    <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                    <div class="clearfix"></div>
                </div>
            </a>
        </div>
    </div>
    
    
    
</div>
<!-- /.row -->
<div class="row">
    <div class="col-lg-12">
       
        <!-- /.panel -->
        <div class="panel panel-default">
            <div class="panel-heading">
                <i class="fa fa-bar-chart-o fa-fw"></i> Bar Chart Example
                <div class="pull-right">
                    <div class="btn-group">
                        <button type="button" class="btn btn-default btn-xs dropdown-toggle" data-toggle="dropdown">
                            Actions
                            <span class="caret"></span>
                        </button>
                        <ul class="dropdown-menu pull-right" role="menu">
                            <li><a href="#">Action</a>
                            </li>
                            <li><a href="#">Another action</a>
                            </li>
                            <li><a href="#">Something else here</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#">Separated link</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /.panel-heading -->
            <div class="panel-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="table-responsive">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Drider</th>
                                        <th>Rider</th>
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
                                        <td><a href="viewprofilerider.html">robi</a></td>
                                        <td><a href="packagedetails.html">Prremium</a></td>
                                        <td>Khilkhet</td>
                                        <td>Chittagong</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">1200</td>
                                    </tr>
                                    <tr class="even gradeC">
                                        <td><a href="viewprofile.html">rakib</a></td>
                                        <td><a href="viewprofilerider.html">Robi</a></td>
                                        <td><a href="packagedetails.html">Prremium</a></td>
                                        <td>Kuril</td>
                                        <td>Comilla</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">500</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td><a href="viewprofile.html">rakib</a></td>
                                        <td><a href="viewprofilerider.html">Rajesh</a></td>
                                        <td><a href="packagedetails.html">Prremium</a></td>
                                        <td>Comilla</td>
                                        <td>Borisal</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">500</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td><a href="viewprofile.html">rakib</a></td>
                                        <td><a href="viewprofilerider.html">Suvro</a></td>
                                        <td><a href="packagedetails.html">Trident</a></td>
                                        <td>Sylhet</td>
                                        <td>Dhaka</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">500</td>
                                    </tr>
                                    <tr class="odd gradeA">
                                        <td><a href="viewprofile.html">rakib</a></td>
                                        <td><a href="viewprofilerider.html">Tuli</a></td>
                                        <td><a href="packagedetails.html">Trident</a></td>
                                        <td>Pubna</td>
                                        <td>Dhaka</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">500</td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td><a href="viewprofile.html">rakib</a></td>
                                        <td><a href="viewprofilerider.html">Toma</a></td>
                                        <td><a href="packagedetails.html">Trident</a></td>
                                        <td>Dhaka</td>
                                        <td>Comilla</td>
                                        <<td class="center">12-05-18</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">500</td>
                                    </tr>
                                    <tr class="gradeA">
                                        <td><a href="viewprofile.html">rakib</a></td>
                                        <td><a href="viewprofilerider.html">efti</a></td>
                                        <td><a href="packagedetails.html">Gecko</a></td>
                                        <td>Dhaka</td>
                                        <td>Comilla</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">12-05-18</td>
                                        <td class="center">500</td>
                                    </tr>
                                </tbody>
                             </table>
                        </div>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.col-lg-4 (nested) -->
                   
                    <!-- /.col-lg-8 (nested) -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.panel-body -->
        </div>
        
    </div>
    <!-- /.col-lg-8 -->
    
        <!-- /.panel -->
    </div>
@endsection

<!-- /.row -->