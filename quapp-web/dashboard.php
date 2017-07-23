<!doctype html>
<html lang="en">
<head>
	<?php
		include "header.php";
  include "php/Database.php";
		include "php/datafunctions.php";
		$data = new datafunctions();
	?>
 <script src="vendors/chartjs/dist/Chart.bundle.js"></script>
 <script src="vendors/chartjs/samples/utils.js"></script>
</head>
<body>
	<div class="wrapper">
		<?php include "sidebar.php";?>
		<div class="main-panel">
			<?php include "navbar.php";?>
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-4">
							<div class="card">
								<div class="header">
									<h4 class="title">Report Statistics</h4>
									<p class="category">Summary (Philippines)</p>
								</div>
				    <div id="canvas-holder" style="width:100%">
				        <canvas id="chart-area" />
				    </div>
							</div>
						</div>

						<div class="col-md-8">
							<div class="card">
								<div class="header">
									<h4 class="title">Users Inputs</h4>
									<p class="category">Positive and Negative Response</p>
								</div>
				    <div style="width:100%;">
				        <canvas id="canvas"></canvas>
				    </div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php include "footer.php";?>

		</div>
	</div>


</body>

<!--   Core JS Files   -->
<script src="assets/js/jquery-1.10.2.js" type="text/javascript"></script>
<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

<!--  Checkbox, Radio & Switch Plugins -->
<script src="assets/js/bootstrap-checkbox-radio-switch.js"></script>

<!--  Charts Plugin -->
<script src="assets/js/chartist.min.js"></script>

<!--  Notifications Plugin    -->
<script src="assets/js/bootstrap-notify.js"></script>

<!--  Google Maps Plugin    -->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
<script src="assets/js/light-bootstrap-dashboard.js"></script>

<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
<script src="assets/js/demo.js"></script>

<script type="text/javascript">
$(document).ready(function(){

	demo.initChartist();

 /*
	$.notify({
		icon: 'pe-7s-gift',
		message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."
	},{
		type: 'info',
		timer: 4000
	});*/

});
</script>

<script>
var randomScalingFactor = function() {
	return Math.round(Math.random() * 100);
};

var MONTHS = ["January", "February", "March", "April", "May", "June",
"July", "August", "September", "October", "November", "December"];

var config = {
	type: 'pie',
	data: {
		datasets: [{
			data: [
				<?php echo $data->getNegativeCount();?>,
				<?php echo $data->getPositiveCount();?>,
			],
			backgroundColor: [
				window.chartColors.red,
				window.chartColors.green,
			],
			label: 'Dataset 1'
		}],
		labels: [
			"Negative",
			"Positive",
		]
	},
	options: {
		responsive: true
	}
};


var config2 = {
	type: 'line',
	data: {
		labels: ["April", "May", "June", "July","August"],
		datasets: [{
			label: "Negative",
			backgroundColor: window.chartColors.red,
			borderColor: window.chartColors.red,
			data: [
				<?php echo $data->getNegativeCountApril();?>,
				<?php echo $data->getNegativeCountMay();?>,
				<?php echo $data->getNegativeCountJune();?>,
				<?php echo $data->getNegativeCountJuly();?>,
				<?php echo $data->getNegativeCountAugust();?>
			],
			fill: false,
		}, {
			label: "Positive",
			fill: false,
			backgroundColor: window.chartColors.green,
			borderColor: window.chartColors.green,
			data: [
				<?php echo $data->getPositiveCountApril();?>,
				<?php echo $data->getPositiveCountMay();?>,
				<?php echo $data->getPositiveCountJune();?>,
				<?php echo $data->getPositiveCountJuly();?>,
				<?php echo $data->getPositiveCountAugust();?>,
			],
		}]
	},
	options: {
		responsive: true,
		title:{
			display:true,
			text:''
		},
		tooltips: {
			mode: 'index',
			intersect: false,
		},
		hover: {
			mode: 'nearest',
			intersect: true
		},
		scales: {
			xAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: 'Month'
				}
			}],
			yAxes: [{
				display: true,
				scaleLabel: {
					display: true,
					labelString: 'Value'
				}
			}]
		}
	}
};

window.onload = function() {
	var ctx = document.getElementById("chart-area").getContext("2d");
 var ctx2= document.getElementById("canvas").getContext("2d");
	window.myPie = new Chart(ctx, config);
 window.myLine = new Chart(ctx2, config2);
};

document.getElementById('randomizeData').addEventListener('click', function() {
	config.data.datasets.forEach(function(dataset) {
		dataset.data = dataset.data.map(function() {
			return randomScalingFactor();
		});
	});

	window.myPie.update();
});

var colorNames = Object.keys(window.chartColors);
document.getElementById('addDataset').addEventListener('click', function() {
	var newDataset = {
		backgroundColor: [],
		data: [],
		label: 'New dataset ' + config.data.datasets.length,
	};

	for (var index = 0; index < config.data.labels.length; ++index) {
		newDataset.data.push(randomScalingFactor());

		var colorName = colorNames[index % colorNames.length];;
		var newColor = window.chartColors[colorName];
		newDataset.backgroundColor.push(newColor);
	}

	config.data.datasets.push(newDataset);
	window.myPie.update();
});

document.getElementById('removeDataset').addEventListener('click', function() {
	config.data.datasets.splice(0, 1);
	window.myPie.update();
});
</script>

<?php
	if(!isset($_SESSION["login"])){
		$_SESSION["login"] = "0";
	}
	if($_SESSION["login"] == "1"){
		echo'
			<script type="text/javascript">
			$.notify({
				icon: "pe-7s-like2",
				message: "Login Successful"
			},{
			type: "success",
			timer: 3000
			});
			</script>';
			$_SESSION["login"] = "0";
	}
		if(!isset($_SESSION["logout"])){
			$_SESSION["logout"] = "0";
		}
		if($_SESSION["logout"] == "1"){
			echo'
				<script type="text/javascript">
				$.notify({
					icon: "pe-7s-like2",
					message: "Logout Successful"
				},{
				type: "info",
				timer: 3000
				});
				</script>';
				$_SESSION["logout"] = "0";
		}
?>

</html>
