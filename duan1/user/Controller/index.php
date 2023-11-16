<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16">

    <link rel="stylesheet" href="./view/css/main.min.css">
    <link rel="stylesheet" href="./view/css/style.css">
    <link rel="stylesheet" href="./view/css/color.css">
    <link rel="stylesheet" href="./view/css/responsive.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">


    <!-- ===== CSS ===== -->
    <link rel="stylesheet" href="./view/asset/css/login.css">

</head>

<body>
    <!--<div class="se-pre-con"></div>-->
    <div class="theme-layout">
        <?php
      $user = $_SESSION['user'] ?? "";
      if ($user){
        include './model/include/header.php';
      }else{
        $tl = "";
      }
    ?>
        <section>
            <div class="gap gray-bg">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="row" id="page-contents">
                                <?php
                      $user = $_SESSION['user'] ?? "";
                      if ($user){
                        include './model/include/sidebar.php';
                      }  
                ?>
                        <?php
                            include './model/login.php';
                            include './model/model.php';
                            $action = "home";
                            if (isset($_GET['act']))
                              $action = $_GET['act'];
                            if (!isset($_SESSION['user'])) {
                              $action = "login";
                            }
                            switch ($action) {
                              case "home":
                                include './view/home.php';
                                break;
                              case "register":
                                include './view/register.php';
                                break;
                              case "login":
                                include './view/login.php';
                                break;
                              case "myacount":
                                include './view/myacount.php';
                                break;
                              case "ib": 
                                include './View/chat.php';
                                break;  
                              case "logout":
                                unset($_SESSION['user']);
                                header("location: index.php");
                                break;
                              }
                              ?>
                                <?php
                                $user = $_SESSION['user'] ?? "";
                                if ($user){
                                  include './model/include/listfen.php';
                                }  
                              ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="./view/js/main.min.js"></script>
    <script src="./view/js/script.js"></script>
    <script src="./view/js/map-init.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
 
    <!-- <script src="./asset/js/login.js"></script>  -->

</body>

</html>