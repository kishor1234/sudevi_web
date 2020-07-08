<?php
include 'view/layout/header.php';
?>

<!-- start banner Area -->
<section class="banner-area relative" id="home">	
    <div class="overlay overlay-bg"></div>
    <div class="container">				
        <div class="row d-flex align-items-center justify-content-center">
            <div class="about-content col-lg-12">
                <h1 class="text-white">
                    Contact Us				
                </h1>	
                <!--<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Contact Us</a></p>-->
            </div>	
        </div>
    </div>
</section>
<!-- End banner Area -->				  
<style>
    .mapouter {
        position: relative;
        text-align: right;
        height: 500px;
        width: 600px;
    }
    .gmap_canvas {
        overflow: hidden;
        background: none !important;
        height: 500px;
        width: 600px;
    }

</style>
<!-- Start contact-page Area -->
<section class="contact-page-area section-gap">
    <div class="container">
        <div class="row">
            <div class="map-wrap" style="width:100%; height: 445px;" id="map">
                <iframe
                    style="width:100%; height: 445px;"
                    id="gmap_canvas"
                    src="https://maps.google.com/maps?q=Dyeing%20Factory%2C%20Sudevi%20Chemicals%20%20Plot%20No%20A-42%2C%20Near%20Vico%20Naka%2C%20MIDC%20Phase%201%2C%20%20Dombivli%20East%20421203.%20&t=&z=13&ie=UTF8&iwloc=&output=embed"
                    frameborder="0"
                    scrolling="no"
                    marginheight="0"
                    marginwidth="0"
                    >

                </iframe>

            </div>
            <div class="col-lg-3 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Dyeing Factory, Sudevi Chemicals</h5>
                        <p>Plot No A-42,<br>
                            Near Vico Naka,<br>
                            MIDC Phase 1, <br>
                            Dombivli East 421203. <br>
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Landline – +91 - 0251-2440660</h5>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>ppc@sudevi.in<br>rja@sudevi.in</h5>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>														
            </div>
            <div class="col-lg-3 d-flex flex-column address-wrap">
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-home"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Garmenting Factory, NJA Garments Pvt. Ltd.</h5>
                        <p>Plot No B-40,<br>
                            Near Vico Naka,<br>
                            MIDC Phase 1, <br>
                            Dombivli East 421203. <br>
                        </p>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-phone-handset"></span>
                    </div>
                    <div class="contact-details">
                        <h5>Phone - +919879532383</h5>
                    </div>
                </div>
                <div class="single-contact-address d-flex flex-row">
                    <div class="icon">
                        <span class="lnr lnr-envelope"></span>
                    </div>
                    <div class="contact-details">
                        <h5>rahul.agrawal@sudevi.in</h5>
                        <h5>rja@sudevi.in</h5>
                        <p>Send us your query anytime!</p>
                    </div>
                </div>														
            </div>
            <div class="col-lg-6">
                <form class="form-area " id="myForm" action="mail.php" method="post" class="contact-form text-right">
                    <div class="row">	
                        <div class="col-lg-6 form-group">
                            <input name="name" placeholder="Enter your name" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your name'" class="common-input mb-20 form-control" required="" type="text">

                            <input name="email" placeholder="Enter email address" pattern="[A-Za-z0-9._%+-]+@[A-Za-z0-9.-]+\.[A-Za-z]{1,63}$" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter email address'" class="common-input mb-20 form-control" required="" type="email">

                            <input name="subject" placeholder="Enter your subject" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter your subject'" class="common-input mb-20 form-control" required="" type="text">
                            <div class="mt-20 alert-msg" style="text-align: left;"></div>
                        </div>
                        <div class="col-lg-6 form-group">
                            <textarea class="common-textarea form-control" name="message" placeholder="Messege" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
                            <button class="genric-btn primary circle mt-30" style="float: right;">Send Message</button>								
                        </div>
                    </div>
                </form>	
            </div>
        </div>
    </div>	
</section>
<!-- End contact-page Area -->
<?php
include 'view/layout/footer.php';
?>

