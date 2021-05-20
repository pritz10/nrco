<?php require_once 'db.php'; ?>

<?php require_once 'header.php';?>

           <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
              
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Bulletin Board</li>
                        </ol>
                              

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">How to upload contents in the bulletin board?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="alert alert-warning" role="alert">
                                            <strong> Here you can CONTENTS in the bulletin board.</strong> <br>
                                                Step 1: Select where to update content. <br>News/Events or Opportunity or Tenders <br>
                                                Step 2: Select a Pdf <br>
                                                Step 3: Give the title that you want to display about the uploaded PDF <br>
                                                Step 4: Check spellings. <br>
                                                Step 5: Click on Upload button and wait.
                                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-primary" data-dismiss="modal">Close</button>
                            </div>
                            </div>
                        </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-area mr-1"></i>
                                        <strong>       Bulletin Board <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
                                                            ?
                                                            </button></strong>
                                    </div>
                                    <form method="post" action="bulletinboardupload.php" enctype="multipart/form-data" style="padding:10px;">
                                    <?php
                                $msg ="";
                               // $msg = $_GET['msg'];

                               
                                if(isset($_GET['msg'])){
                                    $a=$_GET['msg'];
                                    
                                     echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">'
                                    .$a.'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>';                          
                                }

                               
                                
                                if(isset($_GET['success']))
                                {
                                    $msg= "Uploaded Successfully !";
                                    echo '<div class="alert alert-success alert-dismissible fade show" role="alert">'
                                    .$msg.'<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span>
                                    </button>
                                  </div>';                                   }
                                ?>        
                                             <div class="form-group">
                                                <label for="sel1">Select Category Where You Want To Upload: [NEWS/ EVENTS] [OPPORTUNITY] [TENDERS]</label>
                                                <select class="form-control" name="tags">
                                                    <option>News/ Events</option>
                                                    <option>Oppoturnity</option>
                                                    <option>Tenders</option>
                                                 </select>
                                                </div>
                                             <div class="form-group">
                                                <label for="exampleFormControlFile1">Select a PDF</label>
                                                <input type="file" name="myfile" class="form-control-file" onchange="readURL(this);" required  id="exampleFormControlFile1">
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Description of PDF</label>
                                                <input type="text" name="name" class="form-control" required onchange="readURL(this);" id="title"  >
                                            </div>
                                           

                                           
                                            <button type="submit" style="width: 100%;" value="submit" name="submit" class="btn btn-primary mt-3  " id="upload-file"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
                                           
                                            </form>

                                 </div>
                            </div>
                            <!-- <div class="col-xl-6">
                                <div class="card mb-4">
                                    <div class="card-header">
                                        <i class="fas fa-chart-bar mr-1"></i>
                                        Live Preview
                                    </div>
                                    
                                    <img id="blah" src="assets/img/p.png" alt="Image will appear here" />
                                    <p id="dab"></p>
                                   <strong> <p id="db"></p></strong>
                                    <p id="dd"></p>
                                   
                                </div>
                            </div>
                  
                        <script>
                             function readURL(input) {
                                add = $('input#title').val();
                                add3 = $('input#designation').val();

                                add2 = $('textarea#details').val();

                                 $('p#db').empty().html(add).show();
                                 $('p#dab').empty().html(add2).show();
                                 $('p#dd').empty().html(add3).show();


                                if (input.files && input.files[0]) {
                                    var reader = new FileReader();
                                    reader.onload = function (e) {
                                        $('#blah')
                                            .attr('src', e.target.result)
                                            .width(468)
                                            .height(240);
                                    };

                                    reader.readAsDataURL(input.files[0]);
                                                         }

                                            }
                        </script>
                        
                        -->

                        </div>
   

                        
                     
                         

                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table mr-1"></i>
                              Previous Messages Detail
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">

<table id="example"  class="table table-hover table-bordered">
<thead class="thead-dark">
<tr>
<th>Sl.no</th>
<th>Category</th>
<th>Title</th>
 
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

 
echo "</tr>";


}
?>
</tbody>

</table> 

</div>
                            </div>
                        </div>
                    </div>
                </main>
                
                <?php require_once 'footer.php'; ?>
