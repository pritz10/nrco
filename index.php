<!-- Include Header -->
<?php require_once 'include/header.php'; ?>
<!-- Main Body-->
<?php   
    $sql = "SELECT * FROM bulletin_board ORDER BY id DESC LIMIT 5";  
    $result = mysqli_query($connect, $sql);  
?>  
<div class=" ">  
      <marquee behavior="scroll"  direction="left" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">
      <?php  
      if(mysqli_num_rows($result) > 0)  
        {  
          while($row = mysqli_fetch_array($result))  
            {  
            echo '<img src="assets/images/giphy.gif" width="30px"><a href="admin/dist'.$row['PdfUrl'].'" class="marq"  target="_blank">'.$row['Name'].'</a>'."&nbsp;&nbsp;&nbsp;";  
            }  
        }  
      ?>  
      </marquee>  
      <br />                 
</div>  

  
<div class="container">

 <!-- main-slider -->
 <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
      <?php
          $sql = "select * from nrconewdb.mainslider";  
          $result = mysqli_query($connect, $sql); 
          $count = mysqli_num_rows($result);  
          if($count > 0)
          {  
            while($row = mysqli_fetch_assoc($result))
                {
          ?>
        <div class="item">
          <li>     
             
          <div class="slider-info banner-view bg bg2 img-fluid radius-image video-popup-image" style="background: url('admin/dist/<?php  echo $row['ImageUrl'];?>'); background-repeat:no-repeat; background-size: cover;">

               <div class="banner-info">
                <div class="container">
                  <div class="banner-info-bg text-left">
                  <h5><?php  echo $row['Title']; ?></h5>
                  <p><?php  echo $row['Description']; ?></p>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div> 
        <?php
        }   
        }  
          else
        {
          echo" No data to fetch"; 
        }
        ?>          
      </div>
    </div>
  </section>
  <!-- /main-slider -->
  </div>
<section class="w3l-features py-5" id="features">
  <div class="container">
    <div class="middle-section text-center">
      <div class="section-width">
    <a href="Bulletinboarddetails.php">   <h3 class="hny-title py-md-4">Bulletin Board <span class="fa fa-external-link"></h3></a> 
       </div>
      </div> 
    <div class="grids-area-hny main-cont-wthree-fea row">      
      <div class="col-lg-6 col-sm-6 grids-feature  mb-4">
        <a href="Bulletinboarddetails.php" class="list-group-item list-group-item-action flex-column align-items-start active">
   <div class="d-flex w-100 justify-content-between">
     <h5 class="mb-1"><span class="fa fa-newspaper-o"></span> News / Events </h5>
   </div>
    </a>
       <ul class="list-group left shadow">
       <marquee behavior="scroll" direction="up" onmouseover="this.stop();" onmouseout="this.start();">  
       <?php  
       $sql = "SELECT * FROM bulletin_board WHERE Tags='News/ Events' ORDER BY id DESC LIMIT 20";  
       $result = mysqli_query($connect, $sql);         
                     if(mysqli_num_rows($result) > 0)  
                     {  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '<a href="admin/dist/'.$row['PdfUrl'].'"target="_blank" class="marq"> <li class="list-group-item d-flex justify-content-between align-items-center"> '.$row['Name'].'</li></a>';  
                          }  
                     } 
                     else
                     echo"No data to display"; 
                 ?>  
                 </marquee>
      </ul>
     </div> 
     <div class="col-lg-3 col-sm-6 grids-feature mb-4 ">
      <a href="Bulletinboarddetails.php" class="list-group-item list-group-item-action flex-column align-items-start active">
 <div class="d-flex w-100 justify-content-between">
   <h5 class="mb-1"><span class="fa fa-line-chart"></span> Opportunity</h5>
</div>
 </a>
     <ul class="list-group left shadow">
     <?php  
       $sql = "SELECT * FROM bulletin_board WHERE Tags='Oppoturnity' ORDER BY id DESC LIMIT 20";  
       $result = mysqli_query($connect, $sql);  
      
                           if(mysqli_num_rows($result) > 0)  
                     {  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '<a href="admin/dist/'.$row['PdfUrl'].'"target="_blank" class=" marq"> <li class="list-group-item d-flex justify-content-between align-items-center"> '.$row['Name'].'</li></a>';  
                          }  
                     } 
                     else
                     echo"No data to display"; 
                 ?>  
     </ul>
     
   </div>
      
   <div class="col-lg-3 col-sm-6 grids-feature mb-4">
    <a href="Bulletinboarddetails.php" class="list-group-item list-group-item-action flex-column align-items-start active">
<div class="d-flex w-100 justify-content-between">
 <h5 class="mb-1"> <span class="fa fa-paperclip"></span> Tenders</h5>
</div>

</a>
   <ul class="list-group left shadow">
   <?php  
       $sql = "SELECT * FROM bulletin_board WHERE Tags='Tenders' ORDER BY id DESC LIMIT 20";  
       $result = mysqli_query($connect, $sql);  
      
       
                     if(mysqli_num_rows($result) > 0)  
                     {  
                          while($row = mysqli_fetch_array($result))  
                          {  
                               echo '<a href="admin/dist/'.$row['PdfUrl'].'"target="_blank" class="marq"> <li class="list-group-item d-flex justify-content-between align-items-center"> '.$row['Name'].'</li></a>';  
                          }  
                     } 
                     else
                     echo"No data to display"; 
                 ?>  
   </ul>
   
 </div>
       
    </div>
  </div>
</section>                           


 

  <section class="w3l-index5" id="about">
    <div class="new-block py-3">
        <div class="container">
            <div class=" text-center">
                <div class="section-width">
                  <h6 class="sub-title text-center"> About Us</h6>
                    <h3 class="hny-title"> Welcome to NRCO, Sikkim</h3>
                    <p class="mt-3" style="text-align: justify;">The National Research Centre for Orchids was established on 5th October 1996 by the indian council of Agricultural Research (ICAR), New Delhi to organize program on improvement in productivity, quality and commercialization of orchids.<br><br> The Sikkim state authorities handed over 22.19 acres of land belonging to Regional Agricultural Centre along witha all other assets to ICAR for establishment of the centre. In October 1997, the centre also took over the CPRS, Darjeeling form CPRI and established a campus for research on temperate orchids.</p>
                </div>
                <div class="history-info mt-5">
                    <div class="position-relative">
                        <img src="assets/images/National-Research-Centre-For-Orchids.jpg" class="img-fluid radius-image video-popup-image"
                            alt="video-popup">
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>




  
 

<section class="w3l-features py-5" id="features">
  <div class="container py-lg-5 py-md-4">
    <div class="grids-area-hny main-cont-wthree-fea row">
      <div class="col-lg-4 col-sm-6 grids-feature">
      <div class="area-box mb-lg-0 shadow">
      <div class="icon">
            <span class="fa fa-fa fa-bookmark-o"></span>
          </div>
          <h4 style="color:primary;"><a href="#feature" class="title-head">Mandate</a></h4>
          <p style="text-align: justify;">Applied and strategic research on conservation, improvement and culture of orchids for enhancing productivity and utilisation.
Transfer of technology and capacity building of stakeholders for enhancing and sustaining productivity of orchid.</p>
                    
</div>
                   
      </div>
      <div class="col-lg-4 col-sm-6 grids-feature mt-sm-0">
        <div class="area-box mb-lg-0 shadow">
        <div class="icon">
            <span class="fa fa-dot-circle-o"></span>
          </div>
          <h4><a href="#feature" class="title-head">Vision</a></h4>
         
          
          <p style="text-align: justify;">To act as premier centre for research and development activities related to orchid commercialization and sustainable utilization.</p>
 
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 grids-feature mt-lg-0">
        <div class="area-box mb-lg-0 shadow">
        <div class="icon">
            <span class="fa fa-rocket"></span>
          </div>
          <h4><a href="#feature" class="title-head">Mission</a></h4>
          <p style="text-align: justify;">Science and Technology driven development of orchid industry in the country.</p>
         </div>
      </div>      
    </div>
  </div>
</section>
<section class="w3l-grids-3 py-5" id="about">
    <div class="container">
      <div class="cwp4-two row">
        <div class="cwp4-image col-lg-6 pl-lg-5 mb-lg-0 mb-5">
      <div class="bottom-ab-grids align-items-center">
        <div class="bottom-ab-left">
        <?php
        $records = mysqli_query($connect,"select * from director_message ORDER BY id DESC LIMIT 1"); // fetch data from database
        while($data = mysqli_fetch_array($records))
        {?>
          <h6 class="sub-title">Message</h6>
          <h3 class="hny-title">From the Director's Desk</h3>
          <p style="text-align: justify; height:257px;overflow:hidden;"><?php echo $data['Message']; ?></p>
          <a href="message_from_director.php" class="read">Read more</a> 
         
        </div>
      </div>
    </div>
   
      <div class="cwp4-image col-lg-6 pl-lg-5 mb-lg-0 mb-5">
        <div class="text-center">
        <img src="admin/dist/<?php echo $data['ImageUrl']; ?>" class="img-curve img-fluid" alt="" />

          <h5><?php echo $data['Name']; ?></h5>
          <p><?php echo $data['Designation']; ?></p>
          <?php
       }?>
      </div>
      </div>
            </div>
          </div>
        </div>
      </section>
  <!--//services-->

<div class="container">
<div class="row">
  <div class="col-sm-6">
  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
Mobile App  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
</div>
  </div>
  <div class="col-sm-6">
  <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active" aria-current="true">
    The current link item
  </a>
  <a href="#" class="list-group-item list-group-item-action">A second link item</a>
  <a href="#" class="list-group-item list-group-item-action">A third link item</a>
  <a href="#" class="list-group-item list-group-item-action">A fourth link item</a>
  <a href="#" class="list-group-item list-group-item-action disabled" tabindex="-1" aria-disabled="true">A disabled link item</a>
</div>
  </div>
</div>
<div class="album py-5">
    <div class="container">
      <div class="row row-cols-2 row-cols-sm-2 row-cols-md-3 g-3">
      <div class="col-lg-2 col-sm-6 grids-feature">
      <div class="area-box mb-lg-0 shadow">
            <div class="card-body">
              <p class="card-text">Downloads</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                 </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6 grids-feature">
          <div class="card btn-outline-primary ">
            <div class="card-body">
              <p class="card-text black">Froms</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                 </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6 grids-feature">
          <div class="card ">
            <div class="card-body">
              <p class="card-text">Rajhbhasa</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                 </div>
               </div>
            </div>
          </div>
        </div>
        <div class="col-lg-2 col-sm-6 grids-feature">
          <div class="card ">
            <div class="card-body">
              <p class="card-text">This is .</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                 </div>
               </div>
            </div>
          </div>
        </div>
      
        <div class="col-lg-2 col-sm-6 grids-feature">
          <div class="card ">
            <div class="card-body">
              <p class="card-text">Android App</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                 </div>
               </div>
            </div>
          </div>
        </div>
      
        <div class="col-lg-2 col-sm-6 grids-feature">
          <div class="card ">
            <div class="card-body">
              <p class="card-text">This is .</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <button type="button" class="btn btn-sm btn-outline-primary">View</button>
                 </div>
               </div>
            </div>
          </div>
        </div>
         
      
      </div>
    </div>
  </div>
</div>

  
  <!-- stats -->



  <section class="w3l-stats" id="stats">
    <div class="gallery-inner container">
      <div class="row stats-con pb-lg-3">
      <?php
      $sql="SELECT * FROM counter ORDER BY id DESC LIMIT 1";
        $result = mysqli_query($connect,$sql); // fetch data from database
        if(mysqli_num_rows($result) > 0)  
        {  
             while($data = mysqli_fetch_array($result))  
             {  
           ?>
      
        <div class="col-lg-3 col-6 stats_info counter_grid">
          <p class="counter"><?php echo $data['Name2']; ?></p>
          <h4>Species</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid1">
          <p class="counter"><?php echo $data['Name2']; ?></p>
          <h4>Staffs</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid mt-lg-0 mt-5">
          <p class="counter"><?php echo $data['Name3']; ?></p>
          <h4>Flowers</h4>
        </div>
        <div class="col-lg-3 col-6 stats_info counter_grid2 mt-lg-0 mt-5">
          <p class="counter"><?php echo $data['Name4']; ?></p>
          <h4>Awards</h4>
        </div>
        <?php
       }}
      else
      {
        echo" No data";
      }?>
      </div>
    </div>
  </section>
<!-- //home page video popup section -->

<!-- testimonials -->
<section class="w3l-clients" id="clients">
  <!-- /grids -->
  <div class="cusrtomer-layout py-5">
      <div class="container">
          <div class="heading text-center mx-auto">
              <h6 class="sub-title text-center">Testimonials</h6>
              <h3 class="hny-title mb-md-5 mb-4">Happy Visitors & Feedbacks</h3>
          </div>
          <!-- /grids -->
          <div class="testimonial-width">
              <div id="owl-demo1" class="owl-two owl-carousel owl-theme">
              <?php
                  $sql="SELECT * FROM testimonial ORDER BY id DESC LIMIT 5";
                    $result = mysqli_query($connect,$sql); // fetch data from database
                    if(mysqli_num_rows($result) > 0)  
                    {  
                        while($data = mysqli_fetch_array($result))  
                        {                
                    ?>
                     <div class="item">
                      <div class="testimonial-content">
                          <div class="testimonial">
                              <blockquote>
                                  <q><?php echo $data['Message']; ?></q>
                              </blockquote>
                              <div class="testi-des">
                                  <div class="test-img"> <img src="admin/dist/<?php echo $data['ImageUrl']; ?>" class="img-fluid"  >
                                  </div>
                                  <div class="peopl align-self">
                                      <h3><?php echo $data['Name']; ?></h3>
                                      <p class="indentity"><?php echo $data['Designation']; ?></p>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                  <?php
                    }}
                      else
                      {
                        echo" No data";
                      }?>
              </div>
          </div>
      </div>
      <!-- /grids -->
  </div>
  <!-- //grids -->
</section>

<!-- <section class="w3l-content-with-photo-4">
  
  <div class="content-photo-info py-5">
    <div class="container">
     
      <div class="row justify-content-center">       
      <div class="col-4">
          <h6 class="sub-title">Facebook</h6>
     <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNRCOSikkim%2F&tabs=timeline&width=340&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" class="no-lazyload"></iframe>
<iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNRCOSikkim%2F&width=160&layout=button_count&action=like&size=large&share=true&height=46&appId" width="160" height="29" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media" class="no-lazyload"></iframe>
        </div>
      </div>
    </div>
  </div>
</section> -->

 
 
<section class="w3l-grids1">
    <div class="hny-three-grids">
      <div class="container">
       <div class="row justify-content-center">
       <div class="col-sm-4 col-lg-2">
            <div class="benchbox">
              <a href="https://icar.gov.in/">   <img src="assets/images/icarlogo.jpg" alt="ICAR" class="img-responsive   text-align: center;"></a>
         </div>  </div>
        
          <div class="col-sm-4 col-lg-2">
            <div class="benchbox">
              <a href="https://www.mygov.in/">  <img src="assets/images/mygov.jpg" alt="MY GOV" class="img-responsive"></a>
           </div>  </div>
        
          <div class="col-sm-4 col-lg-2">
            <div class="benchbox">
              <a href="https://www.farmer.gov.in/"> <img src="assets/images/farmerportal.png" alt="FARMER PORTAL" class="img-responsive"></a>  
           </div>
          </div>
        
          <div class="col-sm-4 col-lg-2">
            <div class="benchbox">
              <a href="https://www.iihr.res.in/">  <img src="assets/images/iirhlogo.jpg" alt="banner" class="img-responsive">
             </a>  
          </div>
          </div>
           
          <div class="col-sm-4 col-lg-2">
            <div class="benchbox">
              <a href="https://www.iihr.res.in/">  <img src="assets/images/iirhlogo.jpg" alt="banner" class="img-responsive">
             </a>  
          </div>
          </div>
        
          <div class="col-sm-4 col-lg-2">
            <div class="benchbox">
              <a href="Hospitality.html">  <img src="assets/images/digitallogo.jpg" alt="banner" class="img-responsive">
            </a>   
          </div> 
          </div>
          </div>
           
        
        
      </div>
    </div>
  </section>

<?php require_once 'include/footer.php'; ?>