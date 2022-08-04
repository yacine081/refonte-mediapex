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
		<title><?php echo SITEMAP; ?> - Médiapex</title>
		<meta name="description" content="<?php echo SITEMAP_META_DESC; ?>">
        <meta name="keywords" content="<?php echo META_KEYWORDS; ?>">
		<meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no, target-densitydpi=device-dpi">
		<script type="text/javascript" src="liaisons/javascript/head.js"></script>
		<link rel="stylesheet" type="text/css" href="liaisons/styles/screen.css" media="screen">
		<link rel="stylesheet" type="text/css" href="liaisons/styles/print.css" media="print">
		<link href="liaisons/images/iconemediapex.png" rel="icon" type="image/png">
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        <style>
			#top{padding:36px 0 0 0; height: 100px; overflow: initial !important;}
			.nav-a ul li a {padding: 5px 20px 4px 24px;}
			.nav-a ul li a.active {border-left: #068c94 10px solid; padding-left: 14px;}
			.nav-a h3{background: #dadcde; font-size:20px; font-weight:300; padding:20px; text-transform: none;}
			.nav-a h3:hover{background: #1f2837; font-size:20px; font-weight:300; padding:20px; text-transform: none; color: #068c94;}
			td{font-size: 16px; padding: 10px 15px;}
			ul{margin-bottom: 0;}
			ul li a{color:#687177;}
			ul li a:hover{color:#282828;}
			.pages{font-size: 25px; font-weight: 100;}
		</style>
	</head>
	<body>
		<div id="root">
			<header id="top">

			<?php require_once("_menu.php"); ?> 

			</header> 
			<div class="voircatalogue" style="font-size:30px; font-weight:300; background:#068c94"><?php echo SITEMAP; ?></div> 
			<section id="content" class="cols-a">
			
				<div class="news-a" style="width:100%">
					<table>
						<thead style="background:#eceded; color:#282828">
							<tr>
								<td style="width:50%; border-right:#fff thin solid">Français</td>
								<td>English</td>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td>
									<a href="accueil?langue=fr" class="pages">Accueil</a>
									<ul style="margin-top:10px">
										<li><a href="agence-de-communication-globale?langue=fr">Agence de communication globale</a></li>
										<li><a href="notre-approche-design-thinking?langue=fr">Notre approche design thinking</a></li>
										<li><a href="nous-donnons-des-ailes-a-votre-entreprise?langue=fr">Nous donnons des ailes à votre entreprise</a></li>
										<li><a href="sortez-du-lot?langue=fr">Sortez du lot</a></li>
									</ul>
								</td>
								<td>
									<a href="accueil?langue=en" class="pages">Home</a>
									<ul style="margin-top:10px">
										<li><a href="agence-de-communication-globale?langue=en">Global communication agency</a></li>
										<li><a href="notre-approche-design-thinking?langue=en">Our Design Thinking approach</a></li>
										<li><a href="nous-donnons-des-ailes-a-votre-entreprise?langue=en">We give wings to your company</a></li>
										<li><a href="sortez-du-lot?langue=en">Get away from it all!</a></li>
									</ul>
								</td>
							</tr>
							<tr>
								<td>
									<a href="produits-services?langue=fr" class="pages">Nos produits & services</a>
									<ul style="margin-top:10px">
										<li><a href="mediapex-digital"><b>Médiapex Digital</b></a>
											<ul>
												<li><a href="site-internet?langue=fr">Site internet</a></li>
												<li><a href="community-management?langue=fr">Community management</a></li>
												<li><a href="application-web?langue=fr">Application web</a></li>
												<li><a href="application-mobile?langue=fr">Application mobile</a></li>
											</ul>
										</li>
										<li><a href="mediapex-studio"><b>Médiapex Studio</b></a>
											<ul>
												<li><a href="reportage-photo?langue=fr">Reportage photo</a></li>
												<li><a href="reportage-video?langue=fr">Reportage vidéo</a></li>
												<li><a href="logotype?langue=fr">Logotype</a></li>
												<li><a href="charte-graphique?langue=fr">Charte graphique</a></li>
												<li><a href="packaging?langue=fr">Packaging</a></li>
												<li><a href="design-produit?langue=fr">Design produit</a></li>
											</ul>
										</li>
										<li><a href="mediapex-conseil"><b>Médiapex Conseil</b></a>
											<ul>
												<li><a href="conseil-marketing?langue=fr">Conseil marketing</a></li>
												<li><a href="audit-image?langue=fr">Audit d'image</a></li>
												<li><a href="relation-presse?langue=fr">Relation presse</a></li>
											</ul>
										</li>
										<li><a href="mediapex-events"><b>Médiapex Events</b></a>
											<ul>
												<li><a href="lancement-produit-service?langue=fr">Lancement de produit/service</a></li>
												<li><a href="seminaire?langue=fr">Séminaires</a></li>
												<li><a href="soiree-gala?langue=fr">Soirées de gala</a></li>
												<li><a href="tournee-promotionnelle?langue=fr">Tournée promotionnelle</a></li>
											</ul>
										</li>
										<li><a href="mediapex-impressions"><b>Médiapex Impressions</b></a>
											<ul>
												<li><a href="cartes-de-visite?langue=fr">Cartes de visite</a></li>
												<li><a href="flyers?langue=fr">Flyers</a></li>
												<li><a href="depliants?langue=fr">Dépliants</a></li>
												<li><a href="catalogues-magazines?langue=fr">Catalogues & magazines</a></li>
												<li><a href="affiches-posters?langue=fr">Affiches & posters</a></li>
												<li><a href="panneaux-pancartes?langue=fr">Panneaux & pancartes</a></li>
												<li><a href="baches-banderoles?langue=fr">Bâches & banderoles</a></li>
												<li><a href="cartes-de-voeux?langue=fr">Cartes de voeux</a></li>
												<li><a href="cartons-information?langue=fr">Cartons d'information</a></li>
												<li><a href="chemises-porte-documents?langue=fr">Chemises porte-documents</a></li>
												<li><a href="cheques-cadeaux?langue=fr">Chèques-cadeaux</a></li>
												<li><a href="cartes-de-fidelite?langue=fr">Cartes de fidélité</a></li>
												<li><a href="rollups-stands?langue=fr">Roll-ups & stands</a></li>
												<li><a href="cartons-invitation-faire-part?langue=fr">Cartons d'invitation & faire-part</a></li>
												<li><a href="social-network-cards?langue=fr">Social Network Cards</a></li>
												<li><a href="papier-a-en-tete?langue=fr">Papier à en-tête</a></li>
												<li><a href="enveloppes?langue=fr">Enveloppes</a></li>
												<li><a href="stylos?langue=fr">Stylos</a></li>
												<li><a href="calendriers-muraux?langue=fr">Calendriers muraux</a></li>
												<li><a href="calendriers-chevalets?langue=fr">Calendriers Chevalets</a></li>
												<li><a href="tasses-mugs?langue=fr">Tasses/mugs</a></li>
												<li><a href="portes-cles-usb-tapis-souris?langue=fr">Portes-clés, clés USB & Tapis souris</a></li>
												<li><a href="blocs-notes?langue=fr">Blocs-notes</a></li>
												<li><a href="agendas?langue=fr">Agendas</a></li>
												<li><a href="casquettes?langue=fr">Casquettes</a></li>
												<li><a href="tshirts-polos?langue=fr">T-shirts & polos</a></li>
												<li><a href="sacs-en-papier-plastique?langue=fr">Sacs en papier ou plastique</a></li>
												<li><a href="coques-telephone?langue=fr">Coques téléphone</a></li>
												<li><a href="presentoirs-produits-flyers?langue=fr">Présentoirs de produits/flyers</a></li>
												<li><a href="sets-de-table?langue=fr">Sets de table</a></li>
												<li><a href="cadeaux-photos?langue=fr">Cadeaux photos</a></li>
												<li><a href="etiquettes-autocollants?langue=fr">Etiquettes et autocollants</a></li>
												<li><a href="plaques-aimantees?langue=fr">Plaques aimantées</a></li>
												<li><a href="rapports-dactivite?langue=fr">Rapports d'activité</a></li>
												<li><a href="formulaires-autocopiants?langue=fr">Formulaires autocopiants</a></li>
												<li><a href="signaletiques?langue=fr">Signaléliques</a></li>
											</ul>
										</li>
									</ul>
								</td>
								<td>
									<a href="produits-services?langue=en" class="pages">Our products & services</a>
									<ul style="margin-top:10px">
										<li><a href="mediapex-digital"><b>Médiapex Digital</b></a>
											<ul>
												<li><a href="site-internet?langue=en">Site internet</a></li>
												<li><a href="community-management?langue=en">Community management</a></li>
												<li><a href="application-web?langue=en">Application web</a></li>
												<li><a href="application-mobile?langue=en">Application mobile</a></li>
											</ul>
										</li>
										<li><a href="mediapex-studio"><b>Médiapex Studio</b></a>
											<ul>
												<li><a href="reportage-photo?langue=en">Reportage photo</a></li>
												<li><a href="reportage-video?langue=en">Reportage vidéo</a></li>
												<li><a href="logotype?langue=en">Logotype</a></li>
												<li><a href="charte-graphique?langue=en">Charte graphique</a></li>
												<li><a href="packaging?langue=en">Packaging</a></li>
												<li><a href="design-produit?langue=en">Design produit</a></li>
											</ul>
										</li>
										<li><a href="mediapex-conseil"><b>Médiapex Conseil</b></a>
											<ul>
												<li><a href="conseil-marketing?langue=en">Conseil marketing</a></li>
												<li><a href="audit-image?langue=en">Audit d'image</a></li>
												<li><a href="relation-presse?langue=en">Relation presse</a></li>
											</ul>
										</li>
										<li><a href="mediapex-events"><b>Médiapex Events</b></a>
											<ul>
												<li><a href="lancement-produit-service?langue=en">Lancement de produit/service</a></li>
												<li><a href="seminaire?langue=en">Séminaires</a></li>
												<li><a href="soiree-gala?langue=en">Soirées de gala</a></li>
												<li><a href="tournee-promotionnelle?langue=en">Tournée promotionnelle</a></li>
											</ul>
										</li>
										<li><a href="mediapex-impressions"><b>Médiapex Impressions</b></a>
											<ul>
												<li><a href="cartes-de-visite?langue=en">Cartes de visite</a></li>
												<li><a href="flyers?langue=en">Flyers</a></li>
												<li><a href="depliants?langue=en">Dépliants</a></li>
												<li><a href="catalogues-magazines?langue=en">Catalogues & magazines</a></li>
												<li><a href="affiches-posters?langue=en">Affiches & posters</a></li>
												<li><a href="panneaux-pancartes?langue=en">Panneaux & pancartes</a></li>
												<li><a href="baches-banderoles?langue=en">Bâches & banderoles</a></li>
												<li><a href="cartes-de-voeux?langue=en">Cartes de voeux</a></li>
												<li><a href="cartons-information?langue=en">Cartons d'information</a></li>
												<li><a href="chemises-porte-documents?langue=en">Chemises porte-documents</a></li>
												<li><a href="cheques-cadeaux?langue=en">Chèques-cadeaux</a></li>
												<li><a href="cartes-de-fidelite?langue=en">Cartes de fidélité</a></li>
												<li><a href="rollups-stands?langue=en">Roll-ups & stands</a></li>
												<li><a href="cartons-invitation-faire-part?langue=en">Cartons d'invitation & faire-part</a></li>
												<li><a href="social-network-cards?langue=en">Social Network Cards</a></li>
												<li><a href="papier-a-en-tete?langue=en">Papier à en-tête</a></li>
												<li><a href="enveloppes?langue=en">Enveloppes</a></li>
												<li><a href="stylos?langue=en">Stylos</a></li>
												<li><a href="calendriers-muraux?langue=en">Calendriers muraux</a></li>
												<li><a href="calendriers-chevalets?langue=en">Calendriers Chevalets</a></li>
												<li><a href="tasses-mugs?langue=en">Tasses/mugs</a></li>
												<li><a href="portes-cles-usb-tapis-souris?langue=en">Portes-clés, clés USB & Tapis souris</a></li>
												<li><a href="blocs-notes?langue=en">Blocs-notes</a></li>
												<li><a href="agendas?langue=en">Agendas</a></li>
												<li><a href="casquettes?langue=en">Casquettes</a></li>
												<li><a href="tshirts-polos?langue=en">T-shirts & polos</a></li>
												<li><a href="sacs-en-papier-plastique?langue=en">Sacs en papier ou plastique</a></li>
												<li><a href="coques-telephone?langue=en">Coques téléphone</a></li>
												<li><a href="presentoirs-produits-flyers?langue=en">Présentoirs de produits/flyers</a></li>
												<li><a href="sets-de-table?langue=en">Sets de table</a></li>
												<li><a href="cadeaux-photos?langue=en">Cadeaux photos</a></li>
												<li><a href="etiquettes-autocollants?langue=en">Etiquettes et autocollants</a></li>
												<li><a href="plaques-aimantees?langue=en">Plaques aimantées</a></li>
												<li><a href="rapports-dactivite?langue=en">Rapports d'activité</a></li>
												<li><a href="formulaires-autocopiants?langue=en">Formulaires autocopiants</a></li>
												<li><a href="signaletiques?langue=en">Signaléliques</a></li>
											</ul>
										</li>
									</ul>
								</td>
							</tr>
							<tr>
								<td><a href="references?langue=fr" class="pages">Nos references</a></td>
								<td><a href="references?langue=en" class="pages">Portfolio</a></td>
							</tr>
							<tr>
								<td><a href="contact?langue=fr" class="pages">Nous contacter</a></td>
								<td><a href="contact?langue=en" class="pages">Contact us</a></td>
							</tr>
						</tbody>
					</table>
				</div>
				
				
				<!--<div class="news-a">
					<article style="border:none">
						
						<img src="liaisons/images/produits/site-internet.jpg" width="100%">
						
						<?php echo SITE_INTERNET_TXT; ?>

					</article>
					
				</div>
				<?php include("_menu-produits.php"); ?>-->
			</section>
			
            <?php include("_pied.php"); ?>
            
		</div>
		<script type="text/javascript">
			head.load('liaisons/javascript/jquery.js','liaisons/javascript/scripts.js','liaisons/javascript/mobile.js')
		</script>
	</body>
</html>