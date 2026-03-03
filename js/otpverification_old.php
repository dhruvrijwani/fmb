<?php

echo "<pre>";print_r($_POST);exit;
require_once('playexcel2.php');
$emailClass = new PostData();

if (isset($_REQUEST['mobile'])) {
    $mailsent = $emailClass->callback();
    setcookie('formfilled','yes');
}
else{
   $mailsent = false;
}


$name = $_POST['name'];
$mobile = str_replace(' ', '', $_POST['mobile']);
$email = $_POST['email'];
$qualification = $_POST['qualification'];
$city = $_POST['city'];
$size_of_business=$_POST['sizeofbusiness']
$source = $_POST['source'];
$link = $_POST['link'];
$campaign = $_POST['campaign'];
$channel = $_POST['channel'];
$source_form=$_POST['source_form'];
$utm_source=$_POST['utm_source'];
$utm_medium=$_POST['utm_medium'];
$utm_term=$_POST['utm_term'];
$utm_campaign=$_POST['utm_campaign'];
$utm_content=$_POST['utm_content'];

// $cstm_ppc_campaign = $_COOKIE['cstm_ppc_campaign'];
// $cstm_ppc_channel = $_COOKIE['cstm_ppc_channel'];
// $cstm_ppc_keyword = $_COOKIE['cstm_ppc_keyword'];
// $cstm_ppc_placement = $_COOKIE['cstm_ppc_placement'];
// $cstm_ppc_device = $_COOKIE['cstm_ppc_device'];


function generateNumericOTP($n)
{

    $generator = "1357902468";

    $result = "";

    for ($i = 1; $i <= $n; $i++) {
        $result .= substr($generator, (rand() % (strlen($generator))), 1);
    }

    return $result;
}

// Main program
$n = 6;
//print_r(generateNumericOTP($n));
$otpnumber = (generateNumericOTP($n));
setcookie('projectscode', $otpnumber);


$otpmsg = "Thank You for Choosing Welingkar, Your OTP Verification Code is " . $otpnumber;



$url="http://web.mtextdg.in/api/pushsms?user=Allinace&authkey=92mtKOc7rUiog&sender=MedEnt&mobile=".$mobile."&text=Thank+You+for+Choosing+Welingkar%2C+Your+OTP+Verification+Code+is+".$otpnumber."+Strategic+alliances+network+llp&rpt=1&summary=1&output=json&entityid=1401604530000013865&templateid=1007161837994212668";

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, $url);
curl_setopt($ch1, CURLOPT_HEADER, 0);
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, true);

$result2 = curl_exec($ch1);
//var_dump($result2);

?>
    <!doctype html>
    <html class="no-js" lang="en">

    <head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-ML874XT');</script>
<!-- End Google Tag Manager -->        
        <!-- Google Tag Manager -->
        <script>
            (function(w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    'gtm.start': new Date().getTime(),
                    event: 'gtm.js'
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != 'dataLayer' ? '&l=' + l : '';
                j.async = true;
                j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, 'script', 'dataLayer', 'GTM-MT7NBBW');
        </script>
        <!-- End Google Tag Manager -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Welingkar's - Weschool | Mass Media Communication and Entertainment course in Mumbai</title>
        <meta name="description" content="Welingkar offers full-time Post Graduate Program in Media & Entertainment. Admissions Open for Batch. Enroll Now!">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keyword" content="Post Graduate Program in Media & Entertainment, PGP in Media and Entertainment, Degree in Media & Entertainment">
        <link rel="apple-touch-icon" href="img/home-one/apple-touch-icon.png">
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->
        <!-- all css here -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/icofont.css">
        <link rel="stylesheet" href="css/magnific-popup.css">
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <link rel="stylesheet" href="css/plugins.css">
        <link rel="stylesheet" href="css/shortcodes.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/responsive2.css">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
        <script src="js/modernizr-2.8.3.min.js"></script>
        <!-- Hotjar Tracking Code for https://www.welingkar.org/mediaandentertainment/ -->
        <script>
            (function(h, o, t, j, a, r) {
                h.hj = h.hj || function() {
                    (h.hj.q = h.hj.q || []).push(arguments)
                };
                h._hjSettings = {
                    hjid: 1714777,
                    hjsv: 6
                };
                a = o.getElementsByTagName('head')[0];
                r = o.createElement('script');
                r.async = 1;
                r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
                a.appendChild(r);
            })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
        </script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-191570555-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-191570555-1');
</script>

<!-- Global site tag (gtag.js) - Google Ads: 405785858 -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-405785858"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-405785858');
</script>
    </head>
    <style>
        .form-control {
            width: 100%;
            padding: 0.5em 0.5em;
            border: 1px solid #CCC;
            background: #fff;
            box-shadow: 0px 0px 0px #fff inset;
            border-radius: 4px;
            box-sizing: border-box;
        }
        .form-error {
            color: red;
        }
        
        #mauticform_wrapper_mnenewbannerform {
            background-color: rgba(14, 13, 12, 0.52);
            padding: 3%;
            width: 103%;
            margin-top: -7px;
        }
        
        .ptb-50 {
            padding: 50px 0;
        }
        
        .otpform {
            margin: 30px auto 30px;
            padding: 40px 40px;
            -webkit-box-shadow: 3px 17px 43px 6px rgba(255, 255, 255, 0.75);
            -moz-box-shadow: 3px 17px 43px 6px rgba(0, 0, 0, 0.75);
            box-shadow: 3px 17px 43px 6px rgba(82, 79, 79, 0.75);
        }
        .otpform h2{
            margin-bottom:25px;
        }
        .mb-view {
            display: none;
        }

        @media only screen and (max-width: 767px) {
            .dk-view {
                display: none;
            }
            .mb-view {
                display: block;
                margin: 0 auto;
                margin-top: 90px;
            }
            .slider-item {
                margin-top: 20px;
                height: 447px;
                background-size: contain;
                background-position: top;
                background-repeat: no-repeat;
            }
        }
        
        @media screen and (max-width: 1024px) {
            .form {
                position: relative;
                width: 100%;
                z-index: 1;
            }
            .form:before {
                display: none;
            }
        }
    </style>

    <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-ML874XT"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->        
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-MT7NBBW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->

        <!-- Page Wraper Here Start -->
        <div class="page-wraper" id="main-home">
            <!-- Page Content Start -->
            <div class="page-content">
                <section class="ptb-50">
                    <div class="slider-area row">
                        <!-- <div class="">
                            <img class="dk-view" src="img/WeSchoolSeminarBanner-3-new12.jpg">

                            <img class="mb-view" src="img/mobile-WeSchoolSeminarBanner-3new-mb.jpg">
                        </div> -->
                        <div class="col-md-3 col-xs-12"></div>
                        <div class="col-md-6 col-xs-12 otpform text-center">
                            <h2>Please enter the OTP sent on mobile.</h2>
                            <form id="otp-form" action="http://embudo.in/2021/welingkar_lp/mne_program/action_page.php" name="otp-form" method="POST" onsubmit="return otpverify('otp-form');">
                                <div class="form-group">
                                <input type="text" name="otp" placeholder="Enter OTP">
                                </div>
                                <div class="form-group text-left"><p id="some_div"></p></div>
                                <div class="form-group">
                                <input type="hidden" name="name" value="<?php echo $name ?>">
                                <input type="hidden" name="mobile" value="<?php echo $mobile ?>">
                                <input type="hidden" name="email" value="<?php echo $email ?>">
                                <input type="hidden" name="qualification" value="<?php echo $qualification ?>">
                                <input type="hidden" name="city" value="<?php echo $city ?>">
                                <input type="hidden" name="source" value="<?php echo $source ?>">
                                <input type="hidden" name="link" value="<?php echo $link ?>">
                                <input type="hidden" name="campaign" value="<?php echo $campaign ?>">
                                <input type="hidden" name="channel" value="<?php echo $channel ?>">
                                <input type="hidden" name="source_form" value="<?php echo "$source_form"; ?>">
                                <input type="hidden" name="utm_source" value="<?php echo "$utm_source"; ?>">
                                <input type="hidden" name="utm_medium" value="<?php echo "$utm_medium"; ?>">
                                <input type="hidden" name="utm_term" value="<?php   echo "$utm_term"; ?>">
                                <input type="hidden" name="utm_campaign" value="<?php echo "$utm_campaign"; ?>">
                                <input type="hidden" name="utm_content" value="<?php echo "$utm_content"; ?>">
                                <button type="submit" class="btn-submit" name="Submit" id="otp_submit">Submit</button>
                                <button type="button" class="btn-submit" name="Submit" id="otp_resend">Resend OTP</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-md-3 col-xs-12"></div>
                    </div>
                </section>

            </div>
            <!-- Page Content End -->

            <div id="back-gif">
                <div id="gif">
                    <img src="img/purple.gif" alt="">
                </div>
            </div>

            <!-- all js here -->
            <script src="js/jquery-1.12.4.min.js"></script>
            <script src="js/bootstrap.min.js"></script>
            <script src="js/jquery.ajaxchimp.min.js"></script>
            <script src="js/plugins.js"></script>
            <script src="js/main.js"></script>
            <script src="js/cookie.js"></script>
            <script type="text/javascript">
                jQuery(document).ready(function($) {
                    Delete_Cookie('formfilled');
                    $("#otp_resend").prop('disabled', true);
                    $("#otp_resend").css('background-color', '#31bc9b30');
                });
            </script>

             <script>
                $(document).ready(function(){
                    // $('.resend_otp').hide();
                    var timeLeft = 40;
                    var elem = document.getElementById('some_div');
                    var timerId = setInterval(countdown, 1000);

                    function countdown() {
                        if (timeLeft == -1) {
                            clearTimeout(timerId);
                            doSomething();
                        } else {
                            elem.innerHTML = timeLeft + ' seconds remaining';
                            timeLeft--;
                        }
                    }

                    function doSomething() {
                        // alert("Hi");
                        $("#otp_resend").prop('disabled', false);
                        $("#otp_resend").css('background-color', '#31bc9b');
                        // $("#otp_submit").prop('disabled', true);
                        $("#otp_resend").click(function(){
                            location.reload(true);
                        });
                    }
                    
                });
            </script>

            <script>
                function otpverify(elm) {
                    jQuery('#' + elm + ' input[type=submit], #' + elm + ' button').prop('disabled', true);
                    setTimeout(function() {
                        jQuery('#' + elm + ' input[type=submit], #' + elm + ' button').prop('disabled', false);
                    }, 5000);


                    var name = jQuery('#' + elm + ' input[name="name"]').val();
                    var mobile = jQuery('#' + elm + ' input[name="mobile"]').val();
                    var email = jQuery('#' + elm + ' input[name="email"]').val();
                    var qualification = jQuery('#' + elm + ' input[name="qualification"]').val();
                    var city = jQuery('#' + elm + ' input[name="city"]').val();
                    var source = jQuery('#' + elm + ' input[name="source"]').val();
                    var link = jQuery('#' + elm + ' input[name="link"]').val();
                    var campaign = jQuery('#' + elm + ' input[name="campaign"]').val();
                    var channel = jQuery('#' + elm + ' input[name="channel"]').val();

                    var otp = jQuery('#' + elm + ' input[name="otp"]').val();

                    var getotp = Get_Cookie('projectscode');

                    if (otp == "") {
                        alert('Please Enter Otp');
                        return false;
                    }

                    if (getotp == otp) {
                        $("#otp_submit").css('background-color', '#31bc9b30');
                        return true;
                    } else {
                        alert("Enter Correct OTP");
                    }
                    return false;
                }
            </script>
           
    </body>

    </html>