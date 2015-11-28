<!DOCTYPE HTML>

<?php 
include ("php/layout/header.php");
?>
	<title>Wikipedia Suche</title>
</head>
<body>
<?php 
include('php/layout/nav.php');
?>
<div class="container">
	<div class="row">

		<div class="col-md-12 featured">
			<div id="wikisearch">
				<p>Im Rahmen der Aufgabenstellung, biete Ich ihnen auf dieser Seite eine barrierefreies Suchformular für die deutsch Wikipedia an. Sie haben sowohl die Möglichkeit der Volltextsuche als auch die der Artikel-Suche.</br>
				<img src="https://wikipedia.de/img/logo.png" class="hidden-xs" style="float:left;" border="0" align="left" width="100" height="100" alt="Logo Wikipedia" />
				<h1>Suche in der deutschsprachigen Wikipedia</h1>
				<form class="searchbox form-inline form-horizontal" action="http://de.wikipedia.org/wiki/Spezial:Suche" name="searchbox">
					<label for="searchArea">Suche:</label>
					<input id ="searchArea" class="form-control" type="text" size="30" placeholder="Jetzt Suchen!" name="search"></input>
					<input class="btn btn-default articleSearch" type="submit" value="Artikel-Suche"></input>
					<input class="btn btn-default fullSearch" type="submit" value="Volltextsuche"></input>
				</form>
			</div>
			</br>
			<hr>
			<h2>Validierung durch WAVE</h2>
			<p>
				<a href="http://wave.webaim.org/report#/http://aperturelabs23.cloudcontrolled.com" title="WAVE Validierung">WAVE Test dieser Seite</a>
				<a href="http://www.w3.org/WAI/WCAG2AAA-Conformance" title="Explanation of WCAG 2.0 Level Triple-A Conformance">
				  <img height="32" width="88" src="http://www.w3.org/WAI/wcag2AAA-blue" alt="Level Triple-A conformance, W3C WAI Web Content Accessibility Guidelines 2.0"></a>
			</p>
		</div>
	</div>
</div>
<?php 
include('php/layout/footer.php');
?>
</body>
</html>