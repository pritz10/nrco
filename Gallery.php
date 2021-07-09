 <!-- Include Header -->
 <?php
$title = "Gallery";
require_once 'include/header.php'; ?>

 <!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
          <h2 class="title">Gallery</h2>
</section>

 
 
 
<section class="w3l-portfolio-8 ">
  <div class="portfolio-main py-md-4 py-3">
    <div class="container">
      
      <div class="row galler-top mt-lg-5 mt-4">
      <?php
$files = glob("enIN841IN841/files/Images/mainslider/*.*");
for ($i=0; $i<count($files); $i++)
      {
        $image = $files[$i];
        $supported_file = array(
                
          'jpg',
                'jpeg',
                'png'
         );

         $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
         if (in_array($ext, $supported_file)) {
              
            echo'<div class="col-md-4 protfolio-item hover14">
            <a href="'.$image .'" data-lightbox="example-set" class="mb-4">
              <figure>
              <img src="'.$image .'" alt="product" class="img-fluid">
              </figure>
            </a>
          </div>';
             } else {
                continue;
            }
          }
       ?>
     
 
        

         

      </div>
    </div>
  </div>
</section>
 

 
 
    

<script src="assets/js/lightbox-plus-jquery.min.js"></script>

 

  
<?php require_once 'include/footer.php'; ?>
