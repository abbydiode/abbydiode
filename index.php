<!DOCTYPE html>
<html lang="en">
	<!-- Taking inspiration is fine, stealing is not. -->
	<head>
		<title>Galaxy - Project Portfolio</title>
		<?php include_once("inc/header.php"); ?>
	</head>
	<body>
		<?php include_once("inc/navigation.php"); ?>
		<header>
			<!-- Something here -->
		</header>
		<section id="profile" class="padded">
			<section id="profile-card">
				<h2>Galaxy</h2>
				<h3>Abigail de Joode</h3>
				<img src="i/a/avatar.png" alt="My avatar lol">
				<div id="profile-card-soc">
					<a href="https://primenodes.com/t/">
						<img src="i/a/ico/soc/elhs.svg" alt="Encrypted Laser Icon">
					</a>
					<a href="https://forum.facepunch.com/u/cykf/Galaxy/" target="_blank" rel="noreferrer">
						<img src="i/a/ico/soc/facepunch.svg" alt="Facepunch Icon">
					</a>
					<a href="https://github.com/Galaxyzd" target="_blank" rel="noreferrer">
						<img src="i/a/ico/soc/github.svg" alt="Github Icon">
					</a>
					<a href="https://www.linkedin.com/in/twdejoode/" target="_blank" rel="noreferrer">
						<img src="i/a/ico/soc/linkedin.svg" alt="LinkedIn Icon">
					</a>
					<a href="https://www.paypal.me/galaxybeatzz" target="_blank" rel="noreferrer">
						<img src="i/a/ico/soc/paypal.svg" alt="PayPal Icon">
					</a>
					<a href="http://steamcommunity.com/profiles/76561198082763237" target="_blank" rel="noreferrer">
						<img src="i/a/ico/soc/steam.svg" alt="Steam Icon">
					</a>
					<a href="https://twitter.com/galaxyzd" target="_blank" rel="noreferrer">
						<img src="i/a/ico/soc/twitter.svg" alt="Twitter Icon">
					</a>
					<a href="https://www.youtube.com/c/Galaxyzd" target="_blank" rel="noreferrer">
						<img src="i/a/ico/soc/youtube.svg" alt="YouTube Icon">
					</a>
				</div>
			</section>
		</section>
		<section id="projects" class="padded">
			<?php include_once("inc/project-card.php"); ?>
			<h1>Projects I'm working on</h1>
			<?php generateProjectCard(
				"catbox",
				"A cat styled Discord minigame bot.",
				"nodejs")
			?>
			<?php generateProjectCard(
				"cosmOS| Framework",
				"An open-source NodeJS based Discord bot that allows for easy creation of commands using JSON and pre-written functionality.",
				"nodejs")
			?>
			<div class="hdiv"></div>
			<h1>Projects I've worked on</h1>
			<?php generateProjectCard(
				"Prince of Persia 18",
				"A highschool project where I stole the concept from an old game and then made it 3D and terribly optimized.",
				"csharp")
			?>
		</section>
		<?php include_once("inc/topbutton.php"); ?>
		<?php include_once("inc/footer.php"); ?>
	</body>
</html>