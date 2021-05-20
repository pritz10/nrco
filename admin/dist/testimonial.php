<?php require_once 'db.php'; ?>

<?php require_once 'header.php';?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
              
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Testimonial</li>
                        </ol>
                              

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
                        Step 1: Give title to the slider image. Add "< br > for Line break as many as you want" <br>
                        Step 2: Give a description about the image not more than 2 lines. <br>
                        Step 3: Upload a image of 180*180 Pixels. <br>
                        Step 4: Check spellings and image preview in the Live preview. <br>
                        Step 5: Click on Upload button and wait.
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
                                        <strong>Testimonial <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">?</button></strong>
                                    </div>
                                    <form method="post" action="testimonialupload.php" enctype="multipart/form-data" style="padding:10px;">
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
                                ?>        
                                    <div class="form-group">
                                                <label for="exampleFormControlInput1">Enter Name</label>
                                                <input type="text" name="name" class="form-control" required onchange="readURL(this);" id="title"  >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Designation</label>
                                                <input type="text" name="designation" class="form-control" required onchange="readURL(this);" id="designation"  >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlTextarea1">Enter Message</label>
                                                <textarea class="form-control" name="message" required onchange="readURL(this);" id="details" rows="3" ></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlFile1">Select Image 180*180 pixels</label>
                                                <input type="file" name="myfile" class="form-control-file" required onchange="readURL(this);"  id="exampleFormControlFile1">
                                            </div>
                                            <button type="submit" style="width: 100%;" value="submit" name="submit" class="btn btn-primary mt-3  " id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
                                            
                                            </form>

                                 </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Live Preview
                                    </div>
                                    
                                    <img id="blah" src="assets/img/p.png" width=180 height=180 alt="Image will appear here" />
                                    <p id="dab"></p>
                                   <strong> <p id="db"></p></strong>
                                    <p id="dd"></p>
                                   
                                </div>
                            </div>
                        </div>
                        <script>
                             function readURL(input) {
                                add = $('input#title').val();
                                add3 = $('input#designation').val();

                                add2 = $('textarea#details').val();

                                 $('p#db').empty().html(add).show();
                                 $('p#dab').empty().html(add2).show();
                                 $('p#dd').empty().html(add3).show();


                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        $('#blah')
                                            .attr('src', e.target.result)
                                            .width(180)
                                            .height(180);
                                    };

                                    reader.readAsDataURL(input.files[0]);
                                                         }

                                            }
                        </script>
                        
                       


   

                        
                     
                         

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                              Previous Messages Detail
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                                <th>Id</th>
                                                <th>Name</th>
                                                <th>Message</th>
 
                                            </tr>
                                        </thead>
                                        <tfoot>
                                            <tr>
                                            <th>Id</th>
                                                <th>Name</th>
                                                <th>Message</th>
                                                </tr>
                                        </tfoot>
                                        <tbody>
                                        <?php
                                                $sql="SELECT * FROM nrconewdb.director_message ORDER BY id DESC";
                                                $result = mysqli_query($connect, $sql);  
                                                if($result->num_rows > 0)
                                                {   while($rows= $result-> fetch_assoc())
                                                    {
                                                        $field1name = $rows["id"];
                                                                         $field3name = $rows["Name"];
                                                                                $field4name = $rows["Designation"];
                                                                                        $field5name = $rows["ImageUrl"];
                                                                                        echo '<tr> 
                                                                                        <td>'.$field1name.'</td> 
                                                                                         <td>'.$field3name.'</td> 
                                                                                        <td>'.$field4name.'</td> 
                                                                                       
                                                                                    </tr>';
                                                        // echo"<tr><td>".$rows["id"]."</td><td>".$rows["Name"]."</td><td>".$rows["Date"]."</td></tr>";
 
                                                    }
                                                    $result->free();                                                  

                                                }
                                                else
                                                {
                                                    echo" No data";
                                                }
                                                ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
                
<?php require_once 'footer.php';?>

