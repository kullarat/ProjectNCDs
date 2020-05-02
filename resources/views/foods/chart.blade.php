<!DOCTYPE HTML>
<html>
<head>
<script>
window.onload = function () {

var options = {
	title: {
		text: "คุณค่าทางโภชนาการที่ควรได้รับต่อวัน"
	},
	subtitles: [{
		text: ".........................."
	}],
	animationEnabled: true,
	data: [{
		type: "pie",
		startAngle: 40,
		toolTipContent: "<b>{label}</b>: {y} กรัม",
		showInLegend: "true",
		legendText: "{label}",
		indexLabelFontSize: 16,
		indexLabel: "{label} - {y} กรัม",
		dataPoints: [
			{ y: 11.9, label: "โปรตีน" },
			{ y: 10.4, label: "คาร์โบไฮเดรต" },
			{ y: 52.7, label: "ไขมัน" },
		]
	}]
};
$("#chartContainer").CanvasJSChart(options);

}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script src="https://canvasjs.com/assets/script/jquery-1.11.1.min.js"></script>
<script src="https://canvasjs.com/assets/script/jquery.canvasjs.min.js"></script>
</body>
</html>