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
        $Agent_Type = $_POST["Agent_Type"];
        $Charity_Office = $_POST["Charity_Office"];
        $Full_Name = $_POST["Full_Name"];
        $Calling_Adj = $_POST["Calling_Adj"];
        $Gender = $_POST["Gender"];
        $Knower_Name = $_POST["Knower_Name"];
        $Phone_Number1 = $_POST["Phone_Number1"];
        $Phone_Number2 = $_POST["Phone_Number2"];
        $Facebook_Address = $_POST["Facebook_Address"];
        $Email = $_POST["Email"];
        $Home_Address = $_POST["Home_Address"];
        $Work_Address = $_POST["Work_Address"];
        $Note = $_POST["Note"];
        $Form_Number = $_POST["Form_Number"];
        $Form_Date = $_POST["Form_Date"];
        $Wasy_Name = $_POST["Wasy_Name"];
        $Wasy_Phone_Number = $_POST["Wasy_Phone_Number"];


    if ($_POST["do"] == "add") {
        // check duplication of email
        $stmt = DBClass::$con->prepare("SELECT * FROM Agent WHERE Email='$Email'");
        $stmt->execute();
        $rows = $stmt->fetchAll();
        if ($stmt->rowCount() > 0) {
            $message = "Please enter another email address/  برجاء إدخال عنوان بريد آخر";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            // دي طريقه اسمها PDO ف ال PHP  , تعامل اسهل مع قاعده البيانات
            if (empty($Phnoe_Number2)) $Phnoe_Number2 = "NULL";
            if (empty($Note)) $Note = "NULL";
            $stmt = DBClass::$con->prepare("INSERT INTO Agent(Agent_Type, Charity_Office, Full_Name,Calling_Adj, Gender,Knower_Name,Phone_Number1,Phone_Number2,Facebook_Address,Email,Home_Address,Work_Address,Note,Form_Number,Form_Date,Wasy_Name,Wasy_Phone_Number) VALUES ('$Agent_Type', '$Charity_Office', '$Full_Name','$Calling_Adj', '$Gender','$Knower_Name','$Phone_Number1','$Phone_Number2','$Facebook_Address','$Email','$Home_Address','$Work_Address','$Note','$Form_Number',
            '$Form_Date','$Wasy_Name','$Wasy_Phone_Number')");
            $stmt->execute();
// بس خلاص الموظف اضاف تمام كده
        }
    }
    elseif($_POST["do"] == "update")
    {
        $Changed_ID = $_POST["currentrecord"];
        if (!empty($Agent_Type)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Agent_Type='$Agent_Type' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Charity_Office)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Charity_Office='$Charity_Office' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Full_Name)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Full_Name='$Full_Name' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Calling_Adj)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Calling_Adj='$Calling_Adj' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Gender)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Gender='$Gender' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Knower_Name)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Knower_Name='$Knower_Name' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Phone_Number1)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Phone_Number1='$Phone_Number1' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Phone_Number2)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Phone_Number2='$Phone_Number2' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Facebook_Address)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Facebook_Address='$Facebook_Address' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Email)) {
            $stmt = DBClass::$con->prepare("SELECT Email FROM Agent WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
            $rows = $stmt->fetchAll();
            $temp = $rows[0]["Email"];

            $stmt = DBClass::$con->prepare("SELECT * FROM Agent WHERE Email='$Email'");
            $stmt->execute();
            $rows = $stmt->fetchAll();
            if ($temp != $Email) {
                if ($stmt->rowCount() > 0) {
                    $message = "Please enter another email address/  برجاء إدخال عنوان بريد آخر";
                    echo "<script type='text/javascript'>alert('$message');</script>";
                } else {
                    $stmt = DBClass::$con->prepare("UPDATE Agent SET Email='$Email' WHERE Agent_ID=$Changed_ID");
                    $stmt->execute();

                }
            }
        }
        if (!empty($Home_Address)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Home_Address='$Home_Address' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Work_Address)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Work_Address='$Work_Address' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Note)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Note='$Note' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Form_Number)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Form_Number='$Form_Number' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Form_Date)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Form_Date='$Form_Date' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Wasy_Name)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Wasy_Name='$Wasy_Name' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }
        if (!empty($Wasy_Phone_Number)) {
            $stmt = DBClass::$con->prepare("UPDATE Agent SET Wasy_Phone_Number='$Wasy_Phone_Number' WHERE Agent_ID=$Changed_ID");
            $stmt->execute();
        }

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
    <title>وكلاء المؤسسة</title>

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
                <h4 class="page-title">وكلاء المؤسسة</h4>

            </div>
            <div class="cb-page-content">
                <div class="container">
                    <div class="row">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-danger">
                                <?php


                                $stmt = DBClass::$con->prepare("SELECT * FROM agent");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>

                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد الوكلاء</div>
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
                                                data-toggle="dropdown" aria-expanded="false">الوكلاء
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
                                            <h4 class="header-title"><b>اضافة وكيل جديد</b></h4>
                                        </div>
                                        <div class="card-box-content form-compoenent">
                                            <form class="form-horizontal"
                                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                                  method="post">
                                                <input type="hidden" name="do" value="add"/>

                                                <?php include("Views/Agent_Component.php"); ?>

                                            </form>
                                        </div>
                                    </div>
                                    <?php
                                } elseif ($_GET['do'] == "view") {


                                    if (isset($_GET["searchq"])) {
                                        $textInfo=$_GET["searchq"];
                                        if(preg_match('/[0-9]/', $textInfo) && ! preg_match('/@/', $textInfo))
                                        {
                                            //or Agent_ID=$_GET["searchq"]
                                            $stmt = DBClass::$con->prepare("SELECT * FROM Agent WHERE Agent_ID=$textInfo or Form_Number=$textInfo LIMIT 50");
                                        }
                                        elseif(preg_match('/@/', $textInfo))
                                        {
                                            $stmt = DBClass::$con->prepare("SELECT * FROM Agent WHERE Email='$textInfo' LIMIT 50");
                                        }
                                        else
                                        {
                                            $stmt = DBClass::$con->prepare("SELECT * FROM Agent WHERE Full_Name  LIKE '" . $_GET["searchq"] . "%' 
                                            or Agent_Type='$textInfo' or Charity_Office='$textInfo' or Calling_Adj='$textInfo' or Gender='$textInfo' 
                                            or Knower_Name='$textInfo' or Facebook_Address='$textInfo' or Wasy_Name='$textInfo' LIMIT 50");
   
                                        }

                                    } else {

                                        $stmt = DBClass::$con->prepare("SELECT * FROM Agent LIMIT 50 ");
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
                                                <table id="table1" class="table table-bordred table-striped">
                                                    <thead>
                                                    <tr>
                                                        <td class="text-center"><b>كود الوكيل</b></td>
                                                        <td class="text-center"><b>صنف الوكيل</b></td>
                                                        <td class="text-center"><b>مكتب المؤسسة</b></td>
                                                        <td><b>الاسم الكامل</b></td>
                                                        <td class="text-center"><b>الصفة للمناداة</b></td>
                                                        <td class="text-center"><b>الجنس</b></td>
                                                        <td class="text-center"><b>اسم المعرف</b></td>
                                                        <td class="text-center"><b>رقم الموبيل 1</b></td>
                                                        <td class="text-center"><b>رقم الموبيل 2</b></td>
                                                        <td class="text-center"><b>عنوان الفيسبوك</b></td>
                                                        <td class="text-center"><b>البريد الاكتروني</b></td>
                                                        <td class="text-center"><b>عنوان السكن</b></td>
                                                        <td class="text-center"><b>عنوان العمل</b></td>
                                                        <td class="text-center"><b>ملاحظة</b></td>
                                                        <td class="text-center"><b>رقم الاستمارة</b></td>
                                                        <td class="text-center"><b>تاريخ الاستمارة</b></td>
                                                        <td class="text-center"><b>اسم الوصي</b></td>
                                                        <td class="text-center"><b>رقم موبيل الوصي</b></td>
                                                    </tr>
                                                    </thead>
                                                    <tbody>

                                                    <?php

                                                    foreach ($rows as $row) {
                                                        echo "<tr>";

                                                        echo "<td class=\"text-center\">" . $row["Agent_ID"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Agent_Type"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Charity_Office"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Full_Name"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Calling_Adj"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Gender"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Knower_Name"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Phone_Number1"] . "</td>";
                                                        if ($row["Phone_Number2"] == "NULL")
                                                            echo "<td class=\"text-center\">" . " " . "</td>";
                                                        else
                                                            echo "<td class=\"text-center\">" . $row["Phone_Number2"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Facebook_Address"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Email"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Home_Address"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Work_Address"] . "</td>";
                                                        if ($row["Note"] == "NULL")
                                                            echo "<td class=\"text-center\">" . " " . "</td>";
                                                        else
                                                            echo "<td class=\"text-center\">" . $row["Note"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Form_Number"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Form_Date"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Wasy_Name"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Wasy_Phone_Number"] . "</td>";
                                                        echo "<td style='display: flex;'>
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


                                                    <?php include('Views/Agent_Component.php'); ?>

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

