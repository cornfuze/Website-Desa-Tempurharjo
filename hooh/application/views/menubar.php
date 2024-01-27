<!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      <li class="nav-item d-none d-sm-inline-block">
        <a href="starter.html" class="nav-link">Beranda</a>
      </li>
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" data-widget="fullscreen" href="#" role="button">
          <i class="fas fa-expand-arrows-alt"></i>
        </a>
      </li>
    </ul>
  </nav>
  <!-- /.navbar -->
  
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
      <a href="<?=base_url('home/logout')?>" class="brand-link">
      <i class="fas fa-sign-out-alt brand-icon img-circle" style="font-size: 1.2em; vertical-align: middle;"></i>
      <span class="brand-text font-weight-light" style="margin-left: 8px; font-size: 1.0em; vertical-align: middle;">Sign Out</span>
  </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <li class="nav-item">
            <a href="<?=base_url('home')?>" class="nav-link <?php if($page == 'home'){echo 'active';}?>">
              <i class="nav-icon fas fa-home"></i>
              <p>
                Beranda
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('home/admkegiatan')?>" class="nav-link <?php if($page == 'adm-kegiatan'){echo 'active';}?>">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Kegiatan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('home/admkeuangan')?>" class="nav-link <?php if($page == 'adm-keuangan'){echo 'active';}?>">
              <i class="nav-icon fas fa-tasks"></i>
              <p>
                Keuangan
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>