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
    Admin
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
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')?>"/>
  <link rel="stylesheet" href="<?php echo base_url('/assets/vendor/datatables.net-select-bs4/css/select.bootstrap4.min.css')?>"/>

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

      <div class="container-fluid mt--6">
      <!-- Table -->
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Manage Data</h3><br>
              <button class="btn btn-sm btn-primary" data-toggle="modal" data-target="#tambah">
                    <i class= "fa fa-plus"></i>Tambah Data</button>
            </div>
            <div class="table-responsive py-4">
              <table class="table table-flush" id="datatable-basic">
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

                            <?php

                            $st = $data->status;

                            if ($st == 'Pending') {
                             echo "<span class='badge badge-info'>Pending</span>";
                            }elseif ($st == 'Tolak') {
                              echo "<span class='badge badge-warning'>Tolak</span>";
                            }elseif ($st == 'Batal'){
                              echo "<span class='badge badge-danger'>Batal</span>";
                            }else {
                              echo "<span class='badge badge-secondary'>Sistem Tidak Input</span>";
                            }

                            ?>

                          </td>
                          <td>
                            <?php echo $data->tgl_aplikasi ?>
                            </td>
                          <td>
                            <?php echo $data->tgl_terima ?>
                            </td>
                          <td>

                          <?php if (empty($data->an)){ ?>
                            <span class="badge badge-pill badge-secondary">File AN Tidak Ada</span>
                          <?php } else { ?>
                            <span class="badge badge-pill badge-success">File AN Tersedia </span>
                          <?php } ?>

                          <?php if (empty($data->pj)){ ?>
                            <span class="badge badge-pill badge-secondary">File PJ Tidak Ada</span>
                          <?php } else { ?>
                            <span class="badge badge-pill badge-danger">File PJ Tersedia </span>
                          <?php } ?>

                          <?php if (empty($data->sv)){ ?>
                            <span class="badge badge-pill badge-secondary">File SV Tidak Ada</span>
                          <?php } else { ?>
                            <span class="badge badge-pill badge-warning">File SV Tersedia </span>
                          <?php } ?>
                            
                          </td>
                   
                   
                   
                          <td width="300">
                              <div class="row row-example">
                                <button type="button" class="btn btn-info" data-toggle="modal" data-target="#modal-notification<?php echo $data->id ?>"><i class="fas fa-download"></i></button>

                                <div class="col">
                                  <button type = "button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#modal-update<?php echo $data->id ?>"><i class="fas fa-edit"></i></button>

                                </div>
                                <div class="col">
                                  <button type = "button" class="btn btn-block btn-danger mb-2"  data-toggle="modal" data-target="#delete"><i class="fas fa-trash"></i></button>
                                </div>
                                <div class="modal fade" id="modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
                                  <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
                                    <div class="modal-content bg-gradient-danger">
                              
                                <div class="modal-header">
                                    <h6 class="modal-title" id="modal-title-notification">Detail</h6>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                </div>
            
                                <div class="modal-body">
              
                                <div class="py-3 text-center">
                                  <button type="button" class="btn btn-success">AN</button>
                                  <button type="button" class="btn btn-info">PJ</button>
                                  <button type="button" class="btn btn-warning">SV</button>
                                    <!-- <i class="ni ni-bell-55 ni-3x"></i> -->
                                    
                                </div>
                                
                              </div>
                            
                              <div class="modal-footer">
                                  <button type="button" class="btn btn-white">Ok, Got it</button>
                                  <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
                              </div>
                              
                                    </div>
                                  </div>
                                </div>
                              </div>
                      <!-- <a href="#" class="btn btn-small"><i class="far fa-edit"></i> Edit</a>
                      <a href="#" class="btn btn-small text-danger"><i class="far fa-trash"></i> Hapus</a> -->
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
               
           
                </tbody>
              </table>
            </div>
          </div>
          


<div class="modal fade" tabindex="-1" role="dialog" id="removeModal">
  <div class="modal-dialog" role="document" style="margin-top: 10%;border-radius: 20px;">
    <div class="modal-content">
      <div class="modal-header bg-orange">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove Category</h4>
      </div>

      <form role="form" action="<?php echo base_url('form/remove') ?>" method="post" id="removeForm">
        <div class="modal-body">
          <center><li class="fa fa-warning" style="font-size: 50px;"></li></center>
          <p>Do you really want to remove?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-primary">Save changes</button>
        </div>
      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->



<?php foreach ($customer as $data): ?>
<div class="col-md-4">
  <div class="modal fade" id="modal-notification<?php echo $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-info modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-info">
              
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Download Your Data</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
                
            <div class="modal-body">
                  
                <div class="py-3 text-center">
                    <i class="ni ni-cloud-download-95 ni-3x"></i>
                    <h1 class="heading mt-4">PID : <?php echo $data->pid ?></h1>
                    <p class="heading mt-4">Nama : <?php echo $data->nama ?></p>
                    <p>Download File AN / PJ / SV </p>
                    <p>

                        <?php 

                          if (empty($data->an)){

                        ?>                          
                          <button disabled class="btn btn-icon btn-block btn-3 btn-secondary mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Tidak Ada File AN</span>
                              
                          </button>

                          <?php } else { ?>

                          <a href="<?php echo base_url('/assets/dokumen/an/'.$data->an)?>" target=_blank>
                          <button class="btn btn-icon btn-block btn-3 btn-success mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Download File AN</span>
                              
                          </button></a>
                      <?php } ?>

                      <?php 

                          if (empty($data->pj)){

                        ?>                          
                          <button disabled class="btn btn-icon btn-block btn-3 btn-secondary mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Tidak Ada File PJ</span>
                              
                          </button>

                          <?php } else { ?>

                          <a href="<?php echo base_url('/assets/dokumen/an/'.$data->pj)?>" target=_blank>
                          <button class="btn btn-icon btn-block btn-3 btn-danger mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Download File PJ</span>
                              
                          </button></a>
                      <?php } ?>

                      <?php 

                          if (empty($data->sv)){

                        ?>                          
                          <button disabled class="btn btn-icon btn-block btn-3 btn-secondary mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Tidak Ada File SV</span>
                              
                          </button>

                          <?php } else { ?>

                          <a href="<?php echo base_url('/assets/dokumen/an/'.$data->sv)?>" target=_blank>
                          <button class="btn btn-icon btn-block btn-3 btn-warning mb-3" type="button">
                            <span class="btn-inner--icon"><i class="ni ni-paper-diploma"></i></span>
                            
                              <span class="btn-inner--text">Download File SV</span>
                              
                          </button></a>
                      <?php } ?>

                    </p>
                </div>
                    
            </div>
                
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-white">Ok, Got it</button> -->
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
            </div>
                
        </div>
    </div>
  </div>
</div>
<?php endforeach; ?>



<?php foreach ($customer as $data): ?>
<div class="col-md-6">
  <div class="modal fade" id="modal-update<?php echo $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-update" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
              
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Download Your Data</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
                
            <div class="modal-body">
                  
                <div class="py-3 text-center">
                    <form action="<?php echo base_url('form/update')?>" method="POST" enctype="multipart/form-data">

             <div class="form-group">
             <input class="form-control <?php echo form_error('id') ? 'is-invalid':'' ?>"
                 type="text" name="id" value = "<?php echo $data->id ?>" />
                <div class="invalid-feedback">
                  <?php echo form_error('id') ?>
                </div>
              </div>
            
              
              <div class ="form-group row">
                <label class="col-sm-3 control-label">PID</label>
                <div class="col-sm-4">
                  <input type="text" name="pid" class="form-control <?php echo form_error('pid') ? 'is-invalid':'' ?>" 
                  value = "<?php echo $data->pid ?>"/>
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" name="nama" class="form-control <?php echo form_error('nama') ? 'is-invalid':'' ?>"
                   value = "<?php echo $data->nama ?>"/>
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Cabang</label>
                <div class="col-sm-6">
                  
                 <input type="text" name="id_cabang" class="form-control <?php echo form_error('id_cabang') ? 'is-invalid':'' ?>"
                   value = "<?php echo $data->id_cabang ?>"/>
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Status</label>
                <div class="col-sm-8">

                  <div class="radio">
                    <label>
                      <input type="radio" name="status" id="optionsRadios2" value="tolak" <?php if($data->status == 'Tolak') {
                        echo "checked";
                      } ?>>
                      Tolak
                    </label> 
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="batal" <?php if($data->status  == 'Batal') {
                        echo "checked";
                      } ?>>
                      Batal
                    </label>
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="pending" <?php if($data->status  == 'Pending') {
                        echo "checked";
                      } ?>>

                      Pending
                    </label> 
                     <label>
                      <input type="radio" name="status" id="optionsRadios2" value="tdkinput" <?php if($data->status  == 'tdkinput') {
                        echo "checked";
                      } ?>>
                      Sistem Tidak Input
                    </label> 
                  </div>
                  

                  <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>               
              </div>
               <div class ="form-group row">
                <label class="col-sm-3 control-label">Tanggal Terima</label>
                <div class="col-sm-3">
                  <!-- <div class="col-md-6 col-xs-11"> -->
                    <input name = "tgl_terima" class="form-control form-control-inline input-medium default-date-picker" 
                    <?php echo form_error('tgl_terima') ? 'is-invalid':'' ?>" size="16" type="date" 
                    value="<?php echo $data->tgl_terima ?>"/>
                    <!-- <span class="help-block">Select date</span> -->
                  <!-- </div> -->
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>

              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Tanggal Aplikasi</label>
                <div class="col-sm-3">
                  <!-- <div class="col-md-6 col-xs-11"> -->
                    <input name ="tgl_aplikasi" class="form-control form-control-inline input-medium default-date-picker" 
                    <?php echo form_error('tgl_aplikasi') ? 'is-invalid':'' ?> size="16" type="date" 
                    value="<?php echo $data->tgl_aplikasi ?>"/>
                    <!-- <span class="help-block">Select date</span> -->
                  <!-- </div> -->
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>

              </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label">Analisa</label>
                  <div class="col-md-6">
                    <input class="form-control" type="text" name="" value="<?php echo $data->an ?>" readonly>
                    <input type="file" id="an" name="an" <?php echo form_error('an') ? 'is-invalid':'' ?> 
                    class="default"/>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label">Survey</label>
                  <div class="col-md-4">
                     <input type="file" name="sv" name="sv" class="default" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="col-sm-3 control-label">Perjanjian</label>
                  <div class="col-md-4">
                     <input type="file" name="pj" name="pj" class="default" />
                  </div>
                </div>

              </div>
              <div class="modal-footer">              
              <button type="button" class="btn btn-theme" data-dismiss="modal">Batal</button>
              <button class="btn btn-default" type="submit">Save</button>
            </div>



            
            </div>

            
          </form>
                </div>
                    
            </div>
                
            <div class="modal-footer">
                <!-- <button type="button" class="btn btn-white">Ok, Got it</button> -->
                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button> 
            </div>
                
        </div>
    </div>
  </div>
</div>
<?php endforeach; ?>



<script type="text/javascript">
var manageTable;

// $(document).ready(function() {
//   $("#categoryNav").addClass('active');
  
//   // initialize the datatable 
//   manageTable = $('#manageTable').DataTable({
//     'ajax': 'fetchCategoryData',
//     'order': []
//   });

  
// remove functions 
function removeFunc(id)
{
  if(id) {
    $("#removeForm").on('submit', function() {

      var form = $(this);

      // remove the text-danger
      $(".text-danger").remove();

      $.ajax({
        url: form.attr('action'),
        type: form.attr('method'),
        data: { category_id:id }, 
        dataType: 'json',
        success:function(response) {

          manageTable.ajax.reload(null, false); 

          if(response.success === true) {
            $("#messages").html('<div class="alert alert-success alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-ok-sign"></span> </strong>'+response.messages+
            '</div>');

            // hide the modal
            $("#removeModal").modal('hide');

          } else {

            $("#messages").html('<div class="alert alert-warning alert-dismissible" role="alert">'+
              '<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>'+
              '<strong> <span class="glyphicon glyphicon-exclamation-sign"></span> </strong>'+response.messages+
            '</div>'); 
          }
        }
      }); 

      return false;
    });
  }
}


</script>






<!-- Modal Tambah -->

   
      <div class="modal fade" id = "tambah" tabindex="-1" role ="dialog">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-tittle">Tambah Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              

          </div>
          <div class="card-body">
          <form action="<?php echo base_url('form/add')?>" method="POST" enctype="multipart/form-data">
            
              
              <div class ="form-group row">
                <label class="col-sm-3 control-label">PID</label>
                <div class="col-sm-4">
                  <input type="text" name="pid" class="form-control" placeholder="PID">
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Nama</label>
                <div class="col-sm-6">
                  <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Cabang</label>
                <div class="col-sm-6">
                  
                  <select class = "form-control" data-toggle="select" name="id_cabang">
                    <?php foreach ($cabang as $cabang): ?>
                              <option><?php echo $cabang->cabang?></option>
                            <?php endforeach; ?>
                  </select>
                </div>               
              </div>
              <div class ="form-group row">
                <label class="col-sm-4 control-label">Status</label>
                <div class="col-sm-12">

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
               <div class ="form-group row">
                <label class="col-sm-3 control-label">Tanggal Terima</label>
                <div class="col-sm-6">
                  <div class="col-md-8 col-xs-11">
                    <input name = "tgl_terima" class="form-control form-control-inline input-medium default-date-picker" size="16" type="date" value="">
                    <!-- <span class="help-block">Select date</span> -->
                  </div>
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>

              </div>
              <div class ="form-group row">
                <label class="col-sm-3 control-label">Tanggal Aplikasi</label>
                <div class="col-sm-6">
                  <div class="col-md-8 col-xs-11">
                    <input name ="tgl_aplikasi" class="form-control form-control-inline input-medium default-date-picker" size="16" type="date" value="">
                    <!-- <span class="help-block">Select date</span> -->
                  </div>
                 <!-- <input type="text" name="pid" class="form-control" placeholder="PID"> -->
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Analisa</label>
                  <div class="col-md-4">
                    <input type="file" id="an" name="an" class="default" /><i class="ni ni-folder-17"></i>
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Survey</label>
                  <div class="col-md-4">
                     <input type="file" name="sv" name="sv" class="default" />
                  </div>
                </div>
                <div class="form-group row">
                  <label class="control-label col-md-3">Perjanjian</label>
                  <div class="col-md-4">
                     <input type="file" name="pj" name="pj" class="default" />
                  </div>
                </div>

              </div>



            
            </div>

            <div class="modal-footer">
              <button class="btn btn-default" type="submit">Save</button>
              <button type="button" class="btn btn-theme" data-dismiss="modal">Batal</button>
            </div>
          </form>
        </div>

        
      </div>
    </div>

    <!-- Modal update -->
    <?php foreach ($customer as $data): ?>
        <div class="modal fade" id="update<?php echo $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="update" aria-hidden="true">
        <div class="modal-dialog modal-lg">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-tittle">Edit</h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              

          </div>
          <div class="card-body">
          
        </div>
        <?php endforeach; ?>


    <div class="modal fade" tabindex="-1" role="dialog" id="delete">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Remove Product</h4>
      </div>

      <form role="form" action="<?php echo base_url('form/delete') ?>" method="post" enctype="multipart/form-data">
        <div class="modal-body">
          <p>Do you really want to remove?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          <button type="submit" class="btn bg-teal">Save changes</button>
        </div>
      </form>


    </div><!-- /.modal-content -->
  </div><!-- /.modal-dialog -->
</div><!-- /.modal -->








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
  <script src="<?php echo base_url('assets/js/plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')?>"></script>

 
</body>

</html>