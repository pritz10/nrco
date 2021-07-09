<?php
$title = "Contact Us";
require_once 'include/header.php'; ?>

 
<!-- about breadcrumb -->
<section class="w3l-about-breadcrumb text-center">
          <h2 class="title">Contact Us</h2>
</section>
<section class="w3l-contact-1 pt-5"id="contact">
  <div class="contacts-9 pt-lg-4">
       <div class="container pb-lg-4">
          <div class="d-grid contact-viewhny">
           
              <div class="map-content-9 mt-lg-0 mt-md-4 mt-2">
                  <form action="https://sendmail.w3layouts.com/submitForm" method="post">
                      <div class="twice-two">
                          <input type="text" class="form-control" name="w3lName" id="w3lName" placeholder="Name"
                              required="">
                          <input type="email" class="form-control" name="w3lSender" id="w3lSender" placeholder="Email"
                              required="">
                      </div>
                      <div class="twice">
                          <input type="text" class="form-control" name="w3lSubject" id="w3lSubject"
                              placeholder="Subject" required="">
                      </div>
                      <textarea name="w3lMessage" class="form-control" id="w3lMessage" placeholder="Message"
                          required=""></textarea>
                      <button type="submit" class="btn btn-style btn-primary mt-4">Send Message  <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
                  </form>
              </div>
              <div class="cont-detailshnyf mt-lg-0 mt-4">
                <div class="cont-tophny">
                  <div class="cont-left text-center">
                      <span class="fa fa-map-marker text-primary"></span>
                  </div>
                  <div class="cont-right">
                      <h6>Address</h6>
                      <p>ICAR-National Research Centre for Orchids Dikiling Road, Pakyong, Sikkim 737106</p>
                  </div>
              </div>
                <div class="cont-tophny margin-up">
                    <div class="cont-left text-center">
                        <span class="fa fa-phone text-primary"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Telephone</h6>
                        <p><a href="tel:03592267031">03592267031</a></p>
                     </div>
                </div>
                <div class="cont-tophny margin-up">
                    <div class="cont-left text-center">
                        <span class="fa fa-envelope-o text-primary"></span>
                    </div>
                    <div class="cont-right">
                        <h6>Email Us</h6>
                        <p><a href="mailto:director.nrco@icar.gov.in" class="mail">director.nrco@icar.gov.in</a></p>
                     </div>
                </div>
               
            </div>
          </div>
      </div>
     
  </div>
</section>



<?php
require_once 'include/footer.php'; ?>