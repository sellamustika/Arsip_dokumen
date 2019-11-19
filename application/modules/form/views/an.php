<?php foreach ($customer as $data): ?>
<div class="col-md-10">
  <div class="modal fade" id="modal-pdf<?php echo $data->id ?>" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
    <div class="modal-dialog modal-info modal-dialog-centered modal-" role="document">
        <div class="modal-content bg-gradient-info">
              
            <div class="modal-header">
                <h6 class="modal-title" id="modal-title-notification">Priview Your Data</h6>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>

            <div class="modal-body">
                  
                <div class="py-3 text-center">
                    <?php 
                    $fan = base_url('/assets/dokumen/an/'.$data->an);  
                    ?> 
                    <i class="ni ni-single-copy-04 ni-3x"></i>
                    <h1 class="heading mt-5">PID : <?php echo $data->pid ?></h1>
                    <p class="heading mt-4">Nama : <?php echo $data->an ?></p>
                    <input type="text" id="an" name="an" value="<?php echo $fan; ?>">
                    <p>
<?php $anfi = "const url = document.getElementById('an').value;"; ?>
                   <div id="example1"></div>
                    <div class="top-bar">
                      <button class="btn" id="prev-page">
                        <i class="fas fa-arrow-circle-left"></i> Prev Page
                      </button>
                      <button class="btn" id="next-page">
                        Next Page <i class="fas fa-arrow-circle-right"></i>
                      </button>
                      <span class="page-info">
                        Page <span id="page-num"></span> of <span id="page-count"></span>
                      </span>
                    </div>
                    <canvas id="pdf-render" style="width: 100px; height: 200px;"></canvas>
                    <script src="https://mozilla.github.io/pdf.js/build/pdf.js"></script>
                    <script src="<?php echo base_url('assets/js/an.js')?>"></script>
                    <script>
                      
                      <?php echo $anfi; ?>

                      let pdfDoc = null,
                        pageNum = 1,
                        pageIsRendering = false,
                        pageNumIsPending = null;

                      const scale = 1.5,
                        canvas = document.querySelector('#pdf-render'),
                        ctx = canvas.getContext('2d');

                      // Render the page
                      const renderPage = num => {
                        pageIsRendering = true;

                        // Get page
                        pdfDoc.getPage(num).then(page => {
                          // Set scale
                          const viewport = page.getViewport({ scale });
                          canvas.height = viewport.height;
                          canvas.width = viewport.width;

                          const renderCtx = {
                            canvasContext: ctx,
                            viewport
                          };

                          page.render(renderCtx).promise.then(() => {
                            pageIsRendering = false;

                            if (pageNumIsPending !== null) {
                              renderPage(pageNumIsPending);
                              pageNumIsPending = null;
                            }
                          });

                          // Output current page
                          document.querySelector('#page-num').textContent = num;
                        });
                      };

                      // Check for pages rendering
                      const queueRenderPage = num => {
                        if (pageIsRendering) {
                          pageNumIsPending = num;
                        } else {
                          renderPage(num);
                        }
                      };

                      // Show Prev Page
                      const showPrevPage = () => {
                        if (pageNum <= 1) {
                          return;
                        }
                        pageNum--;
                        queueRenderPage(pageNum);
                      };

                      // Show Next Page
                      const showNextPage = () => {
                        if (pageNum >= pdfDoc.numPages) {
                          return;
                        }
                        pageNum++;
                        queueRenderPage(pageNum);
                      };

                      // Get Document
                      pdfjsLib
                        .getDocument(url)
                        .promise.then(pdfDoc_ => {
                          pdfDoc = pdfDoc_;

                          document.querySelector('#page-count').textContent = pdfDoc.numPages;

                          renderPage(pageNum);
                        })
                        .catch(err => {
                          // Display error
                          const div = document.createElement('div');
                          div.className = 'error';
                          div.appendChild(document.createTextNode(err.message));
                          document.querySelector('body').insertBefore(div, canvas);
                          // Remove top bar
                          document.querySelector('.top-bar').style.display = 'none';
                        });

                      // Button Events
                      document.querySelector('#prev-page').addEventListener('click', showPrevPage);
                      document.querySelector('#next-page').addEventListener('click', showNextPage);

                    </script>
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