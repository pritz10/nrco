<?php require_once 'Header.php';?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'upload')
    {
    $filename = $_FILES['myfile']['name'];
    $name = $_POST['name'];
    $designation = $_POST['designation'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $rank = $_POST['rank'];
    $created_date = date("m-d-y");
    // destination of the file on the server
    $destination = 'files/Images/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpg','png','jpeg','gif'])) {
        echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
        <strong>File extension ishould be JPG or PNG or the image is too big to handle.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
     } elseif ($_FILES['myfile']['size'] > 70000000) { // file shouldn't be larger than 20Megabyte
        echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
        <strong>File too large! Compress the image and try again.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
     } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO nrconewdb.staff (Name, Designation, Phone, Email,ImageUrl, Rank, Category,Date) VALUES ('$name','$designation','$phone','$email','$destination','$rank','$category','$created_date')";
            if (mysqli_query($connect, $sql)) {
                 echo'<div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
                <strong>Successfully Uploaded.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';       
             }
             else {
 
                 echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
                <strong>Something went wrong, Please try again later</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
             
            }
        } else {
             echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
            <strong>Something went wrong, Please try again later</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
         }
    }
     
}
if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'update')
{
    $name = $_POST['update_name'];
    $uid = $_POST['id'];
    $designation = $_POST['update_designation'];
    $message = $_POST['update_message'];
    $created_date = date("m-d-y ");
    $sql = "UPDATE nrconewdb.director_message set Name='$name', Designation='$designation', Message='$message', Date='$created_date' where id='$uid'";
    if (mysqli_query($connect, $sql)) {
        if(mysqli_affected_rows($connect) >0 ){
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="fas fa-save text-success"></i><strong> Successfully Updated.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
        }
        else {
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <strong>Something went wrong, Please try again later</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
         }
 
    }
    else {
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>SERVER BUSY</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
     }
     
} 
if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'delete')
{
     
    $uid = $_POST['id'];   
    $sql = "DELETE FROM nrconewdb.director_message where id='$uid'";
    if (mysqli_query($connect, $sql)) {
        if(mysqli_affected_rows($connect) >0 ){
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="fas fa-trash text-danger"></i>    <strong>Successfully Deleted.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';
        }
        else {
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
            <i class="fas fa-info text-danger"></i>  <strong>Something went wrong, Please try again later</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
         }
     }
    else {
        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <i class="fas fa-info text-danger"></i>  <strong>SERVER BUSY</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
     }
     
} 
?>

  <!-- Begin Page Content -->
  <div class="container-fluid">

<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Staff List</h1>
</div>
<div class="row">
<!-- Area Chart -->
    <div class="col-xl-7 col-lg-6">
    <div class="card shadow mb-4">
   <!-- Card Header - Accordion -->
    <a href="#messagedata" class="d-block card-header py-3" data-toggle="collapse"
     role="button" aria-expanded="true" aria-controls="as">
 <h6 class="m-0 font-weight-bold text-white">New Staff</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show " id="messagedata">
                                    <div class="card-body">
                                    <form method="post" action="Staff.php" enctype="multipart/form-data" style="padding:10px;">                                        
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Name</label>
      <input type="text" name="name" class="form-control" required onchange="readURL(this);" id="name">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Designation</label>
      <input type="text" name="designation" class="form-control" required onchange="readURL(this);" id="designation">
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Email</label>
      <input type="email" name="email" class="form-control" required onchange="readURL(this);" id="email">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Phone</label>
      <input type="phone" name="phone" class="form-control" required onchange="readURL(this);" id="phone">
    </div>
  </div>
  
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Photo</label>
      
      <input class="form-control" name="myfile" id="formFileLg" required onchange="readURL(this);" type="file">
    </div>
    <div class="form-group col-md-4">
      <label for="inputState">Category</label>
      <select id="inputState" name="category" required class="form-control">
         <option>Head</option>
        <option>Scientist Staffs</option>

        <option>Administrative Staffs</option>

        <option>Technical Staffs</option>
        <option>Skilled Supportinf Staffs</option>
        <option>Project Staffs</option>
 
      </select>
    </div>
    <div class="form-group col-md-2">
      <label for="inputZip">Rank</label>
      <input type="text" name="rank" class="form-control" required id="inputZip">
    </div>
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
                <p id="as"></p>
                <p id="asfs"></p>
                <img id="blah" src="user.png" class="img-fluid" alt="Image will appear here" />
                <script>
                    function readURL(input) 
                    {
                        add = $('input#name').val();
                        add2 = $('input#designation').val();
                        add3 = $('input#email').val();
                        add4 = $('input#phone').val();
                        $('h5#db').empty().html(add).show();
                        $('p#dab').empty().html(add2).show();
                        $('p#as').empty().html(add3).show();
                        $('p#asfs').empty().html(add4).show();

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
    
    <a href="#dataprevious1" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="dataprevious1">
                                    <h6 class="m-0 font-weight-bold text-white">Head</h6>
                                </a>
                                <div class="collapse" id="dataprevious1">
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
                                    <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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
                                      
                                        <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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
<div class="card shadow mb-4">
    
    <a href="#dataprevious2" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="dataprevious2s">
                                    <h6 class="m-0 font-weight-bold text-white">Scientists</h6>
                                </a>
                                <div class="collapse" id="dataprevious2">
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
                                    <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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
                                      
                                        <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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
<div class="card shadow mb-4">
    
    <a href="#dataprevious3" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="dataprevious3">
                                    <h6 class="m-0 font-weight-bold text-white">Administrative Staff</h6>
                                </a>
                                <div class="collapse" id="dataprevious3">
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
                                    <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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
                                      
                                        <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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
<div class="card shadow mb-4">
    
    <a href="#dataprevious4" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="dataprevious4">
                                    <h6 class="m-0 font-weight-bold text-white">Technical Staffs</h6>
                                </a>
                                <div class="collapse" id="dataprevious4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Rank</th>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Designation</th>
                        <th>Action</th>                
                    </tr>
                </thead>
                
               <tbody>
               <?php  
               
                    $sql = "SELECT * FROM staff where Category='Technical Staffs'";  
                    $result = mysqli_query($connect, $sql);  

                    while($row = mysqli_fetch_assoc($result))  
                    {  ?>
                        <tr>
                        <td><?php echo $row['Rank']; ?></td>
                        <td><img  src="<?php echo $row['ImageUrl']; ?>" class="img-thumbnail" alt="Image will appear here" /></td>
                        <td><?php echo $row['Name']; ?></td>
                        <td><?php echo $row['Designation']; ?></td>
                         <td><div class="btn-group" role="group" aria-label="Basic"><a class='btn btn-outline-success btn-sm'data-toggle='modal' data-target='#update<?php echo $row['Id']; ?>'><i class='fas fa-pen'></i></a>
                         <a   class='btn btn-outline-danger btn-sm'data-toggle='modal' data-target='#delete<?php echo $row['Id']; ?>'><i class='fas fa-trash'></i></a>
                        </div></td>
                        </tr>
                         
                        <!-- Update Modal-->
                        <div class="modal fade" id="update<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                                    <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
                                         <div class="form-group">
                                             <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
                                            <label for="title">Name</label>
                                            <input type="text" name="update_name"  class="form-control" id="title" value="<?php echo $row['Name']; ?>"aria-describedby="emailHelp"  placeholder="Enter title">
                                           <br> <label for="Description">Designation</label>
                                           <input type="text" name="update_designation"   class="form-control" id="title" value="<?php echo $row['Designation']; ?>"aria-describedby="emailHelp"  placeholder="Enter title">
                                           <br> <label for="Description">Rank</label>
                                            <input input type="text" name="update_message" rows="3" class="form-control" id="title" value="<?php echo $row['Rank']; ?>"aria-describedby="emailHelp"  placeholder="Enter title"></input>
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
                        <div class="modal fade" id="delete<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="delete"
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
                                       
                                        <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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

<div class="card shadow mb-4">
    
    <a href="#dataprevious5" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="dataprevious5">
                                    <h6 class="m-0 font-weight-bold text-white">Skilled Supporting Staffs</h6>
                                </a>
                                <div class="collapse" id="dataprevious5">
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
                                    <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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
                                      
                                        <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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
<div class="card shadow mb-4">
    
    <a href="#dataprevious6" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="dataprevious">
                                    <h6 class="m-0 font-weight-bold text-white">Project Staffs</h6>
                                </a>
                                <div class="collapse" id="dataprevious6">
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
                                    <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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
                                      
                                        <form method="post" action="DirectorMessage.php" enctype="multipart/form-data" style="padding:10px;">
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

