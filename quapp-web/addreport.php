<!doctype html>
<html lang="en">
<head>
	<?php
		include "header.php";
		include "php/places.php";
		$places = new Places();
		$provinces = $places->getProvinces();
	?>
  <style type="text/css">
    @media only screen and (max-width: 500px) {
      .main-content-panel{
        padding-top:80px;
      }
    }
  </style>
</head>
<body>

	<div class="wrapper">
		<?php include "sidebar.php";?>
		<div class="main-panel">
			<?php include "navbar.php";?>
			<div class="content main-content-panel">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="header">
									<h4 class="title">Add Feeback</h4>
								</div>
								<div class="content">
									<form method="post" action="php/dataactions.php">
										<input type="hidden" name="action" value="feedback">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Region/Province</label>
													<select class="form-control" name="province" id="drpProvince" size="5">
														<?php
															foreach ($provinces as $key => $value) {
																echo '<option>'.$value.'</option>';
															}
														?>
													</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Municipality</label>
													<select class="form-control" name="municipality" id="drpMun" size="5">
														<option></option>
													</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Type of Report</label>
													<select class="form-control" name="typeofreport" size="5">
                <option>Efficient Processing (+)</option>
                <option>Slow process (-)</option>
                <option>Failure to act on request (-)</option>
                <option>Unclear procedures (-)</option>
                <option>Discourtesy (-)</option>
                <option>Act of fixing or bribery (-)</option>
                <option>Extortion (-)</option>
                <option>Imposition of additional cost (-)</option>
                <option>Not observing "No Noon Break" policy (-)</option>
                <option>Unattended hotline number (-)</option>
                <option>Non-issuance of official receipt (-)</option>
                <option>Other (+/-)</option>
													</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Office</label>
													<select class="form-control" name="office" size="5">
                <option>Civil Service Commission</option>
                <option>Commission on Audit</option>
                <option>Commission on Elections</option>
                <option>Department of Agriculture</option>
                <option>Department of Agrarian Reform</option>
                <option>Department of Budget and Management</option>
                <option>Department of Education</option>
                <option>Department of Energy</option>
                <option>Department of Environment and Natural Resources</option>
                <option>Department of Finance</option>
                <option>Department of Foreign Affairs</option>
                <option>Department of Health</option>
                <option>Department of the Interior and Local Government</option>
                <option>Department of Justice</option>
                <option>Department of Labor and Employment</option>
                <option>Department of National Defense</option>
                <option>Department of Public Works and Highways</option>
                <option>Department of Science and Technology</option>
                <option>Department of Social Welfare and Development</option>
                <option>Department of Tourism</option>
                <option>Department of Trade and Industry</option>
                <option>Department of Transportation and Communication</option>
                <option>Bangko Sentral ng Pilipinas</option>
                <option>Career Executive Service Board</option>
                <option>Development Academy of the Philippines</option>
                <option>Development Bank of the Philippines</option>
                <option>Development Bank of the Philippines</option>
                <option>Land Bank of the Philippines</option>
                <option>National Computer Center</option>
                <option>National Council on Disability Affairs</option>
                <option>National Economic and Development Authority</option>
                <option>National Food Authority</option>
                <option>National Mapping and Resource Information Authority</option>
                <option>National Statistics Coordination Board</option>
                <option>National Statistics Office</option>
                <option>National Telecommunications Commission</option>
                <option>Overseas Workers Welfare Administration</option>
                <option>Philippine Health Insurance Corporation</option>
                <option>Securities and Exchange Commission</option>
                <option>Social Security System</option>
                <option>Armed Forces of the Philippines (AFP)</option>
                <option>Philippine Air Force</option>
                <option>Philippine Army</option>
                <option>Philippine Navy</option>
                <option>The Office of the President</option>
                <option>The Supreme Court of the Philippines</option>
                <option>The Senate of the Philippines</option>
                <option>The House of Representatives</option>
													</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Comment</label>
													<textarea rows="5" class="form-control" placeholder="" name="comment"></textarea>
												</div>
											</div>
										</div>

										<button type="submit" class="btn btn-primary btn-fill btn-block pull-right">Send Feedback</button>
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
	if(!isset($_SESSION["report"])){
		$_SESSION["report"] = "0";
	}
	if($_SESSION["report"] == "1"){
		echo'
			<script type="text/javascript">
			$.notify({
				icon: "pe-7s-like2",
				message: "Feedback Recorded"
			},{
			type: "success",
			timer: 3000
			});
			</script>';
			$_SESSION["report"] = "0";
	}
?>
</html>
