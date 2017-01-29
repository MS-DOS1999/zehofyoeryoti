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
							<a class="lienButton" href="projet.php">
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
				<p class="desMe"><strong>CONTACTEZ-MOI</strong></p>
			</div>
		</div>

		<div class="formCase">
			<div class="formDescription">
				<form method="post" action="traitement.php">
					<div style="display: flex;">
					<p style="flex: 1;">
						<label class="formLabel">Prénom<span class="asterix">*</span></label></br><input class="formInput" type="text" name="prenom" required />
					</p>
					<p style="flex: 1;">
						<label class="formLabel">Nom<span class="asterix">*</span></label></br><input class="formInput" type="text" name="nom" required />
					</p>
					<p>
					</div>
					<p>
					<label class="formLabel">Adresse e-mail<span class="asterix">*</span></label></br><input class="formInputEmail" type="email" name="email" required />
					</p>
					<p>
						<label class="formLabel">Message<span class="asterix">*</span></label></br><textarea class="formInputMessage" name="message" required ></textarea>
					</p>
					<input class="submit" name="envoi" type="submit" value="Envoyer" />
					<p class="champsRequis"><span class="asterix">*</span>Champ requis</p>
				</form>
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
