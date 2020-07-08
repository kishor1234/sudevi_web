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
                    Garments              
                </h1>   
                <!--<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#"> Garments</a></p>-->
            </div>                                          
        </div>
    </div>
</section>
<!-- End banner Area --> 
<!-- Start blog-posts Area -->
<section class="blog-posts-area section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 post-list blog-post-list">
                <div class="single-post">
                    <a href="#">
                        <h1 class="mt-0">
                            Garments
                        </h1>
                    </a>
                    <div class="content-wrap">

                        <p class="text-justify">We take pride in the production of our own fabrics and hence we ensure excellent control over the quality of the garments we produce. Our focus lies primarily on knitted garments, since knitted garments are produced by us inhouse.&nbsp;</p>

                        <ul class="unordered-list">
                            <li><span class="font-weight-bold">Kid&rsquo;s wear</span> &ndash; Undergarments, night wear, sports wear and casual wear which includes vests, dresses, shorts, hoodies, track pants, leggings, t &ndash; shirts, underwear etc.&nbsp;</li>
                            <li><span class="font-weight-bold">Women&rsquo;s wear </span> &ndash; Undergarments, night wear, sports wear and casual wear which includes tops, dresses, shorts, hoodies, track pants, leggings, t &ndash; shirts, panties etc.&nbsp;</li>
                            <li><span class="font-weight-bold">Men&rsquo;s wear  </span>- Undergarments, night wear, sports wear and casual wear which includes vests, dresses, shorts, hoodies, track pants, leggings, t &ndash; shirts, underwear, boxers etc.</li>
                        </ul>
                        
                    </div>
                </div>																		
            </div>
            <div class="col-lg-4 sidebar">
                <?php
                include 'view/layout/manufacturingsidebar.php';
                ?>

            </div>
        </div>
    </div>	
</section>
<!-- End blog-posts Area -->


<?php
include 'view/layout/footer.php';
?>

