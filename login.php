<?php
include 'Includes/config.php';
DBClass::connect();
session_start();
if (isset($_SESSION['Username'] )){
    header('Location: DashBoard.php');
}

if   ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['Username'];
    $password = $_POST['Passowrd'];
    // Check if user in DB
    $stmt = DBClass::$con->prepare("SELECT Username ,Password FROM Org_Users WHERE Username = ? AND Password = ?");
    $stmt->execute(array($username, $password));
    $count = $stmt->rowCount();
    //Check If User Correct
    if ($count > 0){
        $_SESSION['Username'] = $username;   // Register Session Name
        $_SESSION['UserType'] = 'admin';   // Register UserType
        unset($_SESSION['ERROR']);
        header('Location: DashBoard.php');
        exit();
    } else {
        $_SESSION['ERROR'] = "خطأ في اسم المستخدم او كلمه السر.";
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
<title>تسجيل الدخول إلي النظام</title>

<!-- FAVICON -->
<link rel="shortcut icon" href="assets/images/favicon.png">

<!-- STYLESHEETS -->
<link rel="stylesheet" href="assets/plugins/morris/morris.css">
<link rel="stylesheet" href="assets/css/bootstrap.css" type="text/css" />
<link rel="stylesheet" href="assets/css/core.css" type="text/css" />
<link rel="stylesheet" href="assets/css/components.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/all.css" type="text/css"/>
<link rel="stylesheet" href="assets/css/pages.css" type="text/css" />
<link rel="stylesheet" href="assets/css/responsive.css" type="text/css" />

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
<![endif]-->

<!-- MODERNIZER -->
<script src="assets/js/modernizr.min.js"></script>

</head>

<body class="loreg-page close-it rtl-page">
<!-- Begin page -->
<div id="logreg-wrapper" class="login-style2 text-center"> 
	<div class="container">
		<a href="login.php#"><img src="assets/images/logo-2.png" class="img-responsive center-block" alt=""/></a>
        <p class="lead">مؤسسة ابي الزهراء الخيرية</p>
        <form name="frm-login" id="frm-login" method="post">
			<div class="form-group">
				<label>اسم المستخدم</label>
				<input name="Username" type="text" placeholder="ادخل اسم المستخدم" autocomplete="false" class="form-control" >
			</div>
     
			<div class="form-group">
				<label>كلمه المرور</label>
                <input name="Password" type="password" placeholder="ادخل كلمه المرور" autocomplete="false"
                       class="form-control">
			</div>

            <button id="btn-login" style="margin-right: 0px;" type="submit" class="btn btn-success btn-md">دخول</button>
		</form>
        <div>
            <?php

            if (isset($_SESSION['ERROR'])) {
                include('Includes/alerterror.php');
            }
            ?>
        </div>


    </div>
</div>
<!-- END wrapper --> 

<!-- Page Loader --> 
<div class="page-loader">
	<a href="login.php#"><img src="assets/images/logo-2.png" class="img-responsive center-block" alt=""/></a>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> 
<script src="assets/js/jquery.app.js"></script>
<script src="assets/js/cb-chart.js"></script>


<script>


        $("#btn-login").click(function () {

            var data = $("#frm-login").serialize();
            $.ajax({
                type: 'POST',
                url: 'test.php',
                data: data,
                beforeSend: function () {
                    $("#error").fadeOut();
                    $("#btn-login").html('<span class="glyphicon glyphicon-transfer"></span> &nbsp; جاري تسجيل الدخول ...');

                },
                success: function (response) {

                    if ($.trim(response) === "1") {
                        setTimeout(' window.location.href = "dashboard.php"; ', 1200);
                        return true;
                    } else {

                        $("#error").fadeIn(1000, function () {
                            $("#error").html(response).show();
                        });

                        $("#btn-login").html('دخول');
                    }
                }
            });
            return false;

        });


</script>


</body>
</html>