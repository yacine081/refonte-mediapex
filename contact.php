<?php if (!isset($_SESSION)) {session_start();} ?>
<?php require_once('liaisons/_langues.php'); ?>
<?php 
define('ACCUEIL_ACTIVE', ''); 
define('SERVICES_ACTIVE', ''); 
define('REFERENCES_ACTIVE', ''); 
define('CONTACT_ACTIVE', 'class="active"'); 
require '_recaptchalib.php';
$secret = '6Lec6PkSAAAAACBiFFNyHnBiQ23ujlMVtNKgKr5h';

if(isset($_POST['test']) && $_POST['test'] == 'contact' && !empty($_POST['nom']) && !empty($_POST['email']) && !empty($_POST['tel']) && !empty($_POST['message']))
{			
	$reCaptcha = new ReCaptcha($secret);
	if(isset($_POST["g-recaptcha-response"])) {
		$resp = $reCaptcha->verifyResponse(
			$_SERVER["REMOTE_ADDR"],
			$_POST["g-recaptcha-response"]
			);
		if ($resp != null && $resp->success) {

			$expediteur = '"' . strip_tags($_POST['nom']) . '"' . '<info@mediapex.net>';

			$to = 'mar.diagne@mediapex.net';//, yoro.diop@mediapex.net';

			$subject = 'Nouveau message du site';
			$message = strip_tags($_POST['message']) . "\n\n" . 'Envoye par : ' . strip_tags($_POST['nom']) . "\n" . 'Entreprise : ' . strip_tags($_POST['epse']) . "\n" . 'Email : ' . strip_tags($_POST['email']) . "\n" . 'Telephone : ' . strip_tags($_POST['tel']);
			$headers = 'From: ' . $expediteur . "\r\n" . 'Reply-To: ' . strip_tags($_POST['email']) . "\r\n" . 'X-Mailer: PHP/' . phpversion();

			mail($to, $subject, $message, $headers);
			
			// ENREGISTRER DANS LA BDD
			require_once('__bdd.php'); 
			$req = $bdd->prepare('INSERT INTO mediapex_messages (prenom_nom, adresse_email, telephone, entreprise, message) VALUES(:prenom_nom, :adresse_email, :telephone, :entreprise, :message)');
			$req->execute(array(
			'prenom_nom' => strip_tags($_POST['nom']),
			'adresse_email' => strip_tags($_POST['email']),
			'telephone' => strip_tags($_POST['tel']),
			'entreprise' => strip_tags($_POST['epse']),
			'message' => strip_tags($_POST['message'])
			));
			
			header('location:contact?envoi=ok');
		}
		else {
			$erreur = 'robot';
		}
	}
}

?>

<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
       <meta charset="UTF-8">
		<title><?php echo SERVICESTITRE; ?></title>
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
        		 <link rel="stylesheet" type="text/css" href="css-menu/theme-style.css">

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
		<script src='https://www.google.com/recaptcha/api.js?hl=<?php echo $lang; ?>'></script>
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
                                <a href="multi-index2.html" class="header-logo"> <img src="img/logosurfondsombre.png" alt=""></a>
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


				<article id="featured" style="padding-top:50px; padding-bottom:50px">
                    <h2><?php echo CONTACTEZNOUS; ?></h2>
                    <p><?php echo CONTACTEZNOUS2; ?></p>
				</article> 
				<figure><img src="liaisons/images/backgrounds/contact.jpg" alt="Featured" width="1400" height="442"></figure>               
			</header>  
					<div id="root" class="b">

			
			<article style="background:url(liaisons/images/pattern-vert.png)">
			
				<div id="content">

					<div class="colonne6" style="color: #fff; font-size: 2em; font-weight: 300; line-height: 1.3; margin-bottom:50px">

						<span style="font-size:1.2em; font-family:Montserrat; color:#1f2837"><?php echo SIEGE; ?></span><br>
						<?php echo ADRESSE; ?>
						<br>
						<br>
						<span style="font-size:1.2em; font-family:Montserrat; color:#1f2837"><?php echo FORMTEL; ?></span><br>
						+221 33 835 30 85<br>
						+221 77 515 16 56
						<br>
						<br>
						<span style="font-size:1.2em; font-family:Montserrat; color:#1f2837"><?php echo FORMEMAIL; ?></span><br>
						info@mediapex.net
						<br>
						<br>
						<span style="font-size:1.2em; font-family:Montserrat; color:#1f2837"><?php echo MAPS; ?></span><br>
						<a href="https://goo.gl/maps/1zkLJWALjx62" target="_blank" style="color:#fff">goo.gl/maps/1zkLJWALjx62</a>

					</div>

					<div class="colonne6 last">

					<?php if(isset($_GET['envoi']) && $_GET['envoi'] == 'ok'){ ?>

						<img src="liaisons/images/valide.png">
						<p style="color: #fff; font-size: 3em; font-weight: 500; margin:30px 0 0 0"><?php echo MESSAGEENVOYE; ?></p>
						<p style="color: #fff; font-size: 2em; font-weight: 300; margin:10px 0"><?php echo MESSAGEENVOYE2; ?></p>
						<p style="color: #fff; font-size: 2em; font-weight: 300; margin:10px 0"><?php echo MESSAGEENVOYE3; ?></p>

					<?php } else { ?>

						<?php if(isset($erreur) && $erreur == 'robot'){ ?>
							<p style="color: #1F2837; font-size: 2.2em; font-weight: 700; margin-bottom:10px "><?php echo MESSAGEERRONNE; ?></p>
							<p style="color: #fff; font-size: 1.75em; font-weight: 300; margin-bottom:30px"><?php echo MESSAGEERRONNE2; ?></p>
						<?php } ?>

						<form id="contact-form-2015" action="contact" method="post" class="form-b">
							<fieldset>
								<p>
									<span>
										<label for="nom"><?php echo FORMNOM; ?></label>
										<input type="text" id="nom" name="nom" value="<?php if(isset($_POST['nom'])) {echo strip_tags($_POST['nom']);} ?>" required>
									</span>
									<span>
										<label for="email"><?php echo FORMEMAIL; ?></label>
										<input type="email" id="email" name="email" value="<?php if(isset($_POST['email'])) {echo strip_tags($_POST['email']);} ?>" required>
									</span>
								</p>
								<p>
									<span>
										<label for="tel"><?php echo FORMTEL; ?></label>
										<input type="tel" id="tel"  name="tel" value="<?php if(isset($_POST['tel'])) {echo strip_tags($_POST['tel']);} ?>" required >
									</span>
									<span>
										<label for="epse"><?php echo FORMEPSE; ?></label>
										<input type="text" id="epse" name="epse" value="<?php if(isset($_POST['epse'])) {echo strip_tags($_POST['epse']);} ?>">
									</span>
								</p>
								<p>
									<label for="message"><?php echo FORMMESSAGE; ?></label>
									<textarea id="message" name="message" required><?php if(isset($_POST['message'])) {echo strip_tags($_POST['message']);} ?></textarea>
								</p>
								<p>
									<div class="g-recaptcha" data-sitekey="6Lec6PkSAAAAAL7XZlBmI6Tc8YTvT5Jv7urSKQTR"></div>
									<input type="hidden" name="test" value="contact">
								</p>

								<p style="text-align:left"><button type="submit" class="bouton-bleu"><?php echo FORMENVOYER; ?></button></p>
							</fieldset>
						</form>


					<?php } ?>

					</div>

				</div>

			</article>
                

		<?php include("_pied.php"); ?>

		</div>
		<script type="text/javascript">
			 head.load('liaisons/javascript/jquery.js', 'liaisons/javascript/twitterFetcher.js', 'liaisons/javascript/scripts.js', 'liaisons/javascript/mobile.js', 'liaisons/javascript/rewalk.js');
		</script>
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
	</body>
</html>