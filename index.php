<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Abby's Webpage</title>
		<?php include_once("includes/header.php"); ?>
	</head>
	<body>
		<?php // include_once("includes/navigation.php"); ?>
		<header>
			<!-- Something here -->
		</header>
		<section id="profile" class="padded">
			<section id="profile-card">
				<h2>Abby</h2>
				<h3>Connie is the cutest ❤️</h3>
				<img src="i/avatar.png" alt="Avatar">
				<div id="profile-card-soc">
					<a href="https://linktr.ee/abbydiode" target="_blank">
						<img src="i/icons/linktree.svg" alt="Linktree">
					</a>
				</div>
			</section>
		</section>
		<section id="projects" class="padded">
			<?php include_once("includes/project-card.php"); ?>
			<h1>Projects I'm working on</h1>
			<?php generateProjectCard(
				"catbox",
				"A cat styled Discord minigame bot.",
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
		<?php include_once("includes/topbutton.php"); ?>
		<?php include_once("includes/footer.php"); ?>
	</body>
</html>