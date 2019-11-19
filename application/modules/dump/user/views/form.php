<!--

=========================================================
* Argon Dashboard - v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard
* Copyright 2019 Creative Tim (https://www.creative-tim.com)
* Licensed under MIT (https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software. -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Argon Dashboard - Free Dashboard for Bootstrap 4 by Creative Tim
  </title>
  <!-- Favicon -->
  <link href= "<?php echo base_url('assets/img/brand/favicon.png')?>" rel="icon" type="image/png">
  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <!-- Icons -->
  <link href="<?php echo base_url('/assets/js/plugins/nucleo/css/nucleo.css')?>" rel="stylesheet" />
  <link href="<?php echo base_url('/assets/js/plugins/@fortawesome/fontawesome-free/css/all.min.css')?>" rel="stylesheet" />
  <!-- CSS Files -->
  <link href="<?php echo base_url('/assets/css/argon-dashboard.css?v=1.1.0')?>" rel="stylesheet" />
</head>

<body class="">
  <nav class="navbar navbar-vertical fixed-left navbar-expand-md navbar-light bg-white" id="sidenav-main">
    <div class="container-fluid">
      <!-- Toggler -->
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <!-- Brand -->
      <?php $this->load->view("form/_partials/brand.php")?>
      
      <!-- User -->
      <ul class="nav align-items-center d-md-none">
        <li class="nav-item dropdown">
          <a class="nav-link nav-link-icon" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="ni ni-bell-55"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right" aria-labelledby="navbar-default_dropdown_1">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <div class="media align-items-center">
              <span class="avatar avatar-sm rounded-circle">
                <img alt="Image placeholder" src="<?php echo base_url('/assets/img/theme/team-1-800x800.jpg')?>"
">
              </span>
            </div>
          </a>
          <div class="dropdown-menu dropdown-menu-arrow dropdown-menu-right">
            <div class=" dropdown-header noti-title">
              <h6 class="text-overflow m-0">Welcome!</h6>
            </div>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-single-02"></i>
              <span>My profile</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-settings-gear-65"></i>
              <span>Settings</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-calendar-grid-58"></i>
              <span>Activity</span>
            </a>
            <a href="./examples/profile.html" class="dropdown-item">
              <i class="ni ni-support-16"></i>
              <span>Support</span>
            </a>
            <div class="dropdown-divider"></div>
            <a href="#!" class="dropdown-item">
              <i class="ni ni-user-run"></i>
              <span>Logout</span>
            </a>
          </div>
        </li>
      </ul>
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Collapse header -->
        <div class="navbar-collapse-header d-md-none">
          <div class="row">
            <div class="col-6 collapse-brand">
              <a href="./index.html">
                <img src="./assets/img/brand/blue.png">
              </a>
            </div>
            <div class="col-6 collapse-close">
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#sidenav-collapse-main" aria-controls="sidenav-main" aria-expanded="false" aria-label="Toggle sidenav">
                <span></span>
                <span></span>
              </button>
            </div>
          </div>
        </div>
        <!-- Form -->
        <form class="mt-4 mb-3 d-md-none">
          <div class="input-group input-group-rounded input-group-merge">
            <input type="search" class="form-control form-control-rounded form-control-prepended" placeholder="Search" aria-label="Search">
            <div class="input-group-prepend">
              <div class="input-group-text">
                <span class="fa fa-search"></span>
              </div>
            </div>
          </div>
        </form>
        <!-- Navigation -->
        <?php $this->load->view("form/_partials/menubar.php")?>
  <div class="main-content">
    <!-- Navbar -->
        <?php $this->load->view("form/_partials/header.php")?>
   
    <!-- End Navbar -->
    <!-- Header -->
    <div class="header bg-gradient-primary pb-8 pt-5 pt-md-8">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          
        </div>
      </div>
    </div>
    <div class="container-fluid mt--7">
      <div class="row">
        
       
      </div>

    

      <div class="row mt-5">
        <div class="col-xl-12 mb-12 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Page visits</h3>
                </div>
                <div class="col text-right">
                  <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">
                    <i class= "fa fa-plus"></i>Tambah Data</button>
                </div>
              </div>
            </div>



            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">PID</th>
                    <th scope="col">Cabang</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Status</th>
                    <th scope="col">Tanggal Aplikasi</th>
                    <th scope="col">Tanggal Terima</th>
                    <th scope="col">AN</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($customer as $data): ?>
                          <tr>
                    
                            <td>
                            <?php echo $data->id ?>
                            </td>
                          <td>
                            <?php echo $data->pid ?>
                            </td>
                          <td>
                            <?php echo $data->id_cabang ?>
                            </td>
                          <td>
                            <?php echo $data->nama ?>
                            </td>
                          <td>
                            <?php echo $data->status ?>
                            </td>
                          <td>
                            <?php echo $data->tgl_aplikasi ?>
                            </td>
                          <td>
                            <?php echo $data->tgl_terima ?>
                            </td>
                          <td>
                            <?php echo $data->an ?>
                            </td>
                   
                   
                   
                    <td width="250">
                      <a href="#" class="btn btn-small"><i class="far fa-edit"></i> Edit</a>
                      <a href="#" class="btn btn-small text-danger"><i class="far fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
               
      
        
            </div>
          </div>
        </div>
       
      </div>
      <div class="modal fade" id = "tambah" tabindex="-1" role ="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-tittle"> Tambah Data</h4>

          </div>
          <form action="<?php echo base_url('form/add')?>" method="POST" enctype="multipart/form-data">
            <div class="modal-body">
              
              <div class ="form-group">
                <label class="col-sm-3 control-label">PID</label>
                <div class="col-sm-4">
                  <input type="text" name="pid" class="form-control" placeholder="PID">
                </div>               
              </div>
              <div class ="form-group">
                <label class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>               
              </div>
              <div class ="form-group">
                <label class="col-sm-3 control-label">Cabang</label>
                <div class="col-sm-6">
                  <select class = "form-control" name="id_cabang">
                    <?php foreach ($cabang as $cabang): ?>
                              <option><?php echo $cabang->cabang?></option>
                            <?php endforeach; ?>
                  </select>
                </div>               
              </div>
              <div class ="form-group">
                <label class="col-sm-3 control-label">Status</label>
                <div class="col-sm-10">
                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="optionsRadios2" value="tolak">
                      Tolak
                    </label> 
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="batal">
                      Batal
                    </label>
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="pending">
                      Pending
                    </label> 
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="tdkinput">
                      Sistem Tidak Input
                    </label> 
                  </div>
                  

                  <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>               
              </div>
               <div class ="form-group">
                <label class="col-sm-3 control-label">Tanggal Terima</label>
                <div class="col-sm-6">
                  <div class="col-md-8 col-xs-11">
                    <input name = "tgl_terima" class="form-control form-control-inline input-medium default-date-picker" size="16" type="date" value="">
                    <span class="help-block">Select date</span>
                  </div>
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>

              </div>
              <div class ="form-group">
                <label class="col-sm-3 control-label">Tanggal Aplikasi</label>
                <div class="col-sm-6">
                  <div class="col-md-8 col-xs-11">
                    <input name ="tgl_aplikasi" class="form-control form-control-inline input-medium default-date-picker" size="16" type="date" value="">
                    <span class="help-block">Select date</span>
                  </div>
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Analisa</label>
                  <div class="col-md-4">
                    <input type="file" id="an" name="an" class="default" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Survey</label>
                  <div class="col-md-4">
                    <input type="file" class="default" />
                  </div>
                </div>
                <div class="form-group">
                  <label class="control-label col-md-3">Perjanjian</label>
                  <div class="col-md-4">
                    <input type="file" class="default" />
                  </div>
                </div>

              </div>



            
            </div>

            <div class="modal-footer">
              <button class="btn btn-theme" type="submit">Save</button>
              <button type="button" class="btn btn-default" data-dismiss="modal">Batal</button>
            </div>
          </form>
        </div>

        
      </div>
    </div>
      <!-- Footer -->
      <?php $this->load->view("form/_partials/footer.php")?>
      
    </div>
  </div>
  <!--   Core   -->
 <?php $this->load->view("form/_partials/js.php")?>

  <script>
    window.TrackJS &&
      TrackJS.install({
        token: "ee6fab19c5a04ac1a32a645abde4613a",
        application: "argon-dashboard-free"
      });
  </script>
 
</body>

</html>