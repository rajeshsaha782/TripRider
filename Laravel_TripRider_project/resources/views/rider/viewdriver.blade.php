@extends('layouts.rider')

@section('title')
 Dashboard | Rider
@endsection

@section('content')

<style>
td {text-align:center}
</style>

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
		<table width="70%" class="center" style="margin: 0px auto;" >
				<tr>
					<td colspan="3">
						  <img src="../img/user_pic.jpg" style="width:12%" class="rounded-circle">
						  <h2>Driver Name</h2>
						  <br/>
						  <br/>
					</td>
				</tr>
				<tr>
					<td width="33%">
						<div style="margin: 0px auto;width:50%" class="card bg-secondary text-white">
						<b>Rating</b>
						<p> 
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      <i class="fa fa-star" style="font-size: 20px;color:#FFDF00"></i>
                      </p>  
					  
						</div>
						<br/>
						<br/>
					</td>
					<td width="33%">
						<div style="margin: 0px auto;width:60%" class="card bg-secondary text-white">
						<b>Experience</b>
						<p>3 years</p>
						</div>
						<br/>
						<br/>
					</td>
					<td >
						<div style="margin: 0px auto;width:65%" class="card bg-secondary text-white">
						<b>Completed Services</b>
						<p>21321</p>
						</div>
						<br/>
						<br/>
					</td>
					
					
				</tr>
				<tr>
					<td  ><button type="submit" class="btn btn-outline-primary" data-toggle="modal" data-target="#messageModal">Message</button></td>
					<td></td>
					<td  ><input type="button" class="btn btn-outline-primary" value="Show Phone No." onclick="change()" id="myButton1"/></td>
				</tr>
				<tr>
					<td colspan="3">
					<br/>
						<b>Reviews</b><br/><br/>
						<table class="table table-primary table-striped">
							<tr >
								<td width="10%"><img src="../img/user_pic.jpg" style="width:100%" class="rounded-circle"> <b>John</b></td>
								<td class="text-justify">Good Service</td>
							</tr>
							<tr >
								<td width="10%"><img src="../img/user_pic.jpg" style="width:100%" class="rounded-circle"> <b>John</b></td>
								<td class="text-justify">Good Service</td>
							</tr>
							<tr >
								<td width="10%"><img src="../img/user_pic.jpg" style="width:100%" class="rounded-circle"> <b>John</b></td>
								<td class="text-justify">Good Service</td>
							</tr>
						</table>
					</td>
				</tr>
			
		</table>
			
		  
		  
        </div>
      </div>
    </div>
	<div class="modal fade" id="messageModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Send Message</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
			<table width="100%">
				<tr>
					<td>To:<br/><br/><br/></td>
					<td ><button type="submit" class="btn float-left" style="cursor:default;">Robi Ullah</button><br/><br/><br/></td>
				</tr>
				<tr>
					<td>Message:</td>
					<td><textarea id="message" name="message" style="width:100%;height:100px" placeholder="Write something.." ></textarea></td>
				</tr>
			</table>
				
		  </div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <button class="btn btn-primary" onclick="" data-dismiss="modal" data-toggle="modal" data-target="#successfulModal">Send</button>
          </div>
        </div>
      </div>
    </div>
 
	<script>
function change()
{
    document.getElementById("myButton1").value="01911111111"; 
}
</script>

@endsection