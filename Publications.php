<!-- Include Header -->
<?php require_once 'include/header.php'; ?>
 
<?php
    if(isset($_GET["xsuasdasdfafasfygug"]))
    {
        $data = $_GET["xsuasdasdfafasfygug"];
 
        if(strcmp($data, 'Newsletter') == 0)
        {
             echo $data;

        }
         
        
     }
?>
 

<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
          <h2 class="title"> <?php echo $data; ?></h2>
</section>
<div class="container"> 

 <div class="area-box mb-lg-0 shadow" style="padding:10px;">
                                     
                                    <div class="table-responsive">
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    Search for any   <strong>  Opportunity,
</strong> date, year etc...
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="table-responsive">
      <table class="table table-hover table-bordered  " id="example" width="100%" cellspacing="0">             
         <thead class="thead-dark">
         <tr >
                <th>Id</th>

                <th>Date</th>
                <th>Title</th>

        </thead>
        <tbody>
        <?php  
         if(isset($_GET["xsuasdasdfafasfygug"]))
         {
             $data = $_GET["xsuasdasdfafasfygug"];
             
          }
          $sql = "SELECT * FROM pdfs where Tags= '$data'  ORDER BY Id DESC";  
            $result = mysqli_query($connect, $sql);  
                        
                        while($row = mysqli_fetch_assoc($result))  
                        {  ?>

                        <tr>
                        <td><?php echo $row['Id']; ?></td>
                        <td><?php echo $row['Date']; ?></td>

                        <td><?php echo '<strong><img src="assets/images/icon.svg.png" width="30" height="auto" style="border-radius: 0px;" > <a href="enIN841IN841'.$row['PdfUrl'].'"target="_blank">  '.$row['Name'].'</li></a> <i class="fa fa-download text-danger " aria-hidden="true"> </i>'; ?></td>
                        </tr>
                                

                        
                        <?php 
                        }
                        ?>
        </tbody>
         
    </table> 

    </div>
    </div>
  </div>
  </div>
<?php require_once 'include/footer.php'; ?>