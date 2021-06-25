<?php
  
       
  include_once('db.php');
  session_start();
  if(!isset($_SESSION['us'])){

  
   
   $user_check = $_SESSION['us'];

 
   $ses_sql = mysqli_query($connect,"select Username from admin where Username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
     $login_session = $row['Username'];
     if (strcmp($user_check, "ARIS_Admin") !== 0) {
        echo 'Both strings are not equal';
    }
    else {
        echo 'Both strings are equal';
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
          header("Location:getin.php");
      }else{
          $errorMsg  = "You are not Registred..Please Try again";
          echo'<div class="alert alert-danger text-center" style="font-weight:bold;">'.$errorMsg.'</div>';

      }
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

    <title>NRCO ADMIN REGISTER</title>

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
                    <div class="col-lg-5 d-none d-lg-block" style="background: url('img/m.jpg');  background-position: center;
                            background-size: cover;"></div>
                    <div class="col-lg-7">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Create an Account!</h1>
                            </div>
                            <form method="post"  class="user" action="register.php" enctype="multipart/form-data" style="padding:10px;">                                        
                                 
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="username" id="exampleInputEmail"
                                        placeholder="Username">
                                </div>
                                <div class="form-group">
                                   
                                        <input type="password" class="form-control form-control-user" name="password"
                                            id="exampleInputPassword" placeholder="Password">
                                    
                                    </div>
                                    <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-primary btn-user btn-block" id="upload-file"><i class="fa fa-user" aria-hidden="true"></i>  Register...</button>

                                </div>

                               
                               
                            </form>
                            

                            <hr>
                            <div class="text-center">
                                    <?php echo 'User IP Address - '.$_SERVER['REMOTE_ADDR'];  ?>
                                        <br>
                                        <p class="small">AKMU/ ARIS CELL</p>
                                    </div>
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