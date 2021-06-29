
<?php       
  include_once('db.php');
  session_start();
  if(isset($_SESSION['us'])){
   $user_check = $_SESSION['us'];
   $ses_sql = mysqli_query($connect,"select Username from admin where Username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
     $login_session = $row['Username'];
     if (strcmp($user_check, "Prits") == 0) {
      }
    else {
         header("location:getin.php");
         die();
    }
}
else{
    header("location:getin.php");
    die();
 } 
 
  if (isset($_POST['submit'])) {
      $errorMsg = "";
       $username = mysqli_real_escape_string($connect, $_POST['username']);
       $password = mysqli_real_escape_string($connect, $_POST['password']);
       $password = password_hash($password, PASSWORD_DEFAULT);
      
      $sql = "SELECT * FROM admin WHERE Username = '$username'";
      $execute = mysqli_query($connect, $sql);
        
      if(strlen($password) < 6) {
          $errorMsg  = "Password should be six digits";
          echo'<div class="alert alert-danger text-center" style="font-weight:bold;">'.$errorMsg.'</div>';

      }else if($execute->num_rows == 1){
          $errorMsg = "This Username already exists";
          echo'<div class="alert alert-danger text-center" style="font-weight:bold;">'.$errorMsg.'</div>';

      }else{
          $query= "INSERT INTO admin(Username,Password) 
                  VALUES('$username','$password')";
          $result = mysqli_query($connect, $query);
      if ($result == true) {
        $errorMsg  = "User added successfully";
        echo'<div class="alert alert-success text-center" style="font-weight:bold;">'.$errorMsg.'</div>';
      }else{
          $errorMsg  = "You are not Registred..Please Try again";
          echo'<div class="alert alert-danger text-center" style="font-weight:bold;">'.$errorMsg.'</div>';

      }
    }
  }
  if (isset($_POST['delete'])) 

  {
       
      $uid = $_POST['Id'];   
      $sql = "DELETE FROM nrconewdb.admin where Id='$uid'";
      if (mysqli_query($connect, $sql)) {
          echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
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
 


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta http-equiv="refresh" content="900;url=getout.php" />

    <title>NRCO ADMIN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class=" ">

    <div class="container">

        <div class="card o-hidden border-0 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                <div class="col-lg-6 d-none d-lg-block " style="background: url('img/m.jpg');  background-position: center; background-size: cover;"></div>
                    <div class="col-lg-6">
                        <div class="p-5">
                        
                    <div class="card shadow mb-4">
    <a href="#dataprevious" class="d-block card-header py-3" data-toggle="collapse"
                                    role="button" aria-expanded="true" aria-controls="dataprevious">
                                    <h6 class="m-0 font-weight-bold text-white">Show Admins</h6>
                                </a>
                                <div class="collapse" id="dataprevious">
    <div class="card-body">
    <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                    <th>Id</th>

                        <th>Username</th>
                         
                      
                        <th>Action</th>

                       

                    </tr>
                </thead>
                
               <tbody>
               <?php  
               
                    $sql = "SELECT * FROM admin LIMIT 10 OFFSET 1";  
                    $result = mysqli_query($connect, $sql);  

                    while($row = mysqli_fetch_assoc($result))  
                    {  ?>
                        <tr>
                        
                        <td><?php echo $row['Id']; ?></td>

                        <td><?php echo $row['Username']; ?></td>
                         
                       
                        <td><div class="btn-group" role="group" aria-label="Basic"> 
                         <a   class='btn btn-outline-danger btn-sm'data-toggle='modal' data-target='#delete<?php echo $row['Id']; ?>'><i class='fas fa-trash'></i></a>
                        </div></td>
                        </tr>
                         
                          
                        
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
                                        <strong> <?php echo $row['Username']; ?>  </strong>
                                      
                                        <form method="post" action="fghg.php" enctype="multipart/form-data" style="padding:10px;">
                                         <div class="form-group">
                                             <input type="hidden" name="Id" value="<?php echo $row['Id']; ?>">
                                          </div> 
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                         <button type="submit" value="delete"  name="delete" class="btn btn-danger" id="upload-file"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
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
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="post"  class="user" action="fghg.php" enctype="multipart/form-data" style="padding:10px;">                                        
                                 
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" id="exampleInputEmail"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                   
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleInputPassword" placeholder="Password">
                                    
                                    </div>
                                    <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-primary btn-user btn-block" id="upload-file"><i class="fa fa-user" aria-hidden="true"></i>  Register...</button>
                                    <a href="index.php" class="btn btn-google btn-user btn-block">
                                    <i class="fa fa-home" aria-hidden="true"></i>  Home
                                </a>
                                </div>
                            </form>
                        </div>
                    </div>
                    </div>
            </div>
        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>