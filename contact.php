<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $name = htmlentities($_POST['name']);
    $email = htmlentities($_POST['email']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);

    $messageBody = "Name: $name<br>";
    $messageBody .= "Email: $email<br>";
    $messageBody .= "Subject: $subject<br>";
    $messageBody .= "Message: $message<br>";



    $mail = new PHPMailer(true);
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'm2softtechnology@gmail.com';
    $mail->Password = 'mpqr emly msjm pxll';
    $mail->Port = 465;
    $mail->SMTPSecure = 'ssl';
    $mail->isHTML(true);
    $mail->setFrom($email, $name);
    $mail->addAddress('agniteja@saitronix.in');
    $mail->Subject = $subject;
    $mail->Body = $messageBody;

    if ($mail->send()) {
        // Form submitted successfully, show popup message
        echo '<script>alert("Your Form has been successfully submitted!");</script>';
    } else {
        // Handle the case when the mail sending fails
        echo '<script>alert("Error sending email. Please try again later.");</script>';
    }
}
?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">


<!-- Mirrored from htmldemo.net/megan/megan/# by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 20:56:18 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title> SAITRONIX ELECTRO DRIVES PRIVATE LIMITED</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->

    <link rel="icon" href="/assets/img/icons/logo.png">

    <!-- CSS
	============================================ -->
    <link rel="stylesheet" href="/assets/css-corosel/bootstrap.min.css">
    <link rel="stylesheet" href="/assets/css-corosel/owl.carousel.min.css">
    <link rel="stylesheet" href="/assets/css-corosel/owl.theme.default.css">
    <link rel="stylesheet" href="/assets/css-corosel/style.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/bootstrap.min.css">

    <!-- <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/font-awesome.min.css">

    <!-- Ionicons CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/ionicons.min.css">

    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/flaticon.min.css">

    <!-- Icomoon CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/icomoon.min.css">

    <!-- Tractor icon CSS -->
    <link rel="stylesheet" href="/assets/css/vendor/tractor-icon.min.css">

    <!-- Swiper slider CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/swiper.min.css">

    <!-- Animate CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/animate.min.css">

    <!-- Light gallery CSS -->
    <link rel="stylesheet" href="/assets/css/plugins/lightgallery.min.css">





    <!-- Main Style CSS -->
    <link rel="stylesheet" href="/assets/css/style-red.css">
    <!-- Revolution Slider CSS -->
    <link href="/assets/revolution/css/settings.css" rel="stylesheet">
    <link href="/assets/revolution/css/navigation.css" rel="stylesheet">
    <link href="/assets/revolution/custom-setting.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=K2D:ital,wght@0,100;0,200;0,300;1,300&family=Poppins&display=swap" rel="stylesheet">



</head>

<body class="hidden ">
    <style>
    
   <style>
    .submenu {
  position: absolute;
  z-index: 9;
  top: 100%;
  left: 0;
  visibility: hidden;
  min-width: 270px;
  padding: 25px 0;
  /*-webkit-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);*/
  transition: 0.3s !important;
  /*transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);*/
  /*-webkit-transition-delay: 0.3s;*/
  /*transition-delay: 0.3s;*/
  /*-webkit-transition-duration: 0.4s;*/
  /*transition-duration: 0.4s;*/
  -webkit-transform: translateY(50px);
  transform: translateY(50px);
  opacity: 0;
  border-bottom: 3px solid#FF731D;
  background-color: #00204a;
  -webkit-box-shadow: 0 10px 37px rgba(0, 0, 0, 0.07);
  box-shadow: 0 10px 37px rgba(0, 0, 0, 0.07);
}
     @media (min-width: 700px) and (max-width: 767px){
            .footer-img1 {
    height: 730px !important;
}
        }
        @media (max-width: 767px) {
            .footer-col.office-section.footer-about {
                left: 57px !important;
            }

            .footer-col.office-section {
                padding-left: 18px;
            }

            .footer-img1 {
                height: 830px !important;
            }
            .envelope{
                bottom:34% !important;
            }

            p.footer-about {
                font-size: 13px !important;
            }
        }

        .iso-logo {
            position: absolute;
            right: 22px;
            top: -73px;
            width: 16%;
        }

        .footer-col.office-section {
            padding-left: 0px !important;
        }

        .footer-about {
            position: relative;
            top: -49px;
            font-size: 12px;
            gap: 2px;
            left: 22px;
            font-weight: 800;
            text-align: justify;
        }

        .background-image {
            background-image: url(/assets/img/patterns/3.png);
            height: fit-content;
            padding-top: 1px;
            /* padding-bottom: 10px; */
            background-position: center;
            /* background-size: cover; */

        }

        @media (min-width:1500px) and (max-width:1799px) {
            .header-navigation__nav nav>ul {
                margin-left: 555px !important;
            }

        }

        @media (min-width:1800px) and (max-width:1999px) {
            .header-navigation__nav nav>ul {
                margin-left: 610px !important;
            }
        }

        @media (min-width:2000px) and (max-width:2500px) {
            .header-navigation__nav nav>ul {
                margin-left: 650px !important;
            }
        }

        @media (max-width:767px) {
            img.right-left {
                left: 1px !important;
                width: 100% !important;
            }

            .intro {
                padding: 0px 18px !important;
            }

            .name {
                font-size: 25px !important;
            }

        }

        @media (min-width:1400px) and (max-width:1800px) {
            .footer-about {
                top: -17px;
            }

            .social-links.social-links--round-style {
                margin-top: -11px !important;
            }
        }

        .name {
            color: #052148;
            font-weight: 900;
            text-align: center;
            padding-top: 30px;
            font-size: 30px;

            text-shadow: 2px 2px #ffffff;
        }

        @media (max-width: 950px) and (min-width: 450px) {
            .iris {
                display: none;
            }
        }

        select#railway {
            width: 100%;
            outline: none;
            border: 0;
            border-bottom: 2px solid #ddd;
            color: #222;
            font-weight: 400;
            padding: 12px 0 12px;
            height: 50px;
            margin-bottom: 20px;
            -webkit-transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1);
            transition: all 0.3s cubic-bezier(0.645, 0.045, 0.355, 1)
        }

        .button>button {
            border-radius: 10px;
            border: none;
            background-color: #F55C01;
            color: #fff;
            padding: 8px 30px;
            display: block;
            margin: 0 auto;

        }
        /*For footer*/
             @media (min-width:300px) and (max-width:330px){
    .footer-img1{
    height:960px !important;
}
}
       @media (min-width:331px) and (max-width:349px){
    .footer-img1{
    height:880px !important;
}
}
@media (min-width:390px) and (max-width:401px){
    .footer-img1{
            height: 835px !important;
    }
}
@media (min-width:350px) and (max-width:390px){
    .footer-img1{
         height: 850px !important;
    }
}
@media (min-width:401px) and (max-width:525px){
      .footer-img1{
    height:838px !important;
}
}
@media (min-width:526px) and (max-width:600px){
      .footer-img1{
    height:755px !important;
}
}

@media (min-width:600px) and (max-width:650px){
      .footer-img1{
    height:735px !important;
}
}
@media (min-width:650px) and (max-width:700px){
      .footer-img1{
    height:720px !important;
}
}
@media (min-width:700px) and (max-width:767px){
      .footer-img1{
    height:715px !important;
}
}
    </style>
    <!--====================  preloader ====================-->
    <div class="preloader-activate preloader-active">
        <div class="preloader-area-wrap">
            <div class="spinner d-flex justify-content-center align-items-center h-100">
                <img src="/assets/img/projects/loader.png" alt="" class="rotate">
            </div>
        </div>
    </div>
    <!--====================  End of preloader  ====================--> <!-- band starts here -->

    <!--====================  heaer area ====================-->

    <div class="header-area background-image">
        <div class="header-area__desktop header-area__desktop--style3 " style="margin-top: 45px;">
            <!-- header wrapper -->
            <div class="header-wrapper header-wrapper--style3 mt-36 ">
                <div class="responsive" style="position: absolute;top: 8px;">
                 <img src="/assets/img/logo/Logo.png" style=" width: 49%; padding: 5px;margin-top: 3px;" class="img-fluid logo w-38 ml-6" alt="">
                </div>
                <div class="header-wrapper--style3__header-right">
                    <div class="header-navigation-wrapper header-navigation-wrapper--style3">
                        <div class="header-navigation-wrapper--style3__left">
                            <div class="header-navigation__nav header-navigation__nav--style3 position-static">
                                <nav class="header-center">
                                    <ul>
                                        <li>
                                            <a style="font-size: 20px;" class="active" href="./index.php">HOME</a>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a style="font-size: 20px;" href="#">ABOUT US</a>
                                            <ul class="submenu">

                                                <li><a href="our_phylosophy.html">Our
                                                        Philosophy</a></li>
                                                <li><a href="Board-of-Directors.html">Board Of Directors</a></li>
                                                <li><a href="company_profile.html">Company Profile </a></li>
                                                <li><a href="quality_policy.html">Quality
                                                        Policy</a></li>
                                                <li><a href="r&d.html">Research and Development</a></li>
                                                <li><a href="customers.html">Customers</a></li>

                                            </ul>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a style="font-size: 20px;" href="#">CREDENTIALS</a>
                                            <ul class="submenu">

                                                <li>
                                                    <a href="supply-credentials.php">Supply Performance Credentials</a>
                                                </li>

                                                <li>
                                                    <a href="statutary-credentials.php">Statutary Credentials</a>

                                                </li>

                                            </ul>
                                        </li>

                                        <!--  -->

                                        <li class="has-children has-children--multilevel-submenu">
                                            <a style="font-size: 20px;" href="#">PRODUCTS</a>
                                            <ul class="submenu">

                                                <li class="has-children">
                                                    <a href="#">Electric Locomotive</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="products/Electro-Locomotives/dni.php">Digital
                                                                Notch Indicator</a>
                                                            <a href="products/Electro-Locomotives/vcd.php">Vigilance
                                                                Control Device</a>
                                                            <a href="products/Electro-Locomotives/stmc.php">Stick Type
                                                                Master Controller</a>
                                                            <a href="products/Electro-Locomotives/3plm.php">3 Phase
                                                                Loco Master Controller</a>
                                                            <a href="products/Electro-Locomotives/fde.php">Fire
                                                                Detector Equipment</a>


                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">Diesel Locomotive</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="products/Diesel-locomotives/dmc.php">Diesel Master
                                                                Controller</a>


                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">Electrical Multiple Units</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="products/Electrical-multiple-units/emc.php">EMU
                                                                Master Controller</a>


                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">Encoders</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="products/encoders/at.php">Angle
                                                                Transducer</a>


                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a style="font-size: 20px;" href="#">SUPPORT</a>
                                            <ul class="submenu">

                                                <li><a href="service_req_form.php">Service req.Form
                                                    </a></li>

                                                <li><a href="enquiry-form.php">Enquiry Form
                                                    </a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a style="font-size: 20px;color: #F55C01;" class="active" href="#">CONTACT
                                                US</a>

                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <div class="header-navigation-wrapper--style3__right" style="margin-left: -10px;">


                            <div class="desktop-menu-wrapper--style3 " style="color: #FD5F00;">
                                <div class="mobile-navigation-icon mobile-navigation-icon--style3 mobile-navigation-icon--mobile-off" id="overlay-menu-icon">
                                    <i></i>
                                </div>
                                <div class="mobile-navigation-icon mobile-navigation-icon--desktop-off mt-10" id="mobile-menu-trigger">
                                    <i></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
             <div>
                <img src="assets/img/s-shape.png" alt="" class="h-100" style="width: 100%;">

            </div>
        </div>
    </div>

    </div>


    <!-- break down section starts here -->

    <div class="background-image">
        <div class="page-content-wrapper section-space--inner-- " style="margin-top:50px">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="career-title-area text-center section-space--bottom--50">
                            <h2 class="title" style="color:#000">Call Us or Fill The Form</h2>
                            <p class="subtitle">Leave your information and submit to us. Subscribe to our newsletters for
                                more
                                updates and reports.</p>
                        </div>
                    </div>
                </div>
                <div class="contact-form-wrapper">
                    <form class="display-grid row-gap-1-rem" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <input class="box-shadow-primary" name="name" type="text" placeholder="Name" autocomplete="off" required />
                            </div>
                            <div class="col-md-6">
                                <input class="box-shadow-primary" name="email" type="email" placeholder="Email" autocomplete="off" required />
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <input class="box-shadow-primary" name="subject" type="text" placeholder="Subject" autocomplete="off" required />
                            </div>
                            <div class="col-md-6">
                                <input class="box-shadow-primary" name="message" type="text" placeholder="Message" autocomplete="off" required />
                            </div>
                        </div>
                        <div>
                            <div class="button">

                                <button type="submit" name="send">
                                    Send <i class="fa-solid fa-paper-plane color-white margin-left-1-rem"></i>
                                </button>
                            </div>
                        </div>

                    </form>
                    <p class="form-message text-center"></p>
                </div>
            </div>
        </div>
        <div class="icon-info-area section-space--inner--120 ">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="icon-info-wrapper">
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="single-icon-info">
                                        <div class="single-icon-info__image ">
                                            <img src="assets/img/icons/map.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="single-icon-info__content">
                                            <h4 class="single-icon-info__title single-icon-info__title--black2" style="color: #fe9f66;font-weight:800 ;">Location</h4>
                                            <p class=" single-icon-info__text" style="text-align: justify;width:90%;color: #334d6e;font-weight: 600;">
                                             Plot no: 2-10-168, Besides
                                Ganesh temple,
                               EC Nagar, Cherlapally,  Hyderabad, Telangana-500051
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="single-icon-info">
                                        <div class="single-icon-info__image text-center">
                                            <img src="assets/img/icons/customer.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="single-icon-info__content">
                                            <h4 class="single-icon-info__title single-icon-info__title--black2" style="color: #fe9f66;font-weight:800 ;">Contact Us</h4>
                                            <p class=" single-icon-info__text" style="color: #334d6e;font-weight: 600;">
                                                24/7 Support<br> +91-7671953161 <br>+91-9866766144</p>
                                        </div>
                                    </div>
                                </div>
                                <div class=" col-lg-4">
                                    <div class="single-icon-info">
                                        <div class="single-icon-info__image text-center">
                                            <img src="assets/img/icons/gmail.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="single-icon-info__content">
                                            <h4 class="single-icon-info__title single-icon-info__title--black2" style="color: #fe9f66;font-weight: 800;">Email Us</h4>
                                            <p class=" single-icon-info__text" style="color: #334d6e;font-weight: 600;">
                                                info@saitronix.in
                                                <br> agniteja@saitronix.in
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--====================  End of icon info area  ====================-->


        <!--====================  page content wrapper ====================-->
        <div class="support-footer__area container">
            <div class="row g-0">
                <div class="col-lg-12">
                    <!-- google map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d282.87736169541785!2d78.59869299860367!3d17.463114405438873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9c46c3b187e9%3A0x51659e7142b77c2d!2sSaitronix%20Electro%20Drives%20Private%20Limited%20(SEDPL)!5e0!3m2!1sen!2sin!4v1700731339047!5m2!1sen!2sin" style="border:0;width:100%;height:450px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </div>

    <!-- Hiring Form Starts Here -->

    <style>
        .background1 {
            background-image: url(/assets/img/patterns/3.png);


        }

        hr {
            margin: 5px 0px;
        }
    </style>


    <div class="background1" id="close-sec">
        <div class="footer-img" style="background-image: url(assets/img/logo/Group\ 186.png);width: 100%;height: 350px;background-size: cover;">
            <footer class="footer " style="width: 100%;background-size: cover;">
                <div class="footer-row row" style="margin-top: 45px;">
                    <div class="footer-col" style="top: 120px;">
                        <p class="footer-about"> M/S.SAITRONIX ELECTRO DRIVES PVT.LTD. SCOPE IS TO DESING DEVELOP
                            MANUFACTURE, SUPPLY AND SERVICE ELECTRICAL, ELECTRONICS, MECHANICAL AND ELECTROMECHANICAL
                            CONTROL SYSTEM SOLUTIONS TO OUR CUSTOMERS</p>
                        <div class="social-links social-links--round-style">
                            <ul>
                                <li><a href="http://facebook.com/" data-tippy="Facebook" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-facebook"></i></a></li>
                                <li><a href="http://twitter.com/" data-tippy="Twitter" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-twitter"></i></a></li>
                                <li><a href="http://vimeo.com/" data-tippy="Vimeo" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-vimeo"></i></a></li>
                                <li><a href="http://linkedin.com/" data-tippy="Linkedin" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-linkedin"></i></a></li>
                                <li><a href="http://skype.com/" data-tippy="Skype" data-tippy-inertia="false" data-tippy-animation="shift-away" data-tippy-delay="50" data-tippy-arrow="true" data-tippy-theme="sharpborder__black" data-tippy-placement="top"><i class="ion-social-skype"></i></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="footer-col office-section ">
                        <h3 class="office" style="color: #fff;font-weight: 700;">Office <div class="bottom-line">
                                <span></span>
                            </div>
                        </h3> <span> <i class="fa-solid fa-location-dot location"></i>
                            <p style="font-size: 15px;width: 100%;text-align: justify;">Plot no: 2-10-168, Besides
                                Ganesh temple,
                               EC Nagar, Cherlapally,  Hyderabad, Telangana-500051</p>
                        </span>


                        <!--new code   -->
                        <div class="py-3" style="display:flex;align-items:end;">
                            <i class="fa-solid fa-envelope envelope"></i>
                            <div>
                                <p style="margin-bottom:0px"> <a href="mailto:agniteja@saitronix.in" style="margin-top: 10px;">
                                        agniteja@saitronix.in </a> </p>
                                <p style="margin-top:0px"> <a href="mailto:info@saitronix.in">
                                        info@saitronix.in </a>
                                </p>
                            </div>
                        </div>
                        <i class="fa-solid fa-phone phone"></i>
                        <h4 style="text-align: initial; color: #fff;"><a href="tel:+91-7671953161">
                                +91-7671953161 <br> +91-9866766144</h4></a>





                    </div>

                    <div class="footer-col links-section">
                        <h3 class="links" style="color: #fff;font-weight: 700;">Links <div class="bottom-line">
                                <span></span>
                            </div>
                        </h3>
                        <ul>
                            <li><a href="/index.php">HOME</a></li>
                            <li><a href="company_profile.html">COMPANY PROFILE</a></li>

                            <li><a href="products/Electro-Locomotives/dni.php">ELECTRIC LOCOMOTIVE</a></li>
                            <li><a href="products/Diesel-locomotives/dmc.php">DIESEL LOCOMOTIVE</a></li>
                            <li><a href="contact.php">CONTACT US</a></li>
                        </ul>

                    </div>
                    <hr>

                    <div class="center-div">
                             <p class="copyright">
      SAITRONIX ELECTRO DRIVES PRIVATE LIMITED Ⓒ 2023 - All Rights Reserved |  Design By <a  style="color: #f55c01"href="https://m2s.co.in/">M2S</a>
    </p>
                    </div>
                </div>

            </footer>

        </div>
    </div>

 <div class="footer-img1" style="background-image: linear-gradient(to right, #F55C01, #052148);
                ;width: 100%; border-radius: 10px 10px 0 0;">


        <footer class="footer " style="width: 100%;background-size: cover;">

            <div class="footer-row row" style="margin-top: 45px;">
                <div class="footer-col" style="top: 97px;">
                    <h3 class="about res" style="color: #fff;font-weight: 700;">About <div class="bottom-line"><span></span>
                        </div>
                    </h3>
                    <p class="footer-about"> M/S.SAITRONIX ELECTRO DRIVES PVT.LTD. SCOPE IS TO DESING DEVELOP
                        MANUFACTURE, SUPPLY AND SERVICE ELECTRICAL, ELETRONICS, MECHANICAL AND ELECTROMECHANILAL CONTROL
                        SYSTEM SOLUTIONS TO OUR CUSTOMERS</p>

                </div>

                <div class="footer-col" style="padding-left:66px">
                    <h3 class="office" style="color: #fff;font-weight: 700;">Office <div class="bottom-line">
                            <span></span>
                        </div>
                    </h3> <span> <i class="fa-solid fa-location-dot location"></i>
                        <p class="loc" style="font-size: 15px;width: 100%;text-align: justify;">Plot no: 2-10-168, Besides
                                Ganesh temple,
                               EC Nagar, Cherlapally,  Hyderabad, Telangana-500051</p>
                    </span>
                    <i class="fa-solid fa-envelope envelope"></i>
                    <p class="footer-email"><a href="mailto:agniteja@saitronix.in" style="margin-top: 10px;">
                            agniteja@saitronix.in <br> info@saitronix.in</p> </a><i class="fa-solid fa-phone phone"></i>
                    <h4 class="res" style="text-align: initial; color: #fff;"><a href="tel:+91-7671953161">
                            +91-7671953161 <br> +91-9866766144</h4></a>
                </div>

                <div class="footer-col links-section">
                    <h3 class="links" style="color: #fff;font-weight: 700;">Links <div class="bottom-line">
                            <span></span>
                        </div>
                    </h3>
                    <ul>
                        <li><a href="/index.php">HOME</a></li>
                        <li><a href="company_profile.html">COMPANY PROFILE</a></li>

                        <li><a href="products/Electro-Locomotives/dni.php">ELECTRIC LOCOMOTIVE</a></li>
                        <li><a href="products/Diesel-locomotives/dmc.php">DIESEL LOCOMOTIVE</a></li>
                        <li><a href="#">CONTACT US</a></li>
                    </ul>

                </div>
                <hr>

                <div class="center-div">
                          <p class="copyright">
      SAITRONIX ELECTRO DRIVES PRIVATE LIMITED Ⓒ 2023 - All Rights Reserved |  Design By <a  style="color: #f55c01"href="https://m2s.co.in/">M2S</a>
    </p>
                </div>
            </div>

        </footer>

    </div>



    <!--====================  End of footer area  ====================-->
    <!--====================  mobile menu overlay ====================-->

    <!--====================  End of footer area  ====================-->
    <!--====================  mobile menu overlay ====================-->
    <div class="mobile-menu-overlay" id="mobile-menu-overlay">
        <div class="mobile-menu-overlay__header">
            <div class="container-fluid--cp-60">
                <div class="row align-items-center">
                    <div class="col-md-4 col-sm-6 col-9">
                        <!-- logo -->
                        <div class="logo">
                            <a href="#">
                                <img src="/assets/img/projects/logo.png" class="img-fluid" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-8 col-sm-6 col-3">
                        <!-- mobile menu content -->
                        <div class="mobile-menu-content">
                            <a class="mobile-navigation-close-icon" id="mobile-menu-close-trigger" href="javascript:void(0)">
                                <i class="ion-ios-close-empty"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mobile-menu-overlay__body">
            <nav class="offcanvas-navigation" style="text-transform: uppercase;">
                <ul>
                    <li class="has-children">
                        <a href="index.php">Home</a>
                    </li>
                    <li class="has-children">
                        <a href="#">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="our_phylosophy.html">Our Philosophy</a></li>
                            <li><a href="Board-of-Directors.html">Board Of Directors</a></li>
                            <li><a href="company_profile.html">Company Profile </a></li>
                            <li><a href="quality_policy.html">Quality Policy</a></li>
                            <li><a href="r&d.html">Research and Development</a></li>
                            <li><a href="customers.html">Customers</a></li>
                        </ul>
                    </li>
                    </li>
                    <!-- Example starts here  -->
                    <li class="has-children">
                        <a href="#"> Credentials</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="/supply-credentials.php">Supply Performance Credentials</a>
                            </li>
                            <li>
                                <a href="/statutary-credentials.php">Statutary Credentials</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children has-children--multilevel-submenu">
                        <a href="#">products</a>
                        <ul class="sub-menu">
                            <li class="has-children">
                                <a href="#">Electric Locomotive</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="products/Electro-Locomotives/dni.php">Digital Notch Indicator</a>
                                        <a href="products/Electro-Locomotives/vcd.php">Vigilance Control Device</a>
                                        <a href="products/Electro-Locomotives/stmc.php">Stick Type Master
                                            Controller</a>
                                        <a href="products/Electro-Locomotives/3plm.php">3 Phase Loco Master
                                            Controller</a>
                                        <a href="products/Electro-Locomotives/fde.php">Fire Detector Equipment</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Diesel Locomotive</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="products/Diesel-locomotives/dmc.php">Diesel Master Controller</a>


                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Electrical Multiple Units</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="products/Electrical-multiple-units/emc.php">EMU Master Controller</a>


                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Encoders</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="products/encoders/at.php">Angle
                                            Transducer</a>


                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Example ends here  -->



                    <li class="has-children">
                        <a href="#">support</a>
                        <ul class="sub-menu">

                            <li><a href="service_req_form.php">Service req.Form</a></li>
                            <li><a href="enquiry-form.php">Enquiry Form</a></li>

                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="./contact.php">Contact us</a>

                    </li>
                </ul>
                </li>




                </ul>
            </nav>
        </div>
    </div>
    <!--====================  End of mobile menu overlay  ====================-->
    <!--=======  overlay-navigation-menu  =======-->


    <div class="overlay-navigation-menu overlay-navigation-inactive" id="overlay-navigation-menu">
        <!--=======  close icon  =======-->

        <span class="close-icon overlay-menu-close-icon">
            <a href="javascript:void(0)" id="overlay-menu-close-icon">
                <i class="ion-android-close"></i>
            </a>
        </span>

        <!--=======  End of close icon  =======-->

        <!--=======  overlay navigation menu  =======-->

        <div class="overlay-navigation-menu-container">
            <nav class="offcanvas-navigation">
                <ul>
                    <li class="has-children">
                        <a href="./index.php">Home</a>
                    </li>
                    <li class="has-children">
                        <a href="#">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="our_phylosophy.html">Our Philosophy</a></li>
                            <li><a href="Board-of-Directors.html">Board Of Directors</a></li>
                            <li><a href="company_profile.html">Company Profile </a></li>
                            <li><a href="quality_policy.html">Quality Policy</a></li>
                            <li><a href="r&d.html">Research and Development</a></li>

                            <li><a href="customers.html">Customers</a></li>
                        </ul>
                    </li>
                    </li>
                    <!-- Example starts here  -->
                    <li class="has-children">
                        <a href="#"> Credentials</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="supply-credentials.php">Supply Performance Credentials</a>
                            </li>
                            <li>
                                <a href="statutary-credentials.php">Statutary Credentials</a>
                            </li>
                        </ul>
                    </li>
                    <li class="has-children has-children--multilevel-submenu">
                        <a href="#">Products</a>
                        <ul class="sub-menu">
                            <li class="has-children">
                                <a href="#">Electric Locomotive</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="products/Electro-Locomotives/dni.php">Digital Notch Indicator</a> <br>
                                        <a href="products/Electro-Locomotives/vcd.php">Vigilance Control Device</a> <br>
                                        <a href="products/Electro-Locomotives/stmc.php">Stick Type Master
                                            Controller</a> <br>
                                        <a href="products/Electro-Locomotives/3plm.php">3 Phase Loco Master
                                            Controller</a> <br>
                                        <a href="products/Electro-Locomotives/fde.php">Fire Detector Equipment</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Diesel Locomotive</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="products/Diesel-locomotives/dmc.php">Diesel Master Controller</a>


                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Electrical Multiple Units</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="products/Electrical-multiple-units/emc.php">EMU Master Controller</a>


                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Encoders</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="products/encoders/at.php">Angle
                                            Transducer</a>


                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>

                    <!-- Example ends here  -->



                    <li class="has-children">
                        <a href="#">Support</a>
                        <ul class="sub-menu">

                            <li><a href="service_req_form.php">Service req.Form</a></li>
                            <li><a href="enquiry-form.php">Enquiry Form</a></li>

                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="./contact.php">Contact us</a>

                    </li>
                </ul>
                </li>




                </ul>
            </nav>
        </div>

        <!--=======  End of overlay navigation menu  =======-->


    </div>

    <!--=======  End of overlay-navigation-menu  =======-->
    <!--====================  scroll top ====================-->
    <a href="#" class="scroll-top" id="scroll-top">
        <i class="ion-android-arrow-up"></i>
    </a>




    <!--====================  End of footer area  ====================-->





    <!--=======  End of overlay-navigation-menu  =======-->
    <!--====================  scroll top ====================-->

    <!--====================  End of scroll top  ====================-->
    <!-- JS
============================================ -->
    <script>
        function toggleAccordion(accordionNumber) {
            var accordionContent = document.getElementById("accordion-content-" + accordionNumber);

            // Toggle the display of the accordion content
            if (accordionContent.style.display === "none" || accordionContent.style.display === "") {
                accordionContent.style.display = "flex";
            } else {
                accordionContent.style.display = "none";
            }
        }
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var inputField = document.getElementById("con_email");
            inputField.addEventListener("click", function() {
                inputField.style.backgroundImage = "none";
            });
        });
    </script>


    <!-- Modernizer JS -->
    <script src="/assets/js/vendor/modernizr-2.8.3.min.js"></script>

    <!-- jQuery JS -->
    <script src="/assets/js/vendor/jquery.min.js"></script>

    <!-- Bootstrap JS -->
    <script src="/assets/js/vendor/bootstrap.min.js"></script>

    <!-- Popper JS -->
    <script src="/assets/js/vendor/popper.min.js"></script>

    <!-- Swiper Slider JS -->
    <script src="/assets/js/plugins/swiper.min.js"></script>

    <!-- Tippy JS -->
    <script src="/assets/js/plugins/tippy.min.js"></script>

    <!-- Light gallery JS -->
    <script src="/assets/js/plugins/lightgallery.min.js"></script>

    <!-- Light gallery video JS -->
    <script src="/assets/js/plugins/lg-video.min.js"></script>

    <!-- Waypoints JS -->
    <script src="/assets/js/plugins/waypoints.min.js"></script>

    <!-- Counter up JS -->
    <script src="/assets/js/plugins/counterup.min.js"></script>

    <!-- Isotope JS -->
    <script src="/assets/js/plugins/isotope.min.js"></script>

    <!-- Appear JS -->
    <script src="/assets/js/plugins/appear.min.js"> </script>

    <!-- Gmap3 JS -->
    <script src="/assets/js/plugins/gmap3.min.js"></script>

    <!-- Mailchimp JS -->
    <script src="/assets/js/plugins/mailchimp-ajax-submit.min.js"></script>


    <!-- Main JS -->
    <script src="/assets/js/main.js"></script>

    <!-- Script for dropdown -->




    <!-- Revolution Slider JS -->
    <script src="/assets/revolution/js/jquery.themepunch.revolution.min.js"></script>
    <script src="/assets/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script src="/assets/revolution/revolution-active.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script src="/assets/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script src="/assets/revolution/js/extensions/revolution.extension.parallax.min.js"></script>

    <script src="/assets/js-corosel/jquery.min.js"></script>
    <script src="/assets/js-corosel/owl.carousel.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".slider-area").owlCarousel({
                items: 1,
                loop: true,
                nav: true,
                autoplay: true
            });
        });
    </script>
      <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Select the input by its name attribute
            var nameInput = document.querySelector('input[name="name"]');

            nameInput.addEventListener('input', function() {
                // Get the current input value
                var inputValue = nameInput.value;

                // Remove numeric characters from the input
                var nonNumericValue = inputValue.replace(/[0-9]/g, '');

                // Update the input with the non-numeric value
                nameInput.value = nonNumericValue;
            });
        });
    </script>

</body>


<!-- Mirrored from htmldemo.net/megan/megan/# by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 14 May 2023 20:56:27 GMT -->

</html>