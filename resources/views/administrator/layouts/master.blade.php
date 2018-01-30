<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{ URL::to('public/assets/img/favicon1.png')}}" />
    <link rel="icon" type="image/png" href="{{ URL::to('public/assets/img/favicon1.png')}}" />
    <title>@yield('title')</title>
     
     <!-- CSS Styles links -->
     <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/assets/css/style.css')}}">
    <link href="{{ URL::to('public/assets/css/bootstrap.min.css')}}" rel="stylesheet" />
    <link href="{{ URL::to('public/assets/css/material-dashboard.css')}}" rel="stylesheet" />

    <!--Font Awesome Style Sheet-->
    <link rel="stylesheet" type="text/css" href="{{ URL::to('public/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" type="text/css" href="http://cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
    
   @yield('CSS')

</head>
<body>
    <div>
        @yield('content')
    </div>





<!-- JavaScript Files here-->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<script src="{{ URL::to('public/assets/js/jquery-3.2.1.min.js')}}"></script>
<script src="{{ URL::to('public/assets/js/perfect-scrollbar.jquery.min.js')}}"></script>
<script src="{{ URL::to('public/assets/js/jquery.datatables.js')}}"></script>
<script src="{{ URL::to('public/assets/js/bootstrap.min.js')}}"></script>
<script src="{{ URL::to('public/assets/js/material-dashboard.js')}}"></script>
<script src="{{ URL::to('public/assets/js/material.min.js')}}"></script>

 @yield('scripts')

</body>
</html>