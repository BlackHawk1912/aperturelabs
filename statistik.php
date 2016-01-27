<!DOCTYPE html>

<?php 
include ("php/layout/header.php");
?>
	<title>ARSnova Nutzungsstatistik</title>
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<script type="text/javascript" src="js/Chart.js"></script>
		<script type="text/javascript" src="js/ARscriptNova.js"></script>
</head>

<body>
<?php 
include('php/layout/nav.php');
?>
<div class="container hyphens">
	<div class="row">
		<div class="col-md-12 featured">
			<h1>ARSnova Nutzungsstatistik</h1>
			<canvas id="graph"></canvas>
		</div>
	</div>
</div>
<?php 
include('php/layout/footer.php');
?>
</body>
</html>