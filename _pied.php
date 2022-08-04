            <footer id="footer">
                <div>
                    <article class="vcard">
                        <h3 class="fn org"><img src="liaisons/images/logo-footer.png" alt="Médiapex" style="max-width:120% !important; max-height:80px"></h3>
                        <p style="color:#FFF !important;">Copyright &copy; 2009 - <?php echo date('Y'); ?> MEDIAPEX SARL <?php echo DROITS; ?></p>
                        
						<?php 
						$page = substr(basename($_SERVER['PHP_SELF']),0,-4); 
						if($page == 'index'){$page = 'accueil';}
						
						if(isset($lang) && $lang=='en'){ ?>
                        
                        <ul class="list-select-a">
                            <li><span><i class="icon-basic" data-icon="&#xe028;"></i> English</span>
                                <ul>
                                	<?php if($page == 'references-client'){ ?>
                                    	<li><a href="references-client-<?php echo $_GET['client']; ?>-fr"><i class="icon-basic" data-icon="&#xe028;"></i>Français</a></li>
                                	<?php } else { ?>
                                    	<li><a href="<?php echo $page; ?>?langue=fr"><i class="icon-basic" data-icon="&#xe028;"></i>Français</a></li>
                                	<?php } ?>
                                </ul>
                            </li>
                        </ul>
                        
                        <?php } else { ?>
                        
                        <ul class="list-select-a">
                            <li><span><i class="icon-basic" data-icon="&#xe028;"></i> Français</span>
                                <ul>
                                	<?php if($page == 'references-client'){ ?>
                                    	<li><a href="references-client-<?php echo $_GET['client']; ?>-en"><i class="icon-basic" data-icon="&#xe028;"></i>English</a></li>
                                	<?php } else { ?>
                                    	<li><a href="<?php echo $page; ?>?langue=en"><i class="icon-basic" data-icon="&#xe028;"></i>English</a></li>
                                	<?php } ?>
                                </ul>
                            </li>
                        </ul>
                        
                        <?php } ?>
                        
                    </article>
                    <nav>
                        <div>
                            <ul>
                                <li style="text-transform:uppercase; color:#068c94; font-size:1.5em"><?php echo EXPLORER; ?></li>
                                <li><a href="accueil"><?php echo ACCUEIL; ?></a></li>
                                <li><a href="produits-services"><?php echo SERVICES; ?></a></li>
                                	<ul style="margin-left:15px; margin-bottom:10px; list-style:initial; font-weight:300; font-family:'Open Sans'">
                                		<li style="margin:0"><a href="mediapex-digital">Médiapex Digital</a></li>
                                		<li style="margin:0"><a href="mediapex-studio">Médiapex Studio</a></li>
                                		<li style="margin:0"><a href="mediapex-conseil">Médiapex Conseil</a></li>
                                		<li style="margin:0"><a href="mediapex-events">Médiapex Events</a></li>
                                		<li style="margin:0"><a href="mediapex-impressions">Médiapex Impressions</a></li>
                                	</ul>
                                <li><a href="references"><?php echo PORTFOLIO; ?></a></li>
                                <li><a href="contact"><?php echo CONTACT; ?></a></li>
                                <li><br><a href="sitemap" style="background:#068c94; color:#fff; border-radius:5px; padding:7px 15px; font-size:1.1em;"><?php echo SITEMAP; ?></a>
                                </li>
                            </ul>
                        </div>
                        <div>
                            <ul class="social">
                                <li style="text-transform:uppercase; color:#068c94; font-size:1.5em"><?php echo NOUSSUIVRE; ?></li>
                                <li class="fb"><a href="https://www.facebook.com/mediapex.net" target="_blank">Facebook</a></li>
                                <li class="dr"><a href="https://www.instagram.com/mediapex/" target="_blank">Instagram</a></li>
                                <li class="tw"><a href="https://twitter.com/mediapex" target="_blank">Twitter</a></li>
                                <li class="gl"><a href="https://plus.google.com/+M%C3%A9diapexDakar" target="_blank">Google+</a></li>
                                <li class="li"><a href="https://www.linkedin.com/company/mediapex" target="_blank">LinkedIn</a></li>
                            </ul>
                            <ul>
                                <li style="text-transform:uppercase; color:#068c94; font-size:1.5em"><?php echo PRIVE; ?></li>
                                <li><a href="admin" target="_blank">Administration</a></li>
                                <li><a href="https://mediapex.net/newsletter" target="_blank">Newsletter</a></li>
                            </ul>
                        </div>
                    </nav>

                    <form action='https://mediapex.net/newsletter/subscription.php' method='post' target='pmnlwindow' onsubmit="window.open('/newsletter/subscription.php', 'pmnlwindow', 'scrollbars=no,width=600,height=230');return true">
						<!--<a href="https://projets.mediapex.net" target="_blank" style="top:0; position:absolute">
							<img src="liaisons/images/lien-apexproject-<?php echo $lang; ?>.png" style="width:100%; max-width:100%; max-height:91px">
						</a>-->
                       <div style="background:#068c94; padding:10px 10px 5px 15px; border-radius:5px; font-size:1.4em; font-weight:400; line-height:1.2em; color:#fff; font-family:'Montserrat'; top:0; position:absolute">
                       		<div style="font-size:1.6em; line-height:1.5em; font-weight:700">ApexProject</div>
                       		<div style="font-family:'Open Sans'"><?php echo APEXPROJECTTXT; ?></div>
                       		<br>
                       		<a href="https://projets.mediapex.net" target="_blank" style="background:#fff; color:#068c94; border-radius:5px; padding:7px 15px; font-size:1.1em;"><?php echo APEXPROJECTBTN; ?></a>
                       		<br>
                       		<br>
                       </div>
                        <fieldset>
                            <legend style="text-transform:uppercase; color:#068c94; font-size:1.5em; position:relative; top:140px"><?php echo NEWSLETTER; ?></legend>
                            <p style="top:130px">
                                <label for="na"><i class="icon-basic" data-icon="&"></i> Email</label>
                                <input type='text' name='email_addr' value='' size='30' placeholder='Email' style="background:#293241">
                                <input type='hidden' name='list_id' value='1'>
                                <input type='hidden' name='op' value='join'>
                                <button type="submit"><?php echo NEWSLETTERBTN; ?></button>
                    			<br>
                    			<br>
                            </p>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                            <br>
                        </fieldset>
                    </form>

                </div>
            </footer>

		<!--</div> fermeture id="root" -->
		
		<script type="text/javascript">
			head.load('liaisons/javascript/jquery.js','liaisons/javascript/scripts.js','liaisons/javascript/mobile.js')
		</script>
		
		
		<!--<div class="md-overlay"></div><!-- the overlay element -->

		<!-- classie.js by @desandro: https://github.com/desandro/classie -->
		<!--<script src="liaisons/popup/js/classie.js"></script>
		<script src="liaisons/popup/js/modalEffects.js"></script>-->

		<!-- for the blur effect -->
		<!-- by @derSchepp https://github.com/Schepp/CSS-Filters-Polyfill -->
		<!--<script>
			// this is important for IEs
			var polyfilter_scriptpath = '/liaisons/popup/js/';
		</script>
		<script src="liaisons/popup/js/cssParser.js"></script>
		<script src="liaisons/popup/js/css-filters-polyfill.js"></script>-->


		<!-- Google Analytics -->
		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-38649200-4', 'auto');
		  ga('send', 'pageview');

		</script>


		<!--[if gte IE 9]><!-->
		<script src="liaisons/particle-slider/jquery.min.js"></script>
		<!--<![endif]-->
		<script src="liaisons/particle-slider/main.min.js"></script>

		<script type="text/javascript">

		//$(document).ready(function(){

			$('#ajax-loading').show();

			// AFFICHER LA BOITE DEMARRER UN PROJET
			function demarrerProjet()
			{
				$('#ajax-loading').show();
					$.post('_demarrer-projet.php', function(liste){
					$('#demarrer-projet-origine').html(liste);
					$('#ajax-loading').hide();
				});
			}
			
			// AFFICHER LES COORDONNEES
			function coordonneesProjet()
			{
				$('#ajax-loading').show();
					$.post('_demarrer-projet.php', function(liste){
					$('#demarrer-projet-origine').html(liste);
					$('#ajax-loading').hide();
				});
			}

			window.onload = function() {
				demarrerProjet();
			};

		//});
				
		</script>