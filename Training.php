<!-- Include Header -->
<?php require_once 'include/header.php'; ?>
 

 
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
          <h2 class="title">Training</h2>
</section>

 

   <section class="w3l-blog-single1">
    <div class="container py-lg-5">
    
       
      <div class="text-content-text">
        <div class="d-grid-2">
          <div class="text2">
            <p class="text2-text mt-3">The ICAR-National Research Centre for Orchids, Sikkim was established by Indian Council of Agricultural Research, New Delhi on 5th October 1996 based on the recommendations of the Planning Commission during VIIIth Five Year Plan. The basic objective for setting up this centre was to provide research support to upcoming orchid industry, conserve and use orchid genetic resources available in the country.
              <br>  <br>
              For this, Sikkim state authorities handed over 19.02 acres of land with all other assets belonging to Regional Agricultural Centre to ICAR at Pakyong on lease basis for 99 years for establishing centre. After a year during October 1997, the centre also took over the CPRS, Darjeeling from CPRI and established a regional campus for taking research activities on temperate orchids. Latestly, one sub centre established in Chettali, in the premises of IIHR, Regional station, Karnataka for research on tropical orchids.
              <br>  <br>
              In initial years of establishment, the major focus of research was on collection, characterisation, evaluation, conservation and utilization of genetic resources available in the country particularly in north-eastern region.
              <br>  <br>
              With the changing scenario of floriculture in the country, the centre has modified its approach and thrust areas of research to meet the challenges.
              <br>  <br>
              Today, the focus is on development of marketable varieties/hybrids, molecular characterisation, standardisation of agro-techniques, post-harvest management, production of quality planting materials through tissue culture and creation of repository of information related to all aspects of orchids.
            </p>
            
          </div>
        </div>
      </div>
      <div class="area-box mb-lg-0 shadow" style="padding:10px;">
                                     
                                     <div class="table-responsive">
                                     <div class="alert alert-info alert-dismissible fade show" role="alert">
                                     Search for any   <strong>  Training,
 </strong> date, year etc...
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times;</span>
         </button>
       </div>
       <div class="table-responsive">
       <table class="table table-hover table-bordered  " id="example" width="100%" cellspacing="0">             
          <thead class="thead-dark">
          <tr >
                  
          <th>Title</th>
                 <th>Date</th>
                
 
         </thead> 
         <tbody>
         <?php  
         
           $sql = "SELECT * FROM pdfs where Tags= 'Training'  ORDER BY Id DESC";  
             $result = mysqli_query($connect, $sql);  
                         
                         while($row = mysqli_fetch_assoc($result))  
                         {  ?>
 
                         <tr>
                          
 
                         <td><?php echo '<strong><img src="assets/images/icon.svg.png" width="30" height="auto" style="border-radius: 0px;" > <a href="enIN841IN841'.$row['PdfUrl'].'"target="_blank">  '.$row['Name'].'</li></a> <i class="fa fa-download text-danger " aria-hidden="true"> </i>'; ?></td>
                         <td><?php echo $row['Date']; ?></td>
  
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
  </section>

 

  <!-- //text -->



   

<?php require_once 'include/footer.php'; ?>