<?php
session_start();
if (!isset($_SESSION["member_id"])) {
	header("Location: index.php");
}
include('header.php');
include('sidebar.php');
include('database.php');
$P_title = "";
if ($_GET['p_ty'] == "tech") {
	$p_ty = 1;
	$P_title = "Technology";
} elseif ($_GET['p_ty'] == "produ") {
	$p_ty = 0;
	$qry = "SELECT * FROM `inc_product` where product_id=" . $_GET['p_id'] . " and product_status='A'";
	$qry = mysqli_query($dbConn, $qry);
	$sql = mysqli_fetch_array($qry);
	$P_title = $sql['product_title'];
}
if (isset($_GET['typ']) && $_GET['typ'] == "add") {
	if (isset($_POST['add_features'])) {
		$desc = $_POST['summernote'];
		$msg = addslashes($_POST['fea_tit']);
		$logo = "";
		if (isset($_FILES['file_upl']['name']) and ($_FILES['file_upl']['name'] != "")) {

			$i = "logo";
			$i = preg_replace('/[^A-Za-z0-9\-]/', '', $i);
			$ext = explode('.', $_FILES['file_upl']['name']);
			$ext = end($ext);
			$check = strtolower($ext);
			$logo = "assets/img/products/" . uniqid("") . '.' . $ext;
			if ($check == "png" || $check == "jpeg" || $check == "jpg" || $check == "png") {
				if (!move_uploaded_file($_FILES['file_upl']['tmp_name'], "../" . $logo)) {
					echo "<script>alert('File upload error');</script>";
					echo "<script>window.location.href ='features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
				} else {
					$qry = "INSERT INTO `inc_features`(`features_id`, `product_id`, `pg_typ`, `features_title`, `feature_desc`, `file_url`, `feature_status`) VALUES (NULL,'" . $_GET['p_id'] . "','" . $p_ty . "','" . $msg . "','" . $desc . "','" . $logo . "','A')";
					$sql = mysqli_query($dbConn, $qry);
					// echo $qry;
					if ($sql) {
						echo "<script>alert('Inserted Successfully.'); window.location.href = 'features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
					} else {
						echo "<script>alert('Not Inserted. Retry!'); window.location.href = 'features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
					}
				}
			} else {
				echo "<script>alert('Upload only mp4,jpeg,jpg and png files');</script>";
				echo "<script>window.location.href ='features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
				exit;
			}
		} else {
			$qry = "INSERT INTO `inc_features`(`features_id`, `product_id`, `pg_typ`, `features_title`, `feature_desc`, `file_url`, `feature_status`) VALUES (NULL,'" . $_GET['p_id'] . "','" . $p_ty . "','" . $msg . "','" . $desc . "','" . $logo . "','A')";
			$sql = mysqli_query($dbConn, $qry);
			//echo $qry;
			if ($sql) {
				echo "<script>alert('Inserted Successfully.'); window.location.href = 'features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
			} else {
				echo "<script>alert('Not Inserted. Retry!'); window.location.href = 'features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
			}
		}
	}
} elseif (isset($_GET['typ']) && $_GET['typ'] == "del") {
	if ($_GET['p_ty'] == "tech") {
		$qry = mysqli_query($dbConn, "select cl_logo from inc_client where cli_id=" . $_GET['cli_id']);
		$sql = mysqli_fetch_array($qry);
		$logo = $sql['cl_logo'];
		if (unlink("../" . $logo)) {
			$qry = "delete from `inc_client` where `cli_id`=" . $_GET['cli_id'];
			$sql = mysqli_query($dbConn, $qry);
			if ($sql) {
				echo "<script>alert('Deleted Successfully.'); window.location.href = 'features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
			} else {
				echo "<script>alert('Not Deleted. Retry!'); window.location.href = 'features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
			}
		}
	} else {
		$qry = "delete from `inc_client` where `cli_id`=" . $_GET['cli_id'];
		$sql = mysqli_query($dbConn, $qry);
		if ($sql) {
			echo "<script>alert('Deleted Successfully.'); window.location.href = 'features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
		} else {
			echo "<script>alert('Not Deleted. Retry!'); window.location.href = 'features.php?p_ty='" . $_GET['p_ty'] . "'&p_id='" . $_GET['p_id'] . "';</script>";
		}
	}
}
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
	<!-- Content Header (Page header) -->
	<section class="content-header">
		<div class="container-fluid">
			<div class="row mb-2">
				<div class="col-sm-6">
					<h1>Features Page</h1>
				</div>
				<div class="col-sm-6">
					<ol class="breadcrumb float-sm-right">
						<li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
						<li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
					</ol>
				</div>
			</div>
		</div><!-- /.container-fluid -->
	</section>

	<section class="content">
		<div class="container-fluid">
			<div class="row">
				<!-- left column -->
				<div class="col-md-12">
					<!-- general form elements -->
					<div class="card card-primary">
						<div class="card-header">
							<h3 class="card-title">Add Features || <?php echo $P_title; ?></h3>
						</div>
						<!-- /.card-header -->
						<!-- form start -->
						<form method="POST" action="?typ=add&p_ty=<?php echo $_GET['p_ty']; ?>&p_id=<?php echo $_GET['p_id']; ?>" enctype="multipart/form-data">
							<div class="card-body">
								<div class="form-group">
									<label for="exampleInputEmail1">Feature Title</label>
									<input type="text" class="form-control" id="exampleInputEmail1" name="fea_tit" placeholder="Feature Heading">
								</div>
								<div class="form-group">
									<label for="inputDescription">Description</label>
									<textarea id="summernote" name="summernote" class="form-control"> </textarea>
								</div>
								<?php if ($_GET['p_ty'] == "tech") { ?>
									<div class="col-6">
										<div class="info-box">
											<!-- Apply any bg-* class to to the icon to color it -->
											<span class="info-box-icon bg-blue"><i class="fas fa-images"></i></span>
											<div class="info-box-content">
												<span class="info-box-text">Image Upload Size Specifications</span>
												<span class="info-box-number">Dimensions: 200px * 200px </span>
												<span class="info-box-number">Size: Less than 2 MB</span>
											</div>
											<!-- /.info-box-content -->
										</div>
										<!-- /.info-box -->
									</div>
									<div class="form-group">
										<label for="file_upl">File input: <ex>Upload jpeg,jpg,png format files only</ex></label>
										<div class="input-group">
											<div class="custom-file">
												<input type="file" class="form-control" id="file_upl" name="file_upl">
											</div>
										</div>
									</div>
								<?php } ?>
							</div>
							<!-- /.card-body -->

							<div class="card-footer">
								<input type="submit" class="btn btn-primary" name="add_features" Value="Submit">
								<input type="reset" class="btn btn-warning" name="clr_features" Value="Reset">
							</div>
						</form>
					</div>
					<div class="card">
						<div class="card-header">
							<h3 class="card-title">Feature List</h3>
						</div>
						<!-- /.card-header -->
						<div class="card-body">
							<table class="table table-bordered">
								<thead>
									<tr>
										<th style="width: 10px">#</th>
										<th>Feature Title</th>
										<th>Description</th>
										<?php if ($_GET['p_ty'] == "tech") { ?>
											<th>Logo</th>
										<?php } ?>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (!isset($_GET['page'])) {
										$page = 1;
									} else {
										$page = $_GET['page'];
									}
									if ($_GET['p_ty'] == "tech") {
										$typ = 1;
									} elseif ($_GET['p_ty'] == "produ") {
										$typ = 0;
									}
									$res_per_pg = 5;
									$pge_first_res = ($page - 1) * $res_per_pg;
									$i = 1;
									$sql_sel = "SELECT * from inc_features where feature_status='A' and pg_typ=" . $typ . " and product_id=" . $_GET['p_id'];
									$qry = (mysqli_query($dbConn, $sql_sel));
									$nu_res = mysqli_num_rows($qry);
									$num_pg = ceil($nu_res / $res_per_pg);
									$qry = (mysqli_query($dbConn, $sql_sel . " LIMIT " . $pge_first_res . "," . $res_per_pg));
									while ($sql = mysqli_fetch_array($qry)) {
									?>
										<tr>
											<td>#</td>
											<td><?php echo $sql['features_title']; ?></td>
											<td><?php echo $sql['feature_desc']; ?></td>
											<?php if ($_GET['p_ty'] == "tech") { ?><td><img src="../<?php echo $sql['file_url']; ?>">
												</td><?php } ?>
											<td>
												<a class="btn btn-danger btn-sm" href="features.php?p_ty=<?php echo $_GET['p_ty']; ?>&typ=del&p_id=<?php echo $sql['features_id']; ?>"><i class="fas fa-trash"></i>Delete</a>
											</td>
										</tr>
									<?php $i = $i + 1;
									} ?>
								</tbody>
							</table>
						</div>
						<!-- /.card-body -->
						<div class="card-footer clearfix">
							<ul class="pagination pagination-sm m-0 float-right">
								<li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
								<?php
								for ($page = 1; $page <= $num_pg; $page++) {
									echo '<li class="page-item"><a class="page-link" href = "features.php?p_id=' . $_GET['p_id'] . '&p_ty=' . $_GET['p_ty'] . '&page=' . $page . '">' . $page . ' </a>';
								}
								?>
								<li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
							</ul>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>
	<?php
	include('footer.php');
	?>
	<script>
		$(function() {
			// Summernote
			$('#summernote').summernote()

			// CodeMirror
			CodeMirror.fromTextArea(document.getElementById("codeMirrorDemo"), {
				mode: "htmlmixed",
				theme: "monokai"
			});
		})
	</script>