<?php require_once 'db.php'; ?>
<?php require_once 'header.php';?>


           <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid">
              
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Counter</li>
                        </ol>
                              

                        <!-- Modal -->
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">How to change the counters?</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                            <div class="alert alert-warning" role="alert">
                                            <strong> Here you can change the counters of Species, Staffs, Flowers and Awards</strong> <br>
                                                
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
                                        </strong> Counter <button type="button" class="btn btn-warning btn-sm" data-toggle="modal" data-target="#exampleModal">
                                                            ?
                                                            </button></strong>
                                    </div>
                                    <form method="post" action="counteruploads.php" enctype="multipart/form-data" style="padding:10px;">
                                    <?php
                                $msg =" ";
                                if(isset($_GET['error']))
                                {
                                    $msg= "Failed. Try again!";
                                    echo'<div class="alert alert-danger">'.$msg.'</div>';
         
                                }
                                if(isset($_GET['success']))
                                {
                                    $msg= "Uploaded Successfully !";
                                    echo'<div class="alert alert-success">'.$msg.'</div>';
                                }
                                ?>        
                                              
                                             
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Number of Species</label>
                                                <input type="text" name="name1" class="form-control" required >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Number of Staffs</label>
                                                <input type="text" name="name2" class="form-control" required   >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Number of Flowers</label>
                                                <input type="text" name="name3" class="form-control" required   >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleFormControlInput1">Number of Awards</label>
                                                <input type="text" name="name4" class="form-control" required  >
                                            </div>

                                           
                                            <button type="submit" style="width: 100%;" value="submit" name="submit" class="btn btn-primary mt-3  " ><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
                                           
                                            </form>

                                 </div>
                            </div>
                        </div>
                    </div>
                </main>
                
                <?php require_once 'footer.php'; ?>
