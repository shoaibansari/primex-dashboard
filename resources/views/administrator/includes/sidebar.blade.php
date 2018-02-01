<!-- side bar start -->
		<div class="sidebar" data-color="purple">
            <div class="logo">
                <a href="#" class="simple-text">
                   <img src="{{ URL::to('public/assets/img/logo.png') }}">
                </a>
            </div>
            <div class="sidebar-wrapper ps-container ps-theme-default">
                <ul class="nav">
                    <li class="{{ Request::is('admin/dashboard') ? 'active' : '' }}">
                        <a href="{{ route('dashboard') }}">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/orders') ? 'active' : '' }}">
                        <a href="{{ route('order') }}">
                            <i class="fa fa-bars" aria-hidden="true"></i>
                            <p>Orders</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/editDetails') ? 'active' : '' }}">
                        <a href="{{ route('edit') }}">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                            <p>Edits</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/estimateDetails') ? 'active' : '' }}">
                        <a href="{{ route('estimate') }}">
                            <i class="material-icons">content_paste</i>
                            <p>Estimates</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/email') ? 'active' : '' }}">
                        <a href="{{ route('email') }}">
                            <i class="material-icons">email</i>
                            <p>Emails</p>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                           <i class="fa fa-users" aria-hidden="true"></i>
                            <p>Users</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/quickpay') ? 'active' : '' }}">
                        <a href="{{ route('quickpay') }}">
                            <i class="fa fa-money" aria-hidden="true"></i>
                            <p>Quick Pay</p>
                        </a>
                    </li>
                     <li class="{{ Request::is('admin/tickets') ? 'active' : '' }}">
                        <a href="{{ route('tickets') }}">
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                            <p>Tickets</p>
                        </a>
                    </li>                   
                </ul>
          
    </div> <!-- sidebar-wrapper -->
</div> <!-- sidebar end -->