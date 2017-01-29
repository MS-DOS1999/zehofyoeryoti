<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="icon" href="img/cpu2.png" />
    <title>PorteFolio Julien MAGNIN</title>
	<link rel="stylesheet" type="text/css" href="style.css"></head>
<body>
	<div class="container">
		<div class="topCase">
			<div class="topMenu">
				<img class="logoJM" src="img/cpu2.png" alt="logoJM"/>
				<div class="menuName">
					<p class="myname">Julien <span class="nom"><strong>MAGNIN</strong></span></br><span class="spec"><em>Developpeur</em></span></p>
					<div class="menuButtonContainer">
						<div class="menuButton1">
							<a class="lienButton" href="index.php">
							<img class="icon" src="icon/home.png" alt="home" />
							<p class="textIcon">HOME</p>
							</a>
						</div>
						<div class="menuButton2">
							<a class="lienButton" href="#">
							<img class="icon" src="icon/projet.png" alt="projet" />
							<p class="textIcon">PROJETS</p>
							</a>
						</div>
						<div class="unusedButton">
							<div>
							<img class="icon" src="icon/contact.png" alt="contact" />
							<p class="textIcon">CONTACT</p>
							</div>
						</div>
						<div class="menuButton4">
							<div class="lienButton" id="buttonReseaux">
							<img class="icon" src="icon/social.png" alt="social" />
							<p class="textIcon">R&Eacute;SEAUX</p>
							</div>
							<div class="deroulReseaux">
								<div class="lienReseaux"><a href="https://github.com/MS-DOS1999/" target="_blank" style="width: 100%; height: 100%"><img class="iconReseaux" src="img/iconReseaux/github-icon.png" alt="github"/></a></div>
								<div class="lienReseaux"><a href="https://fr.linkedin.com/in/julien-magnin-602753133" target="_blank" style="width: 100%; height: 100%"><img class="iconReseaux" src="img/iconReseaux/linkedin-512.png" alt="linkedin"/></a></div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="description">
				<?php

					require_once('phpMailer/PHPMailerAutoload.php');
					require_once("phpMailer/class.phpmailer.php");
					require_once("phpMailer/class.smtp.php");

					ini_set('display_errors', 1);
					ini_set('display_startup_errors', 1);
					error_reporting(E_ALL);

					$mail = new PHPMailer();
					$mail->CharSet = "utf-8";
					$mail->Port = 587;
					$mail->SMTPSecure = "tls";
					$mail->IsSMTP();
					$mail->Host = "smtp.gmail.com";
					$mail->SMTPAuth = true;
					$mail->Username = "mgnjulienportfolio@gmail.com";
					$mail->Password = "lachancla";

					$message_envoye = "Votre message a bien &eacute;t&eacute; envoy&eacute;";
					$message_non_envoye = "L'envoi du message a &eacute;chou&eacute;, veuillez r&eacute;essayer SVP.";
					$message_erreur_formulaire = "Vous devez d'abord <a href=\"contact.php\">envoyer le formulaire</a>.";

					if (!isset($_POST['envoi'])){
						echo '<p class="desMeTraitement">'.$message_erreur_formulaire.'</p>'."\n";
					}
					else{
						function Rec($text){
							$text = htmlspecialchars(trim($text), ENT_QUOTES);
							if(1 === get_magic_quotes_gpc()){
								$text = stripslashes($text);
							}
							$text = nl2br($text);
							return $text;
						};

						function IsEmail($email){
							$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
							return (($value === 0) || ($value === false)) ? false : true;
						}

						$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
						$prenom  = (isset($_POST['prenom']))  ? Rec($_POST['prenom'])  : '';
						$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
						$objet   = 'Message venant du PortFolio';
						$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';
						$email = (IsEmail($email)) ? $email : '';

						if (($nom != '') && ($prenom != '') && ($email != '') && ($objet != '') && ($message != '')){

							$message = str_replace("&#039;","'",$message);
							$message = str_replace("&#8217;","'",$message);
							$message = str_replace("&quot;",'"',$message);
							$message = str_replace('<br>','',$message);
							$message = str_replace('<br />','',$message);
							$message = str_replace("&lt;","<",$message);
							$message = str_replace("&gt;",">",$message);
							$message = str_replace("&amp;","&",$message);


							$info = $prenom.' '.$nom;

							$mail->SetFrom($email, $info);
							$mail->Subject = $objet;
							$mail->Body = $info." \n\n ".$email." \n\n ".$message;
							$mail->AddAddress('mgnjulien@gmail.com');

							$num_emails = 0;
							if ($mail->Send()){
								$num_emails++;
							}

							if ($num_emails == 1){
								echo '<p class="desMeTraitement">'.$message_envoye.'</p>';
							}
							else{
								echo '<p class="desMeTraitement">'.$message_non_envoye.'</p>';

							}
						}
						else{
							echo '<p class="desMeTraitement">'.$message_formulaire_invalide.'</p>';
						}
					};
				?>
			</div>
		</div>
		<div class="formCase">
			<div class="footer">
				<div class="stack1">
					<div class="containerLienFooter">
						<a class="lienFooter" href="index.php">Home</a>
						<div class="underline"></div>
					</div>
					<div class="containerLienFooter">
						<a class="lienFooter" href="projet.php">Projets</a>
						<div class="underline"></div>
					</div>
					<img class="iconFooter" src="img/iconReseaux/github-icon.png"/>
					<img class="iconFooter" src="img/iconReseaux/linkedin-512.png"/>
				</div>
				<div style="flex:1;">
					<div class="stack2">
						<img class="iconFooterMail" src="icon/contact.png" />
						<p class="lienFooter">mgnjulien@gmail.com</p>
					</div>
					<div class="stack2">
						<img class="iconFooterMail" src="icon/zip.png"/>
						<div class="containerLienFooter">
							<a class="lienFooter" href="CV/CV_Julien_MAGNIN.zip">T&eacute;l&eacute;charger mon CV</a>
							<div class="underline"></div>
						</div>
					</div>
				</div>
				<div class="stack3">
					<img class="iconFooterCPU" src="img/cpu2.png"/>
					<p class="nameFooter">JULIEN <span class="nameSpanFooter">MAGNIN</span></p>
				</div>
			</div>
		</div>
	</div>
	<script src="js/jquery-3.1.1.min.js" ></script>
	<script src="js/konami.js" charset="UTF-8"></script>
	<script src="js/buttonReseaux.js" charset="UTF-8"></script>
</body>
</html>
