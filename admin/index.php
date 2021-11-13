<?php
session_start();
include('database.php');
if(isset($_POST['submit']))
{
$qry="select * from inc_admin where adm_status='A' and adm_mail='".$_POST['usr_email']."'";
if(!isset($_COOKIE["member_login"])) {
    $qry .= " and adm_pswd='".$_POST['usr_pwd']."'";
	}
 $result = mysqli_query($dbConn,$qry);
	$user = mysqli_fetch_array($result);
	if($user) {
			$_SESSION["member_id"] = $user["adm_id"];      
			$_SESSION["member_user"] = $user["adm_fullname"];			
			if(!empty($_POST["remember"])) {
				setcookie ("member_login",$_POST["usr_email"],time()+ (10 * 365 * 24 * 60 * 60));
				setcookie ("member_login",$_POST["usr_pwd"],time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["member_login"])) {
					setcookie ("member_login","");
				}
			}
			echo "<script>window.location.href = 'dashboard.php';</script>";
	} else {
		$message = "Invalid Login";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>INCPrin Admin | Log in </title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.php" class="h1"><b>INCPrin</b> Admin</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Sign in to start your session</p>

      <form action="index.php" method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="usr_email" placeholder="Email" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" name="usr_pwd" placeholder="Password" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" name="remember" id="remember" <?php if(isset($_COOKIE["member_login"])) { ?> checked <?php } ?>>
              <label for="remember">
                Remember Me
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" name="submit" id="submit">Sign In</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <!-- /.social-auth-links

      <p class="mb-1">
        <a href="forgot-password.php">I forgot my password</a>
      </p> -->
    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
