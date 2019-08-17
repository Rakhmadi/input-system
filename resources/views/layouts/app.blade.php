<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sys</title>
        <link rel="shortcut icon" href="dsign/img/favicon.ico">
         <meta name="csrf-token" content="{{ csrf_token() }}">
        <link href="{{ URL::asset('dsign/css/bootstrap.min.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('dsign/css/style.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('dsign/plugins/bootstrap-datepicker/bootstrap-datepicker.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('dsign/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
        <script src="{{ URL::asset('dsign/js/jquery-2.1.1.min.js') }}"></script>
         <link href="{{ URL::asset('dsign/plugins/datatables/media/css/dataTables.bootstrap.css') }}" rel="stylesheet">
        <link href="{{ URL::asset('dsign/plugins/datatables/extensions/Responsive/css/dataTables.responsive.css') }}" rel="stylesheet">
       <script src="{{ URL::asset('dsign/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
       <script src="{{ URL::asset('dsign/chart.js') }}"></script>
 
    </head>
    <body>
        <div id="container" class="effect mainnav-lg navbar-fixed mainnav-fixed">
          
            <header id="navbar">
                <div id="navbar-container " class=" navbar-light boxed">
                    <div class="navbar-header navbar-light">
                        
                            <div class="brand-title" style="padding: 0 0 0 20px;">
                               <img src="{{ URL::asset('css/iop.png') }}" height="32px">
                            </div>
                        </a>
                    </div>
                   
                    <div class="navbar-content navbar-light clearfix">
                        <ul class="nav navbar-top-links pull-left">
                           
                            <li class="tgl-menu-btn">
                                <a class="mainnav-toggle" href="#"> <i class="fa fa-navicon fa-lg"></i> </a>
                            </li>
                           
                            <li id="profilebtn" class="hidden-xs">
                                <a href="JavaScript:void(0);"> <i class="fa fa-user fa-lg"></i> </a>
                            </li>
                           
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-envelope fa-lg"></i> <span class="badge badge-header badge-warning">9</span> 
                                </a>
                                <!--Message dropdown menu-->
                                <div class="dropdown-menu dropdown-menu-md with-arrow">
                                    <div class="pad-all bord-btm">
                                       <div class="h4 text-muted text-thin mar-no">You have 3 messages.</div>
                                    </div>
                                    <div class="nano scrollable">
                                        <div class="nano-content">
                                           
                                        </div>
                                    </div>
                                    <!--Dropdown footer-->
                                    <div class="pad-all bord-top">
                                        <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Messages </a>
                                    </div>
                                </div>
                            </li>
                           
                            <li class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle"> <i class="fa fa-bell fa-lg"></i> <span class="badge badge-header badge-danger">5</span> </a>
                                <!--Notification dropdown menu-->
                                <div class="dropdown-menu dropdown-menu-md with-arrow">
                                    <div class="pad-all bord-btm">
                                       <div class="h4 text-muted text-thin mar-no"> Notification </div>
                                    </div>
                                    <div class="nano scrollable">
                                        <div class="nano-content">
                                            <ul class="head-list">
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-primary"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">New comments waiting approval</div>
                                                            <small class="text-muted">15 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <span class="badge badge-success pull-right">90%</span>
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-danger"> <i class="fa fa-hdd-o fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">HDD is full</div>
                                                            <small class="text-muted">50 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-info"> <i class="fa fa-file-word-o fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Write a news article</div>
                                                            <small class="text-muted">Last Update 8 hours ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <span class="label label-danger pull-right">New</span>
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-purple"> <i class="fa fa-comment fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">Comment Sorting</div>
                                                            <small class="text-muted">Last Update 8 hours ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                                <!-- Dropdown list-->
                                                <li>
                                                    <a href="#" class="media">
                                                        <div class="media-left"> <span class="icon-wrap icon-circle bg-success"> <i class="fa fa-user fa-lg"></i> </span> </div>
                                                        <div class="media-body">
                                                            <div class="text-nowrap">New User Registered</div>
                                                            <small class="text-muted">4 minutes ago</small> 
                                                        </div>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <!--Dropdown footer-->
                                    <div class="pad-all bord-top">
                                        <a href="#" class="btn-link text-dark box-block"> <i class="fa fa-angle-right fa-lg pull-right"></i>Show All Notifications </a>
                                    </div>
                                </div>
                            </li>
                           
                        <ul class="nav navbar-top-links pull-right">
                            <!--Profile toogle button-->
                            <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                            <li class="hidden-xs" id="toggleFullscreen">
                                <a id="qw" class="icon icon-fullscreen" data-toggle="fullscreen" href="#" role="button">
                                <span class="sr-only">Toggle fullscreen</span>
                                </a>
                            </li>
                          
                            <li id="dropdown-user" class="dropdown">
                                <a href="#" data-toggle="dropdown" class="dropdown-toggle text-right">
                                    <span class="pull-right"></span>
                                    <div class="username hidden-xs">{{ Auth::user()->name }}</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right with-arrow">
                                    <!-- User dropdown menu -->
                                    <ul class="head-list">
                                        <li>
                                            <a href="#"> <i class="fa fa-user fa-fw fa-lg"></i> Profile </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-envelope fa-fw fa-lg"></i> Messages </a>
                                        </li>
                                        <li>
                                            <a href="#">  <i class="fa fa-gear fa-fw fa-lg"></i> Settings </a>
                                        </li>
                                        <li>
                                            <a href="#" onclick="event.preventDefault();document.getElementById('logout-form').submit();"> <i class="fa fa-sign-out fa-fw"></i> Logout </a>
                                        </li>
                                         <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                             @csrf
                                        </form>
                                    </ul>
                                </div>
                            </li>
                           
                        </ul>
                    </div>
                    
                </div>
            </header>
            
            <div class="boxed">
               
                <div id="content-container">
                    <div id="profilebody">
                        <div class="pad-all animated fadeInDown">
                            <div class="row">
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Users</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-users fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Inbox</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-envelope fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">FAQ</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-headphones fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Settings</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-cogs fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Calender</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-calendar fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-sm-6 col-md-6 col-xs-12">
                                    <div class="panel panel-default mar-no">
                                        <div class="panel-body">
                                            <a href="JavaScript:void(0);">
                                                <div class="pull-left">
                                                    <p class="profile-title text-bricky">Pictures</p>
                                                </div>
                                                <div class="pull-right text-bricky"> <i class="fa fa-picture-o fa-4x"></i> </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Page Title-->
                    <!--~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~-->
                    
                   
                    <div id="page-content">
                        @yield('content')
                         @yield('datas')
                    </div>
                    
                </div>
               
                <nav id="mainnav-container">
                    <div id="mainnav">
                      
                        <div id="mainnav-menu-wrap">
                            <div class="nano">
                                <div class="nano-content">
                                    <ul id="mainnav-menu" class="list-group">
                                        
                                        <li>
                                            <a href="javascript:void(0)">
                                            <i class="fa fa-home"></i>
                                            <span class="menu-title">Dashboard</span>
                                            <i class="arrow"></i>
                                            </a>
                                            
                                        </li>
                                      
                                        <li>
                                            <a href="{{ url('/inputing')}}">
                                            <i class="fa fa-th"></i>
                                            <span class="menu-title">
                                            <strong>Input</strong>
                                            </span>
                                            <i class="arrow"></i>
                                            </a>
                                            
                                        </li>
                                          <!--Menu list item-->
                                        <li>
                                            <a href="{{ url('/datas')}}">
                                            <i class=" glyphicon glyphicon-list"></i>
                                            <span class="menu-title">
                                            <strong>Data</strong>
                                            </span>
                                            <i class="arrow"></i>
                                            </a>
                                            
                                        </li>
                                          <!--Menu list item-->
                                        <li>
                                            <a href="{{url('/_________________________x___/')}}">
                                            <i class="fa fa-th"> </i>
                                            <span class="menu-title">
                                            <strong>Pending</strong>
                                            </span>
                                            <i class="arrow"></i>
                                            </a>
                                            
                                        </li>
                                        
                                        <li>
                                            <a href="#">
                                            <i class="fa fa-line-chart"></i>
                                            <span class="menu-title">Charts</span>
                                            <i class="arrow"></i>
                                            </a>
                                            
                                        </li>
                                        <li class="list-divider"></li>
                                        <!--Category name-->
                                        
                                            </ul>
                                        </li>
                                    </ul>
                                    
                                    <div class="mainnav-widget">
                                       
                                        <div class="show-small">
                                            <a href="#" data-toggle="menu-widget" data-target="#demo-wg-server">
                                            <i class="fa fa-desktop"></i>
                                            </a>
                                        </div>
                                        
                                        <div id="demo-wg-server" class="hide-small mainnav-widget-content">
                                            <ul class="list-group">
                                                <li class="list-header pad-no pad-ver">Info</li>
                                                <li class="mar-btm">
                                                    <p style="color:black;"> <i class="fa fa-desktop"> </i>  Your IP {{ Request::ip() }}</p>
                                                    </li>
                                            </ul>
                                        </div>
                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </nav>               
            </div>
            <footer id="footer">
               
                <div class="show-fixed pull-right">
                    <ul class="footer-list list-inline">
                        <li>
                            <p class="text-sm">SEO Proggres</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-danger"></div>
                            </div>
                        </li>
                        <li>
                            <p class="text-sm">Online Tutorial</p>
                            <div class="progress progress-sm progress-light-base">
                                <div style="width: 80%" class="progress-bar progress-bar-primary"></div>
                            </div>
                        </li>
                        <li>
                            <button class="btn btn-sm btn-dark btn-active-success">Checkout</button>
                        </li>
                    </ul>
                </div>
             
            
              
                <p class="pad-lft">&#0169; nitsu  Sesion : {{ csrf_token() }}  </p>
            </footer>
           
            <button id="scroll-top" class="btn"><i class="fa fa-chevron-up"></i></button>
            
        </div>

        <script type="text/javascript">

            $('.date').datepicker({
                    'format': 'yyyy/m/d',
                    'autoclose': true
                });

        </script>
        
        <script type="text/javascript">
            $('#ikl').click(function(){
                $('#fo').submit();
            });
            $('#poa').click(function(){
                $('#ini').sumbit();
            });
        </script>

        <script type="text/javascript">
            $(document).ready(function(){ 
            $('#fullscreen').show();
            });
        </script>
      
  
        <script src="{{ url::asset('js/app.js')}}"></script>
        <script src="{{ URL::asset('dsign/plugins/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
        <script src="{{ URL::asset('dsign/js/jquery-2.1.1.min.js') }}"></script>
        <script src="{{ URL::asset('dsign/js/bootstrap.min.js') }}"></script>
        <script src="{{ URL::asset('dsign/js/scripts.js') }}"></script>
        <script src="{{ URL::asset('dsign/js/jquery-ui.min.js') }}"></script>
        <script src="{{ URL::asset('dsign/plugins/datatables/media/js/jquery.dataTables.js') }}"></script>
        <script src="{{ URL::asset('dsign/plugins/datatables/media/js/dataTables.bootstrap.js') }}"></script>
        <script src="{{ URL::asset('dsign/js/demo/tables-datatables.js') }}"></script>
 
    </body>
</html>