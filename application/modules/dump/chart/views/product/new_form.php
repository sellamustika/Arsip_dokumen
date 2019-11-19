<!DOCTYPE html>
<html lang="en">

<head>

 

  <?php $this->load->view("coba/_partials/head.php") ?>


<body id="page-top">
  <?php $this->load->view("coba/_partials/navbar.php") ?>

  

  <div id="wrapper">
    <?php $this->load->view("coba/_partials/sidebar.php") ?>

   
    

        <div id="content-wrapper">

      <div class="container-fluid">

         <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">Mahasiswa</li>
          <li class="breadcrumb-item active">Tambah</li>
        </ol>

        

        <?php if ($this->session->flashdata('success')): ?>
        <div class="alert alert-success" role="alert">
          <?php echo $this->session->flashdata('success'); ?>
        </div>
        <?php endif; ?>

        <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('coba/mhs/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
          </div>
          <div class="card-body">

            <form action="<?php base_url('coba/add') ?>" method="post" enctype="multipart/form-data" >
              <div class="form-group">
                <label for="name">Name*</label>
                <input class="form-control <?php echo form_error('name') ? 'is-invalid':'' ?>"
                 type="text" name="name" placeholder="Product name" />
                <div class="invalid-feedback">
                  <?php echo form_error('name') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="price">Price*</label>
                <input class="form-control <?php echo form_error('price') ? 'is-invalid':'' ?>"
                 type="number" name="price" min="0" placeholder="Product price" />
                <div class="invalid-feedback">
                  <?php echo form_error('price') ?>
                </div>
              </div>


              <div class="form-group">
                <label for="name">Photo</label>
                <input class="form-control-file <?php echo form_error('price') ? 'is-invalid':'' ?>"
                 type="file" name="image" />
                <div class="invalid-feedback">
                  <?php echo form_error('image') ?>
                </div>
              </div>

              <div class="form-group">
                <label for="name">Description*</label>
                <textarea class="form-control <?php echo form_error('description') ? 'is-invalid':'' ?>"
                 name="description" placeholder="Product description..."></textarea>
                <div class="invalid-feedback">
                  <?php echo form_error('description') ?>
                </div>
              </div>

              <input class="btn btn-success" type="submit" name="btn" value="Save" />
            </form>

          </div>

          <div class="card-footer small text-muted">
            * required fields
          </div>
        </div>
      </div>


          <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
        </div>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <?php $this->load->view("coba/_partials/footer.php") ?>
     
    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <?php $this->load->view("coba/_partials/scrolltop.php") ?>
<?php $this->load->view("coba/_partials/modal.php") ?>
<?php $this->load->view("coba/_partials/js.php") ?>
    
  

  
  
</body>

</html>
