<?php
header("refresh:3600;url=login.php");
session_cache_limiter('private_no_expire');
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SCRP Admin Panel</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
   
    <link href="css/simple-sidebar.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    

</head>

<body>

    <div id="wrapper">

        <!-- Sidebar -->
        <div id="sidebar-wrapper">
            <ul class="sidebar-nav">
                <li class="sidebar-brand">
                    <a href="#">
                        SCRP Admin Panel
                    </a>
                </li>
                <?php
                //session_start();
                if(!isset($_SESSION['user_type'])){
                    require_once('navs/guest_nav.php');
                }else{
                    switch($_SESSION['user_type']){
                        case "a":
                            require_once('navs/admin_nav.php');
                            break;
                        case "m":
                            require_once('navs/mgmt_nav.php');
                            break; 
                    }
                }
                ?>
            </ul>
        </div>
        <!-- /#sidebar-wrapper -->

        <!-- Page Content -->
        <div id="page-content-wrapper"><a href="#menu-toggle" class="btn btn-secondary" id="menu-toggle">Menu</a>
