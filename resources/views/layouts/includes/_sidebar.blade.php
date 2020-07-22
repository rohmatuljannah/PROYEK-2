<aside class="main-sidebar sidebar-dark-primary elevation-4" style="min-height: 672px">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link bg-primary">
      <img src="/adminlte/dist/img/logo.png" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Social Class</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/adminlte/dist/img/user.png" class="img-circle elevation-2">
        </div>
        <div class="info">
          <a href="{{route('admin-profil')}}" class="d-block">Admin</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview"  data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="/admin/dashboard" class="nav-link">
              <i class="nav-icon fa fa-home"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/aktivitas" class="nav-link">
              <i class="nav-icon fa fa-book"></i>
              <p>
                Data Aktivitas
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="/admin/datavolunteer" class="nav-link">
              <i class="nav-icon fa fa-group"></i>
              <p>
                Data Volunteer
              </p>
            </a>
          </li>
           <li class="nav-item">
            <a href="/admin/detail-act" class="nav-link">
              <i class="nav-icon fa fa-th"></i>
              <p>
                Laporan
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="/admin/logout" class="nav-link">
              <i class="nav-icon fa fa-sign-out"></i>
              <p>
                Log Out
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>