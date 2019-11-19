<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Buat Data</title>
  <!-- Favicon -->
  <link rel="icon" href="<?php echo base_url('assets/img/brand/favicon.png" type="image/png'); ?>">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'); ?>">
  <!-- Icons -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/nucleo/css/nucleo.css" type="text/css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css'); ?>">
  <!-- Page plugins -->
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/select2/dist/css/select2.min.css'); ?>">
  <link rel="stylesheet" href="<?php echo base_url('assets/vendor/quill/dist/quill.core.css'); ?>">
  <!-- Argon CSS -->
  <link rel="stylesheet" href="<?php echo base_url('assets/css/argon.css?v=1.1.0" type="text/css'); ?>">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.all.min.js"></script>
  <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>

<style type="text/css">

#preview-container {
    margin: 5px auto;
    width: 500px;
}


#upload-dialog {
    padding: 5px;
    border: 1px solid #336699;
    background-color: white;
    color: #336699;
    background: none;
    font-size: inherit;
    font-family: inherit;
    outline: none;
    display: inline-block;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 2px;
}

#pdf-file {
    display: none;
}

#pdf-loader {
  display: none;
  vertical-align: middle;
  color: #cccccc;
    font-size: 12px;
}

.pdf-preview {
    display: none;
    vertical-align: middle;
    border: 1px solid rgba(0,0,0,0.2);
    border-radius: 2px;
}

#pdf-name {
    display: none;
    vertical-align: middle;
    color: #336699;
    margin: 0 15px;
    max-width: 200px;
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
}

#upload-button {
    padding: 5px;
    border: 1px solid #336699;
    background-color: #336699;
    color: white;
    font-size: inherit;
    font-family: inherit;
    outline: none;
    display: none;
    vertical-align: middle;
    cursor: pointer;
    border-radius: 2px;
}

#cancel-pdf {
    display: none;
    vertical-align: middle;
    padding: 0px;
    border: none;
    color: #777777;
    background-color: white;
    font-size: inherit;
    font-family: inherit;
    outline: none;
    vertical-align: middle;
    cursor: pointer;
    margin: 0 0 0 15px;
}

</style>

</head>

<body>
<?php $this->load->view("dashboard/_partials/sidebar.php")?>
  <div class="main-content" id="panel">
  <?php $this->load->view("dashboard/_partials/topnav.php")?>
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
              <h6 class="h2 text-white d-inline-block mb-0">Form elements</h6>
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item"><a href="#">Forms</a></li>
                  <li class="breadcrumb-item active" aria-current="page">Form elements</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <a href="#" class="btn btn-sm btn-neutral">New</a>
              <a href="#" class="btn btn-sm btn-neutral">Filters</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
  <form action="<?php echo base_url('form/add')?>" method="POST" enctype="multipart/form-data">
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-lg-6">
          <div class="card-wrapper">
            <!-- Input groups -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Informasi</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                  <!-- Input groups with icon -->
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">PID</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-credit-card"></i></span>
                          </div>
                          <input type="text" name="pid" class="form-control" placeholder="PID">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Nama</label>
                        <div class="input-group input-group-merge">
                          <div class="input-group-prepend">
                            <span class="input-group-text"><i class="fas fa-user"></i></span>
                          </div>
                          <input type="text" name="nama" class="form-control" placeholder="Masukan Nama">
                        </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <div class="input-group input-group-merge">
                          <label class="form-control-label" for="exampleDatepicker">Pilih Cabang</label>
                          <select class="form-control" data-toggle="select" name="id_cabang">
                            <?php foreach ($cabang as $cabang): ?>
                              <option><?php echo $cabang->cabang?></option>
                            <?php endforeach; ?>
                          </select>     
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                        <div class="col-md-3">
                          <div class="custom-control custom-radio mb-3">
                            <input name="status" class="custom-control-input" id="customRadio5" type="radio" value="tolak">
                            <label class="custom-control-label" for="customRadio5">Tolak</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="custom-control custom-radio mb-3">
                            <input name="status" class="custom-control-input" id="customRadio6" type="radio" value="batal">
                            <label class="custom-control-label" for="customRadio6">Batal</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="custom-control custom-radio mb-3">
                            <input name="status" class="custom-control-input" id="customRadio7" type="radio" value="pending">
                            <label class="custom-control-label" for="customRadio7">Pending</label>
                          </div>
                        </div>
                        <div class="col-md-3">
                          <div class="custom-control custom-radio mb-3">
                            <input name="status" class="custom-control-input" id="customRadio8" type="radio" value="tdkinput">
                            <label class="custom-control-label" for="customRadio8">Tidak Input</label>
                          </div>
                        </div>
                  </div>
              </div>
            </div>
            <!-- Datepicker -->
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Tanggal</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Tanggal Terima</label>
                        <input name="tgl_terima" class="form-control datepicker" placeholder="Select date" type="text" value="2019-08-09">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Tanggal Aplikasi</label>
                        <input name="tgl_aplikasi" class="form-control datepicker" placeholder="Select date" type="text" value="2019-08-09">
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Upload File</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Upload File AN</label>
                          <div class="custom-file">
                            <input type="file" name="an" class="custom-file-input" id="pdf-upload" lang="en">
                            <label id="selected_filename" class="custom-file-label" for="pdf-upload">Select file</label>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Upload File PJ</label>
                          <div class="custom-file">
                            <input type="file" name="pj" class="custom-file-input" id="pdf-uploadpj" lang="en">
                            <label id="selected_filenamepj" class="custom-file-label" for="pdf-uploadpj">Select file</label>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-12">
                      <div class="form-group">
                        <label class="form-control-label" for="exampleDatepicker">Upload File SV</label>
                          <div class="custom-file">
                            <input type="file" name="sv" class="custom-file-input" id="pdf-uploadsv" lang="en">
                            <label id="selected_filenamesv" class="custom-file-label" for="pdf-uploadsv">Select file</label>
                          </div>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6">
          <div class="card-wrapper">
            <div class="card">
              <!-- Card header -->
              <div class="card-header">
                <h3 class="mb-0">Privew File</h3>
              </div>
              <!-- Card body -->
              <div class="card-body">
                  <div class="row">
                    <div class="col-md-12">
                      <div id="preview-container">
                        <center>
                        <canvas></canvas>
                        </center>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="card">
              <div class="card-header">
                <h3 class="mb-0">Save Changes</h3>
              </div>
              <div class="card-body">
                <a href="<?php echo base_url('form')?>"><button class="btn btn-secondary" type="button">Batal</button></a>
                <button class="btn btn-icon btn-primary" type="submit">
                  <span class="btn-inner--icon"><i class="ni ni-bag-17"></i></span>
                  <span class="btn-inner--text">Simpan Data</span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Footer -->
      <footer class="footer pt-0">
        <div class="row align-items-center justify-content-lg-between">
          <div class="col-lg-6">
            <div class="copyright text-center text-lg-left text-muted">
              &copy; 2019 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
            </div>
          </div>
          <div class="col-lg-6">
            <ul class="nav nav-footer justify-content-center justify-content-lg-end">
              <li class="nav-item">
                <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
              </li>
              <li class="nav-item">
                <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
              </li>
              <li class="nav-item">
                <a href="https://www.creative-tim.com/license" class="nav-link" target="_blank">License</a>
              </li>
            </ul>
          </div>
        </div>
      </footer>
    </div>
  </form>
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="<?php echo base_url('assets/vendor/jquery/dist/jquery.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/js-cookie/js.cookie.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js'); ?>"></script>
  <!-- Optional JS -->
  <script src="<?php echo base_url('assets/vendor/select2/dist/js/select2.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/nouislider/distribute/nouislider.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/quill/dist/quill.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/dropzone/dist/min/dropzone.min.js'); ?>"></script>
  <script src="<?php echo base_url('assets/vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js'); ?>"></script>
  <!-- Argon JS -->
  <script src="<?php echo base_url('assets/js/argon.js?v=1.1.0'); ?>"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?php echo base_url('assets/js/demo.min.js'); ?>"></script>

  <script src="<?php echo base_url('assets/js/pdf.js'); ?>"></script>
  <!-- Demo JS - remove this in your project -->
  <script src="<?php echo base_url('assets/js/pdf.worker.js'); ?>"></script>

<script type="text/javascript">
  document.querySelector("#pdf-upload").addEventListener("change", function(e){
  var canvasElement = document.querySelector("canvas")
  var file = e.target.files[0]
  if(file.type != "application/pdf"){
    swal('OOPS :(', '${file.name} Bukan File PDF', 'error');
    console.error(file.name, "is not a pdf file.")
    return
  }
  
  var fileReader = new FileReader();  

  fileReader.onload = function() {
    var typedarray = new Uint8Array(this.result);

    PDFJS.getDocument(typedarray).then(function(pdf) {
      // you can now use *pdf* here
      console.log("the pdf has ",pdf.numPages, "page(s).")
      pdf.getPage(1).then(function(page) {
        // you can now use *page* here
        var viewport = page.getViewport(0.99);
        var canvas = document.querySelector("canvas")
        canvas.height = viewport.height;
        canvas.width = viewport.width;


        page.render({
          canvasContext: canvas.getContext('2d'),
          viewport: viewport
        });
      });

    });
  };

  fileReader.readAsArrayBuffer(file);
})
</script>

<script type="text/javascript">
  document.querySelector("#pdf-uploadpj").addEventListener("change", function(e){
  var canvasElement = document.querySelector("canvas")
  var file = e.target.files[0]
  if(file.type != "application/pdf"){
    swal('OOPS :(', 'Bukan File PDF', 'error');
    console.error(file.name, "is not a pdf file.")
    return
  }
  
  var fileReader = new FileReader();  

  fileReader.onload = function() {
    var typedarray = new Uint8Array(this.result);

    PDFJS.getDocument(typedarray).then(function(pdf) {
      // you can now use *pdf* here
      console.log("the pdf has ",pdf.numPages, "page(s).")
      pdf.getPage(1).then(function(page) {
        // you can now use *page* here
        var viewport = page.getViewport(0.99);
        var canvas = document.querySelector("canvas")
        canvas.height = viewport.height;
        canvas.width = viewport.width;


        page.render({
          canvasContext: canvas.getContext('2d'),
          viewport: viewport
        });
      });

    });
  };

  fileReader.readAsArrayBuffer(file);
})
</script>

<script type="text/javascript">
  document.querySelector("#pdf-uploadsv").addEventListener("change", function(e){
  var canvasElement = document.querySelector("canvas")
  var file = e.target.files[0]
  if(file.type != "application/pdf"){
    swal('OOPS :(', 'Bukan File PDF', 'error');
    console.error(file.name, "is not a pdf file.")
    return
  }
  
  var fileReader = new FileReader();  

  fileReader.onload = function() {
    var typedarray = new Uint8Array(this.result);

    PDFJS.getDocument(typedarray).then(function(pdf) {
      // you can now use *pdf* here
      console.log("the pdf has ",pdf.numPages, "page(s).")
      pdf.getPage(1).then(function(page) {
        // you can now use *page* here
        var viewport = page.getViewport(0.99);
        var canvas = document.querySelector("canvas")
        canvas.height = viewport.height;
        canvas.width = viewport.width;


        page.render({
          canvasContext: canvas.getContext('2d'),
          viewport: viewport
        });
      });

    });
  };

  fileReader.readAsArrayBuffer(file);
})
</script>

<script>
$(document).ready( function() {
  $('#pdf-upload').click(function(){
    $("#pdf-upload").click();
  });
});
$('#pdf-upload').change(function() {
  $('#selected_filename').text($('#pdf-upload')[0].files[0].name);
});

</script>
<script>
$(document).ready( function() {
  $('#pdf-uploadpj').click(function(){
    $("#pdf-uploadpj").click();
  });
});
$('#pdf-uploadpj').change(function() {
  $('#selected_filenamepj').text($('#pdf-uploadpj')[0].files[0].name);
});

</script>
<script>
$(document).ready( function() {
  $('#pdf-uploadsv').click(function(){
    $("#pdf-uploadsv").click();
  });
});
$('#pdf-uploadsv').change(function() {
  $('#selected_filenamesv').text($('#pdf-uploadsv')[0].files[0].name);
});

</script>

</body>

</html>