<?php
session_start();
include('header.php');
include('sidebar.php');
include('database.php');
?>  
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>CMS Page</h1>
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
   <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">CMS Pages</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
          </div>
        </div>
		<div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          #
                      </th>
                      <th style="width: 20%">
                          Page Title
                      </th>
                      <th style="width: 30%">
                          Page Description
                      </th>
                      <th style="width: 30%">
                          Banner
                      </th>
                      <th>
                          Action
                      </th>
                  </tr>
              </thead>
			  <tbody>
			  <?php
			    $i=1;
			  $qry=(mysqli_query($dbConn,"select * from inc_page where pg_status='A'"));
			
			  while($sql=mysqli_fetch_array($qry))
			  {
			  ?>
                 <tr>
				 <td><?php echo $i;?></td>
				 <td><?php echo $sql['pg_title'];?></td>
				 <td><?php echo substr($sql['pg_desc'],0,250);?></td>
				 <td><?php 
				 if($sql['pg_ban_typ'] == '0')
				 {
					?>
					<img src="../<?php echo $sql['pg_banner'];?>" style="width: 100%;height: 100%;">
				 <?php
				 }
				 else
				 {
					 ?>
				<video autoplay="" loop="" muted="" style="width: 100%;height: 100%;">
                <source src="../<?php echo $sql['pg_banner'];?>" type="video/mp4"></video>
				<?php
				 }
				 ?></td>
				 <td class="project-actions text-right">
				  <a class="btn btn-info btn-sm" href="pages_edit.php?page_id=<?php echo $sql['pg_id'];?>">
					  <i class="fas fa-pencil-alt">
					  </i>
					  Edit
				  </a>
				</td>
				 </tr>
			  <?php $i=$i+1;}?>
			  </tbody>
			  </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
<?php
include('footer.php');
?>
	