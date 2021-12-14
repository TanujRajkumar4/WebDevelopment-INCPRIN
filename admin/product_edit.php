<?php
session_start();
if(!isset($_SESSION["member_id"])){
    header("Location: index.php");
}
include('header.php');
include('sidebar.php');
include('database.php');

$ProductDetails = "";
//ADD New Service Block :START
if (isset($_GET['id']) && $_GET['id'] != "") {
    global $ProductDetails;
    $pr_id = $_GET['id'];
    $qry = "SELECT * FROM `inc_product` WHERE product_id = $pr_id";
    $sql = mysqli_query($dbConn, $qry);
    $ProductDetails = $sql->fetch_assoc();
    if (isset($_POST['edit_product'])) {
        $msg = addslashes($_POST['product_title']);
        $service_ID = $_POST['service_ID_pr'];
        $desc = $_POST['summernote'];
        // $desc = htmlspecialchars($_POST['summernote']);
        $upload_Type = $_POST['up_typ'];
        $logo = "";
        if (isset($_FILES['file_upl']['name']) and ($_FILES['file_upl']['name'] != "")) {
            $i = "logo";
            $i = preg_replace('/[^A-Za-z0-9\-]/', '', $i);
            $ext = explode('.', $_FILES['file_upl']['name']);
            $ext = end($ext);
            $check = strtolower($ext);
            $logo = "assets/img/products/" . uniqid("") . '.' . $ext;
            if (($upload_Type == 0 && ($check == "png" || $check == "jpeg" || $check == "jpg" || $check == "png")) || ($upload_Type == 1 && $check == "mp4")) {
                if (!move_uploaded_file($_FILES['file_upl']['tmp_name'], "../" . $logo)) {
                    echo "<script>alert('File upload error');</script>";
                    echo "<script>window.location.href ='product_edit.php?id=" . $pr_id . "';</script>";
                } else {
                    $logo_old = $ProductDetails['product_img'];
                    if (unlink("../" . $logo_old)) {
                        $qry = "UPDATE `inc_product` SET `service_id`='$service_ID',`product_title`='$msg',`product_desc`='$desc',`product_img`='$logo',`pr_ban_typ`='$upload_Type' WHERE product_id = '$pr_id' ";
                        $sql = mysqli_query($dbConn, $qry);
                        // echo $qry;
                        if ($sql) {
                            echo "<script>alert('Edited Successfully.'); window.location.href = 'products.php';</script>";
                        } else {
                            echo "<script>alert('Not Edited. Retry!'); window.location.href = 'product_edit.php?id=" . $pr_id . "';</script>";
                        }
                    } else {
                        $qry = "UPDATE `inc_product` SET `service_id`='$service_ID',`product_title`='$msg',`product_desc`='$desc',`product_img`='$logo',`pr_ban_typ`='$upload_Type' WHERE product_id = '$pr_id' ";
                        $sql = mysqli_query($dbConn, $qry);
                        if ($sql) {
                            echo "<script>alert('Edited Successfully. Error Deleting OLD Video/Image.'); window.location.href = 'products.php';</script>";
                        } else {
                            echo "<script>alert('Not Edited. Retry!'); window.location.href = 'product_edit.php?id=" . $pr_id . "';</script>";
                        }
                    }
                }
            } else {
                echo "<script>alert('Upload only mp4,jpeg,jpg and png files. Select Correct Upload Type Also.');</script>";
                echo "<script>window.location.href ='product_edit.php?id=" . $pr_id . "';</script>";
                exit();
            }
        } else {
            $qry = "UPDATE `inc_product` SET `service_id`='$service_ID',`product_title`='$msg',`product_desc`='$desc',`pr_ban_typ`='$upload_Type' WHERE product_id = '$pr_id' ";
            $sql = mysqli_query($dbConn, $qry);
            echo $qry;
            if ($sql) {
                echo "<script>alert('Edited Successfully.'); window.location.href = 'products.php';</script>";
            } else {
                echo "<script>alert('Not Edited. Retry!'); window.location.href = 'product_edit.php?id=" . $pr_id . "';</script>";
            }
        }
    }
}
//ADD New Service Block :END
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
                            <h3 class="card-title">Add Products</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->


                        <form method="POST" action="" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="product_title" placeholder="Product Name" value="<?php echo $ProductDetails['product_title']; ?>">
                                </div>
                                <div class="form-group">
                                    <label for="service_ID_pr">Service</label>
                                    <?php
                                    $sql1 = "SELECT * FROM inc_service WHERE service_status = 'A'";
                                    $Services = $dbConn->query($sql1);
                                    ?>
                                    <select name="service_ID_pr" class="form-control">
                                        <option value=-1>Select a Service</option>
                                        <?php foreach ($Services as $Service) : ?>
                                            <option value="<?php echo $Service['service_id']; ?>" <?php if ($Service['service_id'] == $ProductDetails['service_id']) {
                                                                                                        echo "selected";
                                                                                                    } ?>><?php echo $Service['service_name']; ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea id="summernote" name="summernote" class="form-control"> <?php echo $ProductDetails['product_desc']; ?></textarea>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Upload Type</label>
                                    <select id="inputStatus" class="form-control custom-select" name="up_typ">
                                        <option>Select an Upload Type</option>
                                        <option value="0" <?php if ($ProductDetails['pr_ban_typ'] == 0) {
                                                                echo "selected";
                                                            } ?>>Image</option>
                                        <option value="1" <?php if ($ProductDetails['pr_ban_typ'] == 1) {
                                                                echo "selected";
                                                            } ?>>Video</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Current Image/Video</label><br>
                                    <?php if ($ProductDetails['pr_ban_typ'] == '0') { ?>
                                        <img class="" src="../<?php echo $ProductDetails['product_img']; ?>" height="100px">
                                    <?php } else {
                                    ?>
                                        <video autoplay="" loop="" muted="" height="100px">
                                            <source src="../<?php echo $ProductDetails['product_img']; ?>" type="video/mp4">
                                        </video>
                                    <?php } ?>
                                </div>
                                <div class="form-group">
                                    <label for="file_upl">File input: <ex>Upload mp4,jpeg,jpg,png format files only</ex></label>
                                    <div class="input-group">
                                        <div class="custom-file">
                                            <input type="file" class="form-control" id="file_upl" name="file_upl">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->

                            <div class="card-footer">
                                <input type="submit" class="btn btn-primary" name="edit_product" Value="Submit">
                                <input type="reset" class="btn btn-warning" name="clr_features" Value="Reset">
                                <input type="button" class="btn btn-success" name="clr_features" Value="Back" onclick="window.location.assign('products.php#PL')">
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