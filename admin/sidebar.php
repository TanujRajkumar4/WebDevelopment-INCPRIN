<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">INC Prin Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block"><?php echo $_SESSION["member_user"];?></a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
    
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="dashboard.php" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages.php" class="nav-link">
              <i class="nav-icon fas fa-book"></i>
              <p>
                CMS Pages
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="client.php" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
               Clients
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="client.php" class="nav-link">
              <i class="nav-icon fas fa-tree"></i>
              <p>
               Markets
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
			  <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="services.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Services</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="products.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Products</p>
                </a>
              </li>
            </ul>
          </li>             
		  <li class="nav-item">
			<a href="features.php?p_ty=tech&p_id=3" class="nav-link">
			  <i class="fas fa-layer-group nav-icon"></i>
			  <p>Technology Features</p>
			</a>
		  </li>
		  <li class="nav-item">
			<a href="file_up.php?p_ty=sus&p_id=4" class="nav-link">
			  <i class="nav-icon far fa-image"></i>
			  <p>Sustainability Report</p>
			</a>
		  </li>  
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
