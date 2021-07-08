<?php require_once 'Header.php';?>
<?php
   if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'upload')
   {	 	
        $name1 = mysqli_real_escape_string($connect, $_POST['name1']);
        $name2 = mysqli_real_escape_string($connect, $_POST['name2']);
        $name3 = mysqli_real_escape_string($connect, $_POST['name3']);
        $name4 = mysqli_real_escape_string($connect, $_POST['name4']);

        $date = date("d-F-Y");

          $sql = "INSERT INTO counter (Name1,Name2,Name3,Name4,Date) VALUES ('$name1','$name2','$name3','$name4','$date')";
          if (mysqli_query($connect, $sql)) {
            if(mysqli_affected_rows($connect) >0 ){
            echo'<div class="alert alert-success alert-dismissible fade show" id="alert" role="alert">
            <strong>Uploaded Successfully</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
            }
            else {
                echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
            <strong>Please try again</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';
              }
          
        } else {
            echo'<div class="alert alert-warning alert-dismissible fade show" id="alert" role="alert">
            <strong>Server busy</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>';         }
        mysqli_close($connect);
   }
?>
 
                            <div class="container">
                            <!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Upload Counters</h1>
</div>
                                <div class="card mb-4">
                                    <div class="card-header text-white">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        </strong> Counter</strong>
                                    </div>
                                    <form method="post" action="Counter" enctype="multipart/form-data" style="padding:10px;">
                                              <div class="form-group">
                                                <label for="exampleFormControlInput1">Number of Species</label>
                                                <input type="text" name="name1" class="form-control" required >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Number of Staffs</label>
                                                <input type="text" name="name2" class="form-control" required   >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Number of Flowers</label>
                                                <input type="text" name="name3" class="form-control" required   >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Number of Awards</label>
                                                <input type="text" name="name4" class="form-control" required  >
                                            </div>

                                            <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-primary" id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>

 `                                           
                                            </form>

                                 </div>
                                 </div>
                       
<?php require_once 'Footer.php';?>