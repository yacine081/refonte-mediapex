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
                 <link rel="stylesheet" type="text/css" href="css/theme-style.css?v=1.0.1">


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
        
    </head>
    <body>

    
    <!--<p class="notice-a">Les cookies assurent le bon fonctionnement de nos services. En utilisant ce site, vous acceptez l'utilisation des cookies. <a href="#">En savoir plus</a></p>-->
        
        
  
              <!-- =======================
        =====   Home section  ======
        =========================-->
        <header id="header" class="header-fullscreen-top">
            <div class="full-screen-block">
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
                                <p><i class="ion-android-phone-portrait"></i>+221 33 832 60 00<br> <i class="ion-android-mail"></i>info@mediapex.net</p>
                            </div>
                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="multi-navbar-collapse-1">
                                <ul class="nav navbar-nav navbar-right menu-item-6">
                                    <li class="home"><span class="bg-icon"><i class="ion-ios-home-outline"></i></span><span class="rotated-title">Accueil</span><a href="accueil" class="current">Accueil</a></li>
                                    <li class="about"><span class="bg-icon"><i class="ion-ios-person-outline"></i></span><span class="rotated-title">Services</span><a href="produits-services">Sercives</a></li>                                            
                                    <li class="service"><span class="bg-icon"><i class="ion-ios-star-outline"></i></span><span class="rotated-title">R??f??rences</span><a href="references">R??f??rences</a></li>
                                    
                                    <li class="contact"><span class="bg-icon"><i class="ion-ios-telephone-outline"></i></span><span class="rotated-title">Contact</span><a href="contact">Contact</a></li>
                                </ul>

                            </div><!-- /.navbar-collapse -->
                        </nav>      
                    </div>
                </div>
            </div>
        </header>
        <!-- End header -->


        <!-- =======================
        =====   Home section  ======
        =========================-->

        <section>

            <div id="rev_slider_112_1_wrapper" class="rev_slider_wrapper fullwidthbanner-container color-scheme-1" data-alias="travel-static-captions84">
                <!-- START REVOLUTION SLIDER 5.0.7 auto mode -->
                <div id="rev_slider_112_1" class="rev_slider fullwidthabanner" data-version="5.0.7">
                    <ul>    <!-- SLIDE  -->
                        <li data-index="rs-338" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"    data-rotate="0"  data-fstransition="fade" data-fsmasterspeed="1500" data-fsslotamount="7" data-saveperformance="off"  data-title="Number One" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="img/preview/slider/slider_1.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-309-layer-11" 
                                 data-x="['left','left','left','center']" data-hoffset="['30','30','20','0']" 
                                 data-y="['top','top','top','top']" data-voffset="['235','195','145','125']" 
                                 data-fontsize="['60','60','50','50']"
                                 data-lineheight="['70','70','60','60']"
                                 data-width="['none','none','none','400']"
                                 data-height="none"
                                 data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                 data-mask_in="x:0px;y:[100%];" 
                                 data-mask_out="x:inherit;y:inherit;" 
                                 data-start="500" 
                                 data-splitin="none" 
                                 data-splitout="none" 
                                 data-basealign="slide" 
                                 data-responsive_offset="off" >
                                <span> Agence </span> <br> de  communication <br> globale.
                            </div>
                         

                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-339" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"    data-rotate="0"  data-saveperformance="off"  data-title="Number Two" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="img/preview/slider/slider_22.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-309-layer-21" 
                                 data-x="['left','left','left','center']" data-hoffset="['30','30','20','0']" 
                                 data-y="['top','top','top','top']" data-voffset="['235','195','145','125']" 
                                 data-fontsize="['60','60','50','50']"
                                 data-lineheight="['70','70','60','60']"
                                 data-width="['none','none','none','400']"
                                 data-height="none"
                                 data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                 data-mask_in="x:0px;y:[100%];" 
                                 data-mask_out="x:inherit;y:inherit;" 
                                 data-start="500" 
                                 data-splitin="none" 
                                 data-splitout="none" 
                                 data-basealign="slide" 
                                 data-responsive_offset="off" >
                                <span>M??diapex</span><br> le partenaire IT <br>des entreprises.

                            </div>
                            

                        </li>
                        <!-- SLIDE  -->
                        <li data-index="rs-340" data-transition="parallaxhorizontal" data-slotamount="default"  data-easein="default" data-easeout="default" data-masterspeed="default"    data-rotate="0"  data-saveperformance="off"  data-title="Number Three" data-description="">
                            <!-- MAIN IMAGE -->
                            <img src="img/preview/slider/slider_2_2.png"  alt=""  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10" class="rev-slidebg" data-no-retina>
                            <!-- LAYERS -->
                            <div class="tp-caption BigBold-Title   tp-resizeme rs-parallaxlevel-0" 
                                 id="slide-309-layer-31" 
                                 data-x="['left','left','left','center']" data-hoffset="['30','30','20','0']" 
                                 data-y="['top','top','top','top']" data-voffset="['235','195','145','125']"  
                                 data-fontsize="['60','60','50','50']"
                                 data-lineheight="['70','70','60','60']"
                                 data-width="['none','none','none','400']"
                                 data-height="none"
                                 data-whitespace="['nowrap','nowrap','nowrap','normal']"
                                 data-transform_idle="o:1;"

                                 data-transform_in="y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;s:1500;e:Power3.easeInOut;" 
                                 data-transform_out="y:[100%];s:1000;e:Power2.easeInOut;s:1000;e:Power2.easeInOut;" 
                                 data-mask_in="x:0px;y:[100%];" 
                                 data-mask_out="x:inherit;y:inherit;" 
                                 data-start="500" 
                                 data-splitin="none" 
                                 data-splitout="none" 
                                 data-basealign="slide" 
                                 data-responsive_offset="off" >
                                <span>Notre approche</span> <br> Design Thinking.
                            </div>
                         

                        </li>
                    </ul>
                    <div class="tp-bannertimer tp-bottom"></div>    
                </div>
            </div>
</section>
        

            <!-- =======================
            =====  Welcome section    ====
            =========================-->


      
                         <div id="root">



        
        <section id="content" class="home-a block color-scheme-4" >
                               
               
             
  
<!-------------------------------------- NOTRE EXPERTISE ----------------------------------------->
               
                <article style="padding:10px 0 20px 0">
                    <header>
                        <h2><?php echo PRESENTATION; ?></h2>
                        <p style="font-size:16px"><?php echo PRESENTATIONTEXT; ?></p>
                    </header>
                 <!--   <ul class="list-c" style="margin:0">
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
                </article>


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
                                    <p>Nous aidons nos clients ?? identifier des concepts innovants</p>
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
                                    <h4>Cr??ation</h4> 
                                    <p>Nous aimons le d??fi d'exprimer visuellement vos id??es.</p> <br>
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
                                    <p>Nous mettons en oeuvre tous les outils techniques pour faire vivre vos id??es.</p>
                                    <a href="produits-services" class="btn-default dark">En Savoir Plus</a>

                                </div>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
<section>

            <div class="block color-scheme-2" style="color: black !important;">
                <div class="container">
                    <div class="section-sub-title center">
                        <article class="section-title-body white">
                            <h1 class="head-title">Mobile <span>App</span> Services</h1>
                        </article>
                    </div>
                    <div class="row ">
                        <div class="col-md-6 col-sm-6">
                            <div class="img-rotate wow fadeInLeftBig animated" data-wow-duration="1.5s">
                                <img class="img-responsive wow fadeInLeftBig animated" data-wow-duration="1.5s" src="liaisons/accueil/feature.png" alt="">  
                            </div>

                        </div>

                        <div class="col-md-6 col-sm-6 block color-scheme-2" style="padding-left: 30px !important; padding-right: 60px !important;">
                            <div class="block-feature">
                               
                                <i class="ion-ios-monitor-outline"></i>
                                <a href="agence-de-communication-globale">Agence de Communication Globale</a>
                                <p>
                                    M??diapex est un m??lange de pens??e strat??gique, de cr??ativit?? et d'expertise technique.

                                </p>
                            </div>
                            <div class="block-feature">
                                <i class="ion-ios-infinite-outline"></i>
                                <a href="partenaire-it-des-entreprises">Le partenaire IT des entreprises.</a>
                                <p>
                            Depuis plusieurs ann??es, M??diapex accompagne ses clients dans l?????laboration, l???int??gration et l???exploitation de leurs syst??mes d???information.

                                </p>
                            </div>
                            <div class="block-feature">
                                <i class="ion-ios-toggle-outline"></i>
                                <a href="notre-approche-design-thinking">Notre approche Design Thinking.</a>
                                <p>Focalis??e sur l'exp??rience client allie intuition, cr??ativit?? et audace.
                                </p>
                            </div>
                            <div class="block-feature">
                                <i class="ion-ios-chatbubble-outline"></i>
                                <a href="nous-donnons-des-ailes-a-votre-entreprise">Nous donnons des ailes ?? votre entreprise.</a>
                                <p>
                                    Cr??ativit?? et technologie sont nos sources d'inspiration pour vous accompagner dans chaque projet.


                                </p>
                            </div>
                            <div class="block-feature">
                                <i class="ion-ios-chatbubble-outline"></i>
                                <a href="sortez-du-lot"> Sortez du lot !</a>
                                <p>
Nous vous accompagnons afin de faire vivre votre identit?? visuelle, en la d??clinant sur les diff??rents supports de communication n??cessaires ?? la diffusion de votre image.

                                </p>
                            </div>
                            <div class="block-feature">
                                <i class="ion-ios-chatbubble-outline"></i>
                                <a href="references">D??couvrez d??s maintenant notre univers visuel. </a>
                                <p>
                                   Nous concevons des solutions graphiques adapt??es ?? votre cahier des charges et au public cibl??


                                </p>
                            </div>
                        </div>

                    </div>
                
                </div>
            </div>
        </section>
         <!-- =======================
            =====  Welcome section    ====
            =========================-->
           
        <!----------------------------------Video---------------------------------------->
               <!-- =======================
        =====   Home section  ======
        =========================-->
            <div id="rev_slider_104_1_wrapper" class="rev_slider_wrapper fullscreen-container color-scheme-1" data-alias="scroll-effect76">
                <!-- START REVOLUTION SLIDER 5.0.7 fullscreen mode -->
                <div id="rev_slider_104_1" class="rev_slider fullscreenbanner" data-version="5.0.7">
                    <ul>    <!-- SLIDE  -->
                       
                        
                        <!-- SLIDE  -->
                        <li data-index="rs-310" data-transition="slideoverhorizontal" data-slotamount="default"  data-easein="Power4.easeInOut" data-easeout="Power4.easeInOut" data-masterspeed="1000"   data-rotate="0"  data-saveperformance="off"  data-title="HTML5 Video" data-description="">
                            <!-- MAIN IMAGE -->
                            
                            <!-- LAYERS -->

                            <!-- BACKGROUND VIDEO LAYER -->
                            <div class="rs-background-video-layer" 
                                 data-forcerewind="on" 
                                 data-volume="mute" 
                                 data-videowidth="100%" 
                                 data-videoheight="100%" 
                                 data-videomp4="videos/php-coding-4k-2022-06-13-19-14-28-utc.mp4" 
                                 data-videopreload="preload" 
                                 data-videoloop="loop" 
                                 data-forceCover="1" 
                                 data-aspectratio="16:9" 
                                 data-autoplay="true" 
                                 data-autoplayonlyfirsttime="false" 
                                 data-nextslideatend="true" 
                                 ></div>
                            <div class="tp-caption tp-shape tp-shapewrapper   rs-parallaxlevel-0" 
                                 id="slide-311-layer-6" 
                                 data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']" 
                                 data-y="['bottom','bottom','bottom','bottom']" data-voffset="['0','0','0','0']" 
                                 data-width="full"
                                 data-height="['400','400','400','550']"
                                 data-whitespace="nowrap"
                                 data-transform_idle="o:1;"
                                 data-style_hover="cursor:default;"

                                 data-transform_in="opacity:0;s:1500;e:Power2.easeInOut;" 
                                 data-transform_out="opacity:0;s:1000;s:1000;" 
                                 data-start="0" 
                                 data-basealign="slide" 
                                 data-responsive_offset="off" 
                                 data-responsive="off"> 
                            </div>
                          

                           

                           

                        </li>
                        <!-- SLIDE  -->
                        
                    </ul>
                    <div class="tp-static-layers"></div>
                    <div class="tp-bannertimer tp-bottom"></div>    
                </div>
            </div>
                
                
<!-------------------------------------- SEPARATION ----------------------------------------->



            <div style="width:100%; height:500px; background:url(liaisons/images/backgrounds/intro-bureau-<?php echo $lang; ?>.jpg) right center; background-size: cover"></div>
               
<!-------------------------------------- CHIFFRES CLES ----------------------------------------->
        <section >

             <div class="block color-scheme-4"  style="background-color: #068C94 !important;">
                <div class="section-sub-title center">
                    <article class="section-title-body white">
                        <h1 class="head-title">Chiffres cl??s</h1>
                    </article>
                </div>
                <div class="fact-block">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <article class="fact" data-perc="3707">
                                    <i class="ion-ios-people-outline"></i>
                                    <h1 class="factor">500</h1>
                                    <h4>Clients</h4>
                                    <p> Vous ??tes nombreux ?? nous faire confiance</p>
                                </article>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <article class="fact" data-perc="240">
                                    <i class="ion-ios-lightbulb-outline"></i>
                                    <h1 class="factor">221</h1>
                                    <h4>Projets </h4>
                                    <p>Achev??s et autant de clients satisfaits</p>
                                </article>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <article class="fact" data-perc="35">
                                    <i class="ion-ios-monitor-outline"></i>
                                    <h1 class="factor">11</h1>
                                    <h4>Projets</h4>
                                    <p> En cours et autant de d??fis ?? relever</p>
                                </article>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <article class="fact" data-perc="35">
                                    <i class="ion-ios-flag-outline"></i>
                                    <h1 class="factor">35</h1>
                                    <h4>Pays</h4>
                                    <p>C'est le nombre de pays o?? nous avons des clients
</p>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </section>
<!-------------------------------------- NOS REFERENCES ----------------------------------------->
            <section id="content" class="home-a" >


                 <article>
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
                <div class="block-chess bg5 a" style="padding:20px 0; height:500px; width:100%">

                <article class="a bg5" style="padding:20px 0; height:500px; width:100%">
                
                <div style="position:relative; background:#068c94; color:#FFFFFF; width:100%; height:70px; text-align:center; font-size:22px; top:410px; margin:0 auto; text-transform:uppercase; padding:18px 0 15px 0; font-weight:300"><span style="font-weight:800"><?php echo EQUIPE; ?></span> <span class="desktop-only"><?php echo EQUIPETEXT; ?></span></div>
                
                </article>
                </div>
             </section>
                
  
<!-------------------------------------- L'EQUIPE ----------------------------------------->

                
            <div class="grid" style="padding:0; bottom:-5px; position:relative; z-index:500">
                <figure class="effect-milo">
                    <img src="liaisons/team/team-yoro.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Yoro <span>DIOP</span></h2>
                        <h2 style="bottom:55px; font-size:15px"><?php echo YORO; ?></h2>
                        <p style="font-size:60% !important; color: white !important;"><?php echo YOROTEXT; ?></p>
                    </figcaption>           
                </figure>
                
                <figure class="effect-milo">
                    <img src="liaisons/team/team-ngone.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Ngon?? <span>FALL</span></h2>
                        <h2 style="bottom:55px; font-size:15px"><?php echo NGONE; ?></h2>
                        <p style="font-size:60% !important; color: white !important;"><?php echo NGONETEXT; ?></p>
                    </figcaption>           
                </figure>
              
                <figure class="effect-milo">
                    <img src="liaisons/team/team-cheikh.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Cheikh Bamba <span>Guiss??</span></h2>
                        <h2 style="bottom:55px; font-size:15px"><?php echo CHEIKHBAMBA; ?></h2>
                        <p  style="font-size:60% !important; color: white !important;"><?php echo CHEIKHBAMBATEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-abibou.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Abibou <span>Mbodji</span></h2>
                        <h2 style="bottom:55px; font-size:15px"><?php echo ABIBOU; ?></h2>
                        <p  style="font-size:60% !important; color: white !important;"><?php echo ABIBOUTEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-sadio.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Nd??ye Sadio <span>DIOP</span></h2>
                        <h2 style="bottom:55px; font-size:15px"><?php echo SADIO; ?></h2>
                        <p  style="font-size:60% !important; color: white !important;"><?php echo SADIOTEXT; ?></p>
                    </figcaption>           
                </figure>
                <figure class="effect-milo">
                    <img src="liaisons/team/team-absa.jpg" alt="img11" style="width:100%" />
                    <figcaption>
                        <h2>Absa Diouf <span>DIOP</span></h2>
                        <h2 style="bottom:55px; font-size:15px"><?php echo ABSA; ?></h2>
                        <p  style="font-size:60% !important; color: white !important;"><?php echo ABSATEXT; ?></p>
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
                            <span style="text-transform:uppercase">Directeur Communication & Ev??nementiel</span><br><br>
                            <q style="font-size:18px">De nature perfectionniste, il est toujours ?? la qu??te de l'innovation, en somme, l'originalit??.
PSK, comme il est Affectueusement appel?? est le Monsieur Com'Events de l'??quipe. Impliqu??, cr??atif, m??thodique et tr??s r??actif, Il d??finit avec une aisance d'concertante les meilleures strat??gies de communication et pistes cr??atives pour  notre aimable client??le.
 Toujours souriant, disponible et ouvert d'esprit, PSK dispose ??galement d'une excellente culture g??n??rale qui lui a permis d'??tre le champion incontest?? du Scrabble au sein du groupe.
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
                            <span style="font-size:18px; color:#008e96">Ngon?? FALL</span><br>
                            <span style="text-transform:uppercase">Commerciale</span><br><br>
                            <q style="font-size:18px">Rester assis sur une chaise derri??re un ??cran d'ordinateur toute la journ??e ? Trop peu pour elle ! Partir ?? la rencontre de l'autre, ??changer, discuter, convaincre et finalement le satsifaire, voil?? ce qui vous anime Ngonish !

 Avant tout femme de terrain, elle est proche des clients et reste toujours ?? leur ??coute.<br>

 Motivation pour la satisfaction du client, go??t du challenge et bon relationnel font d'elle une des ambassadrices les plus apr??ci??es de M??diapex.</q>
                        </p>
                        
                    </div>
                </article>-->

<!-------------------------------------- NOS CLIENTS -----------------------------------------
                
                <article style="border:none">
                    <header>
                        <h2>Nos clients</h2>
                        <p>M??diapex sert des clients de toutes tailles et dans tous les secteurs d'activit??.</p>
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

                <article style="background:url(liaisons/images/pattern-vert.png); border:none; width:100%; text-align:center; padding:200px 0; z-index:-10" id="demarrer-projet-origine">
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