<?php require_once 'header.php'; ?>


           <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
              
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                        <div class="col-xl-3 col-md-6">
                                  <div class="card bg-primary text-white mb-4">
                                      <div class="card-body">
                                      <h5 class="card-title">Director's Desk</h5> </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="text-white stretched-link" href="DirectorDesk.php">View Details</a>
                                          <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div class="card bg-success text-white mb-4">
                                      <div class="card-body"> <h5 class="card-title">Bulletin Board</h5> </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="  text-white stretched-link" href="BulletinBoard.php">Add Details</a>
                                          <div class="  text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-md-6">
                                  <div class="card text-white bg-dark mb-3">
                                      <div class="card-body"> <h5 class="card-title">Counters</h5> </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="text-white stretched-link" href="Counter.php">View Details</a>
                                          <div class="text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                              
                              <div class="col-xl-3 col-md-6">
                                  <div class="card bg-danger text-white mb-4">
                                      <div class="card-body"> <h5 class="card-title">Testimonials</h5> </div>
                                      <div class="card-footer d-flex align-items-center justify-content-between">
                                          <a class="  text-white stretched-link" href="testimonial.php">View Details</a>
                                          <div class=" text-white"><i class="fas fa-angle-right"></i></div>
                                      </div>
                                  </div>
                              </div>
                          </div>       

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">How to upload Image in the Home page slider?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <div class="alert alert-warning" role="alert">
                       <strong> Here you can upload images in slider of the homepage.</strong> <br>
                        Step 1: Give title to the slider image. <br>
                        Step 2: Give a description about the image not more than 2 lines. <br>
                        Step 3: Upload a image of 1600*1000 Pixels. <br>
                        Step 4: Check spellings and image preview in the Live preview. <br>
                        Step 5: Click on Upload button and wait.<br>
                        Link: <a href="https://convert-my-image.com/imageconverter" target="blank">IMAGE RESIZER</a>
                        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
       </div>
    </div>
  </div>
</div>
                       
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        <strong>Main Slider <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">?</button></strong>
                                    </div>
                                    <form method="post" action="mainsliderupload.php" enctype="multipart/form-data" style="padding:10px;">
                                    <?php
                                $msg =" ";
                                if(isset($_GET['error']))
                                {
                                    $msg= "Failed. Try again!";
                                    echo'<div class="alert alert-danger">'.$msg.'</div>';
         
                                }
                                if(isset($_GET['success']))
                                {
                                    $msg= "Uploaded Successfully !";
                                    echo'<div class="alert alert-success">'.$msg.'</div>';
                                }
                                ?>                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Enter Title</label>
                                                <input type="text" name="title" class="form-control"    onchange="readURL(this);" id="title" placeholder="Nataional Science Day Celebration">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Enter Description</label>
                                                <textarea class="form-control" name="description"   onchange="readURL(this);" id="details" placeholder="Dikling School was invited in celebration of National Science Day"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Select Image 1680*1000 pixels</label>
                                                <input type="file" name="myfile" class="form-control-file" required onchange="readURL(this);"  id="exampleFormControlFile1">
                                            </div>
                                            <button type="submit" style="width: 100%;" value="submit"  name="submit" class="btn btn-primary mt-3  " id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>

                                            </form>
                                  </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Live Preview
                                    </div>
                                    <h3 id="db"></h3>
                                    <img id="blah" src="assets/img/p.png" alt="Image will appear here" />
                                    <p id="dab"></p>
                                   
                                </div>
                            </div>
                        </div>
                        <script>
                             function readURL(input) {
                                add = $('input#title').val();
                                add2 = $('textarea#details').val();

                                 $('h3#db').empty().html(add).show();
                                 $('p#dab').empty().html(add2).show();

                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        $('#blah')
                                            .attr('src', e.target.result)
                                            .width(468)
                                            .height(240);
                                    };

                                    reader.readAsDataURL(input.files[0]);
                                                         }

                                            }
                        </script>
                        
                       


   

                        
                     
                         

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                              Previous Slider Images
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                                <th>Name</th>
                                                <th>Position</th>
                                                <th>Office</th>
                                                <th>Age</th>
                                                <th>Start date</th>
                                                <th>Salary</th>
                                            </tr>
                                        </tfoot>
                                        <tbody>
                                        
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                <?php require_once 'footer.php'; ?>
