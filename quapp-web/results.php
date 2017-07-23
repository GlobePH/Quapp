<!doctype html>
<html lang="en">
<head>
	<?php include "php/Database.php";?>
	<?php
	include "php/datafunctions.php";
	$data = new datafunctions();
	?>
	<?php include "header.php"; ?>
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
									<h4 class="title">User Feedback</h4>
									<p class="category">Showing all feedbacks</p>
								</div>
								<div class="content table-responsive table-full-width">
									<div class="col-lg-12">
										<?php $data->printAllFeedBack();?>
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
</html>
