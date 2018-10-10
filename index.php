

<!doctype html>

<html lang="en">

<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/styles.css">
	<link rel="stylesheet" href="css/styles_home.css">
	<link href="https://fonts.googleapis.com/css?family=EB+Garamond:400,700" rel="stylesheet">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Homepage</title>
</head>

<body>

	<div class="wrap">

		<div class="top-bar">
			<header>
				<h1>One MechE, Two DMS Majors</h1>
			</header>

			<nav class="navstyle is-current">
				<ul>
					<li><a href="index.php">Homepage</a>  </li>
					<li><a href="student-info.php">Students</a></li>
					<li><div>jump to...</div></li>
						<ul>
							<li><a href="student-info.php#ryan">Ryan Lin</a></li>
							<li><a href="student-info.php#julia">Julia Myers</a></li>
							<li><a href="student-info.php#pooja">Pooja Priya</a></li>
						</ul>
					</li>
				</ul>
			</nav>
		</div>

		<section class="hero">
			<img src="images/rushRhees.jpg" alt="Picture of Rush Rhees Library">
		</section>

		<main>
			<h2><a href="student-info.php#ryan">Ryan Lin</a></h2>
			<img src="images/ryan.jpg" alt="Picture of Ryan Lin">
			<ul>
				<li>Major: Mechanical Engineering</li>
				<li>Class: 2020</li>
				<li>Fun Fact: Ryan is a singer and pianist who takes voice lessons at Eastman.</li>
			</ul>

			<h2><a href="student-info.php#julia">Julia Myers</a></h2>
			<img src="images/julia.jpg" alt="Picture of Julia Myers">
			<ul>
				<li>Major: Digital Media Studies</li>
				<li>Class: 2020</li>
				<li>Fun Fact: Julia is a Cross Country and Track athlete.</li>
			</ul>

			<h2><a href="student-info.php#pooja">Pooja Priya</a></h2>
			<img src="images/pooja.jpg" alt="Picture of Pooja Priya">
			<ul>
				<li>Major: Digital Media Studies</li>
				<li>Class: 2020</li>
				<li>Fun Fact: Pooja is a part of the Karate and Taekwondo clubs here.</li>
			</ul>
		</main>

		<aside class="sidebar">
			<h2>Find out more about these students!</h2>
			<a href="student-info.php">Click here.</a>
		</aside>


	<footer>
		This page was created by Team Los Angeles.
	</footer>

	</div>

	<?php include 'inc/menu-highlighter.js'; ?>

</body>


</html>
