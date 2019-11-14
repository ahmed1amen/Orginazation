<?php
include 'Includes/config.php';
DBClass::connect();
session_start();
if (isset($_SESSION['Username'])) {
    // في موظف مسجل الدخول كده .
} else {
// كده مفيش , ف حوله علي اللوجن الخاص ب الموظفين
    header('Location: EmpLogin.php');

}


// دي بتتنفذ فقط اذا تم عمل بوست من الفورم الي في الدااتا , وعلشان ال Validate حطيت attribute اسمه required ف كل input علشان يسهل علينا ال Validate بدل ما نعمله ب IF
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // انادي علي الكونفج الي هوا هيمعلي ال Connection مع الداتا بيز

    header('Content-Type: text/html; charset=utf-8');
// الداتا الي جايه من الفورم عملتلها ريتريف في متغيرات
    $Knower_Name = $_POST["Knower_Name"];
    $Calling_Adj = $_POST["Calling_Adj"];
    $Knower_Address = $_POST["Knower_Address"];
    $Adjective = $_POST["Adjective"];
    $Phone_Number1 = $_POST["Phone_Number1"];
    $Phone_Number2 = $_POST["Phone_Number2"];
    $employee_office = $_POST["employee_office"];

    if ($_POST["do"] == "add") {

        // دي طريقه اسمها PDO ف ال PHP  , تعامل اسهل مع قاعده البيانات
        if (empty($Phone_Number2)) {
            $stmt = DBClass::$con->prepare("INSERT INTO knower (Knower_Name,Calling_Adj,Knower_Address,Adjective,Phone_Number1,employee_office)
 VALUES ('$Knower_Name','$Calling_Adj','$Knower_Address','$Adjective','$Phone_Number1','$employee_office')");
        } else {
            $stmt = DBClass::$con->prepare("INSERT INTO knower (Knower_Name,Calling_Adj,Knower_Address,Adjective,Phone_Number1,Phone_Number2,employee_office)
 VALUES ('$Knower_Name','$Calling_Adj','$Knower_Address','$Adjective','$Phone_Number1','$Phone_Number2','$employee_office')");

        }
        $stmt->execute();
        $stmt->errorCode();
// بس خلاص الموظف اضاف تمام كده


    } elseif ($_POST["do"] == "update") {
        $Changed_ID = $_POST["currentrecord"];
        if (!empty($Knower_Name)) {
            $stmt = DBClass::$con->prepare("UPDATE knower SET Knower_Name='$Knower_Name' WHERE Knower_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Calling_Adj)) {
            $stmt = DBClass::$con->prepare("UPDATE knower SET Calling_Adj='$Calling_Adj' WHERE Knower_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Knower_Address)) {
            $stmt = DBClass::$con->prepare("UPDATE knower SET Knower_Address='$Knower_Address' WHERE Knower_ID=$Changed_ID");
            $stmt->execute();
        }
        if (isset($_POST["Adjective"])) {

            $stmt = DBClass::$con->prepare("UPDATE knower SET Adjective='$Adjective' WHERE Knower_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Phone_Number1)) {
            $stmt = DBClass::$con->prepare("UPDATE knower SET Phone_Number1='$Phone_Number1' WHERE Knower_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Phone_Number2)) {
            $stmt = DBClass::$con->prepare("UPDATE knower SET Phone_Number2='$Phone_Number2' WHERE Knower_ID=$Changed_ID");
            $stmt->execute();
        }
        if (isset($_POST["employee_office"])) {
            $stmt = DBClass::$con->prepare("UPDATE knower SET employee_office='$employee_office' WHERE Knower_ID=$Changed_ID");
            $stmt->execute();
        }
        header("Location: Knowers.php?do=view");

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
    <title>معرفو المؤسسة</title>

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
                <h4 class="page-title">المعرفون</h4>

            </div>
            <div class="cb-page-content">
                <div class="container">
                    <div class="row">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-primary">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM knower");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>

                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد المعرفون</div>
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
                                                data-toggle="dropdown" aria-expanded="false">المعرفون
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
                                            <h4 class="header-title"><b>اضافة معرف جديد</b></h4>
                                        </div>
                                        <div class="card-box-content form-compoenent">


                                            <form class="form-horizontal"
                                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                                  method="post">
                                                <input type="hidden" name="do" value="add"/>


                                                <?php include('Views/Knowers_Component.php'); ?>

                                            </form>


                                        </div>
                                    </div>
                                    <?php
                                } elseif ($_GET['do'] == "view") {


                                   if (isset($_GET["searchq"])) {
                                        $textInfo=$_GET["searchq"];
                                        if(preg_match('/[0-9]/', $textInfo))
                                           {
                                               $stmt = DBClass::$con->prepare("SELECT * FROM knower WHERE Knower_ID=$textInfo LIMIT 50");
                                           }
                                        else
                                           {
                                               $stmt = DBClass::$con->prepare("SELECT * FROM knower WHERE Knower_Name  LIKE '" . $_GET["searchq"] . "%' or
                                        Calling_Adj='$textInfo' or Adjective='$textInfo' or employee_office='$textInfo' LIMIT 50");
                                           }

                                    } else {

                                       $stmt = DBClass::$con->prepare("SELECT * FROM knower LIMIT 50 ");
                                    }


                                    $stmt->execute();
                                    $rows = $stmt->fetchAll();
                                    ?>

                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b> بيانات المعرفين</b></h4>
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
                                                <table id="table1" class="table table-bordred table-striped">
                                                    <thead>
                                                    <tr>
                                                        <td class="text-center"><b>كود المعرف</b></td>
                                                        <td class="text-center"><b>اسم المعرف</b></td>
                                                        <td class="text-center"><b>صفة المناداة</b></td>
                                                        <td class="text-center"><b>عنوان المعرف</b></td>
                                                        <td class="text-center"><b>الصفه</b></td>
                                                        <td class="text-center"><b>رقم الجوال 1</b></td>
                                                        <td class="text-center"><b>رقم الجوال 2</b></td>
                                                        <td class="text-center"><b>مكتب المؤسسة</b></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php

                                                    foreach ($rows as $row) {
                                                        echo "<tr>";

                                                        echo "<td id='Knower_ID' class=\"text-center\">" . $row["Knower_ID"] . "</td>";
                                                        echo "<td id='Knower_Name' class=\"text-center\">" . $row["Knower_Name"] . "</td>";
                                                        echo "<td id='Calling_Adj' class=\"text-center\">" . $row["Calling_Adj"] . "</td>";
                                                        echo "<td id='Knower_Address' class=\"text-center\">" . $row["Knower_Address"] . "</td>";
                                                        echo "<td id='Adjective' class=\"text-center\">" . $row["Adjective"] . "</td>";
                                                        echo "<td id='Phone_Number1' class=\"text-center\">" . $row["Phone_Number1"] . "</td>";
                                                        echo "<td id='Phone_Number2' class=\"text-center\">" . $row["Phone_Number2"] . "</td>";
                                                        echo "<td id='employee_office' class=\"text-center\">" . $row["employee_office"] . "</td>";
                                                        echo "<td style='display: flex;'>
                                                          
                                                   <button id='btnedit'  class='btn btn-default btn-xs'><span class='fa fa-edit'></span></button>
                                                      <button  class='btn btn-default btn-xs'><span class='fa fa-trash'></span></button>      
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

                                    <div id="modal-wrapper" class="modal">

                                        <form method="post" id="frm-modal" class="modal-content animate"
                                              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


                                            <div class="container">
                                                <div>
                                                    <button style="float: left;font-size: 25px;min-width: 30px;min-height: 30px;"
                                                            type="button" class="close" data-dismiss="alert"
                                                            aria-hidden="true"
                                                            onclick="document.getElementById('modal-wrapper').style.display='none'">
                                                        ×
                                                    </button>
                                                </div>

                                                <input type="hidden" name="currentrecord" id="currentrecord" value="">
                                                <input type="hidden" name="do" value="update"/>


                                                <div id="model-component" style="padding-top: 40px;">


                                                    <?php include('Views/Knowers_Component.php'); ?>

                                                    <div style='text-align: center;' class="col-sm-offset-2 col-sm-10">

                                                        <button type="submit" class="btn btn-danger btn-lg">تحديث
                                                            البيانات <i class="fa fa-edit"></i>
                                                        </button>
                                                    </div>

                                                </div>

                                        </form>
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

<script src="Includes/JSHelper/UpdateModel.js"></script>



</body>
</html>

