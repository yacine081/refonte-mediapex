<?php 

require_once('liaisons/_langues.php'); 

define('ACCUEIL_ACTIVE', ''); 
define('SERVICES_ACTIVE', ''); 
define('REFERENCES_ACTIVE', 'class="active"'); 
define('CONTACT_ACTIVE', ''); 

require_once('__bdd.php');

// Vérifier si le client existe réellement
$client = '';
if(!empty($_GET['client']))
{
	$client = strip_tags($_GET['client']);
}
else
{
	$client = '2sc2i';
}
$r1 = $bdd->prepare('SELECT * FROM mediapex_clients WHERE url = ? LIMIT 1');
$r1->execute(array(strip_tags($client)));
$r2 = $bdd->prepare('SELECT COUNT(url) AS nbr_url FROM mediapex_clients WHERE url = ? LIMIT 1');
$r2->execute(array(strip_tags($client)));
$reference = $r1->fetch();
$reference_nbr = $r2->fetch();
if($reference_nbr['nbr_url'] == 0)
{
	header('Location: references');
}

// Vérifier si la langue est bien définie en url
if(empty($_GET['langue']))
{
	header('location: references-client-'.strip_tags($_GET['client']).'-'.$lang);
}
elseif($_GET['langue'] != 'fr' && $_GET['langue'] != 'en')
{
	header('location: references-client-'.strip_tags($_GET['client']).'-'.$lang);
}

?>

<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="UTF-8">
		<title><?php echo NOSREFERENCES; ?> - <?php echo $reference['epse']; ?></title>
		<meta name="description" content="<?php echo $reference['presentation_'. $lang]; ?>">
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
        <link rel="stylesheet" type="text/css" href="liaisons/portfolio/css/normalize.css0" />
		<link rel="stylesheet" type="text/css" href="liaisons/portfolio/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="liaisons/portfolio/css/component.css" />
		<style type="text/css">
			#top{height: 100px; overflow: initial !important;}
			.nav-a ul li a {padding: 5px 20px 4px 24px;}
			.nav-a ul li a.active {border-left: #068c94 10px solid; padding-left: 14px;}
			.nav-a h3{background: #dadcde; font-size:20px; font-weight:300; padding:20px; text-transform: none;}
			.nav-a h3:hover{background: #1f2837; font-size:20px; font-weight:300; padding:20px; text-transform: none; color: #068c94;}
			
			.references{font-size: 15px;}
			.references h1{font-family: 'Open Sans', Arial, Helvetica, sans-serif; font-weight: 700;}
			table{width:100%; text-align:center;}
		<?php if(!empty($reference['partenaire']) && !empty($reference['site'])) {?>
			table td{width:25%; text-align:center; padding-top: 15px; padding-bottom: 15px; line-height: 18px; font-size: 15px;}
		<?php } elseif(!empty($reference['partenaire']) || !empty($reference['site'])){ ?>
			table td{width:33%; text-align:center; padding-top: 15px; padding-bottom: 15px; line-height: 18px; font-size: 15px;}
		<?php } else { ?>
			table td{width:50%; text-align:center; padding-top: 15px; padding-bottom: 15px; line-height: 18px; font-size: 15px;}
		<?php } ?>
			@media (min-width:801px){
			.ordinateur {display:inline-table;}
			.telephone {display:none;}
			.img-references-3{width: calc(25% - 10px); margin: 0 5px 10px 5px; display: inline-block; vertical-align: top;}
			.img-references-4{width: calc(33.33% - 10px); margin: 0 5px 10px 5px; display: inline-block; vertical-align: top;}
			.img-references-6{width: calc(50% - 10px); margin: 0 5px 10px 5px; display: inline-block; vertical-align: top;}
			.img-references-12{width: calc(100% - 10px); margin: 0 5px 10px 5px; display: inline-block; vertical-align: top;}
			}
			@media (max-width:800px){
			.ordinateur {display:none;}
			.telephone {display:inline-table;}
			.img-references-3{width: 100%; margin-bottom: 10px;}
			.img-references-4{width: 100%; margin-bottom: 10px;}
			.img-references-6{width: 100%; margin-bottom: 10px;}
			.img-references-12{width: 100%; margin-bottom: 10px;}
			}		
		</style>
	</head>
	<body><div id="totop">
            <i class="ion-ios-arrow-thin-up"></i>
        </div>

        <!-- =======================
        =====     Header      ======
        =========================-->
        <header id="header" class="header-all-time-top-fixed" style00="height:0px;" >
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
			<header id="top" style00="height:0px">


				<figure><img src="liaisons/images/backgrounds/references2.jpg" alt="Fond" width="1400" height="442"></figure>               
			</header>  
            
			<!-- REFERENCE -->
            
			<div class="svg-wrap">
				<svg width="64" height="64" viewBox="0 0 64 64">
					<path id="arrow-left-2" d="M26.667 10.667q1.104 0 1.885 0.781t0.781 1.885q0 1.125-0.792 1.896l-14.104 14.104h41.563q1.104 0 1.885 0.781t0.781 1.885-0.781 1.885-1.885 0.781h-41.563l14.104 14.104q0.792 0.771 0.792 1.896 0 1.104-0.781 1.885t-1.885 0.781q-1.125 0-1.896-0.771l-18.667-18.667q-0.771-0.813-0.771-1.896t0.771-1.896l18.667-18.667q0.792-0.771 1.896-0.771z" />
				</svg>
				<svg width="64" height="64" viewBox="0 0 64 64">
					<path id="arrow-right-2" d="M37.333 10.667q1.125 0 1.896 0.771l18.667 18.667q0.771 0.771 0.771 1.896t-0.771 1.896l-18.667 18.667q-0.771 0.771-1.896 0.771-1.146 0-1.906-0.76t-0.76-1.906q0-1.125 0.771-1.896l14.125-14.104h-41.563q-1.104 0-1.885-0.781t-0.781-1.885 0.781-1.885 1.885-0.781h41.563l-14.125-14.104q-0.771-0.771-0.771-1.896 0-1.146 0.76-1.906t1.906-0.76z" />
				</svg>
			</div>
			
			<div class="container" style="display:block">
			  <section class="color-3" style="padding:3% 10%">
			  <div style="font-family: 'Open Sans', Arial, Helvetica, sans-serif">
				<div>

					<div class="references">
					
						<br>
						<h1 style="color:#068c94; font-weight:700; font-family:Montserrat; font-size: 40px"><?php echo $reference['epse']; ?></h1>
						<div style="padding:0 10%"><?php echo $reference['presentation_'.$lang]; ?></div><br>
						<br>
						
						<table class="ordinateur">
							<tr>
								<td>
									<span style="color:#068c94; font-weight:700"><?php echo TRAVAUX_EFFECTUES; ?></span><br>
									<?php 
									$travaux = explode(' ', $reference['travaux'], -1);
									$liste_travaux = '';
									foreach($travaux AS $travail)
									{
										$req_prod = $bdd->prepare('SELECT * FROM mediapex_produits WHERE id = ? LIMIT 1');
										$req_prod->execute(array($travail));
										$prod = $req_prod->fetch();
										$liste_travaux .= $prod['produit_'.$lang].', '; 
									}
									echo substr($liste_travaux, 0, -2);
									?>
								</td>
								<td>
									<span style="color:#068c94; font-weight:700"><?php echo PAYS; ?></span><br>
									<?php echo $reference['pays']; ?>
								</td>
								<?php if(!empty($reference['partenaire'])) {?>
								<td>
									<span style="color:#068c94; font-weight:700"><?php echo PARTENARIAT; ?></span><br>
									<?php echo $reference['partenaire']; ?>
								</td>
								<?php } ?>
								<?php if(!empty($reference['site'])) {?>
								<td>
									<a href="http://<?php echo $reference['site']; ?>" target="_blank">
										<span style="background:#068c94; color:#FFF; padding:7px 15px; border-radius:7px; font-weight:700; display:block; text-transform:uppercase; font-size:13px; margin:0 auto; line-height:15px; max-width:200px"><?php echo VOIR_SITE; ?><br><span style="font-size:11px; font-weight:300"><?php echo PAR_MEDIAPEX; ?></span></span>
									</a>
								</td>
								<?php } ?>
							</tr>
						</table>
						
						<table class="telephone">
							<tr>
								<td>
									<span style="color:#068c94; font-weight:700"><?php echo TRAVAUX_EFFECTUES; ?></span><br>
									<?php 
									$travaux = explode(' ', $reference['travaux'], -1);
									foreach($travaux AS $travail)
									{
										$req_prod = $bdd->prepare('SELECT * FROM mediapex_produits WHERE id = ? LIMIT 1');
										$req_prod->execute(array($travail));
										$prod = $req_prod->fetch();
										echo $prod['produit_'.$lang].'<br>'; 
									}
									?>
								</td>
							</tr>
							<tr>
								<td>
									<span style="color:#068c94; font-weight:700"><?php echo PAYS; ?></span><br>
									<?php echo $reference['pays']; ?>
								</td>
							</tr>
								<?php if(!empty($reference['partenaire'])) {?>
							<tr>
								<td>
									<span style="color:#068c94; font-weight:700"><?php echo PARTENARIAT; ?></span><br>
									<?php echo $reference['partenaire']; ?>
								</td>
							</tr>
								<?php } ?>
								<?php if(!empty($reference['site'])) {?>
							<tr>
								<td>
									<a href="http://<?php echo $reference['site']; ?>" target="_blank">
										<span style="background:#068c94; color:#FFF; padding:7px 15px; border-radius:7px; font-weight:700; display:block; text-transform:uppercase; font-size:13px; margin:0 auto; line-height:15px; max-width:200px"><?php echo VOIR_SITE; ?><br><span style="font-size:11px; font-weight:300"><?php echo PAR_MEDIAPEX; ?></span></span>
									</a>
								</td>
							</tr>
								<?php } ?>
						</table>
						<br>
						<br>

					</div>
					
					<div style="font-size:0">
						
						<?php 
						$req_images = $bdd->prepare('SELECT * FROM mediapex_references WHERE client = ? ORDER BY position DESC, id DESC');
						$req_images->execute(array($reference['id']));
						foreach($req_images AS $images){
						?>

						<img src="liaisons/images/clients/references/<?php echo $images['nom']; ?>" class="<?php echo $images['taille']; ?>">
						
						<?php } ?>
					
					</div>
					
					<br>
					<br>
					<br>
					<br>
					<br>
					
					
				</div>
						  </div>
						  
						  		<!-- suivant / précédent -->
						  		
								<nav class="nav-growpop fleches">

								<?php 
								$req_precedent = $bdd->prepare('SELECT * FROM mediapex_clients WHERE epse < ? ORDER BY epse DESC LIMIT 1');
								$req_precedent->execute(array(strip_tags($reference['epse'])));
								while ($client_prec = $req_precedent->fetch())	
								{ ?>
									<a class="prev" href="references-client-<?php echo $client_prec['url'].'-'.$lang; ?>">
										<span class="icon-wrap"><svg class="icon" width="24" height="24" viewBox="0 0 64 64"><use xlink:href="#arrow-left-2"></use></svg></span>
										<div>
											<span><?php echo REF_PRECEDENTE; ?></span>
											<h3><?php echo $client_prec['epse']; ?></h3>
											<p>
												<?php 
												$travaux = explode(' ', $client_prec['travaux'], -1);
												$liste_travaux = '';
												foreach($travaux AS $travail)
												{
													$req_prod = $bdd->prepare('SELECT * FROM mediapex_produits WHERE id = ? LIMIT 1');
													$req_prod->execute(array($travail));
													$prod = $req_prod->fetch();
													$liste_travaux .= $prod['produit_'.$lang].', '; 
												}
												echo substr($liste_travaux, 0, -2);
												?>
											</p>
											<img src="liaisons/images/clients/icones/<?php echo $client_prec['url']; ?>.png" alt="logo"/>
										</div>
									</a>
								<?php 
								}
								$req_precedent->closeCursor(); 
								?>

								<?php 
								$req_suivant = $bdd->prepare('SELECT * FROM mediapex_clients WHERE epse > ? ORDER BY epse ASC LIMIT 1');
								$req_suivant->execute(array(strip_tags($reference['epse'])));
								while ($client_suiv = $req_suivant->fetch())	
								{ ?>
									<a class="next" href="references-client-<?php echo $client_suiv['url'].'-'.$lang; ?>">
										<span class="icon-wrap"><svg class="icon" width="24" height="24" viewBox="0 0 64 64"><use xlink:href="#arrow-right-2"></use></svg></span>
										<div>
											<span><?php echo REF_SUIVANTE; ?></span>
											<h3><?php echo $client_suiv['epse']; ?></h3>
											<p>
												<?php 
												$travaux = explode(' ', $client_suiv['travaux'], -1);
												$liste_travaux = '';
												foreach($travaux AS $travail)
												{
													$req_prod = $bdd->prepare('SELECT * FROM mediapex_produits WHERE id = ? LIMIT 1');
													$req_prod->execute(array($travail));
													$prod = $req_prod->fetch();
													$liste_travaux .= $prod['produit_'.$lang].', '; 
												}
												echo substr($liste_travaux, 0, -2);
												?>
											</p>
											<img src="liaisons/images/clients/icones/<?php echo $client_suiv['url']; ?>.png" alt="logo"/>
										</div>
									</a>
								<?php 
								}
								$req_suivant->closeCursor(); 
								?>
								</nav>
								
								
							</section>
						</div><!-- /container -->

			<?php 
			
			$r1->closeCursor(); 
			?>
            
            <!-- FIN REFERENCE -->
			
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