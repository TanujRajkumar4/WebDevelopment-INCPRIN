<?php
session_start();
include('header.php');
include('sidebar.php');
include('database.php');

//ADD New Service Block :START
if (isset($_GET['typ']) && $_GET['typ'] == "add") {
    if (isset($_POST['add_service'])) {
        $desc = htmlspecialchars($_POST['summernote']);
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
                    echo "<script>window.location.href ='services.php';</script>";
                } else {
                    $qry = "INSERT INTO `inc_service`(`service_id`, `service_name`, `service_img`, `service_desc`, `service_status`) VALUES (NULL,'$msg','$logo','$desc','A')";
                    $sql = mysqli_query($dbConn, $qry);
                    // echo $qry;
                    if ($sql) {
                        echo "<script>alert('Inserted Successfully.'); window.location.href = 'services.php';</script>";
                    } else {
                        echo "<script>alert('Not Inserted. Retry!'); window.location.href = 'services.php';</script>";
                    }
                }
            } else {
                echo "<script>alert('Upload only mp4,jpeg,jpg and png files');</script>";
                echo "<script>window.location.href ='services.php';</script>";
                exit();
            }
        } else {
            $qry = "INSERT INTO `inc_service`(`service_id`, `service_name`, `service_img`, `service_desc`, `service_status`) VALUES (NULL,'$msg','$logo','$desc','A')";
            $sql = mysqli_query($dbConn, $qry);
            // echo $qry;
            if ($sql) {
                echo "<script>alert('Inserted Successfully. NO IMAGE'); window.location.href = 'services.php';</script>";
            } else {
                echo "<script>alert('Not Inserted. Retry!'); window.location.href = 'services.php';</script>";
            }
        }
    }
}
//ADD New Service Block :END

//DELETE Service Block :START
elseif (isset($_GET['typ']) && $_GET['typ'] == "del") {

    $qry = mysqli_query($dbConn, "SELECT service_img from inc_service where service_id = " . $_GET['id']);
    $sql = mysqli_fetch_array($qry);
    $logo = $sql['service_img'];
    if (unlink("../" . $logo)) {
        $qry = "DELETE FROM `inc_service` where `service_id`=" . $_GET['id'];
        $sql = mysqli_query($dbConn, $qry);
        if ($sql) {
            echo "<script>alert('Deleted Successfully.'); window.location.href = 'services.php';</script>";
        } else {
            echo "<script>alert('Not Deleted. Retry!'); window.location.href = 'services.php';</script>";
        }
    } else {
        $qry = "DELETE FROM `inc_service` where `service_id`=" . $_GET['id'];
        $sql = mysqli_query($dbConn, $qry);
        if ($sql) {
            echo "<script>alert('Deleted Successfully.'); window.location.href = 'services.php';</script>";
        } else {
            echo "<script>alert('Not Deleted. Retry!'); window.location.href = 'services.php';</script>";
        }
    }
}
//DELETE Service Block :END
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Services Page</h1>
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
                            <h3 class="card-title">Add Services</h3>
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form method="POST" action="?typ=add" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Service Title</label>
                                    <input type="text" class="form-control" id="exampleInputEmail1" name="service_title" placeholder="Service Heading">
                                </div>
                                <div class="form-group">
                                    <label for="inputDescription">Description</label>
                                    <textarea id="summernote" name="summernote" class="form-control"> </textarea>
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
                                <input type="submit" class="btn btn-primary" name="add_service" Value="Submit">
                                <input type="reset" class="btn btn-warning" name="clr_features" Value="Reset">
                            </div>
                        </form>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Service List</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th style="width: 10px">#</th>
                                        <th>Service Title</th>
                                        <th>Description</th>
                                        <th>Image</th>
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
                                    // if ($_GET['p_ty'] == "tech") {
                                    //     $typ = 1;
                                    // } else {
                                    //     $typ = 0;
                                    // }
                                    $res_per_pg = 5;
                                    $pge_first_res = ($page - 1) * $res_per_pg;
                                    $i = 1;
                                    $sql_sel = "SELECT * FROM inc_service WHERE service_status ='A'";
                                    $qry = (mysqli_query($dbConn, $sql_sel));
                                    $nu_res = mysqli_num_rows($qry);
                                    $num_pg = ceil($nu_res / $res_per_pg);
                                    $qry = (mysqli_query($dbConn, $sql_sel . " LIMIT " . $pge_first_res . "," . $res_per_pg));
                                    while ($sql = mysqli_fetch_array($qry)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i; ?></td>
                                            <td><?php echo $sql['service_name']; ?></td>
                                            <td><?php echo substr($sql['service_desc'], 0, 100); ?>.....</td>
                                            <td><img src="../<?php echo $sql['service_img']; ?>" height="100px" width="200px"></td>
                                            <td>
                                                <a class="btn btn-info btn-sm" href="service_edit.php?id=<?php echo $sql['service_id']; ?>"><i class="fas fa-pencil-alt"></i>Edit</a>
                                                <a class="btn btn-danger btn-sm" href="services.php?typ=del&id=<?php echo $sql['service_id']; ?>"><i class="fas fa-trash"></i>Delete</a>
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
                                    echo '<li class="page-item"><a class="page-link" href = "services.php?page=' . $page . '">' . $page . ' </a>';
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