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


          <!-- query menu -->

          <?php
              $role_id = $this->session->userdata('role_id');
              $queryMenu = "SELECT `user_menu`.`id`,`menu`
                              FROM `user_menu` JOIN `user_access_menu` 
                              ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                              WHERE `user_access_menu`.`role_id` = $role_id
                              ORDER BY `user_access_menu`.`menu_id` ASC
                              ";
              $menu = $this->db->query($queryMenu)->result_array();
          ?>
          <!-- LOOPING MENU -->
          <?php foreach ($menu as $m) :?>
                     
          <!-- Heading -->

          <h6 class="navbar-heading p-0 text-muted"><?= $m['menu']?></h6>


          <!-- SIAPKAN SUB-MENU SESUAI MENU -->
          <?php
            $menuId = $m['id'];
            $querySubMenu = "SELECT *
                              FROM `user_sub_menu` JOIN `user_menu` 
                              ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                              WHERE `user_sub_menu`.`menu_id` = $menuId
                              AND `user_sub_menu`.`is_active` = 1
                              ";
              $subMenu = $this->db->query($querySubMenu)->result_array();

          ?>
          <?php foreach ($subMenu as $sm) :?>
            <ul class="navbar-nav">
              <li class="nav-item  active">
                <a class=" nav-link" href="<?php echo base_url($sm['url']);?>"> <i class="<?= $sm['icon'];?>"></i>
                  <?= $sm['title'];?>
                </a>
              </li>
            </ul>


          <?php endforeach; ?>

          <hr class="my-3">


          <?php endforeach; ?>

         

          <!-- Divider -->
          <!-- <hr class="my-3"> -->
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