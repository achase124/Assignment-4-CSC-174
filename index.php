<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Team Berlin || Assignment 04: Odd Student Out</title>
		<link rel="stylesheet" href="css/z-pattern.css">
		<!-- Slideshow ... -->
		<script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"></script>
		<script src="js/fullclip.js"></script>
		<!-- ... -->

	</head>

	<body class="fullBackground"><!-- Class to activate background slider -->

		<div class="container">

			<img class="tl" src="img/icon.png">

			<div class="middle">
				<h1>Team Berlin</h1>
			</div>


			<div class="tr">
				<nav>
					<a href="https://en.wikipedia.org/wiki/Berlin">Learn more about Berlin</a>
				</nav>
			</div>


			<div class="bl">
				<section>
					<p>Difference: Kat Fuss is a Rochester native, unlike Ana and Andrew, who were both born outside mainland United States and resided there for some time.</p>
				</section>
			</div>

			<div class="br">
				<nav>
					<a href="odd.php">Students</a>
				</nav>
			</div>

		</div>

		<script>
				$('.fullBackground').fullClip({
			  images: ['img/brandenburg_gate.jpg','img/bridge.jpg','img/skyline.jpg']
			});
		</script>

	</body>

</html>