<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

if (isset($_POST['send'])) {
    $name = htmlentities($_POST['name']);
    $mobile = htmlentities($_POST['mobile']);
    $company = htmlentities($_POST['company']);
    $productName = htmlentities($_POST['productName']);
    $document = htmlentities($_POST['document']);
    $subject = htmlentities($_POST['subject']);
    $message = htmlentities($_POST['message']);
    $email = htmlentities($_POST['email']); // Add this line to get the email from the form

    $messageBody = "Name: $name<br>";
    $messageBody .= "Mobile: $mobile<br>";
    $messageBody .= "Email: $email<br>";
    $messageBody .= "Company: $company<br>";
    $messageBody .= "Product Name: $productName<br>";
    $messageBody .= "Selected Document: $document<br>";
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
    $mail->addAddress('aginteja@saitronix.in');
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

<body class="hidden">
    <style>
    @media (min-width: 1100px) and (max-width: 1260px){
        .footer-img {
    height: 390px !important;
}
    }

     @media (min-width: 700px) and (max-width: 767px){
            .footer-img1 {
    height: 730px !important;
}
        }
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
     @media (max-width: 767px) {
            .footer-col.office-section.footer-about {
                left: 57px !important;
            }

            .footer-col.office-section {
                padding-left: 18px;
            }

        

            .envelope {
                bottom: 34% !important;
            }

        }

       
        @media (max-width:767px) {
         
            .popup-form-container {
                width: 100%;
            }

            .spec {
                font-size: 19px !important;
            }

         section.background-image.res-padding {
                padding: 10px !important;
                padding-bottom: 30px !important;
            }

            p {
                text-align: justify;
                font-size:15px !important;
                
                
                
            }
            img.mx-2{
                width:17px !important;
            }

            p.footer-about {
                font-size: 13px !important;
            }

            p.copyright {
                padding: 9px;
                text-align: center;
            }
        }
        .wrong button {
            padding: 5px 20px;
            color: #fff;
            background: #00204a;
            border-radius: 7px;
            border: none;
            margin-top: 10px;
        }

        hr {
            margin: 5px 0px !important;
        }

        .button>button {
            border-radius: 10px;
            border: none;
            background-color: #f55c01;
            color: #fff;
            padding: 8px 30px;
            display: block;
            margin: 0 auto;
        }

        .popup-form-container {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            z-index: 999;
            border-radius: 10px;
        }

        .popup-close-button {
            cursor: pointer;
        }

        .iso-logo {
            position: absolute;
            right: 22px;
            top: -77px;
            width: 16%;
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

        /* Chrome, Safari, Edge, Opera */
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
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
                 <img src="/assets/img/logo/Logo.png" style="    width: 49%;
                               
                               
                                padding: 5px;
                                margin-top: 3px;
                            " class="img-fluid logo w-38 ml-6" alt="">
                </div>
                <div class="header-wrapper--style3__header-right">

                    <div class="header-navigation-wrapper header-navigation-wrapper--style3">
                        <div class="header-navigation-wrapper--style3__left">
                            <div class="header-navigation__nav header-navigation__nav--style3 position-static">
                                <nav class="header-center">
                                    <ul>
                                        <li>
                                            <a style="font-size: 20px;" class="active" href="../../index.php">HOME</a>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a style="font-size: 20px;" href="#">ABOUT US</a>
                                            <ul class="submenu">
                                                <li><a href="../../our_phylosophy.html">Our Philosophy</a></li>
                                                <li><a href="../../Board-of-Directors.html">Board Of Directors</a></li>
                                                <li><a href="../../company_profile.html">Company Profile </a></li>
                                                <li><a href="../../quality_policy.html">Quality Policy</a></li>
                                                <li><a href="../../r&d.html">Research and Development</a></li>

                                                <li><a href="../../customers.html">Customers</a></li>
                                            </ul>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a style="font-size: 20px;" href="#">CREDENTIALS</a>
                                            <ul class="submenu">

                                                <li>
                                                    <a href="../../supply-credentials.php">Supply Performance Credentials</a>
                                                </li>

                                                <li>
                                                    <a href="../../statutary-credentials.php">Statutary Credentials</a>

                                                </li>

                                            </ul>
                                        </li>

                                        <!--  -->

                                        <li class="has-children has-children--multilevel-submenu">
                                            <a style="font-size: 20px;color: #F55C01;" href="#">PRODUCTS</a>
                                            <ul class="submenu">

                                                <li class="has-children">
                                                    <a href="#">Electric Locomotive</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="../Electro-Locomotives/dni.php">Digital
                                                                Notch Indicator</a>
                                                            <a href="../Electro-Locomotives/vcd.php">Vigilance
                                                                Control Device</a>
                                                            <a href="../Electro-Locomotives/stmc.php">Stick Type
                                                                Master Controller</a>
                                                            <a href="../Electro-Locomotives/3plm.php">3 Phase
                                                                Loco Master Controller</a>
                                                            <a href="../Electro-Locomotives/fde.php">Fire
                                                                Detector Equipment</a>


                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">Diesel Locomotive</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="../Diesel-locomotives/dmc.php">Diesel
                                                                Master Controller</a>


                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a href="#">Electrical Multiple Units</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a href="../Electrical-multiple-units/emc.php">EMU
                                                                Master Controller</a>


                                                        </li>

                                                    </ul>
                                                </li>
                                                <li class="has-children">
                                                    <a style="color: #F55C01;" href="#">Encoders</a>
                                                    <ul class="submenu">
                                                        <li>
                                                            <a style="color: #F55C01;" href="/products/encoders/at.php">Angle
                                                                Transducer</a>


                                                        </li>

                                                    </ul>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="has-children has-children--multilevel-submenu">
                                            <a style="font-size: 20px;" href="#">SUPPORT</a>
                                            <ul class="submenu">

                                                <li><a href="../../service_req_form.php">Service req.Form
                                                    </a></li>

                                                                           <li><a href="../../enquiry-form.php">Enquiry Form</a></li>

                                            </ul>
                                        </li>
                                        <li>
                                            <a style="font-size: 20px;" class="active" href="../../contact.php">CONTACT
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
                <img src="/assets/img/s-shape.png" alt="" class="h-100" style="width: 100%;">

            </div>
        </div>
    </div>

    </div>


    <!-- break down section starts here -->

    <section>
        <img src="/assets/img/products/angle.png" alt="">
    </section>
    <!-- products section 1 -->

    <section style="background-image: linear-gradient(to right, #fff, #f55c01)">
        <div class="intro" style="padding: 0px 70px;">
            <div class="row" style="padding-top: 50px;">
                <div class="col-md-6">
                    <h3 style="color: #052148;font-weight: 900;text-align: center;font-size: 27px;">INTRODUCTION</h3>
                    <p style="font-size: 19px;text-align: justify;font-weight: 500;margin-top: 30px;color: #000;">
                        The angular position transmitter (sensor) is the heart of the Master Controller. It sense the
                        rotation of the drive break handle and gives out a precise current output corresponding to the
                        position of the drive break handle, w.r.t to the zero position, either in traction or breaking side.
                        The angular position transmitter used in Saitronix make master controller is our proprietary design in
                        which the output
                        can be configured as per the customer requirement.

                        <br>

                    </p>
                </div>
                <div class="col-md-6" style="margin-top: 30px;">
                    <img src="/products/angle-1.png" style="width: 72%;" alt="">
                    <img src="/products/angle-2.png" style=" filter: drop-shadow(5px 20px 5px #d3753c);margin-top: -57px;" alt="">
                </div>
            </div>

        </div>
    </section>


    <!-- Description section -->

   <section style="padding:54px;" class="background-image res-padding">
        <h3 style="color: #052148;font-weight: 900;font-size: 27px;">DESCRIPTION</h3>
        <div style="color: #000;font-size: 19px;">



            <p>An Angle Transducer is a specialized sensor device that measures angular displacement, converting
                mechanical rotation into electrical signals, widely used in various applications such as robotics,
                aerospace, and industrial automation for precise angle detection.
            </p>
            <div style="display:flex;align-items:baseline;padding-top:1rem">
                <img class="mx-2" style="width: 27px;" src="/assets/img/products/arrow.png" alt="">
                <p> Angle transducers
                    precisely measure angles or rotational movement in mechanical systems, ensuring accurate position
                    tracking.



                </p>

            </div>

            <div style="display:flex;align-items:baseline;padding-top:1rem">
                <img class="mx-2" style="width: 27px;" src="/assets/img/products/arrow.png" alt="">
                <p> Imbibing the latest all effect based position sensing integrated circuits
                    they offer versatile solutions for
                    different applications.



                </p>

            </div>

            <div style="display:flex;align-items:baseline;padding-top:1rem">
                <img class="mx-2" style="width: 27px;" src="/assets/img/products/arrow.png" alt="">
                <p> Integral to motion
                    control systems, angle transducers enable machines to move precisely,and robotics.



                </p>

            </div>
            <div style="display:flex;align-items:baseline;padding-top:1rem">
                <img class="mx-2" style="width: 27px;" src="/assets/img/products/arrow.png" alt="">
                <p>Used in
                    safety-critical applications like master controllers, quick closing non return valves, ID/PD/OD fans in thermal power plants etc.., these transducers ensures precise monitoring of the position of the rotating components.



                </p>

            </div>
            <div style="display:flex;align-items:baseline;padding-top:1rem">
                <img class="mx-2" style="width: 27px;" src="/assets/img/products/arrow.png" alt="">
                <p>Compact, IP67 complaint and
                    adaptable, angle transducers are engineered to fit into tight spaces.



                </p>

            </div>

            <div class="py-3" style="display:flex;align-items:baseline">
                <img class="mx-2" style="width: 27px;" src="/assets/img/products/arrow.png" alt="">
                <p>The output can be configured to the customer requirements like 0-24mA, BCD/greycode, voltage in linear and non-linear wave forms.



                </p>

            </div>

            <div class="download" style="position: relative;">

                <h3 style="color: #052148;font-weight: 900;font-size: 27px;text-align: center;"> Product Details : <span style="font-size: 22px;font-weight: 500;" class="mx-2 spec">Specifications and Information</span>
                </h3>

               <div class="res-right" style="text-align:center">
                    <a onclick="openPopup()" style="display: inline-flex; align-items: center; text-decoration: none;">
<div style="text-align:center">
       <h3 style="color: #052148; font-weight: 500; font-size: 22px; text-align: center; margin: 0;">Click Here to Download <img  style="margin-right: 10px;" src="/assets/img/patterns/downloading.png" alt=""> </h3>
</div>
                     
                    </a>
                    <div class="popup-form-container">
                        <div class="popup-close-button">

                            <!-- Your form content goes here -->
                            <form method="post" class="form-container1">
                                <div class="wrong" style="display: flex; justify-content: flex-end; font-weight: 800;">
                                    <button onclick="closePopup()" style="cursor:pointer">X</button>
                                </div>
                                <h1 class="mb-3" style="color:#00204A;font-size:20px">Please Fill the Form for the Approval Of Download</h1>

                                <div class="form-group mb-3 form-horizontal clearfix">
                                    <input class=" box-shadow-primary form-control" name="name" type="text" placeholder="Name" id="name" autocomplete="off" required />
                                </div>
                                <div class="form-group mb-3">
                                    <input class="box-shadow-primary form-control" name="mobile" type="number" placeholder="Mobile" id="mobile" autocomplete="off" required />
                                </div>
                                <div class="form-group mb-3">
                                    <input class="box-shadow-primary form-control" name="email" type="email" placeholder="Email" id="email" autocomplete="off" required />
                                </div>
                                <div class="form-group mb-3">
                                    <input class="box-shadow-primary form-control" name="company" type="qualification" placeholder="Company" id="company" autocomplete="off" required />
                                </div>

                                <div class="form-group mb-3">
                                    <input class="box-shadow-primary form-control" name="productName" id="productName" type="text" placeholder="Product Name" autocomplete="off" required />
                                </div>
                                <div class="form-group mb-3">
                                    <input class="box-shadow-primary form-control" name="document" id="document" type="text" placeholder="What is the Purpose of Document" autocomplete="off" required />
                                </div>



                                <div class="form-group mb-3">
                                    <input class="box-shadow-primary form-control" name="subject" id="subject" type="text" placeholder="Subject" autocomplete="off" required />
                                </div>
                                <div class="form-group mb-3">
                                    <textarea style="width:100%;border:1px solid #ced4da" id="partnerInquiry" name="message" rows="2" cols="50" placeholder="  Brief About You"></textarea>
                                </div>

                                <div>
                                    <div class="button">
                                        <button type="submit" name="send">
                                            Send <i class="fa-solid fa-paper-plane color-white margin-left-1-rem"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>



        </div>

        </div>


    </section>



    <!-- Hiring Form Starts Here -->

    <style>
        .background1 {
            background-image: url(/assets/img/patterns/3.png);


        }
    </style>


    <div class="background1">
        <div class="footer-img" style="background-image: url(/assets/img/logo/Group\ 186.png);width: 100%;height: 370px;background-size: cover;">


            <footer class="footer " style="width: 100%;background-size: cover;">

                <div class="footer-row row" style="margin-top: 45px;">
                    <div class="footer-col" style="top: 120px;">

                        <p class="footer-about"> M/S.SAITRONIX ELECTRO DRIVES PVT.LTD. SCOPE IS TO DESING DEVELOP MANUFACTURE, SUPPLY AND SERVICE ELECTRICAL, ELETRONICS, MECHANICAL AND ELECTROMECHANILAL CONTROL SYSTEM SOLUTIONS TO OUR CUSTOMERS</p>
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

                    <div class="footer-col office-section">
                        <h3 class="office" style="color: #fff;font-weight: 700;">Office <div class="bottom-line">
                                <span></span>
                            </div>
                        </h3> <span> <i class="fa-solid fa-location-dot location"></i>
                            <p style="font-size: 15px;width: 100%;text-align: justify;">Plot no: 2-10-168, Besides
                                Ganesh temple,
                               EC Nagar, Cherlapally,  Hyderabad, Telangana-500051</p>
                        </span>
                        <i class="fa-solid fa-envelope envelope"></i>
                        <p class="footer-email"><a href="mailto:agniteja@saitronix.in" style="margin-top: 10px;">
                                agniteja@saitronix.in <br> info@saitronix.in</p> </a><i class="fa-solid fa-phone phone"></i>
                        <h4 style="text-align: initial; color: #fff;"> <a href="tel:+91-7671953161">
                                +91-7671953161 <br> +91-9866766144</h4></a>
                    </div>

                    <div class="footer-col links-section">
                        <h3 class="links" style="color: #fff;font-weight: 700;">Links <div class="bottom-line">
                                <span></span>
                            </div>
                        </h3>
                    <ul>
                        <li><a href="../../index.php">HOME</a></li>
                        <li><a href="../../company_profile.html">COMPANY PROFILE</a></li>

                        <li><a href="../Electro-Locomotives/dni.php">ELECTRIC LOCOMOTIVE</a></li>
                        <li><a href="../Diesel-locomotives/dmc.php">DIESEL LOCOMOTIVE</a></li>
                        <li><a href="../../contact.php">CONTACT US</a></li>
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
                        <li><a href="../../index.php">HOME</a></li>
                        <li><a href="../../company_profile.html">COMPANY PROFILE</a></li>

                        <li><a href="../Electro-Locomotives/dni.php">ELECTRIC LOCOMOTIVE</a></li>
                        <li><a href="../Diesel-locomotives/dmc.php">DIESEL LOCOMOTIVE</a></li>
                        <li><a href="../../contact.php">CONTACT US</a></li>
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
                        <a href="../../index.php">Home</a>
                    </li>
                    <li class="has-children">
                        <a href="#">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="../../our_phylosophy.html">Our Philosophy</a></li>
                            <li><a href="../../Board-of-Directors.html">Board Of Directors</a></li>
                            <li><a href="../../company_profile.html">Company Profile </a></li>
                            <li><a href="../../quality_policy.html">Quality Policy</a></li>
                            <li><a href="../../r&d.html">Research and Development</a></li>

                            <li><a href="../../customers.html">Customers</a></li>
                        </ul>
                    </li>
                    </li>
                    <!-- Example starts here  -->
                    <li class="has-children">
                        <a href="#"> Credentials</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="../../supply-credentials.php">Supply Performance Credentials</a>
                            </li>
                            <li>
                                <a href="../../statutary-credentials.php">Statutary Credentials</a>
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
                                        <a href="../Electro-Locomotives/dni.php">Digital Notch Indicator</a>
                                        <a href="../Electro-Locomotives/vcd.php">Vigilance Control Device</a>
                                        <a href="../Electro-Locomotives/stmc.php">Stick Type Master Controller</a>
                                        <a href="../Electro-Locomotives/3plm.php">3 Phase Loco Master Controller</a>
                                        <a href="../Electro-Locomotives/fde.php">Fire Detector Equipment</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Diesel Locomotive</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/products/Diesel-locomotives/dmc.php">Diesel Master Controller</a>
                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Electrical Multiple Units</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/products/Electrical-multiple-units/emc.php">EMU Master Controller</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Encoders</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="/products/encoders/at.php">Angle
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

                            <li><a href="../../service_req_form.php">Service req.Form</a></li>
                            <li><a href="../../enquiry-form.php">Enquiry Form</a></li>

                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="../../contact.php">Contact us</a>

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
                        <a href="../../index.php">Home</a>
                    </li>
                    <li class="has-children">
                        <a href="#">About Us</a>
                        <ul class="sub-menu">
                            <li><a href="../../our_phylosophy.html">Our Philosophy</a></li>
                            <li><a href="../../Board-of-Directors.html">Board Of Directors</a></li>
                            <li><a href="../../company_profile.html">Company Profile </a></li>
                            <li><a href="../../quality_policy.html">Quality Policy</a></li>
                            <li><a href="../../r&d.html">Research and Development</a></li>

                            <li><a href="../../customers.html">Customers</a></li>
                        </ul>
                    </li>
                    </li>
                    <!-- Example starts here  -->
                    <li class="has-children">
                        <a href="#"> Credentials</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="../../supply-credentials.php">Supply Performance Credentials</a>
                            </li>
                            <li>
                                <a href="../../statutary-credentials.php">Statutary Credentials</a>
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
                                        <a href="../Electro-Locomotives/dni.php">Digital Notch Indicator</a>
                                        <a href="../Electro-Locomotives/vcd.php">Vigilance Control Device</a>
                                        <a href="../Electro-Locomotives/stmc.php">Stick Type Master Controller</a>
                                        <a href="../Electro-Locomotives/3plm.php">3 Phase Loco Master Controller</a>
                                        <a href="../Electro-Locomotives/fde.php">Fire Detector Equipment</a>
                                    </li>
                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Diesel Locomotive</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="../Diesel-locomotives/dmc.php">Diesel Master Controller</a>


                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Electrical Multiple Units</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="../Electrical-multiple-units/emc.php">EMU Master Controller</a>


                                    </li>

                                </ul>
                            </li>
                            <li class="has-children">
                                <a href="#">Encoders</a>
                                <ul class="sub-menu">
                                    <li>
                                        <a href="../encoders/at.php">Angle
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

                            <li><a href="../../service_req_form.php">Service req.Form</a></li>
                            <li><a href="../../enquiry-form.php">Enquiry Form</a></li>

                        </ul>
                    </li>
                    <li class="has-children">
                        <a href="../../contact.php">Contact us</a>

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
    <!-- <script>
        $(document).ready(function () {
            $(".slider-area").owlCarousel({
                items: 1,
                loop: true,
                nav: true,
                autoplay: true
            });
        });
    </script> -->
    <script>
        function openPopup() {
            document.querySelector('.popup-form-container').style.display = 'block';
        }

        function closePopup(inputId) {
            document.querySelector('.popup-form-container').style.display = 'none';
            document.querySelector('.popup-form-container').style.display = 'none';
            document.getElementById('name').value = ''
            document.getElementById('mobile').value = ''
            document.getElementById('email').value = ''
            document.getElementById('company').value = ''
            document.getElementById('productName').value = ''
            document.getElementById('document').value = ''
            document.getElementById('subject').value = ''
            document.getElementById('partnerInquiry').value = ''

        }
    </script>
    <script>
        // Get the input element
        const mobileInput = document.getElementById('mobile');

        // Limit the number of digits allowed
        mobileInput.addEventListener('input', function(event) {
            if (this.value.length > 10) {
                this.value = this.value.slice(0, 10);
            }
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