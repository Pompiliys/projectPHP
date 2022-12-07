<!DOCTYPE html>
<html lang="en" class="no-js">
    <!-- BEGIN HEAD -->
    <head>
        <meta charset="utf-8"/>
        <title>Can you</title>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta content="width=device-width, initial-scale=1" name="viewport"/>
        <meta content="" name="description"/>
        <meta content="" name="author"/>

        <!-- GLOBAL MANDATORY STYLES -->
        <link href="http://fonts.googleapis.com/css?family=Hind:300,400,500,600,700" rel="stylesheet" type="text/css">
        <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>

        <!-- PAGE LEVEL PLUGIN STYLES -->
        <link href="css/animate.css" rel="stylesheet">
        <link href="vendor/swiper/css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css"/>

        <!-- THEME STYLES -->
        <link href="css/layout.min.css" rel="stylesheet" type="text/css"/>

        <!-- Favicon -->
        <link rel="shortcut icon" href="favicon.ico"/>
    </head>
    <!-- END HEAD -->

    <!-- BODY -->
    <body id="body" data-spy="scroll" data-target=".header">

        <!--========== HEADER ==========-->
        <?php include('header.php') ?>
        <!--========== END HEADER ==========-->

        <!--========== SLIDER ==========-->
		<?php include('slider.php') ?>
        <!--========== SLIDER ==========-->

        <!--========== PAGE LAYOUT ==========-->
        <!-- Service -->
        <div id="service">
            <div class="row text-center margin-b-40" data-auto-height="true">
                <form action="php/send.php" method="POST">
				<div class="content-md container">
					<p><FONT COLOR=black><input placeholder="Your name" type="text" name="fio" required>
					<input placeholder="e-mail" type="email" name="email"></p>
					<div></div>
					<textarea name="message" cols="50" rows="10" placeholder="Write your message here..."></textarea>
					<div></div>
					<input class="btn-theme btn-theme-sm btn-default-bg text-uppercase" type="submit" value="Send">
				</form> 
				</div>
				
				<?php
					$fullUrl = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
					
					if(strpos($fullUrl, "mail=notworking") == true){
						echo '<script type="text/javascript"> alert("Our mail is not working")</script>';
					}
				?>
            </div>
        </div>
        <!-- End Service -->
            
        <!--========== END PAGE LAYOUT ==========-->

        <!--========== FOOTER ==========-->
		<?php include('footer.php') ?>
        <!--========== END FOOTER ==========-->

        <!-- Back To Top -->
        <a href="javascript:void(0);" class="js-back-to-top back-to-top">Top</a>

        <!-- JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->
        <!-- CORE PLUGINS -->
        <script src="vendor/jquery.min.js" type="text/javascript"></script>
        <script src="vendor/jquery-migrate.min.js" type="text/javascript"></script>
        <script src="vendor/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>

        <!-- PAGE LEVEL PLUGINS -->
        <script src="vendor/jquery.easing.js" type="text/javascript"></script>
        <script src="vendor/jquery.back-to-top.js" type="text/javascript"></script>
        <script src="vendor/jquery.smooth-scroll.js" type="text/javascript"></script>
        <script src="vendor/jquery.wow.min.js" type="text/javascript"></script>
        <script src="vendor/swiper/js/swiper.jquery.min.js" type="text/javascript"></script>
        <script src="vendor/magnific-popup/jquery.magnific-popup.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/jquery.masonry.pkgd.min.js" type="text/javascript"></script>
        <script src="vendor/masonry/imagesloaded.pkgd.min.js" type="text/javascript"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsXUGTFS09pLVdsYEE9YrO2y4IAncAO2U&amp;callback=initMap" async defer></script>

        <!-- PAGE LEVEL SCRIPTS -->
        <script src="js/layout.min.js" type="text/javascript"></script>
        <script src="js/components/wow.min.js" type="text/javascript"></script>
        <script src="js/components/swiper.min.js" type="text/javascript"></script>
        <script src="js/components/maginific-popup.min.js" type="text/javascript"></script>
        <script src="js/components/masonry.min.js" type="text/javascript"></script>
        <script src="js/components/gmap.min.js" type="text/javascript"></script>

    </body>
    <!-- END BODY -->
</html>