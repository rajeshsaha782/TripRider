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
	  
 
  
        <div class="col-12">
					
	
					<div class="panel panel-primary ">
                        <div class="panel-heading ">
                            Student Pack
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                
                                <li class="nav-item"><a class="nav-link  active" href="#Details1" data-toggle="tab">Details</a>
                                </li>
								<li class="nav-item"><a class="nav-link" href="#Package1" data-toggle="tab">Package</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#Driver1" data-toggle="tab">Driver</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
								<div class="tab-pane fade in active" id="Details1">
									<table width="100%">
									<tr>
									<td width="50%">
										<h4>Details</h4>
										<p>
										Starting Point: Bashundhara<br/>
										Type: Round Trip
										<br/>
										Starting Time: 8am<br/>
										Estimated Time Elasped: From 8am to 6pm <br/>
										<br/>
										Trip Dstination: <br/>
										From Starting point (8am) to Fantasy Kingdom (9am) <br/>
										From Fantasy Kingdom (6pm) to Starting point (7.30pm) <br/>
										<br/></p>
									</td>
									<td>
										<img class="rounded" width="70%" src="../img/p5.jpg"/>
									</td>
									</tr>
									</table>
								</div>
                                <div class="tab-pane fade" id="Package1">
                                    <h4>Advertisment</h4>
									<table>
									<tr>
									<td width="30%">
                                    <img class="img-thumbnail center" alt="Cinque Terre"  style="width:100%;" src="../img/p4.jpg"/>
									</td>
									<td width="3%">
									</td>
									<td>
										শুধুমাত্র শিক্ষার্থীদের জন্য আকর্ষণীয় Student Pack নিয়ে এলো Fantasy Kingdom. সর্বনিম্ন ১০ জন হলেই প্যাকেজটিতে পাচ্ছেন মাত্র ১০০০  টাকায় (মাথাপিছু)  Starting Trip+Entry + Fantasy Kingdom (all rides) + Water Kingdom (all rides) + Returning Trip উপভোগ করার সুযোগ। তাই আর দেরি না করে এখনই চলে আসুন Fantasy Kingdom-এ। </td>
									</tr>
									</table>
                                </div>
                                
                                <div class="tab-pane fade" id="Driver1">
                                    <h4>Driver</h4>
									<table>
										<tr>
											<td width="30%">
											<img class="rounded-circle" width="70%" src="../img/user_pic.jpg"/>
											</td>
											<td style="text-align:center">
												<table width="100%">
													<tr>
														<td  style="text-align:center" width="40%">
															<h4>Driver Name</h4>
														</td>
														<td style="text-align:center">
															Completed Trips:111
														</td>
													</tr>
													<tr>
														<td style="text-align:center">Rate
															<i class="fa fa-star" style="font-size: 20px;color:#00000"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#00000"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#00000"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#00000"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#00000"></i>
														</td>
														<td style="text-align:center">
															Contact No:019xxxxxxxx
														</td>
													</tr>
													<tr>
														<td style="text-align:center" colspan="2">
															<br/>
															<br/>
															<h4> Give Review</h4>
															<textarea height="50px" width="150px"></textarea><br/> <br/>
															<button class="btn btn-primary">Submut</button>
														</td>
													</tr>
												</table>
											</td>
											<td>
											</td>
										</tr>
									</table>
									
                                </div>
                            </div>
                        </div>
						<div class="panel-footer">
						<h3>Total Charge: 12000 taka</h3>
						</div>
                        <!-- /.panel-body -->
                    </div>
					
					
					
					
        </div>
      </div>
    </div>
    
@endsection