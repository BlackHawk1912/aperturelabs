<!DOCTYPE HTML>

<?php 
include ("php/layout/header.php");
?>
<?php 
include('php/layout/nav.php');
?>
<div class="container">
	<div class="row">

		<div class="col-md-12 featured">
			<div id="wikisearch">
				<img src="https://wikipedia.de/img/logo.png" class="hidden-xs" style="float:left;" border="0" align="left" width="100" height="100" alt="Logo Wikipedia" />
				<h1>Suche in der deutschsprachigen Wikipedia</h1>
				<form class="searchbox form-inline form-horizontal" action="http://de.wikipedia.org/wiki/Spezial:Suche" name="searchbox">
					<label for="searchArea">Suche:</label>
					<input id ="search" class="form-control" type="text" size="30" placeholder="Jetzt Suchen!" name="search"></input>
					<input class="btn btn-default articleSearch" type="submit" value="Artikel-Suche"></input>
					<input class="btn btn-default fullSearch" type="submit" value="Volltextsuche"></input>
				</form>
			</div>
		</div>



	</div>
</div>
<?php 
include('php/layout/footer.php');
?>
</body>
</html>