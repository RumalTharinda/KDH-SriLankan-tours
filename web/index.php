<?php

// Check if BASE_PATH is defined, if not, define it
if (!defined('BASE_PATH')) {
    define('BASE_PATH', dirname(__DIR__));
}


include 'config.php';
include BASE_PATH . '/system/function.php';

?>


<!DOCTYPE html>
<html>

    <head>
        <!-- Basic -->
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <!-- Mobile Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <!-- Site Metas -->
        <meta name="keywords" content="" />
        <meta name="description" content="" />
        <meta name="author" content="" />

        <title>KDH Sri Lankan Tours</title>
        <link rel="icon" type="image/x-icon" href="<?= SYSTEM_PATH ?>images\icon1.jpg">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

        <!--owl slider stylesheet -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />

        <!-- bootstrap core css -->
        <link rel="stylesheet" type="text/css" href="<?= SYSTEM_PATH ?>css/bootstrap.css" />
        <!-- fonts awesome style -->
        <link href="<?= SYSTEM_PATH ?>css/font-awesome.min.css" rel="stylesheet" />
        <!-- fonts style -->
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700|Poppins:400,500,700&display=swap" rel="stylesheet" />

        <!-- Custom styles for this template -->
        <link href="<?= SYSTEM_PATH ?>css/style.css" rel="stylesheet" />
        <!-- responsive style -->
        <link href="<?= SYSTEM_PATH ?>css/responsive.css" rel="stylesheet" />
    </head>

    <body>
        <div class="hero_area">
            <!-- header section strats -->
            <header class="header_section">
                <div class="contact_nav_container">
                    <div class="container">
                        <div class="contact_nav">
                            <a href="">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                <span>
                                    Address : No. 15, Galle Road, Colombo 03, Sri Lanka
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <span>
                                    Email : kdh.srilankan.tours@gmail.com
                                </span>
                            </a>
                            <a href="">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <span>
                                    Phone Call : +011 6783031
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <nav class="navbar navbar-expand-lg custom_nav-container">
                        <div class="custom_menu-btn">
                            <button onclick="openNav()">
                                <span class="s-1"> </span>
                                <span class="s-2"> </span>
                                <span class="s-3"> </span>
                            </button>
                        </div>
                        <div id="myNav" class="overlay">
                            <div class="menu_btn-style ">
                                <button onclick="closeNav()">
                                    <span class="s-1"> </span>
                                    <span class="s-2"> </span>
                                    <span class="s-3"> </span>
                                </button>
                            </div>
                            <div class="overlay-content">
                                <a class="active" href="<?= SYSTEM_PATH ?>index.php"> Home <span class="sr-only">(current)</span></a>
                                <a class="" href="<?= SYSTEM_PATH ?>about.php"> About</a>
                                <a class="" href="<?= SYSTEM_PATH ?>why_us.php"> Why Us </a>
                                <a class="" href="<?= SYSTEM_PATH ?>team.php"> Our Team</a>

                                <a class="" href="<?= SYSTEM_PATH ?>contact.php"> Contact Us</a>
                            </div>
                        </div>
                        <a class="navbar-brand" href="<?= SYSTEM_PATH ?>index.php">
                            <span>
                                KDH Sri Lankan Tours
                            </span>
                        </a>
                        <div class="user_option">
                            <a href="">
                                <span>

                                </span>

                            </a>
                            <form class="form-inline">
                                <button class="btn  nav_search-btn" type="submit">

                                </button>
                            </form>
                        </div>
                    </nav>
                </div>
            </header>
            <!-- end header section -->
            <!-- slider section -->
            <section class="slider_section position-relative">
                <div id="customCarousel1" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                        <li data-target="#customCarousel1" data-slide-to="1"></li>
                        <li data-target="#customCarousel1" data-slide-to="2"></li>
                        <li data-target="#customCarousel1" data-slide-to="3"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <div class="box">
                                <div class="baby_detail">
                                    <div class="baby_text">
                                        <h2>
                                            KDH <br />
                                            Sri Lankan Tours
                                        </h2>
                                    </div>
                                    <a href="why_us.php">
                                        Read More
                                    </a>
                                </div>
                                <div class="care_detail">
                                    <a href="contact.php">
                                        Contact Us
                                    </a>
                                    <div class="care_text">
                                        <h2>
                                            We will take <br />
                                            Care of <br />
                                            your travels
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="baby_detail">
                                    <div class="baby_text">
                                        <h2>
                                            Why <br />
                                            Choose US
                                        </h2>
                                    </div>
                                    <a href="why_us.php">
                                        Read More
                                    </a>
                                </div>
                                <div class="care_detail">
                                    <a href="contact_us.php">
                                        Contact Us
                                    </a>
                                    <div class="care_text">
                                        <h2>
                                            We will take <br />
                                            Care of <br />
                                            your travels
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="baby_detail">
                                    <div class="baby_text">
                                        <h2>
                                            KDH <br />
                                            Sri Lankan Tours
                                        </h2>
                                    </div>
                                    <a href="why_us.php">
                                        Read More
                                    </a>
                                </div>
                                <div class="care_detail">
                                    <a href="">
                                        Contact Us
                                    </a>
                                    <div class="care_text">
                                        <h2>
                                            We will take <br />
                                            Care of <br />
                                            your Baby
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="box">
                                <div class="baby_detail">
                                    <div class="baby_text">
                                        <h2>
                                            baby <br />
                                            Care center
                                        </h2>
                                    </div>
                                    <a href="">
                                        Read More
                                    </a>
                                </div>
                                <div class="care_detail">
                                    <a href="">
                                        Contact Us
                                    </a>
                                    <div class="care_text">
                                        <h2>
                                            We will take <br />
                                            Care of <br />
                                            your Baby
                                        </h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- end slider section -->
        </div>

        <!-- service section -->

        <section class="service_section ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/" alt="" />
                            </div>
                            <div class="detail-box">
                                <h4>
                                    Sri Lanka
                                </h4>
                                <p>
                                    Pearl of the Indian Ocean
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box ">
                            <div class="img-box">
                                <img src="images/" alt="" />
                            </div>
                            <div class="detail-box">
                                <h4>
                                    Breathtaking Beaches
                                </h4>
                                <p>
                                    Sri Lanka boasts some of the most beautiful beaches in the world
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/" alt="" />
                            </div>
                            <div class="detail-box">
                                <h4>
                                    Cultural Heritage
                                </h4>
                                <p>
                                    Home to eight UNESCO World Heritage Sites, Sri Lanka's cultural heritage is both diverse and profound.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="box">
                            <div class="img-box">
                                <img src="images/" alt="" />
                            </div>
                            <div class="detail-box">
                                <h4>
                                    Wildlife and Nature
                                </h4>
                                <p>
                                    Sri Lanka is a biodiversity hotspot, home to a wide variety of flora and fauna. 
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end service section -->

        <!-- about section -->

        <section class="about_section layout_padding">
            <div class="container-fluid">
                <div class="box">
                    <div class="img-box">
                        <img src="images/about.jpg" alt="" />
                    </div>
                    <div class="detail-box">
                        <h2>
                            About Us
                        </h2>
                        <p>          
                            Welcome to KDH Sri Lankan Tours, your gateway to the enchanting island of Sri Lanka. Established in 2010, KDH Sri Lankan Tours was born out of a passion for travel and a love for the rich culture, history, and natural beauty of Sri Lanka. Our mission is to share the wonders of this incredible island with the world, creating unforgettable travel experiences for our guests. 
                        </p>
                        <a href="about.php">
                            <span>
                                Read More
                            </span>
                            <hr />
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <!-- end about section -->

        <!-- we have section -->

        <section class="wehave_section">
            <div class="container-fluid">
                <div class="box">
                    <div class="detail-box">
                        <h2>
                            Why chose<br />
                            US.
                        </h2>
                        <p>
                            At KDH Sri Lankan Tours, we offer a wide range of vehicles to suit every traveler's needs. From compact cars to spacious vans and luxury vehicles, we have the perfect ride for your journey across Sri Lanka.
                        </p>
                        <a href="why_us.php">
                            <span>
                                Read More
                            </span>
                            <hr />
                        </a>
                    </div>
                    <div class="img-box">
                        <img src="images/why.jpg" alt="" />
                    </div>
                </div>
            </div>
        </section>

        <!-- end we have section -->



        <!-- team section -->

        <section class="team_section">
            <div class="container-fluid">
                <div class="heading_container">
                    <h2>
                        Our Vehicles
                    </h2>
                    <p>
                        At KDH Sri Lankan Tours, we offer a wide range of vehicles to suit every traveler's needs. 
                    </p>
                </div>
                <div class="carousel-wrap ">
                    <div class="owl-carousel team_carousel">
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/v1.jpg" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        Our Vehicles
                                    </h6>
                                    <div class="social_box">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/v2.jpg" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        Our Vehicles
                                    </h6>
                                    <div class="social_box">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/v3.jpg" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        Our Vehicles
                                    </h6>
                                    <div class="social_box">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/v4.jpg" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        Our Vehicles
                                    </h6>
                                    <div class="social_box">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/v5.jpg" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        Our Vehicles
                                    </h6>
                                    <div class="social_box">

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="box">
                                <div class="img-box">
                                    <img src="images/v6.jpg" alt="" />
                                </div>
                                <div class="detail-box">
                                    <h6>
                                        Hennry bilisom
                                    </h6>
                                    <div class="social_box">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end team section -->
        <?php
        $Name = '';
        $Email = '';
        $Phone = '';
        $Messages = '';

        extract($_POST);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {


            if (isset($_POST['send'])) {   // To check witch submit button , Name of the submit button is "send"//


                $Name = dataclean($Name);
                $Email = dataclean($Email);
                $Phone = dataclean($Phone);
                $Messages = dataclean($Messages);

                $message = array();

                if (empty($Name)) {
                    $message['err_name'] = "The Name should not be blank...!";
                }

                if (empty($Email)) {
                    $message['err_email'] = "The Email should not be blank...!";
                }

                if (empty($Phone)) {
                    $message['err_phone'] = "The Phone should not be blank...!";
                }

                if (empty($Messages)) {
                    $message['err_message'] = "The Message should not be blank...!";
                }

                if (!empty($Email)) {
                    if (!filter_var($Email, FILTER_VALIDATE_EMAIL)) {
                        $message['err_email'] = "Invailed Email...!";
                    }
                }

                if (empty($message)) {
                    $db = dbconn();
                    $sql = "INSERT INTO tbl_message(name, email, phone, message)VALUES('$Name', '$Email', '$Phone', '$Messages')";
                    $db->query($sql);

                    echo '<div id="liveAlertPlaceholder">
                <div class="alert alert-success alert-dismissible" role="alert">
                    Message Successfully Send!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </div>';

                    // Clear the BrandName field //

                    $Name = '';
                    $Email = '';
                    $Phone = '';
                    $Messages = '';
                }
            }
        }
        ?>
        <!-- contact section -->

        <section class="contact_section layout_padding-top">
            <div class="container" style="padding-bottom: 40px;">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <div class="contact-form">
                            <div class="heading_container">
                                <h2>
                                    Get In Touch
                                </h2>
                            </div>


                            <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>

                                <input type="text" id="Name" name="Name" value="<?= @$Name ?>" placeholder="Full name " />
                                <div class="text-danger"><?= @$message['err_name'] ?></div>

                                <div class="top_input">
                                    <input type="email" id="Email" name="Email" value="<?= @$Email ?>" placeholder="Email" />
                                    <div class="text-danger"><?= @$message['err_email'] ?></div>

                                    <input type="text" id="Phone" name="Phone" value="<?= @$Phone ?>" placeholder="Phone Number" />
                                    <div class="text-danger"><?= @$message['err_phone'] ?></div>
                                </div>


                                <input type="text" id="Messages" name="Messages" value="<?= @$Messages ?>" placeholder="Message" class="message_input" />
                                <div class="text-danger"><?= @$message['err_messages'] ?></div>

                                <div class="btn-box">
                                    <button type="submit" name="send">
                                        Send
                                    </button>
                                </div>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end contact section -->

      

        <!-- info section -->

        <section class="info_section layout_padding2">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="info_contact">
                            <h5>
                                Address
                            </h5>
                            <div class="contact_link_box">
                                <a href="contact.php">
                                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                                    <span>
                                        Location
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                    <span>
                                        Call +011 6783031
                                    </span>
                                </a>
                                <a href="">
                                    <i class="fa fa-envelope" aria-hidden="true"></i>
                                    <span>
                                        kdh.srilankan.tours@gmail.com
                                    </span>
                                </a>
                            </div>
                        </div>
                        <div class="info_social">
                            <a href="">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </a>
                            <a href="">
                                <i class="fa fa-instagram" aria-hidden="true"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="info_link_box">
                            <h5>
                                Navigation
                            </h5>
                            <div class="info_links">
                                <a class="active" href="index.php"> <i class="fa fa-angle-right" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                                <a class="" href="about.php"> <i class="fa fa-angle-right" aria-hidden="true"></i> About</a>
                                <a class="" href="why_us.php"> <i class="fa fa-angle-right" aria-hidden="true"></i> Why Us </a>
                                <a class="" href="team.php"> <i class="fa fa-angle-right" aria-hidden="true"></i> Our Team</a>
                                <a class="" href="testimonial.html"> <i class="fa fa-angle-right" aria-hidden="true"></i> Testimonial</a>
                                <a class="" href="contact.phpsni"> <i class="fa fa-angle-right" aria-hidden="true"></i> Contact Us</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <h5>
                            Newsletter
                        </h5>

<?php
$Sub = '';
extract($_POST);
if ($_SERVER['REQUEST_METHOD'] == 'POST') {


    if (isset($_POST['subscribe'])) {   // To check witch submit button , Name of the submit button is "subscribe"//


        $Sub = dataclean($Sub);

        $messagesub = array();

        if (empty($Sub)) {
            $messagesub['err_sub'] = "Place enter the Email!";
        }

        if (!empty($Sub)) {
            if (!filter_var($Sub, FILTER_VALIDATE_EMAIL)) {
                $messagesub['err_sub'] = "Invailed Email...!";
            }
        }

        if (empty($messagesub)) {
            $db = dbconn();
            $sql = "INSERT INTO tbl_subscribe(sub_email)VALUES('$Sub')";
            $db->query($sql);

            echo '<div id="liveAlertPlaceholder">
                <div class="alert alert-success alert-dismissible" role="alert">
                    Successfully Subscribe!
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
              </div>';

            $Sub = '';
        }
    }
}
?>




                        <form method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" novalidate>
                            <input type="text" id="Sub" name="Sub" placeholder="Enter Your email" />
                            <div class="text-danger"><?= @$messagesub['err_sub'] ?></div>
                            <button type="submit" name="subscribe">
                                Subscribe
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </section>

        <!-- end info section -->

        <!-- footer section -->
        <footer class="footer_section container-fluid">
            <p>
                &copy; <span id="displayYear"></span> All Rights Reserved. Design by
                <a href="https://www.linkedin.com/in/rumal-nayanatha-0968a0186/">Rumal Tharinda Nayanatha</a>
            </p>
        </footer>
        <!-- footer section -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

        <script src="<?= SYSTEM_PATH ?>js/jquery-3.4.1.min.js"></script>
        <script src="<?= SYSTEM_PATH ?>js/bootstrap.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <script src="<?= SYSTEM_PATH ?>js/custom.js"></script>

    </body>

</html>