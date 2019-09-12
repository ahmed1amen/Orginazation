<?php
session_start();
if (isset($_SESSION['Username'])) {
// في موظف مسجل الدخول كده .
} else {
// كده مفيش , ف حوله علي اللوجن الخاص ب الموظفين
//    header('Location: EmpLogin.php');

}


// دي بتتنفذ فقط اذا تم عمل بوست من الفورم الي في الدااتا , وعلشان ال Validate حطيت attribute اسمه required ف كل input علشان يسهل علينا ال Validate بدل ما نعمله ب IF
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["do"] == "add") {


// انادي علي الكونفج الي هوا هيمعلي ال Connection مع الداتا بيز
        include 'config.php';
        header('Content-Type: text/html; charset=utf-8');


// الداتا الي جايه من الفورم عملتلها ريتريف في متغيرات
        /* $employee_name=$_POST["employee_name"];
        $employee_number=$_POST["employee_number"];
        $employee_address=$_POST["employee_address"];
        $employee_salary=$_POST["employee_salary"];
        $employee_jobName=$_POST["employee_jobName"];
        $employee_email=$_POST["employee_email"];
        $employee_password=$_POST["employee_password"];
        $employee_office=$_POST["employee_office"];
            $employee_office=$_POST["employee_office"];

        if(empty($employee_name) || empty($employee_number)
        || empty($employee_address) || empty($employee_salary)
        || empty($employee_jobName) || empty($employee_email)
        || empty($employee_password) || empty($employee_office))
        {
        $message = "Fill all fields/برجاء إدخال جميع البيانات";
        echo "<script type='text/javascript'>alert('$message');</script>";
        }
        else
        {

        // دي طريقه اسمها PDO ف ال PHP  , تعامل اسهل مع قاعده البيانات
        $stmt = $con->prepare("INSERT INTO Employee_Data(employee_name, employee_number, employee_address, employee_salary, employee_jobName, employee_email, employee_password, employee_office) VALUES ('$employee_name','$employee_number','$employee_address','$employee_salary','$employee_jobName','$employee_email','$employee_password','$employee_office')");
        $stmt->execute();
        // بس خلاص الموظف اضاف تمام كده
        }*/


    }


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
    <link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/core.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/components.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/icons.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/pages.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/responsive.css" type="text/css"/>

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
                            <a href="javascript:void(0)" class="dropdown-toggle waves-effect waves-light"
                               data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i
                                        class="fa fa-user"></i></a>
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
                                <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification
                                </li>
                                <li class="list-group slimscroll-noti notification-list">
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has
                                                    been placed</h5>
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
                                                    <small>There are <span class="text-primary font-600">2</span> new
                                                        updates available
                                                    </small>
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
                                                <h5 class="media-heading">A new order has been placed A new order has
                                                    been placed</h5>
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
                            <a href="javascript:void(0)" data-target="#"
                               class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown"
                               aria-expanded="true">
                                <i class="fa fa-bell-o"></i> <span class="badge badge-xs badge-danger">3</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-lg">
                                <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification
                                </li>
                                <li class="list-group slimscroll-noti notification-list">
                                    <!-- list item-->
                                    <a href="javascript:void(0);" class="list-group-item">
                                        <div class="media">
                                            <div class="pull-left p-r-10">
                                                <em class="fa fa-diamond noti-primary"></em>
                                            </div>
                                            <div class="media-body">
                                                <h5 class="media-heading">A new order has been placed A new order has
                                                    been placed</h5>
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
                                                    <small>There are <span class="text-primary font-600">2</span> new
                                                        updates available
                                                    </small>
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
                                                <h5 class="media-heading">A new order has been placed A new order has
                                                    been placed</h5>
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
                        <a href="javascript:void(0);" class="waves-effect"> <i class="fa fa-dashboard"></i> <span> Dashboard </span>
                            <span class="label label-success pull-right">1</span> <span
                                    class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="dashboard.php">Dashboard1</a></li>
                        </ul>
                    </li>


                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect subdrop"> <i class="fa fa-file"></i> <span> UI Elements </span>
                            <span class="label label-warning pull-right">7</span> <span
                                    class="fa fa-angle-right cb-nav-arrow"></span> </a>
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

                    <li><a href="mailbox.html" class="waves-effect"> <i class="fa fa-envelope"></i>
                            <span> Mailbox </span> </a></li>
                    <li><a href="calendar.html" class="waves-effect"> <i class="fa fa-calendar"></i>
                            <span> Calendar </span> </a></li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect subdrop"> <i class="fa fa-file"></i> <span> Pages </span>
                            <span class="label label-warning pull-right">3</span> <span
                                    class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled block">
                            <li><a href="404.html">404</a></li>
                            <li><a href="blank.html">Blank</a></li>
                            <li><a href="buttons.html">Buttons</a></li>
                        </ul>
                    </li>

                    <li><a href="profile.html" class="waves-effect"> <i class="fa fa-user"></i> <span> Profile</span>
                        </a></li>


                    <li class="text-muted menu-title">Component</li>

                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"> <i class="fa fa-tasks"></i>
                            <span> Forms </span> <span class="label label-warning pull-right">3</span> <span
                                    class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="form-elements.html">Form Elements</a></li>
                            <li><a href="login.php"> Login</a></li>
                            <li><a href="login.php"> login2</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"> <i class="fa fa-table"></i>
                            <span> Tabels </span> <span class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="tables.html">Tabel 1</a></li>
                        </ul>
                    </li>
                    <li class="has_sub">
                        <a href="javascript:void(0);" class="waves-effect"> <i class="fa fa-area-chart"></i> <span> Charts </span>
                            <span class="fa fa-angle-right cb-nav-arrow"></span> </a>
                        <ul class="list-unstyled">
                            <li><a href="chart.html">Charts 1</a></li>
                        </ul>
                    </li>

                </ul>
                <div class="clearfix"></div>
            </div>
            <div class="clearfix"></div>
            <div class="data-points col-md-12">
                <div class="title-text text-left m-b-20">Data Points</div>
                <p class="font-400">Milestone <span class="text-primary pull-right">80%</span></p>
                <div class="progress m-b-30">
                    <div class="progress-bar progress-bar-primary progress-animated wow animated progress-80"
                         role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
                    <!-- /.progress-bar .progress-bar-danger -->
                </div>
                <!-- /.progress .no-rounded -->
                <p class="font-400">Release <span class="text-pink pull-right">50%</span></p>
                <div class="progress m-b-20">
                    <div class="progress-bar progress-bar-pink progress-animated wow animated progress-50"
                         role="progressbar" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"></div>
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
                <h4 class="page-title">العائلات</h4>
                <h5 class="text-muted page-title-alt">اضافه جديد</h5>
            </div>
            <div class="cb-page-content">
                <div class="container">
                    <div class="row">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-purple">
                                <?php
                                include 'config.php';

                                //  $stmt= $con->prepare("SELECT * FROM employee_data");
                                //    $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . /* $stmt->rowCount()*/
                                    0 . "</h2>";
                                ?>

                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد العائلات</div>
                                <div class="sparkline1"></div>
                            </div>
                        </div>

                    </div>
                    <div class="row" style="padding-bottom: 10px;">
                        <div class="col-md-12">

                            <div class="panel panel-color panel-inverse">
                                <div class="panel-heading">
                                    <h3 class="panel-title">الخيارات</h3>
                                </div>


                                <div class="panel-body">


                                    <div class="dropdown pull-left">
                                        <button class="btn btn-danger btn-md dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">العائلات
                                            <i class="fa fa-group"></i>
                                            <span class="caret"></span></button>
                                        <ul class="dropdown-menu">
                                            <li><a href="?do=add"> اضافة<i class="fa fa-plus"></i> </a></li>
                                            <li><a href="?do=view"> عرض<i class="fa fa-eye"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>


                    <!--Emp From tabel class="col-md-12" -->

                    <?php

                    if (isset($_GET["do"])) {

                    if ($_GET["do"] == "add") {

                    ?>


                    <div class="card-box">
                        <div class="card-box-head  border-b m-t-0">
                            <h4 class="header-title"><b>اضافة عائلة</b></h4>
                        </div>


                        <div class="card-box-content form-compoenent">
                            <form class="form-horizontal"
                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                  method="post">
                                <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="hidden" name="do" value="add"/>

                                        <label class="control-label col-sm-2">الرقم الأحصائي</label>
                                            <input  required type="text" class="form-control" placeholder="ادخل الرقم الأحصائي"  >

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">اسم المعيل</label>
                                            <input required type="text" class="form-control"
                                                   placeholder="ادخل اسم المعيل">

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">نسب المعيل</label>

                                            <select class="form-control">
                                                <option>هاشمي</option>
                                                <option>غير هاشمي</option>
                                            </select>

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">اسم الأب</label>

                                            <input type="text" class="form-control"
                                                   placeholder="ادخل اسم الأب">

                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-2">اسم المعيل 2</label>

                                            <input required type="text" class="form-control"
                                                   placeholder="ادخل اسم المعيل 2 ">

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2"> نسب المعيل 2</label>

                                            <select class="form-control">
                                                <option></option>
                                                <option>هاشمي</option>
                                                <option>غير هاشمي</option>
                                            </select>

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">اسم المعرف</label>

                                            <input type="text" class="form-control"
                                                   placeholder="ادخل اسم المعرف">

                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-sm-2">اسم المذكي</label>

                                            <input type="text" class="form-control"
                                                   placeholder="ادخل اسم المذكي">

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">جوال المذكي</label>

                                            <input type="text" class="form-control"
                                                   placeholder="ادخل رقم جوال المذكي">

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">ملاحظه</label>

                                                            <textarea class="form-control" rows="5" placeholder="ملاحظه"
                                                                      id="comment"></textarea>

                                    </div>

                                </div>
                                <div class="col-md-6">


                                    <div class="form-group">
                                        <label class="control-label col-sm-2">رصيد العائله</label>

                                            <input type="text" class="form-control"
                                                   placeholder="ادخل رصيد العائله">

                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-2">مكتب المؤسسة</label>

                                            <select class="form-control">
                                                <option>22</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>

                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-2">رقم الأضبارة</label>

                                            <input type="text" class="form-control"
                                                   placeholder="ادخل رقم الأضبارة">

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">تاريخ ملف المعاملة</label>

                                            <input style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif'; text-align: center;"
                                                   type="date" class="form-control">
                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-2">الموقف الحالي</label>

                                            <select class="form-control">
                                                <option>ايقاف</option>
                                                <option>مستمرة</option>
                                            </select>

                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-2">نوع العائلة</label>

                                            <select class="form-control">
                                                <option>ايتام</option>
                                                <option>متعففة</option>
                                                <option>تبرعات</option>
                                            </select>

                                    </div>

                                    <div class="form-group">
                                        <label class="control-label col-sm-2">الحالة الخاصة</label>

                                            <select class="form-control">
                                                <option>الحشد الشعبي</option>
                                                <option>مطلقة</option>
                                                <option>عجزة</option>
                                                <option>مرضى</option>
                                                <option>عوائل سجناء</option>
                                            </select>

                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-2">يوم التسوق</label>

                                            <select class="form-control">
                                                <option>السبت</option>
                                                <option>الأحد</option>
                                                <option>الأثنين</option>
                                                <option>الثلاثاء</option>
                                                <option>الاربعاء</option>
                                                <option>الخميس</option>
                                                <option>الجمعة</option>

                                            </select>

                                    </div>


                                    <div class="form-group">
                                        <label class="control-label col-sm-2">رقم الجنسية</label>

                                            <input type="text" class="form-control"
                                                   placeholder="ادخل رقم الجنسية">

                                    </div>
                                </div>



                                </div>

                                <div class="row">


                                            <ul class="nav nav-tabs">
                                                <li class="active">
                                                    <a href="tabs-accordions.html#v-Pics" data-toggle="tab" aria-expanded="false">صور الكشف</a>
                                                </li>
                                                <li class="">
                                                    <a href="tabs-accordions.html#v-otherSub" data-toggle="tab" aria-expanded="true">اشتراكات اخري</a>
                                                </li>
                                                <li class="">
                                                    <a href="tabs-accordions.html#v-BenefitsAndAgency" data-toggle="tab" aria-expanded="false">الأستحقاقات والوكالة</a>
                                                </li>
                                                <li class="">
                                                    <a href="tabs-accordions.html#v-SupportAndOngoing" data-toggle="tab" aria-expanded="false">الدعم والجاريه</a>
                                                </li>
                                                <li class="">
                                                    <a href="tabs-accordions.html#v-FieldInspection" data-toggle="tab" aria-expanded="false">الكشف الميداني</a>
                                                </li>
                                                <li class="">
                                                    <a href="tabs-accordions.html#v-ContactAndAdress" data-toggle="tab" aria-expanded="false">عناوين الاتصال والتواصل</a>
                                                </li>
                                            </ul>

                                            <div class="tab-content">
                                                <div class="tab-pane active" id="v-Pics">


                                                </div>
                                                <div class="tab-pane " id="v-otherSub">



                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">عضوية ذخر الأخرة</label>

                                                        <select class="form-control">
                                                            <option></option>
                                                            <option>مشتركة</option>
                                                            <option>غير مشتركة</option>
                                                        </select>

                                                    </div>


                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">اسم الوصي</label>

                                                        <input type="text" class="form-control " placeholder="ادخل اسم الوصي">

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">موبيل الوصي</label>

                                                        <input type="text" class="form-control " placeholder="ادخل موبيل الوصي">

                                                    </div>


                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">الأستعداد لعقد المجالس الحسينية في البيت</label>

                                                        <select class="form-control">
                                                            <option></option>
                                                            <option>مستعدة</option>
                                                            <option>غير مستعدة</option>
                                                        </select>

                                                    </div>





                                                </div>
                                                <div class="tab-pane" id="v-BenefitsAndAgency">


                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">الوكالة الشرعية</label>

                                                        <select class="form-control">
                                                            <option></option>
                                                            <option>وكالة شرعية مطلقة</option>
                                                            <option>وكالة شرعية عامة</option>
                                                            <option>وكالة شرعية</option>
                                                            <option>بدون وكالة شرعية</option>
                                                        </select>

                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">اختبار الاستحقاق</label>

                                                        <select class="form-control">
                                                            <option></option>
                                                            <option>مستحقة</option>
                                                            <option>غير مستحقة</option>
                                                            <option>المعيل الثاني هو المستحق</option>
                                                            <option>لم يتم الاختبار</option>

                                                        </select>

                                                    </div>

                                                </div>
                                                <div class="tab-pane" id="v-SupportAndOngoing">


                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">الصدقة الجارية</label>

                                                        <select class="form-control">
                                                            <option></option>
                                                            <option>مساهمة</option>
                                                            <option>غير مساهمة</option>
                                                        </select>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">ملبغ اشتراك الجارية</label>

                                                        <input type="text" class="form-control " placeholder="ادخل ملبغ اشتراك الجارية">

                                                    </div>


                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">اشتراك الدعم</label>

                                                        <select class="form-control">
                                                            <option></option>
                                                            <option>مشتركة</option>
                                                            <option>غير مشتركة</option>
                                                        </select>

                                                    </div>

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">ملبغ اشتراك الدعم</label>

                                                        <input type="text" class="form-control " placeholder="ادخل ملبغ اشتراك الدعم">

                                                    </div>


                                                </div>

                                                <div class="tab-pane" id="v-FieldInspection">


                                                </div>

                                                <div class="tab-pane" id="v-ContactAndAdress">

                                                    <div class="form-group">
                                                        <label class="control-label col-sm-2">عناوين التواصل</label>

                                                        <textarea class="form-control" rows="7" placeholder="ادخل جميع عناوين التواصل" >
اسم المنطقة  :  &nbsp;&nbsp;
عنوان السكن التفصيلي  :  &nbsp;&nbsp;
رقم الموبيل 1  :  &nbsp;&nbsp;
معرف الموبيل الاول  :  &nbsp;&nbsp;
رقم الموبيل 2  :  &nbsp;&nbsp;
معرف الموبيل الثاني  :  &nbsp;&nbsp;
 </textarea>

                                                    </div>

                                                </div>
                                            </div>

                                    </div>



                        <div class="row">


                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-7">
                                    <button type="submit" class="btn btn-purple btn-md"> اضافه
                                        العائلة
                                        <i class="fa fa-plus"></i>
                                    </button>

                                </div>
                            </div>
                        </div>











                        </div>


                            </form>
                        </div>
                    </div>


                </div>

                <?php
                } elseif ($_GET["do"] == "update") {
                    ?>
                    <div class="card-box">
                        <div class="card-box-head  border-b m-t-0">
                            <h4 class="header-title"><b>اضافة عائله</b></h4>
                        </div>
                        <div class="card-box-content form-compoenent">
                            <form class="form-horizontal"
                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                  method="post">
                                <div class="form-group">
                                    <input type="hidden" name="do" value="add"/>
                                    <label class="control-label col-sm-2">أسم المكتب</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control"
                                               placeholder="ادخل أسم المكتب">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">عنوان المكتب</label>
                                    <div class="col-sm-10">
                                        <input required type="text" class="form-control"
                                               placeholder="ادخل عنوان المكتب">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">رقم جوال اول</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                               placeholder="ادخل رقم جوال">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">رقم جوال ثاني</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                               placeholder="ادخل رقم جوال">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2">رقم جوال ثالث</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control"
                                               placeholder="ادخل رقم جوال">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-sm-2" for="email">البريد
                                        الالكتروني</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="email"
                                               placeholder="ادخل البريد الالكتروني">
                                    </div>
                                </div>


                                <div class="form-group">
                                    <div class="col-sm-offset-2 col-sm-10">
                                        <button type="submit" class="btn btn-purple btn-md"> اضافه
                                            العائلة
                                            <i class="fa fa-plus"></i>
                                        </button>

                                    </div>
                                </div>


                            </form>
                        </div>
                    </div>
                    <?php

                } elseif ($_GET['do'] == "view") {
                    include 'config.php';

                    if (isset($_GET["searchq"])) {
                        //         $stmt= $con->prepare("SELECT * FROM employee_data WHERE employee_name  LIKE '".$_GET["searchq"]."%' LIMIT 50 ");

                    } else {

                        //      $stmt= $con->prepare("SELECT * FROM employee_data LIMIT 50 ");
                    }


//    $stmt->execute();
//$rows= $stmt->fetchAll();
                    ?>


                    <div class="card-box">
                        <div class="card-box-head  border-b m-t-0">
                            <h4 class="header-title"><b> بيانات العائلة</b></h4>
                        </div>
                        <div class="card-box-content form-compoenent">
                            <div class="cb-res-table">
                                <div class="cb-table-search">

                                    <div class="input-group pull-left cb-ta-search">
                                        <form class="form-horizontal"
                                              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                              method="GET">
                                            <input name="searchq" type="text" class="form-control"
                                                   placeholder="بحث..." style="text-align: center;">
                                            <input type="hidden" name="do" value="view"/>
                                            <button style="margin-top: 10px;" type="submit"
                                                    class="btn btn-success btn-md">بحث
                                                <i class="fa fa-search"></i>
                                            </button>


                                            </button>


                                        </form>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <?php


                }

                }
                ?>


            </div>
        </div>
        <!-- container -->
    </div>
    <!-- content -->
    <footer class="footer text-right">
        <p class="copy">&copy; 2019. Eng.Ahmed<span>Amen</span></p>
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

