<?php

function envoyerEmail($_destinataire, $_nomEmetteur, $_emailEmetteur, $_sujetEmail, $_contenuEmail){

	if(!empty($_destinataire) && !empty($_nomEmetteur) && !empty($_emailEmetteur) && !empty($_sujetEmail) && !empty($_contenuEmail))
	{
		$mail = $_destinataire; // Déclaration de l'adresse de destination.
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn|outlook).[a-z]{2,4}$#", $mail)) // On filtre les serveurs qui rencontrent des bogues.
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}
		//=====Déclaration des messages au format texte et au format HTML.
		$message_txt = nl2br(strip_tags($_contenuEmail));
		$message_html = $_contenuEmail;
		//==========

		//=====Création de la boundary
		$boundary = "-----=".md5(rand());
		//==========

		//=====Définition du sujet.
		$sujet = $_sujetEmail;
		//=========

		//=====Création du header de l'e-mail.
		$header = "From: \"$_nomEmetteur\"<$_emailEmetteur>".$passage_ligne;
		$header.= "Reply-to: \"$_nomEmetteur\" <$_emailEmetteur>".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		//==========

		//=====Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"UTF-8\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_html.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		//==========

		//=====Envoi de l'e-mail.
		mail($mail,$sujet,$message,$header);
		//==========

	}
}

/* ------------------------------------ UTILISATION ------------------------------------

include 'envoyerEmail.function.php';

$destinataire = '';
$nomEmetteur = '';
$emailEmetteur = '';
$sujetEmail = '';
$contenuEmail = '';
envoyerEmail($destinataire, $nomEmetteur, $emailEmetteur, $sujetEmail, $contenuEmail);

*/