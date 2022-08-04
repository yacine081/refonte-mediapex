<?php require_once('liaisons/_langues.php'); ?>
<?php require_once('__bdd.php'); ?>
<?php
$url = $_GET['site'];
$retour = $_GET['retour']; 
?>
<!DOCTYPE html>
<html lang="fr" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Aper&ccedil;u d'un site</title>
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="liaisons/portfolio/css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="liaisons/portfolio/css/demo.css" />
		<link rel="stylesheet" type="text/css" href="liaisons/portfolio/css/component.css" />
		<!--[if IE]>
  		<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
        <link href='https://fonts.googleapis.com/css?family=Open+Sans:300' rel='stylesheet' type='text/css'>

		<style type="text/css">
        html,body {height:100%; margin:0; padding:0; overflow:hidden; background:#FFF;}
        iframe {width:100%; height:100%; border:none;}
        a img{border: none;}
        a:link {text-decoration: none; color:#000000; font-weight:400;}
        a:visited {text-decoration: none; color:#000000;}
        a:hover {text-decoration: none; color:#000000;}
        a:active {text-decoration: none; color:#000000;}
        </style>

	</head>
	<body>
    
<?php 
$filtre = '';
if(isset($_GET['client']) && $_GET['client'] != '')
{
	$filtre = $_GET['client'];
}
else
{
	$filtre = 1;
}
$r1 = $bdd->prepare('SELECT * FROM mx_references WHERE id = ? LIMIT 1');
$r1->execute(array(strip_tags($filtre)));
while ($ref = $r1->fetch())	
{ ?>
    
		<div class="svg-wrap">
			<svg width="64" height="64" viewBox="0 0 64 64">
				<path id="arrow-left-2" d="M26.667 10.667q1.104 0 1.885 0.781t0.781 1.885q0 1.125-0.792 1.896l-14.104 14.104h41.563q1.104 0 1.885 0.781t0.781 1.885-0.781 1.885-1.885 0.781h-41.563l14.104 14.104q0.792 0.771 0.792 1.896 0 1.104-0.781 1.885t-1.885 0.781q-1.125 0-1.896-0.771l-18.667-18.667q-0.771-0.813-0.771-1.896t0.771-1.896l18.667-18.667q0.792-0.771 1.896-0.771z" />
			</svg>
			<svg width="64" height="64" viewBox="0 0 64 64">
				<path id="arrow-right-2" d="M37.333 10.667q1.125 0 1.896 0.771l18.667 18.667q0.771 0.771 0.771 1.896t-0.771 1.896l-18.667 18.667q-0.771 0.771-1.896 0.771-1.146 0-1.906-0.76t-0.76-1.906q0-1.125 0.771-1.896l14.125-14.104h-41.563q-1.104 0-1.885-0.781t-0.781-1.885 0.781-1.885 1.885-0.781h41.563l-14.125-14.104q-0.771-0.771-0.771-1.896 0-1.146 0.76-1.906t1.906-0.76z" />
			</svg>
		</div>
		<div class="container" style="display:block; height:100%">
		  <section class="color-3" style="padding:0%; min-height:500px; height:100%">
          <iframe src="https://<?php echo $url; ?>" frameborder="0" name="references"></iframe>

				<nav class="nav-growpop">
                
					<a class="prev" href="<?php echo $retour; ?>" style="top:350px">
						<span class="icon-wrap"><svg class="icon" width="24" height="24" viewBox="0 0 64 64"><use xlink:href="#arrow-left-2"></svg></span>
						<div style="width:380px">
                            <h3 style="text-align:left; line-height:1.4">RETOURNER <br>SUR LE SITE <br>MEDIAPEX.NET</h3>
							<img src="liaisons/portfolio/img/logo/m.png" alt="Retourner au site"/>
						</div>
					</a>

				</nav>
			</section>
		</div><!-- /container -->

<?php 
}
$r1->closeCursor(); 
?>

		<script>
			// For Demo purposes only
			/*[].slice.call( document.querySelectorAll('nav > a') ).forEach( function(el) {
				el.addEventListener( 'click', function(ev) { ev.preventDefault(); } );
			} );*/
		</script>
	</body>
</html>