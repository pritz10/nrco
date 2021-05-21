<!-- Author: Pritam Shah -->
<?php require_once 'include/db.php'; ?>
<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>NRCO</title>
  <META NAME="DESCRIPTION" CONTENT="The ICAR-National Research Centre for Orchids, Sikkim was established by Indian Council of Agricultural Research, New Delhi on 5th October 1996 based on the recommendations of the Planning Commission during VIIIth Five Year Plan. The basic objective for setting up this centre was to provide research support to upcoming orchid industry, conserve and use orchid genetic resources available in the country.">
  <META NAME="KEYWORDS" CONTENT="Sikkim, Darjeeling, ICAR, NRCO, Orchids, Orchid, Gangtok,ICAR-NRC for Orchids">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <!--CSS-->
    <link href="//fonts.googleapis.com/css2?family=Jost:wght@300;400;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style-starter.css">
     <link rel="stylesheet" href="assets/css/dataTables.bootstrap4.min.css">
     <script src="assets/js/jquery-3.5.1.min.js"></script>
     <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/dataTables.bootstrap4.min.js"></script>
<script>
$(document).ready(function() {
    $('#example').DataTable({
      "lengthMenu": [[10, 25, 50, -1], [10, 25, 50, "All"]],
      columnDefs: [
            { width: '15%', targets:3,
              width: '12%', targets:1 }
        ],
        fixedColumns: true
    });
  
} );</script>
   
</head>

<body class="resizable">
  <section class="w3l-top-menu-1">
    <div class="top-hd">
      <div class="container">
    <header class="row top-menu-top">
      <div class="accounts col-6">
        
        <li class="top_li"><a  id="google_translate_element"> </a>	</li>

          <li class="top_li"><span class="fa fa-phone"></span><a href="tel:03592267031">Call</a></li>
          <li class="top_li"><span class="fa fa-envelope"></span><a href="mailto:director.nrco@icar.gov.in" class="mail"> Email</a>	</li>
      </div>
      <div class="social-top col-6 " style="font-size: 14px;" >
          </span>
          <span class="fa fa-book top_li1" style="color: white;"> 
            <a href="Screenreader.html" style="color: white;">Screen Reader</a>  |
            </span>
      <span class="fa fa-font" style="color: white;"> 
          <a class="increase">+ </a> |
          <a class="decrease">--</a> |
          <a class="reset">reset</a>
        </span>
      </div> 
    </header>
  </div>
  </div>
  </section>
  <img  src="assets/images/k.gif" style="margin-left: auto;  margin-right: auto;" class="img-responsive">

<!-- <div class="row">
  <div class="col-lg-2 col-2">
  <img style="margin-left: auto;  margin-right: auto;" height="100px" src="assets/images/icarlogo.gif" class="img-responsive">
  </div>
     
    <div class="col-lg-8 col-8" style="margin-top: auto;  margin-bottom: auto;">
  <img  src="assets/images/logod.png" height="100px" class="img-responsive">
  </div>
</div> -->

  <script type="text/javascript">
   function googleTranslateElementInit() {
     new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
   }
   </script>
   
<header id="site-header" class="j" style="padding-left: 10px; padding-right: 10px;"> 
<div class="container">

      <nav class="navbar navbar-expand-lg stroke">
          
          <a class="navbar-brand" href="index.php">NRCO
            <img src="assets/images/logo.png" alt="logo" title="" style="height:35px;" />
        </a> 
          <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
              data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
              aria-label="Toggle navigation">
              <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
              <span class="navbar-toggler-icon fa icon-close fa-times"></span>
              </span>
          </button>

          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
              <ul class="navbar-nav ml-auto">
                
                  <li class="nav-item  ">
                      <a class="nav-link" href="index.php"> <span class="fa fa-home"></span> Home</a>
                  </li>
                  <li class="nav-item dropdown  ">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    At a glance
                  </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="about_nrco.php">About NRCO</a>
                      <a class="dropdown-item" href="#">Organization Setup</a>
                      <a class="dropdown-item" href="Staff.php">Staffs</a>
                      <a class="dropdown-item" href="regional_sub-centres.php">Regional/ Sub Centres</a>
                      <a class="dropdown-item" href="admin\dist\uploads\ICAR-NRCO-At-a-Glance.pdf">Institute as a glance</a>
                        <a class="dropdown-item" href="FormerDirectors.php">Former Directors</a>    
  
                     
                    </div>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Services
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Facilities</a>
                      <div class="dropdown-menu">
                        <a href="#" class="dropdown-item">Library Services</a>
                        <a href="#" class="dropdown-item">Guest House</a>
                         <a class="dropdown-item" href="#">SAIF</a>
                      <a class="dropdown-item" href="#">Labrotaries</a> 
                         </div>
                      <a class="dropdown-item" href="#">Training</a>
                      <a class="dropdown-item" href="#">Consultancy</a>
                      <a class="dropdown-item" href="#">NAGS</a>
                      <a class="dropdown-item" href="#">Library</a>
                      <a class="dropdown-item" href="#">SAIF</a>
                      <a class="dropdown-item" href="#">Labrotaries</a>
                      <a class="dropdown-item" href="#">Seminar Hall</a>
                      
                    </div>
                  </li>
                
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Research
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Projects</a>
                      <a class="dropdown-item" href="#">Technologies</a>            
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Publications
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Newsletter</a>
                      <a class="dropdown-item" href="#">Technical Bulletin</a>      
                      <a class="dropdown-item" href="#">Annual Report</a>            
                      <a class="dropdown-item" href="#">Technical Publications</a>            
                    </div>
                  </li>
                  
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Outreach
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">TSP</a>
                      <a class="dropdown-item" href="#">SCSP</a>            
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                   Bulletin
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="#">Events</a>
                      <a class="dropdown-item" href="#">Opportunity</a>
                      <a class="dropdown-item" href="#">Tenders</a>
                    </div>
                  </li>
                  <li class="nav-item  ">
                      <a class="nav-link" href="index.php">हिंदी</a>
                  </li>
                  <li class="nav-item  ">
                      <a class="nav-link" href="index.php">Contact</a>
                  </li>
                 
                    
                    
  
              </ul>
          </div>
          <!-- toggle switch for light and dark theme -->
          <div class="mobile-position">
              <nav class="navigation">
                  <div class="theme-switch-wrapper">
                    <a href="#" class="nav-link"  data-toggle="modal" data-target="#modalPassword"><i class="fa fa-user fa-fw fa-lg"></i></a>

                      <label class="theme-switch" for="checkbox">
                          <input type="checkbox" id="checkbox">
                          <div class="mode-container">
                                <i class="gg-sun"></i>
                              <i class="gg-moon"></i>
                          </div>
                      </label>
                  </div>
              </nav>
          </div>
          <!-- //toggle switch for light and dark theme -->
      </nav>
</header>
</div>