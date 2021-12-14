<?php
session_start();
include('header.php');
include('sidebar.php');
include('database.php');
if(isset($_GET['typ']))
{
	if($_GET['typ'] =="add")
	{
		if(isset($_POST['add_client']))
		{
			$cln_nm=$_POST['cln_nm'];
			$logo="";
			if(isset($_FILES['file_upl']['name']) and ($_FILES['file_upl']['name'] != ""))
			{		
			
				$i="logo";
				$i=preg_replace('/[^A-Za-z0-9\-]/', '', $i);
				$ext = explode('.',$_FILES['file_upl']['name']);
				$ext = end($ext);
				$check=strtolower($ext);
				$logo = "assets/img/client/".uniqid(""). '.' .$ext;
				if($check=="png" || $check=="jpeg" || $check=="jpg" || $check=="png")
				{
				if(!move_uploaded_file($_FILES['file_upl']['tmp_name'], "../".$logo)) 
					{
						echo "<script>alert('File upload error');</script>";
						echo "<script>window.location.href ='client.php';</script>";
					 }
				else
					{
						$qry="INSERT INTO `inc_client`(`cli_id`, `cli_name`, `cl_logo`, `cl_status`) VALUES (NULL,'$cln_nm','$logo','A')";
						$sql=mysqli_query($dbConn,$qry);
						// echo $qry;
						if($sql)
						{
						echo "<script>alert('Inserted Successfully.'); window.location.href = 'client.php';</script>";
						}
						else
						{
						echo "<script>alert('Not Inserted. Retry!'); window.location.href = 'client.php';</script>";
						}
					}
				}
				else
				{
					echo "<script>alert('Upload only mp4,jpeg,jpg and png files');</script>";
					echo "<script>window.location.href ='client.php';</script>";
					exit;
				}
			}
		}
	}
	elseif($_GET['typ']=="del")
	{
		$qry=mysqli_query($dbConn,"select cl_logo from inc_client where cli_id=".$_GET['cli_id']);
		$sql=mysqli_fetch_array($qry);
		$logo=$sql['cl_logo'];
		if(unlink("../".$logo))
		{
			$qry="delete from `inc_client` where `cli_id`=".$_GET['cli_id'];
			$sql=mysqli_query($dbConn,$qry);
			if($sql)
			{
			echo "<script>alert('Deleted Successfully.'); window.location.href = 'client.php';</script>";
			}
			else
			{
			echo "<script>alert('Not Deleted. Retry!'); window.location.href = 'client.php';</script>";
			}
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
            <h1>Client Page</h1>
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
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Add Client Logo</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="POST" action="?typ=add" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputEmail1">Client Name</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" name="cln_nm" placeholder="Client Name">
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
                  <input type="submit" class="btn btn-primary" name="add_client" Value="Submit">
                  <input type="reset" class="btn btn-warning" name="clr_client" Value="Reset">
                </div>
              </form>
            </div>
            </div>
          <div class="col-md-6">
			<div class="card">
              <div class="card-header">
                <h3 class="card-title">Client List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Client Name</th>
                      <th>Logo</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
				  <?php
				    if (!isset ($_GET['page']) ) {  
					$page = 1;  
					} else {  
					$page = $_GET['page'];  
					}  
					$res_per_pg = 2;  
					$pge_first_res = ($page-1) * $res_per_pg;  
					$i=1;
				  $sql_sel="select * from inc_client where cl_status='A'";
				  $qry=(mysqli_query($dbConn,$sql_sel));
				  $nu_res = mysqli_num_rows($qry); 
				  $num_pg = ceil ($nu_res/ $res_per_pg);
				  $qry=(mysqli_query($dbConn,$sql_sel." LIMIT ". $pge_first_res . "," . $res_per_pg));
				  while($sql=mysqli_fetch_array($qry))
				  {
				  ?>
                    <tr>
                      <td><?php echo $i;?></td>
                      <td><?php echo $sql['cli_name'];?></td>
                      <td><img src="../<?php echo $sql['cl_logo'];?>" >
                      </td>
                      <td><a class="btn btn-danger btn-sm" href="client.php?typ=del&cli_id=<?php echo $sql['cli_id'];?>"><i class="fas fa-trash"></i>Delete</a></td>
                    </tr>
			  <?php $i=$i+1;}?>					
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
                  <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
				  <?php
				  for($page = 1; $page<= $num_pg; $page++) {  
					echo '<li class="page-item"><a class="page-link" href = "client.php?page=' . $page . '">' . $page . ' </a>';  
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

