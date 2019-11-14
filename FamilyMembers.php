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


    header('Content-Type: text/html; charset=utf-8');

    $family_ID = $_POST["family_ID"];
    $FamilyMemberName = $_POST["FamilyMemberName"];
    $FamilyMemberBirthday = $_POST["FamilyMemberBirthday"];
    $FamilyMemberGender = $_POST["FamilyMemberGender"];
    $FamilyMemberStudy = $_POST["FamilyMemberStudy"];
    $FamilyMemberSchool = $_POST["FamilyMemberSchool"];
    $FamilyMemberClassroom = $_POST["FamilyMemberClassroom"];
    $FamilyMemberHelthy = $_POST["FamilyMemberHelthy"];
    $FamilyMemberRatios = $_POST["FamilyMemberRatios"];
    $FamilyMemberMarital = $_POST["FamilyMemberMarital"];
    $FamilyMemberpic = $_POST["FamilyMemberpic"];


    if ($_POST["do"] == "add") {

        $stmt = DBClass::$con->prepare("INSERT INTO family_members
(family_ID,FamilyMemberName,FamilyMemberBirthday,FamilyMemberGender,FamilyMemberStudy,FamilyMemberSchool,FamilyMemberClassroom,FamilyMemberHelthy,FamilyMemberRatios,FamilyMemberMarital,image) 
VALUES ('$family_ID','$FamilyMemberName','$FamilyMemberBirthday','$FamilyMemberGender','$FamilyMemberStudy','$FamilyMemberSchool','$FamilyMemberClassroom','$FamilyMemberHelthy','$FamilyMemberRatios','$FamilyMemberMarital','$FamilyMemberpic')");
        $stmt->execute();
    } elseif ($_POST["do"] == "update") {
        $currentrecord = $_POST["currentrecord"];

        $stmt = DBClass::$con->prepare("UPDATE  family_members SET 
family_ID=$family_ID ,FamilyMemberName = '$FamilyMemberName',FamilyMemberBirthday = '$FamilyMemberBirthday',FamilyMemberGender = '$FamilyMemberGender',FamilyMemberStudy = '$FamilyMemberStudy',FamilyMemberSchool = '$FamilyMemberSchool',FamilyMemberClassroom = '$FamilyMemberClassroom',FamilyMemberHelthy = '$FamilyMemberHelthy',FamilyMemberRatios = '$FamilyMemberRatios',FamilyMemberMarital = '$FamilyMemberMarital',  
image = $FamilyMemberpic 
WHERE ID=$currentrecord");
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
    <title>افراد العائلة</title>

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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                <h4 class="page-title">افراد العائلة</h4>

            </div>
            <div class="cb-page-content">
                <div class="container">
                    <div class="row">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-warning">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM family_members");

                                $stmt->execute();

                                echo "<h2 class='m-0 text-dark counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>

                                <div class="text-dark text-opt  m-t-5 text-center font-12">عدد افراد العائلة</div>
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
                                                data-toggle="dropdown" aria-expanded="false">افراد العائلة
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
                                            <h4 class="header-title"><b>اضافة فرد جديد</b></h4>
                                        </div>
                                        <div class="card-box-content form-compoenent">
                                            <form id="frm" class="form-horizontal"
                                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                                  method="post">
                                                <input type="hidden" name="do" value="add"/>
                                                <input type="hidden" name="family_ID"
                                                       value="<?php echo($_GET['family_ID']); ?>"/>
                                                <?php
                                                include("Views/FamilyMembers_Component.php"); ?>
                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                } elseif ($_GET['do'] == "view") {


                                    if (isset($_GET["searchq"])) {
                                        $textInfo = $_GET["searchq"];
                                        if (preg_match('/[0-9]/', $textInfo)) {
                                            $stmt = DBClass::$con->prepare("SELECT * FROM family_members WHERE FamilyMemberID=$textInfo or family_ID=$textInfo LIMIT 50");
                                        } else {
                                            $stmt = DBClass::$con->prepare("SELECT * FROM family_members WHERE FamilyMemberName  LIKE '" . $_GET["searchq"] . "%' 
                                            or FamilyMemberSchool='$textInfo' or FamilyMemberMarital='$textInfo' LIMIT 50");
                                        }
                                    } else {

                                        $stmt = DBClass::$con->prepare("SELECT * FROM family_members LIMIT 50 ");
                                    }


                                    $stmt->execute();
                                    $rows = $stmt->fetchAll();
                                    ?>
                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b> بيانات افراد العائلة</b></h4>
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
                                                        <td class="text-center"><b>كود الفرد</b></td>
                                                        <td class="text-center"><b>كود العائلة</b></td>
                                                        <td class="text-center"><b>اسم الفرد</b></td>
                                                        <td class="text-center"><b>تاريخ التولد</b></td>
                                                        <td class="text-center"><b>الجنس</b></td>
                                                        <td class="text-center"><b>الحاله الدراسية</b></td>
                                                        <td class="text-center"><b>اسم المدرسة</b></td>
                                                        <td class="text-center"><b>الصف</b></td>
                                                        <td class="text-center"><b>الحالة الصحية</b></td>
                                                        <td class="text-center"><b>نسب الفرد</b></td>
                                                        <td class="text-center"><b>الحالة الزوجية</b></td>
                                                        <td class="text-center"><b>الصورة</b></td>

                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php

                                                    foreach ($rows as $row) {
                                                        echo "<tr>";

                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberID"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["family_ID"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberName"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberBirthday"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberGender"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberStudy"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberSchool"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberClassroom"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberHelthy"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberRatios"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["FamilyMemberMarital"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["image"] . "</td>";

                                                        echo "<td>
                                                    <button id='btnedit'  class='btn btn-default btn-xs'><span class='fa fa-edit'></span></button>
                                                            
                                                            <button class='btn btn-default btn-xs'><span class='fa fa-trash'></span></button>
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


                                                    <?php include('Views/FamilyMembers_Component.php'); ?>

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


<!-- SmartBox Js files -->

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
