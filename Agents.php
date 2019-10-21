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
        $Agent_Type = $_POST["Agent_Type"];
        $Charity_Office = $_POST["Charity_Office"];
        $Full_Name = $_POST["Full_Name"];
        $Calling_Adj = $_POST["Calling_Adj"];
        $Gender = $_POST["Gender"];
        $Knower_Name = $_POST["Knower_Name"];
        $Phnoe_Number1 = $_POST["Phnoe_Number1"];
        $Phnoe_Number2 = $_POST["Phnoe_Number2"];
        $Facebook_Address = $_POST["Facebook_Address"];
        $Email = $_POST["Email"];
        $Home_Address = $_POST["Home_Address"];
        $Work_Address = $_POST["Work_Address"];
        $Note = $_POST["Note"];
        $Form_Number = $_POST["Form_Number"];
        $Form_Date = $_POST["Form_Date"];
        $Wasy_Name = $_POST["Wasy_Name"];
        $Wasy_Phone_Number = $_POST["Wasy_Phone_Number"];




        // check duplication of email
        $stmt = $con->prepare("SELECT * FROM Agent WHERE Email='$Email'");
        $stmt->execute();
        $rows = $stmt->fetchAll();
        if ($rows > 0) {
            $message = "Please enter another email address/  برجاء إدخال عنوان بريد آخر";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            // دي طريقه اسمها PDO ف ال PHP  , تعامل اسهل مع قاعده البيانات
            if (empty($Phnoe_Number2)) $Phnoe_Number2 = "NULL";
            if (empty($Note)) $note = "NULL";
            $stmt = $con->prepare("INSERT INTO Agent(Agent_Type, Charity_Office, Full_Name,Calling_Adj, Gender,Knower_Name,Phnoe_Number1,Phnoe_Number2,Facebook_Address,Email,Home_Address,Work_Address,Note,Form_Number,Form_Date,Wasy_Name,Wasy_Phone_Number) VALUES ('$Agent_Type', '$Charity_Office', '$Full_Name','$Calling_Adj', '$Gender','$Knower_Name','$Phnoe_Number1','$Phnoe_Number2','$Facebook_Address','$Email','$Home_Address','$Work_Address','$Note','$Form_Number',
            '$Form_Date','$Wasy_Name','$Wasy_Phone_Number')");
            $stmt->execute();
// بس خلاص الموظف اضاف تمام كده
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
                                include 'config.php';

                                $stmt = $con->prepare("SELECT * FROM employee_data");
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

                                                <div class="row">


                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label class="control-label col-sm-3"> صنف الوكيل</label>
                                                            <div class="col-sm-12">
                                                                <input required name="Agent_Type" type="text"
                                                                       class="form-control"
                                                                       placeholder=" ادخل صنف الوكيل">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="form-group ">
                                                            <label class="control-label col-sm-3"> مكتب المؤسسة</label>
                                                            <div class="col-sm-12">
                                                                <input required name="Charity_Office" type="text"
                                                                       class="form-control"
                                                                       placeholder=" ادخل مكتب المؤسسة">
                                                            </div>
                                                        </div>

                                                    </div>

                                                    <div class="col-lg-6">
                                                        <div class="panel panel-color panel-danger">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">البيانات الرئيسة</h3>
                                                            </div>
                                                            <div class="panel-body">


                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> الاسم
                                                                        الكامل</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Full_Name" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل الاسم الكامل">
                                                                    </div>
                                                                </div>


                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> الصفة
                                                                        للمناداة</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Calling_Adj" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل الصفة للمناداة">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> الجنس</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Gender" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل الجنس">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> اسم
                                                                        المعرف</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Knower_Name" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل اسم المعرف">
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <div class="panel panel-color panel-success">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">بيانات الاتصال</h3>
                                                            </div>
                                                            <div class="panel-body">


                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> رقم الموبيل
                                                                        1</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Phnoe_Number1" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل رقم الموبيل 1">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> رقم الموبيل
                                                                        2</label>
                                                                    <div class="col-sm-12">
                                                                        <input name="Phnoe_Number2" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل رقم الموبيل 2">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label style="width: auto;"
                                                                           class="control-label col-sm-3"> عنوان
                                                                        الفيسبوك</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Facebook_Address"
                                                                               type="text" class="form-control"
                                                                               placeholder=" ادخل عنوان الفيسبوك">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> البريد
                                                                        الاكتروني</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Email" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل البريد الاكتروني">
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <div class="panel panel-color panel-inverse">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">بيانات التواصل</h3>
                                                            </div>
                                                            <div class="panel-body">


                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> عنوان
                                                                        السكن</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Home_Address" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل عنوان السكن">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> عنوان
                                                                        العمل</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Work_Address" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل عنوان العمل">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3">
                                                                        ملاحظة</label>
                                                                    <div class="col-sm-12">
                                                                        <input name="Note" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل ملاحظة">
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>


                                                    <div class="col-lg-6">
                                                        <div class="panel panel-color panel-inverse">
                                                            <div class="panel-heading">
                                                                <h3 class="panel-title">بيانات مشروع ذخر الآخرة</h3>
                                                            </div>
                                                            <div class="panel-body">


                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> رقم
                                                                        الاستمارة</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Form_Number" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل رقم الاستمارة">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> تاريخ
                                                                        الاستمارة</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Form_Date" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل تاريخ الاستمارة">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label class="control-label col-sm-3"> اسم
                                                                        الوصي</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Wasy_Name" type="text"
                                                                               class="form-control"
                                                                               placeholder=" ادخل اسم الوصي">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group">
                                                                    <label style="width : auto;"
                                                                           class="control-label col-sm-3"> رقم موبيل
                                                                        الوصي</label>
                                                                    <div class="col-sm-12">
                                                                        <input required name="Wasy_Phone_Number"
                                                                               type="text" class="form-control"
                                                                               placeholder=" ادخل رقم موبيل الوصي">
                                                                    </div>
                                                                </div>


                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <div class="row" style="text-align-last: center;">


                                                    <div class="form-group">
                                                        <div class="col-sm-offset-2 col-sm-10">
                                                            <button type="submit" class="btn btn-success btn-lg"> اضافه
                                                                الوكيل
                                                                <i class="fa fa-plus"></i>
                                                            </button>

                                                        </div>
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
                                                    <div class="col-sm-12">
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
                                        $stmt = $con->prepare("SELECT * FROM Agent WHERE Full_Name  LIKE '" . $_GET["searchq"] . "%' LIMIT 50 ");

                                    } else {

                                        $stmt = $con->prepare("SELECT * FROM Agent LIMIT 50 ");
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
                                                        echo "<td class=\"text-center\">" . $row["Phnoe_Number1"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Phnoe_Number2"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Facebook_Address"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Email"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Home_Address"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Work_Address"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Note"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Form_Number"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Form_Date"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Wasy_Name"] . "</td>";
                                                        echo "<td class=\"text-center\">" . $row["Wasy_Phone_Number"] . "</td>";
                                                        echo "<td>
                                                            <button class='btn btn-default btn-xs'><span class='fa fa-edit'></span></button>
                                                            
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

