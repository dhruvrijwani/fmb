<?php
echo "<pre>";
print_r($_POST);
print_r($_POST['contact']);

// $name = $_POST['name'];
// $email = $_POST['email'];
// $phone = $_POST['contact'];
// $graduate_yr = $_POST['graduate_yr'];
// $sizeofbusiness = $_POST['sizeofbusiness'];
// $industry = $_POST['industry'];
// $age = $_POST['age'];
// $msg = $_POST['msg'];
// $source = $_POST['utm_source'];
// $utm_medium = $_POST['utm_medium'];
// $utm_campaign = $_POST['utm_campaign'];
// $city = $_POST['city'];


$name = $_POST['name'];
$phone = $_POST['contact'];
$country_code = $_POST['countryCode'];
$email = $_POST['email'];
$graduate_yr = $_POST['graduate_yr'];
$city = $_POST['city'];
$sizeofbusiness = $_POST['sizeofbusiness'];
$industry = $_POST['industry'];
$age = $_POST['age'];
$msg = $_POST['message'];
$agree = $_POST['Agree'];

$lead_form = $_POST['source_form'];
$source = $_POST['source_form'];

$utm_source = $_POST['utm_source'];
$utm_medium = $_POST['utm_medium'];
$utm_term = $_POST['utm_term'];
$utm_campagin = $_POST['utm_campaign'];
$utm_content = $_POST['utm_content'];

if (!empty($name) && !empty($email) && !empty($phone) && !empty($sizeofbusiness)) {
	/*-----------------Extraedge API Integration------------------------*/
	$url = 'https://thirdpartyapi.extraaedge.com/api/SaveRequest';
	$postArray = array(
		'AuthToken' => 'YANGPOO-5-12-2019',
		'Source' => 'yangpoo',
		'FirstName' => $name,
		'Email' => $email,
		'City' => $city,
		'Textb2' => $graduate_yr,
		'Remarks' => $age,
		'Remarks' => $msg,
		'Remarks' => $industry,
		'MobileNumber' => $phone,
		'Textb6' => $sizeofbusiness,
		'LeadType' => 'Online',
		'LeadName' => 'Enquire Now',
		'Field12' => $utm_source,
        'Field13' => $utm_medium,
        'Field14' => $utm_campagin,
		'LeadSource' => 'After OTP',
		'Course' => 'WeSchool',
		'Center' => 'FMB',
		'Location' => '11 Month Program in Entrepreneurship'

	);

	//echo "<pre>";print_r($postArray);
	$json = json_encode($postArray);

	$ch = curl_init($url);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
	curl_setopt($ch, CURLOPT_POST, 1);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
	curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
	 $result = curl_exec($ch);



	//curl_close($ch);
	//echo $result;die;
	/* $res = array();
		if($result=='Success'){
			//echo 1111;exit;
			$res['status']='ok';
			$res['message']='inserted';
		}else{
			$res['status']='error';
			$res['message']='error';
		}
	echo json_encode($res);exit; */
	if ($result == 'Success') {
		// header("location:thankyou.php");
	} else {
		echo "Error!";
		exit;
	}

	/********************************End*********************************/
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Welingkar</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" sizes="32x32" href="images/favicon-32x32.png">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/responsive2.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="css/ekko-lightbox.css">
	<link rel="stylesheet" href="css/intlTelInput.css">
	<link href="css/aos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,300;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100&display=swap" rel="stylesheet">
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

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'UA-191570555-1');
	</script>

	<!-- Global site tag (gtag.js) - Google Ads: 405785858 -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-405785858"></script>
	<script>
		window.dataLayer = window.dataLayer || [];

		function gtag() {
			dataLayer.push(arguments);
		}
		gtag('js', new Date());

		gtag('config', 'AW-405785858');
	</script>
</head>

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
	})(window, document, 'script', 'dataLayer', 'GTM-NPZ67MQ');
</script>


<!-- End Google Tag Manager -->
</head>

<body>
	<form name="otp-form" method="POST">
		<div class="form-group">

			<input type="hidden" name="name" value="<?php echo $name ?>">
			<input type="hidden" name="contact" value="<?php echo $phone ?>">
			<input type="hidden" name="email" value="<?php echo $email ?>">
			<input type="hidden" name="graduate_yr" value="<?php echo $graduate_yr ?>">
			<input type="hidden" name="sizeofbusiness" value="<?php echo $sizeofbusiness ?>">
			<input type="hidden" name="city" value="<?php echo $city ?>">
			<input type="hidden" name="source" value="<?php echo $source ?>">
			<input type="hidden" name="industry" value="<?php echo $industry ?>">
			<input type="hidden" name="age" value="<?php echo $age ?>">



			<input type="hidden" name="msg" value="<?php echo $msg ?>">
			<input type="hidden" name="agree" value="<?php echo $agree ?>">
			<input type="hidden" name="lead_form" value="<?php echo $lead_form ?>">
			<input type="hidden" name="utm_source" value="<?php echo $utm_source ?>">
			<input type="hidden" name="utm_medium" value="<?php echo $utm_medium ?>">
			<input type="hidden" name="utm_term" value="<?php echo $utm_term ?>">
			<input type="hidden" name="utm_campaign" value="<?php echo $utm_campagin ?>">
			<input type="hidden" name="utm_content" value="<?php echo $utm_content ?>">

			<!-- 
                                <button type="submit" class="btn-submit" name="Submit" id="otp_submit">Submit</button>
                                <button type="button" class="btn-submit" name="Submit" id="otp_resend">Resend OTP</button> -->
		</div>
	</form>
	<script src="js/jquery.min.js"></script>

	<script>
		// alert('hii');
		// function save_response() {
		// alert("in save function");
		var name = jQuery('input[name="name"]').val();

		var contact = jQuery('input[name="contact"]').val();

		var email = jQuery('input[name="email"]').val();

		var graduate_yr = jQuery('input[name="graduate_yr"]').val();

		var sizeofbusiness = jQuery('input[name="sizeofbusiness"]').val();

		var city = jQuery('input[name="city"]').val();

		var source = jQuery('input[name="source"]').val();
		var industry = jQuery('input[name="industry"]').val();
		var age = jQuery('input[name="age"]').val();
		var msg = jQuery('input[name="msg"]').val();
		var lead_form = jQuery('input[name="lead_form"]').val();
		var utm_source = jQuery('input[name="utm_source"]').val();

		var utm_medium = jQuery('input[name="utm_medium"]').val();

		var utm_term = jQuery('input[name="utm_term"]').val();

		var utm_campaign = jQuery('input[name="utm_campaign"]').val();
		var utm_content = jQuery('input[name="utm_content"]').val();
		var form_submit_time = "After OTP";


		console.log(name);
		console.log(contact);

		// console.log(phone);
		// console.log(qualification);

		if (name != "" && contact != "") {
			console.log("in url");
			jQuery.ajax({
				url: 'https://docs.google.com/forms/d/e/1FAIpQLSfhRfk7pwgR9YqRM_i5RjrDQdUH2_gNAjLD35Bs0cnADRRP8w/formResponse',

				type: 'POST',
				data: {
					"entry.914332121": name,
					"entry.962271338": contact,
					"entry.15346358": email,
					"entry.1282766967": graduate_yr,
					"entry.330400262": sizeofbusiness,
					"entry.2004753205": city,
					"entry.1985153277": source,
					"entry.1688237005": industry,
					"entry.1349317118": age,
					"entry.2059949441": msg,
					"entry.1957639465": lead_form,
					"entry.731654754": utm_source,
					"entry.828086426": utm_medium,
					"entry.882583517": utm_term,
					"entry.1119357967": utm_campaign,
					"entry.340212157": utm_content,
					"entry.1278377116": form_submit_time,
				},
				dataType: "xml",
				statusCode: {
					0: function(data) {
						console.log(data);
						console.log('CROS Error');
						location.href = "./thankyou.php";
						return true;
					},
					200: function(data) {
						console.log('Excelsheet Success');
					},
					403: function(data) {
						console.log('403 Error');
					}
				},
				error: function(xhr, status, error) {
					console.log('There was an error in CRM Entry');
				}
			})
		}
		// }
	</script>
</body>

</html>