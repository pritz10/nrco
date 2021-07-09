 
<section class="w3l-footer">
<div class="map-iframe mt-5">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3547.607592443914!2d88.58795001437328!3d27.23146735285179!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e6a6f3e32a5de9%3A0xbbea4c4e38649e3!2sICAR-National%20Research%20Centre%20For%20Orchids!5e0!3m2!1sen!2sin!4v1620627718763!5m2!1sen!2sin" width="600" height="150" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
  <footer class="footer-28">
    <div class="footer-bg-layer">
      <div class="container py-lg-3">
        <div class="row footer-top-28">
          <div class="col-lg-4 col-md-5 footer-list-28 mt-5">
            <h6 class="footer-title-28">Contact information</h6>
            <ul>
              <li>
                <p><strong>Address</strong> : ICAR-National Research Centre for Orchids <br>Dikiling Road, Pakyong, Sikkim 737106 </p>
              </li>
              <li>
                <p><strong>Phone</strong> : <a href="tel:03592267031">03592267031</a></p>
              </li>
              <li>
                <p><strong>Email</strong> : <a href="mailto:director.nrco@icar.gov.in">director.nrco@icar.gov.in</a></p>
              </li>
            </ul>
           
            <div class="main-social-footer-28 mt-3">
              <ul class="social-icons">
                <li class="facebook">
                  <a href="#link" title="Facebook">
                    <span class="fa fa-facebook" aria-hidden="true"></span>
                  </a>
                </li>
                <li class="twitter">
                  <a href="#link" title="Twitter">
                    <span class="fa fa-twitter" aria-hidden="true"></span>
                  </a>
                </li>
                <li class="dribbble">
                  <a href="#link" title="Youtube">
                    <span class="fa fa-youtube-play" aria-hidden="true"></span>
                  </a>
                </li>
                <li class="google">
                  <a href="#link" title="Instagram">
                    <span class="fa fa-instagram" aria-hidden="true"></span>
                  </a>
                </li>
              </ul>
              <iframe src="https://www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2FNRCOSikkim&width=90&layout=button_count&action=like&size=small&share=false&height=21&appId" width="90" height="21" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share"></iframe>
             </div>
          </div>
          <div class="col-lg-8 col-md-7">
            <div class="row">
              <div class="col-sm-3 col-6 footer-list-28 mt-5">
                <h6 class="footer-title-28">Quick Links</h6>
                <ul>
                  <li><a href="about.html">Publications</a></li>
                  <li><a href="#">About Us</a></li>
                  <li><a href="services.html">Research</a></li>
                  <li><a href="#pricing">Flowers</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-6 footer-list-28 mt-5">
                <h6 class="footer-title-28">Quick Links</h6>
                <ul>
                  <li><a href="contact.html">ICAR</a></li>
                  <li><a href="#signup">IASRI</a></li>
                  <li><a href="#learn">DARE</a></li>
                  <li><a href="#feedback">NHB</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-6 footer-list-28 mt-5">
                <h6 class="footer-title-28">Quick Links</h6>
                <ul>
                  <li><a href="contact.html">NMHS</a></li>
                  <li><a href="#signup">ICAR WEBMAIL</a></li>
                  <li><a href="#learn">IARI</a></li>
                  <li><a href="#feedback">HYPM</a></li>
                </ul>
              </div>
              <div class="col-sm-3 col-6 footer-list-28 mt-5">
                <h6 class="footer-title-28">Quick Links</h6>
                <ul>
                  <li><a href="#URL">KIRAN</a></li>
                  <li><a href="#URL">RTI</a></li>
                  <li><a href="#URL">Care Support</a></li>
                  <li><a href="#URL">ICAR ERP</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
                     <?php
                      $sql="SELECT * FROM updatedate;";
                  $result = mysqli_query($connect,$sql); // fetch data from database
                    if(mysqli_num_rows($result) > 0)  
                    {  
                        while($data = mysqli_fetch_array($result))  
                        {                
                    ?>
                       <p class="copy-footer-28 text-center" style="color:green" >Last Updated: 
                    <?php echo $data['UpdateDate']; ?></h6>  
                      <?php
                        }}?>
                        
            <div align='center'>Hits: <img src='http://www.hit-counts.com/counter.php?t=MTQ1ODQ5NA==' border='0'</div>
      <div class="midd-footer-28 align-center py-lg-4 py-3 mt-5">
        <div class="container">
          <p class="copy-footer-28 text-center"> &copy; Copyright NRC for Orchids. All rights reserved. Designed, developed & maintained by <a
            href="#">AKMU / ARIS Cell, NRCO</a></p>
        </div>
      </div>
    </div>
  </footer>
  <!-- move top -->
  <button data-toggle="tooltip" data-placement="top" title="Directly to top"  onclick="topFunction()" id="movetop" title="Go to top">
    &#10548;
  </button>
  <script>
    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
      scrollFunction()
    };
    function scrollFunction() {
      if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("movetop").style.display = "block";
      } else {
        document.getElementById("movetop").style.display = "none";
      }
    }

    // When the user clicks on the button, scroll to the top of the document
    function topFunction() {
      document.body.scrollTop = 0;
      document.documentElement.scrollTop = 0;
    }
  </script>
  <!-- /move top -->
</section>
<!-- //footer-28 block -->
<!-- disable body scroll which navbar is in active -->
<script>
  $(function () {
    $('.navbar-toggler').click(function () {
      $('body').toggleClass('noscroll');
    })
  });
</script>
<!-- disable body scroll which navbar is in active -->
<!-- Template JavaScript -->
  <script src="assets/js/theme-change.js"></script>
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          480: {
            items: 1,
            nav: false
          },
          667: {
            items: 1,
            nav: true
          },
          1000: {
            items: 1,
            nav: true
          }
        }
      })
    })
  </script>
  <!-- script for tesimonials carousel slider -->
<script>
  $(document).ready(function () {
    $("#owl-demo1").owlCarousel({
      loop: true,
        margin: 20,
        nav: true,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: false,
       
      responsive: {
        0: {
          items: 1,
          nav: true
        },
        736: {
          items: 1,
          nav: true
        },
        1000: {
          items: 2,
          nav: true,
          loop: true
        }
      }
    })
  })
</script>
<!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="assets/js/jquery.waypoints.min.js"></script>
  <script src="assets/js/jquery.countup.js"></script>
  <script>
    (function() {
        var $gallery = new SimpleLightbox('.gallery a', {});
    })();
</script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!-- video popup -->
<script src="assets/js/jquery.magnific-popup.min.js"></script>
<script>
  $(document).ready(function () {
    $('.popup-with-zoom-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-zoom-in'
    });

    $('.popup-with-move-anim').magnificPopup({
      type: 'inline',

      fixedContentPos: false,
      fixedBgPos: true,

      overflowY: 'auto',

      closeBtnInside: true,
      preloader: false,

      midClick: true,
      removalDelay: 300,
      mainClass: 'my-mfp-slide-bottom'
    });
  });
</script>
<!-- //Right click -->
<script>
  $(document).ready(function(){
   
    //  if (document.addEventListener) {
    //      document.addEventListener('contextmenu', function(e) {
    //          alert("Right click disabled !"); //here you draw your own menu
    //          e.preventDefault();
    //      }, false);
    //  } else {
    //      document.attachEvent('oncontextmenu', function() {
    //        alert("You've tried to open context menu");
    //          window.event.returnValue = false;
    //      });
    //  }
 
   $(window).scroll(function(){  
      if ($(this).scrollTop() > 300) {
         $('#site-header').addClass("fixed-top");
         // add padding top to show content behind navbar
         $('body').css('padding-top', $('.navbar').outerHeight() + 'px');
       }else{
         $('#site-header').removeClass("fixed-top");
          // remove padding top from body
         $('body').css('padding-top', '0');
       }   
   });
  // end if
  var resize = new Array('.resizable');
  resize = resize.join(',');
  
  //resets the font size when "reset" is clicked
  var resetFont = $(resize).css('font-size');
    $(".reset").click(function(){
      $(resize).css('font-size', resetFont);
    });
  
  //increases font size when "+" is clicked
  $(".increase").click(function(){
    var originalFontSize = $(resize).css('font-size');
    var originalFontNumber = parseFloat(originalFontSize, 10);
    var newFontSize = originalFontNumber*1.08;
    $(resize).css('font-size', newFontSize);
    $(resize).css("line-height", ($('#Div1').height()));

    return false;
    
  });
  
  //decrease font size when "-" is clicked
  
  $(".decrease").click(function(){
    var originalFontSize = $(resize).css('font-size');
    var originalFontNumber = parseFloat(originalFontSize, 10);
    var newFontSize = originalFontNumber*0.8;
    $(resize).css('font-size', newFontSize);
    return false;
  });
  
});
</script>
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->
   
  <script type="text/javascript">
    function googleTranslateElementInit() {
      new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.FloatPosition.TOP_LEFT}, 'google_translate_element');
    }

	 

	jQuery('.lang-select').click(function() {
	  var theLang = jQuery(this).attr('data-lang');
	  jQuery('.goog-te-combo').val(theLang);
	  window.location = jQuery(this).attr('href');
	  location.reload();
	});
</script>
 
<script type="text/javascript" src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
</body>
</html>
