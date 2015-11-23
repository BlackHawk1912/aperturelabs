<!DOCTYPE HTML>

<?php 
include ("php/layout/header.php");
?>
<?php 
include('php/layout/nav.php');
?>
<div class="container">
	<!-- Carousel -->
	<div id="myCarousel" class="carousel slide">
		<ul class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="acitve"></li>
			<li data-target="#myCarousel" data-slide-to="1"></li>
			<li data-target="#myCarousel" data-slide-to="2"></li>
		</ul>

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
			<span class="icon-prev"><span class="sr-only">Zurück</span></span>
		</a>
		<a class="carousel-control right" href="#myCarousel" data-slide="next">
			<span class="icon-next"><span class="sr-only">Vorwärts</span></span>
		</a>
	</div>
	<!-- Carousel ENDE -->
	
	<div class="row">
		<div class="col-md-12 featured">
			<h1>Hallo,</h1>
			<p>mein Name ist Simon von Schnakenburg. Ich bin Informatik-Student an der Technischen Hochschule Mittelhessen, kurz THM. Im aktuellen, zweiten Semester habe ich die Kurse IBS, AuD, PIS, RfI sowie BWL belgegt. Dazu kommt noch der Kurs NTG aus dem ersten Semester.</p>
			<p>Diese Webseite ist im Rahmen des Kurses IBS (Internetbasierte Systeme) entstanden. </p>
			<h2>Erläuterung der Abkürzungen:</h2>
			<table class="table">
				<tr id="head">
					<th>Abkürung</th>
					<th>Bedeutung</th>
				</tr>
				<tr>
					<th>IBS</th>
					<th>Internetbasierte Systeme</th>
				</tr>
				<tr>
					<th>PIS</th>
					<th>Programmieren interaktiver Systeme</th>
				</tr>
				<tr>
					<th>AuD</th>
					<th>Alogrithmen und Datenstrukturen</th>
				</tr>
				<tr>
					<th>RfI</th>
					<th>Recht für Informatiker</th>
				</tr>
				<tr>
					<th>BWL</th>
					<th>Datenverarbeitungs-orientierte Betriebswirtschaftslehre</th>
				</tr>
				<tr>
					<th>NTG</th>
					<th>Naturwissenschaftliche- und technisch Grundlagen</th>
				</tr>
			</table>
		</div>
	</div>
</div>
<?php 
include('php/layout/footer.php');
?>
</body>
</html>