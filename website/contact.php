<?php
session_start();
$page = "contact";
$title = "Get in touch for a quote or tell us about your next project | Pure Marketing";
$description = "Pure Marketing is a digital marketing agency born and raised in the heart of Birmingham. We specialise in a range of services including SEO, PPC and Social Media.";
include('includes/header.php');
?>
    <!--start banner Area-->
    <section class="banner-area parallax-bg" data-stellar-background-ratio="0.001">
        <div class="container">
            <div class="banner-content">
                <h1>Contact Us</h1>
                <p>You can get in touch with us for a quote, to ask a question or tell us about your project via phone or email. You can always pop in for a cup of tea and a quick chat to find out more about how we can help you too.</p>
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
                            <li><a href="https://twitter.com/puremarketing_"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/puremarketing_/"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-7">
                    <form class="form-area-right" method="POST" action="process">
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
                        <div class="col-sm-12">
                            <input type="text" name="subject" class="form-control" placeholder="Subject">
                        </div>
                        <div class="col-sm-12">
                            <input type="text" name="message" class="form-control" placeholder="Message">
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