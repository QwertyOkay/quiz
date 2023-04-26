<?php
$user_ip = $_SERVER['REMOTE_ADDR'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <script src="./index_files/jquery-3.6.0.js.загружено" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qprofit-Automated</title>
    <meta name="robots" content="noindex">
    <link rel="stylesheet" href="./index_files/validation.css">
    <!-- main css here -->
    <link rel="stylesheet" href="./index_files/style.css">
    <link rel="stylesheet" href="./index_files/intlTelInput.css">
    <!-- Bootstrap here  -->
    <link rel="stylesheet" href="./index_files/bootstrap.min.css">
    <link rel="stylesheet" href="./index_files/bootstrap.bundle.min_1.js.загружено">
    <!-- google fonts  -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="manifest" href="/site.webmanifest">
</head><body>
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin="">
    <link href="./index_files/css2" rel="stylesheet">
    <link rel="stylesheet" href="./index_files/font-awesome.min.css">
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css"
    />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <link rel="stylesheet" href="custom.css">

    <!-- script here -->
    <style>
        .hide {
            display: none;
            color: #dc3545;
            font-size: 0.875em;
        }

        .show {
            display: block;
            color: #dc3545;
            font-size: 0.875em;
        }

        .video {
            position: absolute;
            width: 100%;
            left: 0;
            height: auto;
            top: 0; 
        }
            @media screen and (min-width:1200px) {
                .video {
                    width: 100%;
                }

                @media screen and (min-width:1600px) {
                .video {
                    width: 100%;
                }    
            }
        } 
    </style>

    <section id="hero_header">

        <section id="watchtime">
            <div class="watching_now d-flex justify-content-center align-items-center text-centerpt-2">
                <div class="dot active"></div>
                <h6 class="all_h6 px-2">
                    <span id="people">614</span> <span></span> users watching now
                </h6>
            </div>
        </section>

        <section id="navbar" class="clearfix">
            <div class="container">
                <nav class="navbar navbar-expand-md pt-4" aria-label="navigation">
                    <div class="container-fluid navbar-top">
                        <a class="navbar-brand" href="#"><img src="./index_files/logo.png" alt=""></a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"><i class="fa fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse text-center" id="mainNavbar">
                            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                                <li class="nav-item px-2 py-2">
                                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                                </li>
                                <li class="nav-item px-2 py-2">
                                    <a class="nav-link" href="#">AI Power</a>
                                </li>
                                <li class="nav-item px-2 py-2">
                                    <a class="nav-link" href="#">Features</a>
                                </li>
                                <li class="nav-item px-2 py-2">
                                    <a class="nav-link" href="#">Media</a>
                                </li>
                                <li class="nav-item px-2 py-2">
                                    <a class="nav-link" href="#">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
            </div>
        </section>
        <!-- navbar end here  -->

        <!-- Header container contet here -->

        <section id="header_contact" class="pb-5">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 offset-md-1 pb-3 pt-5">
                        <div class="hero_heading text-center animate__animated animate__pulse">
                            <h1>
                                World Class<br> Automated Trading System
                            </h1>
                        </div>
                    </div>

                    <div class="col-md-5 offset-md-1 d-flex justify-content-center">
                        <div class="graph_img" style="position: relative;">
                            <img src="./index_files/Group 72.png" alt="graph" class="img-fluid">

                            <video class="video"
                            controls 
                            loading="lazy"
                            muted="muted" 
                            autoplay="autoplay" 
                            loop playsinline>
                                <source src="../Content/QuantumAI_land_V1_EN.mp4">
                            </video>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="register_form pt-3 pb-5">
                            <div class="form_heading">
                                <h3 class="all_h3">
                                    <span class="form_span">Don't Miss This</span> Opportunity
                                </h3>
                            </div>
                            <form class="lead-form" action="/Qntmsys/thanks.php" method="POST">
                                <input type="text" name="fname" placeholder="Name" class="first_name" id="first_name" required>
                                <input type="text" name="lname" placeholder="Surname" class="last_name" id="last_name" required>
                                <input id="phone" type="tel" name="phone" class="phone" id="phone" required>
                                <input type="email" name="email" placeholder="Email" class="email" id="email" required>
                                <input type="hidden" name="user_ip" value="<?php echo $user_ip; ?>">
                                <input type="hidden" id="phone_code" name="phone_code" value="">
                                <button>Send</button>
                            </form>
                            <div class="alert alert-info" style="display: none;"></div>
                            <script>
                                function getIp(callback) {
                                    fetch('https://ipinfo.io/json?token=0542d545be9aa2', { headers: { 'Accept': 'application/json' }})
                                    .then((resp) => resp.json())
                                    .catch(() => {
                                        return {
                                        country: 'us',
                                        };
                                    })
                                    .then((resp) => {
                                        callback(resp.country)
                                    });
                                }
                                var input = document.querySelector("#phone");
                                window.intlTelInput(input, {
                                    separateDialCode: true,
                                    initialCountry: "auto",
                                    geoIpLookup: getIp,
                                    utilsScript:
                                    "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                                })

                                setTimeout(() => {
                                    var phoneCode = document.querySelector(".iti__selected-dial-code");
                                    var phoneCodeContent = phoneCode.textContent;
                                    console.log('phone code', phoneCodeContent);
                                    document.getElementById('phone_code').value = phoneCodeContent;
                                }, 3000);
                              </script>
                            <style>
                                .valid {
                                    border: 1px solid green;

                                }

                                .notvalid {
                                    border: 1px solid red !important;
                                }

                                .notvalidphone {

                                    border: 1px solid red !important;
                                }
                            </style>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- hero header content end here -->

        <section id="feature_sec" class="clearfix" style="padding: 90px 0">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="features-box text-center">
                            <img src="./index_files/Storage.png" alt="storage" class="img-fluid">
                            <h5 class="all_h5">Social Platform</h5>
                            <p class="all_p px-3">
                                Join the Social revolution. Subscribe to discuss strategies. You don't need to be an
                                expert. Join a community of over 190,149 users.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-box text-center">
                            <img src="./index_files/insurance.png" alt="storage" class="img-fluid">
                            <h5 class="all_h5">Security Protection</h5>
                            <p class="all_p px-3">
                                Your account is protected by industry-leading security protocols.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="features-box text-center">
                            <img src="./index_files/leading.png" alt="storage" class="img-fluid">
                            <h5 class="all_h5">Automate Your Trading</h5>
                            <p class="all_p px-3">
                                and take your emotion out of the equation Gain access to an expert suite of tools like
                                our automated trading bot or our trailing features that help you buy/sell better than
                                before.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>

    <section id="account_sec" class="clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <div class="create_acc_des">
                        <h2 class="all_h2">
                            Create An <span class="inside_h2">Account</span> <br> With Three Simple Steps
                        </h2>
                    </div>
                </div>
                <div class="col-md-5 offset-md-1 py-5">
                    <div class="account_featues py-1">
                        <img src="./index_files/createacc.png" alt="Create account" class="img-fluid">
                        <h4 class="all_h4 d-inline-block ps-3">Create Account</h4>
                        <p class="all_p py-2">Submit your details in the form</p>
                    </div>
                    <div class="account_featues py-1">
                        <img src="./index_files/linktobank.png" alt="">
                        <h4 class="all_h4 d-inline-block ps-3">
                            Link to Your Bank Account
                        </h4>
                        <p class="all_p py-2">
                            Make sure you are able to receive back your profits
                        </p>
                    </div>
                    <div class="account_featues py-1">
                        <img src="./index_files/starttrading.png" alt="">
                        <h4 class="all_h4 d-inline-block ps-3">Start Profiting</h4>
                        <p class="all_p py-2">
                            All done! The system will automatically start and you can sit back, relax, and enjoy the
                            show!
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="stockPortfolio_sec">
        <div class="container">
            <div class="Portfoliostock">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center mt-5 mb-5 pt-5">
                        <h2 class="all_h2">
                            Start Your <span class="inside_h2">Portfolio</span>
                        </h2>
                        <p class="portfolio_p pt-2">
                            Unlimited options at your fingertips. The biggest companies in the world
                        </p>
                    </div>
                    <div class="portfolioImg d-flex justify-content-between mb-5 pt-2 pb-5">
                        <div class="folio_imge">
                            <img src="./index_files/apple.png" alt="Apple" class="img-fluid">
                        </div>
                        <div class="folio_imge">
                            <img src="./index_files/shop.png" alt="Shop" class="img-fluid">
                        </div>
                        <div class="folio_imge">
                            <img src="./index_files/twtr.png" alt="Twitter" class="img-fluid">
                        </div>
                        <div class="folio_imge">
                            <img src="./index_files/pypl.png" alt="Paypal" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <!-- portfolio section carousel -->
            <div class="portfolio_carousel_sec">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2 text-center mt-5 mb-5 pt-5">
                            <h2 class="all_h2">
                                Start Your <span class="inside_h2">Portfolio</span>
                            </h2>
                            <p class="portfolio_p">
                                Get real time notifications about all vital market events, trends,
                                <br> increase and decreases Get real time
                            </p>
                        </div>
                    </div>
                    <div id="portfolioCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <div class="row">
                                <div class="col-md-4 offset-md-4">
                                    <!-- Slideshow container -->
                                    <div class="slideshow-container">

                                        <!-- Full-width images with number and caption text -->
                                        <div class="mySlides " style="display: block;">
                                            <img src="./index_files/1.png" style="width:90%;padding-left: 12%;">

                                        </div>

                                        <div class="mySlides " style="display: none;">
                                            <img src="./index_files/2.png" style="width:90%;padding-left: 12%;">
                                        </div>

                                        <div class="mySlides " style="display: none;">
                                            <img src="./index_files/3.png" style="width:90%;padding-left: 12%;">
                                        </div>

                                        <div class="mySlides " style="display: none;">

                                            <img src="./index_files/4.png" style="width:90%;padding-left: 12%;">
                                        </div>

                                        <!-- Next and previous buttons -->
                                        <a class="prev carousel-control-prev-icon" onclick="plusSlides(-1)"></a>
                                        <a class="next carousel-control-next-icon" onclick="plusSlides(1)"></a>
                                    </div>
                                    <br>

                                    <!-- The dots/circles -->


                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- portfolio section carousel end here  -->

            <div class="automated_system py-5">
                <div class="row">
                    <div class="col-md-6 py-5">
                        <div class="automated_system_des animate__animated animate__slideInLeft">
                            <h2 class="all_h2">
                                <span class="inside_h2">Trade</span> Without <br>Fear
                            </h2>
                            <p class="all_p pt-2">
                                Practice daring new strategies risk-free while mastering tools. Even Backtest your
                                strategies, so you can keep tweaking until it is effective.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="automated_img animate__animated animate__zoomIn">
                            <img src="./index_files/aumated.png" alt="automated" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="applicationAndMedia">
        <div class="container">
            <div class="buySell pt-5">
                <div class="row flex-md-row-reverse">
                    <div class="col-md-6">
                        <div class="stockshare_des animate__animated animate__slideInRight">
                            <h2 class="all_h2">
                                <span class="inside_h2">Team Up</span> <br> To Profit Big Using Social Trading
                            </h2>
                            <p class="all_p pt-2">
                                Join the Social revolution. Subscribe to discuss strategies with fellow traders. You
                                don't need to be an expert.
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="stockshare_img animate__animated animate__slideInLeft">
                            <img src="./index_files/buysell.png" alt="BuySell" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>

            <div class="download_app">
                <div class="row">
                    <div class="col-md-6">
                        <div class="download_app_des wow slideInLeft">
                            <h2 class="all_h2">
                                AI Powered Auto Trading <br>
                                <span class="inside_h2">At Your Fingertips</span>
                            </h2>
                            <p class="all_p pt-2">
                                The most powerfull tools in the market. Strategy Designer,Exchange/Market
                                Arbitrage,Market-Making, and more!
                            </p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="download_app_img animate__animated animate__jackInTheBox">
                            <img src="./index_files/download.png" alt="Download" class="img-fluid">
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>

    <section id="footer">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 offset-sm-2 text-center pt-5 pb-2">
                    <h2 class="all_h2">
                        Don’t Miss <span class="inside_h2">This Incredible System</span>
                    </h2>
                </div>
                <div class="col-md-4 offset-md-4 text-center pb-2">
                    <div class="try_btn pt-2 pb-4">
                        <a href="#"><button class="btn btn-primary">Try now</button></a>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <p class="all_p">
                        Check our <a href="#form" target="_blank" class="inside_h2">Privacy Policy</a> &amp;
                        <a href="#form" target="_blank" class="inside_h2">Terms and Condition</a>
                    </p>
                    <p class="all_p">The above software is fictitious and illustrative of arbitrage software offered on the market. The content of this website is purely for promotional purposes for a trading platform where the customer may be able to use similar software. The operator of this website dissociates itself as a precautionary measure from all statements of the operator of the trading platform towards the customer. The operator of this website points out that he knows neither the content of the website of the trading provider nor its operational procedures in detail and strongly recommends the visitor of this website to deal independently with the appropriate contents and statements.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- -modal here -->
    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="registration_popup_msg d-flex justify-content-center text-center">
        <div class="modal fade" id="registerFormModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="background-color: #151c4e">
                    <div class="modal-body">
                        <div id="loader">
                            <h4 class="pt-3" style="color: #fff;font-family: 'Lato', sans-serif;font-weight: 600;">
                                Creating Account-Please Wait...
                            </h4>
                            <div id="SLoader" class="d-flex justify-content-center pb-3 pt-1">
                                <div class="spinner-border" role="status" style="color: #fff">
                                    <span class="sr-only"></span>
                                </div>
                            </div>
                        </div>

                        <div id="SuccMsg" class="p-5" style="display: none">
                            <h4 class="pb-2" style="color: #fff;
font-family: 'Lato', sans-serif;
font-weight: 600;">
                                Success! Transfering To Secure Account Page
                            </h4>
                            <p>Please don't click on anything</p>
                            <span class="pb-"><i class="fas fa-check-circle" style="color: #fff; font-size: 70px"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="./index_files/animate.min.css">


    <!-- loader animation with popup message -->

    <style>
        .col-md-6.form-group {
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            -webkit-font-smoothing: antialiased;
            --blue: #007bff;
            --indigo: #6610f2;
            --purple: #6f42c1;
            --pink: #e83e8c;
            --red: #dc3545;
            --orange: #fd7e14;
            --yellow: #ffc107;
            --green: #28a745;
            --teal: #20c997;
            --cyan: #17a2b8;
            --white: #fff;
            --gray: #6c757d;
            --gray-dark: #343a40;
            --primary: #007bff;
            --secondary: #6c757d;
            --success: #28a745;
            --info: #17a2b8;
            --warning: #ffc107;
            --danger: #dc3545;
            --light: #f8f9fa;
            --dark: #343a40;
            --breakpoint-xs: 0;
            --breakpoint-sm: 576px;
            --breakpoint-md: 768px;
            --breakpoint-lg: 992px;
            --breakpoint-xl: 1200px;
            --font-family-sans-serif: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
            --font-family-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            text-align: left;
            font-family: 'Lato', sans-serif;
            color: #333;
            box-sizing: border-box;
            position: relative;
            width: 100%;
            min-height: 1px;
            padding-right: 15px;
            padding-left: 15px;
            flex: 0 0 100%;
            max-width: 100%;
            margin-bottom: 1rem;
        }

        button#submitBtn {
            opacity: inherit;
            width: 100%;
            --error-color: #dc3545;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --animate-duration: 1s;
            --animate-delay: 1s;
            --animate-repeat: 1;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            --bs-gutter-x: 1rem;
            --bs-gutter-y: 1rem;
            box-sizing: border-box;
            margin: 0;
            text-transform: none;
            /* -webkit-appearance: button; */
            display: inline-block;
            text-decoration: none;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: .375rem .75rem;
            transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            border-color: #0d6efd;
            background-color: #1BBAFF;
            border-radius: 7px;
            font-family: Lato;
            font-style: normal;
            font-weight: 600;
            font-size: 14.8757px;
            line-height: 150%;
            align-items: center;
            text-align: center;
            letter-spacing: 0.02em;
            color: #00131B;
            cursor: pointer;
        }

        select#countryData_gaff {
            display: none;
        }

        .checkbox {
            display: none;
        }

        #form input {
            --error-color: #dc3545;
            --success-color: #28a745;
            --warning-color: #ffc107;
            --bs-blue: #0d6efd;
            --bs-indigo: #6610f2;
            --bs-purple: #6f42c1;
            --bs-pink: #d63384;
            --bs-red: #dc3545;
            --bs-orange: #fd7e14;
            --bs-yellow: #ffc107;
            --bs-green: #198754;
            --bs-teal: #20c997;
            --bs-cyan: #0dcaf0;
            --bs-white: #fff;
            --bs-gray: #6c757d;
            --bs-gray-dark: #343a40;
            --bs-primary: #0d6efd;
            --bs-secondary: #6c757d;
            --bs-success: #198754;
            --bs-info: #0dcaf0;
            --bs-warning: #ffc107;
            --bs-danger: #dc3545;
            --bs-light: #f8f9fa;
            --bs-dark: #212529;
            --bs-font-sans-serif: system-ui, -apple-system, "Segoe UI", Roboto, "Helvetica Neue", Arial, "Noto Sans", "Liberation Sans", sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol", "Noto Color Emoji";
            --bs-font-monospace: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
            --bs-gradient: linear-gradient(180deg, rgba(255, 255, 255, 0.15), rgba(255, 255, 255, 0));
            --animate-duration: 1s;
            --animate-delay: 1s;
            --animate-repeat: 1;
            -webkit-text-size-adjust: 100%;
            -webkit-tap-highlight-color: transparent;
            --bs-gutter-x: 1rem;
            --bs-gutter-y: 1rem;
            box-sizing: border-box;
            margin: 0;
            font-family: inherit;
            display: block;
            width: 100%;
            padding: .375rem .75rem;
            font-size: 1rem;
            font-weight: 400;
            line-height: 1.5;
            appearance: none;
            transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
            border: 0 !important;
            border-radius: .25rem !important;
            color: #ffffff;
            background: rgba(14, 27, 62, 0.48);
        }
    </style>

    <style>
        * {
            box-sizing: border-box
        }

        /* Slideshow container */
        .slideshow-container {
            max-width: 1000px;
            position: relative;
            margin: auto;
        }

        /* Hide the images by default */
        .mySlides {
            display: none;
        }

        /* Next & previous buttons */
        .prev,
        .next {
            cursor: pointer;
            position: absolute;
            top: 50%;
            width: auto;
            margin-top: -22px;
            padding: 16px;
            color: white;
            font-weight: bold;
            font-size: 18px;
            transition: 0.6s ease;
            border-radius: 0 3px 3px 0;
            user-select: none;
        }

        /* Position the "next button" to the right */
        .next {
            right: 0;
            border-radius: 3px 0 0 3px;
        }

        /* On hover, add a black background color with a little bit see-through */
        .prev:hover,
        .next:hover {
            background-color: rgba(0, 0, 0, 0.8);
        }

        /* Caption text */
        .text {
            color: #f2f2f2;
            font-size: 15px;
            padding: 8px 12px;
            position: absolute;
            bottom: 8px;
            width: 100%;
            text-align: center;
        }

        /* Number text (1/3 etc) */
        .numbertext {
            color: #f2f2f2;
            font-size: 12px;
            padding: 8px 12px;
            position: absolute;
            top: 0;
        }

        /* The dots/bullets/indicators */
        .dot {
            cursor: pointer;
            height: 15px;
            width: 15px;
            margin: 0 2px;
            background-color: #bbb;
            border-radius: 50%;
            display: inline-block;
            transition: background-color 0.6s ease;
        }

        .active,
        .dot:hover {
            background-color: #717171;
        }

        /* Fading animation */
        .fade {
            -webkit-animation-name: fade;
            -webkit-animation-duration: 1.5s;
            animation-name: fade;
            animation-duration: 1.5s;
        }

        @-webkit-keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        @keyframes fade {
            from {
                opacity: .4
            }

            to {
                opacity: 1
            }
        }

        .collapse {
            display: none;
        }
    </style>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            if (n > slides.length) { slideIndex = 1 }
            if (n < 1) { slideIndex = slides.length }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
        }
    </script>

    <style>
        @media (max-width: 768px) {
            .navbar-expand-md .navbar-toggler {
                display: block;
            }

            a.navbar-brand {
                margin-top: 2rem;
            }
        }

        .navbar-toggler-icon {
            display: inline-block;
            width: 0em;
            height: 0.5em;
            vertical-align: middle;
            background-repeat: no-repeat;
            background-position: center;
            background-size: 100%;
            font-size: 40px;
            color: #14AAFC;
        }

        .apper {
            display: block;
        }
    </style>
    <script>
        $(".fa-bars").click(function () {
            $(".collapse").toggleClass("apper");
        });
    </script>


</body>
</html>