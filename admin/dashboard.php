<?php
session_start();
if (!isset($_SESSION["member_id"])) {
  header("Location: index.php");
}
include('header.php');
include('sidebar.php');
include('database.php');

$sql = "SELECT COUNT(*) AS 'Services_Count' FROM `inc_service` WHERE `service_status` = 'A'";
$qry = mysqli_query($dbConn, $sql);
$Services_Count = mysqli_fetch_array($qry);
$Services_Count = $Services_Count['Services_Count'];

$sql = "SELECT COUNT(*) AS 'Products_Count' FROM `inc_product` WHERE `product_status` = 'A'";
$qry = mysqli_query($dbConn, $sql);
$Products_Count = mysqli_fetch_array($qry);
$Products_Count = $Products_Count['Products_Count'];

$sql = "SELECT COUNT(*) AS 'Clients_Count' FROM `inc_client` WHERE `cl_status` = 'A'";
$qry = mysqli_query($dbConn, $sql);
$Clients_Count = mysqli_fetch_array($qry);
$Clients_Count = $Clients_Count['Clients_Count'];

$sql = "SELECT COUNT(*) AS 'Media_Count' FROM `inc_media` WHERE `status` = 'A'";
$qry = mysqli_query($dbConn, $sql);
$Media_Count = mysqli_fetch_array($qry);
$Media_Count = $Media_Count['Media_Count'];

?>
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Dashboard</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
            <li class="breadcrumb-item"><a href="logout.php">Logout</a></li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-info">
            <div class="inner">
              <h3><?php echo $Services_Count; ?></h3>
              <p>Services</p>
            </div>
            <div class="icon">
              <i class="fas fa-cogs"></i>
            </div>
            <a href="services.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-success">
            <div class="inner">
              <h3><?php echo $Products_Count; ?></h3>
              <p>Products</p>
            </div>
            <div class="icon">
              <i class="ion ion-bag"></i>
            </div>
            <a href="products.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-warning">
            <div class="inner">
              <h3><?php echo $Clients_Count; ?></h3>
              <p>Clients On-Board</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="client.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
          <!-- small box -->
          <div class="small-box bg-danger">
            <div class="inner">
              <h3><?php echo $Media_Count; ?></h3>
              <p>Social Media</p>
            </div>
            <div class="icon">
              <i class="fas fa-users"></i>
            </div>
            <a href="media.php" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
      <!-- /.row -->
      <!-- Main row -->
      <div class="col-6" style="float:left;">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-blue"><i class="fas fa-images"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Image Upload Size Specifications</span>
            <span class="info-box-number">Dimensions: 1024px * 400px & Higher</span>
            <span class="info-box-number">Size: Less than 2 MB</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <div class="col-6" style="float:right;">
        <div class="info-box">
          <!-- Apply any bg-* class to to the icon to color it -->
          <span class="info-box-icon bg-blue"><i class="fas fa-video"></i></span>
          <div class="info-box-content">
            <span class="info-box-text">Video Upload Size Specifications</span>
            <span class="info-box-number">Dimensions: 1280*720 (recommended)</span>
            <span class="info-box-number">Size: Less than 25 MB</span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
      <?php
      include('footer.php');
      ?>