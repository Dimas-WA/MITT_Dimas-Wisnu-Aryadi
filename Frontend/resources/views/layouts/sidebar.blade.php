
  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
      
    </ul>

    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
      <!-- Navbar Search -->
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
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('themes') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">InHealth</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

              <li class="nav-item">
                <a href="/dashboard" class="nav-link @if (url()->current() == url('/') || url()->current() == url('dashboard'))
            active
            @endif">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Dashboard</p>
                </a>
              </li>


          <li class="nav-header">MASTER DATA</li>
          <li class="nav-item @if (url()->current() == route('skills.index') || url()->current() == route('skills.create')) menu-open @endif">
            <a href="#" class="nav-link @if (url()->current() == route('skills.index') || url()->current() == route('skills.create')) active @endif">
              <i class="nav-icon fas fa-clipboard-list"></i>
              <!-- <i class="nav-icon far fa-clock"></i> -->
              <p>
                SKILLS
                <!-- <span class="right badge badge-danger">New</span> -->
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('skills.create') }}" class="nav-link @if (url()->current() == route('skills.create')) active @endif">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('skills.index') }}" class="nav-link @if (url()->current() == route('skills.index')) active @endif">
                  <i class="fas fa-search nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item @if (url()->current() == route('skilllevels.create') OR url()->current() == route('skilllevels.index')) menu-open @endif">
            <a href="#" class="nav-link @if (url()->current() == route('skilllevels.index') OR url()->current() == route('skilllevels.create')) active @endif">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Skill Levels
                <!-- <i class="fa-solid fa-users"></i> -->
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('skilllevels.create') }}" class="nav-link @if (url()->current() == route('skilllevels.create')) active @endif">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('skilllevels.index') }}" class="nav-link @if (url()->current() == route('skilllevels.index')) active @endif">
                  <i class="fas fa-search nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item @if (url()->current() == route('userskills.create') OR url()->current() == route('userskills.index')) menu-open @endif">
            <a href="#" class="nav-link @if (url()->current() == route('userskills.create') OR url()->current() == route('userskills.index')) active @endif">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Skilss
                <!-- <i class="fa-solid fa-users"></i> -->
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('userskills.create') }}" class="nav-link @if (url()->current() == route('userskills.create')) active @endif">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('userskills.index') }}" class="nav-link @if (url()->current() == route('userskills.index')) active @endif">
                  <i class="fas fa-search nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>
              <li class="nav-item">
                <a href="{{ route('logout') }}" class="nav-link">
                  <i class="nav-icon fas fa-tachometer-alt"></i>
                  <p>Log-Out</p>
                </a>
              </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>