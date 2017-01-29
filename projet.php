<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<link rel="icon" href="img/cpu2.png" />
    <title>PorteFolio Julien MAGNIN</title>
	<link rel="stylesheet" type="text/css" href="style.css">
  </head>
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
						<div class="unusedButton">
							<div>
							<img class="icon" src="icon/projet.png" alt="projet" />
							<p class="textIcon">PROJETS</p>
							</div>
						</div>
						<div class="menuButton3">
							<a class="lienButton" href="contact.php">
							<img class="icon" src="icon/contact.png" alt="contact" />
							<p class="textIcon">CONTACT</p>
							</a>
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
				<p class="desMe">MES PROJETS</p>
			</div>
		</div>


		<div class="formCase">
			<div class="formDescription">
				<div class="flexProjet">
					<div class="containerProjet">
						<div class="divOverflow">
							<img class="imgProjet" src="img/imgProjet/Sheep8.jpg" alt="Sheep8"/>
							<div class="porte1"></div>
							<div class="porte2"></div>
							<p class="nameProjet">Emulateur<br />Chip8</p>
							<a class="lienProjet" href="http://www.emu-france.com/news/47347-ordi-sheep8-v1-5/" target="_blank"></a>
						</div>
					</div>
					<div class="containerProjet">
						<div class="divOverflow">
							<img class="imgProjet" src="img/imgProjet/Trombi.png" alt="trombi" />
							<div class="porte1"></div>
							<div class="porte2"></div>
							<p class="nameProjet">Trombinoscope<br /> SimplonMars</p>
							<a class="lienProjet" href="https://ms-dos1999.github.io/trombi/" target="_blank"></a>
						</div>
					</div>
					<div class="containerProjet">
						<div class="divOverflow">
							<img class="imgProjet" src="img/imgProjet/Uppertails.png" alt="Uppertails" />
							<div class="porte1"></div>
							<div class="porte2"></div>
							<p class="nameProjet">Uppertails</p>
							<a class="lienProjet" href="https://ms-dos1999.github.io/El-Risitas/" target="_blank"></a>
						</div>
					</div>
					<div class="containerProjet">
						<img />
					</div>
					<div class="containerProjet">
						<img />
					</div>
				</div>
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
            <a class="lienFooter" href="contact.php">Contact</a>
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
