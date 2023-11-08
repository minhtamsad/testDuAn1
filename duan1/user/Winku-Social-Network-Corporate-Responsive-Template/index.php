<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="./css/main.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./Winku-Social-Network-Corporate-Responsive-Template/css/responsive.css">
    <link rel="stylesheet" href="./css/strip.css">
</head>
<body>
<?php

$action = "home";
if (isset($_GET['act']))
  $action = $_GET['act'];
// if (!isset($_SESSION['user'])) {
//   $action = "login";
// }
switch ($action) {
  case "home":
    include './view/home.php';
    break;
  case "login":
    include './view/landing.php';
    break;
  case "logout":
    unset($_SESSION['admin']);
    header("location: index.php");
    break;
}
?>


<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./js/main.min.js"></script>
<script src="./js/script.js"></script>
<script src="./js/map-init.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
>>>>>>> 45c53e205b89a77ced1759f6b16e96c151c32817
</body>
</html>