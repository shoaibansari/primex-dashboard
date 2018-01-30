@extends('administrator.layouts.master')

@section('title')
  Admin Dashboard
@endsection


@section('content')
    
    <div class="wrapper">
    	<!-- Admin Sidebar Menu -->
    	@include('administrator.includes.sidebar')

    	<div class="main-panel ps-container ps-theme-default">
	     	
	     		 <!-- Admin Header -->
	     		@include('administrator.includes.header')

	  			<!-- fearure penel start -->
	  			<div class="content">
                  <div class="container-fluid">
                      <div class="header text-center">
                        <h3 class="title">Admin Features</h3>
                    </div>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="card">
                               
                                <div class="card-content">
                                    <div class="alert alert-info">
                                        <p class="notify">Awaiting Orders <span class="badge notify_right">534</span></p>
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify">Edit Request Awaiting<span class="badge notify_right">545</span></p>
                                    	
                                    </div>
                                    <div class="alert alert-info " >
                                         <p class="notify">Advance Payment<span class="badge notify_right">556</span></p>
                                       
                                    </div>
                                    <div class="alert alert-info ">
                                         <p class="notify">Ticket Managment<span class="badge notify_right">578</span></p>
                                
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify">View Unpiad Invoices<span class="badge notify_right">5878</span></p>
                                      
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify">Deleted Orders<span class="badge notify_right">556</span></p>
                                     
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify">View Cancel Orders<span class="badge notify_right">55</span></p>
                                       
                                    </div>
                                </div>
                            </div>
                        </div><!-- col-md-6 -->

                        <div class="col-md-6">
                            <div class="card">
                                
                                <div class="card-content">
                                    <div class="alert alert-info">
                                         <p class="notify">Awaiting Estimate<span class="badge notify_right">534</span></p>
                                                                                
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify">New Transactions<span class="badge notify_right">5434</span></p>
                                    
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify">Order Pending Payment <span class="badge notify_right">534</span></p>
                                       
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify"> Completed Estimates<span class="badge  notify_right">345</span></p>
                                       
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify"> View All Invoices <span class="badge notify_right">534</span></p>
                                      
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify">View All Edit Requests<span class="badge notify_right">5342</span></p>
                                         
                                    </div>
                                    <div class="alert alert-info">
                                         <p class="notify">View Cancel Edits<span class="badge notify_right">52322</span></p>
                                        
                                    </div>
                                </div>
                            </div>

                        </div><!-- col-md-6 -->  

                    </div><!-- row -->

               </div><!-- container-fluid -->

	 </div> <!--End Content -->
    </div> <!-- End Main-Panel -->
</div><!-- wrapper -->

@endsection