@extends('administrator.layouts.master')

@section('title')
  Admin Dashboard | Orders
@endsection


@section('content')
    <div class="wrapper">

    	<!-- Admin Sidebar Menu -->
    	@include('administrator.includes.sidebar')

    	<div class="main-panel ps-container ps-theme-default">
	     	
	     	<!-- Admin Header -->
	     	@include('administrator.includes.header')

	     	<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                               
                    <div class="card-content">
                        <div class="toolbar">
                            <h3>Orders</h3>
                            <hr>
                        </div>

                                    <div class="table-responsive">
                                        <table id="order_id" class="display">
                                          <thead>
                                            <tr>
                                                <th>Job Id</th>
                                                <th>Date</th>
                                                <th>User</th>
                                                <th>Design Name</th>
                                                <th>Stiches</th>
                                                <th>Amount</th>
                                                <th>status</th>
                                                <th>Urgency of Time</th>
                                                <th>Type</th>
                                                <th>View</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 145 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 14545 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1545 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 RTRTData 2</td>
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                            </tr>
                                         </tbody>
                                    </table>
                                    </div> <!-- End table-responsive -->                                   
                            </div>
                            <!-- end card content-->
                        </div>
                        <!--  end card  -->
                    </div>
                    <!-- end col-md-12 -->
                </div>
                <!-- end row -->

            </div><!-- container-fluid -->

	 </div> <!--End Content -->
    </div> <!-- End Main-Panel -->

    
</div><!-- wrapper -->


	@section('scripts')
        <script>
          $(document).ready( function () {
            $('#order_id').DataTable();
          } );
        </script>
    @endsection

@endsection
