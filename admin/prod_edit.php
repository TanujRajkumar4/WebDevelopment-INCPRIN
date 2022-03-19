<?php
session_start();
if (!isset($_SESSION["member_id"])) {
    header("Location: index.php");
}
include('header.php');
include('sidebar.php');
include('database.php');

$ServiceDetails = "";
//ADD New Product Block :START
if (isset($_GET['id']) && $_GET['id'] != "") {
    global $ServiceDetails;
    $s_id = $_GET['id'];
    $qry = "SELECT * FROM `inc_service` WHERE service_id = $s_id";
    $sql = mysqli_query($dbConn, $qry);
    $ServiceDetails = $sql->fetch_assoc();
    if (isset($_POST['edit_service'])) {
        // $desc = htmlspecialchars($_POST['summernote']);
        $desc = str_replace("'", "\\'", $_POST['summernote']);
        $msg = addslashes($_POST['service_title']);
        $logo = "";
        if (isset($_FILES['file_upl']['name']) and ($_FILES['file_upl']['name'] != "")) {
            $i = "logo";
            $i = preg_replace('/[^A-Za-z0-9\-]/', '', $i);
            $ext = explode('.', $_FILES['file_upl']['name']);
            $ext = end($ext);
            $check = strtolower($ext);
            $logo = "assets/img/services/" . uniqid("") . '.' . $ext;
            if ($check == "png" || $check == "jpeg" || $check == "jpg" || $check == "png") {
                if (!move_uploaded_file($_FILES['file_upl']['tmp_name'], "../" . $logo)) {
                    echo "<script>alert('File upload error');</script>";
                    echo "<script>window.location.href ='prod_edit.php?id=" . $s_id . "';</script>";
                } else {
                    $logo_old = $ServiceDetails['service_img'];
                    if (@unlink("../" . $logo_old)) {
                        $qry = "UPDATE `inc_service` SET `service_name`='$msg',`service_img`='$logo',`service_desc`='$desc' WHERE service_id = '$s_id'";
                        $sql = mysqli_query($dbConn, $qry);
                        // echo $qry;
                        if ($sql) {
                            echo "<script>alert('Edit Successful.'); window.location.href = 'prod.php';</script>";
                        } else {
                            echo "<script>alert('Not Edited. Retry!'); window.location.href = 'prod_edit.php?id=" . $s_id . "';</script>";
                        }
                    } else {
                        $qry = "UPDATE `inc_service` SET `service_name`='$msg',`service_img`='$logo',`service_desc`='$desc' WHERE service_id = '$s_id'";
                        $sql = mysqli_query($dbConn, $qry);
                        // echo $qry;
                        if ($sql) {
                            echo "<script>alert('Edit Successful. Error Deleting OLD Video/Image. Delete Manually from the Server'); window.location.href = 'prod.php';</script>";
                        } else {
                            echo "<script>alert('Not Edited. Retry!'); window.location.href = 'prod_edit.php?id=" . $s_id . "';</script>";
                        }
                    }
                }
            } else {
                echo "<script>alert('Upload only jpeg,jpg and png files');</script>";
                echo "<script>window.location.href ='prod_edit.php?id=" . $s_id . "';</script>";
                exit();
            }
        } else {
            $qry = "UPDATE `inc_service` SET `service_name`='$msg',`service_desc`='$desc' WHERE service_id = '$s_id'";
            $sql = mysqli_query($dbConn, $qry);
            // echo $qry;
            if ($sql) {
                echo "<script>alert('Edit Successful.'); window.location.href = 'prod.php';</script>";
            } else {
                echo "<script>alert('Not Edited. Retry!'); window.location.href = 'prod_edit.php?id=" . $s_id . "';</script>";
            }
        }
    }
}
//ADD New Product Block :END
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Products Page</h1>
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
                            <h3 class="card-title">Edit Product</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="service_title" placeholder="Feature Heading" value="<?php echo $ServiceDetails['service_name']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea id="summernote" name="summernote" class="form-control"><?php echo $ServiceDetails['service_desc']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="serviceImage">Current Product Image</label><br>
                                    <img src="<?php echo "../" . $ServiceDetails['service_img']; ?>" height="100px" width="180px">

                                </div>
                                <div class="col-12">
                                    <div class="info-box">
                                        <!-- Apply any bg-* class to to the icon to color it -->
                                        <span class="info-box-icon bg-blue"><i class="fas fa-video"></i></span>
                                        <div class="info-box-content">
                                            <span class="info-box-text">Image Upload Size Specifications</span>
                                            <span class="info-box-number">Dimensions: Height: 200px * Width: 400px (recommended)</span>
                                            <span class="info-box-number">Size: Less than 3 MB</span>
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
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="edit_service" Value="Submit">
                                <input type="reset" class="btn btn-warning" name="clr_features" Value="Reset">
                                <input type="button" class="btn btn-success" name="clr_features" Value="Back" onclick="window.location.assign('prod.php#SL')">
                            </div>
                        </form>
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