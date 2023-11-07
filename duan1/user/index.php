<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="./Winku-Social-Network-Corporate-Responsive-Template/css/main.min.css">
    <link rel="stylesheet" href="./Winku-Social-Network-Corporate-Responsive-Template/css/style.css">
    <link rel="stylesheet" href="./Winku-Social-Network-Corporate-Responsive-Template/css/color.css">
    <link rel="stylesheet" href="../css/responsive.css">
</head>
<body>
<?php

$action = "home";
if (isset($_GET['act']))
  $action = $_GET['act'];
if (!isset($_SESSION['user'])) {
  $action = "login";
}
switch ($action) {
  case "home":
    include './Winku-Social-Network-Corporate-Responsive-Template/view/home.php';
    break;
  case "login":
    include './Winku-Social-Network-Corporate-Responsive-Template/view/landing.php';
    break;
  case "logout":
    unset($_SESSION['admin']);
    header("location: index.php");
    break;
}
?>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./Winku-Social-Network-Corporate-Responsive-Template/js/main.min.js"></script>
<script src="./Winku-Social-Network-Corporate-Responsive-Template/js/script.js"></script>
<script src="./Winku-Social-Network-Corporate-Responsive-Template/js/map-init.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
</body>
</html>