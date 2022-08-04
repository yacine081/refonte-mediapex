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
		<title><?php echo MEDIAPEX_IMPRESSIONS; ?></title>
		<meta name="description" content="<?php echo MEDIAPEX_IMPRESSIONS_META_DESC; ?>">
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
					<h2><?php echo MEDIAPEX_IMPRESSIONS; ?></h2>
					<p style="width:75%"><?php echo MEDIAPEX_IMPRESSIONS_SOUS_TITRE; ?></p>
				</article> 
				<figure><img src="liaisons/images/backgrounds/mediapex-impressions.jpg" alt="Featured" width="1400" height="442"></figure>               
			</header>  
			<section id="content" class="cols-a">
				<div class="news-a" style="width:100%; text-align:center">
				
				<div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="cartes-de-visite">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/carte-de-visite-petit.jpg) right; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CARTES_DE_VISITE; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="flyers">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/flyers-petit.jpg); background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_FLYERS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="depliants">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/depliants-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_DEPLIANTS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="catalogues-magazines">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/catalogues-magazines-petit.jpg); background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CATALOGUES_MAGAZINES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="affiches-posters">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/affiches-posters-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_AFFICHES_POSTERS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="panneaux-pancartes">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/panneaux-pancartes-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_PANNEAUX; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="baches-banderoles">
						<div style="padding:5%">
							<img src="liaisons/images/produits/bache-banderole-petit.jpg" width="80%" style="padding:10%; background:#fff; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_BACHES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="cartes-de-voeux">
						<div style="padding:5%">
							<img src="liaisons/images/produits/carte-de-voeux-petit.jpg" width="80%" style="padding:10%; background:#fff; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CARTES_VOEUX; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="cartons-information">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/cartons-information-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CARTONS_INFORMATION; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="chemises-porte-documents">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/chemise-porte-document-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CHEMISES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="cheques-cadeaux">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/cheques-cadeaux-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CHEQUES_CADEAUX; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="cartes-de-fidelite">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/carte-de-fidelite-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CARTES_FIDELITE; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="rollups-stands">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/roll-ups-stands-petit.jpg) right; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_ROLL_UPS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="cartons-invitation-faire-part">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/carton-invitation-faire-part-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CARTONS_INVITATION; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="social-network-cards">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/social-network-card-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_SNC; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="papier-a-en-tete">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/en-tete-lettre-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_EN_TETES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="enveloppes">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/enveloppes-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_ENVELOPPES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="stylos">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/stylos-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_STYLOS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="calendriers-muraux">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/calendrier-mural-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CALENDRIERS_MURAUX; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="calendriers-chevalets">
						<div style="padding:5%">
							<img src="liaisons/images/produits/calendrier-chevalet-petit.jpg" width="80%" style="padding:10%; background:#fff; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CALENDRIERS_CHEVALETS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="tasses-mugs">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/tasse-mug-petit.jpg) right; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_TASSES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="portes-cles-usb-tapis-souris">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/porte-cles-usb-tapis-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_PORTES_CLES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="blocs-notes">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/blocs-notes-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_BLOCS_NOTES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="agendas">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/agendas-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_AGENDAS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="casquettes">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/casquettes-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CASQUETTES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="tshirts-polos">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/tshirt-polo-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_TSHIRTS_POLO; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="sacs-en-papier-plastique">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/sac-en-papier-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_SACS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="coques-telephone">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/coques-telephone-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_COQUES_TELEPHONE; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="presentoirs-produits-flyers">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/presentoir-de-produit-prospectus-petit.jpg) right; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_PRESENTOIRS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="sets-de-table">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/sets-de-table-petit.jpg); background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_SETS_TABLE; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="cadeaux-photos">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/cadeaux-photos-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_CADEAUX_PHOTOS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="etiquettes-autocollants">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/etiquettes-autocollants-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_ETIQUETTES; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="plaques-aimantees">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/aimants-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_AIMANTS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="rapports-dactivite">
						<div style="padding:5%">
							<img src="liaisons/images/produits/rapport-dactivite-petit.jpg" width="80%" style="padding:10%; background:#fff; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_RAPPORT_ACTIVITE; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="formulaires-autocopiants">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/formulaires-autocopiants-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_FORMULAIRES_AUTOCIPIANTS; ?>
						</div>
						</a>
					</div>
				</div><div class="colonne4">
					<div style="padding:0 2%; margin-bottom:5%">
						<a class="voirproduit" href="signaletiques">
						<div style="padding:5%">
							<img src="liaisons/images/produits/neutre.png" width="80%" style="padding:10%; background:url(liaisons/images/produits/signaletiques-petit.jpg) center; background-size:cover; margin-bottom:15px"><?php echo MEDIAPEX_IMPRESSIONS_SIGNALETIQUES; ?>
						</div>
						</a>
					</div>
				</div>
									
				</div>
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
        <!-- Custome Slider  -->
        <script src="js-menu/main.js"></script>
		<script type="text/javascript">
			head.load('liaisons/javascript/jquery.js','liaisons/javascript/scripts.js','liaisons/javascript/mobile.js')
		</script>
	</body>
</html>