<?php require_once('liaisons/_langues.php'); ?>
<?php 
define('ACCUEIL_ACTIVE', ''); 
define('SERVICES_ACTIVE', ''); 
define('REFERENCES_ACTIVE', ''); 
define('CONTACT_ACTIVE', ''); 
?>
<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="UTF-8">
		<title><?php echo LOTTITRE; ?></title>
		<meta name="description" content="">
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
           <style>
			p{text-align: justify; color: black !important;  font-size:  1.5em !important;}
			h5{text-align: justify; color: white !important;line-height: 1.5 !important;}


		</style>
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
                            <p style="color: white !important;"><i class="ion-android-phone-portrait" ></i>+221 33 832 60 00 <br> <i class="ion-android-mail"></i>info@mediapex.net</p>
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
		<div id="root">
			<header id="top">


				<article id="featured" style="padding:70px 0">
					<h2><?php echo LOT_ENTETE; ?></h2>
					<h5><?php echo LOT_ENTETETXT; ?></h5>
				</article> 
				<figure><img src="liaisons/images/backgrounds/sortez-du-lot.jpg" alt="Featured" width="1400" height="442"></figure>               
			</header>  
			<section id="content" class="cols-a">
				<div class="news-a">
					<article style="border:none">
						<header>
							<h6><?php echo LOT_TITRE;?></h6>
						</header>
						<p><?php echo LOT_TXT; ?></p>
                        
					</article>
					
				</div>
				<?php include("_menu-apropos.php"); ?>
			</section>
			
            <?php include("_pied.php"); ?>
            
		</div>
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
		<script type="text/javascript">
			head.load('liaisons/javascript/jquery.js','liaisons/javascript/scripts.js','liaisons/javascript/mobile.js')
		</script>
	</body>
</html>