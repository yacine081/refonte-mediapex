<?php if (!isset($_SESSION)) {session_start();} ?>
<?php require_once('liaisons/_langues.php'); ?>
<?php require_once('__bdd.php'); ?>
<?php 
define('ACCUEIL_ACTIVE', 'class="active"'); 
define('SERVICES_ACTIVE', ''); 
define('REFERENCES_ACTIVE', ''); 
define('CONTACT_ACTIVE', ''); 
//require '_recaptchalib.php';
//$secret = '6Lec6PkSAAAAACBiFFNyHnBiQ23ujlMVtNKgKr5h';
?>

<!doctype html>
<html lang="<?php echo $lang; ?>">
    <head>
        <meta charset="UTF-8">
        <title><?php echo INDEXTITRE; ?></title>
        <meta name="description" content="<?php echo META_DESC_ACCUEIL; ?>">
        <meta name="keywords" content="<?php echo META_KEYWORDS; ?>">
        <meta name="viewport" content="width=device-width, initial-scale=0.9, maximum-scale=0.9, user-scalable=no, target-densitydpi=device-dpi">
        <link rel="alternate" hreflang="fr" href="https://mediapex.net" />
        <link rel="alternate" hreflang="en" href="https://mediapex.net/index.php?langue=en" />
        <script type="text/javascript" src="liaisons/javascript/head.js"></script>
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
         <link rel="stylesheet" type="text/css" href="css-menu/theme-style.css">

        <!--[if lt IE 9]>
        <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <script src="http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js"></script>
        <![endif]-->

        <script src="js-menu/vendor/modernizr.js"></script>

        <!--[if gt IE 8]><!--><script src="js-menu/vendor/less.js"></script><!--<![endif]-->
        
    </head>
    <body>

    
        
  
  

        <div id="root">
        <header id="top">
        
        <?php require_once("_menu.php"); ?>  
        
        </header>
        
        <section id="content" class="home-a">
               
               
<!-------------------------------------- NOTRE EXPERTISE ----------------------------------------->
               <div>
                <article style="padding:95px 0 20px 0">
                    <header>
                        <h2><?php echo PRESENTATION; ?></h2>
                        <p style="font-size:16px"><?php echo PRESENTATIONTEXT; ?></p>
                    </header>
                   <!-- <ul class="list-c" style="margin:0">
                        <li>
                            <span class="header">
                            <i class="icon-basic" data-icon="7"></i> <?php echo EXP1; ?></span> 
                            <?php echo EXP1TEXT; ?> 
                            <a href="produits-services"><?php echo SAVOIRPLUS; ?></a>
                        </li>
                        
                        <li>
                            <span class="header">
                            <i class="icon-basic" data-icon="?"></i> <?php echo EXP2; ?></span> 
                            <?php echo EXP2TEXT; ?> 
                            <a href="produits-services"><?php echo SAVOIRPLUS; ?></a>
                        </li>
                        
                        <li>
                            <span class="header">
                            <i class="icon-basic" data-icon="/"></i> <?php echo EXP3; ?></span> 
                            <?php echo EXP3TEXT; ?> 
                            <a href="produits-services"><?php echo SAVOIRPLUS; ?></a>
                        </li>
                    </ul>
                -->

            <div class="block color-scheme-4">
                <div class="container">
                    <div class="row">
                       
                       
                       
                        <div class="col-md-4 col-sm-6">
                            <div class="block-feature-icon left dark">
                                <div class="icon hi-icon-color hi-icon-effect">
                                    <span class="hi-icon"><i class="ion-ios-telephone-outline"></i></span>
                                </div>

                                <div class="block-title">
                                    <h4>Conseil</h4> 
                                    <p>Nous aidons nos clients à identifier des concepts innovants</p>
                                    <a href="produits-services" class="btn-default dark">En Savoir Plus</a>


                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6">
                            <div class="block-feature-icon left dark">
                                <div class="icon hi-icon-color hi-icon-effect">
                                    <span class="hi-icon"><i class="ion-ios-flask-outline"></i></span>
                                </div>
                                <div class="block-title">
                                    <h4>Création</h4> 
                                    <p>Nous aimons le défi d'exprimer visuellement vos idées.</p> <br>
                                    <a href="produits-services" class="btn-default dark">En Savoir Plus</a>

                                </div>
                            </div>
                        </div>
                    <div class="col-md-4 col-sm-6">
                            <div class="block-feature-icon left dark">
                                <div class="icon hi-icon-color hi-icon-effect">
                                    <span class="hi-icon"> <i class="ion-ios-settings"></i></span>
                                </div>
                                <div class="block-title">
                                    <h4>Technique</h4> 
                                    <p>Nous mettons en oeuvre tous les outils techniques pour faire vivre vos idées.</p>
                                    

                                    <a href="produits-services" class="btn-default dark">En Savoir Plus</a>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

                </article>
                </div>
                
<!-------------------------------------- SEPARATION ----------------------------------------->

                                            
            <div style="width:100%; height:500px; background:url(liaisons/images/backgrounds/intro-bureau-<?php echo $lang; ?>.jpg) right center; background-size: cover"></div>
               
                
<!-------------------------------------- CHIFFRES CLES ----------------------------------------->


            <article style="background:url(liaisons/images/pattern-jaune.png); border:none; width:100%; text-align:center; padding:75px 0 25px 0; z-index:-10">
                <header>
                    <h2 style="color:#1F2837; font-weight:700"><?php echo CHIFFRES_CLE; ?></h2>
                    <p style="color:#fff"><?php echo CHIFFRES_CLE_TEXT; ?> <img src="liaisons/images/smiley.png" width="30"></p>
                </header>
                <ul class="list-e">
                    <li><?php echo CHIFFRES_CLE_PROJETS_ACHEVES; ?></li>
                    <li><?php echo CHIFFRES_CLE_PROJETS_ENCOURS; ?></li>
                    <li><?php echo CHIFFRES_CLE_PAYS; ?></li>
                    <li><?php echo CHIFFRES_CLE_CLIENTS; ?></li>
                </ul>
            </article>
            
            
<!-------------------------------------- NOS REFERENCES ----------------------------------------->

                           
                <article style000="border-bottom:#008e96 medium solid">
                    <header>
                        <h2><?php echo PORTFOLIO; ?></h2>
                        <p><?php echo TXTREFERENCES; ?></p>
                    </header>
                    
                    <ul class="gallery-a">
                
                    <?php 
                    $r1 = $bdd->query('SELECT * FROM mediapex_clients WHERE id=72 OR id=92 OR id=105');
                    while ($ref = $r1->fetch()) 
                    { ?>
                    
                        <li class="<?php echo $ref['pole_digital'].' '.$ref['pole_studio'].' '.$ref['pole_conseil'].' '.$ref['pole_evenementiel'].' '.$ref['pole_impression']; ?>">
                            <img src="liaisons/images/clients/<?php echo $ref['url']; ?>.png" alt="Logo" width="360" height="270">
                            <div>
                                <p><?php echo substr($ref['presentation_'.$lang],0,150).'...'; ?></p>
                                <p class="link-b"><a href="references-client-<?php echo $ref['url'].'-'.$lang; ?>"><?php echo DECOUVRIR; ?></a></p>
                            </div>
                            <span style="font-size:18px; text-transform:inherit"><?php echo $ref['epse']; ?></span>
                        </li>
                        
                    <?php 
                    }
                    $r1->closeCursor(); 
                    ?>
                    
                </ul>
                
                    <p class="link-d"><a href="references"><?php echo VOIRPLUS; ?></a></p>
                </article>
                
                
<!-------------------------------------- PARALLAX ----------------------------------------->

                                
                <article class="a" style="padding:20px 0; height:500px; width:100%">
                
                <div style="position:relative; background:#068c94; color:#FFFFFF; width:100%; height:40px; text-align:center; font-size:22px; top:455px; margin:0 auto; text-transform:uppercase; padding:18px 0 15px 0; font-weight:300"><span style="font-weight:800"><?php echo EQUIPE; ?></span> <span class="desktop-only"><?php echo EQUIPETEXT; ?></span></div>
                
                </article>
                
                
<!-------------------------------------- L'EQUIPE ----------------------------------------->

                
            <div class="grid" style="padding:0; bottom:-5px; position:relative; z-index:500">
                <figure class="effect-milo">
                    <img src="liaisons/team/team-yoro.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Yoro <span>DIOP</span></h2>
                        <h2 style="bottom:105px; font-size:15px"><?php echo YORO; ?></h2>
                        <p><?php echo YOROTEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-mar.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>El Hadji Mar <span>DIAGNE</span></h2>
                        <h2 style="bottom:105px; font-size:15px"><?php echo MAR; ?></h2>
                        <p><?php echo MARTEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-ngone.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Ngoné <span>FALL</span></h2>
                        <h2 style="bottom:105px; font-size:15px"><?php echo NGONE; ?></h2>
                        <p><?php echo NGONETEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-ousseynou.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Ousseynou <span>Niang</span></h2>
                        <h2 style="bottom:105px; font-size:15px"><?php echo OUSSEYNOU; ?></h2>
                        <p><?php echo OUSSEYNOUTEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-cheikh.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Cheikh Bamba <span>Guissé</span></h2>
                        <h2 style="bottom:105px; font-size:15px"><?php echo CHEIKHBAMBA; ?></h2>
                        <p><?php echo CHEIKHBAMBATEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-abibou.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Abibou <span>Mbodji</span></h2>
                        <h2 style="bottom:105px; font-size:15px"><?php echo ABIBOU; ?></h2>
                        <p><?php echo ABIBOUTEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-sadio.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Ndèye Sadio <span>DIOP</span></h2>
                        <h2 style="bottom:105px; font-size:15px"><?php echo SADIO; ?></h2>
                        <p><?php echo SADIOTEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-absa.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Absa Diouf <span>DIOP</span></h2>
                        <h2 style="bottom:105px; font-size:15px"><?php echo ABSA; ?></h2>
                        <p><?php echo ABSATEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-chadi.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Chadi <span>HOUDROUGE</span></h2>
                        <h2 style="bottom:105px; font-size:15px"><?php echo CHADI; ?></h2>
                        <p><?php echo CHADITEXT; ?></p>
                    </figcaption>           
                </figure>
            </div>

            <!--<article>
                    
                    <div class="slider-a">
                        <p class="quote-a">
                            <img src="liaisons/team/chimere.jpg" alt="Placeholder" width="250" height="250">
                            <span style="font-size:18px; color:#008e96">Amadou Chimere NDIAYE</span><br>
                            <span style="text-transform:uppercase"><?php echo CHIMERE; ?></span><br><br>
                            <q style="font-size:18px"><?php echo CHIMERETEXT; ?></q>
                        </p>
                        
                        <p class="quote-a">
                            <img src="liaisons/team/yoro.jpg" alt="Placeholder" width="250" height="250">
                            <span style="font-size:18px; color:#008e96">Yoro DIOP</span><br>
                            <span style="text-transform:uppercase"><?php echo YORO; ?></span><br><br>
                            <q style="font-size:18px"><?php echo YOROTEXT; ?></q>
                        </p>
                        
                        <p class="quote-a">
                            <img src="liaisons/team/mar.jpg" alt="Placeholder" width="250" height="250">
                            <span style="font-size:18px; color:#008e96">El Hadji Mar DIAGNE</span><br>
                            <span style="text-transform:uppercase"><?php echo MAR; ?></span><br><br>
                            <q style="font-size:18px"><?php echo MARTEXT; ?></q>
                        </p>
                        
                        <p class="quote-a">
                            <img src="liaisons/team/iyane.jpg" alt="Placeholder" width="250" height="250">
                            <span style="font-size:18px; color:#008e96">Ahmed Iyane SENE</span><br>
                            <span style="text-transform:uppercase"><?php echo IYANE; ?></span><br><br>
                            <q style="font-size:18px"><?php echo IYANETEXT; ?></q>
                        </p>
                        
                        <p class="quote-a">
                            <img src="liaisons/team/seydou.jpg" alt="Placeholder" width="250" height="250">
                            <span style="font-size:18px; color:#008e96">Pape Seydou KAMARA</span><br>
                            <span style="text-transform:uppercase">Directeur Communication & Evénementiel</span><br><br>
                            <q style="font-size:18px">De nature perfectionniste, il est toujours à la quête de l'innovation, en somme, l'originalité.
PSK, comme il est Affectueusement appelé est le Monsieur Com'Events de l'équipe. Impliqué, créatif, méthodique et très réactif, Il définit avec une aisance d'concertante les meilleures stratégies de communication et pistes créatives pour  notre aimable clientèle.
 Toujours souriant, disponible et ouvert d'esprit, PSK dispose également d'une excellente culture générale qui lui a permis d'être le champion incontesté du Scrabble au sein du groupe.
</q>
                        </p>
                        
                        <p class="quote-a">
                            <img src="liaisons/team/chadi.jpg" alt="Placeholder" width="250" height="250">
                            <span style="font-size:18px; color:#008e96">Chadi HOUDROUGE</span><br>
                            <span style="text-transform:uppercase"><?php echo CHADI; ?></span><br><br>
                            <q style="font-size:18px"><?php echo CHADITEXT; ?></q>
                        </p>
                        
                        <p class="quote-a">
                            <img src="liaisons/team/ngone.jpg" alt="Placeholder" width="250" height="250">
                            <span style="font-size:18px; color:#008e96">Ngoné FALL</span><br>
                            <span style="text-transform:uppercase">Commerciale</span><br><br>
                            <q style="font-size:18px">Rester assis sur une chaise derrière un écran d'ordinateur toute la journée ? Trop peu pour elle ! Partir à la rencontre de l'autre, échanger, discuter, convaincre et finalement le satsifaire, voilà ce qui vous anime Ngonish !

 Avant tout femme de terrain, elle est proche des clients et reste toujours à leur écoute.<br>

 Motivation pour la satisfaction du client, goût du challenge et bon relationnel font d'elle une des ambassadrices les plus apréciées de Médiapex.</q>
                        </p>
                        
                    </div>
                </article>-->

<!-------------------------------------- NOS CLIENTS -----------------------------------------
                
                <article style="border:none">
                    <header>
                        <h2>Nos clients</h2>
                        <p>Médiapex sert des clients de toutes tailles et dans tous les secteurs d'activité.</p>
                    </header>
                    <ul class="logo-a">
                        <li><a href="#"><img src="liaisons/images/logo/a.png" alt="Logo" width="127" height="55"> <img class="bw" src="liaisons/images/logo/bw/a.png" alt="Logo" width="127" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/b.png" alt="Logo" width="130" height="55"> <img class="bw" src="liaisons/images/logo/bw/b.png" alt="Logo" width="130" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/c.png" alt="Logo" width="130" height="55"> <img class="bw" src="liaisons/images/logo/bw/c.png" alt="Logo" width="130" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/d.png" alt="Logo" width="130" height="55"> <img class="bw" src="liaisons/images/logo/bw/d.png" alt="Logo" width="130" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/e.png" alt="Logo" width="130" height="55"> <img class="bw" src="liaisons/images/logo/bw/e.png" alt="Logo" width="130" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/f.png" alt="Logo" width="152" height="55"> <img class="bw" src="liaisons/images/logo/bw/f.png" alt="Logo" width="152" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/a.png" alt="Logo" width="127" height="55"> <img class="bw" src="liaisons/images/logo/bw/a.png" alt="Logo" width="127" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/b.png" alt="Logo" width="130" height="55"> <img class="bw" src="liaisons/images/logo/bw/b.png" alt="Logo" width="130" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/c.png" alt="Logo" width="130" height="55"> <img class="bw" src="liaisons/images/logo/bw/c.png" alt="Logo" width="130" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/d.png" alt="Logo" width="130" height="55"> <img class="bw" src="liaisons/images/logo/bw/d.png" alt="Logo" width="130" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/e.png" alt="Logo" width="130" height="55"> <img class="bw" src="liaisons/images/logo/bw/e.png" alt="Logo" width="130" height="55"></a></li>
                        <li><a href="#"><img src="liaisons/images/logo/f.png" alt="Logo" width="152" height="55"> <img class="bw" src="liaisons/images/logo/bw/f.png" alt="Logo" width="152" height="55"></a></li>
                    </ul>
                </article>-->
                
                
<!-------------------------------------- DEMARRER PROJET ----------------------------------------->

                <article style="background:url(liaisons/images/pattern-vert.png); border:none; width:100%; text-align:center; padding:150px 0; z-index:-10" id="demarrer-projet-origine">
                    <div id="ajax-loading"><img src="liaisons/images/sablier.png" width="150px"></div>
                </article>
                
<!-------------------------------------- PIED DE PAGE -------------------------------------------->


            </section>

        <?php include("_pied.php"); ?>
        
        </div><!-- fermeture id="root" -->
        <!--<script type="text/javascript">
            head.load('liaisons/javascript/jquery.js', /*'liaisons/javascript/twitterFetcher.js',*/ 'liaisons/javascript/scripts.js', 'liaisons/javascript/mobile.js', 'liaisons/javascript/rewalk.js');

        </script>-->
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