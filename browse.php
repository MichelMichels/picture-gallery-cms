<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<title>Photo upload</title>
</head>
<body>

	<div id="wrapper">
	
		<header>
			<nav>
				<ul>
					<li><a href="browse.php">Images</a></li>
					<li><a href="galleries.php">Galleries</a></li>
					<li><a href="settings.php">Settings</a></li>
				</ul>
			</nav>

			<a id="upload-button" href="upload.php">Upload images</a>
		</header>

		<main>
			<!-- List all images per gallery category -->
			<section class="category">
				<h2>Badkamer</h2>
				<ul>
					<li>
						<img src="images/badkamer/een.jpg" alt="testfoto">
						<div class="delete-button"></div>
					</li>
					<li><img src="images/badkamer/een.jpg" alt="testfoto"></li>
					<li><img src="images/badkamer/een.jpg" alt="testfoto"></li>
					<li><img src="images/badkamer/een.jpg" alt="testfoto"></li>
					<li><img src="images/badkamer/een.jpg" alt="testfoto"></li>
					<li><img src="images/badkamer/een.jpg" alt="testfoto"></li>

				</ul>
			</section>

			<section class="category">
				<h2>Zolder</h2>
				<ul>
					<li><img src="images/badkamer/een.jpg" alt="testfoto"></li>
				</ul>
			</section>

			<section class="category">
				<h2>Tekeningen</h2>
				<ul>
					<li><img src="images/badkamer/een.jpg" alt="testfoto"></li>
				</ul>
			</section>
		</main>

		<footer>
			
		</footer>

	</div>

</body>
</html