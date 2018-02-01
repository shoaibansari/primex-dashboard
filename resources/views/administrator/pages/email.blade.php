@extends('administrator.layouts.master')

@section('title')
  Admin Dashboard | Email
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
	     	    	    	<div class="col-md-8">
                               <div class="card">
                                <div class="card-content">
                                    <div class="card-tite">
                                        <h3>Emails</h3>
                                    </div>
                                    <div class="alert alert-warning">
                                        <p class="notify" style="font-size: small !important;">Please select any email address from right side</p>
                                    </div>
                                
		                            </div><!-- end content-->
		                        </div><!--  end card  -->
		                    </div> <!-- end col-md-8 -->
                            
                            <div class="col-md-4">
		                        <div class="card">
		                            <div class="card-content">
		                                <div class="table-responsive">
		                                    <h5>Email Adress</h5>
		                                    <table class="table table-bordered">
		                                        
		                                        <tbody>
		                                            <tr>
		                                                <td>order@</td>
		                                            </tr>
		                                             <tr>
		                                                <td>support@</td>
		                                            </tr>
		                                             <tr>
		                                                <td>patricks@</td>
		                                            </tr>
		                                            <tr>
		                                                <td>denis@</td>
		                                            </tr>
		                                            <tr>
		                                                <td>test@</td>
		                                            </tr>
		                                            <tr>
		                                                <td>Manage Emails</td>
		                                            </tr>

		                                        </tbody>
		                                        
		                                    </table>
		                                    
		                                </div> <!--end table-responsive -->
		                                
		                            </div> <!-- end content -->
		                            
		                        </div> <!--  end card  -->
                  
                            </div> <!-- end col-md-4 -->

	     	    	    </div><!-- End row -->
	     	    	</div><!-- container-fluid -->
	     	    </div> <!--End Content -->
	    	</div> <!-- End Main-Panel -->
      </div><!-- wrapper -->
@endsection