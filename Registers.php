<?php
session_start();
if (isset($_SESSION['Username'])) {
    // في موظف مسجل الدخول كده .
} else {
// كده مفيش , ف حوله علي اللوجن الخاص ب المشتركين
    header('Location: EmpLogin.php');

}


// دي بتتنفذ فقط اذا تم عمل بوست من الفورم الي في الدااتا , وعلشان ال Validate حطيت attribute اسمه required ف كل input علشان يسهل علينا ال Validate بدل ما نعمله ب IF
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // الداتا الي جايه من الفورم عملتلها ريتريف في متغيرات
    include 'config.php';

    $RegisterName = $_POST["RegisterName"];
    $RegisterOffice = $_POST["RegisterOffice"];
    $RegisterGroup = $_POST["RegisterGroup"];
    $RegisterNickname = $_POST["RegisterNickname"];
    $RegisterGender = $_POST["RegisterGender"];
    $Knower_Name = $_POST["Knower_Name"];
    $RegisterHomeAddress = $_POST["RegisterHomeAddress"];
    $RegisterJobAddress = $_POST["RegisterJobAddress"];
    $RegisterPhone1 = $_POST["RegisterPhone1"];
    $RegisterPhone2 = $_POST["RegisterPhone2"];
    $RegisterE_mail = $_POST["RegisterE_mail"];
    $RegisterFacebook = $_POST["RegisterFacebook"];
    $RegisterArrivedCatch = isset($_POST["RegisterArrivedCatch"]) ? $_POST["RegisterArrivedCatch"] : '';
    $RegisterCredit = isset($_POST["RegisterCredit"]) ? $_POST["RegisterCredit"] : '';


    if ($_POST["do"] == "add") {


        // انادي علي الكونفج الي هوا هيمعلي ال Connection مع الداتا بيز


        // check duplication of email
        $stmt = $con->prepare("SELECT * FROM registers WHERE RegisterE_mail='$RegisterE_mail'");
        $stmt->execute();
        $rows = $stmt->fetchAll();
        if ($stmt->rowCount() > 0) {
            $message = "Please enter another email address/  برجاء إدخال عنوان بريد آخر ";
            echo "<script type='text/javascript'>alert('$message');</script>";
        } else {
            $stmt = $con->prepare("INSERT INTO registers(RegisterName, RegisterOffice,RegisterGroup, RegisterNickname, RegisterGender, Knower_Name,RegisterHomeAddress, RegisterJobAddress, RegisterPhone1, RegisterPhone2, RegisterE_mail, RegisterFacebook, RegisterArrivedCatch)
        VALUES ('$RegisterName', ' $RegisterOffice','$RegisterGroup', '$RegisterNickname', '$RegisterGender', '$Knower_Name','$RegisterHomeAddress', '$RegisterJobAddress', '$RegisterPhone1', '$RegisterPhone2', '$RegisterE_mail','$RegisterFacebook', '$RegisterArrivedCatch')");
            $stmt->execute();

            //DonorID
            $RegisterID = $con->lastInsertId();
            //RegisterCredit

            $Donors_IDs = array();
            $index1 = 0;
            if (isset($_POST["Donner_Name"]) && is_array($_POST["Donner_Name"])) {
                foreach ($_POST["Donner_Name"] as $key => $text_field) {
                    $stmt = $con->prepare("SELECT Donner_ID FROM donors WHERE Donner_Name='$text_field'");
                    $stmt->execute();
                    $rows = $stmt->fetchAll();
                    $DonorID = $rows[0]["Donner_ID"];
                    $Donors_IDs[$index1] = $DonorID;
                    $index1 += 1;
                }
            }

            $Credit = array();
            $index2 = 0;
            if (isset($_POST["RegisterCredit"]) && is_array($_POST["RegisterCredit"])) {
                foreach ($_POST["RegisterCredit"] as $key => $text_field) {
                    $Credit[$index2] = $text_field;
                    $index2 += 1;

                }
            }
            // IN LOOP
            $length = count($Credit);
            for ($x = 0; $x < $length; $x++) {
                $stmt = $con->prepare("INSERT INTO regiters_donors(DonorID,RegisterID,RegisterCredit)
             values ('$Donors_IDs[$x]','$RegisterID','$Credit[$x]')");
                $stmt->execute();
            }

            //fbird_wait_event();

        }


        header('Content-Type: text/html; charset=utf-8');


    } else if ($_POST["do"] == "update") {
        $currentrecord = $_POST["currentrecord"];
        $stmt = $con->prepare("UPDATE  Registers SET 
RegisterName = '$RegisterName',RegisterOffice = '$RegisterOffice',RegisterGroup = '$RegisterGroup',RegisterNickname = '$RegisterNickname',RegisterGender = '$RegisterGender',Knower_Name = '$Knower_Name',RegisterHomeAddress = '$RegisterHomeAddress',RegisterJobAddress = '$RegisterJobAddress',RegisterPhone1  = '$RegisterPhone1 ',RegisterPhone2 = '$RegisterPhone2',RegisterE_mail = '$RegisterE_mail',RegisterFacebook = '$RegisterFacebook',RegisterArrivedCatch = '$RegisterArrivedCatch'
WHERE RegisterID=$currentrecord");
        $stmt->execute();


        $stmt = $con->prepare("DELETE FROM regiters_donors WHERE RegisterID=$currentrecord");
        $stmt->execute();

        $Donors_IDs = array();
        $index1 = 0;
        if (isset($_POST["Donner_Name"]) && is_array($_POST["Donner_Name"])) {
            foreach ($_POST["Donner_Name"] as $key => $text_field) {
                $stmt = $con->prepare("SELECT Donner_ID FROM donors WHERE Donner_Name='$text_field'");
                $stmt->execute();
                $DonorID = $stmt->fetch()['Donner_ID'];
                $Donors_IDs[$index1] = $DonorID;
                $index1 += 1;
            }
        }


        $Credit = array();
        $index2 = 0;
        if (isset($_POST["RegisterCredit"]) && is_array($_POST["RegisterCredit"])) {
            foreach ($_POST["RegisterCredit"] as $key => $text_field) {
                $Credit[$index2] = $text_field;
                $index2 += 1;

            }
        }


        $N = count($Credit);
        for ($i = 0; $i < $N; $i++) {
            $stmt = $con->prepare("INSERT INTO regiters_donors(DonorID,RegisterID,RegisterCredit)
             values ('$Donors_IDs[$i]','$currentrecord','$Credit[$i]')");
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
    <title>بيانات المشتركين</title>

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
                <h4 class="page-title">المشتركين</h4>

            </div>
            <div class="cb-page-content">
                <div class="container">
                    <div class="row">
                        <div class="cb-col-20 col-sm-6">
                            <div class="widget-panel widget-style-1 bg-primary">
                                <?php
                                include 'config.php';

                                $stmt = $con->prepare("SELECT * FROM registers");
                                $stmt->execute();

                                echo "<h2 class='m-0 text-white counter font-40 font-400 text-center'>" . $stmt->rowCount() . "</h2>";
                                ?>

                                <div class="text-white text-opt  m-t-5 text-center font-12">عدد المشتركين</div>
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
                                                data-toggle="dropdown" aria-expanded="false">المشتركين
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
                                    include 'config.php';
                                    ?>




                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b>اضافة المشتركين</b></h4>
                                        </div>
                                        <div class="card-box-content form-compoenent">
                                            <form class="form-horizontal"
                                                  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>"
                                                  method="post" onsubmit="return checkdup()">
                                                <input type="hidden" name="do" value="add"/>
                                                <?php include("Views/Registers_Component.php"); ?>

                                            </form>
                                        </div>
                                    </div>
                                    <?php

                                } elseif ($_GET['do'] == "view") {
                                    include 'config.php';

                                    if (isset($_GET["searchq"])) {
                                        $textInfo = $_GET["searchq"];
                                        if (preg_match('/[0-9]/', $textInfo) && !preg_match('/@/', $textInfo)) {
                                            $stmt = $con->prepare("SELECT * FROM registers WHERE 	RegisterID=$textInfo LIMIT 50");
                                        } elseif (preg_match('/@/', $textInfo)) {
                                            $stmt = $con->prepare("SELECT * FROM registers WHERE RegisterE_mail='$textInfo' LIMIT 50");
                                        } else {
                                            $stmt = $con->prepare("SELECT * FROM registers WHERE RegisterName  LIKE '" . $_GET["searchq"] . "%' or 
                                            RegisterOffice LIKE '" . $_GET["searchq"] . "%' LIMIT 50 ");
                                        }

                                    } else {

                                        $stmt = $con->prepare("SELECT * FROM registers LIMIT 50 ");
                                    }


                                    $stmt->execute();
                                    $rows = $stmt->fetchAll();
                                    ?>
                                    <div class="card-box">
                                        <div class="card-box-head  border-b m-t-0">
                                            <h4 class="header-title"><b> بيانات المشتركين</b></h4>
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


                                        </div>
                                        <br>
                                        <div class="table-responsive data-table">
                                            <table id="table1" class="table table-bordred table-striped">
                                                <thead>
                                                <tr>
                                                    <td class="text-center"><b>كود المشترك</b></td>
                                                    <td class="text-center"><b>اسم المشترك</b></td>
                                                    <td class="text-center"><b>مكتب المؤسسة</b></td>
                                                    <td class="text-center"><b>اسم المجموعة</b></td>
                                                    <td class="text-center"><b>الاسم التعريفي</b></td>
                                                    <td class="text-center"><b>اسم المعرف</b></td>
                                                    <td class="text-center"><b>النوع</b></td>
                                                    <td class="text-center"><b>عنوان السكن</b></td>
                                                    <td class="text-center"><b>عنوان العمل</b></td>
                                                    <td class="text-center"><b>رقم الموبيل 1</b></td>
                                                    <td class="text-center"><b>رقم الموبيل 2</b></td>
                                                    <td class="text-center"><b>البريد الالكتروني</b></td>
                                                    <td class="text-center"><b>عنوان الفيس بوك</b></td>
                                                    <td class="text-center"><b>لا يرغب يوصل شهري</b></td>

                                                </tr>
                                                </thead>
                                                <tbody>

                                                <?php

                                                foreach ($rows as $row) {
                                                    echo "<tr>";


                                                    echo "<td class=\"text-center\">" . $row["RegisterID"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterName"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterOffice"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterGroup"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterNickname"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterGender"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["Knower_Name"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterHomeAddress"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterJobAddress"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterPhone1"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterPhone2"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterE_mail"] . "</td>";
                                                    echo "<td class=\"text-center\">" . $row["RegisterFacebook"] . "</td>";
                                                    echo "<td class=\"text-center\"> <input  name='chk' disabled type=\"checkbox\" name=\"country\"   " . ($row["RegisterArrivedCatch"] == 1 ? 'checked' : '') . " value=\"" . $row["RegisterArrivedCatch"] . "\" ></td>";


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
                                                        <li><a href="tables.html#"><span class="fa fa-angle-double-left"></span></a></li>
                                                        <li class="active"><a href="tables.html#">1</a></li>
                                                        <li><a href="tables.html#">2</a></li>
                                                        <li><a href="tables.html#">3</a></li>
                                                        <li><a href="tables.html#">4</a></li>
                                                        <li><a href="tables.html#">5</a></li>
                                                        <li><a href="tables.html#"><span class="fa fa-angle-double-right"></span></a></li>
                                                    </ul>
                                                </div>

                                        </div>
                                    </div>
                        </div>
                                    <div id="modal-wrapper" class="modal">

                                        <form method="post" onsubmit="return checkdup()" id="frm-modal"
                                              class="modal-content animate"
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


                                                    <?php include('Views/Registers_Component.php'); ?>

                                                    <script>

                                                        // document.querySelector("#dynamic_field > tbody > tr").remove();
                                                    </script>
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



<script>
    var modal = document.getElementById('modal-wrapper');
    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }


    var i = 0;


    var OptionsData;


    $.ajax({
        url: "Includes/PHPHelper/RetrieveDonors.php",
        method: "GET",
        success: function (data) {
            OptionsData = data;
        }
    });


    $('#add').click(function () {
        i = document.getElementById("dynamic_field").getElementsByTagName("tbody")[0].getElementsByTagName("tr").length;
        i++;
        $('#dynamic_field').append('<tr id="row' + i + '"> <td><button type="button" name="remove" id=' + i + ' class="btn btn-danger btn_remove">X</button></td> <td><select  name="Donner_Name[]" class="form-control name_list" >' + OptionsData + '</select> </td><td><input type="number" name="RegisterCredit[]"  value="0" placeholder="ادخل القيمة" class="form-control name_list" /></td></tr>');
    });

    function checkdup() {


        var texts = [];
        $('select[name$="Donner_Name[]"]').each(function () {
            texts.push(this.value);
        });
        var r_Array = texts.sort();
        for (var i = 0; i < r_Array.length - 1; i++) {
            if (r_Array[i + 1] == r_Array[i]) {
                alert("لايمكن تكرار نفس المبرة لمشترك واحد");
                return false;
            }
        }

    }





    $("#table1").on('click', '#btnedit', function () {


        $("#modal-wrapper").fadeIn("fast", function () {
            (document.getElementById('modal-wrapper').style.display = 'block');
        });
        $("#btnsubmit").first().remove();
        $("#model-component > div > div").attr("class", "col-sm-0");
        $("#model-component > div > label").attr("class", "col-sm-0");
        //    $("#model-component > div > div > input").removeAttr("required");
        $("#model-component :input").removeAttr("required");
        // get the current row
        var currentRow = $(this).closest("tr");
        $("#currentrecord").val(currentRow.find("td:eq(0)").html());
        $("#model-component :input").eq(0).val(currentRow.find("td:eq(1)").html());
        $("#model-component :input").eq(1).val(currentRow.find("td:eq(2)").html());
        $("#model-component :input").eq(2).val(currentRow.find("td:eq(3)").html());
        $("#model-component :input").eq(3).val(currentRow.find("td:eq(4)").html());
        $("#model-component :input").eq(4).val(currentRow.find("td:eq(5)").html());
        $("#model-component :input").eq(5).val(currentRow.find("td:eq(6)").html());
        $("#model-component :input").eq(6).val(currentRow.find("td:eq(7)").html());
        $("#model-component :input").eq(7).val(currentRow.find("td:eq(8)").html());
        $("#model-component :input").eq(8).val(currentRow.find("td:eq(9)").html());
        $("#model-component :input").eq(9).val(currentRow.find("td:eq(10)").html());
        $("#model-component :input").eq(10).val(currentRow.find("td:eq(11)").html());
        $("#model-component :input").eq(11).val(currentRow.find("td:eq(12)").html());

        var $xa = $.parseHTML(currentRow.find("td:eq(13)").html())[1];

        if ($xa.hasAttribute("checked") == true) {

            document.getElementById("RegisterArrivedCatch").checked = true;
        }
        else {

        }

        $regid = document.getElementById("currentrecord").value;

        $.ajax({
            url: "Includes/PHPHelper/RetrieveRegitserDonors.php?registerid=" + $regid,
            method: "GET",
            success: function (data) {

                $("#dynamic_field").html(data);


                $('#btn_donoradd').click(function () {
                    i = document.getElementById("dynamic_field").getElementsByTagName("tbody")[0].getElementsByTagName("tr").length;
                    i++;
                    $('#dynamic_field').append('<tr id="row' + i + '"> <td><button type="button" name="remove" id=' + i + '  onclick="$(' + "'" + '#row' + i + "'" + ').remove();" class="btn btn-danger btn_remove">X</button></td> <td><select  name="Donner_Name[]" class="form-control name_list" >' + OptionsData + '</select> </td><td><input type="number" name="RegisterCredit[]"  value="0" placeholder="ادخل القيمة" class="form-control name_list" /></td></tr>');
                });


            }
        });


    });


</script>


</body>
</html>

