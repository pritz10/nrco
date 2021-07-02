<!-- Include Header -->
<?php
$title = "ICAR-NRC for Orchids";
require_once 'include/header.php'; ?>


<!-- Main Body-->
<?php   
    $sql = "SELECT * FROM bulletin_board ORDER BY id DESC LIMIT 5";  
    $result = mysqli_query($connect, $sql);  
?>  
<div class=" "  style="background: #FF512F;  /* fallback for old browsers */
  background: -webkit-linear-gradient(to right, #DD2476, #FF512F);  /* Chrome 10-25, Safari 5.1-6 */
  background: linear-gradient(to right, #DD2476, #FF512F); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
      <marquee behavior="scroll"  direction="left" scrollamount="6" onmouseover="this.stop()" onmouseout="this.start()">
      <?php  
      if(mysqli_num_rows($result) > 0)  
        {  
          while($row = mysqli_fetch_array($result))  
            {  
            echo '<img src="assets/images/new.gif" width="50px"><a href="admin/dist'.$row['PdfUrl'].'" class="marq" style="color:white; border-bottom: 2px solid white; "  target="_blank"> '.$row['Name'].'</a>'."&nbsp;&nbsp;&nbsp;";  
            }  
        }  
      ?>  
      </marquee>  
                      
</div>  

<br>
<div class="container">

 <!-- main-slider -->
 <section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
      <?php
          $sql = "select * from nrconewdb.mainslider ORDER BY id DESC LIMIT 5";  
          $result = mysqli_query($connect, $sql); 
          $count = mysqli_num_rows($result);  
          if($count > 0)
          {  
            while($row = mysqli_fetch_assoc($result))
                {
          ?>
        <div class="item">
          <li>     
             
          <div class="slider-info banner-view bg bg2 img-fluid radius-image video-popup-image" style="background: url('enIN841IN841/<?php  echo $row['ImageUrl'];?>'); background-repeat:no-repeat; background-size: cover;">

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
<section class="w3l-features py-5" id="mainid">
  <div class="container">
    <div class="middle-section text-center">
      <div class="section-width">
        <h3 class="hny-title py-md-4">Bulletin Board <i class="fa fa-bookmark" aria-hidden="true"></i></h3> 
       </div>
      </div> 
    <div class="grids-area-hny main-cont-wthree-fea row">      
      <div class="col-lg-6 col-sm-12 grids-feature  mb-4">
        <a href="News.php" data-toggle="tooltip" data-placement="top" title="Click to explore more..."   class="list-group-item list-group-item-action flex-column align-items-start active">
   <div class="d-flex w-100 justify-content-between">
     <h5 class="mb-1"><span class="fa fa-newspaper-o"></span> News / Events   </h5><i class="fa fa-expand" aria-hidden="true"></i>
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
                               echo '<a href="enIN841IN841/'.$row['PdfUrl'].'"target="_blank" class="marq"> <li class="list-group-item d-flex justify-content-between align-items-center"> '.$row['Name'] .'<span class="badge badge-pill badge-danger">' .$row['Date'].'</span></li></a>';  
                          }  
                     } 
                     else
                     echo"No data to display"; 
                 ?>  
                 </marquee>
      </ul>
     </div> 
     <div class="col-lg-3 col-sm-6 grids-feature mb-4 ">
      <a href="Opportunity.php" data-toggle="tooltip" data-placement="top" title="Click to explore all Opportunity..." class="list-group-item list-group-item-action flex-column align-items-start active">
 <div class="d-flex w-100 justify-content-between">
   <h5 class="mb-1"><span class="fa fa-line-chart"></span> Opportunity  </h5> <i class="fa fa-expand" aria-hidden="true"></i>

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
                               echo '<a href="enIN841IN841/'.$row['PdfUrl'].'"target="_blank" class=" marq"> <li class="list-group-item d-flex justify-content-between align-items-center"> '.$row['Name'].'</li></a>';  
                          }  
                     } 
                     else
                     echo"No data to display"; 
                 ?>  
     </ul>
     
   </div>
      
   <div class="col-lg-3 col-sm-6 grids-feature mb-4">
    <a href="Tenders.php" data-toggle="tooltip" data-placement="top" title="Click to explore all tenders..." class="list-group-item list-group-item-action flex-column align-items-start active">
<div class="d-flex w-100 justify-content-between">
 <h5 class="mb-1"> <span class="fa fa-paperclip"></span> Tenders </h5>  <i class="fa fa-expand" aria-hidden="true"></i>
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
                               echo '<a href="enIN841IN841/'.$row['PdfUrl'].'"target="_blank" class="marq"> <li class="list-group-item d-flex justify-content-between align-items-center"> '.$row['Name'].'</li></a>';  
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
                <div class="cwp4-two row">
                <div class="cwp4-image col-lg-6 pl-lg-5 mb-lg-0 mb-5">
                    <div class="position-relative">
                        <img src="assets/images/National-Research-Centre-For-Orchids.jpg" loading="lazy" class="img-fluid radius-image video-popup-image"
                            alt="video-popup">
                    </div>
                </div>
                <div class="cwp4-image col-lg-6 pl-lg-5 mb-lg-0 mb-5">
                    <div class="position-relative">
                    <div id="myCarousel" class="carousel slide carousel-fade" data-ride="carousel">
    <!-- Indicators -->
  <ol class="carousel-indicators">
        <?php
        $sql = "select * from nrconewdb.flowers";  
        $result = mysqli_query($connect, $sql); 
        $count = mysqli_num_rows($result);  
        $i=0;
        foreach($result as $row)
        {
        $active='';
        if($i==0)
        {
            $active='active';
        }
        ?>
        <li data-target="#myCarousel" data-slide-to="<?=$i;?>" class="<?=$active;?>"></li>
        <?php $i++;}    ?>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
    <?php
    $sql = "select * from nrconewdb.flowers";  
    $result = mysqli_query($connect, $sql); 
    $count = mysqli_num_rows($result);  
    $i=0;
    foreach($result as $row)
    {
    $active='';
    if($i==0)
    {
        $active='active';
    }
    ?>
        <div class="carousel-item <?=$active;?>">
        <img src="enIN841IN841/<?php echo $row['ImageUrl']; ?>">
        <div class="carousel-caption  d-md-block">
          <h5><?php echo $row['Title']; ?></h3>
         </div>   
        </div>
        <?php $i++; } ?>

         

         
    </div>

    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
  </section>




  
 

  <!-- Orchid of the month -->

<section class="w3l-grids-3 py-5" id="aboutorchid" style="background: #FF512F;
    background: -webkit-linear-gradient(to right, #DD2476, #FF512F);
    background: linear-gradient(to right, #DD2476, #FF512F);">
    <div class="container">
      <div class="cwp4-two row">
        <div class="cwp4-image col-lg-6 pl-lg-5 mb-lg-0 mb-5">
      <div class="bottom-ab-grids align-items-center">
        <div class="bottom-ab-left">
        <?php
        $records = mysqli_query($connect,"select * from orchidinfo ORDER BY id DESC LIMIT 1"); // fetch data from database
        while($data = mysqli_fetch_array($records))
        {?>
         
          <img src="enIN841IN841/<?php echo $data['ImageUrl']; ?>" class="img-curve img-fluid" alt="" />

        </div>
      </div>
    </div>
   
      <div class="cwp4-image col-lg-6 pl-lg-5 mb-lg-0 mb-5">
        <div class="text-center " style="color:white;" >
         <h5  style="color:white;" >Orchid of the month</h5>

          <h3 class="hny-title"  style="color:white;" ><?php echo $data['Name']; ?></h3>
 
        <p style="text-align: justify; height:172px;overflow:hidden; color:white;" ><?php echo $data['Message']; ?></p>
          <a data-target="#orchidinfo" data-toggle="modal" class="read"  style="color:white;" href="#orchidinfo">Read More</a><br> <br>
          Share: 
          <div class="btn-group" role="group" aria-label="Basic example">
  <button type="button" class="btn btn-primary"><i class="fa fa-facebook-square" aria-hidden="true"></i>
</button>
  <button type="button" class="btn btn-primary"><i class="fa fa-whatsapp" aria-hidden="true"></i></button>
  <button type="button" class="btn btn-primary" onclick="window.open('https://wwww.facebook.com/sharer.php?u=https://nrcorchids.nic.in/index.php/en/','_blank')" ><i class="fa fa-share" aria-hidden="true"></i></button>
</div>
          <div class="modal fade" id="orchidinfo" tabindex="-1" role="dialog" aria-labelledby="orchidinfo" aria-hidden="true">
  
  <div class="modal-dialog modal-dialog-scrollable" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="orchidinfo"><?php echo $data['Name']; ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <img src="enIN841IN841/<?php echo $data['ImageUrl']; ?>" class="img-curve img-fluid" alt=""/> <br> <br>
      <p style="text-align: justify;"><?php echo $data['Message']; ?></p>
      </div>
      <div class="modal-footer">
        
      </div>
    </div>
  </div>
</div>
           <?php
       }?>
      </div>
      </div>
            </div>
          </div>
        </div>
      </section>
 
  <!-- From the Director's Desk -->
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
          <p style="text-align: justify; height:210px;overflow:hidden;"><?php echo $data['Message']; ?></p>
          <a href="message_from_director.php" class="read">Read more</a> 
         
        </div>
      </div>
    </div>
   
      <div class="cwp4-image col-lg-6 pl-lg-5 mb-lg-0 mb-5">
        <div class="text-center">
        <img src="enIN841IN841/<?php echo $data['ImageUrl']; ?>" class="img-curve img-fluid" alt="" />

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

  
  <section class="w3l-grids-3 py-5" id="about" style="background: #DE6262;  /* fallback for old browsers */
background: -webkit-linear-gradient(to right, #FFB88C, #DE6262);  /* Chrome 10-25, Safari 5.1-6 */
background: linear-gradient(to right, #FFB88C, #DE6262); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
">
<div class="container">
<div class="cwp4-two row">
        <div class="cwp4-image col-lg-4 pl-lg-5 mb-lg-0 mb-5">
  <div class="smartphone">
  <div class="content">
  <a href=" .php"  class="list-group-item list-group-item-action flex-column align-items-start active ">
 <div class="d-flex w-100 justify-content-between">
   <h5 class="mb-1 text-center">Mobile Applications<img src="google-play-badge.png" width="200px" alt=""> </h5>  
</div>
 </a>
     <ul class="list-group left shadow" style="height: 308px;">
     <a data-toggle="tooltip" data-placement="top" title="Click to explore more..."  href="https://play.google.com/store/apps/details?id=nrco.cymbidiumorchid&hl=en"target="_blank" class=" marq"> <li class="list-group-item d-flex justify-content-between align-items-center"><img src="assets/images/unnamed.webp" width="50" alt="">Orchid Farming</li></a>
     <a  data-toggle="tooltip" data-placement="top" title="Click to explore more..."  href="https://play.google.com/store/apps/details?id=nrco.orchidopedia&hl=en"target="_blank" class=" marq"> <li class="list-group-item d-flex justify-content-between align-items-center"><img src="assets/images/unnamed (1).webp" width="50" alt=""> OrchidoPedia</li></a>
     <a  data-toggle="tooltip" data-placement="top" title="Click to explore more..." href="https://play.google.com/store/apps/details?id=com.nrco.orchidpestmanagement&hl=en"target="_blank" class=" marq"> <li class="list-group-item d-flex justify-content-between align-items-center"><img src="assets/images/unnamed (2).webp" width="50" alt="">Orchid Pest Management</li></a>
     <a  data-toggle="tooltip" data-placement="top" title="Click to explore more..." href="https://play.google.com/store/apps/details?id=com.nrco.datasheet&hl=en"target="_blank" class=" marq"> <li class="list-group-item d-flex justify-content-between align-items-center"><img src="assets/images/unnamed (3).webp" width="50" alt="">Orchid-MAN</li></a>
      
     </ul> </div>
</div>
  </div>
 
  <div class="cwp4-image col-lg-8 pl-lg-5 mb-lg-0 mb-5">
  <section class="w3l-feature-1">
  <div class="feature-s1sec">
    <div class="container">
    <div class="cwp4-two row">
    <div class="cwp4-image col-lg-6 pl-lg-5 mb-lg-0 mb-5">
 
    <div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Downloads</a>
  <a href="#" class="list-group-item list-group-item-action">Vision 2050</a>
  <a href="#" class="list-group-item list-group-item-action">Swach Bharat Abhiyaan</a>
  <a href="#" class="list-group-item list-group-item-action  ">Vestibulum at eros</a>
</div>
<div class="list-group">
  <a href="#" class="list-group-item list-group-item-action active">
    Cras justo odio
  </a>
  <a href="#" class="list-group-item list-group-item-action">Downloads</a>
  <a href="#" class="list-group-item list-group-item-action">Pulications</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
  <a href="#" class="list-group-item list-group-item-action  ">Vestibulum at eros</a>
  <a href="#" class="list-group-item list-group-item-action">Porta ac consectetur ac</a>
 </div>
 
      </div>
    <div class="cwp4-image col-lg-6 pl-lg-5 mb-lg-0 mb-5">
  <div data-toggle="tooltip" data-placement="top" title="Scroll Please"  class="smartphone">
  <div class="content">
  <p style="color: white;">Faceook Page:</p>
  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNRCOSikkim%2F&tabs=timeline&width=280&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="298" height="420" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>  </div>

    </div>
</div>

  </div>
   
  </div>
  </div>

  </div>
</section>
  <!-- <div class="smartphone">
  <div class="content">
<p style="text-align: center; color:blue ">Our Facebook Page</p> 
  <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FNRCOSikkim%2F&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="298" height="480" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>  </div>
</div> -->
  </div>
</div>
 
</div>

</section>



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

 
 
 

<?php require_once 'include/footer.php'; ?>