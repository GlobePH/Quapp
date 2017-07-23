<!doctype html>
<html lang="en">
<head>
	<?php
		include "header.php";
		include "php/places.php";
		$places = new Places();
		$provinces = $places->getProvinces();
	?>
</head>
<body>

	<div class="wrapper">
		<?php include "sidebar.php";?>
		<div class="main-panel">
			<?php include "navbar.php";?>
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="header">
									<h4 class="title">Add Contact Person</h4>
								</div>
								<div class="content">
									<form method="post" action="php/dataactions.php">
										<input type="hidden" name="action" value="login">

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Username</label>
													<input type="text" class="form-control" name="username" value="">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Password</label>
													<input type="password" class="form-control" name="password" value="">
												</div>
											</div>
										</div>

										<button type="submit" class="btn btn-success btn-fill btn-block pull-right">Login</button>
										<div class="clearfix"></div>
									</form>
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
 $('#drpProvince').on('change',function(e){
		//alert($("#drpProvince").val());
		loadcombos();
	});
	function loadcombos(){
   $.ajax({
     type: "GET",
     url: 'php/Municipalities.php',
     data: "province=" + $("#drpProvince").val(),
     success: function(data) {
      $('#drpMun').html(data);
     }
   });
	}
	$(document).ready(function(){
		loadcombos();
	});
</script>


<?php
		if(!isset($_SESSION["login"])){
			$_SESSION["login"] = "0";
		}
		if($_SESSION["login"] == "2"){
			echo'
				<script type="text/javascript">
				$.notify({
					icon: "pe-7s-like2",
					message: "Wrong combination of username and password"
				},{
				type: "danger",
				timer: 3000
				});
				</script>';
				$_SESSION["login"] = "0";
		}
?>
</html>
