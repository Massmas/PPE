<?php
	include("fonctions.php");
?>
<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<title>Prologue by HTML5 UP</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>
	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Jeremy Dauvois</h1>
							<p>Etudiant BTS SIO A - IRIS</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
								<li><a href="#top" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Intro</span></a></li>
								<li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">Portfolio</span></a></li>
								<li><a href="#about" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">About Me</span></a></li>
								<li><a href="#contact" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Contact</span></a></li>
							</ul>
						</nav>

				</div>

				<div class="bottom">

					<!-- Social Icons -->
						<ul class="icons">
							<li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
							<li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
							<li><a href="#" class="icon fa-github"><span class="label">Github</span></a></li>
							<li><a href="#" class="icon fa-dribbble"><span class="label">Dribbble</span></a></li>
							<li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
						</ul>

				</div>

			</div>

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt">DST : GESTION D'UNE ASSOCITION</h2>
								<p>Ce site permet la gestion des adhérents à une association<br/></p>
							</header>

							<footer>
								<a href="#portfolio" class="button scrolly">Voir l'administration</a>
							</footer>

						</div>
					</section>

				<!-- Portfolio -->
					<section id="Portfolio" class="two">
						<div class="container">

							<header>
								<h2>Administration Associative</h2>
							</header>

							<p><ins>Gestion de l'association</ins><br/>
                             <a href="index.php?page=1">
                            1. Lister les membres<br/></a>
                             <a href="index.php?page=2">
                            2. Ajouter un membre<br/></a>
                             <a href="index.php?page=3">
                            3. Retirer un membre<br/></a>
                             <a href="index.php?page=4">
                            4. Rechercher un membre<br/></a>
                             <a href="index.php?page=5">
                            5. Les membres qui n'ont pas payer leur cotisation<br/></a>
                      		</p>
                      		<?php
                      			if (isset ($_GET['page']))
                      			{
                      				$page = $_GET['page'];
                      			}else {
                      					$page = 0;
                      			}
                      			switch ($page)
                      			{
                      				case 1 : echo selectAll();
                      					break;
                      				case 2 : 
                      				echo "
                      				<form method='post' action=''>
                      				<table border =0>
                      				<tr> <td> Nom </td>
                      				<td> <input type='text' name='nom'></td></tr>
                      				<tr> <td> Prenom </td>
                      				<td> <input type='text' name='prenom'></td></tr>
                      				<tr> <td> E-Mail </td>
                      				<td> <input type='text' name='email'></td></tr>
                      				<tr> <td> Adresse </td>
                      				<td> <input type='text' name='adresse'></td></tr>
                      				<tr> <td> Numero de telephone </td>
                      				<td> <input type='text' name='telephone'></td></tr>
                      				<tr> <td> Age </td>
                      				<td> <input type='text' name='age'></td></tr>

                      				<tr> <td> Qualite </td>
                      				<td> 
                      				<select name ='qualite'>
                      				<option value ='actif'> Actif</option>
                      				<option value ='ordinaire'> Ordinaire</option>
                      				<option value ='sympathisant'> Sympathisant</option>
                      				</select>
                      				</td></tr>
                      				
                      				<tr> <td> Compte Actif </td>
                      				<td> 
                      				<select name ='qualite'>
                      				<option value ='actif'> Actif</option>
                      				<option value ='ordinaire'> Ordinaire</option>
                      				<option value ='sympathisant'> Sympathisant</option>
                      				</select>
                      				</td></tr>

                      				<tr><td></td>
                      				<td><input type='submit' name='enregistrer' value ='Enregistrer'>
                      				</td></tr>
                      				</table>
                      				</form>
                      					";
                      			}
                      		?>
							<div class="row">
								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic02.jpg" alt="" /></a>
										<header>
											<h3>Ipsum Feugiat</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic03.jpg" alt="" /></a>
										<header>
											<h3>Rhoncus Semper</h3>
										</header>
									</article>
								</div>
								<div class="4u 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic04.jpg" alt="" /></a>
										<header>
											<h3>Magna Nullam</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic05.jpg" alt="" /></a>
										<header>
											<h3>Natoque Vitae</h3>
										</header>
									</article>
								</div>
								<div class="4u$ 12u$(mobile)">
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic06.jpg" alt="" /></a>
										<header>
											<h3>Dolor Penatibus</h3>
										</header>
									</article>
									<article class="item">
										<a href="#" class="image fit"><img src="images/pic07.jpg" alt="" /></a>
										<header>
											<h3>Orci Convallis</h3>
										</header>
									</article>
								</div>
							</div>

						</div>
					</section>

				<!-- About Me -->
					<section id="about" class="three">
						<div class="container">

							<header>
								<h2>About Me</h2>
							</header>

							<a href="#" class="image featured"><img src="images/pic08.jpg" alt="" /></a>

							<p>Tincidunt eu elit diam magnis pretium accumsan etiam id urna. Ridiculus
							ultricies curae quis et rhoncus velit. Lobortis elementum aliquet nec vitae
							laoreet eget cubilia quam non etiam odio tincidunt montes. Elementum sem
							parturient nulla quam placerat viverra mauris non cum elit tempus ullamcorper
							dolor. Libero rutrum ut lacinia donec curae mus vel quisque sociis nec
							ornare iaculis.</p>

						</div>
					</section>

				<!-- Contact -->
					<section id="contact" class="four">
						<div class="container">

							<header>
								<h2>Contact</h2>
							</header>

							<p>Elementum sem parturient nulla quam placerat viverra
							mauris non cum elit tempus ullamcorper dolor. Libero rutrum ut lacinia
							donec curae mus. Eleifend id porttitor ac ultricies lobortis sem nunc
							orci ridiculus faucibus a consectetur. Porttitor curae mauris urna mi dolor.</p>

							<form method="post" action="#">
								<div class="row">
									<div class="6u 12u$(mobile)"><input type="text" name="name" placeholder="Name" /></div>
									<div class="6u$ 12u$(mobile)"><input type="text" name="email" placeholder="Email" /></div>
									<div class="12u$">
										<textarea name="message" placeholder="Message"></textarea>
									</div>
									<div class="12u$">
										<input type="submit" value="Send Message" />
									</div>
								</div>
							</form>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Untitled. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

			</div>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>