<?php
session_start();
if (isset($_SESSION['Username'])) {
    // في موظف مسجل الدخول كده .
} else {
// كده مفيش , ف حوله علي اللوجن الخاص ب الموظفين
    //    header('Location: EmpLogin.php');

}


//IF ﺏ ﻪﻠﻤﻌﻧ ﺎﻣ ﻝﺪﺑ Validate ﻝا ﺎﻨﻴﻠﻋ ﻞﻬﺴﻳ ﻥﺎﺸﻠﻋ input ﻞﻛ ﻑ required ﻪﻤﺳا attribute ﺖﻴﻄﺣ Validate ﻝا ﻥﺎﺸﻠﻋﻭ , ﺎﺗااﺪﻟا ﻲﻓ ﻲﻟا ﻡﺭﻮﻔﻟا ﻦﻣ ﺖﺳﻮﺑ ﻞﻤﻋ ﻢﺗ اﺫا ﻂﻘﻓ ﺬﻔﻨﺘﺘﺑ ﻱﺩ //
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if ($_POST["do"] == "add") {


//ﺰﻴﺑ ﺎﺗاﺪﻟا ﻊﻣ Connection ﻝا ﻲﻠﻌﻤﻴﻫ اﻮﻫ ﻲﻟا ﺞﻔﻧﻮﻜﻟا ﻲﻠﻋ ﻱﺩﺎﻧا //        
        include 'config.php';
        header('Content-Type: text/html; charset=utf-8');


        // الداتا الي جايه من الفورم عملتلها ريتريف في متغيرات
         $Office_name=$_POST["Office_name"];
         $Office_address=$_POST["Office_address"];
         $Office_number1=$_POST["Office_number1"];
         $Office_number2=$_POST["Office_number2"];
         $Office_number3=$_POST["Office_number3"];
         $Office_email=$_POST["Office_email"];

        $stmt = $con->prepare("SELECT * FROM office_data WHERE Office_email='$Office_email'");
        $stmt->execute();
        $rows= $stmt->fetchAll();
        if($rows>0)
        {
         $message = "Please enter another email address/   ﺮﺧﺁ ﻱﺪﻳﺮﺑ ﻥاﻮﻨﻋ ﻞﺧﺩﺃ ﻚﻠﻀﻓ ﻦﻣ ";
        echo "<script type='text/javascript'>alert('$message');</script>";   
        }
        else
        {

            if(empty($Office_number2) &&empty($Office_number3) )
         	{
         		$stmt = $con->prepare("INSERT INTO office_data(Office_name, Office_address, Office_number1,Office_email) VALUES ('$Office_name','$Office_address','$Office_number1','$Office_email')");
         	}
            else if(empty($Office_number2) && !empty($Office_number3))
            {
            	$stmt = $con->prepare("INSERT INTO office_data(Office_name, Office_address, Office_number1, Office_number3, Office_email) VALUES ('$Office_name','$Office_address','$Office_number1','$Office_number3',
            		'$Office_email')");

            }
            else if(empty($Office_number3) && !empty($Office_number2))
            {
            	$stmt = $con->prepare("INSERT INTO office_data(Office_name, Office_address, Office_number1, Office_number2, Office_email) VALUES ('$Office_name','$Office_address','$Office_number1',
            		'$Office_number2','$Office_email')");

            }
            else
            {
            	$stmt = $con->prepare("INSERT INTO office_data(Office_name, Office_address, Office_number1, Office_number2, Office_number3, Office_email) VALUES ('$Office_name','$Office_address','$Office_number1',
            		'$Office_number2', '$Office_number3','$Office_email')");
            }
            $stmt->execute();
        }         
     // بس خلاص الموظف اضاف تمام كده
        
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
    <link rel="stylesheet" href="assets/css/all.css" type="text/css"/>
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
        <?php include('sidebar.php'); ?>
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
                <h4 class="page-title">الموظفين</h4>

            </div>
            <div class="cb-page-content">
                <div class="container">
                    <div class="row">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-purple">
                                <?php
                                include 'config.php';

                                $stmt= $con->prepare("SELECT * FROM office_data");
                                 $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" .  $stmt->rowCount() .
                                   "</h2>";
                                ?>

                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد المكاتب</div>
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
                                                data-toggle="dropdown" aria-expanded="false">المكاتب
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


                    <!--Emp From tabel -->
                    <div class="row">

                        <div class="col-md-12">


                            <?php

                            if (isset($_GET["do"])) {

                                if ($_GET["do"] == "add") {

                                    ?>


                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b>اضافة مكتب</b></h4>
                                        </div>
                                        <div class="card-box-content form-compoenent">
                                            <form class="form-horizontal"
                                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                                  method="post">
                                                <div class="form-group">
                                                    <input type="hidden" name="do" value="add"/>
                                                    <label class="control-label col-sm-2"> ادخل اسم المكتب </label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" name="Office_name" class="form-control"
                                                               placeholder="ادخل أسم المكتب">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">عنوان المكتب</label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" name="Office_address" class="form-control"
                                                               placeholder="ادخل عنوان المكتب">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">رقم جوال اول</label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" name="Office_number1" class="form-control"
                                                               placeholder="ادخل رقم جوال">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">رقم جوال ثاني</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="Office_number2" class="form-control"
                                                               placeholder="ادخل رقم جوال">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2">رقم جوال ثالث</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="Office_number3" class="form-control"
                                                               placeholder="ادخل رقم جوال">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-2" for="email">البريد
                                                        الالكتروني</label>
                                                    <div class="col-sm-10">
                                                        <input required type="email" name="Office_email" class="form-control" id="email"
                                                               placeholder="ادخل البريد الالكتروني">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-purple btn-md"> اضافه
                                                            المكتب
                                                            <i class="fa fa-plus"></i>
                                                        </button>

                                                    </div>
                                                </div>


                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                } elseif ($_GET["do"] == "update") {
                                    ?>
                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b>اضافة مكتب</b></h4>
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
                                                            المكتب
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
                                            $stmt= $con->prepare("SELECT * FROM office_data WHERE Office_name  LIKE '".$_GET["searchq"]."%' LIMIT 50 ");

                                    } else {

                                             $stmt= $con->prepare("SELECT * FROM office_data LIMIT 50 ");
                                    }


                                        $stmt->execute();
                                    $rows= $stmt->fetchAll();
                                    ?>


                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b> بيانات المكاتب</b></h4>
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
                                            <div class="clearfix"></div>
                                            <br>


                                            <div class="table-responsive data-table">
                                                <table class="table table-bordred table-striped">
                                                    <thead>
                                                    <tr>
                                                        <td class="text-center"><b>كود المكتب</b></td>
                                                        <td class="text-center"><b>أسم المكتب</b></td>
                                                        <td class="text-center"><b>عنوان المكتب</b></td>
                                                        <td class="text-center"><b>رقم جوال اول</b></td>
                                                        <td class="text-center"><b>رقم جوال ثاني</b></td>
                                                        <td class="text-center"><b>رقم جوال ثالث</b></td>
                                                        <td class="text-center"><b>البريد الالكتروني</b></td>
                                                        <td class="text-center"><b>الخيارات</b></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php
                                                    foreach ($rows as $row)
                                                    {
                                                        echo "<tr>";

                                                        echo "<td class=\"text-center\">". $row["Office_ID"]. "</td>";
                                                        echo "<td class=\"text-center\">". $row["Office_name"]. "</td>";
                                                        echo "<td class=\"text-center\">". $row["Office_address"]. "</td>";
                                                        echo "<td  class=\"text-center\">". $row["Office_number1"]. "</td>";
                                                        echo "<td class=\"text-center\">". $row["Office_number2"]. "</td>";
                                                        echo "<td class=\"text-center\">". $row["Office_number3"]. "</td>";
                                                        echo "<td class=\"text-center\">". $row["Office_email"]. "</td>";

                                                        echo "<td>
                                                            <button class='btn btn-default btn-xs'><span class='fa fa-edit'></span></button>                                                            
                                                            <button class='btn btn-default btn-xs'><span class='fa fa-trash-o'></span></button>
                                                             </td>";
                                                        echo "</tr>";
                                                    }
                                                    ?>


                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="row mob-center">
                                                <div class="col-sm-5">
                                                    <p>Showing 20-30 of 50 items</p>
                                                </div>
                                                <div class="col-sm-7">
                                                    <ul class="pagination pull-right">
                                                        <li><a href="tables.html#"><span
                                                                        class="fa fa-angle-double-left"></span></a></li>
                                                        <li class="active"><a href="tables.html#">1</a></li>
                                                        <li><a href="tables.html#">2</a></li>
                                                        <li><a href="tables.html#">3</a></li>
                                                        <li><a href="tables.html#">4</a></li>
                                                        <li><a href="tables.html#">5</a></li>
                                                        <li><a href="tables.html#"><span
                                                                        class="fa fa-angle-double-right"></span></a>
                                                        </li>
                                                    </ul>
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

