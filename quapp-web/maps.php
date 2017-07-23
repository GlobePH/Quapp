<!doctype html>
<html lang="en">
<head>
	<?php
	error_reporting(0);
	include "php/Database.php";?>
	<?php
	include "php/datafunctions.php";
	include "header.php";
	include "php/places.php";
	$data = new datafunctions();
	$places = new Places();
	$provinces = $places->getProvinces();
	?>
	<?php include "header.php"; ?>
</head>
<body>

	<div class="wrapper">
		<?php include "sidebar.php";?>

		<div class="main-panel main-content-panel">
			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-md-12">
							<div class="card">
								<div class="header">
									<h4 class="title">Feedback Map</h4>
									<p class="category"></p>
								</div>

								<div class="content table-responsive table-full-width">
									<div class="col-lg-4">
										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Place Filter</label>
													<select class="form-control" name="province" id="drpProvince">
														<option>Philippines</option>
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
													<label>Type of Report</label>
													<select class="form-control" name="typeofreport" size="7" id="drpReport">
                <option>All</option>
                <option>Efficient Processing</option>
                <option>Slow process</option>
                <option>Failure to act on request</option>
                <option>Unclear procedures</option>
                <option>Discourtesy</option>
                <option>Act of fixing or bribery</option>
                <option>Extortion</option>
                <option>Imposition of additional cost</option>
                <option>Not observing "No Noon Break" policy</option>
                <option>Unattended hotline number</option>
                <option>Non-issuance of official receipt</option>
                <option>Other</option>
													</select>
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-12">
												<div class="form-group">
													<label>Office</label>
													<select class="form-control" name="office" size="7" id="drpOffice">
                <option>All</option>
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

									</div>
									<div class="col-lg-8 col-sm-4 col-md-4">
										<div class="col-lg-12 col-sm-4" id="maps">
										</div>
									</div>

										<div class="footer">
											<div class="legend">
												<i class="fa fa-circle text-danger"></i> Negative Result
												<i class="fa fa-circle" style="color:green;"></i> Positive Result
												<i class="fa fa-circle" style="color:blue"></i> Neutral Result
												<i class="fa fa-circle" style="color:black"></i> No Feedback Yet
											</div>
										</div>

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
<?php include "footerjs.php";?>
<script type="text/javascript">
var strProvince = "philippines";
var strReport = "All";
var strOffice = "All";

$('#drpProvince').on('change',function(e){
	if(($("#drpProvince").val()) == "Philippines"){
		strProvince = "philippines";
	}
	if(($("#drpProvince").val()) == "Metro Manila"){
		strProvince = "metromanila";
	}
	if(($("#drpProvince").val()) == "Batangas"){
		strProvince = "batangas";
	}
	loadcombos(strProvince, strReport, strOffice);
});

$('#drpReport').on('change',function(e){
	strReport = $("#drpReport").val();
	loadcombos(strProvince, strReport, strOffice);
});

$('#drpOffice').on('change',function(e){
	strOffice = $("#drpOffice").val();
	loadcombos(strProvince, strReport, strOffice);
});

function loadcombos(strProvince2, strReport2, strOffice2){
	$.ajax({
		type: "GET",
		url: 'maps/' + strProvince2 + '.php',
		data: "report=" + strReport2 + "&office=" + strOffice2,
		success: function(data) {
			$('#maps').html(data);
		}
	});
}
loadcombos(strProvince, strReport, strOffice);

</script>
</html>
