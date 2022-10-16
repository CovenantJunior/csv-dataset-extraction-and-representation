<?php
    $data = file("../../assets/sheet.csv");
    if (isset($_GET['m'])) {
    	$month = $_GET['m'];
    }
    else {
    	$month = "Jun";
    }
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<style type="text/css">
	@import url('https://fonts.googleapis.com/css2?family=Quicksand:wght@300;400;500;600;700&display=swap');

	/* base styles */
	* {
		margin: 0;
		font-family: "Quicksand";
		color: #333;
	}
	.filter select, option {
		margin: 0 48%;
		padding: 10px;
		border-radius: 10px

	}
</style>
<script>

var chart = null;
var dataPoints = [];

window.onload = function() {

	chart = new CanvasJS.Chart("chartContainer", {
		animationEnabled: true,
		theme: "light2",
		title: {
			text: "Dollar Rate for <?php echo $month ?>."
		},
		axisY: {
			title: "Dollars ($)",
			titleFontSize: 24
		},
		data: [{
			type: "column",
			yValueFormatString: "#,### Units",
			dataPoints: dataPoints
		}]
	});

	var data = callback({
			"dps": 	[
			<?php
			for ($i=1; $i < count($data); $i++) {
				$calendar = explode(',', $data[$i]);
				if ($i == count($data) - 1) {
					$escape = '';
				}
				else {
					$escape = ',';
				}
				$date = new DateTime($calendar[1]);
				if (date('M', strtotime($calendar[1])) == $month) {
					echo '
						{  
					    	"date": '.$date->getTimestamp().',
					    	"units": '.$calendar[0].'
					  	}
					'.$escape;
				}
			}
			?>  
		     
		   ]
		});
	console.log(data);
}

function callback(data) {	
	for (var i = 0; i < data.dps.length; i++) {
		dataPoints.push({
			x: new Date(data.dps[i].date * 1000),
			y: data.dps[i].units
		});
	}
	chart.render(); 
}
</script>
</head>
<body>
<div id="chartContainer" style="height: 370px; max-width: 920px; margin: 200px auto;"></div>
<div class="filter">
	<select id="month" onchange="location='./'+'?m='+$('#month').val()">
		<option>Choose Month</option>
		<option value="Jun">June</option>
		<option value="Jul">July</option>
		<option value="Aug">August</option>
		<option value="Sep">September</option>
		<option value="Oct">October</option>
	</select>
</div>
<script src="../js/jquery.min.js"></script>
<script src="../js/canvasjs.min.js"></script>
</body>
</html>
<script type="text/javascript">
	$(document).ready( function () {$('html').find('a[title="Free Web Hosting with PHP5 or PHP7"]').html('');});
</script>