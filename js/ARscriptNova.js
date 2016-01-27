$(document).ready(function (){
	plotGraph();
	setInterval(plotGraph, 30000);
});

function plotGraph() {
	var ctx = $("#graph").get(0).getContext("2d");
	var json=getStats();
	var s1= [];
	var ticks=[];
	for(var j in json){
		s1.push(json[j]);
		ticks.push(j);
	}	

	var data = {
		labels: ["Antworten","Vorlsungsfragen","Vorbereitungsfragen","aktive Sessions","geschlossene Sessions","Ersteller","Aktive User","Aktive Studenten","Angemeldete User","Zwischenfragen","Fragenentwürfe","Fragen","Sessions"],
		//labels: ["1","2","3","4","5","6","7","8","9","10","11","12","13"],
		
		datasets:
		[
			{
				fillColor: "rgba(51,153,204,1.0)",
				strokeColor: "rgba(51,153,204,1.0)",
				data: s1,
			}
		]
	};
	
	var myBarChart = new Chart(ctx).Bar(data,{responsive: true,});
};

function getStats() {
	var xmlHttp = new XMLHttpRequest();
	xmlHttp.open("GET", "https://arsnova.eu/api/statistics/", false);
	xmlHttp.send();
	if (xmlHttp.status == 200) {
		return JSON.parse(xmlHttp.responseText);
	};
}

