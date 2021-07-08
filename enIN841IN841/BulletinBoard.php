<?php require_once 'Header.php';?>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">
<?php
    if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'upload')
    {
    $filename = $_FILES['myfile']['name'];
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $tags = mysqli_real_escape_string($connect, $_POST['tags']);
    $created_date = date("d-F-Y");
    // destination of the file on the server
    $destination = 'files/PDF/' . $filename;

    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['myfile']['tmp_name'];
    $size = $_FILES['myfile']['size'];

    if (!in_array($extension, ['pdf'])) {
        echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
        <strong>File extension should be PDF or the File is too big to handle.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
     } elseif ($_FILES['myfile']['size'] > 70000000) { // file shouldn't be larger than 20Megabyte
        echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
        <strong>File too large! Compress the PDF and try again.</strong>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>';
     } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO  nrconewdb.bulletin_board (name, pdfurl, tags, date) VALUES ('$name','$destination','$tags','$created_date')";

            if (mysqli_query($connect, $sql)) {
                if(mysqli_affected_rows($connect) > 0 ){
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
    $name = mysqli_real_escape_string($connect, $_POST['update_name']);
    $uid = mysqli_real_escape_string($connect, $_POST['id']);
    $tags = mysqli_real_escape_string($connect, $_POST['tags']);

    $created_date = date("d-F-Y");
    $sql = "UPDATE nrconewdb.bulletin_board set Name='$name', Tags='$tags', Date='$created_date' where id='$uid'";
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
     
    $uid =  mysqli_real_escape_string($connect,$_POST['id']);   
    $sql = "DELETE FROM nrconewdb.bulletin_board where id='$uid'";
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
    <h1 class="h3 mb-0 text-gray-800">Bulletin Board</h1>
</div>
<div class="row">
<!-- Area Chart -->
    <div class="col-xl-12 col-lg-12">
    <div class="card shadow mb-4">
   <!-- Card Header - Accordion -->
    <a href="#messagedata" class="d-block card-header py-3" data-toggle="collapse"
     role="button" aria-expanded="true" aria-controls="as">
 <h6 class="m-0 font-weight-bold text-white">News/ Events , Opportunity and Tenders</h6>
                                </a>
                                <!-- Card Content - Collapse -->
                                <div class="collapse show " id="messagedata">
                                    <div class="card-body">
                                    <form method="post" action="BulletinBoard" enctype="multipart/form-data" style="padding:10px;">
                                            <div class="form-group">
                                                <label for="sel1">Select Category Where You Want To Upload: <br> [NEWS/ EVENTS] [OPPORTUNITY] [TENDERS]</label>
                                                <select class="form-control" name="tags">
                                                    <option>News/ Events</option>
                                                    <option>Opportunity</option>
                                                    <option>Tenders</option>
                                                 </select>
                                                </div>
                                                <div class="form-group">
                                                <label for="h">Select a PDF</label>
                                                <input class="form-control" name="myfile" id="formFileLg"required   type="file">
                                                </div>
                                              
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Description of PDF</label>
                                                <input type="text" name="name" class="form-control" required   id="title"  >
                                            </div>
                                           

                                            <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-primary" id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>

                                           
                                            </form>
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
            <table class="table table-bordered" id="bulletinboard" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Name of the file</th>
                        <th>Category</th>
                        <th>UploadDate</th>
                        <th>Action</th>
                    </tr>
                </thead>
                
               <tbody>
               <?php  
               
                    $sql = "SELECT * FROM bulletin_board";  
                    $result = mysqli_query($connect, $sql);  

                    while($row = mysqli_fetch_assoc($result))  
                    {  ?>
                        <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo '<a href="enIN841IN841'.$row['PdfUrl'].'"target="_blank">  '.$row['Name'].'</li></a>'; ?></td>

                         <td><?php echo $row['Tags']; ?></td>
                        <td><?php echo $row['Date']; ?></td>
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
                                    <form method="post" action="BulletinBoard" enctype="multipart/form-data" style="padding:10px;">
                                         <div class="form-group">
                                             <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
                                             <div class="form-group">
                                                <label for="sel1">Select Category Where You Want To Upload: <br> [NEWS/ EVENTS] [OPPORTUNITY] [TENDERS]</label>
                                                <select class="form-control" name="tags">
                                                    <option>News/ Events</option>
                                                    <option>Opportunity</option>
                                                    <option>Tenders</option>
                                                 </select>
                                                </div>
                                            <label for="title">Description of File</label>
                                            <input type="text" name="update_name"  class="form-control" id="title" value="<?php echo $row['Name']; ?>"aria-describedby="emailHelp"  placeholder="Enter title">
                                            
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
                                        
                                      
                                        <form method="post" action="BulletinBoard" enctype="multipart/form-data" style="padding:10px;">
                                         <div class="form-group">
                                             <input type="hidden" name="id" value="<?php echo $row['Id']; ?>">
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

