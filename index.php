<?php
session_start();
$_SESSION['captcha'] = array( mt_rand(0, 9), mt_rand(1, 9) );

require('config.php');
?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Développeur/Intégrateur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (Wordpress, HTML5, CSS3, JavaScript, jQuery, PHP, Python, MySQL) - Thomas Blanschong</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="Thomas Blanschong : Développeur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (Wordpress, HTML5, CSS3, JavaScript, jQuery, PHP, Python, MySQL)">
		<meta name="keywords" content="developpeur web, freelance, web, internet, intégrateur, création, site internet, developpeur, site web, worpress, php, python, html, css, javascript">
		<meta name="theme-color" content="#ffffff">
		<meta name="robots" content="max-snippet:-1, max-image-preview:large, max-video-preview:-1">
		<!-- Meta Og (facebook) -->
		<meta property="og:image" content="https://portfolio.thomasblanschong.fr/img/carte-site.webp">
		<link rel="image_src" href="https://portfolio.thomasblanschong.fr/img/carte-site.webp">
		<meta property="og:locale" content="fr_fr">
		<meta property="og:site_name" content="Thomas Blanschong - Développeur Web">
		<meta property="og:title" content="Thomas Blanschong : Développeur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (Wordpress, HTML5, CSS3, JavaScript, jQuery, PHP, Python, MySQL)">
		<meta property="og:description" content="Thomas Blanschong : Développeur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (Wordpress, HTML5, CSS3, JavaScript, jQuery, PHP, Python, MySQL)">
		<meta property="og:type" content="article">
		<meta property="og:url" content="https://portfolio.thomasblanschong.fr/">
		<!-- Card (twitter) -->
		<meta name="twitter:card" content="summary_large_image">
		<meta name="twitter:description" content="Thomas Blanschong : Développeur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (Wordpress, HTML5, CSS3, JavaScript, jQuery, PHP, Python, MySQL)">
		<meta name="twitter:image" content="https://portfolio.thomasblanschong.fr/img/carte-site.webp">
		<meta name="twitter:title" content="Thomas Blanschong : Développeur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (Wordpress, HTML5, CSS3, JavaScript, jQuery, PHP, Python, MySQL)">
		<meta name="twitter:url" content="https://portfolio.thomasblanschong.fr/">
		<!-- Meta (google+) -->
		<meta itemprop="name" content="Thomas Blanschong : Développeur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (Wordpress, HTML5, CSS3, JavaScript, jQuery, PHP, Python, MySQL)">
		<meta itemprop="description" content="Thomas Blanschong : Développeur Web Freelance à Lannion, Côtes-d'Armor, Bretagne (Wordpress, HTML5, CSS3, JavaScript, jQuery, PHP, Python, MySQL)">
		<meta itemprop="image" content="https://portfolio.thomasblanschong.fr/img/carte-site.webp">
		<link rel="manifest" href="/manifest.webmanifest">
		<link rel="icon" href="/favicon.ico" type="image/x-icon" sizes="any">
		<link rel="icon" href="/img/favicons/favicon.svg" type="image/svg+xml">
		<link rel="apple-touch-icon" href="/img/favicons/apple-touch-icon.png">
		<link rel="stylesheet" href="font-awesome/css/all.css">
		<link rel="stylesheet" href="css/style.css?1">
	</head>
	<body>
		<header>
			<a href="#presentation">
				<img src="img/logo.svg" alt="Logo">
			</a>
			<nav id="menu">
				<ul>
					<li>
						<a href="#services">Services</a>
					</li>
					<li>
						<a href="#creations">Créations</a>
					</li>
					<li>
						<a href="#a-propos">À Propos</a>
					</li>
					<li>
						<a href="#contact">Contact</a>
					</li>
				</ul>
				<div id="cursor"></div>
			</nav>
			<a id="nav-mobile" href="#menu">
				<i class="fas fa-bars"></i>
			</a>
			<a id="nav-mobile-close" href="#menu-close">
				<i class="fas fa-times"></i>
			</a>
		</header>
		<main>
			<section id="presentation">
				<img class="animed" src="img/logos/wordpress.svg" alt="WordPress">
				<img class="animed" src="img/logos/html5.svg" alt="HTML5">
				<img class="animed" src="img/logos/css3.svg" alt="CSS3">
				<img class="animed" src="img/logos/javascript.svg" alt="JavaScript">
				<img class="animed" src="img/logos/jquery.svg" alt="JQuery">
				<img class="animed" src="img/logos/symfony.svg" alt="Symfony">
				<img class="animed" src="img/logos/php.svg" alt="PHP">
				<img class="animed" src="img/logos/python.svg" alt="Python">
				<h1>
					Bonjour, je suis Thomas. Je suis développeur web <i>full stack</i>,<br>spécialisé en <i>front-end</i>.
				</h1>
				<a href="#services" class="next">
					<i class="fas fa-chevron-down" aria-hidden="true"></i>
				</a>
			</section>
			<section id="services">
				<div>
					<ul>
						<li>
							<h2>
								Développement de site web
							</h2>
							<p>
								Création de site web sur mesure. Que cela soit une simple page vitrine, un blog, un site marchant, ou tout autre type de site, je suis en mesure de vous proposer mes services.
							</p>
						</li>
						<li>
							<h2>
								Webdesign
							</h2>
							<p>
								Besoin d'un nouveau design pour votre site ? Je peux vous proposer plusieurs maquettes se rapprochant du mieux possible au contenu de votre site, et à votre identité.
							</p>
						</li>
						<li>
							<h2>
								Intégration web
							</h2>
							<p>
								Vous avez un nouveau design, mais personne pour l'intégrer à votre site ? Fournissez moi votre maquette, et je l'intégrerai le plus fidèlement possible à votre site.
							</p>
						</li>
						<li>
							<h2>
								Développement de modules ou de plugins
							</h2>
							<p>
								Si vous avez besoin d'améliorer votre site, je peux vous proposer le développement ou l'installation de nouveaux modules.
							</p>
						</li>
					</ul>
					<p>
						Je peux prendre en charge la totalité de votre projet. De l'étude de celui-ci à son hébergement. Je peux également me charger du dépôt de votre nom de domaine, ainsi que du référencement de votre site sur les moteurs de recherche.
					</p>
					<p>
						Pour tous mes services, je vous accompagnerai et vous conseillerai tout au long du projet.
					</p>
				</div>
				<a href="#creations" class="next">
					<i class="fas fa-chevron-down" aria-hidden="true"></i>
				</a>
			</section>
			<section id="creations">
				<ul>
<?php
foreach ($creations as $creation) {
?>
					<li id="<?php echo $creation['id']; ?>">
						<picture>
							<source srcset="img/creations/<?php echo $creation['shortname']; ?>-500w.webp 500w, img/creations/<?php echo $creation['shortname']; ?>-1920w.webp 1920w" sizes="(max-width: 500px) 500px, 1920px">
							<img src="img/creations/<?php echo $creation['shortname']; ?>-50w.webp" alt="Capture d'écran du site <?php echo $creation['name']; ?>" loading="lazy">
						</picture>
<?php
	if ($creation['mobile']) {
?>
						<img class="smartphone" src="img/smartphone.webp" alt="Smartphone" loading="lazy">
						<img class="mobile" src="img/creations/<?php echo $creation['shortname']; ?>-mobile.webp" alt="Capture d'écran version mobile du site <?php echo $creation['name']; ?>" loading="lazy">
<?php
	}
?>
						<aside>
							<div>
								<h3>
									<?php echo $creation['name']; ?>

								</h3>
								<h4>
									<a href="<?php echo $creation['url']; ?>" target="_blank"><?php echo parse_url($creation['url'], PHP_URL_HOST); ?></a>
								</h4>
							</div>
							<h5>
								Description :
							</h5><?php echo $creation['description']; ?>

							<h5>
								Technologies :
							</h5>
							<ul>
<?php
	foreach ($creation['technologies'] as $techno) {
?>
								<li>
									<?php echo $techno; ?>

								</li>
<?php
	}
?>
							</ul>
						</aside>
					</li>
<?php
}
?>
				</ul>
				<a href="#" id="creation-previous">
					<i class="fas fa-chevron-left" aria-hidden="true"></i>
				</a>
				<a href="#" id="creation-next">
					<i class="fas fa-chevron-right" aria-hidden="true"></i>
				</a>
				<a href="#a-propos" class="next">
					<i class="fas fa-chevron-down" aria-hidden="true"></i>
				</a>
			</section>
			<section id="a-propos">
				<div>
					<p>
						Développeur web depuis 2013, j'ai débuté dans ce domaine pendant mes études en autodidacte en 2005. Améliorant mes acquis grâce à mes études et une veille technologique permanente, je suis à même de vous proposer ces connaissances pour créer ou faire évoluer votre projet.
					</p>
					<p>
						Que cela soit pour un projet entièrement réalisé sur mesure, ou via un <a href="https://fr.wikipedia.org/wiki/Syst%C3%A8me_de_gestion_de_contenu" target="_blank" title="Wikipédia" class="help">CMS</a> soigneusement choisi, je développerai votre projet avec les technologies les plus modernes à ce jour (<a href="https://fr.wikipedia.org/wiki/HTML5" target="_blank" title="Wikipédia" class="help">HTML5</a>, <a href="https://fr.wikipedia.org/wiki/Feuilles_de_style_en_cascade" target="_blank" title="Wikipédia" class="help">CSS3</a>, <a href="https://fr.wikipedia.org/wiki/JavaScript" target="_blank" title="Wikipédia" class="help">JavaScript</a>, <a href="https://fr.wikipedia.org/wiki/Site_web_r%C3%A9actif" target="_blank" title="Wikipédia" class="help">site web réactif</a>).
					</p>
					<p>
						Pour plus d'informations, je vous invite à visionner mon <a href="cv.pdf" target="_blank">CV</a> ou à <a href="#contact">me contacter</a>.
					</p>
				</div>
				<a href="#contact" class="next">
					<i class="fas fa-chevron-down" aria-hidden="true"></i>
				</a>
			</section>
			<section id="contact">
				<div>
					<p>
						Vous pouvez me suivre via les services suivants : <span id="rs">
							<a href="https://gitlab.com/se7h" target="_blank" class="rslogo gitlab">
								<i class="fab fa-gitlab fa-2x"></i>
							</a>
							<a href="https://framagit.org/thomasb22" target="_blank" class="rslogo gitlab">
								<i class="fab fa-gitlab fa-2x"></i>
							</a>
							<a href="https://github.com/thomasb22" target="_blank" class="rslogo github">
								<i class="fab fa-github fa-2x"></i>
							</a>
							<a href="https://www.linkedin.com/in/thomas-blanschong-7b8312258" target="_blank" class="rslogo linkedin">
								<i class="fab fa-linkedin fa-2x"></i>
							</a>
							<a href="http://fr.viadeo.com/fr/profile/thomas.blanschong" target="_blank" class="rslogo viadeo">
								<i class="fab fa-viadeo fa-2x"></i>
							</a>
						</span>
					</p>
					<p>
						Pour tout renseignement, vous pouvez remplir le formulaire qui suit (merci de renseigner le maximum d'informations si vous voulez un devis ou démarrer un projet).
					</p>
					<form method="post" action="lib/sendmail.php">
						<div>
							<div class="inputblock">
								<input type="text" name="nom" id="nom" minlength="3" maxlength="100" placeholder="Nom*" value="<?php echo $_SESSION['formNom'] ?>" required>
								<div class="error">
									3 caractères minimum
								</div>
							</div><div class="inputblock">
								<input type="email" name="email" id="email" maxlength="255" placeholder="Courriel*" value="<?php echo $_SESSION['formEmail'] ?>" required>
								<div class="error">
									Adresse courriel incorrecte
								</div>
							</div>
							<div class="description">
								<input type="checkbox" name="copie" id="copie"> <label for="copie">Envoyer une copie à votre adresse courriel</label>
							</div>
						</div>
						<div>
							<div class="inputblock">
								<input type="text" name="objet" id="objet" minlength="3" maxlength="100" placeholder="Objet*" value="<?php echo $_SESSION['formObjet'] ?>" required>
								<div class="error">
									3 caractères minimum
								</div>
							</div><div class="inputblock">
								<input type="url" name="site" id="site" maxlength="255" placeholder="Site web" value="<?php echo $_SESSION['formSite'] ?>">
								<div class="error">
									L'adresse web doit débuter par http:// ou https://
								</div>
							</div>
						</div>
						<div>
							<textarea name="message" id="message" minlength="20" maxlength="5000" placeholder="Message* (20 caractères minimum)" required><?php echo $_SESSION['formMess'] ?></textarea>
							<div class="error">
								20 caractères minimum
							</div>
							<div class="description">
								<span id="counter">5000</span> <span id="countermessage">caractères restants</span>
							</div>
						</div>
						<div>
							<input type="number" name="captcha" id="captcha" min="0" max="99" placeholder="Combien font <?php echo $_SESSION['captcha'][0]; ?> + <?php echo $_SESSION['captcha'][1]; ?> ?*" required><div class="error">
								Nombre uniquement
							</div>
						</div>
						<div class="description">
							* Obligatoire
						</div>
						<div>
							<input type="submit" name="submitEmail" id="submitEmail" value="Envoyer">
						</div>
					</form>
				</div>
			</section>
		</main>
<?php
if ( isset($_GET['sent']) || isset($_GET['errnom']) || isset($_GET['erremail']) || isset($_GET['errsite']) || isset($_GET['errobjet']) ||
	isset($_GET['errmess']) || isset($_GET['errcaptcha']) || isset($_GET['errsend']) ) {
	$message = '';

	if ( isset($_GET['sent']) )
		$message = "Votre courriel à bien été envoyé.<br>
					Vous aurrez une réponse d'ici les prochaines 72h.";
	else {
		if ( isset($_GET['errnom']) && $_GET['errnom'] == 1 )
			$message .= "> Vous avez oublié d'entrer votre nom<br>";
		if ( isset($_GET['errnom']) && $_GET['errnom'] == 2 )
			$message .= "> Votre nom doit être composé de 3 à 100 caractères<br>";
		if ( isset($_GET['erremail']) && $_GET['erremail'] == 1 )
			$message .= "> Vous avez oublié d'entrer votre courriel<br>";
		if ( isset($_GET['erremail']) && $_GET['erremail'] == 2 )
			$message .= "> Votre courriel est incorrecte<br>";
		if ( isset($_GET['errsite']) && $_GET['errsite'] == 1 )
			$message .= "> L'adresse de votre site web est incorrecte<br>";
		if ( isset($_GET['errobjet']) && $_GET['errobjet'] == 1 )
			$message .= "> L'objet doit être composé de 3 à 100 caractères<br>";
		if ( isset($_GET['errmess']) && $_GET['errmess'] == 1 )
			$message .= "> Le message doit être composé de 20 à 5000 caractères<br>";
		if ( isset($_GET['errcaptcha']) && $_GET['errcaptcha'] == 1 )
			$message .= "> Vous n'avez pas entré la bonne réponse à la question de sécurité<br>";
		if ( isset($_GET['errsend']) && $_GET['errsend'] == 1 )
			$message .= "> Il y a eu une erreur lors de l'envoi de votre courriel. Veuillez réessayer ultérieurement.
					</p>
					<p>
						".$_SESSION['erreurMail'];
	}
?>
		<div id="mbox">
			<form method="get" action="">
				<p>
					<?php echo $message; ?>
				</p>
				<input type="submit" value="Valider">
			</div>
		</div>
<?php
}
?>
		<script src="js/default.js"></script>
		<!-- Matomo -->
		<script>
			var _paq = window._paq = window._paq || [];
			/* tracker methods like "setCustomDimension" should be called before "trackPageView" */
			_paq.push(['trackPageView']);
			_paq.push(['enableLinkTracking']);
			(function() {
				var u="https://p.thomasblanschong.fr/";
				_paq.push(['setTrackerUrl', u+'matomo.php']);
				_paq.push(['setSiteId', '5']);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
				g.async=true; g.src=u+'matomo.js'; s.parentNode.insertBefore(g,s);
			})();
		</script>
		<!-- End Matomo Code -->

	</body>
</html>