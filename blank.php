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
    <link rel="stylesheet" href="assets/css/all.css" type="text/css"/>
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

<body class="fixed-left close-it rtl-page">

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
						<button class="button-menu-mobile open-left waves-effect waves-light"> <i class="fa fa-outdent"></i> </button>
						<span class="clearfix"></span> 
					</div>
					<ul class="nav navbar-nav hidden-xs">
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user"></i></a>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a> </li>
								<li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a> </li>
								<li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a> </li>
								<li class="divider"></li>
								<li><a href="javascript:void(0)"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a> </li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mega<span
								class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0)">Action</a> </li>
								<li><a href="javascript:void(0)">Another action</a> </li>
								<li><a href="javascript:void(0)">Something else here</a> </li>
								<li><a href="javascript:void(0)">Separated link</a> </li>
							</ul>
						</li>
						<li class="dropdown">
							<a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">New<span
								class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0)">New Theme</a> </li>
								<li><a href="javascript:void(0)">New Update</a> </li>
								<li><a href="javascript:void(0)">New World</a> </li>
							</ul>
						</li>
					</ul>
					<form role="search" class="navbar-left app-search pull-left hidden-xs">
						<input type="text" placeholder="Search project..." class="form-control">
						<a href="javascript:void(0)"><i class="fa fa-search"></i></a>
					</form>
					<ul class="nav navbar-nav navbar-right pull-right">
						<li class="dropdown hidden-xs">
							<a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">English<span
								class="caret"></span></a>
							<ul class="dropdown-menu">
								<li><a href="javascript:void(0)">French</a> </li>
								<li><a href="javascript:void(0)">Russian</a> </li>
							</ul>
						</li>
						<li class="dropdown top-menu-item-xs">
							<a href="javascript:void(0)" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"> <i class="fa fa-calendar"></i> <span class="badge badge-xs badge-danger">5</span> </a>
							<ul class="dropdown-menu dropdown-menu-lg">
								<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
								<li class="list-group slimscroll-noti notification-list">
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-diamond noti-primary"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">A new order has been placed A new order has been placed</h5>
												<p class="m-0"> <small>There are new settings available</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-cog noti-warning"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">New settings</h5>
												<p class="m-0"> <small>There are new settings available</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-bell-o noti-custom"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">Updates</h5>
												<p class="m-0"> <small>There are <span class="text-primary font-600">2</span> new updates available</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-user-plus noti-pink"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">New user registered</h5>
												<p class="m-0"> <small>You have 10 unread messages</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-diamond noti-primary"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">A new order has been placed A new order has been placed</h5>
												<p class="m-0"> <small>There are new settings available</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-cog noti-warning"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">New settings</h5>
												<p class="m-0"> <small>There are new settings available</small> </p>
											</div>
										</div>
									</a>
								</li>
								<li> <a href="javascript:void(0);" class="list-group-item text-right"> <small class="font-600">See all notifications</small> </a> </li>
							</ul>
						</li>
						<li class="dropdown top-menu-item-xs">
							<a href="javascript:void(0)" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"> <i class="fa fa-bell-o"></i> <span class="badge badge-xs badge-danger">3</span> </a>
							<ul class="dropdown-menu dropdown-menu-lg">
								<li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
								<li class="list-group slimscroll-noti notification-list">
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-diamond noti-primary"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">A new order has been placed A new order has been placed</h5>
												<p class="m-0"> <small>There are new settings available</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-cog noti-warning"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">New settings</h5>
												<p class="m-0"> <small>There are new settings available</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-bell-o noti-custom"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">Updates</h5>
												<p class="m-0"> <small>There are <span class="text-primary font-600">2</span> new updates available</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-user-plus noti-pink"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">New user registered</h5>
												<p class="m-0"> <small>You have 10 unread messages</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-diamond noti-primary"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">A new order has been placed A new order has been placed</h5>
												<p class="m-0"> <small>There are new settings available</small> </p>
											</div>
										</div>
									</a>
									<!-- list item--> 
									<a href="javascript:void(0);" class="list-group-item">
										<div class="media">
											<div class="pull-left p-r-10"> <em class="fa fa-cog noti-warning"></em> </div>
											<div class="media-body">
												<h5 class="media-heading">New settings</h5>
												<p class="m-0"> <small>There are new settings available</small> </p>
											</div>
										</div>
									</a>
								</li>
								<li> <a href="javascript:void(0);" class="list-group-item text-right"> <small class="font-600">See all notifications</small> </a> </li>
							</ul>
						</li>
						<li class="dropdown top-menu-item-xs"> <a href="javascript:void(0)" class="right-bar-toggle profile waves-effect waves-light"><span class="user-name">Hoang.Thai</span> <span class="caret"></span> <img src="assets/images/users/avatar-1.jpg" alt="user-img" class="img-circle"> </a> </li>
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
							<li><a href="dashboard.html">Dashboard1</a> </li>
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
							<li><a href="login.html"> Login</a> </li>
							<li><a href="login2.html"> login2</a> </li>
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
				<h4 class="page-title">Blank Page</h4>
				<h5 class="text-muted page-title-alt">Sub Title</h5>
			</div>
		</div>
		<!-- container --> 
	</div>
	<!-- content -->
	
	<!-- ============================================================== --> 
	<!-- End Right content here --> 
	<!-- ============================================================== --> 
<!-- Right Sidebar -->
	<div class="side-bar right-bar">
		<div class="slimscrollleft">
			<!-- Cotact list -->
			<div class="contact-list">
				<div class="contact-list-link">
					<ul class="nav nav-tabs tabs">
						<li class="active tab">
							<a href="blank.html#cl-tab1" data-toggle="tab" aria-expanded="false">
							<i class="fa fa-users"></i>
							</a>
						</li>
						<li class="tab">
							<a href="blank.html#cl-tab2" data-toggle="tab" aria-expanded="false">
							<i class="fa fa-comments"></i>
							</a>
						</li>
						<li class="tab">
							<a href="blank.html#cl-tab3" data-toggle="tab" aria-expanded="false">
							<i class="fa fa-gear"></i>
							</a>
						</li>
					</ul>
				</div>
				<div class="tab-content">
					<!-- Active Contact -->
					<div class="tab-pane active" id="cl-tab1">
						<h4 class="text-center">Who to follow</h4>
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
										<span class="">Writter, Mag Editor</span>
									</div>
								</a>
								<span class="clearfix"></span>
							</li>
						</ul>
						<div class="text-center"><a href="javascript:void(0)" class="btn btn-primary dropdown-toggle waves-effect m-t-30">More Connections</a>
						</div>
					</div>
					<!-- Active Contact -->
					<div class="tab-pane active" id="cl-tab2">
						<h4 class="text-center">Conversation</h4>
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
										<span class="">Writter, Mag Editor</span>
									</div>
								</a>
								<span class="clearfix"></span>
							</li>
						</ul>
						<div class="text-center"><a href="javascript:void(0)" class="btn btn-primary dropdown-toggle waves-effect m-t-30">More Connections</a>
						</div>
					</div>
					<!-- Active Contact -->
					<div class="tab-pane active" id="cl-tab3">
						<h4 class="text-center">Setting</h4>
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
										<span class="">Writter, Mag Editor</span>
									</div>
								</a>
								<span class="clearfix"></span>
							</li>
						</ul>
						<div class="text-center"><a href="javascript:void(0)" class="btn btn-primary dropdown-toggle waves-effect m-t-30">More Connections</a>
						</div>
					</div>
				</div>
			</div>
			<div class="clear"></div>
			<!-- Todos app -->
			<div class="cb-todo-app">
				<div class="todo-head">
					<h4 class="m-t-50 m-b-0 p-l-20 header-title">
						<b>Todo</b> 
					</h4>
					<small id="todo-message" class="p-l-20">
					<span id="todo-remaining"></span> 
					of <span id="todo-total"></span>
					remaining
					</small>
				</div>
				<div class="todoapp">
					<ul class="list-group no-margn nicescroll todo-list bar-280" id="todo-list"></ul>
					<form name="todo-form" id="todo-form" class="m-t-20">
						<div class="row">
							<div class="col-sm-8 todo-inputbar">
								<input type="text" id="todo-input-text" name="todo-input-text" class="form-control" placeholder="Add new todo">
							</div>
							<div class="col-sm-4 todo-send">
								<button class="btn-primary btn-md btn-block btn waves-effect waves-light" type="button" id="todo-btn-submit">Add</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- end row -->
	<!-- /Right-bar -->
</div>
<!-- END wrapper -->

<!-- Page Loader --> 
<div class="page-loader">
	<a href="blank.html#"><img src="assets/images/logo-2.png" class="img-responsive center-block" alt=""/></a>
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