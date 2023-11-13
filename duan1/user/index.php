<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
	<title>Winku Social Network Toolkit</title>
    <link rel="icon" href="images/fav.png" type="image/png" sizes="16x16"> 
    
    <link rel="stylesheet" href="./css/main.min.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/color.css">
    <link rel="stylesheet" href="./css/responsive.css">

</head>
<body>
<!--<div class="se-pre-con"></div>-->
<div class="theme-layout">
    <?php
    include './include/header.php';
    // include '../Winku-Social-Network-Corporate-Responsive-Template/include/header.php';
    // include '../Winku-Social-Network-Corporate-Responsive-Template/include/topbar.php';
    ?>		
	<section>
		<div class="gap gray-bg">
			<div class="container-fluid">
				<div class="row">
					<div class="col-lg-12">
						<div class="row" id="page-contents">
							<?php
                    include './include/sidebar.php';
                ?>
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
                              case "myacount":
                                include './view/myacount.php';
                                break;
                              case "logout":
                                unset($_SESSION['user']);
                                header("location: index.php");
                                break;
                              }
                              ?>
                <?php
                              include './include/listfen.php';
                              ?>
              </div>	
            </div>
          </div>
        </div>
      </div>	
    </section>
  </div>
    
    <script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="./js/main.min.js"></script>
    <script src="./js/script.js"></script>
    <script src="./js/map-init.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8c55_YHLvDHGACkQscgbGLtLRdxBDCfI"></script>
  
  </body>	
  
  </html>