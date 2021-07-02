<!-- Include Header -->
<?php
$title = "Former Directors";
require_once 'include/header.php'; ?>

 

 
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
          <h2 class="title">Former Directors</h2>
          
          <div class="text-center" id="loader">
  <div class="spinner-border text-white" role="status">
    <span class="sr-only">Loading...</span>
  </div>
</div>
</section>
 
<!--/team-sec-->
<section class="w3l-team-main">
  <div class="team">
    <div class="container">
  
      <br><br>
   
      
      <div class="row team-row">
                <?php
                  $sql="SELECT * FROM staff where Category='Head'ORDER BY Rank;";
                  $result = mysqli_query($connect,$sql); // fetch data from database
                    if(mysqli_num_rows($result) > 0)  
                    {  
                        while($data = mysqli_fetch_array($result))  
                        {                
                    ?>
        <div class="col-lg-3 col-6 team-wrap  ">
          <div class="team-info text-center">
            <div class="column position-relative">
            
             <img src="enIN841IN841/<?php echo $data['ImageUrl']; ?>" alt="staff"
                  class="img-fluid team-image" />
               </div>
            <div class="column">
              <h3 class="name-pos"><?php echo $data['Name']; ?></h3>
              <p><?php echo $data['Designation']; ?></p>  
              <?php echo $data['Phone']; ?> <br>
              <a href="mailto:<?php echo $data['Email']; ?>"> <?php echo $data['Email']; ?> </a> 
            </div>
          </div>
        </div>
        <script type="text/javascript">document.getElementById('loader').style.display = 'none';</script>

                         <?php
                        }}
                          else
                          {
                            echo" No data";
                          }?>
      </div>
    </div>
  </div>

 
 
   

  
</section>
<!--//team-sec-->
        <?php require_once 'include/footer.php'; ?>