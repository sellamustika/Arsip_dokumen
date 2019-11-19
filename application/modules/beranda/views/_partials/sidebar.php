<nav class="sidenav navbar navbar-vertical fixed-left navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header d-flex align-items-center">
        <a class="navbar-brand" href="../../pages/dashboards/dashboard.html">
          <img src="<?php echo base_url('assets/img/brand/blue.png')?>" class="navbar-brand-img" alt="...">
        </a>
        <div class="ml-auto">
          <!-- Sidenav toggler -->
          <div class="sidenav-toggler d-none d-xl-block" data-action="sidenav-unpin" data-target="#sidenav-main">
            <div class="sidenav-toggler-inner">
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
              <i class="sidenav-toggler-line"></i>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <!-- Nav items -->
          
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">ADMIN</h6>
          <ul class="navbar-nav">


            <li class="nav-item  active">
              <a class=" nav-link active " href="<?php echo base_url('dashboard')?>"> <i class="ni ni-tv-2 text-primary"></i> Dashboard
              </a>
            </li>
            <li class="nav-item  active">
              <a class=" nav-link" href="<?php echo base_url('cabang')?>"> <i class="ni ni-building text-success"></i> Cabang
              </a>
            </li>
            <li class="nav-item  active">
              <a class=" nav-link " href="<?php echo base_url('form')?>"> <i class="ni ni-bullet-list-67 text-pink"></i> Data ATB
              </a>
            </li>
             <li class="nav-item  active">
              <a class=" nav-link" href="<?php echo base_url('chart')?>"> <i class="ni ni-chart-pie-35 text-info"></i> Chart
              </a>
            </li>
                     
          </ul>
          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">User</h6>
          <ul class="navbar-nav">


            <li class="nav-item  active">
              <a class=" nav-link active " href="<?php echo base_url('beranda')?>"> <i class="ni ni-tv-2 text-primary"></i> User
              </a>
            </li>
          </ul>

          <!-- Divider -->
          <hr class="my-3">
          <!-- Heading -->
          <h6 class="navbar-heading p-0 text-muted">Log out</h6>
          <!-- Navigation -->
          <ul class="navbar-nav mb-md-3">
            <li class="nav-item">
              <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                <i class="ni ni-spaceship"></i>
                <span class="nav-link-text">Log Out</span>
              </a>
            </li>
           
          </ul>
        </div>
      </div>
    </div>
  </nav>