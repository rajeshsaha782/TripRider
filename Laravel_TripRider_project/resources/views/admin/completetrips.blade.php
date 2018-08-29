


<div class="panel-body">
    <div class="row">
        <div class="col-lg-4">
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
                        @foreach($result as $result)
                            <tr class="odd gradeX">
                               
                                <td><a href="viewprofile.html">{{$result->name}}</a></td>
                                <td><a href="viewprofilerider.html">{{$result->rider_id}}</a></td>
                                <td><a href="packagedetails.html">{{$result->id}}</a></td>
                                <td>{{$result->from}}</td>
                                <td>{{$result->to}}</td>
                                <td class="center">12-05-18</td>
                                <td class="center">12-05-18</td>
                                <td class="center">1200</td>
                            </tr>
                        @endforeach

                        
                    </tbody>
              </table>
            </div>
        </div>
    </div>
</div>