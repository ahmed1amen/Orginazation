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
        $statistics_numer = $_POST["statistics_numer"];
        $family_balance = $_POST["family_balance"];
        $provider_name = $_POST["provider_name"];
        $company_office = $_POST["company_office"];
        $hashimy = $_POST["hashimy"];
        $number_of_files = $_POST["number_of_files"];
        $father_name = $_POST["father_name"];
        $treatment_date = $_POST["treatment_date"];
        $provider_name2 = $_POST["provider_name2"];

        $current_situation = $_POST["current_situation"];
        $hashimy2 = $_POST["hashimy2"];
        $family_type = $_POST["family_type"];
        $mo3aref_name = $_POST["mo3aref_name"];
        $special_case = $_POST["special_case"];
        $mozaky_name = $_POST["mozaky_name"];
        $shopping_day = $_POST["shopping_day"];
        $mozaky_number = $_POST["mozaky_number"];
        $nationality_number = $_POST["nationality_number"];

        $note = $_POST["note"];

        $membership = $_POST["membership"];
        $wasy_name = $_POST["wasy_name"];
        $wasy_number = $_POST["wasy_number"];
        $mgls_preparation = $_POST["mgls_preparation"];

        $sharia_agency = $_POST["sharia_agency"];
        $esthqak_test = $_POST["esthqak_test"];
        $sadaka_garia = $_POST["sadaka_garia"];
        $garia_eshtrak = $_POST["garia_eshtrak"];
        $eshtrak_da3m = $_POST["eshtrak_da3m"];
        $da3m_money = $_POST["da3m_money"];

        $contacts = $_POST["contacts"];

        $kashf_medany = $_POST["kashf_medany"];
        $family_sanf = $_POST["family_sanf"];
        $sakan_type = $_POST["sakan_type"];
        $egar_money = $_POST["egar_money"];
        $suggested_money = $_POST["suggested_money"];
        //$another_companies_array=$_POST["another_companies"]; // array

        //$another_companies=;
        // دي طريقه اسمها PDO ف ال PHP  , تعامل اسهل مع قاعده البيانات
        $hashimy2_flag = false;

        if (!empty($provider_name2)) {
            if (empty($hashimy2)) {
                $hashimy2_flag = true;
                $message = "من فضلك أدخل نسب المعيل2";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else {
            $provider_name2 = "NULL";
            $hashimy2 = "NULL";
        }
        if (empty($note)) $note = "NULL";
        $wasy_flag = false;
        if (!empty($wasy_name)) {
            if (empty($wasy_number)) {
                $wasy_flag = true;
                $message = "من فضلك أدخل موبيل الواصي";

                echo "<script type='text/javascript'>alert('$message');</script>";

            }
        } else {
            $wasy_name = "NULL";
            $wasy_number = "NULL";
        }
        $garia_falg = false;
        if (!empty($sadaka_garia)) {
            if (empty($garia_eshtrak)) {
                $garia_falg = true;
                $message = "من فضلك أدخل مبلغ اشتراك الجارية";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else {
            $sadaka_garia = "NULL";
            $garia_eshtrak = "NULL";
        }
        $da3m_falg = false;
        if (!empty($eshtrak_da3m)) {
            if (empty($da3m_money)) {
                $da3m_falg = true;
                $message = "من فضلك أدخل مبلغ اشتراك الدعم";
                echo "<script type='text/javascript'>alert('$message');</script>";
            }
        } else {
            $eshtrak_da3m = "NULL";
            $da3m_money = "NULL";
        }
        if (empty($contacts)) $contacts = "NULL";
        if (empty($kashf_medany)) $kashf_medany = "NULL";
        if (empty($family_sanf)) $family_sanf = "NULL";
        if (empty($sakan_type)) $sakan_type = "NULL";
        if (empty($egar_money)) $egar_money = "NULL";
        if (empty($suggested_money)) $suggested_money = "NULL";
        if (!empty($_POST['another_companies'])) {
            $another_companies = "";
            foreach ($_POST['another_companies'] as $selected)  //salaries,social,company,charity_company
            {
                // Here $results holding all the check box values as a string
                $another_companies .= $selected . " ";
                //if you need space for each value use $results .= $selected . " ";
            }
        } else {
            $another_companies = "NULL";
        }
        echo $another_companies;


        if ($hashimy2_flag == false && $wasy_flag == false && $garia_falg == false && $da3m_falg == false) {
            $stmt = $con->prepare("INSERT INTO family(statistics_numer, family_balance, provider_name, company_office, hashimy, number_of_files, father_name, treatment_date, provider_name2, current_situation, hashimy2, family_type, mo3aref_name, special_case, mozaky_name, shopping_day, mozaky_number, nationality_number, note, membership, wasy_name, wasy_number, mgls_preparation, sharia_agency, esthqak_test, sadaka_garia, garia_eshtrak, eshtrak_da3m, da3m_money, contacts, kashf_medany, family_sanf, sakan_type, egar_money, suggested_money, another_companies)
 VALUES ('$statistics_numer', '$family_balance', '$provider_name', '$company_office', '$hashimy', '$number_of_files', '$father_name', '$treatment_date', '$provider_name2', '$current_situation', '$hashimy2', '$family_type', '$mo3aref_name', '$special_case', '$mozaky_name', '$shopping_day', '$mozaky_number', '$nationality_number', '$note', '$membership', '$wasy_name', '$wasy_number', '$mgls_preparation', '$sharia_agency', '$esthqak_test', '$sadaka_garia', '$garia_eshtrak', '$eshtrak_da3m', '$da3m_money', '$contacts', '$kashf_medany', '$family_sanf', '$sakan_type', '$egar_money', '$suggested_money', '$another_companies')");
            $stmt->execute();
        }


        /* *********************** IMAGES ****************** */

        // File upload configuration


        $targetDir = "uploads/" . $statistics_numer . "/";
        if (!(is_dir($targetDir))) {
            mkdir($targetDir);
        }


        $statusMsg = $errorMsg = $errorUpload = '';
        if (!empty(array_filter($_FILES['files']['name']))) {

            foreach ($_FILES['files']['name'] as $key => $val) {

                //File Type
                $fileType = pathinfo($_FILES['files']['name'][$key], PATHINFO_EXTENSION);


                //File NAME Serial Generator
                $FileName = $targetDir . time() . "_" . rand() . "." . $fileType;

                // File upload path

                $targetFilePath = $FileName;


                // Upload file to server
                if (!(move_uploaded_file($_FILES["files"]["tmp_name"][$key], $targetFilePath))) {
                    $errorUpload .= $_FILES['files']['name'][$key] . ', ';
                }
            }

            if (!($errorUpload != '')) {
                echo "<script type='text/javascript'>alert('$errorUpload');</script>";
            }

        } else {
            $statusMsg = 'يرجى اختيار ملف للتحميل.';
            echo "<script type='text/javascript'>alert('$statusMsg');</script>";
        }
        /* *********************** IMAGES END ****************** */

    } elseif ($_POST["do"] == "update") {

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
    <title>العائلات</title>

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
                <h4 class="page-title">العائلات</h4>
            </div>
            <div class="cb-page-content">
                <div class="container">
                    <div class="row">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-purple">
                                <?php
                                include 'config.php';

                                   $stmt= $con->prepare("SELECT * FROM family");
                                   $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
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
                                  method="post" enctype="multipart/form-data">

                                <?php include("Views/Families_Component.php"); ?>


                        </form>
                    </div>
                </div>


            </div>

            <?php
            } elseif ($_GET['do'] == "view") {
                include 'config.php';

                if (isset($_GET["searchq"])) {
                    $textInfo = $_GET["searchq"];
                    if (preg_match('/[0-9]/', $textInfo)) {
                        $stmt = $con->prepare("SELECT * FROM family WHERE family_ID=$textInfo or statistics_numer=$textInfo LIMIT 50");
                    } else {
                        $stmt = $con->prepare("SELECT * FROM family WHERE provider_name  LIKE '" . $_GET["searchq"] . "%'
                         or father_name LIKE '" . $_GET["searchq"] . "%' or mo3aref_name LIKE '" . $_GET["searchq"] . "%'
                          or mozaky_name LIKE '" . $_GET["searchq"] . "%' LIMIT 50 ");
                    }
                } else {

                    $stmt = $con->prepare("SELECT * FROM family LIMIT 50 ");
                }


            $stmt->execute();
            $rows = $stmt->fetchAll();
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


                /////////////////////////////////////////////////////////////////
                <div class="table-responsive data-table">
                    <table id="table1" class="table table-bordred table-striped">
                        <thead>
                        <tr>
                            <td class="text-center"><b>كود العائلة</b></td>
                            <td class="text-center"><b>الرقم الإحصائي</b></td>
                            <td class="text-center"><b>رصيد العائله</b></td>
                            <td class="text-center"><b>اسم المعيل</b></td>
                            <td class="text-center"><b>مكتب المؤسسة</b></td>
                            <td class="text-center"><b>نسب المعيل</b></td>
                            <td class="text-center"><b>رقم الأضبارة</b></td>
                            <td class="text-center"><b>اسم الأب</b></td>
                            <td class="text-center"><b>تاريخ ملف المعاملة</b></td>
                            <td class="text-center"><b>اسم المعيل 2</b></td>
                            <td class="text-center"><b>الموقف الحالي</b></td>

                            <td class="text-center"><b>نسب المعيل 2</b></td>
                            <td class="text-center"><b>نوع العائلة</b></td>
                            <td class="text-center"><b>اسم المعرف</b></td>
                            <td class="text-center"><b>الحالة الخاصة</b></td>
                            <td class="text-center"><b>اسم المذكي</b></td>
                            <td class="text-center"><b>يوم التسوق</b></td>
                            <td class="text-center"><b>جوال المذكي</b></td>
                            <td class="text-center"><b>رقم الجنسية</b></td>
                            <td class="text-center"><b>ملاحظه</b></td>
                        </tr>
                        </thead>
                        <tbody>

                        <?php

                        foreach ($rows as $row) {
                            echo "<tr>";

                            echo "<td class=\"text-center\">" . $row["family_ID"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["statistics_numer"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["family_balance"] . "</td>";
                            echo "<td  class=\"text-center\">" . $row["provider_name"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["company_office"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["hashimy"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["number_of_files"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["father_name"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["treatment_date"] . "</td>";
                            if ($row["provider_name2"] == "NULL")
                                echo "<td class=\"text-center\">" . $row["provider_name2"] . "</td>";
                            else
                                echo "<td class=\"text-center\">" . $row["provider_name2"] . "</td>";
                            echo "<td  class=\"text-center\">" . $row["current_situation"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["hashimy2"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["family_type"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["mo3aref_name"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["special_case"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["mozaky_name"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["shopping_day"] . "</td>";

                            echo "<td  class=\"text-center\">" . $row["mozaky_number"] . "</td>";
                            echo "<td class=\"text-center\">" . $row["nationality_number"] . "</td>";
                            if ($row["note"] == "NULL")
                                echo "<td class=\"text-center\">" . " " . "</td>";
                            else
                                echo "<td class=\"text-center\">" . $row["note"] . "</td>";

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


        //////////////////////////////////////////////////////////




                <div id="modal-wrapper" class="modal">

                    <form method="post" id="frm-modal" class="modal-content animate"
                          action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">


                        <div class="container">
                            <div>
                                <button style="float: left;font-size: 25px;min-width: 30px;min-height: 30px;"
                                        type="button" class="close" data-dismiss="alert" aria-hidden="true"
                                        onclick="document.getElementById('modal-wrapper').style.display='none'">×
                                </button>
                            </div>

                            <input type="hidden" name="currentrecord" id="currentrecord" value="">
                            <input type="hidden" name="do" value="update"/>


                            <div id="model-component" style="padding-top: 40px;">


                                <?php include('Views/Families_Component.php'); ?>

                                <div style='text-align: center;' class="col-sm-offset-2 col-sm-10">

                                    <button type="submit" class="btn btn-danger btn-lg">تحديث البيانات <i
                                                class="fa fa-edit"></i>
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

