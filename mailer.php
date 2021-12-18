<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<Title> Sending Message </title>

</head>

</html>
<?php
if (isset($_POST['sendmail'])) {
	if ($_POST['name'] != "" && $_POST['email'] != "" && $_POST['phone'] != "") {
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
	} else {
		echo "<script> alert('Please fill out all data and try again!');</script>";
		echo "<script>window.location.href='contact.php#c';</script>";
	}
}
?>