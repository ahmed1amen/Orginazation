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

        // بس خلاص الموظف اضاف تمام كده

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

    }
    /* *********************** IMAGES END ****************** */
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
                                  method="post" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="hidden" name="do" value="add"/>

                                            <label class="control-label col-sm-0">الرقم الأحصائي</label>
                                            <input required name="statistics_numer" type="text" class="form-control"
                                                   placeholder="ادخل الرقم الأحصائي">

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-0">اسم المعيل</label>
                                            <input required name="provider_name" type="text" class="form-control"
                                                   placeholder="ادخل اسم المعيل">

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-0">نسب المعيل</label>

                                            <select required name="hashimy" class="form-control">
                                                <option>هاشمي</option>
                                                <option>غير هاشمي</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-0">اسم الأب</label>

                                            <input required name="father_name" type="text" class="form-control"
                                                   placeholder="ادخل اسم الأب">

                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-sm-0">اسم المعيل 2</label>

                                            <input name="provider_name2" type="text" class="form-control"
                                                   placeholder="ادخل اسم المعيل 2 ">

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-0"> نسب المعيل 2</label>

                                            <select name="hashimy2" class="form-control">
                                                <option></option>
                                                <option>هاشمي</option>
                                                <option>غير هاشمي</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-0">اسم المعرف</label>

                                            <input required name="mo3aref_name" type="text" class="form-control"
                                                   placeholder="ادخل اسم المعرف">

                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-sm-0">اسم المذكي</label>

                                            <input required name="mozaky_name" type="text" class="form-control"
                                                   placeholder="ادخل اسم المذكي">

                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-0">جوال المذكي</label>

                                            <input required name="mozaky_number" type="text" class="form-control"
                                                   placeholder="ادخل رقم جوال المذكي">

                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-0">ملاحظه</label>

                                            <textarea name="note" class="form-control" rows="5" placeholder="ملاحظه"
                                                      id="comment"></textarea>

                                        </div>

                                    </div>
                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label class="control-label col-sm-0">رصيد العائله</label>

                                            <input required name="family_balance" type="text" class="form-control"
                                                   placeholder="ادخل رصيد العائله">

                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-sm-0">مكتب المؤسسة</label>

                                            <select required name="company_office" class="form-control">
                                                <option>22</option>
                                                <option>1</option>
                                                <option>2</option>
                                            </select>

                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-sm-0">رقم الأضبارة</label>

                                            <input required name="number_of_files" type="text" class="form-control"
                                                   placeholder="ادخل رقم الأضبارة">

                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-0">تاريخ ملف المعاملة</label>

                                            <input required name="treatment_date"
                                                   style="font-family: Impact, Haettenschweiler, 'Franklin Gothic Bold', 'Arial Black', 'sans-serif'; text-align: center;"
                                                   type="date" class="form-control">
                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-sm-0">الموقف الحالي</label>

                                            <select required name="current_situation" class="form-control">
                                                <option>ايقاف</option>
                                                <option>مستمرة</option>
                                            </select>

                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-sm-0">نوع العائلة</label>

                                            <select required name="family_type" class="form-control">
                                                <option>ايتام</option>
                                                <option>متعففة</option>
                                                <option>تبرعات</option>
                                            </select>

                                        </div>

                                        <div class="form-group">
                                            <label class="control-label col-sm-0">الحالة الخاصة</label>

                                            <select required name="special_case" class="form-control">
                                                <option>الحشد الشعبي</option>
                                                <option>مطلقة</option>
                                                <option>عجزة</option>
                                                <option>مرضى</option>
                                                <option>عوائل سجناء</option>
                                            </select>

                                        </div>


                                        <div class="form-group">
                                            <label class="control-label col-sm-0">يوم التسوق</label>

                                            <select required name="	shopping_day" class="form-control">
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
                                            <label class="control-label col-sm-0">رقم الجنسية</label>

                                            <input required name="nationality_number" type="text" class="form-control"
                                                   placeholder="ادخل رقم الجنسية">

                                        </div>
                                    </div>


                                </div>

                                <div class="row">


                                    <ul class="nav nav-tabs">
                                        <li class="active">
                                            <a href="tabs-accordions.html#v-Pics" data-toggle="tab"
                                               aria-expanded="false">صور الكشف</a>
                                        </li>
                                        <li class="">
                                            <a href="tabs-accordions.html#v-otherSub" data-toggle="tab"
                                               aria-expanded="true">اشتراكات اخري</a>
                                        </li>
                                        <li class="">
                                            <a href="tabs-accordions.html#v-BenefitsAndAgency" data-toggle="tab"
                                               aria-expanded="false">الأستحقاقات والوكالة</a>
                                        </li>
                                        <li class="">
                                            <a href="tabs-accordions.html#v-SupportAndOngoing" data-toggle="tab"
                                               aria-expanded="false">الدعم والجاريه</a>
                                        </li>
                                        <li class="">
                                            <a href="tabs-accordions.html#v-FieldInspection" data-toggle="tab"
                                               aria-expanded="false">الكشف الميداني</a>
                                        </li>
                                        <li class="">
                                            <a href="tabs-accordions.html#v-ContactAndAdress" data-toggle="tab"
                                               aria-expanded="false">عناوين الاتصال والتواصل</a>
                                        </li>
                                    </ul>

                                    <div class="tab-content">
                                        <div class="tab-pane active" id="v-Pics">


                                            <div class="form-group">
                                                <label class="control-label col-sm-0">صور الحالة</label>
                                                <input class="form-control" id='Files' name="files[]" type="file"
                                                       multiple="multiple" accept="image/*"/>


                                            </div>


                                        </div>
                                        <div class="tab-pane " id="v-otherSub">


                                            <div class="form-group">
                                                <label class="control-label col-sm-0">عضوية ذخر الأخرة</label>

                                                <select name="membership" class="form-control">
                                                    <option></option>
                                                    <option>مشتركة</option>
                                                    <option>غير مشتركة</option>
                                                </select>

                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-sm-0">اسم الوصي</label>

                                                <input name="wasy_name" type="text" class="form-control "
                                                       placeholder="ادخل اسم الوصي">

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-0">موبيل الوصي</label>

                                                <input name="wasy_number" type="text" class="form-control "
                                                       placeholder="ادخل موبيل الوصي">

                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-sm-0">الأستعداد لعقد المجالس
                                                    الحسينية في البيت</label>

                                                <select name="mgls_preparation" class="form-control">
                                                    <option></option>
                                                    <option>مستعدة</option>
                                                    <option>غير مستعدة</option>
                                                </select>

                                            </div>


                                        </div>
                                        <div class="tab-pane" id="v-BenefitsAndAgency">


                                            <div class="form-group">
                                                <label class="control-label col-sm-0">الوكالة الشرعية</label>

                                                <select name="sharia_agency" class="form-control">
                                                    <option></option>
                                                    <option>وكالة شرعية مطلقة</option>
                                                    <option>وكالة شرعية عامة</option>
                                                    <option>وكالة شرعية</option>
                                                    <option>بدون وكالة شرعية</option>
                                                </select>

                                            </div>
                                            <div class="form-group">
                                                <label class="control-label col-sm-0">اختبار الاستحقاق</label>

                                                <select name="esthqak_test" class="form-control">
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
                                                <label class="control-label col-sm-0">الصدقة الجارية</label>

                                                <select name="sadaka_garia" class="form-control">
                                                    <option></option>
                                                    <option>مساهمة</option>
                                                    <option>غير مساهمة</option>
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-0">ملبغ اشتراك
                                                    الجارية</label>

                                                <input name="garia_eshtrak" type="text" class="form-control "
                                                       placeholder="ادخل ملبغ اشتراك الجارية">

                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-sm-0">اشتراك الدعم</label>

                                                <select name="eshtrak_da3m" class="form-control">
                                                    <option></option>
                                                    <option>مشتركة</option>
                                                    <option>غير مشتركة</option>
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-0">ملبغ اشتراك الدعم</label>

                                                <input name="da3m_money" type="text" class="form-control "
                                                       placeholder="ادخل ملبغ اشتراك الدعم">

                                            </div>


                                        </div>

                                        <div class="tab-pane" id="v-FieldInspection">


                                            <div class="form-group">
                                                <label class="control-label col-sm-0">الكششف الميداني</label>

                                                <select name="kashf_medany" class="form-control">
                                                    <option></option>
                                                    <option>مكشوفة</option>
                                                    <option>غير مكشوفة</option>
                                                </select>

                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-sm-0">صنف العائلة</label>

                                                <select name="family_sanf" class="form-control">
                                                    <option></option>
                                                    <option>أ</option>
                                                    <option>ب</option>
                                                    <option>ج</option>
                                                </select>

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-0">نوع السكن</label>

                                                <select name="sakan_type" class="form-control">
                                                    <option></option>
                                                    <option>ملك صرف</option>
                                                    <option>ملك زراعي</option>
                                                    <option>تجاوز</option>
                                                    <option>ايجار</option>
                                                    <option>مع اخرين</option>
                                                </select>

                                            </div>


                                            <div class="form-group">
                                                <label class="control-label col-sm-0">مبلغ الايجار</label>

                                                <input name="egar_money" type="text" class="form-control "
                                                       placeholder="ادخل ملبغ الايجار">

                                            </div>

                                            <div class="form-group">
                                                <label class="control-label col-sm-0">المبلغ الشهري المقترج</label>

                                                <input name="suggested_money" type="text" class="form-control "
                                                       placeholder="ادخل المبلغ الشهري المقترج">

                                            </div>

                                            <div class="form-group">


                                                <div class="col-md-6">
                                                    <div class="panel-group" id="accordion-test-2">
                                                        <div class="panel panel-default">
                                                            <div class="panel-heading">
                                                                <h4 class="panel-title">

                                                                    <a data-toggle="collapse"
                                                                       data-parent="#accordion-test-2"
                                                                       href="tabs-accordions.html#collapseOne-2"
                                                                       aria-expanded="true">
                                                                        <i class="fa fa-tachometer-alt"> مؤسسات
                                                                            اخري </i>
                                                                    </a>

                                                                </h4>
                                                            </div>
                                                            <div id="collapseOne-2" class="panel-collapse collapse"
                                                                 aria-expanded="true" style="">
                                                                <div class="panel-body">

                                                                    <div class="checkbox checkbox-primary col-sm-4">
                                                                        <input name="another_companies[]"
                                                                               value="salaries" id="ch1"
                                                                               type="checkbox">
                                                                        <label for="ch1"> رواتب شهداء الحشد
                                                                            الشعبي</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-primary col-sm-4">
                                                                        <input name="another_companies[]" value="social"
                                                                               id="ch2" type="checkbox">
                                                                        <label for="ch2"> شبكة الرعاية
                                                                            الاجتماعية</label>
                                                                    </div>


                                                                    <div class="checkbox checkbox-primary col-sm-4">
                                                                        <input name="another_companies[]"
                                                                               value="company" id="ch3" type="checkbox">
                                                                        <label for="ch3"> مؤسسة الباقر ع</label>
                                                                    </div>
                                                                    <div class="checkbox checkbox-primary col-sm-4">
                                                                        <input name="another_companies[]"
                                                                               value="charity_company" id="ch4"
                                                                               type="checkbox">
                                                                        <label for="ch4"> مؤسسة السجاد الخيرية</label>
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>


                                                    </div>
                                                </div>


                                            </div>


                                        </div>

                                        <div class="tab-pane" id="v-ContactAndAdress">

                                            <div class="form-group">
                                                <label class="control-label col-sm-0">عناوين التواصل</label>

                                                <textarea name="contacts" class="form-control" rows="7"
                                                          placeholder="ادخل جميع عناوين التواصل">
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
                                <label class="control-label col-sm-0">أسم المكتب</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control"
                                           placeholder="ادخل أسم المكتب">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-0">عنوان المكتب</label>
                                <div class="col-sm-10">
                                    <input required type="text" class="form-control"
                                           placeholder="ادخل عنوان المكتب">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-0">رقم جوال اول</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                           placeholder="ادخل رقم جوال">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-0">رقم جوال ثاني</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                           placeholder="ادخل رقم جوال">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-0">رقم جوال ثالث</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control"
                                           placeholder="ادخل رقم جوال">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-0" for="email">البريد
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

