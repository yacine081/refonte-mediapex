<?php 
require_once('liaisons/_langues.php');
//require '_recaptchalib.php';
//$secret = '6Lec6PkSAAAAACBiFFNyHnBiQ23ujlMVtNKgKr5h';
?>
<!-- DEMARRER UN PROJET -->
<!--<div class="md-modal md-effect-16" id="modal-16">
	<div class="md-content">
		<h3><?php echo PROJET; ?></h3>-->
		
<?php if(!isset($_POST['projet'])){ ?>
			
							
		<p style="color: #d0d1d3; font-size: 2.7em; font-weight: 300; line-height: 1.3;" class="cacher-click">
			<?php echo DEMARRER_INTRO; ?>
		</p>
		<h2 style="color:#fff; margin: 0 0 29px; font-size: 6.5em" class="titre-demander-projet">
			<?php echo DEMARRER_TITRE; ?>
		</h2>
		<p style="color: #d0d1d3; font-size: 2.7em; font-weight: 300; line-height: 1.3; margin-bottom:50px" class="cacher-click">
			<?php echo DEMARRER_PRESENTATION; ?>
		</p>
		<p class="link-f cacher-click" style="text-align:center">
			<a style="float:none; max-width:150px; margin:0 auto" id="demarrer-projet-accueil"><?php echo DEMARRER_VALIDER; ?></a>
			<!--<div class="g-recaptcha" data-sitekey="6Lec6PkSAAAAAL7XZlBmI6Tc8YTvT5Jv7urSKQTR"></div>-->
		</p>
		
		<div style="padding: 2% 7%; text-align:left; display:none" id="projet">
		<p class="titre-projet">Votre projet concerne quel(s) pôle(s) d'activité ?</p>
			
			<div style="font-size:0">
		 
				 <div class="colonne15" id="projet-digital">
					<div class="box-projet" id="projet-digital-box">
						Digital
					</div>
				 </div>  
				 <div class="colonne15" id="projet-digital-on" style="display:none">
					<div class="box-projet" id="projet-digital-box" style="background:rgba(0,0,0,0.5)">
						Digital
					</div>
				 </div>  

				 <div class="colonne15" id="projet-studio">
					<div class="box-projet" id="projet-studio-box">
						Studio
					</div>
				 </div>  
				 <div class="colonne15" id="projet-studio-on" style="display:none">
					<div class="box-projet" id="projet-studio-box" style="background:rgba(0,0,0,0.5)">
						Studio
					</div>
				 </div>  

				 <div class="colonne15" id="projet-conseil">
					<div class="box-projet" id="projet-conseil-box">
						Conseil
					</div>
				 </div>  
				 <div class="colonne15" id="projet-conseil-on" style="display:none">
					<div class="box-projet" id="projet-conseil-box" style="background:rgba(0,0,0,0.5)">
						Conseil
					</div>
				 </div>  

				 <div class="colonne15" id="projet-events">
					<div class="box-projet" id="projet-events-box">
						Events
					</div>
				 </div>
				 <div class="colonne15" id="projet-events-on" style="display:none">
					<div class="box-projet" id="projet-events-box" style="background:rgba(0,0,0,0.5)">
						Events
					</div>
				 </div>

				 <div class="colonne15" id="projet-impression">
					<div class="box-projet" id="projet-impression-box">
						Impression
					</div>
				 </div>
				 <div class="colonne15" id="projet-impression-on" style="display:none">
					<div class="box-projet" id="projet-impression-box" style="background:rgba(0,0,0,0.5)">
						Impression
					</div>
				 </div>

				<form method="post" id="form-projet">

					 <div class="box-projet-fond" style="display:none" id="projet-digital-choix">
					 <div class="titre">DIGITAL</div>
					 <div style="padding:0 25px">
						<div class="colonne3">
						  <p>
							<input type="checkbox" id="siteInternet" value="Site internet" />
							<label for="siteInternet"><span class="ui"></span>SITE<br>INTERNET</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="communityManagement" value="Community management" />
							<label for="communityManagement"><span class="ui"></span>COMMUNITY<br>MANAGEMENT</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="applicationMobile" value="Application mobile" />
							<label for="applicationMobile"><span class="ui"></span>APPLICATION<br>MOBILE</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="applicationWebLogiciel" value="Application web/logiciel" />
							<label for="applicationWebLogiciel"><span class="ui"></span>APPLICATION WEB<br>LOGICIEL DE BUREAU</label>
						  </p>
						</div>
					</div>
					</div>

					<div class="box-projet-fond" style="display:none" id="projet-studio-choix">
					 <div class="titre">STUDIO</div>
					 <div style="padding:0 25px">
						<div class="colonne3">
						  <p>
							<input type="checkbox" id="reportagePhotoVideo" value="Reportage photo/vidéo" />
							<label for="reportagePhotoVideo"><span class="ui"></span>REPORTAGE<br>PHOTO / VIDEO</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="designLogo" value="Design logo" />
							<label for="designLogo"><span class="ui"></span>DESIGN<br>LOGO</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="charteGraphique" value="Charte graphique" />
							<label for="charteGraphique"><span class="ui"></span>CHARTE<br>GRAPHIQUE</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="designProduitEmballage" value="Design <produit></produit>/emballage" />
							<label for="designProduitEmballage"><span class="ui"></span>DESIGN<br>PRODUIT / EMBALLAGE</label>
						  </p>
						</div>
					</div>
					</div>

					 <div class="box-projet-fond" style="display:none" id="projet-conseil-choix">
					 <div class="titre">CONSEIL</div>
					 <div style="padding:0 25px">
						<div class="colonne3">
						  <p>
							<input type="checkbox" id="conseilMarketing" value="Conseil marketing" />
							<label for="conseilMarketing"><span class="ui"></span>CONSEIL<br>MARKETING</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="strategieDeveloppement" value="Stratégie de développement" />
							<label for="strategieDeveloppement"><span class="ui"></span>STRATEGIE DE<br>DEVELOPPEMENT</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="auditImage" value="Audit d'image" />
							<label for="auditImage"><span class="ui"></span>AUDIT<br>D'IMAGE</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="relationPresse" value="Relation presse" />
							<label for="relationPresse"><span class="ui"></span>RELATION<br>PRESSE</label>
						  </p>
						</div>
					</div>
					</div>

					 <div class="box-projet-fond" style="display:none" id="projet-events-choix">
					 <div class="titre">EVENTS</div>
					 <div style="padding:0 25px">
						<div class="colonne3">
						  <p>
							<input type="checkbox" id="marketingOperationnel" value="Marketing opérationnel" />
							<label for="marketingOperationnel"><span class="ui"></span>MARKETING<br>OPERATIONNEL</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="lancementProduitService" value="Lancement de produit/service" />
							<label for="lancementProduitService"><span class="ui"></span>LANCEMENT DE<br>PRODUIT / SERVICE</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="seminaireSoireeGala" value="Séminaire ou soirée de gala" />
							<label for="seminaireSoireeGala"><span class="ui"></span>SEMINAIRES &<br>SOIREES DE GALA</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="tourneePromotionnelle" value="Tournée promotionnelle" />
							<label for="tourneePromotionnelle"><span class="ui"></span>TOURNEE<br>PROMOTIONNELLE</label>
						  </p>
						</div>
					</div>
					</div>

					 <div class="box-projet-fond" style="display:none" id="projet-impression-choix">
					 <div class="titre">IMPRESSION</div>
					 <div style="padding:0 25px">
						<div class="colonne3">
						  <p>
							<input type="checkbox" id="carteVisite" value="Cartes de visite" />
							<label for="carteVisite"><span class="ui"></span>CARTES DE<br>VISITE</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="flyersDepliants" value="Flyers / dépliants" />
							<label for="flyersDepliants"><span class="ui"></span>FLYERS<br>DEPLIANTS</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="cataloguesMagazines" value="Catalogues / magazines" />
							<label for="cataloguesMagazines"><span class="ui"></span>CATALOGUES<br>MAGAZINES</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="affichesPosters" value="Affiches / posters" />
							<label for="affichesPosters"><span class="ui"></span>AFFICHES<br>POSTERS</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="panneauxPancartes" value="Panneaux / pancartes" />
							<label for="panneauxPancartes"><span class="ui"></span>PANNEAUX<br>PANCARTES</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="bachesBanderoles" value="Bâches / banderoles" />
							<label for="bachesBanderoles"><span class="ui"></span>BACHES<br>BANDEROLES</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="cartesDiverses" value="Cartes diverses" />
							<label for="cartesDiverses"><span class="ui"></span>CARTES<br>DIVERSES</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="chemisesPorteDocuments" value="Chemises porte-documents" />
							<label for="chemisesPorteDocuments"><span class="ui"></span>CHEMISES<br>PORTE-DOCUMENTS</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="rollUpsStands" value="Roll-ups / stands" />
							<label for="rollUpsStands"><span class="ui"></span>ROLL-UPS<br>STANDS</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="papierEnTete" value="Papier à en-tête" />
							<label for="papierEnTete"><span class="ui"></span>PAPIER A<br>EN-TETE</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="enveloppesPersonnalisees" value="Enveloppes personnalisées" />
							<label for="enveloppesPersonnalisees"><span class="ui"></span>ENVELOPPES<br>PERSONNALISEES</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="stylosPublicitaires" value="Stylos publicitaires" />
							<label for="stylosPublicitaires"><span class="ui"></span>STYLOS<br>PUBLICITAIRES</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="calendriersMurauxChavalets" value="Calendriers muraux / chevalets" />
							<label for="calendriersMurauxChavalets"><span class="ui"></span>CALENDRIERS<br>MURAUX / CHEVALETS</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="tassesMugs" value="Tasses / mugs" />
							<label for="tassesMugs"><span class="ui"></span>TASSES<br>MUGS</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="porteClesUsb" value="Porte-clés & clés USB" />
							<label for="porteClesUsb"><span class="ui"></span>PORTE-CLES<br>CLES USB</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="blocNotesAgendas" value="Blocs-notes / agendas" />
							<label for="blocNotesAgendas"><span class="ui"></span>BLOCS-NOTES<br>AGENDAS</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="tshirtsPolosCasquettes" value="T-shirts, polos / casquettes" />
							<label for="tshirtsPolosCasquettes"><span class="ui"></span>T-SHIRTS / POLOS<br>CASQUETTES</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="sacKraft" value="Sacs en papier kraft" />
							<label for="sacKraft"><span class="ui"></span>SACS EN<br>PAPIER KRAFT</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="etiquettesAutocollants" value="Etiquettes / autocollants" />
							<label for="etiquettesAutocollants"><span class="ui"></span>ETIQUETTES<br>AUTOCOLLANTS</label>
						  </p>
						</div><div class="colonne3">
						  <p>
							<input type="checkbox" id="drapeauxEnseignes" value="Drapeaux / enseignes" />
							<label for="drapeauxEnseignes"><span class="ui"></span>DRAPEAUX<br>ENSEIGNES</label>
						  </p>
						</div>
					</div>
					</div>

					<div style="padding-top:30px; text-align:center">
						<button type="reset" class="bouton-blanc" id="annuler-projet" style="margin:0 15px">Annuler</button>
						<button type="submit" class="bouton-bleu" id="suivant-projet" style="margin:0 15px; display:none">Suivant</button>					
					</div>


				</form>

			</div>
		
		</div>
		
		
		
<?php } elseif(isset($_POST['projet']) && $_POST['projet'] == 'suivant'){ ?>
	
	
	
		<div style="text-align:left; color: #e6e6e7; font-size: 1.2em; font-weight: 300; line-height: 1.2; width:70%; padding:0 15%; display: inline-block;">
		
			<div class="colonne5">
				<div style="padding-right:5%; margin-bottom:25px">
					<h2 style="color:#fff; font-size: 3em">Envoyez le projet</h2>
					<p style="font-weight:700; color:#1f2837; font-size:1.7em">Vous venez de sélectionner les produits/services suivants :</p>
					<ul>
						<?php 
						// Digital
						if(isset($_POST['siteInternet'])){echo '<li>'.$_POST['siteInternet'].'</li>';}
						if(isset($_POST['communityManagement'])){echo '<li>'.$_POST['communityManagement'].'</li>';}
						if(isset($_POST['applicationMobile'])){echo '<li>'.$_POST['applicationMobile'].'</li>';}
						if(isset($_POST['applicationWebLogiciel'])){echo '<li>'.$_POST['applicationWebLogiciel'].'</li>';}
						// Studio
						if(isset($_POST['reportagePhotoVideo'])){echo '<li>'.$_POST['reportagePhotoVideo'].'</li>';}
						if(isset($_POST['designLogo'])){echo '<li>'.$_POST['designLogo'].'</li>';}
						if(isset($_POST['charteGraphique'])){echo '<li>'.$_POST['charteGraphique'].'</li>';}
						if(isset($_POST['designProduitEmballage'])){echo '<li>'.$_POST['designProduitEmballage'].'</li>';}
						// Conseil
						if(isset($_POST['conseilMarketing'])){echo '<li>'.$_POST['conseilMarketing'].'</li>';}
						if(isset($_POST['strategieDeveloppement'])){echo '<li>'.$_POST['strategieDeveloppement'].'</li>';}
						if(isset($_POST['auditImage'])){echo '<li>'.$_POST['auditImage'].'</li>';}
						if(isset($_POST['relationPresse'])){echo '<li>'.$_POST['relationPresse'].'</li>';}
						// Events
						if(isset($_POST['marketingOperationnel'])){echo '<li>'.$_POST['marketingOperationnel'].'</li>';}
						if(isset($_POST['lancementProduitService'])){echo '<li>'.$_POST['lancementProduitService'].'</li>';}
						if(isset($_POST['seminaireSoireeGala'])){echo '<li>'.$_POST['seminaireSoireeGala'].'</li>';}
						if(isset($_POST['tourneePromotionnelle'])){echo '<li>'.$_POST['tourneePromotionnelle'].'</li>';}
						// Impression
						if(isset($_POST['carteVisite'])){echo '<li>'.$_POST['carteVisite'].'</li>';}
						if(isset($_POST['flyersDepliants'])){echo '<li>'.$_POST['flyersDepliants'].'</li>';}
						if(isset($_POST['cataloguesMagazines'])){echo '<li>'.$_POST['cataloguesMagazines'].'</li>';}
						if(isset($_POST['affichesPosters'])){echo '<li>'.$_POST['affichesPosters'].'</li>';}
						if(isset($_POST['panneauxPancartes'])){echo '<li>'.$_POST['panneauxPancartes'].'</li>';}
						if(isset($_POST['bachesBanderoles'])){echo '<li>'.$_POST['bachesBanderoles'].'</li>';}
						if(isset($_POST['cartesDiverses'])){echo '<li>'.$_POST['cartesDiverses'].'</li>';}
						if(isset($_POST['chemisesPorteDocuments'])){echo '<li>'.$_POST['chemisesPorteDocuments'].'</li>';}
						if(isset($_POST['rollUpsStands'])){echo '<li>'.$_POST['rollUpsStands'].'</li>';}
						if(isset($_POST['papierEnTete'])){echo '<li>'.$_POST['papierEnTete'].'</li>';}
						if(isset($_POST['enveloppesPersonnalisees'])){echo '<li>'.$_POST['enveloppesPersonnalisees'].'</li>';}
						if(isset($_POST['stylosPublicitaires'])){echo '<li>'.$_POST['stylosPublicitaires'].'</li>';}
						if(isset($_POST['calendriersMurauxChavalets'])){echo '<li>'.$_POST['calendriersMurauxChavalets'].'</li>';}
						if(isset($_POST['tassesMugs'])){echo '<li>'.$_POST['tassesMugs'].'</li>';}
						if(isset($_POST['porteClesUsb'])){echo '<li>'.$_POST['porteClesUsb'].'</li>';}
						if(isset($_POST['blocNotesAgendas'])){echo '<li>'.$_POST['blocNotesAgendas'].'</li>';}
						if(isset($_POST['tshirtsPolosCasquettes'])){echo '<li>'.$_POST['tshirtsPolosCasquettes'].'</li>';}
						if(isset($_POST['sacKraft'])){echo '<li>'.$_POST['sacKraft'].'</li>';}
						if(isset($_POST['etiquettesAutocollants'])){echo '<li>'.$_POST['etiquettesAutocollants'].'</li>';}
						if(isset($_POST['drapeauxEnseignes'])){echo '<li>'.$_POST['drapeauxEnseignes'].'</li>';}
						?>
					</ul>
					<p style="font-weight:700; color:#1f2837; font-size:1.7em">Nous vous prions de bien vouloir nous laisser vos coordonnées afin qu'un conseiller puisse prendre en charge votre dossier et vous contacter dans les meilleurs délais.</p>
				</div>
			</div><div class="colonne7 last">
				
				<form method="post" id="form-projet-envoyer">
					<p class="colonne6">
						<label for="prenomNom">Prénom et nom</label>
						<input type="text" id="prenomNom" required>
					</p>
					<p class="colonne6 last">
						<label for="adresseEmail">Adresse Email</label>
						<input type="email" id="adresseEmail" required>
					</p>
					<p class="colonne6">
						<label for="telephone">Téléphone</label>
						<input type="text" id="telephone" required>
					</p>
					<p class="colonne6 last">
						<label for="entreprise">Entreprise</label>
						<input type="text" id="entreprise">
					</p>
					<p>
						<label for="complement">Compléments d'information sur le projet</label>
						<textarea id="complement" rows="5" required style="width:95%; border:none"></textarea>
					</p>
						<textarea id="selection" rows="5" required style="display:none"><ul>
							<?php 
							// Digital
							if(isset($_POST['siteInternet'])){echo '<li>'.$_POST['siteInternet'].'</li>';}
							if(isset($_POST['communityManagement'])){echo '<li>'.$_POST['communityManagement'].'</li>';}
							if(isset($_POST['applicationMobile'])){echo '<li>'.$_POST['applicationMobile'].'</li>';}
							if(isset($_POST['applicationWebLogiciel'])){echo '<li>'.$_POST['applicationWebLogiciel'].'</li>';}
							// Studio
							if(isset($_POST['reportagePhotoVideo'])){echo '<li>'.$_POST['reportagePhotoVideo'].'</li>';}
							if(isset($_POST['designLogo'])){echo '<li>'.$_POST['designLogo'].'</li>';}
							if(isset($_POST['charteGraphique'])){echo '<li>'.$_POST['charteGraphique'].'</li>';}
							if(isset($_POST['designProduitEmballage'])){echo '<li>'.$_POST['designProduitEmballage'].'</li>';}
							// Conseil
							if(isset($_POST['conseilMarketing'])){echo '<li>'.$_POST['conseilMarketing'].'</li>';}
							if(isset($_POST['strategieDeveloppement'])){echo '<li>'.$_POST['strategieDeveloppement'].'</li>';}
							if(isset($_POST['auditImage'])){echo '<li>'.$_POST['auditImage'].'</li>';}
							if(isset($_POST['relationPresse'])){echo '<li>'.$_POST['relationPresse'].'</li>';}
							// Events
							if(isset($_POST['marketingOperationnel'])){echo '<li>'.$_POST['marketingOperationnel'].'</li>';}
							if(isset($_POST['lancementProduitService'])){echo '<li>'.$_POST['lancementProduitService'].'</li>';}
							if(isset($_POST['seminaireSoireeGala'])){echo '<li>'.$_POST['seminaireSoireeGala'].'</li>';}
							if(isset($_POST['tourneePromotionnelle'])){echo '<li>'.$_POST['tourneePromotionnelle'].'</li>';}
							// Impression
							if(isset($_POST['carteVisite'])){echo '<li>'.$_POST['carteVisite'].'</li>';}
							if(isset($_POST['flyersDepliants'])){echo '<li>'.$_POST['flyersDepliants'].'</li>';}
							if(isset($_POST['cataloguesMagazines'])){echo '<li>'.$_POST['cataloguesMagazines'].'</li>';}
							if(isset($_POST['affichesPosters'])){echo '<li>'.$_POST['affichesPosters'].'</li>';}
							if(isset($_POST['panneauxPancartes'])){echo '<li>'.$_POST['panneauxPancartes'].'</li>';}
							if(isset($_POST['bachesBanderoles'])){echo '<li>'.$_POST['bachesBanderoles'].'</li>';}
							if(isset($_POST['cartesDiverses'])){echo '<li>'.$_POST['cartesDiverses'].'</li>';}
							if(isset($_POST['chemisesPorteDocuments'])){echo '<li>'.$_POST['chemisesPorteDocuments'].'</li>';}
							if(isset($_POST['rollUpsStands'])){echo '<li>'.$_POST['rollUpsStands'].'</li>';}
							if(isset($_POST['papierEnTete'])){echo '<li>'.$_POST['papierEnTete'].'</li>';}
							if(isset($_POST['enveloppesPersonnalisees'])){echo '<li>'.$_POST['enveloppesPersonnalisees'].'</li>';}
							if(isset($_POST['stylosPublicitaires'])){echo '<li>'.$_POST['stylosPublicitaires'].'</li>';}
							if(isset($_POST['calendriersMurauxChavalets'])){echo '<li>'.$_POST['calendriersMurauxChavalets'].'</li>';}
							if(isset($_POST['tassesMugs'])){echo '<li>'.$_POST['tassesMugs'].'</li>';}
							if(isset($_POST['porteClesUsb'])){echo '<li>'.$_POST['porteClesUsb'].'</li>';}
							if(isset($_POST['blocNotesAgendas'])){echo '<li>'.$_POST['blocNotesAgendas'].'</li>';}
							if(isset($_POST['tshirtsPolosCasquettes'])){echo '<li>'.$_POST['tshirtsPolosCasquettes'].'</li>';}
							if(isset($_POST['sacKraft'])){echo '<li>'.$_POST['sacKraft'].'</li>';}
							if(isset($_POST['etiquettesAutocollants'])){echo '<li>'.$_POST['etiquettesAutocollants'].'</li>';}
							if(isset($_POST['drapeauxEnseignes'])){echo '<li>'.$_POST['drapeauxEnseignes'].'</li>';}
							?></ul>
						</textarea>
					<p>
						<!--<div class="g-recaptcha" data-sitekey="6Lec6PkSAAAAAL7XZlBmI6Tc8YTvT5Jv7urSKQTR"></div>-->
						<button type="submit" class="bouton-bleu" style="float:left; color:#fff; margin-top:25px">Valider et envoyer</button>
					</p>
				</form>
				
			</div>
			
		</div>		
		
		
		
<?php } elseif(isset($_POST['projet']) && $_POST['projet'] == 'envoyer'){ ?>
	
	
		
		<?php 
		if(!empty($_POST['prenomNom']) && !empty($_POST['adresseEmail']) && !empty($_POST['telephone']) && !empty($_POST['complement']) && !empty($_POST['selection']))
		{
			require('__bdd.php');

			// ENREGISTRER LE PROJET DANS LA BDD
			$req = $bdd->prepare('INSERT INTO mediapex_projets (prenomNom, adresseEmail, telephone, entreprise, complement, selection) VALUES(:prenomNom, :adresseEmail, :telephone, :entreprise, :complement, :selection)');
			$req->execute(array(
			'prenomNom' => strip_tags($_POST['prenomNom']),
			'adresseEmail' => strip_tags($_POST['adresseEmail']),
			'telephone' => strip_tags($_POST['telephone']),
			'entreprise' => strip_tags($_POST['entreprise']),
			'complement' => strip_tags($_POST['complement']),
			'selection' => $_POST['selection']
			));
			
			// ENVOYER UN MAIL AUX DEUX PARTIES
			include '_envoyerEmail.function.php';
			$destinataire = 'info@mediapex.net';
			$nomEmetteur = strip_tags($_POST['prenomNom']);
			$emailEmetteur = 'info@mediapex.net';
			$sujetEmail = 'Nouveau projet envoyé à partir du site';
			$contenuEmail = '';
			envoyerEmail($destinataire, $nomEmetteur, $emailEmetteur, $sujetEmail, $contenuEmail); // pour Médiapex
			$destinataire = strip_tags($_POST['adresseEmail']);
			$nomEmetteur = 'Médiapex';
			$emailEmetteur = 'info@mediapex.net';
			$sujetEmail = 'Nous avons recu votre projet !';
			$contenuEmail = '';
			envoyerEmail($destinataire, $nomEmetteur, $emailEmetteur, $sujetEmail, $contenuEmail); // Pour le client
			
			?>
			<img src="liaisons/images/valide.png" width="50px"><br><br>
			<p style="color: #d0d1d3; font-size: 2.7em; font-weight: 300; line-height: 1.3;">
				<?php echo DEMARRER_INTRO_ENVOI_OK; ?> <?php echo $_POST['prenomNom']; ?>
			</p>
			<h2 style="color:#fff; margin: 0 0 29px; font-size: 6.5em">
				<?php echo DEMARRER_TITRE_ENVOI_OK; ?>
			</h2>
			<p style="color: #d0d1d3; font-size: 2.7em; font-weight: 300; line-height: 1.3; margin-bottom:50px; padding:0 20%">
				<?php echo DEMARRER_PRESENTATION_ENVOI_OK; ?>
			</p>
		
		<?php } else { ?>
		
			<h2 style="color:#fff; margin: 0 0 29px; font-size: 6.5em">
				Erreur
			</h2>
			<p style="color: #d0d1d3; font-size: 2.7em; font-weight: 300; line-height: 1.3;">
				Vous n'avez pas rempli tous les champs obligatoires !
			</p>
			
		<?php }	?>
				
		
		
<?php } ?>

		
	<!--</div>
</div>-->


<script type="text/javascript">

// DEMARRE LE PROJET
$('#demarrer-projet-accueil').click(function(){
	$('#projet').slideDown();
	$('.cacher-click').slideUp();
	$('#demarrer-projet-origine').animate({'padding': '100px 0'}, 400);
	$('.titre-demander-projet').animate({'font-size': '3em', 'margin': '0'}, 400);
});

// ANNULER LE PROJET
$('#annuler-projet').click(function(){
	$('#projet').slideUp();
	$('.cacher-click').slideDown();
	$('#demarrer-projet-origine').animate({'padding': '150px 0'}, 400);
	$('.titre-demander-projet').animate({'font-size': '6.5em', 'margin': '0 0 29px'}, 400);
	$('#projet-digital-choix').slideUp();
	$('#projet-digital-on').hide();
	$('#projet-digital').show();
	$('#projet-studio-choix').slideUp();
	$('#projet-studio-on').hide();
	$('#projet-studio').show();
	$('#projet-conseil-choix').slideUp();
	$('#projet-conseil-on').hide();
	$('#projet-conseil').show();
	$('#projet-events-choix').slideUp();
	$('#projet-events-on').hide();
	$('#projet-events').show();
	$('#projet-impression-choix').slideUp();
	$('#projet-impression-on').hide();
	$('#projet-impression').show();
	$('#suivant-projet').hide();
	$('.titre-projet').slideDown();
});

// AFFICHER LES FORMUMAIRES DES DIFFERENTS PÔLES
$('#projet-digital').click(function(){
	$('#projet-digital-choix').slideDown();
	$('#projet-digital-on').show();
	$('#projet-digital').hide();
	$('.titre-projet').slideUp();
});
$('#projet-digital-on').click(function(){
	$('#projet-digital-choix').slideUp();
	$('#projet-digital-on').hide();
	$('#projet-digital').show();
});

$('#projet-studio').click(function(){
	$('#projet-studio-choix').slideDown();
	$('#projet-studio-on').show();
	$('#projet-studio').hide();
	$('.titre-projet').slideUp();
});
$('#projet-studio-on').click(function(){
	$('#projet-studio-choix').slideUp();
	$('#projet-studio-on').hide();
	$('#projet-studio').show();
});

$('#projet-conseil').click(function(){
	$('#projet-conseil-choix').slideDown();
	$('#projet-conseil-on').show();
	$('#projet-conseil').hide();
	$('.titre-projet').slideUp();
});
$('#projet-conseil-on').click(function(){
	$('#projet-conseil-choix').slideUp();
	$('#projet-conseil-on').hide();
	$('#projet-conseil').show();
});

$('#projet-events').click(function(){
	$('#projet-events-choix').slideDown();
	$('#projet-events-on').show();
	$('#projet-events').hide();
	$('.titre-projet').slideUp();
});
$('#projet-events-on').click(function(){
	$('#projet-events-choix').slideUp();
	$('#projet-events-on').hide();
	$('#projet-events').show();
});

$('#projet-impression').click(function(){
	$('#projet-impression-choix').slideDown();
	$('#projet-impression-on').show();
	$('#projet-impression').hide();
	$('.titre-projet').slideUp();
});
$('#projet-impression-on').click(function(){
	$('#projet-impression-choix').slideUp();
	$('#projet-impression-on').hide();
	$('#projet-impression').show();
});
	
// AFFICHER LE BOUTON SUIVANT
$('input').change(function (){
	var nbrAffichage = $('input:checked').length;
	if(nbrAffichage > 0){
		$('#suivant-projet').show();
	} else{
		$('#suivant-projet').hide();
	}
});

// PASSER A LA 2e ETAPE
$('#form-projet').submit(function(){
	var siteInternet = $("#siteInternet:checked").val();
	var communityManagement = $("#communityManagement:checked").val();
	var applicationMobile = $("#applicationMobile:checked").val();
	var applicationWebLogiciel = $("#applicationWebLogiciel:checked").val();
	var reportagePhotoVideo = $("#reportagePhotoVideo:checked").val();
	var designLogo = $("#designLogo:checked").val();
	var charteGraphique = $("#charteGraphique:checked").val();
	var designProduitEmballage = $("#designProduitEmballage:checked").val();
	var conseilMarketing = $("#conseilMarketing:checked").val();
	var strategieDeveloppement = $("#strategieDeveloppement:checked").val();
	var auditImage = $("#auditImage:checked").val();
	var relationPresse = $("#relationPresse:checked").val();
	var marketingOperationnel = $("#marketingOperationnel:checked").val();
	var lancementProduitService = $("#lancementProduitService:checked").val();
	var seminaireSoireeGala = $("#seminaireSoireeGala:checked").val();
	var tourneePromotionnelle = $("#tourneePromotionnelle:checked").val();
	var carteVisite = $("#carteVisite:checked").val();
	var flyersDepliants = $("#flyersDepliants:checked").val();
	var cataloguesMagazines = $("#cataloguesMagazines:checked").val();
	var affichesPosters = $("#affichesPosters:checked").val();
	var panneauxPancartes = $("#panneauxPancartes:checked").val();
	var bachesBanderoles = $("#bachesBanderoles:checked").val();
	var cartesDiverses = $("#cartesDiverses:checked").val();
	var chemisesPorteDocuments = $("#chemisesPorteDocuments:checked").val();
	var rollUpsStands = $("#rollUpsStands:checked").val();
	var papierEnTete = $("#papierEnTete:checked").val();
	var enveloppesPersonnalisees = $("#enveloppesPersonnalisees:checked").val();
	var stylosPublicitaires = $("#stylosPublicitaires:checked").val();
	var calendriersMurauxChavalets = $("#calendriersMurauxChavalets:checked").val();
	var tassesMugs = $("#tassesMugs:checked").val();
	var porteClesUsb = $("#porteClesUsb:checked").val();
	var blocNotesAgendas = $("#blocNotesAgendas:checked").val();
	var tshirtsPolosCasquettes = $("#tshirtsPolosCasquettes:checked").val();
	var sacKraft = $("#sacKraft:checked").val();
	var etiquettesAutocollants = $("#etiquettesAutocollants:checked").val();
	var drapeauxEnseignes = $("#drapeauxEnseignes:checked").val();
	var projet = 'suivant';

	$.post('_demarrer-projet.php', {siteInternet:siteInternet, communityManagement:communityManagement, applicationMobile:applicationMobile, applicationWebLogiciel:applicationWebLogiciel, reportagePhotoVideo:reportagePhotoVideo, designLogo:designLogo, charteGraphique:charteGraphique, designProduitEmballage:designProduitEmballage, conseilMarketing:conseilMarketing, strategieDeveloppement:strategieDeveloppement, auditImage:auditImage, relationPresse:relationPresse, 	marketingOperationnel:marketingOperationnel, lancementProduitService:lancementProduitService, seminaireSoireeGala:seminaireSoireeGala, tourneePromotionnelle:tourneePromotionnelle, carteVisite:carteVisite, flyersDepliants:flyersDepliants, cataloguesMagazines:cataloguesMagazines, affichesPosters:affichesPosters, panneauxPancartes:panneauxPancartes, bachesBanderoles:bachesBanderoles, cartesDiverses:cartesDiverses, chemisesPorteDocuments:chemisesPorteDocuments, rollUpsStands:rollUpsStands, papierEnTete:papierEnTete, enveloppesPersonnalisees	:enveloppesPersonnalisees, stylosPublicitaires:stylosPublicitaires, calendriersMurauxChavalets:calendriersMurauxChavalets, tassesMugs:tassesMugs, porteClesUsb:porteClesUsb, blocNotesAgendas:blocNotesAgendas, tshirtsPolosCasquettes:tshirtsPolosCasquettes, sacKraft	:sacKraft, etiquettesAutocollants:etiquettesAutocollants, drapeauxEnseignes:drapeauxEnseignes, projet:projet}, function(donnees){
		$('#demarrer-projet-origine').html(donnees);
	});
return false;	
});
	
// ENVOYER LE PROJET
$('#form-projet-envoyer').submit(function(){
	var prenomNom = $("#prenomNom").val();
	var adresseEmail = $("#adresseEmail").val();
	var telephone = $("#telephone").val();
	var entreprise = $("#entreprise").val();
	var complement = $("#complement").val();
	var selection = $("#selection").val();
	var projet = 'envoyer';

	$.post('_demarrer-projet.php', {prenomNom:prenomNom, adresseEmail:adresseEmail, telephone:telephone, entreprise:entreprise, complement:complement, selection:selection, projet:projet}, function(donnees){
		$('#demarrer-projet-origine').html(donnees);
	});
return false;	
});
		
			
$(document).ready(function(){
	

	// MODIFIER UN ACTIONNAIRE
	$('body').delegate('.modifier', 'click', function(){
		var id_tier = $(this).attr('id');
		$.get('app/actionnariat/les-actionnaires/modifier.php', {m:id_tier}, function(donnees){
			$('.modalMoyen').html(donnees).slideDown();
		});
	});
	
	
	
	// SUPPRIMER UN ACTIONNAIRE
	$('body').delegate('.supprimer', 'click', function(){
		var id_tier = $(this).attr('id');
		$.get('app/actionnariat/les-actionnaires/supprimer.php', {s:id_tier}, function(donnees){
			$('.modalPetit').html(donnees).slideDown();
		});
	});
	
	$('body').delegate('.supprimer2', 'click', function(){
		var id_tier = $(this).attr('id');
		$.get('app/actionnariat/les-actionnaires/supprimer.php', {ss:id_tier}, function(donnees){
			$('.modalPetit').html(donnees).slideDown();
			//afficher les actionnaires
			$.post('app/actionnariat/les-actionnaires/afficher.php', function(liste){
				$('#liste-actionnaires').html(liste);
				afficherNbrActionnaires();
			});
		});
	});

	
});

				
</script>