$(document).ready(function(){
	$.plot($("#placeholder"), [[1,2],[2,3],[4,5]], {});
});

function getStats() {
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("GET", "https://arsnova.eu/api/statistics/", false);
	xmlHttp.send();
}