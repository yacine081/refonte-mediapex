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
		<title><?php echo PROD_PAPIER_ENTETE; ?> - Médiapex</title>
		<meta name="description" content="<?php echo PAPIER_ENTETE_META_DESC; ?>">
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
		</style>
	</head>
	<body>
		<div id="root">
			<header id="top">

			<?php require_once("_menu.php"); ?> 

			</header> 
			<div class="voircatalogue" style="font-size:30px; font-weight:300; background:#068c94"><?php echo PROD_PAPIER_ENTETE; ?></div> 
			<section id="content" class="cols-a">
				<div class="news-a">
					<article style="border:none">
						
						<img src="liaisons/images/produits/en-tete-lettre.jpg" width="100%">
						
						<br>
						<br>
						<br>
						<?php echo PAPIER_ENTETE_TXT; ?>

					</article>
					
				</div>
				<?php include("_menu-produits.php"); ?>
			</section>
			
            <?php include("_pied.php"); ?>
            
		</div>
		<script type="text/javascript">
			head.load('liaisons/javascript/jquery.js','liaisons/javascript/scripts.js','liaisons/javascript/mobile.js')
		</script>
	</body>
</html>