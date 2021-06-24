 
<?php require_once 'db.php';
 
 if(isset($_SESSION['login_user'])){
    header("location:index.php");
     
 }
   
if($_SERVER['REQUEST_METHOD']=='POST' and $_REQUEST['submit']== 'upload'){
// username and password sent from form 
      
      $myusername = mysqli_real_escape_string($connect,$_POST['username']);
      $mypassword = mysqli_real_escape_string($connect,$_POST['password']); 
      
      $sql = "SELECT Id FROM admin WHERE Username = '$myusername' and Password = '$mypassword'";
      $result = mysqli_query($connect,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
       
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
          $_SESSION['login_user'] = $myusername;
         
         header("location: index.php");
      }else {
         $error = "Your Login Name or Password is invalid";
         echo $error;
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

    <title>ADMIN LOGIN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block " style="background: url('img/l.jpg');  background-position: center;
                            background-size: cover;"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">NRCO ADMIN</h1>
                                    </div>
                                    <form method="post"  class="user" action="getin.php" enctype="multipart/form-data" style="padding:10px;">                                        

                                         <div class="form-group">
                                            <input type="text" name="username" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp" required
                                                placeholder="Enter Email Address...">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" required
                                                id="exampleInputPassword" name="password" placeholder="Password">
                                        </div>
                                      
                                        
                                        
                                        <button type="submit" style="width: 100%;" value="upload"  name="submit" class="btn btn-primary btn-user btn-block" id="upload-file"><i class="fa fa-user" aria-hidden="true"></i> Get In...</button>

                                       



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