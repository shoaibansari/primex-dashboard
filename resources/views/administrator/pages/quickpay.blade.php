@extends('administrator.layouts.master')

@section('title')
  Admin Dashboard | Quick Pay
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
            			<div class="col-xs-8 col-xs-offset-2">
            				<div class="card">
            					<div class="card-header card-header-icon" data-background-color="rose">
                                	 <h4 class="card-title">Quick Payments</h4>
                                </div>
                                <div class="card-content">
                                	<form class="form-horizontal">
                                        <div class="row">
                                            <label class="col-md-3 label-on-left">Client Name</label>
                                            <div class="col-md-9">
                                                <div class="form-group label-floating is-empty">
                                                    <input type="password" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 label-on-left">Invoice Title</label>
                                            <div class="col-md-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="password" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 label-on-left">Email</label>
                                            <div class="col-md-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="password" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3 label-on-left">Amount</label>
                                            <div class="col-md-9">
                                                <div class="form-group label-floating is-empty">
                                                    <label class="control-label"></label>
                                                    <input type="password" class="form-control">
                                                <span class="material-input"></span></div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <div class="form-group">
                                                	<label class="btn-bs-file btn btn-lg btn-primary" style="font-size: 12px;
    													padding: 6px 16px;">
                									Choose File<input type="file" /></label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <label class="col-md-3"></label>
                                            <div class="col-md-9">
                                                <div class="form-group form-button">
                                                    <button type="submit" class="btn btn-fill btn-rose">Send</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div><!-- End card-content -->
            				</div><!-- End card -->
            			</div><!-- End col-xs-8 col-xs-offset-2 -->
            		</div><!-- End row -->
                </div><!-- container-fluid -->
            </div> <!--End Content -->
	    </div> <!-- End Main-Panel -->
    </div><!-- wrapper -->
@endsection