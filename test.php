<?php require_once 'include/header.php'; ?>
<div class="container">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
  <ol class="carousel-indicators">
        <?php
        $sql = "select * from nrconewdb.mainslider";  
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
    $sql = "select * from nrconewdb.mainslider";  
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
        <img src="admin/dist/<?php echo $row['ImageUrl']; ?>">
        <div class="carousel-caption d-none d-md-block">
          <h5><?php echo $row['Title']; ?></h3>
          <p><?php echo $row['Description']; ?></p>
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
 <?php require_once 'include/footer.php'; ?>