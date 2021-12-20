<?php
session_start();
if (!isset($_SESSION["member_id"])) {
  header("Location: index.php");
}
include('header.php');
include('sidebar.php');
include('database.php');
$qry = mysqli_query($dbConn, "select * from inc_page where pg_status='A' and pg_id=" . $_GET['page_id']);
$sql = mysqli_fetch_array($qry);
if (isset($_POST['Submit'])) {
  $desc =$_POST['summernote'];
  $up_ty = $_POST['up_typ'];
  $msg = addslashes($_POST['pg_title']);
  $logo = $_POST['file_upl_url'];

  //Uploading images
  if (isset($_FILES['file_upl']['name']) and ($_FILES['file_upl']['name'] != "")) {
    unlink("../" . $logo);
    $i = "logo";
    $i = preg_replace('/[^A-Za-z0-9\-]/', '', $i);
    $ext = explode('.', $_FILES['file_upl']['name']);
    $ext = end($ext);
    $check = strtolower($ext);
    $logo = "assets/img/" . uniqid("") . '.' . $ext;
    if ($check == "png" || $check == "jpeg" || $check == "jpg" || $check == "png" || $check == "mp4") {
      if (!move_uploaded_file($_FILES['file_upl']['tmp_name'], "../" . $logo)) {
        echo "<script>alert('File upload error');</script>";
        echo "<script>window.location.href ='pages_edit.php?page_id='" . $_GET['page_id'] . "';</script>";
      } else {
        $qry = "UPDATE `inc_page` SET `pg_title`='" . $msg . "',`pg_ban_typ`='" . $up_ty . "',`pg_banner`='" . $logo . "',`pg_desc`='" . $desc . "' WHERE `pg_id`=" . $_GET['page_id'] . " and `pg_status`='A'";
        $sql = mysqli_query($dbConn, $qry);
        // echo $qry;
        if ($sql) {
          echo "<script>alert('Updated Successfully.');window.location.href ='pages.php';</script>";
        } else {
          echo "<script>alert('Not Updated. Retry!');window.location.href = 'pages_edit.php?page_id='" . $_GET['page_id'] . "';</script>";
        }
      }
    } else {
      echo "<script>alert('Upload only mp4,jpeg,jpg and png files');</script>";
      echo "<script>window.location.href ='pages_edit.php?page_id='" . $_GET['page_id'] . "';</script>";
      exit;
    }
  } else {
    $qry = "UPDATE `inc_page` SET `pg_title`='" . $msg . "',`pg_ban_typ`= '$up_ty',`pg_desc`='" . $desc . "' WHERE `pg_id`=" . $_GET['page_id'] . " and `pg_status`='A'";
    $sql = mysqli_query($dbConn, $qry);
    // echo $qry;
    if ($sql) {
      echo "<script>alert('Updated Successfully.');window.location.href ='pages.php';</script>";
    } else {
      echo "<script>alert('Not Updated. Retry!');window.location.href = 'pages_edit.php?page_id='" . $_GET['page_id'] . "';</script>";
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
          <h1>CMS Page | Edit</h1>
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
    <div class="row">
      <div class="col-md-12">
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">General</h3>
            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <form action="" method="POST" enctype="multipart/form-data">
            <div class="card-body">

              <div class="form-group">
                <label for="inputName">Page Title</label>
                <input type="text" id="inputName" name="pg_title" class="form-control" value="<?php echo $sql['pg_title']; ?>">
              </div>
              <div class="form-group">
                <label for="inputStatus">Upload Type</label>
                <select id="inputStatus" class="form-control custom-select" name="up_typ">
                  <option>Select one</option>
                  <option value="0" <?php if ($sql['pg_ban_typ'] == 0) {
                                      echo "Selected";
                                    } ?>>Image</option>
                  <option value="1" <?php if ($sql['pg_ban_typ'] == 1) {
                                      echo "Selected";
                                    } ?>>Video</option>
                </select>
              </div>
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
              <div class="form-group">
                <label for="file_upl">File input: <ex>Upload jpeg,jpg,png,mp4 format files only</ex></label>
                <div class="input-group">
                  <div class="custom-file">
                    <input type="file" class="form-control" id="file_upl" name="file_upl">
                    <input type="hidden" class="form-control" id="file_upl_url" name="file_upl_url" value="<?php echo $sql['pg_banner']; ?>">
                  </div>
                </div>
              </div>
              <div class="form-group"><?php
                                      if ($sql['pg_ban_typ'] == '0') {
                                      ?>
                  <img src="../<?php echo $sql['pg_banner']; ?>" style="width:25%;height:25%;">
                <?php
                                      } else {
                ?>
                  <video autoplay="" loop="" muted="" style="width: 25%;height: 25%;">
                    <source src="../<?php echo $sql['pg_banner']; ?>" type="video/mp4">
                  </video>
                <?php
                                      }
                ?>
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="summernote" name="summernote" class="form-control"><?php echo $sql['pg_desc']; ?> </textarea>
              </div>

            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <input type="submit" class="btn btn-info" name="Submit" value="Update" />
              <input type="reset" class="btn btn-default" name="Reset" value="Reset" onclick="window.location.reload()" />
            </div>
          </form>
        </div>
        <!-- /.card -->
      </div>

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