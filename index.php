<?php include "header.php";?>

	<!-- Body -->
	<div class="container">
		<!-- Carousel -->
		<div id="myCarousel" class="carousel slide">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="acitve"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="3"></li>
			</ol>

			<div class="carousel-inner">
				<!-- Item One -->
				<div class="item active">
					<img src="imgs/book-and-glasses.jpg" alt="Buch und Brille" class="img-responsive">
					<div class="carousel-caption"><h3>Hallo auf Slide 1</h3></div>
				</div>

				<!-- Item Two -->
				<div class="item">
					<img src="imgs/blackboard.jpg" alt="Bücher" class="img-responsive">
					<div class="carousel-caption"><h3>Hallo auf Slide 2</h3></div>
				</div>

				<!-- Item Three -->
				<div class="item">
					<img src="imgs/books.jpg" alt="Tafel" class="img-responsive">
					<div class="carousel-caption"><h3>Hallo auf Slide 3</h3></div>
				</div>
			</div>
			<a class="carousel-control left" href="#myCarousel" data-slide="prev">
				<span class="icon-prev"></span>
			</a>
			<a class="carousel-control right" href="#myCarousel" data-slide="next">
				<span class="icon-next"></span>
			</a>
		</div>
		<!-- Carousel ENDE -->
		
		<div class="row">
			<div class="col-md-12 featured">
				<h1>Lorem Ipsum</h1>
				<p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
				<a href="links.php" class="btn btn-lg btn-primary" type="button">Erfahren Sie mehr...</a>
			</div>
		</div>
	</div>

	<!-- Body END-->

<?php include "footer.php";?>