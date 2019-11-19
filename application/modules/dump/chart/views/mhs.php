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

        <!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="#">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">mahasiswa</li>
        </ol>

        <!-- Icon Cards-->
        
        <!-- DataTables Example -->
       <div class="card mb-3">
          <div class="card-header">
            <a href="<?php echo site_url('coba/add') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
          <div class="card-body">

            <div class="table-responsive">
              <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Photo</th>
                    <th>Description</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($products as $product): ?>
                  <tr>
                    <td width="150">
                      <?php echo $product->name ?>
                    </td>
                    <td>
                      <?php echo $product->price ?>
                    </td>
                    <td>
                      <img src="<?php echo base_url('upload/product/'.$product->image) ?>" width="64" />
                    </td>
                    <td class="small">
                      <?php echo substr($product->description, 0, 120) ?>...</td>
                    <td width="250">
                      <a href="<?php echo site_url('coba/edit/'.$product->product_id) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                      <a onclick="deleteConfirm('<?php echo site_url('coba/delete/'.$product->product_id) ?>')"
                       href="<?php echo site_url('coba/delete/'.$product->product_id) ?>" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                </tbody>
              </table>
            </div>
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
