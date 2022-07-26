
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
      <img src="{{ asset('themes') }}/dist/img/msig_white_vertical.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">MSIG B.T.R.N</span>
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
            @if (session('role') != 'Subscriber')
            @if (session('role') != 'Approver')
              
              <li class="nav-header">IMPORTS</li>
          <li class="nav-item @if (url()->current() == route('schedule-upload.index') || url()->current() == route('schedule-upload.create')) menu-open @endif">
            <a href="#" class="nav-link @if (url()->current() == route('schedule-upload.index') || url()->current() == route('schedule-upload.create')) active @endif">
              <i class="nav-icon far fa-calendar-alt"></i>
              <!-- <i class="nav-icon far fa-clock"></i> -->
              <p>
                Schedule Import
                <!-- <span class="right badge badge-danger">New</span> -->
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('schedule-upload.create') }}" class="nav-link @if (url()->current() == route('schedule-upload.create')) active @endif">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('schedule-upload.index') }}" class="nav-link @if (url()->current() == route('schedule-upload.index')) active @endif">
                  <i class="fas fa-search nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item @if (url()->current() == route('manual-upload.index') || url()->current() == route('manual-upload.create')) menu-open @endif">
            <a href="#" class="nav-link @if (url()->current() == route('manual-upload.index') || url()->current() == route('manual-upload.create')) active @endif">
              <i class="nav-icon fas fa-file-import"></i>
              <p>
                Manual Import
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('manual-upload.create') }}" class="nav-link @if (url()->current() == route('manual-upload.create')) active @endif">
                  <i class="far fa-plus-square nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('manual-upload.index') }}" class="nav-link @if (url()->current() == route('manual-upload.index')) active @endif">
                  <i class="fas fa-search nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>
          
          @endif
          
          @endif
          <!-- session('role') == 'Editor' || session('role') == 'Approver' -->
          @if (session('role') == 'Editor')
            
          <li class="nav-header">DATA</li>
          <!-- <li class="nav-item menu-open"> -->
          <li class="nav-item @if (url()->current() == route('banks.index') || url()->current() == route('banks.create')) menu-open @endif">
            <a href="#" class="nav-link @if (url()->current() == route('banks.index') || url()->current() == route('banks.create')) active @endif">
              <i class="nav-icon fas fa-university"></i>
              <p>
                Bank Account
                <!-- <i class="fa-solid fa-users"></i> -->
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('banks.create') }}" class="nav-link @if (url()->current() == route('banks.create')) active @endif">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('banks.index') }}" class="nav-link @if (url()->current() == route('banks.index')) active @endif">
                  <i class="fas fa-search nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item @if (url()->current() == route('virtual-accounts.create') OR url()->current() == route('virtual-accounts.index')) menu-open @endif">
            <a href="#" class="nav-link @if (url()->current() == route('virtual-accounts.index') OR url()->current() == route('virtual-accounts.create')) active @endif">
              <i class="nav-icon fas fa-money-check-alt"></i>
              <p>
                Virtual Account
                <!-- <i class="fa-solid fa-users"></i> -->
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('virtual-accounts.create') }}" class="nav-link @if (url()->current() == route('virtual-accounts.create')) active @endif">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Add</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('virtual-accounts.index') }}" class="nav-link @if (url()->current() == route('virtual-accounts.index')) active @endif">
                  <i class="fas fa-search nav-icon"></i>
                  <p>View</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
          @if (session('role') != 'Approver')
          <li class="nav-header">TRANSACTION</li>
          <!-- <li class="nav-item menu-open"> -->
          <li class="nav-item">
            <a href="{{ route('inquiry.search') }}" class="nav-link @if (url()->current() == route('inquiry.search') || url()->current() == route('inquiry.result')) active @endif">
              <!-- <i class="nav-icon far fa-calendar-alt"></i> -->
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Inquiry
                <!-- <span class="right badge badge-danger">Edit</span> -->
                <span class="right badge badge-warning">Report</span>
              </p>
            </a>
          </li>
          @if (session('role') != 'Subscriber')
            
          <li class="nav-item">
            <a href="{{ route('inquiry.search_edit') }}" class="nav-link @if (url()->current() == route('inquiry.search_edit') || url()->current() == route('inquiry.result_edit')) active @endif">
              <!-- <i class="nav-icon far fa-calendar-alt"></i> -->
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Inquiry
                <!-- <span class="right badge badge-danger">Edit</span> -->
                <span class="right badge badge-danger">Edit</span>
              </p>
            </a>
          </li>
          @endif
          @endif

          @if (session('role') == 'Editor' || session('role') == 'Approver')
          <li class="nav-header">TRX UPDATE</li>
          <li class="nav-item">
            <a href="{{ route('trx-progress.index') }}" class="nav-link @if (url()->current() == route('trx-progress.index') || url()->current() == route('trx-progress.create')) active @endif">
              <!-- <i class="nav-icon far fa-calendar-alt"></i> -->
              <i class="nav-icon fas fa-clipboard-list"></i>
              <p>
                Update
                <!-- <span class="right badge badge-danger">Edit</span> -->
                <span class="right badge badge-warning">Progress</span>
              </p>
            </a>
          </li>

          @endif

          @if (session('role') == 'Administrator')
          <li class="nav-header">ADMIN</li>
          <!-- <li class="nav-item menu-open"> -->
          <li class="nav-item @if (url()->current() == route('useraccess.create') OR url()->current() == route('useraccess.index')) menu-open @endif">
            <a href="#" class="nav-link @if (url()->current() == route('useraccess.create') OR url()->current() == route('useraccess.index')) active @endif">
              <i class="nav-icon fas fa-users"></i>
              <p>
                User Access
                <!-- <i class="fa-solid fa-users"></i> -->
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('useraccess.create') }}" class="nav-link @if (url()->current() == route('useraccess.create')) active @endif">
                  <i class="fas fa-user-plus nav-icon"></i>
                  <p>Add User</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('useraccess.index') }}" class="nav-link @if (url()->current() == route('useraccess.index')) active @endif">
                  <i class="fas fa-search nav-icon"></i>
                  <p>View User</p>
                </a>
              </li>
            </ul>
          </li>
          @endif
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>