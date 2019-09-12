<?php
session_start();
if (isset($_SESSION['Username'] )){

}
else
{
 //   header('Location: Login.php');
}






?>






<!DOCTYPE html>
<html lang="en">
<head>

    <!-- META TAGS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="SmartBox">

    <!-- TITLE -->
    <title>SmartBox | Bootstrap3 Admin Dashboard Template</title>

    <!-- FAVICON -->
    <link rel="shortcut icon" href="assets/images/favicon.png">

    <!-- STYLESHEETS -->
    <link rel="stylesheet" href="assets/plugins/morris/morris.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/core.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/components.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/icons.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/pages.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css" />

    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>

    <![endif]-->

    <!-- MODERNIZER -->
    <script src="assets/js/modernizr.min.js"></script>

</head>

<body class="fixed-left rtl-page">
<!-- Begin page -->
<div id="wrapper">
    <!-- Top Bar Start -->
    <div class="topbar">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="javascript:void(0)" class="logo d-logo hidden-xs hidden-sm">
            </a>
            <a href="javascript:void(0)" class="logo d-logo hidden visible-xs visible-sm">
                <img src="assets/images/m-logo.png" alt="SmartBox" class="img-responsive hidden-xs" height="0">
            </a>
            <!-- Image Logo here -->
        </div>

        <!-- Button mobile view to collapse sidebar menu -->
        <div class="navbar navbar-default" role="navigation">
            <div class="container">
                <div class="top-fix-navbar">
                    <div class="pull-left">
                        <button class="button-menu-mobile open-left waves-effect waves-light">
                            <i class="fa fa-outdent"></i>
                        </button>
                        <span class="clearfix"></span>
                    </div>
                    <ul class="nav navbar-nav hidden-xs">
                        <li class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
                            <ul class="dropdown-menu">
                                <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a>
                                </li>
                                <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a>
                                </li>
                                <li class="divider"></li>
                                <li><a href="logout.php"><i class="ti-power-off m-r-10 text-danger"></i>تسجيل الخروج</a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
<ul class="dropdown-menu">
                  <li><a href="javascript:void(0)">Action</a>
                                </li>
                                <li><a href="javascript:void(0)">Another action</a>
                                </li>
                                <li><a href="javascript:void(0)">Something else here</a>
                                </li>
                                <li><a href="javascript:void(0)">Separated link</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                
                    <ul class="nav navbar-nav navbar-right pull-right">
                        
                        <li class="dropdown top-menu-item-xs">
                       
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                <li class="list-group slimscroll-noti notification-list">
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-cog noti-warning"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-bell-o noti-custom"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">Updates</h5>
                                                <p class="m-0">
                                                    <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-user-plus noti-pink"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New user registered</h5>
                                                <p class="m-0">
                                                    <small>You have 10 unread messages</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-cog noti-warning"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="list-group-item text-right">
                                        <small class="font-600">See all notifications</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown top-menu-item-xs">
                            <a href="javascript:void(0)" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                                <i class="fa fa-bell-o"></i> <span class="badge badge-xs badge-danger">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                                <li class="list-group slimscroll-noti notification-list">
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-cog noti-warning"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-bell-o noti-custom"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">Updates</h5>
                                                <p class="m-0">
                                                    <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-user-plus noti-pink"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New user registered</h5>
                                                <p class="m-0">
                                                    <small>You have 10 unread messages</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-cog noti-warning"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">New settings</h5>
                                                <p class="m-0">
                                                    <small>There are new settings available</small>
                                                </p>
                                            </div>
                                        </div>
                                    </a>
                                </li>
                                <li>
                                    <a href="javascript:void(0);" class="list-group-item text-right">
                                        <small class="font-600">See all notifications</small>
                                    </a>
                                </li>
                            </ul>
                        </li>
                       
                    </ul>
                </div>
                <!--/.nav-collapse -->
            </div>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <div class="sidebar-inner slimscrollleft">
            <!--- Divider -->
            <div id="sidebar-menu">
                <ul>
                    <li class="menu-title">Navigation</li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"> <i class="fa fa-dashboard"></i> <span> Dashboard </span> <span class="label label-success pull-right">1</span> <span class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="dashboard.php">Dashboard1</a> </li>
                        </ul>
                    </li>



                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect subdrop"> <i class="fa fa-file"></i> <span> UI Elements </span> <span class="label label-warning pull-right">7</span> <span class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled block">

                            <li><a href="typography.html">Typography</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                            <li><a href="icons.html">Icons</a></li>
                            <li><a href="panels.html">Panels</a></li>
                            <li><a href="tabs-accordions.html">Tabs &amp; Accordions</a></li>
                            <li><a href="bootstrap-ui.html">BS Elements</a></li>
                            <li><a href="progressbars.html">Progress Bars</a></li>

                        </ul>
                    </li>

                    <li> <a href="mailbox.html" class="waves-effect"> <i class="fa fa-envelope"></i> <span> Mailbox </span> </a> </li>
                    <li> <a href="calendar.html" class="waves-effect"> <i class="fa fa-calendar"></i> <span> Calendar </span> </a> </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect subdrop"> <i class="fa fa-file"></i> <span> Pages </span> <span class="label label-warning pull-right">3</span> <span class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled block">
                            <li><a href="404.html">404</a> </li>
                            <li><a href="blank.html">Blank</a> </li>
                            <li><a href="buttons.html">Buttons</a> </li>
                        </ul>
                    </li>

                    <li> <a href="profile.html" class="waves-effect"> <i class="fa fa-user"></i> <span> Profile</span> </a> </li>


                    <li class="text-muted menu-title">Component</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"> <i class="fa fa-tasks"></i> <span> Forms </span>  <span class="label label-warning pull-right">3</span> <span class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="form-elements.html">Form Elements</a> </li>
                            <li><a href="login.php"> Login</a> </li>
                            <li><a href="login.php"> login2</a> </li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"> <i class="fa fa-table"></i> <span> Tabels </span> <span class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="tables.html">Tabel 1</a> </li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"> <i class="fa fa-area-chart"></i> <span> Charts </span> <span class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="chart.html">Charts 1</a> </li>
                        </ul>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="data-points col-md-12">
                <div class="title-text text-left m-b-20">Data Points</div>
                <p class="font-400">Milestone <span class="text-primary pull-right">80%</span> </p>
                <div class="progress m-b-30">
                    <div class="progress-bar progress-bar-primary progress-animated wow animated progress-80" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"> </div>
                    <!-- /.progress-bar .progress-bar-danger -->
                </div>
                <!-- /.progress .no-rounded -->
                <p class="font-400">Release <span class="text-pink pull-right">50%</span> </p>
                <div class="progress m-b-20">
                    <div class="progress-bar progress-bar-pink progress-animated wow animated progress-50" role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"> </div>
                    <!-- /.progress-bar .progress-bar-pink -->
                </div>
                <!-- /.progress .no-rounded -->
            </div>
        </div>
    </div>
    <!-- Left Sidebar End -->



    <!-- ============================================================== -->
    <!-- Start right Content here -->
    <!-- ============================================================== -->
    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <!-- Page-Title -->
            <div class="page-title-group">
                <h4 class="page-title">Dashboard</h4>
                <h5 class="text-muted page-title-alt">Dashboard & statistics!</h5>
            </div>
            <div class="cb-page-content">
                <div class="container">
                    <div class="row">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-primary">
                                <h2 class="m-0 text-white counter font-40 font-400 text-center">1349</h2>
                                <div class="text-white text-opt  m-t-5 text-center font-12">NEW FEEDBACKS</div>
                                <div class="sparkline1"></div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-success">
                                <h2 class="m-0 text-white counter font-40 font-400 text-center">$12,5 M</h2>
                                <div class="text-white text-opt m-t-5 text-center font-12">TOTAL PROFIT</div>
                                <div class="sparkline1"></div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-info">
                                <h2 class="m-0 text-white counter font-40 font-400 text-center">325</h2>
                                <div class="text-white text-opt m-t-5 text-center font-12">NEW ORDERS</div>
                                <div class="sparkline1"></div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-purple">
                                <h2 class="m-0 text-white counter font-40 font-400 text-center">+56%</h2>
                                <div class="text-white text-opt m-t-5 text-center font-12">BRAND POPULARITY</div>
                                <div class="sparkline1"></div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-warning">
                                <h2 class="m-0 text-white counter font-40 font-400 text-center">$12,500</h2>
                                <div class="text-white text-opt m-t-5 text-center font-12">REVENUE, 60% OF THE GOAL</div>
                                <div class="sparkline1"></div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="card-box">
                                        <div class="card-box-head">
                                            <h4 class="header-title m-t-0 pull-left">Analysis</h4>
                                            <div class="dropdown pull-right">
                                                <a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light text-dark" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Last 24 Hours<span class="caret"></span></a>
                                                <ul class="dropdown-menu whitebg">
                                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Last 24 Hours</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Last 24 Hours</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Last 24 Hours</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-box-content">
                                            <div class="row">
                                                <div class="col-md-8 col-sm-7">
                                                    <div id="morris-donut-example" class="bar-280"></div>
                                                </div>
                                                <div class="col-md-4 col-sm-5">
                                                    <ul class="list-inline chart-detail-list">
                                                        <li>
                                                            <h5><i class="fa fa-circle m-r-5 color-1"></i>United States</h5>
                                                        </li>
                                                        <li>
                                                            <h5><i class="fa fa-circle m-r-5 color-2"></i>Russia</h5>
                                                        </li>
                                                        <li>
                                                            <h5><i class="fa fa-circle m-r-5 color-3"></i>Itly</h5>
                                                        </li>
                                                        <li>
                                                            <h5><i class="fa fa-circle m-r-5 color-4"></i>Germany</h5>
                                                        </li>
                                                        <li>
                                                            <h5><i class="fa fa-circle m-r-5 color-5"></i>Other</h5>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="card-box">
                                        <div class="card-box-head">
                                            <h4 class="header-title m-t-0 pull-left">Statistics</h4>
                                            <div class="pull-right">
                                                <ul class="nav nav nav-pills cb-rounded-nav">
                                                    <li class="active"><a href="javascript:void(0)">Week</a></li>
                                                    <li><a href="javascript:void(0)">Month</a></li>
                                                    <li><a href="javascript:void(0)">Year</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-box-content">
                                            <div id="morris-area-example" class="bar-215"></div>
                                            <div class="cb-area-chart-des">
                                                <div class="row">
                                                    <div class="col-xs-3">
                                                        <div class="area-chart-count">3,438</div>
                                                        <div class="area-chart-text">Orders</div>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="area-chart-count">10,232</div>
                                                        <div class="area-chart-text">Sellings</div>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="area-chart-count">21,550</div>
                                                        <div class="area-chart-text">Items</div>
                                                    </div>
                                                    <div class="col-xs-3">
                                                        <div class="area-chart-count">5,118</div>
                                                        <div class="area-chart-text">Customers</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                    </div>
                    <!-- end row -->
                    <div class="row">
                        <div class="col-lg-8">
                            <div class="row">
                                <!-- Members -->
                                <div class="col-md-6">
                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b>Members</b> <span class="label label-success pull-right">35</span></h4>
                                        </div>
                                        <div class="card-box-content p-l-0 p-r-0">
                                            <div class="contact-list nicescroll">
                                                <ul class="list-group contacts-list">
                                                    <li class="list-group-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="thumb-box">
                                                                <i class="fa fa-circle danger"></i>
                                                                <img src="assets/images/users/avatar-1.jpg" alt="">
                                                            </div>
                                                            <div class="info-box">
                                                                <span class="info-name">Amelia Nelson</span>
                                                                <span class="info-prof">UI Graphic</span>
                                                            </div>
                                                        </a>
                                                        <span class="clearfix"></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="thumb-box">
                                                                <i class="fa fa-circle online"></i>
                                                                <img src="assets/images/users/avatar-2.jpg" alt="">
                                                            </div>
                                                            <div class="info-box">
                                                                <span class="info-name">Alyssa Molligan</span>
                                                                <span class="info-prof">Art director, Movie Cut</span>
                                                            </div>
                                                        </a>
                                                        <span class="clearfix"></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="thumb-box">
                                                                <i class="fa fa-circle online"></i>
                                                                <img src="assets/images/users/avatar-3.jpg" alt="">
                                                            </div>
                                                            <div class="info-box">
                                                                <span class="info-name">Kaitlyn Eddington</span>
                                                                <span class="info-prof">Writter, Mag Editor</span>
                                                            </div>
                                                        </a>
                                                        <span class="clearfix"></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="thumb-box">
                                                                <i class="fa fa-circle danger"></i>
                                                                <img src="assets/images/users/avatar-1.jpg" alt="">
                                                            </div>
                                                            <div class="info-box">
                                                                <span class="info-name">Amelia Nelson</span>
                                                                <span class="info-prof">UI Graphic</span>
                                                            </div>
                                                        </a>
                                                        <span class="clearfix"></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="thumb-box">
                                                                <i class="fa fa-circle danger"></i>
                                                                <img src="assets/images/users/avatar-1.jpg" alt="">
                                                            </div>
                                                            <div class="info-box">
                                                                <span class="info-name">Amelia Nelson</span>
                                                                <span class="info-prof">UI Graphic</span>
                                                            </div>
                                                        </a>
                                                        <span class="clearfix"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end col -->
                                <!-- CHAT -->
                                <div class="col-md-6">
                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b>Tasks</b></h4>
                                            <div class="dropdown pull-right card-drop-link">
                                                <a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light text-dark " data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-circle" aria-hidden="true"></i><i class="fa fa-circle" aria-hidden="true"></i><i class="fa fa-circle" aria-hidden="true"></i></a>
                                                <ul class="dropdown-menu whitebg">
                                                    <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Last 24 Hours</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Last 24 Hours</a>
                                                    </li>
                                                    <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Last 24 Hours</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="card-box-content p-l-0 p-r-0">
                                            <div class="contact-list  nicescroll">
                                                <ul class="list-group task-list">
                                                    <li class="list-group-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="thumb-icon bg-success">
                                                                <i class="fa fa-plus text-white"></i>
                                                            </div>
                                                            <div class="info-box">
                                                                <span class="info-des">Alexandra Jones <span class="text-muted">added a new project</span> Flat iOS UI Kit</span>
                                                                <span class="info-time"><i class="fa fa-life-buoy" aria-hidden="true"></i> Just now</span>
                                                            </div>
                                                        </a>
                                                        <span class="clearfix"></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="thumb-icon bg-purple">
                                                                <i class="fa fa fa-check text-white"></i>
                                                            </div>
                                                            <div class="info-box">
                                                                <span class="info-des">Alexandra Jones <span class="text-muted">added a new project</span> Flat iOS UI Kit</span>
                                                                <span class="info-time"><i class="fa fa-life-buoy" aria-hidden="true"></i> Just now</span>
                                                            </div>
                                                        </a>
                                                        <span class="clearfix"></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <a href="javascript:void(0)">
                                                            <div class="thumb-icon bg-red">
                                                                <i class="fa fa-close text-white" aria-hidden="true"></i>
                                                            </div>
                                                            <div class="info-box">
                                                                <span class="info-des">Alexandra Jones <span class="text-muted">added a new project</span> Flat iOS UI Kit</span>
                                                                <span class="info-time"><i class="fa fa-life-buoy" aria-hidden="true"></i> Just now</span>
                                                            </div>
                                                        </a>
                                                        <span class="clearfix"></span>
                                                    </li>
                                                    <li class="list-group-item">
                                                        <div class="thumb-icon bg-info">
                                                            <i class="fa fa-commenting-o text-white"></i>
                                                        </div>
                                                        <div class="info-box">
                                                            <span class="info-des">Alexandra Jones <span class="text-muted">added a new project</span> Flat iOS UI Kit</span>
                                                            <ul class="list-group list-inline avatar-group">
                                                                <li class="list-group-item">
                                                                    <div class="avatar">
                                                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="avatar">
                                                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="avatar">
                                                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                                                    </div>
                                                                </li>
                                                                <li class="list-group-item">
                                                                    <div class="avatar">
                                                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                            <span class="info-time"><i class="fa fa-life-buoy" aria-hidden="true"></i> Just now</span>
                                                        </div>
                                                        <span class="clearfix"></span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Activity app -->
                        <div class="col-lg-4">
                            <div class="card-box">
                                <div class="card-box-head  border-b m-t-0 ">
                                    <h4 class="header-title"><b>Activity</b> <span class="label label-success pull-right">35</span></h4>
                                </div>
                                <div class="card-box-content p-l-0 p-r-0">
                                    <div class="act-alert-info">
                                        10 members update their activies.
                                        <a href="javascript:void(0)" data-toggle="remove" class="pull-right"><i class="fa fa-close"></i></a>
                                        <div class="clearfix"></div>
                                    </div>
                                    <div class="contact-list  nicescroll">
                                        <ul class="list-group act-list">
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)">
                                                    <div class="act-thumb-box">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                                    </div>
                                                    <div class="info-box">
                                                        <span class="info-name">Louis Elliot <span class="text-muted">5 min ago</span></span>
                                                        <span class="info-des"><span class="text-muted">assign you a task Mockup Design</span> Mockup Design</span>
                                                    </div>
                                                </a>
                                                <span class="clearfix"></span>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)">
                                                    <div class="act-thumb-box">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                                    </div>
                                                    <div class="info-box">
                                                        <span class="info-name">Louis Elliot <span class="text-muted">5 min ago</span></span>
                                                        <span class="info-des"><span class="text-muted">assign you a task Mockup Design</span> Mockup Design</span>
                                                    </div>
                                                </a>
                                                <span class="clearfix"></span>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)">
                                                    <div class="act-thumb-box">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                                    </div>
                                                    <div class="info-box">
                                                        <span class="info-name">Louis Elliot <span class="text-muted">5 min ago</span></span>
                                                        <span class="info-des"><span class="text-muted">assign you a task Mockup Design</span> Mockup Design</span>
                                                    </div>
                                                </a>
                                                <span class="clearfix"></span>
                                            </li>
                                            <li class="list-group-item">
                                                <a href="javascript:void(0)">
                                                    <div class="act-thumb-box">
                                                        <img src="assets/images/users/avatar-1.jpg" alt="">
                                                    </div>
                                                    <div class="info-box">
                                                        <span class="info-name">Louis Elliot <span class="text-muted">5 min ago</span></span>
                                                        <span class="info-des"><span class="text-muted">assign you a task Mockup Design</span> Mockup Design</span>
                                                    </div>
                                                </a>
                                                <span class="clearfix"></span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- end row -->
                    <!--responsive tabel -->
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card-box">
                                <div class="card-box-head  border-b m-t-0">
                                    <h4 class="header-title"><b>Responsive Table</b> <span class="pull-right m-l-5"><i class="fa fa-cog"></i></span></h4>
                                </div>
                                <div class="card-box-content form-compoenent">
                                    <div class="cb-res-table">
                                        <div class="cb-table-search">
                                            <div class="dropdown pull-left ">
                                                <button type="button" class="btn btn-default btn-md dropdown-toggle waves-effect waves-light text-dark" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Bulk Action <span class="caret"></span>
                                                </button>
                                                <ul class="dropdown-menu whitebg drop-menu-checkbox">
                                                    <li>
                                                        <div class="checkbox checkbox-primary">
                                                            <input id="checkbox11" type="checkbox">
                                                            <label for="checkbox11">Select All</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="checkbox checkbox-primary">
                                                            <input id="checkbox12" type="checkbox">
                                                            <label for="checkbox12">Delete All</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <button type="button" class="btn btn-default waves-effect waves-light text-dark">Apply</button>
                                            </div>
                                            <div class="input-group pull-right cb-ta-search">
                                                <input type="text" class="form-control" placeholder="Search...">
                                                <span class="input-group-btn">
												<button class="btn btn-default" type="button">Go!</button>
												</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <br>
                                    <div class="table-responsive data-table">
                                        <table class="table table-bordred table-striped">
                                            <thead>
                                            <tr>
                                                <th></th>
                                                <th><b>Name</b></th>
                                                <th><b>Task</b></th>
                                                <th><b>Date</b></th>
                                                <th class="text-center"><b>Status</b></th>
                                                <th><b>Action</b></th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="thumb-box"> <img src="assets/images/users/avatar-2.jpg" alt=""> </div>
                                                    <b>Shaunta Pollan</b>
                                                </td>
                                                <td>Sketch out new idea for promote Great App</td>
                                                <td>Jul 25, 2015</td>
                                                <td><span class="badge btn-primary btn-sm">Done</span></td>
                                                <td>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-edit"></span></button>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-trash"></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="thumb-box"> <img src="assets/images/users/avatar-2.jpg" alt=""> </div>
                                                    <b>Shaunta Pollan</b>
                                                </td>
                                                <td>Sketch out new idea for promote Great App</td>
                                                <td>Jul 25, 2015</td>
                                                <td><span class="badge btn-yellow btn-sm">Ongoing</span></td>
                                                <td>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-edit"></span></button>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-trash"></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="thumb-box"> <img src="assets/images/users/avatar-2.jpg" alt=""> </div>
                                                    <b>Shaunta Pollan</b>
                                                </td>
                                                <td>Sketch out new idea for promote Great App</td>
                                                <td>Jul 25, 2015</td>
                                                <td><span class="badge btn-success btn-sm">In Review</span></td>
                                                <td>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-edit"></span></button>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-trash"></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="thumb-box"> <img src="assets/images/users/avatar-2.jpg" alt=""> </div>
                                                    <b>Shaunta Pollan</b>
                                                </td>
                                                <td>Sketch out new idea for promote Great App</td>
                                                <td>Jul 25, 2015</td>
                                                <td><span class="badge btn-pink btn-sm">Pending</span></td>
                                                <td>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-edit"></span></button>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-trash"></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="checkbox checkbox-primary">
                                                        <input type="checkbox">
                                                        <label></label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <div class="thumb-box"> <img src="assets/images/users/avatar-2.jpg" alt=""> </div>
                                                    <b>Shaunta Pollan</b>
                                                </td>
                                                <td>Sketch out new idea for promote Great App</td>
                                                <td>Jul 25, 2015</td>
                                                <td><span class="badge btn-danger btn-sm">Removed</span></td>
                                                <td>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-edit"></span></button>
                                                    <button class="btn btn-default btn-xs"><span class="fa fa-trash"></span></button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                                <td></td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="row mob-center">
                                        <div class="col-sm-5">
                                            <p>Showing 20-30 of 50 items</p>
                                        </div>
                                        <div class="col-sm-7">
                                            <ul class="pagination pull-right">
                                                <li><a href="dashboard.php#"><span class="fa fa-angle-double-left"></span></a></li>
                                                <li class="active"><a href="dashboard.php#">1</a></li>
                                                <li><a href="dashboard.php#">2</a></li>
                                                <li><a href="dashboard.php#">3</a></li>
                                                <li><a href="dashboard.php#">4</a></li>
                                                <li><a href="dashboard.php#">5</a></li>
                                                <li><a href="dashboard.php#"><span class="fa fa-angle-double-right"></span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container -->
        </div>
        <!-- content -->
        <footer class="footer text-right">
            &copy; 2017. All rights reserved.
        </footer>
    </div>

    <!-- ============================================================== -->
    <!-- End Right content here -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- Page Loader -->
<div class="page-loader">
    <a href="dashboard.php#"><img src="assets/images/logo-2.png" class="img-responsive center-block" alt=""/></a>
    <span class="text-uppercase">Loading...</span>
</div>

<!-- SmartBox Js files -->
<script>
    var resizefunc = [];
</script>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/pace.min.js"></script>
<script src="assets/js/loader.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/pages/jquery.todo.js"></script>
<script src="assets/plugins/moment/moment.js"></script>
<script src="assets/plugins/morris/morris.min.js"></script>
<script src="assets/plugins/raphael/raphael-min.js"></script>
<script src="assets/plugins/jquery-sparkline/jquery.sparkline.min.js"></script>
<script src="assets/pages/jquery.charts-sparkline.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/js/cb-chart.js"></script>

</body>
</html>

