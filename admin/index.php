<!DOCTYPE html>
<html lang="en">

<head>
    <?php include("komponen/head.php"); ?>
    <link rel="icon" type="image/png" href="../images/logo_minang2.png">

    <!-- Title Page-->
    <title>Login Administrator</title>
</head>

<?php include("../koneksi.php"); ?>

<body class="animsition">
    <div class="page-wrapper">

        <!-- HEADER DESKTOP-->
        <?php // include("komponen/menu.php"); 
        ?>

        <!-- HEADER MOBILE-->
        <?php // include("komponen/menu_mobile.php"); 
        ?>

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">



            <!-- STATISTIC-->
            <?php include("login.php"); ?>

            <!-- STATISTIC CHART-->
            <?php // include("komponen/chart.php");
            ?>

            <!-- COPYRIGHT-->
            <?php include("komponen/copyright.php"); ?>

        </div>

    </div>

    <?php include("komponen/script.php"); ?>

</body>

</html>
<!-- end document-->