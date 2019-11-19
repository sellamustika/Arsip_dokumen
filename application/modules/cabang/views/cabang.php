<!-- =========================================================
* Argon Dashboard PRO v1.1.0
=========================================================

* Product Page: https://www.creative-tim.com/product/argon-dashboard-pro
* Copyright 2019 Creative Tim (https://www.creative-tim.com)

* Coded by Creative Tim

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
 -->
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard PRO - Premium Bootstrap 4 Admin Template</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('assets/img/brand/favicon.png" type="image/png')?>">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css" type="text/css')?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css')?>" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/argon.css?v=1.1.0')?>" type="text/css">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>
</head>

<body>
  <!-- Sidenav -->
   <?php $this->load->view("dashboard/_partials/sidebar.php")?>
  
  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
   <?php $this->load->view("dashboard/_partials/topnav.php")?>
    <!-- Header -->
    <!-- Header -->
        <?php if($this->session->flashdata('success')): ?>
          <script type="text/javascript">
            swal('Good', 'Insert Data Sucessfuly!', 'success');
          </script>
        <?php elseif($this->session->flashdata('delete')): ?>
          <script type="text/javascript">
            swal('Ohh', 'Your data was out', 'warning');
          </script>
        <?php endif; ?>


    
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Default</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Cabang</a></li>
                  <!-- <li class="breadcrumb-item active" aria-current="page">Default</li> -->
                </ol>
              </nav>
            </div>
          </div>
          <!-- Card stats -->
         
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--7">
      <div class="row">
        
        <div class="col-xl-12">
         
          <!-- <div class="card-deck"> -->
           
            <!-- Username card -->
      <div class="row mt-5">
        <div class="col-xl-12 mb-12 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">CABANG</h3>
                </div>
              </div>
            </div>
            <div class="card-body">
              <!-- Projects table -->
            <form action="<?php echo base_url('cabang/add')?>" method="POST" enctype="multipart/form-data" id="createForm">
              <div class="row">
                <div class="col-md-1">
                  <div class="form-group">
                    <label class="control-label">Nama Cabang</label>
                  </div>
                </div>
                <div class="col-md-9">
                  <div class="form-group ">
                    <div class="col-lg-12">
                      <input class=" form-control" id="cabang" name="cabang" minlength="2" type="text" required />
                    </div>
                  </div>                  
                </div>
                <div class="col-md-2">
                  <div class="form-group ">
                    <button class="btn btn-primary"><i class= "fa fa-check"></i>Save</button>
                    <a href="#"><button class="btn btn-danger"><i class= "fa fa-times"></i>Cancel</button></a>
                  </div>                  
                </div>
              </div>         
            </form>
            </div>
          </div>
        </div>
      </div>
          <!-- </div> -->
        <div class="row mt-5">
        <div class="col-xl-12 mb-12 mb-xl-0">
          <div class="card shadow">
            <div class="card-header border-0">
              <div class="row align-items-center">
                <div class="col">
                  <h3 class="mb-0">Manage Cabang</h3>
                </div>
                
              </div>
            </div>



            <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush">
                <thead class="thead-light">
                  <tr>
                    <!-- <th scope="col">No</th> -->
                    <th scope="col" style="width: 60px">Id</th>
                    <th scope="col">Cabang</th>
                    
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $i = 1; ?>
                  <?php foreach ($ncabang as $data): ?>
                          <tr>
                    
                    <td>
                            <?php echo $i; ?>
                            </td>
                          <td>
                            <?php echo $data->cabang ?>
                            </td>
                          
                   
                   
                   
                    <td width="250">
                      <div class="row row-example">
                      <div class="col">
                          <button type = "button" class="btn btn-block btn-warning" data-toggle="modal" data-target="#modal-notification<?php echo $data->id_cabang ?>"><i class="fas fa-edit"></i></button>
                      </div>
                      <div class="col">
                          <button type = "button" onclick="deleteConfirm('<?php echo site_url('/cabang/delete/'.$data->id_cabang) ?>')" href="#" class="btn btn-block btn-danger mb-2"><i class="fas fa-trash"></i></button>
                      </div>
                    </div>
                    </td>
                  </tr>
                  <?php $i++; ?>
                  <?php endforeach; ?>

                </tbody>
              </table>
               
      
        
            </div>
          </div>
        </div>
       
      </div>
      
      <!-- Footer -->
      <?php $this->load->view("dashboard/_partials/footer.php")?>
    </div>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <?php $this->load->view("cabang/_partials/modal.php")?>

  <?php $this->load->view("dashboard/_partials/js.php")?>
  <script>
  function deleteConfirm(url){
    $('#btn-delete').attr('href', url);
    $('#deleteModal').modal();
  }
</script>




<?php foreach ($ncabang as $data): ?>
<div class="col-md-6">
  <div class="modal fade" id="modal-notification<?php echo $data->id_cabang ?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
              
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Edit</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
                
            <div class="card-body">

              <form action="<?php echo base_url('cabang/edit'.$data->id_cabang)?>" method="POST" enctype="multipart/form-data">

              
             <div class ="form-group row">
                <label class="col-sm-3 control-label">Nama Cabang</label>
                <div class="col-sm-8">
                  <input type="text" name="id" value="<?php echo $data->id_cabang ?>">
                  <input type="text" name="cabang" class="form-control <?php echo form_error('cabang') ? 'is-invalid':'' ?>" 
                  value = "<?php echo $data->cabang ?>"/>
                </div>               
              </div>
                </div>
              <div class="modal-footer">              
              <button type="button" class="btn btn-theme" data-dismiss="modal">Batal</button>
              <button class="btn btn-default" type="submit">Save</button>
              </div>
                  
                
                    
            </div>
                
           
                
        </div>
    </div>
  </div>
</div>
<?php endforeach; ?>



  
</body>

</html>