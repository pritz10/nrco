<?php
   include('db.php');
   session_start();
   
   $user_check = $_SESSION['us'];
 $load= "Loading...\n".$user_check;

 
   $ses_sql = mysqli_query($connect,"select Username from admin where Username = '$user_check' ");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
     $login_session = $row['Username'];
   
   

   if(!isset($_SESSION['us'])){
      header("location:getin.php");
      die();
   }
   

  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Pritam Shah">
    <meta http-equiv="refresh" content="900;url=getout.php" />

    <title>NRCO-Dashboard</title>
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.7.0/css/buttons.dataTables.min.css">

    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">
      <!-- Custom styles for this page -->
      <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
<script>
   $(document).ready(function() {
  $('#dataTable').DataTable();  
   });
   </script>
</head>
<body id="page-top">
    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
                <div class="sidebar-brand-icon">
                  <img src="img/logo.png" width="35px" alt="">
                </div>
                <div class="sidebar-brand-text mx-3">NRCO</div>
            </a>
            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Page
            </div>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsewo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-home fa-cog"></i>
                    <span>Home Page</span>
                </a>
                <div id="collapsewo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Select</h6>
                        <a class="collapse-item" href="Counter.php">Counter</a>
                        <a class="collapse-item" href="Visitors.php">Visitors feedback</a>
                    </div>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <i class="fas fa-fw fa-cog"></i>
                    <span>At a Glance</span>
                </a>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Select</h6>
                        <a class="collapse-item" href="Staff.php">Staffs</a>
                        <a class="collapse-item" href="cards.html">Former Directors</a>
                    </div>
                </div>
            </li>
              <!-- Nav Item - Charts -->
              <li class="nav-item">
                <a class="nav-link" href="Publications.php">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Publications</span></a>
            </li>
            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link" href="Research.php">
                    <i class="fas fa-fw fa fa-lightbulb"></i>
                    <span>Research</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="Outreach.php">
                    <i class="fas fa-fw fa fa-map-marker"></i>
                    <span>Outreach</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider">

           

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

            

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                         
                    <li class="nav-item dropdown no-arrow mx-1">
                        
                            <a class="nav-link dropdown-toggle" href="#" style="color: black;" ><i class="fas fa-calendar fa-fw"> </i><?php
                                echo  date("d-F-Y");?>  
                               
                                
                             </a>
                         
                           
                        </li>

                        <li class="nav-item dropdown no-arrow mx-1">
                        
                            <a class="nav-link dropdown-toggle" href="#" style="color: red;" ><i class="fas fa-clock fa-fw"> </i>

                               <span id="timer"></span>
                                
                             </a>
                         
                           
                        </li>
                        

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown"  role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600  ">Hello,  <?php echo  $user_check; ?> </span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                
                                <?php
                                    $style = "";


                                    if (strcmp($user_check, "Prits") == 0) {
                                        $style = "style='display:visbile;'";

                                    }
                                    else {
                                        $style = "style='display:none;'";
                                    }
                                    ?>
                                <a class="dropdown-item" <?php echo $style;?> href="fghg.php">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="getout.php">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->
