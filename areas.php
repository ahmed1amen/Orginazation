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


        include 'config.php';
        header('Content-Type: text/html; charset=utf-8');

        $Area_Name = $_POST["Area_Name"];
        $Area_Office = $_POST["Area_Office"];
        $Area_Section = $_POST["Area_Section"];
        $Area_Description = $_POST["Area_Description"];


        $stmt = $con->prepare("INSERT INTO Areas(Area_Name, Area_OfficeID, Area_Section, Area_Description) VALUES ('$Area_Name','$Area_Office','$Area_Section','$Area_Description')");
            $stmt->execute();


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
    <title>المناطق</title>

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
                <h4 class="page-title">المناطق</h4>

            </div>
            <div class="cb-page-content">
                <div class="container">
                    <div class="row">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-warning">
                                <?php
                                include 'config.php';

                                $stmt = $con->prepare("SELECT * FROM employee_data");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-dark counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>

                                <div class="text-dark text-opt  m-t-5 text-center font-12">عدد المناطق</div>
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
                                        <button class="btn btn-warning btn-md dropdown-toggle" type="button"
                                                data-toggle="dropdown" aria-expanded="false">المناطق
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
                                            <h4 class="header-title"><b>اضافة منطقة جديدة</b></h4>
                                        </div>
                                        <div class="card-box-content form-compoenent">
                                            <form class="form-horizontal"
                                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                                  method="post">


                                                <div class="form-group">
                                                    <label class="control-label col-sm-1"> اسم المنطقة</label>
                                                    <div class="col-sm-10">
                                                        <input name="Area_Name" required type="text"
                                                               class="form-control"
                                                               placeholder=" ادخل اسم المنطقة">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1"> وصف المنطقة</label>
                                                    <div class="col-sm-10">
                                                        <input name="Area_Description" class="form-control"
                                                               placeholder=" ادخل وصف المنطقة">
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-sm-1">اسم المكتب</label>
                                                    <div class="col-sm-10">
                                                        <select name="Area_Office" class="form-control">
                                                            <option>مكتب بغداد</option>
                                                            <option>مكتب البصرة</option>
                                                            <option>مكتب النجف</option>
                                                            <option>مكتب بغداد حي المنصور</option>
                                                        </select>
                                                    </div>
                                                </div>


                                                <div class="form-group">
                                                    <label class="control-label col-sm-1">اسم القطاع</label>
                                                    <div class="col-sm-10">
                                                        <select name="Area_Section" class="form-control">
                                                            <option>المشخاب</option>
                                                            <option>القادسية</option>
                                                            <option>سوق شعلان</option>
                                                            <option>سوق شعلان</option>
                                                            <option>الحسانية</option>

                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-warning btn-md">اضافة
                                                            المنطقة
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
                                            <h4 class="header-title"><b>تحديث بيانات الموظفين</b></h4>
                                        </div>
                                        <div class="card-box-content form-compoenent">
                                            <form class="form-horizontal"
                                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                                  method="post">
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1">أسم الموظف</label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" name="employee_name"
                                                               class="form-control" placeholder="ادخل اسم الموظف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1">رقم الجوال</label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" name="employee_number"
                                                               class="form-control" placeholder="ادخل رقم الجوال">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1">عنوان الموظف</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="employee_address" class="form-control"
                                                               placeholder="ادخل عنوان الموظف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1">راتب الموظف</label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" name="employee_salary"
                                                               class="form-control" placeholder="ادخل راتب الموظف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1">المسمى الوظيفي الموظف</label>
                                                    <div class="col-sm-10">
                                                        <input type="text" name="employee_jobName" class="form-control"
                                                               placeholder="ادخل المسمى الوظيفي الموظف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1" for="email">البريد
                                                        الالكتروني</label>
                                                    <div class="col-sm-10">
                                                        <input required type="email" name="employee_email"
                                                               class="form-control" id="email"
                                                               placeholder="ادخل البريد الالكتروني">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1">كلمه المرور</label>
                                                    <div class="col-sm-10">
                                                        <input required type="text" name="employee_password"
                                                               class="form-control" placeholder="ادخل كلمه المرور">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1">المكتب التابع له</label>
                                                    <div class="col-sm-10">
                                                        <select class="form-control" name="employee_office" id="sel1">
                                                            <option>مكتب بغداد</option>
                                                            <option>مكتب البصرة</option>
                                                            <option>مكتب النجف</option>
                                                            <option>مكتب بغداد حي المنصور</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-success btn-md"> تعديل
                                                            الموظف
                                                            <i class="fa fa-edit"></i>
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
                                        $stmt = $con->prepare("SELECT * FROM employee_data WHERE employee_name  LIKE '" . $_GET["searchq"] . "%' LIMIT 50 ");

                                    } else {

                                        $stmt = $con->prepare("SELECT * FROM employee_data LIMIT 50 ");
                                    }


                                    $stmt->execute();
                                    $rows = $stmt->fetchAll();
                                    ?>


                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b> بيانات الموظفين</b></h4>
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
                                                        <td class="text-center"><b>كود الموظف</b></td>
                                                        <td class="text-center"><b>اسم الموظف</b></td>
                                                        <td class="text-center"><b>رقم الجوال</b></td>
                                                        <td><b>عنوان الموظف</b></td>
                                                        <td class="text-center"><b>راتب الموظف</b></td>
                                                        <td class="text-center"><b>المسمى الوظيفي الموظف</b></td>
                                                        <td class="text-center"><b>البريد الالكتروني</b></td>
                                                        <td class="text-center"><b>كلمه المرور</b></td>
                                                        <td class="text-center"><b>المكتب التابع له</b></td>
                                                        <td class="text-center"><b>الخيارات</b></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php

                                                    foreach ($rows as $row) {
                                                        echo "<tr>";

                                                        echo "<td class=\"text-center\">" . $row["ID"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["employee_name"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["employee_number"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["employee_address"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["employee_salary"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["employee_jobName"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["employee_email"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["employee_password"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["employee_office"] . "</td>";
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

