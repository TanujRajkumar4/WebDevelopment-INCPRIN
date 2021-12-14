<?php
session_start();
if (!isset($_SESSION["member_id"])) {
  header("Location: index.php");
}
include('header.php');
include('sidebar.php');
include('database.php');
$qry = mysqli_query($dbConn, "SELECT * from `inc_media` where status ='A' and id = " . $_GET['page_id']);
$sql = mysqli_fetch_array($qry);
if (isset($_POST['Submit'])) {
  $title = $_POST['title'];
  $media_url = $_POST['media_url'];
  $qry = "UPDATE `inc_media` SET `title` = '$title',`url`='$media_url' WHERE `id`=" . $_GET['page_id'] . " AND `status`='A'";
  $sql = mysqli_query($dbConn, $qry);
  if ($sql) {
    echo "<script>alert('Updated Successfully.');window.location.href ='media.php';</script>";
  } else {
    echo "<script>alert('Not Updated. Please Retry!');window.location.href = 'media_edit.php.php?page_id='" . $_GET['page_id'] . "';</script>";
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
          <h1>CMS Social Media Link | Edit</h1>
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
                <label for="inputName">Media Title</label>
                <input readonly type="text" id="title" name="title" class="form-control" value="<?php echo $sql['title']; ?>">
              </div>
              <div class="form-group">
                <label for="inputName">URL</label>
                <input type="text" id="media_url" name="media_url" class="form-control" value="<?php echo $sql['url']; ?>">
              </div>
            </div>
            <!-- /.card-body -->
            <div class="card-footer">
              <input type="submit" class="btn btn-info" name="Submit" value="Update" />
              <input type="reset" class="btn btn-default" name="Cancel" value="Reset" />
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