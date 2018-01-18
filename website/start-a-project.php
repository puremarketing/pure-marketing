<?php
session_start();
$page = "contact";
$title = "Pure Marketing | SEO, PPC &amp; Social Media Services Birmingham";
$description = "Pure Marketing a digital marketing Agency based in Birmingham which specialise in SEO, PPC &amp; Social Media Marketing.";
include('includes/header.php');
?>
    <!--start banner Area-->
    <section class="banner-area-project parallax-bg" data-stellar-background-ratio="0.001">
        <div class="container">
            <div class="banner-content">
                <h1>Start a Project</h1>
                <p>Tell us about you project and what you are looking to achieve. We will then be in touch to begin the process of creating a digital strategy that achieves your objectives and goals.</p>
            </div>
        </div>
    </section>
    <!--End banner area-->
    <section class="inner-contact">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-5 plr0 bgcontact">
                    <div class="short-contact">
                        <div class="short-contact-box2">
                            <h4>Address</h4>
                            <p>3 Brindley Place<br> Birmingham<br> B1 2JB</p>
                        </div>
                        <div class="short-contact-box2">
                            <h4>Call Us</h4>
                            <p>0121 270 5828</p>
                        </div>
                        <div class="short-contact-box2">
                            <h4>Email</h4>
                            <p>info@pure-marketing.co.uk</p>
                        </div>
                        <ul class="list-inline about-social m50">
                            <li><a target="_blank" href="https://twitter.com/puremarketing_"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.instagram.com/puremarketing_/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-7">
                    <form class="form-area-right" action="process-project" method="POST">
                        <p>
                            <?php
                               if(isset($_SESSION['msg'])){
                                   echo($_SESSION['msg']);
                                   unset($_SESSION['msg']);
                               }
                            ?>
                        </p>
                        <div class="col-sm-6">
                            <input type="text" name="name" class="form-control" placeholder="Name">
                        </div>
                        <div class="col-sm-6">
                            <input type="email" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="phone" class="form-control" placeholder="Telephone">
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="company" class="form-control" placeholder="Company Name">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="message" class="form-control" placeholder="Tell us about your project...">
                        </div>
                        <div class="col-sm-12">
                           <input type="submit" name="send" class="btn sent-msg" value="Send Message">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--map
    <section class="map-area">
        <div class="row mp">
            <div id="googleMap" class="google-maps"></div>
        </div>
    </section>
    map-->
<?php include('includes/footer.php');?>