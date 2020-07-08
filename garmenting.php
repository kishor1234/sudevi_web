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
                    Garmenting              
                </h1>   
                <!--<p class="text-white link-nav"><a href="index.php">Home </a>  <span class="lnr lnr-arrow-right"></span>  <a href="#">Garmenting</a></p>-->
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
                            Garmenting
                        </h1>
                    </a>
                    <div class="content-wrap">
                        <p>Our state of the art garment manufacturing unit is made to provide us the capability of producing fabrics with the right specifications as deemed appropriate by our clientele.</p>

                        <p>For this, we have equipped our facilities with Cutting, Stitching and Finishing equipment that provide results of great quality.</p>


                    </div>

                </div>																		
            </div>
            <div class="col-lg-4 sidebar">
                <?php
                include 'view/layout/manufacturingsidebar.php';
                ?>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="section-top-border">
                    <h3 class="mb-30">Cutting</h3>
                    <div class="row">
                        <div class="col-lg-8">
                            <ul class="unordered-list pb-10">
                                <li>
                                    <p>The cutting equipment in our facilities consist of two tables with the capability to cut fabrics up-to a width of 84 inches.&nbsp;</p>
                                </li>
                                <li>
                                    <p>We have ensured that we procured our cutting machines from EastmanCuts, Canada, who provide the best cutting machines that deliver the best results.&nbsp;</p>
                                </li>
                                <li>
                                    <p>We have also made pattern sharing an easier task, by having our facilities set up a digitizer interfaced with a WinDa Pattern maker.&nbsp;</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <img class="img-fluid pb-10" src="img/row/7.jpg" alt="">
                        </div>
                    </div>

                </div>
                <div class="section-top-border">
                    <h3 class="mb-30 text-right">Stitching</h3>
                    <div class="row">
                        <div class="col-lg-4">
                            <img class="img-fluid pb-10" src="img/row/3.jpg" alt="">
                        </div>
                        <div class="col-lg-8">
                            <ul class="unordered-list pb-10">
                                <li>
                                    <p>We keep in mind that quality is our prime focus. Therefore, to ensure the best product for our clients, all our stitching machines are procured from Pegasus and Kansai (Japan) and Brother (India) .</p>
                                </li>
                                <li>
                                    <p>Our machines have been set-up to handle the most complex knitted garments and basic woven garment manufacturing. With our 70 high speed machines we are able to stitch approximately 4,000 garments / day. 4</p>
                                </li>
                                <li>
                                    <p>We have also felt the need to add certain value added machines such as neck-rib attaching machines for t-shirts, outer elastic attaching machines for undergarments and small head machines for baby apparel, since we put a strong emphasis on delivering products of high quality.&nbsp;</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--                <div class="section-top-border">
                                    <h3 class="mb-30">List of Machines:</h3>
                                    <div class="row">
                                        <div class="col-lg-8">
                                            <table class="table table-bordered table-responsive-lg">
                                                <tbody>
                                                    <tr>
                                                        <td>
                                                            <p><strong>Type</strong></p>
                                                        </td>
                                                        <td>
                                                            <p><strong>Quantity</strong></p>
                                                        </td>
                                                        <td>
                                                            <p><strong>Make</strong></p>
                                                        </td>
                                                        <td>
                                                            <p><strong>Model No</strong></p>
                                                        </td>
                                                        <td>
                                                            <p><strong>Description</strong></p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>SNLS</p>
                                                        </td>
                                                        <td>
                                                            <p>18</p>
                                                        </td>
                                                        <td>
                                                            <p>Brother</p>
                                                        </td>
                                                        <td>
                                                            <p>S-7250A-503</p>
                                                        </td>
                                                        <td>
                                                            <p>Direct Drive Single Needle Lockstitch Machine with UTT Complete Set with stand table &amp; Motor</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>SNLS EDGE Cutter</p>
                                                        </td>
                                                        <td>
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>Brother</p>
                                                        </td>
                                                        <td>
                                                            <p>SL-777B-31-64</p>
                                                        </td>
                                                        <td>
                                                            <p>Single Needle Lockstitch Machine with vertical Edge Cutting &amp; Power Saving Motor complete Set with stand table &amp; Motor</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Zig Zag</p>
                                                        </td>
                                                        <td>
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>Brother</p>
                                                        </td>
                                                        <td>
                                                            <p>Z-8560A-431-018</p>
                                                        </td>
                                                        <td>
                                                            <p>Direct Drive Single Needle Lockstitch Zigzag Machine with UTT Complete Set with stand table &amp; Motor</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Bartack</p>
                                                        </td>
                                                        <td>
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>Brother</p>
                                                        </td>
                                                        <td>
                                                            <p>KE-430HS-03</p>
                                                        </td>
                                                        <td>
                                                            <p>Electronic Lockstitch Bartacking Machine complete Set with stand table &amp; Motor</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Button Hole</p>
                                                        </td>
                                                        <td>
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>Brother</p>
                                                        </td>
                                                        <td>
                                                            <p>HE-800C-2</p>
                                                        </td>
                                                        <td>
                                                            <p>Electronic Lockstitch Button Hole Sewing Machine Complete Set with stand table &amp; Motor</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Button Stitch</p>
                                                        </td>
                                                        <td>
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>Brother</p>
                                                        </td>
                                                        <td>
                                                            <p>BE-438-HX-03-S</p>
                                                        </td>
                                                        <td>
                                                            <p>Electronic Lockstitch Button Attaching Sewing Machine Complete Set with stand table &amp; Motor</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Multi Needle M/c</p>
                                                        </td>
                                                        <td>
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>Kansai</p>
                                                        </td>
                                                        <td>
                                                            <p>DFB-1412P (1/8&quot;)</p>
                                                        </td>
                                                        <td>
                                                            <p>12 Needle Flatbed chainstitch Machine complete Set with stand table &amp; Motor</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Overlock 4/T</p>
                                                        </td>
                                                        <td>
                                                            <p>12</p>
                                                        </td>
                                                        <td>
                                                            <p>Pegasus</p>
                                                        </td>
                                                        <td>
                                                            <p>M952-52H-2X4/D222</p>
                                                        </td>
                                                        <td>
                                                            <p>2 needle, 4 thread overlock machine with pneumatic chain cutter, lint collector &amp; presser foot lifter complete set with standard accessories</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Overlock 4/T with tape cutter</p>
                                                        </td>
                                                        <td>
                                                            <p>2</p>
                                                        </td>
                                                        <td>
                                                            <p>Pegasus</p>
                                                        </td>
                                                        <td>
                                                            <p>M952-52H-2X4/ATF/DD3A</p>
                                                        </td>
                                                        <td>
                                                            <p>2 needle, 4 thread overlock machine with chain cutter, lint collector,manul back latcher, tape cutter &amp; presser foot lifter complete set with standard accessories</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Overlock 6 Thread</p>
                                                        </td>
                                                        <td>
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>Pegasus</p>
                                                        </td>
                                                        <td>
                                                            <p>M932-355-3X2X4/D222</p>
                                                        </td>
                                                        <td>
                                                            <p>3 needle, 6 thread overlock machine with pneumatic chain cutter, lint collector &amp; presser foot lifter complete set with standard accessories</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Neck Rib attaching</p>
                                                        </td>
                                                        <td>
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>Pegasus</p>
                                                        </td>
                                                        <td>
                                                            <p>EX5114-03/333N-2X4/PT</p>
                                                        </td>
                                                        <td>
                                                            <p>2 Needle cylinder bed overlock machine with chain cutter, lint collector, pressure footlifter, pneumatic fabric tension roller ( FRE3P) and DD motor</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Flatlock Flat Bed</p>
                                                        </td>
                                                        <td>
                                                            <p>5</p>
                                                        </td>
                                                        <td>
                                                            <p>Pegasus</p>
                                                        </td>
                                                        <td>
                                                            <p>W562PC-01GX356BS/D322</p>
                                                        </td>
                                                        <td>
                                                            <p>3 needle, 5 thread flatbed interlock machine with complete set DD motor</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Flatlock Cylinder Bed</p>
                                                        </td>
                                                        <td>
                                                            <p>5</p>
                                                        </td>
                                                        <td>
                                                            <p>Pegasus</p>
                                                        </td>
                                                        <td>
                                                            <p>W662PCH-35BX356CS/FT9C/UT3R/D332</p>
                                                        </td>
                                                        <td>
                                                            <p>3 needle, 5 thread cylindrical bed flatlock machine with left hand fabric trimmer, top and bottom thread trimmer complete set with DD motor.</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Flatlock Small Cylinder bed</p>
                                                        </td>
                                                        <td>
                                                            <p>2</p>
                                                        </td>
                                                        <td>
                                                            <p>Pegasus</p>
                                                        </td>
                                                        <td>
                                                            <p>W264HP-01GBX356/UT326/PT</p>
                                                        </td>
                                                        <td>
                                                            <p>3 needle, 5 thread small cylindrical bed flatlock machine with left hand fabric rimmer, top and bottom thread trimmer complete set with DD motor.</p>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            <p>Flatlock Cylinder Bed for Outer Elastic</p>
                                                        </td>
                                                        <td>
                                                            <p>1</p>
                                                        </td>
                                                        <td>
                                                            <p>Pegasus</p>
                                                        </td>
                                                        <td>
                                                            <p>W662PCH-33AX356CS/FT9A/RP9A/UT3R/D332</p>
                                                        </td>
                                                        <td>
                                                            <p>3 needle, 5 thread cylindrical bed flatlock machine with right hand fabric trimmer, plain roller, under bed trimmer and DD motor.</p>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="col-lg-4">
                                            <img class="img-fluid pb-10" src="img/row/3.jpg" alt="">
                                        </div>
                                    </div>
                                </div>-->
                <div class="section-top-border">
                    <h3 class="mb-30 ">Finishing</h3>
                    <div class="row">
                        <div class="col-lg-8">
                            <ul class="unordered-list pb-10">
                                <li>
                                    <p>Delivering on our promises of providing high quality products to our clientele is our top priority. Our unit is hence equipped with checking tables and full size vacuum press tables capable of pressing woven and knitted garments.&nbsp;</p>
                                </li>
                                <li>
                                    <p>To comply with our own standards, we ensure that every piece of fabric and all the garments are inspected, pressed and packed after a rigorous round of lab tests.</p>
                                </li>
                                <li>
                                    <p>The lab tests are followed by a manual check of each garment to identify any minor discrepancies in the manufacturing process.</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-4">
                            <img class="img-fluid pb-10" src="img/row/5.jpg" alt="">
                        </div>

                    </div>
                </div>
                <center>
                    <a href="Sudevi brochure.pdf" class="primary-btn header-btn text-uppercase">View Machinery</a>
                </center>

            </div>
        </div>
    </div>	
</section>
<!-- End blog-posts Area -->


<?php
include 'view/layout/footer.php';
?>
