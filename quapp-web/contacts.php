<!doctype html>
<html lang="en">
<head>
	<?php include "php/Database.php";?>
	<?php
	include "php/datafunctions.php";
	$data = new datafunctions();
	?>
	<?php include "header.php"; ?>
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
									<h4 class="title">Contacts</h4>
									<p class="category">Showing all Contacts</p>
									<a href="#" class="btn btn-primary">Notify All with Caution Status</a>
								</div>
								<hr>
								<div class="content table-responsive table-full-width">
									<div class="col-lg-12">
										<?php $data->printAllContact();?>
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
