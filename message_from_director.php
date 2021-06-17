<!-- Include Header -->
<?php require_once 'include/header.php'; ?>
<!-- Main Body-->
<section class="w3l-about-breadcrumb text-center">
 
          <h2 class="title">Message from Director</h2>
    
</section>


<section class="w3l-blog-single" id="blog">
  <section class="w3l-blog-single1 py-5">
    <div class="container py-lg-5">
      <div class="content-info-in row">
        <div class="content-gd col-lg-12 pl-lg-4">
          <div class="title-content text-left mb-2">
          <?php
        $records = mysqli_query($connect,"select * from director_message ORDER BY id DESC LIMIT 1"); // fetch data from database
        while($data = mysqli_fetch_array($records))
        {?>
           <div class="text-center">
           <img src="enIN841IN841/<?php echo $data['ImageUrl']; ?>" class="img-curve img-fluid" alt="" />

          <h5><?php echo $data['Name']; ?></h5>
          <p><?php echo $data['Designation']; ?></p>
        </div>
              
          </div>
           
        </div>
        <div class="content-gd col-lg-12 pl-lg-4 pl-lg-5 mt-lg-0 mt-md-5 mt-4">
        <p style="text-align: justify;"><?php echo $data['Message']; ?></p>

           
        </div>
        <?php
        $connect -> close();
      }?>
      </div>
    </div>


  
   
     
             

      </div>
    </div>
    
</section>

<?php require_once 'include/footer.php'; ?>