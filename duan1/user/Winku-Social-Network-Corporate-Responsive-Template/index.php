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
  <link rel="stylesheet" href="./css/responsive.css">

</head>

<body>
  <div class="theme-layout">
<!-- 
    <div class="responsive-header">
  
    </div>
 

    <div class="fixed-sidebar right">
      
    </div>

    <div class="fixed-sidebar left">
    </div> -->
    <section>
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
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/landing.php';
          break;
        case "myacount":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/myacount.php';
          break;
        case "friends":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/friends.php';
          break;
        case "fav":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/fav-page.php';
          break;
        case "mess":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/messages.php';
          break;
        case "notifications":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/notifications.php';
          break;
        case "people":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/people-nearby.php';
          break;
        case "insights":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/insights.php';
          break;
        case "inbox":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/inbox.php';
          break;
        case "gr":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/timeline-groups.php';
          break;
        case "pages":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/timeline-pages.php';
          break;
        case "photos":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/timeline-photos.php';
          break;
        case "videos":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/timeline-videos.php';
          break;
        case "line":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/time-line.php';
          break;
        case "like":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/page-likers.php';
          break;
        case "about":
          include '../Winku-Social-Network-Corporate-Responsive-Template/view/about.php';
          break;
        case "logout":
          unset($_SESSION['admin']);
          header("location: index.php");
          break;
      }
      ?>
    </section>
  </div>
  <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
	<script src="../Winku-Social-Network-Corporate-Responsive-Template/js/main.min.js"></script>
	<script src="../Winku-Social-Network-Corporate-Responsive-Template/js/script.js"></script>
	<script src="../Winku-Social-Network-Corporate-Responsive-Template/js/map-init.js"></script>
	<script src="../Winku-Social-Network-Corporate-Responsive-Template/js/echarts.min.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>

</body>

</html>