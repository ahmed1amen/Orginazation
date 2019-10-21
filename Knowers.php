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
        $Knower_Name = $_POST["Knower_Name"];
        $Calling_Adj = $_POST["Calling_Adj"];
        $Knower_Address = $_POST["Knower_Address"];
        $Adjective = $_POST["Adjective"];
        $Phone_Number1 = $_POST["Phone_Number1"];
        $Phone_Number2 = $_POST["Phone_Number2"];
        $employee_office = $_POST["employee_office"];


        // check duplication of email

        // دي طريقه اسمها PDO ف ال PHP  , تعامل اسهل مع قاعده البيانات
        if (empty($Phone_Number2)) {
            $stmt = $con->prepare("INSERT INTO Knower (Knower_Name,Calling_Adj,Knower_Address,Adjective,Phone_Number1,employee_office)
 VALUES ('$Knower_Name','$Calling_Adj','$Knower_Address','$Adjective','$Phone_Number1','$employee_office')");
        } else {
            $stmt = $con->prepare("INSERT INTO Knower (Knower_Name,Calling_Adj,Knower_Address,Adjective,Phone_Number1,Phone_Number2,employee_office)
 VALUES ('$Knower_Name','$Calling_Adj','$Knower_Address','$Adjective','$Phone_Number1','$Phone_Number2','$employee_office')");

        }
        $stmt->execute();
        $stmt->errorCode();
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
                                include 'config.php';

                                $stmt = $con->prepare("SELECT * FROM employee_data");
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

                                                <div class="form-group">
                                                    <label class="control-label col-sm-1"> اسم المعرف</label>
                                                    <div class="col-sm-10">
                                                        <input required name="Knower_Name" type="text"
                                                               class="form-control"
                                                               placeholder=" ادخل اسم المعرف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1"> صفة المناداة</label>
                                                    <div class="col-sm-10">
                                                        <input required name="Calling_Adj" type="text"
                                                               class="form-control"
                                                               placeholder=" ادخل صفة المناداة">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1"> عنوان المعرف</label>
                                                    <div class="col-sm-10">
                                                        <input required name="Knower_Address" type="text"
                                                               class="form-control"
                                                               placeholder=" ادخل عنوان المعرف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1"> الصفة</label>
                                                    <div class="col-sm-10">
                                                        <select required name="Adjective" class="form-control">
                                                            <option>موظف</option>
                                                            <option>غير موظف</option>

                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1"> رفم الموبيل 1</label>
                                                    <div required class="col-sm-10">
                                                        <input required name="Phone_Number1" type="text"
                                                               class="form-control"
                                                               placeholder=" ادخل رفم الموبيل 1">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1"> رقم الموبيل 2</label>
                                                    <div class="col-sm-10">
                                                        <input name="Phone_Number2" type="text" class="form-control"
                                                               placeholder=" ادخل رقم الموبيل 2">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-1"> مكتب المؤسسة</label>
                                                    <div class="col-sm-10">
                                                        <select required class="form-control" name="employee_office"
                                                                id="sel1">
                                                            <option>مكتب بغداد</option>
                                                            <option>مكتب البصرة</option>
                                                            <option>مكتب النجف</option>
                                                            <option>مكتب بغداد حي المنصور</option>
                                                        </select>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <div class="col-sm-offset-2 col-sm-10">
                                                        <button type="submit" class="btn btn-success btn-md"> اضافه
                                                            المعرف
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
                                        $stmt = $con->prepare("SELECT * FROM Knower WHERE Knower_Name  LIKE '" . $_GET["searchq"] . "%' LIMIT 50 ");

                                    } else {

                                        $stmt = $con->prepare("SELECT * FROM Knower LIMIT 50 ");
                                    }


                                    $stmt->execute();
                                    $rows = $stmt->fetchAll();
                                    ?>


                                    <div id="modal-wrapper" class="modal">

                                        <form class="modal-content animate" action="/action_page.php">


                                            <div class="container">

                                                <div class="form-group">
                                                    <label class="control-label col-sm-0">أسم الموظف</label>
                                                    <div class="col-sm-0">
                                                        <input required type="text" name="employee_name"
                                                               class="form-control" placeholder="ادخل اسم الموظف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-0">رقم الجوال</label>
                                                    <div class="col-sm-0">
                                                        <input required type="text" name="employee_number"
                                                               class="form-control" placeholder="ادخل رقم الجوال">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-0">عنوان الموظف</label>
                                                    <div class="col-sm-0">
                                                        <input type="text" name="employee_address" class="form-control"
                                                               placeholder="ادخل عنوان الموظف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-0">راتب الموظف</label>
                                                    <div class="col-sm-0">
                                                        <input required type="text" name="employee_salary"
                                                               class="form-control" placeholder="ادخل راتب الموظف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-0">المسمى الوظيفي الموظف</label>
                                                    <div class="col-sm-0">
                                                        <input type="text" name="employee_jobName" class="form-control"
                                                               placeholder="ادخل المسمى الوظيفي الموظف">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-0" for="email">البريد
                                                        الالكتروني</label>
                                                    <div class="col-sm-0">
                                                        <input required type="email" name="employee_email"
                                                               class="form-control" id="email"
                                                               placeholder="ادخل البريد الالكتروني">
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-0">كلمه المرور</label>
                                                    <div class="col-sm-0">
                                                        <input required type="text" name="employee_password"
                                                               class="form-control" placeholder="ادخل كلمه المرور">

                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label class="control-label col-sm-0">المكتب التابع له</label>
                                                    <div class="col-sm-0">
                                                        <select class="form-control" name="employee_office" id="sel1">
                                                            <option>مكتب بغداد</option>
                                                            <option>مكتب البصرة</option>
                                                            <option>مكتب النجف</option>
                                                            <option>مكتب بغداد حي المنصور</option>
                                                        </select>
                                                    </div>
                                                </div>


                                            </div>

                                            <div class="form-group">
                                                <div class="" style="display: flex;justify-content: center;">
                                                    <button type="submit" class="btn btn-success btn-lg"> تحديث البيانات
                                                        <i class="fa fa-user-edit"></i>
                                                    </button>

                                                </div>
                                            </div>

                                        </form>

                                    </div>


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
                                                        <td class="text-center"><b>اسم المعرف</b></td>
                                                        <td class="text-center"><b>صفة المناداة</b></td>
                                                        <td><b>عنوان المعرف</b></td>
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

                                                        echo "<td class=\"text-center\">" . $row["Knower_ID"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Knower_Name"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Calling_Adj"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Knower_Address"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Adjective"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Phone_Number1"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Phone_Number2"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["employee_office"] . "</td>";
                                                        echo "<td>
                                                          
                                                       <button onclick=\"document.getElementById('modal-wrapper').style.display='block'\" id=\"btnedit\"  class='btn btn-default btn-xs'><span class='fa fa-edit'></span></button>
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


    var modal = document.getElementById('modal-wrapper');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }

    $('.table tbody').on("click", "#btnedit", function () {
        alert($(this).text());
    });
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

