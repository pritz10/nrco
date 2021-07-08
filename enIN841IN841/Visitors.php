<?php require_once 'Header.php'; ?>
 
 

  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Visitors Feedback</h1>
</div>
<div class="row">
<!-- Area Chart -->
    <div class="col-xl-7 col-lg-6">
    <div class="card shadow mb-4">
   <!-- Card Header - Accordion -->
    <a href="#messagedata" class="d-block card-header py-3" data-toggle="collapse"
     role="button" aria-expanded="true" aria-controls="as">
 <h6 class="m-0 font-weight-bold text-white">Upload Message from Visitors</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show " id="messagedata">
                                    <div class="card-body">
                                    <form method="post" action="DirectorMessage" enctype="multipart/form-data" style="padding:10px;">                                        
                                    <div class="form-group">
                                                <label for="e">Enter Name</label>
                                                <input type="text" name="name" class="form-control" required onchange="readURL(this);" id="title"  >
                                    </div>
                                    <div class="form-group">
                                                <label for="f">Designation</label>
                                                <input type="text" name="designation" class="form-control" required onchange="readURL(this);" id="designation"  >
                                    </div>
                                    <div class="form-group">
                                                <label for="g">Enter Message</label>
                                                <textarea class="form-control" name="message" required onchange="readURL(this);" id="details" rows="3" ></textarea>
                                    </div>
                                    <div class="form-group">
                                                <label for="h">Select Image 1680*1000 pixels</label>
                                                <input class="form-control" name="myfile" id="formFileLg"required onchange="readURL(this);" type="file">
                                    </div>
                                    <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-primary" id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
                                    </form>
                                 </div>
                                    </div>
                                </div>
                             
        
    </div>

     <div class="col-xl-5 col-lg-6">
          <!-- Card Header - Accordion -->
          <div class="card shadow mb-4">
          <a href="#messagedata" class="d-block card-header py-3" data-toggle="collapse" role="button" aria-expanded="true" aria-controls="as">
                                    <h6 class="m-0 font-weight-bold text-white">Live Preview</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show" id="messagedata">
                                     <!-- Card Body -->
            <div class="card-body">
                <h5 id="db"></h5>
                <p id="dab"></p>
                <img id="blah" src="p.png" class="img-fluid" alt="Image will appear here" />
                <script>
                    function readURL(input) 
                    {
                        add = $('input#title').val();
                        add2 = $('textarea#details').val();

                        $('h5#db').empty().html(add).show();
                        $('p#dab').empty().html(add2).show();

                        if (input.files && input.files[0]) {
                            var reader = new FileReader();
                            reader.onload = function (e) {
                                $('#blah')
                                    .attr('src', e.target.result)
                                    
                            };

                            reader.readAsDataURL(input.files[0]);
                                                }

                    }
                 </script>
                <div class="mt-4 text-center small">
                    <span class="mr-2">
                        <i class="fas fa-circle text-primary"></i> Please check the spellings and Image
                    </span>
                    
                </div>
            </div>
                                </div>
                            </div>
       
    </div>
</div>

<div class="card shadow mb-4">
    
    <a href="#dataprevious" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="dataprevious">
                                    <h6 class="m-0 font-weight-bold text-white">Previous Messages</h6>
                                </a>
                                <div class="collapse" id="dataprevious">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Message</th>
                        <th>UploadDate</th>
                        <th>Action</th>

                       

                    </tr>
                </thead>
                
               <tbody>
               <?php  
               
                    $sql = "SELECT * FROM director_message";  
                    $result = mysqli_query($connect, $sql);  

                    while($row = mysqli_fetch_assoc($result))  
                    {  ?>
                        <tr>
                        <td><?php echo $row['id']; ?></td>
                        <td><img  src="<?php echo $row['ImageUrl']; ?>" class="img-thumbnail" alt="Image will appear here" /></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Designation']; ?></td>
                        <td><?php echo $row['Message']; ?></td>
                        <td><?php echo $row['Date']; ?></td>
                        <td><div class="btn-group" role="group" aria-label="Basic"><a class='btn btn-outline-success btn-sm'data-toggle='modal' data-target='#update<?php echo $row['id']; ?>'><i class='fas fa-pen'></i></a>
                         <a   class='btn btn-outline-danger btn-sm'data-toggle='modal' data-target='#delete<?php echo $row['id']; ?>'><i class='fas fa-trash'></i></a>
                        </div></td>
                        </tr>
                         
                        <!-- Update Modal-->
                        <div class="modal fade" id="update<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary" id="exampleModalLabel">Edit Details</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="DirectorMessage" enctype="multipart/form-data" style="padding:10px;">
                                         <div class="form-group">
                                             <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                            <label for="title">Name</label>
                                            <input type="text" name="update_name"  class="form-control" id="title" value="<?php echo $row['Name']; ?>"aria-describedby="emailHelp"  placeholder="Enter title">
                                           <br> <label for="Description">Designation</label>
                                           <input type="text" name="update_designation"   class="form-control" id="title" value="<?php echo $row['Designation']; ?>"aria-describedby="emailHelp"  placeholder="Enter title">
                                           <br> <label for="Description">Message</label>
                                            <input input type="text" name="update_message" rows="3" class="form-control" id="title" value="<?php echo $row['Message']; ?>"aria-describedby="emailHelp"  placeholder="Enter title"></input>
                                        </div> 
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                         <button type="submit" value="update"  name="submit" class="btn btn-success" id="upload-file"><i class="fa fa-save" aria-hidden="true"></i> Save changes</button>
                                        </div>
                                     </form>
                                </div>
                            </div>
                        </div>
                        <!-- Delete Modal-->
                        <div class="modal fade" id="delete<?php echo $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="delete"
                                aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title text-primary" id="delete">Are you sure you want to delete?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body text-danger">Select "Delete" below if you are ready to delete:<br> 
                                        <strong> <?php echo $row['Name']; ?> <br>
                                        <strong> <?php echo $row['Designation']; ?> <br>
                                        <strong> <?php echo $row['Message']; ?></strong></strong>
                                      
                                        <form method="post" action="DirectorMessage" enctype="multipart/form-data" style="padding:10px;">
                                         <div class="form-group">
                                             <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                          </div> 
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                         <button type="submit" value="delete"  name="submit" class="btn btn-danger" id="upload-file"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                    

                                        </div>
                                     </form>
                                         
                                    </div>
                                </div>
                            </div>
                            </div>
                        <?php 
                        }
                        ?>
               </tbody>
            </table>
        </div>
    </div>
</div>
</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->
<?php require_once 'Footer.php'; ?>

