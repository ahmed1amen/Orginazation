<?php
session_start();
if (isset($_SESSION['Username'])) {
    header('Location: Employee.php');

}
include 'config.php';


if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $employee_email = $_POST['employee_email'];
    $password = $_POST['Passowrd'];

    // Check if user in DB
    $stmt = $con->prepare("SELECT employee_email ,employee_password FROM employee_data WHERE employee_email = ? AND employee_password = ?");

    $stmt->execute(array($employee_email, $password));
    $count = $stmt->rowCount();
    //Check If User Correct

    if ($count > 0) {
        //echo  "Welcome :". $employee_email;
        $_SESSION['Username'] = $employee_email;   // Register Session Name
        $_SESSION['UserType'] = 'employee';   // Register UserType
        //يوزرتايب علشان لما يعمل logout يقدر يفرق هيحوله علي لوجن الادمن ولا لوجن الموظفين
        header('Location: Employee.php');
        exit();
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

<body class="loreg-page close-it rtl-page">
<!-- Begin page -->
<div id="logreg-wrapper" class="login-style2 text-center">
    <div class="container">
        <a href="login.php#"><img src="assets/images/logo-2.png" class="img-responsive center-block" alt=""/></a>

        <p class="lead">مؤسسة ابي الزهراء الخيرية</p>

        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post"
        >
            <div class="form-group">
                <label>اسم المستخدم</label>
                <input name="employee_email" type="text" placeholder="ادخل اسم المستخدم" autocomplete="false"
                       class="form-control" required>
            </div>

            <div class="form-group">
                <label>كلمه المرور</label>
                <input name="Passowrd" type="password" placeholder="ادخل كلمه المرور" autocomplete="false"
                       class="form-control" required>
            </div>

            <button style="margin-right: 0px;" type="submit" class="btn btn-success btn-md">دخول</button>
        </form>

        <p class="copy">&copy; 2019 Eng.Ahmed <span>Amen</span></p>
    </div>
</div>
<!-- END wrapper -->

<!-- Page Loader -->
<div class="page-loader">
    <a href="login.php#"><img src="assets/images/logo-2.png" class="img-responsive center-block" alt=""/></a>
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
<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script src="assets/js/jquery.app.js"></script>
<script src="assets/js/cb-chart.js"></script>

</body>
</html>