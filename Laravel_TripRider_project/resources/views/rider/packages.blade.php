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
					<table width="95%">
				<tr>
					<td>
						<h2 class="page-header">Packages</h2>
					</td>
					<td>
						<button class="btn btn-primary float-right" style="font-size:15px" onclick="window.location='manualTrip.html';">Request Trip Manually</button>
					</td>
				</tr>
			</table>
	
					<div class="panel panel-primary ">
                        <div class="panel-heading ">
                            Student Pack
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#Package1" data-toggle="tab">Package</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#Details1" data-toggle="tab">Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#Driver1" data-toggle="tab">Driver</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="Package1">
                                    <h4>Student Pack</h4>
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
                                <div class="tab-pane fade" id="Details1">
									<table width="100%">
									<tr>
									<td width="50%">
										<h4>Details</h4>
										<p>Price: 1000 taka (per person)<br/>
										Starting Point: Mirpur/Bashundhara/Uttara/Narayanganj<br/>
										Ending Point: Same as Starting Point<br/>
										<br/>
										Starting Time: 8am<br/>
										Estimated Time Elasped: From 8am to 6pm <br/>
										<br/>
										Trip Dstination: <br/>
										From Starting point to Fantasy Kingdom (8am)<br/>
										From Fantasy Kingdom to Starting point (6pm)<br/>
										<br/>
										**Conditions:<br/>
										• Minimum 10 person required.<br/>
										• Valid Student ID card is required.<br/>
										• This package can be enjoyed only trough <b>TripRider</b> <br/>
										<br/>
										**For more detailed information, please call: 01913531384, 01913531517, 01977885507, 01914602965, 01939912533, 01937402947
										<br/>• Call us within 10 am to 4 pm from Sunday to Thursday</p>
									</td>
									<td>
										<img class="rounded" width="70%" src="../img/p5.jpg"/>
									</td>
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
														<td style="text-align:center">Rating
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
														</td>
														<td style="text-align:center">
															Contact No:019xxxxxxxx
														</td>
													</tr>
													<tr>
														<td  style="text-align:center" colspan="2">
															<br/>
															<br/>
															<button onclick="window.location='viewDriver.html';" class="btn btn-secondary" >Reviews</button>
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
						<button class="btn btn-primary">Purchase</button>
						</div>
                        <!-- /.panel-body -->
                    </div>
					
					
					
					<div class="panel panel-primary ">
                        <div class="panel-heading ">
                            Student Pack
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#Package2" data-toggle="tab">Package</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#Details2" data-toggle="tab">Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#Driver2" data-toggle="tab">Driver</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="Package2">
                                    <h4>Student Pack</h4>
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
                                <div class="tab-pane fade" id="Details2">
									<table width="100%">
									<tr>
									<td width="50%">
										<h4>Details</h4>
										<p>Price: 1000 taka (per person)<br/>
										Starting Point: Mirpur/Bashundhara/Uttara/Narayanganj<br/>
										Ending Point: Same as Starting Point<br/>
										<br/>
										Starting Time: 8am<br/>
										Estimated Time Elasped: From 8am to 6pm <br/>
										<br/>
										Trip Dstination: <br/>
										From Starting point to Fantasy Kingdom (8am)<br/>
										From Fantasy Kingdom to Starting point (6pm)<br/>
										<br/>
										**Conditions:<br/>
										• Minimum 10 person required.<br/>
										• Valid Student ID card is required.<br/>
										• This package can be enjoyed only trough <b>TripRider</b> <br/>
										<br/>
										**For more detailed information, please call: 01913531384, 01913531517, 01977885507, 01914602965, 01939912533, 01937402947
										<br/>• Call us within 10 am to 4 pm from Sunday to Thursday</p>
									</td>
									<td>
										<img class="rounded" width="70%" src="../img/p5.jpg"/>
									</td>
									</tr>
									</table>
								</div>
                                <div class="tab-pane fade" id="Driver2">
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
														<td style="text-align:center">Rating
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
														</td>
														<td style="text-align:center">
															Contact No:019xxxxxxxx
														</td>
													</tr>
													<tr>
														<td  style="text-align:center" colspan="2">
															<br/>
															<br/>
															<button onclick="window.location='viewDriver.html';" class="btn btn-secondary" >Reviews</button>
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
						<button class="btn btn-primary">Purchase</button>
						</div>
                        <!-- /.panel-body -->
                    </div>
					
					
					<div class="panel panel-primary ">
                        <div class="panel-heading ">
                            Student Pack
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs">
                                <li class="nav-item"><a class="nav-link active" href="#Package3" data-toggle="tab">Package</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#Details3" data-toggle="tab">Details</a>
                                </li>
                                <li class="nav-item"><a class="nav-link" href="#Driver3" data-toggle="tab">Driver</a>
                                </li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane fade in active" id="Package3">
                                    <h4>Student Pack</h4>
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
                                <div class="tab-pane fade" id="Details3">
									<table width="100%">
									<tr>
									<td width="50%">
										<h4>Details</h4>
										<p>Price: 1000 taka (per person)<br/>
										Starting Point: Mirpur/Bashundhara/Uttara/Narayanganj<br/>
										Ending Point: Same as Starting Point<br/>
										<br/>
										Starting Time: 8am<br/>
										Estimated Time Elasped: From 8am to 6pm <br/>
										<br/>
										Trip Dstination: <br/>
										From Starting point to Fantasy Kingdom (8am)<br/>
										From Fantasy Kingdom to Starting point (6pm)<br/>
										<br/>
										**Conditions:<br/>
										• Minimum 10 person required.<br/>
										• Valid Student ID card is required.<br/>
										• This package can be enjoyed only trough <b>TripRider</b> <br/>
										<br/>
										**For more detailed information, please call: 01913531384, 01913531517, 01977885507, 01914602965, 01939912533, 01937402947
										<br/>• Call us within 10 am to 4 pm from Sunday to Thursday</p>
									</td>
									<td>
										<img class="rounded" width="70%" src="../img/p5.jpg"/>
									</td>
									</tr>
									</table>
								</div>
                                <div class="tab-pane fade" id="Driver3">
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
														<td style="text-align:center">Rating
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
															<i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
														</td>
														<td style="text-align:center">
															Contact No:019xxxxxxxx
														</td>
													</tr>
													<tr>
														<td  style="text-align:center" colspan="2">
															<br/>
															<br/>
															<button onclick="window.location='viewDriver.html';" class="btn btn-secondary" >Reviews</button>
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
						<button class="btn btn-primary">Purchase</button>
						</div>
                        <!-- /.panel-body -->
                    </div>
        </div>
      </div>
    </div>
@endsection