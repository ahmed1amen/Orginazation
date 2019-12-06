<?php
include 'Includes/config.php';
DBClass::connect();


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
    <title>لوحة التحكم</title>

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
    <link rel="stylesheet" href="assets/css/animate.css" type="text/css"/>
    <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="assets/js/tileJs.js" type="text/javascript"></script>
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
            <?php include('Includes/navbar.php'); ?>
        </div>
    </div>
    <!-- Top Bar End -->

    <!-- ========== Left Sidebar Start ========== -->
    <div class="left side-menu">
        <?php include('Includes/sidebar.php'); ?>
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
                <h3 class="page-title">لوحة التحكم</h3>
                <h5 class="text-muted page-title-alt">الأدارة والأحصائيات</h5>
            </div>
            <div class="cb-page-content">
                <div class="container">

                    <div class="row  animated zoomInLeft">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-warning">

                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM areas");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-dark counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";

                                ?>
                                <div class="text-dark text-opt  m-t-5 text-center font-12">عدد المناطق</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-primary">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM office_data");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>
                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد المكاتب الحالية</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-primary">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM employee_data");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>
                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد الموظفين</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-primary">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM knower");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>
                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد المعرفون</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-purple">
                                <?php

                                $stmt = DBClass::$con->prepare("SELECT * FROM family");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>
                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد العائلات</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row animated zoomInRight">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-danger">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM agent");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>
                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد الوكلاء</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-warning">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM groups");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-dark counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>
                                <div class="text-dark text-opt  m-t-5 text-center font-12">عدد المجاميع</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-warning">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM registers");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-dark counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>
                                <div class="text-dark text-opt  m-t-5 text-center font-12">عدد المشتركين</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-primary">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM sections");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>
                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد القطاعات الحالية</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-primary">

                                <?php

                                $stmt = DBClass::$con->prepare("SELECT * FROM donors");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>
                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد المبرات الحالية</div>
                                <div class="sparkline1">
                                    <canvas width="266" height="20"
                                            style="display: inline-block; width: 266px; height: 20px; vertical-align: top;"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-lg-12">
                            <div class="row">

                                <div class="card-box animated bounceInUp">
                                    <div class="card-box-head">
                                        <h4 class="header-title m-t-0 pull-left">ادارة المستتخدمين</h4>

                                    </div>
                                    <div class="card-box-content">
                                        <div class="row">
                                            <a style="color: #ffffff;" href="users.php?do=view">
                                                <div class="cb-col-20 col-sm-6">

                                                    <div class="widget-panel widget- bg-custom ">


                                                        <h2 class='m-0 text-white counter font-40 font-400 text-center '></h2>


                                                        <i style="display: flex ; justify-content: center; position: unset ; padding: unset; background: unset;"
                                                           class="fas fa-user-cog"></i>


                                                        <div class="text-white text-opt  m-t-5 text-center font-12">تعديل المستخدمين</div>

                                                    </div>
                                                </a>
                                        </div>


                                        <a style="color: #ffffff;" href="Employee.php?do=view">
                                            <div class="cb-col-20 col-sm-6">

                                                <div class="widget-panel widget- bg-custom">


                                                    <h2 class='m-0 text-white counter font-40 font-400 text-center '></h2>


                                                    <i style="display: flex ; justify-content: center; position: unset ; padding: unset; background: unset;"
                                                       class="fas fa-user-tie"></i>


                                                    <div class="text-white text-opt  m-t-5 text-center font-12">تعديل الموظفين</div>

                                                </div>
                                        </a>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </div>
                    <!-- end row -->
                </div>
            </div>
            <!-- end row -->


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

