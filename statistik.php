<!DOCTYPE html>

<?php 
include ("php/layout/header.php");
?>
	<title>ARSnova Nutzungsstatistik</title>
	<script language="javascript" type="text/javascript" src="js/ARSnovaStats.js"></script>
	<script language="javascript" type="text/javascript" src="js/jquery.min.js"></script>
	<script language="javascript" type="text/javascript" 	src="js/jquery.flot.min.js"></script>
</head>

<body>
<?php 
include('php/layout/nav.php');
?>
<div class="container hyphens">
	<div class="row">
		<div class="col-md-12 featured">
			<h1>ARSnova Nutzungsstatistik</h1>
			<!--<p class="header-img">
				<img src="imgs/impressum.jpg" alt="Buch und Brille" class="img-responsive">				
			</p>
			<p>Simon von Schnakenburg</br>
			Forsthausweg 12</br>
				35394 Gießen</br>
			</p>-->

			<div id="placeholder" style="width:600px;height:300px"></div>
			<div class="graph"></div>
		</div>
	</div>
</div>
<?php 
include('php/layout/footer.php');
?>
</body>
<script type="text/javascript">
	$(document).ready(function(){
	chart1 = $.plot($("#placeholder"), [[1,2],[2,3],[4,5]], {});
});
</script>
</html>