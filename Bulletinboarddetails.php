<!-- Include Header -->
<?php require_once 'include/header.php'; ?>
<section class="w3l-about-breadcrumb text-center">
          <h2 class="title">Bulletin Board</h2>
</section>
<div class="container"> 
<div class="col-9">
<div class="area-box mb-lg-0 shadow" style="padding:10px;">
                                     
                                    <div class="table-responsive">

                                    <table id="example"  class="table table-hover table-bordered">
        <thead class="thead-dark">
            <tr>
                <th>Id</th>
                <th>Category</th>
                <th>Title</th>
                <th>Date</th>
                
        </thead>
        <tbody>
        <?php  
          $sql = "SELECT * FROM bulletin_board";  
            $result = mysqli_query($connect, $sql);  
                        
                        while($row = mysqli_fetch_assoc($result))  
                        {  
                                echo "<tr>";
                                echo"  
                                <td>".$row["Id"]."</td> <td>".$row["Tags"]."</td>";              
                               echo '<td><a href="admin/dist/'.$row['PdfUrl'].'"target="_blank">  '.$row['Name'].'</li></a></td>';  

                               echo"  
                                <td>".$row["Date"]."</td>";
                               echo "</tr>";


                        }
        ?>
        </tbody>
         
    </table> 

    </div>
    </div>
    </div>
 </div>
 
<?php require_once 'include/footer.php'; ?>

