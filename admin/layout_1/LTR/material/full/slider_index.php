<?php
include_once($_SERVER['DOCUMENT_ROOT'] . DIRECTORY_SEPARATOR . 'config.php');
$sliderjason = file_get_contents($frontenddatasource . "slider.json");
$slideritems = json_decode($sliderjason);
?>

<!DOCTYPE html>
<html lang="en">

<?php include_once($partials . 'head.php') ?>

<body>

	<?php include_once($partials . 'nav.php') ?>


	<!-- Page content -->
	<div class="page-content">

		<?php include_once($partials . 'sidebar.php') ?>



		<!-- Main content -->
		<div class="content-wrapper">


			<?php include_once($partials . 'pageHeader.php') ?>


			<!-- Content area -->
			<div class="content">

				<?php //include_once($partials.'chart.php') 
				?>



				<!-- Dashboard content -->
				<div class="row">
					<div class="col-xl-12">

						<!-- Bordered table -->
						<div class="card">
							<div class="card-header header-elements-inline">
								<h5 class="card-title">Slides</h5>
								<div class="header-elements">
									<div class="list-icons">
										<a class="list-icons-item" data-action="collapse"></a>
										<a class="list-icons-item" data-action="reload"></a>
										<a class="list-icons-item" data-action="remove"></a>
									</div>
								</div>
							</div>

							<div class="card-body">
								<ul>
									<li><a href="slider_index_grid.php">Grid View</a></li>
									<li><a href="slider_index.php">List View</a></li>
								</ul>
								<a href="slider_create.php">Create</a> | Trash (Delete | Restore) | Download XL | Download PDF | Print View
							</div>

							<div class="table-responsive">
								<table class="table table-bordered">
									<thead>
										<tr>
											<th>#</th>
											<th>Title</th>
											<th>Src</th>
											<!-- <th>Alt</th> -->
											<th>Caption</th>
											<th>Action</th>
										</tr>
									</thead>
									<tbody>

										<?php
										foreach ($slideritems as $key => $slide) :
											// if(0 == $key){
											//  $active = 'active';
											// }else{
											//  $active = '';
											// }
										?>


											<tr>
												<td title="<?= $slide->uuid ?>"><?= ++$key ?></td>
												<td><?= $slide->tittle ?></td>
												<td><img src="<?= $FRONTEND_URL . $slide->src ?>" style="width:60px;height:60px"></td>
												<!-- <td><?= $slide->alt ?></td> -->
												<td><?= $slide->caption ?></td>
												<td> <a href="slider_show.php?id=<?=$slide->id?>">Show</a> | Edit | Delete | Activate/InActive | Copy</td>
											</tr>
										<?php
										endforeach
										?>
									</tbody>
								</table>
							</div>
						</div>
						<!-- /bordered table -->



					</div>
				</div>
				<!-- /dashboard content -->

			</div>
			<!-- /content area -->


			<?php include_once($partials . 'footer.php') ?>


		</div>
		<!-- /main content -->

	</div>
	<!-- /page content -->

</body>

</html>