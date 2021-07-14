<!-- Include Header -->
<?php
$title = "Annual Report";
require_once 'include/header.php'; ?>
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
          <h2 class="title">Annual Reports</h2>
</section>
<div class="container"> 

 <div class="area-box mb-lg-0 shadow" style="padding:10px;">
                                     
                                    <div class="table-responsive">
                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                    Search for any   <strong>  Annual Reports,
</strong> date, year etc...
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="table-responsive">
      <table class="table table-hover" id="example" width="100%" cellspacing="0">             
         <thead class="thead-dark">
         <tr>
        
         <th>Title</th>
         <th>Image</th>

        </thead>
        <tbody>
        <?php  
        
          $sql = "SELECT * FROM pdfs where Tags= 'Annual Reports'  ORDER BY Id DESC";  
            $result = mysqli_query($connect, $sql);  
                        
                        while($row = mysqli_fetch_assoc($result))  
                        {  ?>

                        <tr class=shadow>                       
                        <td style="padding: 50px;"><?php echo '<h4><a href="enIN841IN841'.$row['PdfUrl'].'"target="_blank">  '.$row['Name'].'</li></a></h2></i>'; ?> <br><h6><?php echo $row['Description']; ?></h6><br>
                         <a class='btn btn-success'data-toggle='modal' data-target='#update<?php echo $row['Id']; ?>'>View</a> <a class='btn btn-success'data-toggle='modal' data-target='#update<?php echo $row['id']; ?>'>Download</a></td>
                        <td style="padding-top: 50px;"><img src="enIN841IN841/<?php echo $row['ImageUrl']; ?>"  class="img-thumbnail"/><br>
                       </td>

  
                      </tr>
                                
                <!-- Update Modal-->
                          <div class="modal fade" id="update<?php echo $row['Id']; ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title text-primary" id="exampleModalLabel">Annual Report</h5>
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                   
                                </div>
                            </div>
                        </div>
                        
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