<?php require_once('liaisons/_langues.php'); ?>
<?php 
define('ACCUEIL_ACTIVE', ''); 
define('SERVICES_ACTIVE', 'class="active"'); 
define('REFERENCES_ACTIVE', ''); 
define('CONTACT_ACTIVE', ''); 
?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="UTF-8">
		<title><?php echo SERVICESTITRE; ?></title>
		<meta name="description" content="<?php echo META_DESC_SERVICES; ?>">
        <meta name="keywords" content="<?php echo META_KEYWORDS; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no, target-densitydpi=device-dpi">
		<script type="text/javascript" src="liaisons/javascript/head.js"></script>
		<link rel="stylesheet" type="text/css" href="liaisons/styles/screen.css" media="screen">
		<link rel="stylesheet" type="text/css" href="liaisons/styles/print.css" media="print">
		<link href="liaisons/images/iconemediapex.png" rel="icon" type="image/png">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <link rel="alternate" hreflang="fr" href="https://mediapex.net" />
		<link rel="alternate" hreflang="en" href="https://mediapex.net/index.php?langue=en" />
        <script type="text/javascript" src="liaisons/javascript/head.js"></script>
        		 <link rel="stylesheet" type="text/css" href="css/theme-style.css">

        <link rel="stylesheet" type="text/css" href="liaisons/styles/screen.css" media="screen">
        <link rel="stylesheet" type="text/css" href="liaisons/styles/forms.css" media="screen">
        <link rel="stylesheet" type="text/css" href="liaisons/styles/print.css" media="print">
		<link href="liaisons/images/iconemediapex.png" rel="icon" type="image/png">
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        
		<!-- Stylesheet -->
		<link href="liaisons/particle-slider/style-particle.css" type="text/css" rel="stylesheet" />
		<!-- Google Maps -->
		<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
		<script src='https://www.google.com/recaptcha/api.js?hl=fr'></script>
       
		<link rel="stylesheet" type="text/css" href="liaisons/team/css/component.css" />
        <style media="screen">
		/*@media (min-width:760px){
		}
		@media (max-width:759px){
		}*/
		
		@media (min-width:1175px){
		.mxstudio {margin-right: 5% !important;width:27%; display:inline-block; vertical-align:text-top; color:#000000; font-size:14px;}
		.mxconseil {padding:5% 10% 520px 10%; /*text-align:center;*/}
		}
		@media (max-width:1174px) and (min-width:760px) {
		.mxstudio {width:100%; color:#000000; font-size:14px; margin-bottom:50px; margin-top:50px;}
		.mxconseil {padding:5% 10% 350px 10%; /*text-align:center;*/}
		}
		@media (max-width:759px){
		.mxstudio {width:100%; color:#000000; font-size:14px; margin-bottom:50px; margin-top:50px;}
		.mxconseil {padding:5% 10% 250px 10%; /*text-align:center;*/}
		.mxstudio{
			margin-right: 30px !important;
		}
		}
        </style>

		<script language="javascript">       
        i1 = new Image;
        i1.src = "liaisons/images/mediapex-digital.jpg";
        i2 = new Image;
        i2.src = "liaisons/images/mediapex-studio.jpg";
        i3 = new Image;
        i3.src = "liaisons/images/mediapex-conseil.jpg";
        i4 = new Image;
        i4.src = "liaisons/images/mediapex-events.jpg";
        i5 = new Image;
        i5.src = "liaisons/images/mediapex-edition.jpg";
        </script>
        
		<link rel="stylesheet" type="text/css" href="liaisons/popup/css/component.css" />
		<script src="liaisons/popup/js/modernizr.custom.js"></script>


	</head>
	<body>
		<div id="totop">
            <i class="ion-ios-arrow-thin-up"></i>
        </div>

        <!-- =======================
        =====     Header      ======
        =========================-->
        <header id="header" class="header-all-time-top-fixed">
            <div class="header-body" id="header-body-fixed">
                <div id="container-fixed">
                    <nav class="navbar navbar-default" role="navigation">

                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#multi-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                                <a href="accueil" class="header-logo"> <img src="img/logosurfondsombre.png" alt=""></a>
                        </div>
                        <div class="navbar-header-phone">
                            <p><i class="ion-android-phone-portrait"></i>+221 33 832 60 00 <br> <i class="ion-android-mail"></i>info@mediapex.net</p>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="multi-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right menu-item-6">
                                <li class="home"><span class="bg-icon"><i class="ion-ios-home-outline"></i></span><a href="accueil">Accueil</a></li>
                                <li class="about"><span class="bg-icon"><i class="ion-ios-person-outline"></i></span><a href="produits-services">Services</a></li>                                            
                                <li class="service"><span class="bg-icon"><i class="ion-ios-star-outline"></i></span><a href="references" class="current">Références</a></li>
                               
                               
                                <li class="contact"><span class="bg-icon"><i class="ion-ios-telephone-outline"></i></span><a href="contact">Contact</a></li>
                            </ul>

                        </div><!-- /.navbar-collapse -->
                    </nav>      
                </div>
            </div>
        </header>


	
			<header id="top">


				<article id="featured" style="padding-top:100px; padding-bottom:130px">
					<h2><?php echo NOSSERVICES; ?></h2>
					<p><?php echo NOSSERVICESTXT; ?></p>
				</article> 
				<figure><img src="liaisons/images/backgrounds/services.jpg" alt="Featured" width="1400" height="442"></figure>               
			</header>  
            		<div id="root">

            <!-- MEDIAPEX DIGITAL -->

            <div style="text-align:center; font-size:18px; font-weight:300; padding:5% 10% 500px 10%; background:url(liaisons/images/mediapex-digital.jpg) no-repeat center bottom; background-size:cover">
				<img src="liaisons/images/logo-mx-digital.png" width="300" alt=""/><br>
				<span style="font-size:25px; color:#999; line-height:35px"><?php echo NOSSERVICES_DIGITAL; ?></span><br>
				<span style="color:#000000"><?php echo NOSSERVICES_DIGITALTXT; ?></span><br><br><br>
            </div>
			<a href="mediapex-digital" class="voircatalogue"><?php echo NOSSERVICES_VOIRCATALOGUE; ?> <span style="font-weight:700">Médiapex digital</span> <img src="liaisons/images/icone-fleche.png" style="height:30px !important; top:-2px; position:relative"></a>
            
            <!-- MEDIAPEX STUDIO -->
          	<div style="text-align:center; font-size:18px; font-weight:400; padding:5% 10% 500px 10%; background:url(liaisons/images/mediapex-studio.jpg) no-repeat center bottom; background-size:cover">
				<img src="liaisons/images/logo-mx-studio.png" width="300" alt=""/><br>
				<span style="font-size:25px; color:#999; line-height:35px; font-weight:300"><?php echo NOSSERVICES_STUDIO; ?></span><br>
				<span style="color:#000000"><?php echo NOSSERVICES_STUDIOTXT; ?></span><br><br>

				<div class="mxstudio">
					<div style="width:300px; height:200px; background:url(liaisons/images/mediapex-studio-infographie.jpg) center; background-size:cover; margin:0 auto; border-radius:33px; /*border:#847561 thin solid*/"></div>
					<span style="font-size:30px; font-weight:400; color:#008E96; line-height:60px"><?php echo NOSSERVICES_STUDIO_INFOGRAPHIE; ?></span><br>
					<?php echo NOSSERVICES_STUDIO_INFOGRAPHIETXT; ?>
				</div>

				<div class="mxstudio">
					<div style="width:300px; height:200px; background:url(liaisons/images/mediapex-studio-photo.jpg) center; background-size:cover; margin:0 auto; border-radius:33px; /*border:#847561 thin solid*/"></div>
					<span style="font-size:30px; font-weight:400; color:#008E96; line-height:60px"><?php echo NOSSERVICES_STUDIO_PHOTOS; ?></span><br>
					<?php echo NOSSERVICES_STUDIO_PHOTOSTXT; ?>
				</div>

				<div class="mxstudio">
					<div style="width:300px; height:200px; background:url(liaisons/images/mediapex-studio-videos.jpg) center; background-size:cover; margin:0 auto; border-radius:33px; /*border:#847561 thin solid*/"></div>
					<span style="font-size:30px; font-weight:400; color:#008E96; line-height:60px"><?php echo NOSSERVICES_STUDIO_VIDEOS; ?></span><br>
					<?php echo NOSSERVICES_STUDIO_VIDEOSTXT; ?>
				</div>
            
            </div>





			<a href="mediapex-studio" class="voircatalogue"><?php echo NOSSERVICES_VOIRCATALOGUE; ?> <span style="font-weight:700">Médiapex studio</span> <img src="liaisons/images/icone-fleche.png" style="height:30px !important; top:-2px; position:relative"></a>

            
            <!-- MEDIAPEX CONSEIL -->
          	<div style="text-align:center; font-size:18px; font-weight:300; background:url(liaisons/images/mediapex-conseil.jpg) no-repeat bottom; background-size:100%" class="mxconseil">
				<img src="liaisons/images/logo-mx-conseil.png" width="300" alt=""/><br>
				<span style="font-size:25px; color:#999; line-height:35px"><?php echo NOSSERVICES_CONSEIL; ?></span><br>
				<span style="color:#000000"><?php echo NOSSERVICES_CONSEILTXT; ?></span>
            </div>
			<a href="mediapex-conseil" class="voircatalogue"><?php echo NOSSERVICES_VOIRCATALOGUE; ?> <span style="font-weight:700">Médiapex conseil</span> <img src="liaisons/images/icone-fleche.png" style="height:30px !important; top:-2px; position:relative"></a>
            
            <!-- MEDIAPEX EVENTS -->
          	<div style="text-align:center; font-size:18px; font-weight:300; padding:5% 10% 600px 10%; background:url(liaisons/images/mediapex-events.jpg) no-repeat center bottom; background-size:cover">
				<img src="liaisons/images/logo-mx-events.png" width="300" alt=""/><br>
				<span style="font-size:25px; color:#999; line-height:35px"><?php echo NOSSERVICES_EVENTS; ?></span><br>
				<span style="color:#000000"><?php echo NOSSERVICES_EVENTSTXT; ?></span>
            </div>
			<a href="mediapex-events" class="voircatalogue"><?php echo NOSSERVICES_VOIRCATALOGUE; ?> <span style="font-weight:700">Médiapex events</span> <img src="liaisons/images/icone-fleche.png" style="height:30px !important; top:-2px; position:relative"></a>
	            
            <!-- MEDIAPEX IMPRESSION -->
          	<div style="text-align:center; font-size:18px; font-weight:300; padding:5% 10% 500px 10%; background:url(liaisons/images/mediapex-edition.jpg) no-repeat center bottom; background-size:cover">
				<img src="liaisons/images/logo-mx-impressions.png" width="350" alt=""/><br>
				<span style="font-size:25px; color:#999; line-height:35px"><?php echo NOSSERVICES_IMPRESSION; ?></span><br>
				<span style="color:#000000"><?php echo NOSSERVICES_IMPRESSIONTXT; ?></span>
          	</div>
			<a href="mediapex-impressions" class="voircatalogue"><?php echo NOSSERVICES_VOIRCATALOGUE; ?> <span style="font-weight:700">Médiapex impressions</span> <img src="liaisons/images/icone-fleche.png" style="height:30px !important; top:-2px; position:relative"></a>
            
			
            <?php include("_pied.php"); ?>
               <script src="js-menu/vendor/jquery.js"></script>
        <script src="js-menu/vendor/jquery.easing.1.3.js"></script>
        <script src="js-menu/vendor/bootstrap.js"></script>

        <script src="js-menu/vendor/jquery.singlePageNav.min.js"></script>
        <script src="js-menu/vendor/wow.min.js"></script>
        <script src="js-menu/vendor/jquery.transit.js"></script>
        <script src="js-menu/vendor/jquery.jcountdown.js"></script>

        <script src="js-menu/vendor/owl.carousel.js"></script>
        <script src="js-menu/vendor/jquery.appear.js"></script>
        <script src="js-menu/vendor/jquery.magnific-popup.js"></script>
        <script src="js-menu/vendor/jquery.quicksand.js"></script>
        <script src="js-menu/vendor/contact.js"></script>
        <script src="js-menu/vendor/jquery.ticker.js"></script>
        <script src="js-menu/vendor/jquery.mb.YTPlayer.js"></script>
        <script src="js-menu/vendor/jquery.nicescroll.js"></script>

        <!-- jQuery REVOLUTION Slider  -->
        <script type="text/javascript" src="js-menu/vendor/jquery.themepunch.tools.min.js"></script>
        <script type="text/javascript" src="js-menu/vendor/jquery.themepunch.revolution.min.js"></script>

        <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  
                        (Load Extensions only on Local File Systems !  
                        The following part can be removed on Server for On Demand Loading) -->	
        <script type="text/javascript" src="js-menu/vendor/extensions/revolution.extension.actions.min.js"></script>
        <script type="text/javascript" src="js-menu/vendor/extensions/revolution.extension.carousel.min.js"></script>
        <script type="text/javascript" src="js-menu/vendor/extensions/revolution.extension.kenburn.min.js"></script>
        <script type="text/javascript" src="js-menu/vendor/extensions/revolution.extension.layeranimation.min.js"></script>
        <script type="text/javascript" src="js-menu/vendor/extensions/revolution.extension.migration.min.js"></script>
        <script type="text/javascript" src="js-menu/vendor/extensions/revolution.extension.navigation.min.js"></script>
        <script type="text/javascript" src="js-menu/vendor/extensions/revolution.extension.parallax.min.js"></script>
        <script type="text/javascript" src="js-menu/vendor/extensions/revolution.extension.slideanims.min.js"></script>
        <script type="text/javascript" src="js-menu/vendor/extensions/revolution.extension.video.min.js"></script>

        <script type="text/javascript" src="js-menu/vendor/jquery.scrollTo.js"></script>
        <!-- Custome Slider  -->
        <script src="js-menu/main.js"></script>
            
		</div>
            
	</body>
</html>