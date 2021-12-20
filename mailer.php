<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<Title> Sending Message </title>

</head>

</html>
<?php
include("admin/database.php");
if (isset($_POST['sendmail'])) {
	if ($_POST['name'] != "" && $_POST['email'] != "" && $_POST['phone'] != "") {
		// // && $_POST['g-recaptcha-response'] == ""
		// $response = $_POST['g-recaptcha-response'];
		// $curl = curl_init();
		// curl_setopt_array($curl, array(
		// 	CURLOPT_URL => 'https://www.google.com/recaptcha/api/siteverify',
		// 	CURLOPT_RETURNTRANSFER => true,
		// 	CURLOPT_ENCODING => '',
		// 	CURLOPT_MAXREDIRS => 10,
		// 	CURLOPT_TIMEOUT => 0,
		// 	CURLOPT_FOLLOWLOCATION => true,
		// 	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		// 	CURLOPT_CUSTOMREQUEST => 'POST',
		// 	CURLOPT_POSTFIELDS => array('secret' => $secret, 'response' => $response),
		// ));
		// $response = curl_exec($curl);
		// curl_close($curl);
		// $response = json_decode($response, true);

		// if ($response['success']) {
		$name = $_POST['name'];
		$email_id = $_POST['email'];
		$phn = $_POST['phone'];
		$cmmts = $_POST['message'];

		$to = "cs01@incprin.com, cs02@incprin.com";
		$subject = "INCPRIN - Site - Contact Form Response";
		$message = "<style type='text/css'>
			p,td{font-family:Verdana;font-size:12px;font-color:black;}
			strong{font-family:Verdana;font-size:12px;font-color:black; font-weight:bold}
			</style>";
		$message .= "<strong>Dear Admin,</strong> <br>
			<p>Kindly find the below details for accessing the enquiry. <br/>	
			<p><b>PERSONAL DETAILS</b></p>
			<p><b>Fullname :</b> $name </p>
			<p><b>Email :</b> $email_id </p>
			<p><b>Phone Number: </b> $phn </p>
			<p><b>Message :</b> $cmmts </p>
			";
		$message .= "<p><i>This email is  system generated; please do not reply to this email.</i></p>";
		$headers = 'From: www.incprin.com' . "\r\n" .
			'Content-type: text/html; charset=iso-8859-1\r\n' .
			'Reply-To: cs01@incprin.com' . "\r\n" .
			'X-Mailer: PHP/' . phpversion();
		if (mail($to, $subject, $message, $headers)) {
			echo "<script> alert('Thanks for your response.');</script>";
			echo "<script>window.location.href='contact.php#c';</script>";
		} else {
			echo "<script> alert('Retry Again. Server is unavailable right now!');</script>";
			echo "<script>window.location.href='contact.php#c';</script>";
		}
		// } else {
		// 	echo "<script> alert('Captcha Error... Please try again!');</script>";
		// 	echo "<script>window.location.href='contact.php#c';</script>";
		// }
	} else {
		echo "<script> alert('Please fill out all data and try again!');</script>";
		echo "<script>window.location.href='contact.php#c';</script>";
	}
}
?>