<?php include 'parisher/header.php';?>

        <!-- Start Breadcrump Area  -->
        <div class="rn-page-title-area pt--120 pb--190 bg_image bg_image--17" data-black-overlay="5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="rn-page-title text-center pt--100">
                            <h2 class="title theme-gradient">Connect with the bees at Freemind!</h2>
                            <p>We Ideate. We Create. We Deliver.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrump Area  -->
        <!-- Start Page Wrapper  -->
        <main class="page-wrapper">

            <!-- Start Contact Address Area  -->
            <div class="rn-contact-address-area rn-section-gap bg_color--5">
                <div class="container">
                    <div class="row mt_dec--40">
                        <!-- Start Single Address  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                            <div class="rn-address">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Contact With Phone Number</h4>
                                    <p><a href="tel:+7042560076">7042560076</a></p>
                                   
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->

                        <!-- Start Single Address  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                            <div class="rn-address">
                                <div class="icon">
                                    <i class="fas fa-envelope"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Email Address</h4>
                                    <p><a href="mailto:admin@gmail.com">admin@gmail.com</a></p>
                                    <p><a href="mailto:example@gmail.com">example@gmail.com</a></p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->

                        <!-- Start Single Address  -->
                        <div class="col-lg-4 col-md-6 col-sm-6 col-12 mt--40">
                            <div class="rn-address">
                                <div class="icon">
                                    <i class="fas fa-map-marker-alt"></i>
                                </div>
                                <div class="inner">
                                    <h4 class="title">Location</h4>
                                    <p>5678 Bangla Main Road, cities 580 <br /> GBnagla, example 54786</p>
                                </div>
                            </div>
                        </div>
                        <!-- End Single Address  -->

                    </div>
                </div>
            </div>
            <!-- End Contact Address Area  -->

            <!-- Start Contact Area  -->
            <div class="rn-contact-area rn-section-gap bg_color--1">
                <div class="contact-form--1">
                    <div class="container">
                        <div class="row row--35 align-items-start">
                            <div class="col-lg-6 order-2 order-lg-1">
                                <div class="section-title text-left mb--50 mb_sm--30 mb_md--30">
                                    <h2 class="title">Contact Us.</h2>
                                    <p class="description">We are just one tap away!<br>For any sort of queries and inquiries, you can connect with us.
                                        <a href="tel:+7042560076">7042560076</a> or email:
                                        <a href="mailto:admin@example.com"> admin@example.com</a> </p>
                                </div>
                                <div class="form-wrapper">








                                    <form id="contactform" name="contactform" action="" method="post">
                                        <input name="name" type="text" placeholder="Your Name *" />
                                        <input name="phone" type="number" placeholder="Your Name *" />
                                        <input name="email" type="email" placeholder="Your email *">
                                        <input name="subject" type="text" placeholder="Write a Subject">
                                        <textarea name="message" placeholder="Your Message"></textarea>
                                        <button type="submit" name="save" class="rn-button-style--2 btn_solid">
                                            <span>Send message</span>
                                        </button>
                                    </form>
                                   
                                   
                                   
                                   
                                   
                                   
                                    <div class="form-output">
                                        <p class="form-messege-active form-messege"></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 order-1 order-lg-2">
                                <div class="thumbnail mb_md--40 mb_sm--40">
                                    <img src="assets/images/about/about-6.jpg" alt="trydo" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Contact Area  -->

            <!-- Start Brand Area -->
            <div class="rn-brand-area brand-separation rn-section-gap">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="brand-style-2">
                                <li>
                                    <img src="assets/images/brand/brand-01.png" alt="Logo Images" />
                                </li>
                                <li>
                                    <img src="assets/images/brand/brand-02.png" alt="Logo Images" />
                                </li>
                                <li>
                                    <img src="assets/images/brand/brand-03.png" alt="Logo Images" />
                                </li>
                                <li>
                                    <img src="assets/images/brand/brand-04.png" alt="Logo Images" />
                                </li>
                                <li>
                                    <img src="assets/images/brand/brand-05.png" alt="Logo Images" />
                                </li>
                                <li>
                                    <img src="assets/images/brand/brand-06.png" alt="Logo Images" />
                                </li>
                                <li>
                                    <img src="assets/images/brand/brand-02.png" alt="Logo Images" />
                                </li>
                                <li>
                                    <img src="assets/images/brand/brand-03.png" alt="Logo Images" />
                                </li>
                                <li>
                                    <img src="assets/images/brand/brand-04.png" alt="Logo Images" />
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Brand Area -->
        </main>
        <!-- End Page Wrapper  -->
        <?php include 'parisher/footer.php';?>
        <script>
            jQuery('#contactform').on('submit',function(e){
             jQuery.ajax({
            url: "process.php",
		    type: "POST",
               data:jQuery('#contactform').serialize(),
               success:function(result){
                 
                 swal({
  title: "Good job!",
  text: result,
  icon: "success",
}); 
               }
          });
          e.preventDefault();
      })
        </script>