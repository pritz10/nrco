<?php require_once 'Header.php';?>
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'upload')
    {
    $filename = $_FILES['myfile']['name'];
    $title =mysqli_real_escape_string($connect, $_POST['title']);
    $description =mysqli_real_escape_string($connect, $_POST['description']);
     $created_date = date("d-F-Y");
    // destination of the file on the server
    $destination = 'files/images/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['jpg','png','jpeg','gif'])) {

        echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>File extension ishould be JPG or PNG or the image is too big to handle.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';

        echo "";
     } elseif ($_FILES['myfile']['size'] > 200000000) { // file shouldn't be larger than 20Megabyte
           echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
          <strong>File too large! Compress the image and try again.</strong>
          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>';
     } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO  nrconewdb.mainslider(title, description, imageurl, date) VALUES ('$title','$description','$destination','$created_date')";
            if (mysqli_query($connect, $sql)) {
                echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Successfully Uploaded.</strong>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>';        }
        } else {
            echo'<div class="alert alert-warning alert-dismissible fade show" role="alert">
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
    $utitle = mysqli_real_escape_string($connect,$_POST['update_title']);
    $uid = mysqli_real_escape_string($connect,$_POST['Id']);
    $description = mysqli_real_escape_string($connect,$_POST['update_desc']);
    $created_date = date("d-F-Y");
    $sql = "UPDATE nrconewdb.mainslider set Title='$utitle', Description='$description', Date='$created_date' where Id='$uid'";
    if (mysqli_query($connect, $sql)) {
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
if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'delete')
{
     
    $uid = $_POST['Id'];   
    $sql = "DELETE FROM nrconewdb.mainslider where Id='$uid'";
    if (mysqli_query($connect, $sql)) {
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
?>

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                       
                    </div>

                    <!-- Content Row -->
                    <div class="row">

                         
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                               News, Events...</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900"> <a href="BulletinBoard">Bulletin Board</a> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-blue-900"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                               Message from</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-900"> <a href="DirectorMessage">Director's Desk</a> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-envelope fa-2x text-green-900"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">Sliding Flowers
                                            </div>
                                            <div class="row no-gutters align-items-center">
                                                <div class="col-auto">
                                                    <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"> <a href="flowers">Flower</a> </div>
                                                </div>
                                                <div class="col">
                                                    <div class="progress progress-sm mr-2">
                                                        <div class="progress-bar bg-info" role="progressbar"
                                                            style="width: 50%" aria-valuenow="50" aria-valuemin="0"
                                                            aria-valuemax="100"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-lblue-900"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Pending Requests Card Example -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-warning shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                            Orchids</div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"> <a href="funfacts">Fun Facts</a> </div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-snowflake fa-2x text-yellow-900"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Content Row -->

                    <div class="row">

                    <div class="col-xl-7 col-lg-6">
    <div class="card shadow mb-4">
   <!-- Card Header - Accordion -->
    <a href="#messagedata" style="color: white;" class="d-block card-header py-3" data-toggle="collapse"
     role="button" aria-expanded="true" aria-controls="as">
 <h6 class="m-0 font-weight-bold text-white">Upload Slider Images</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show " id="messagedata">
                                    <div class="card-body">
                                    <form method="post" action="index" enctype="multipart/form-data" style="padding:10px;">                                        
                                        <div class="form-group">
                                        <label for="exampleFormControlInput1">Enter Title</label>
                                        <input type="text" name="title" class="form-control"    onchange="readURL(this);" id="title" placeholder="Nataional Science Day Celebration">
                                        </div>
                                        <div class="form-group">
                                        <label for="exampleFormControlTextarea1">Enter Description</label>
                                                                                     <textarea class="form-control" name="description"   onchange="readURL(this);" id="details" placeholder="Dikling School was invited in celebration of National Science Day"></textarea>
                                                                                 </div>
                                                                                 
                                                                                 <div class="form-group">
                                                                                 <label for="formFile" class="form-label">Select Image 1680*1000 pixels</label>
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
          <a href="#messagedata" class="d-block card-header py-3" data-toggle="collapse"                                    role="button" aria-expanded="true" aria-controls="as">
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
                                    <h6 class="m-0 font-weight-bold text-white">Previous Posts</h6>
                                </a>
                                <div class="collapse" id="dataprevious">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>UploadDate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
               <tbody>
               <?php  
               
                    $sql = "SELECT * FROM mainslider ORDER BY Id DESC";  
                    $result = mysqli_query($connect, $sql);  

                    while($row = mysqli_fetch_assoc($result))  
                    {  ?>
                        <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><img id="blah" src="<?php echo $row['ImageUrl']; ?>" class="img-thumbnail" alt="Image will appear here" /></td>
                        <td><?php echo $row['Title']; ?></td>
                        <td><?php echo $row['Description']; ?></td>
                        <td><?php echo $row['Date']; ?></td>
                        <td><div class="btn-group" role="group" aria-label="Basic"><a class='btn btn-outline-success btn-sm'data-toggle='modal' data-target='#update<?php echo $row['Id']; ?>'><i class='fas fa-pen'></i></a>
                         <a   class='btn btn-outline-danger btn-sm'data-toggle='modal' data-target='#delete<?php echo $row['Id']; ?>'><i class='fas fa-trash'></i></a>
                        </div></td>
                        </tr>
                         
                        <!-- Update Modal-->
                        <div class="modal fade" id="update<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                    <form method="post" action="index" enctype="multipart/form-data" style="padding:10px;">
                                         <div class="form-group">
                                             <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
                                            <label for="title">Title</label>
                                            <input type="text" name="update_title" rows="3" class="form-control" id="title" value="<?php echo $row['Title']; ?>"aria-describedby="emailHelp"  placeholder="Enter title">
                                           <br> <label for="Description">Description</label>
                                            <input type="text"  name="update_desc" rows="3" class="form-control" id="title" value="<?php echo $row['Description']; ?>"aria-describedby="emailHelp"  placeholder="Enter title">
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
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="delete">Are you sure you want to delete?</h5>
                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">×</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">Select "Delete" below if you are ready to delete:<br> 
                                        <strong> <?php echo $row['Title']; ?> <br>
                                        <strong> <?php echo $row['Description']; ?></strong></strong>
                                      
                                        <form method="post" action="index" enctype="multipart/form-data" style="padding:10px;">
                                         <div class="form-group">
                                             <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
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
