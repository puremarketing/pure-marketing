<?php
session_start();
$title = "Pure Marketing | SEO, PPC &amp; Social Media Services Birmingham";
$description = "Pure Marketing a digital marketing Agency based in Birmingham which specialise in SEO, PPC &amp; Social Media Marketing.";
include('includes/header.php');
?>
    <!--start banner Area-->
    <section class="banner-area-project parallax-bg" data-stellar-background-ratio="0.001">
        <div class="container">
            <div class="banner-content">
                <h1>Free Marketing Audit</h1>
                <p>Ready to unleash the digital power behind your business? <br>Together, let’s review your goals, current strategy and a plan for growth – <b>completely free</b>.</p>
            </div>
        </div>
    </section>
    <!--End banner area-->
    <section class="inner-contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6 plr0 bgcontact">
                    <div class="short-contact">
                        <div class="short-contact-box2">
                            <p>Your review will be compiled by a member of our expert digital team and will provide you with analysis, insights and recommendations on how increase your online visibility and increasing ROI.</p><br>
                            <p>An honest professional review on all the main areas:</p>
                        </div>
                        <div class="feature-icon">
                        <div class="media">
                            <div class="media-left">
                                <i class="ti-search"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">SEO</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="ti-mouse-alt"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">PPC</h3>
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-left">
                                <i class="ti-comments"></i>
                            </div>
                            <div class="media-body">
                                <h3 class="media-heading">Social</h3>
                            </div>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <form class="form-area-right" method="post" action="process-audit">
                        <h3>Get Your Free Review</h3>
                         <p>
                            <?php
                               if(isset($_SESSION['msg'])){
                                   echo($_SESSION['msg']);
                                   unset($_SESSION['msg']);
                               }
                            ?>
                        </p>
                        <div class="col-sm-12">
                            <input type="text" name="name" class="form-control" placeholder="Name" required>
                        </div>
                        <div class="col-sm-12">
                            <input type="email" name="email" class="form-control" placeholder="Email" required>
                        </div>
                        <div class="col-sm-12">
                            <input type="phone" name="phone" class="form-control" placeholder="Phone">
                        </div>
                        <div class="col-sm-12">
                            <input type="website" name="website" class="form-control" placeholder="Website" required>
                        </div>
                        <div class="col-sm-12">
                            <input type="submit" name="send" class="btn sent-msg" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--Start action area-->
    <section class="about-action-area">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1 text-center action-text">
                    <h2>It’s time to help your business get found online.</h2>
                    <a href="/start-a-project" class="btn-action">Start Your Project</a>
                </div>
            </div>
        </div>
    </section>
    <!--end action area-->
<?php include('includes/footer.php');?>