@extends('administrator.layouts.master')

@section('title')
  Admin Dashboard | Tickets
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
                                        <h3>Tickets</h3>
                                    </div>

                                    <div class="table-responsive">
                                        <table class="table">
                                          <thead class="text-primary">
                                            <tr>
                                                <th>Date</th>
                                                <th>Subject</th>
                                                <th>Priority</th>
                                                <th>Status</th>
                                               
                                            </tr>
                                          </thead>
                                        <tbody>
                                            <tr>
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
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>        
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>        
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>        
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>        
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>    
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>     
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>    
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>  
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>      
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>  
                                            </tr>
                                            <tr>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                                <td>Row 1 Data 1</td>
                                                <td>Row 1 Data 2</td>
                                            </tr>
                                            
                                         </tbody>
                                    </table>
                                    </div>
                                    <div class="text-center">
                                        <ul class="pagination pager">
                                            <li class="paginate_button first active"><a href="">First</a></li>
                                             <li class="paginate_button previous"><a href="">Previous</a></li>
                                            <li><a href="#">1</a></li>
                                            <li><a href="#">2</a></li>
                                            <li class="active"><a href="#">3</a></li>
                                            <li><a href="#">4</a></li>
                                            <li><a href="#">5</a></li>
                                            <li class="paginate_button previous"><a href="">Last</a></li>  
                                        </ul>   
                                    </div>
                                
	                            </div> <!-- end content-->
	                        </div> <!--  end card  -->
	                    </div> <!-- end col-md-8 -->

	                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-content">
                                <div class="table-responsive">
                                    <h5>Priority</h5>
                                    <table class="table table-bordered">    
                                        <tbody>
                                            <tr>
                                                <td>Low</td>
                                            </tr>
                                             <tr>
                                                <td>Medium</td>
                                            </tr>
                                             <tr>
                                                <td>High</td>
                                            </tr>
                                        </tbody>   
                                    </table>   
                                </div>    
                            </div> <!-- card-content -->
                        </div> <!-- card -->
                         <div class="card">
                            <div class="card-content">
                                <div class="table-responsive">
                                    <h5>Status</h5>
                                    <table class="table table-bordered">
                                        
                                        <tbody>
                                            <tr>
                                                <td>Pending Tickets<span class="badge notify_right">5</span></td>
                                            </tr>
                                             <tr>
                                                <td>Answered Tickets<span class="badge notify_right">521</span></td>
                                            </tr>
                                             <tr>
                                                <td>close Tickets<span class="badge notify_right">4545</span></td>
                                            </tr>
                                        </tbody>
                                        
                                    </table>        
                                </div> 
                            </div> <!-- card-content -->
                         </div> <!-- card -->                   
                      </div><!-- end col-md-4 -->

	     			</div> <!-- End row -->
	     		</div> <!-- container-fluid -->
	     	</div> <!--End Content -->
	    </div> <!-- End Main-Panel -->
     </div> <!-- wrapper -->
@endsection