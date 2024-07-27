<?php
include('config.php');
session_start();


?>
<!DOCTYPE html>
<html lang="en">

<head>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords"
        content="Online book center, Government exam materials rental, book rental, TNPSC, SSC, UPSC, BANKING, career guidance, Youtube videos, magazine subscription, institute courses, test packs for government exam preparations" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description"
        content="EA Dream Supporters is an ED tech business that began to care about the career aspirations of Indian youngsters. Numerous youths struggled to locate the appropriate resources and opportunities for their dream. So EA creates Dream Supporting Services, a unique one-stop portal for competitive test preparation. We support youth by acting as a prodding force for their desired course." />

    <!-- FAVICONS ICON -->
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v3.0.6/css/line.css">
    <!-- PAGE TITLE HERE -->
    <title>GovPrep - EA Dream Supporters</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <!-- STYLESHEETS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="icons/fontawesome/css/all.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/dist/css/bootstrap-select.min.css">

    <!-- GOOGLE FONTS-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <style>
    .error {
        color: #FF0001;
    }

    .section-head {
        margin-bottom: 219px;
    }

    iframe {
        width: 100%;
        height: 500px;
    }

    .rwd-media {
        position: relative;
        width: 100%;
        height: 0;
        padding-bottom: 56.25%;
        /* 16:9 */
    }

    .rwd-media iframe,
    .rwd-media video {
        position: absolute;
        width: 100%;
        height: 100%;
    }

    .pricing-card {
        display: flex;
        border: 1px solid #ddd;
        border-radius: 15px;
        background-color: #fff;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        width: 90%;
        max-width: 1064px;
        overflow: hidden;
        position: relative;
        right: -57px;
    }

    .card-logo {
        padding: 20px;
        background-color: transparent;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .card-logo i {
        font-size: 48px;
        color: #fff;
    }

    .card-content {
        padding: 20px;
        flex: 1;
    }

    .plan-title {
        font-size: 24px;
        margin-bottom: 10px;
    }

    .plan-price {
        font-size: 32px;
        color: #4CAF50;
        margin-bottom: 20px;
    }

    .plan-description p {
        font-size: 18px;
        margin: 5px 0;
    }

    .card-select {
        margin-top: 20px;
        text-align: center;
    }

    .card-select select {
        padding: 10px;
        font-size: 16px;
        border-radius: 10px;
        border: 1px solid #ddd;
        width: 16%;
    }

    @media (max-width: 768px) {
        .pricing-card {
            flex-direction: column;
        }

        .card-logo {
            border-right: none;
            border-bottom: 1px solid #ddd;
        }

        .card-select select {
            width: 100%;
        }
    }
    </style>

</head>

<body>
    <div class="page-wraper">
        <div id="loading-area" class="preloader-wrapper-2">
            <div class="preloader-inner">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
        <!-- Header -->

        <?php  include'header1.php'; ?>
        <!-- Header End -->

        <div class="page-content bg-white">
            <!--banner-->
            <div class="dz-bnr-inr overlay-secondary-dark dz-bnr-inr-sm"
                style="background-image:url(images/background/bg3.jpg);">
                <div class="container">
                    <div class="dz-bnr-inr-entry">
                        <h1>GovPrep</h1>
                        <nav aria-label="breadcrumb" class="breadcrumb-row">
                            <ul class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item">GovPrep</li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>

            <!--Our Mission Section-->
            <section class="content-inner-1 bg-light" style="padding-bottom: 1px;">
                <div class="container">
                    <div class="section-head text-center " style="margin-bottom: 100px;">
                        <h2 class="title">What is GovPrep?</h2><br><br>
                        <iframe width="448" height="252" src="https://www.youtube.com/embed/QCv6oALIpow?si=obkGx1t31fEyOHfh"
                            title="YouTube video player" frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            allowfullscreen></iframe>
                    </div>
                </div>
            </section>
            <!--icon-box3 section-->
            <?php include('subscriptionplan.php');?>

            <!-- Testimonial -->

            <!-- Testimonial End -->

            <style>
            .newsletter-wrapper {
                box-shadow: 0px 10px 1px rgba(0, 0, 0, 0.2);
            }
            </style>
            <!-- Feature Box -->
            <section class="py-5 newsletter-wrapper style-2" style="background-image: url('images/background/bg1.jpg'); background-size: cover;margin-bottom: 192px;
">
                <div class="container">
                    <div class="subscride-inner">
                        <div
                            class="row style-1 justify-content-xl-between justify-content-lg-center align-items-center text-xl-start text-center">
                            <div class="card-logo">
                                <img src="images/background/Gov.svg" alt="" height="100px" width="150px">
                            </div>
                            <div class="col-xl-7 col-lg-12 wow fadeInUp" data-wow-delay="0.1s">
                                <div class="section-head mb-0">
                                    <style>
                                    .d {
                                        font-family: poppins;
                                        font-weight: bolder;
                                        color: white;
                                    }
                                    </style>
                                    <h2 class="title text-primary my-lg-3 mt-0">ESSENTIAL</h2>
                                    <p class="d">Looking For Only Personalised Preparation Management?
                                    </p>
                                </div>
                            </div>
                            </br>
                            <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">


                            <style>
                                .fs{
                                    width:250px;
                                    text-align:center;
                                    border-radius:80px !important;
                                    border:1px solid black;
                                    padding:10px 0;
                                    appearance:none !important;
                                }
                                
                            </style>

                                <div class="footer-logo logo-white">
                                    <div class="select-exam">
                                        <select class="fs" style="color: #4e4b8a;border-radius:3px;">
                                            <option>Select Exam </option>
                                            <option>Select Exam1</option>
                                            <option>Select Exam2</option>



                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-5 col-lg-6 wow fadeInUp" data-wow-delay="0.2s">



                                <div class="footer-logo logo-white">

                                    <?php 
                                                
												if(strlen($_SESSION['id']) == 0)
												  {   
													  ?>

                                    <div><a class="btn btn-primary" href="register.php">
                                            <i aria-hidden="true" style="padding-right: 5px;"></i>

                                            Buy Now
                                        </a></div>

                                    <?php
												 

												  } else{

													  ?>

                                    <button class="btn btn-secondary btnhover2"> <i class="bi-cart-fill me-1"></i>
                                        Buy Now
                                    </button>


                                    <?php
													  
													  
													  } 
												  
										  ?>



                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </section>
            <!-- FORM -->
            <div class="page-content">
                <section class="contact-wraper1">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 d-flex justify-content-center align-items-center"
                                style="margin-top: -50px;">
                                <style>
                                .contact-info {
                                    height: 100%;
                                    width: 100%;
                                    background-size: cover;
                                    background-repeat: no-repeat;
                                    background-position: center;
                                    position: relative;
                                }

                                .contact-info:after {
                                    bottom: 0px;
                                    right: -7px;
                                    position: absolute;
                                    content: "";
                                    width: 90%;
                                    z-index: 1;
                                    height: 70%;

                                    border-top: 52px solid transparent;
                                    border-left: 52px solid transparent;
                                    border-bottom: 52px solid #eaff00;
                                    border-right: 52px solid #eaff00;
                                }

                                @media(max-width:768px) {
                                    .contact-info {
                                        height: 100vh;
                                    }

                                    .contact-info:after {

                                        bottom: 0px;
                                        right: 0px;
                                        position: absolute;
                                        content: "";
                                        /* width: 254px;
                                        height: 254px; */
                                        z-index: 1;


                                        border-top: 22px solid transparent;
                                        border-left: 22px solid transparent;
                                        border-bottom: 22px solid #eaff00;
                                        border-right: 22px solid #eaff00;

                                    }

                                }
                                </style>
                                <div class="contact-info"
                                    style="background-image: url(images/background/avatar.png); background-repeat:no-repeat!important;">


                                </div>
                            </div>
                            <div class="col-md-6 m-b40">
                                <div class="contact-area1 m-r20 m-md-r0"
                                    style="  background-color: #eae7e4;margin-bottom: -40px;">
                                    <div class="section-head style-1">
                                        <h6 class="sub-title text-primary">Register Now</h6>
                                        <h3 class="title m-b20" style="margin-bottom: -193px;">To Kick Start Your Dream!
                                        </h3>
                                    </div>
                                    <form id="myform">
                                        <p>Name<span class="error">* <?php echo $nameErr; ?> </span></p>
                                        <div class="input-group">
                                            <input required type="text" class="form-control" name="name"
                                                placeholder="Full Name">
                                        </div>
                                        <p>Date Of Birth</p>
                                        <div class="input-group">
                                            <input required type="date" class="form-control" name="dob"
                                                value="Full Name">
                                        </div>
                                        <p>Email<span class="error">* <?php echo $emailErr; ?></p>
                                        <div class="input-group">
                                            <input required type="email" class="form-control" name="email"
                                                placeholder="Email Adress">
                                        </div>
                                        <p>Contact<span class="error">* <?php echo $mobilenoErr; ?> </span> </p>
                                        <div class="input-group">
                                            <input required type="tel" class="form-control" name="phone"
                                                pattern="[0-9]{10}" placeholder="Phone No.">
                                        </div>
                                        <div class="form-group">

                                            <label for="plan">Choose Plan</label>
                                            </br>
                                            <select required class="form-control" id="plan" name="plan" required>
                                                <option value="">Choose Plan</option>
                                                <option value="Fresh" data-plan="1000">Fresh</option>
                                                <option value="Plus" data-plan="2500">Plus</option>
                                                <option value="Enterprise" data-plan="5000">Enterprise</option>

                                            </select>
                                        </div></br>
                                        <div class="form-group">

                                            <label for="sel1">Proffession</label>
                                            </br>
                                            <select required name="passed" class="form-control" id="sel1">
                                                <option value="">Select Proffession</option>
                                                <option value="Student">Student</option>
                                                <option value="Working Proffessional">Working Proffessional</option>
                                                <option value="Full Time Aspirants">Full time Aspirants</option>
                                                <option value="Enterprise Owner/CEO/Senior Level Officer">Enterprise Owner/CEO/Senior Level Officer</option>
                                                <option value="Enterprise Managers/Officers">Enterprise Manager/Officers</option>

                                            </select>
                                        </div></br>
                                        
                                        <p>Address</p>
                                        <div class="input-group">
                                            <input required type="text" class="form-control" name="address"
                                                placeholder="Address">
                                        </div>
                                        <div class="input-group">
                                            <textarea required name="subject" rows="5" class="form-control"
                                                placeholder="Message"></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <div required class="g-recaptcha"
                                                data-sitekey="6LfZlSETAAAAAC5VW4R4tQP8Am_to4bM3dddxkEt"></div>
                                        </div>
                                        <?php
									 if($_SESSION["id"])
{
									 ?>
                                        <div>
                                            <button name="send" type="submit" value="submit"
                                                class="btn w-100 btn-primary btnhover" id="buy">SUBMIT</button>
                                        </div>
                                        <?php
} else{
									?>
                                        <div>
                                            <a href="" class="btn w-100 btn-primary btnhover" data-bs-toggle="modal"
                                                data-bs-target="#myModal">Login to get guidance</a>
                                        </div>
                                        <?php
}
									?>

                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>



            <!-- Newsletter -->

            <!-- Newsletter End -->

        </div>

        <!-- Footer -->
        <?php include'footer-white.php'; ?>
        <!-- Footer End -->

        <button class="scroltop" type="button"><i class="fas fa-arrow-up"></i></button>
    </div>

    <!-- JAVASCRIPT FILES ========================================= -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script src="js/jquery.min.js"></script><!-- JQUERY MIN JS -->
    <script src="vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script><!-- BOOTSTRAP MIN JS -->
    <script src="vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script><!-- BOOTSTRAP SELECT MIN JS -->
    <script src="vendor/swiper/swiper-bundle.min.js"></script><!-- SWIPER JS -->
    <script src="vendor/counter/waypoints-min.js"></script><!-- WAYPOINTS JS -->
    <script src="vendor/counter/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script src="js/dz.carousel.js"></script><!-- DZ CAROUSEL JS -->
    <script src="js/dz.ajax.js"></script><!-- AJAX -->
    <script src="js/custom.js"></script><!-- CUSTOM JS -->
    <script src="vendor/wow/wow.min.js"></script><!-- WOW JS -->




    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

    <script>
    $('body').on('click', '#buy', function(e) {


        var form = $("#myform")[0]; // Get the form element
        var frm = new FormData(form); // Create FormData object

        var requiredFieldsFilled = true; // Assume all required fields are filled initially

        // Iterate through each input/select/textarea element in the form
        $(form).find("input, select, textarea, file, checkbox, radio").each(function() {
            // Check if the element has the "required" attribute
            if ($(this).prop("required")) {
                // If the value of the element is empty, set requiredFieldsFilled to false
                if ($(this).val().trim() === '') {
                    requiredFieldsFilled = false;
                    return false; // Break out of the loop if any required field is empty
                }
            }
        });

        if (requiredFieldsFilled) {



            var form = $("#myform")[0];
            var frm = new FormData(form);
            // var total = $(".total").val();
            var total = $("#plan option:selected").data("plan");
            frm.append('total', total);
            var options = {






                // "key": "rzp_test_RJn81fRP4u1OSA", //test  

                "key": "rzp_live_JIQ5usrR7RioCy", //  live
                "amount": (total * 100), // 2000 paise = INR 20
                "name": "EA Dreams",
                "description": "Payment",
                "image": "images/logo.png",
                "handler": function(response) {
                    frm.append('razorpay_payment_id', response
                        .razorpay_payment_id); // Append Razorpay payment ID to the FormData object
                    $.ajax({
                        url: 'stepform1.php',
                        type: 'post',
                        processData: false,
                        contentType: false,
                        dataType: 'json',
                        data: frm,
                        success: function(response) {
                            window.location.href = 'stepform2.php';
                        },
                        error: function(xhr, status, error) {

                            window.location.href = 'failed.php';
                        }
                    });
                },
                "theme": {
                    "color": "#528FF0"
                }
            };

            var rzp1 = new Razorpay(options);
            rzp1.open();
            e.preventDefault();


        } else {

        }


    });
    </script>
</body>

</html>