<html>
	<head>
	</head>

	<body>

		<p>Thanks for your message!</p>


		<a style="text-decoration: none;" href="https://unfoldingsoftware.com/hosting/carrollSupply/index.html"><button>Return to Site</button></a>

		<p>Have a website need? Are you implementing a CRM like Salesforce or HubSpot? Just can't get the darned thing to turn on?</p>
		<p>Contact <a href="https://unfoldingsoftware.com">Unfolding Software</a> today or <a href="https://x.ai/calendar/unfoldingsoftware/introduction">Schedule a FREE Phone Consultation</a>.
		<p>We look forward to serving all your technological business needs.</a>

</body>

<?php
    $userCompany = $_POST['CompanyName'];
	$userName = $_POST['FullName'];
    $userEmail = $_POST['Email'];
    $userPhone = $_POST['Phone'];
	$userMessage = $_POST['Message'];
	$to = "austin@unfoldingsoftware.com";
	$subject = "Email from my World of Concrete Website";
    $body = "Contact Information Submitted:";
    $body .= "\r\n Company: " . $userCompany;
	$body .= "\r\n Name: " . $userName;
    $body .= "\r\n Email: " . $userEmail;
    $body .= "\r\n Phone: " . $userPhone;
	$body .= "\r\n Message: " . $userMessage;

	$headers 		= 'From: Unfolding Softare Website <support@unfoldingsoftware.com>' . "\r\n" .
    				'Reply-To: support@unfoldingsoftware.com' . "\r\n" .
					'X-Mailer: PHP/' . phpversion();
					
	mail($to, $subject, $body, $headers);

	<script>
	if ( window.history.replaceState ) {
		window.history.replaceState( null, null, window.location.href );
	}
	</script>

?>

</html>