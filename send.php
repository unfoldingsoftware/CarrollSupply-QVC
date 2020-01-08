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
	$userName = $_POST['name'];
    $userEmail = $_POST['email'];
    $userPhone = $_POST['phone'];
	$userMessage = $_POST['message'];
	$to = "austin@unfoldingsoftware.com";
	$subject = "Email from my World of Concrete Website";
	$body = "Information Submitted:";
	$body .= "\r\n Name: " . $userName;
    $body .= "\r\n Email: " . $userEmail;
    $body .= "\r\n Phone: " . $userPhone;
	$body .= "\r\n Message: " . $userMessage;

	$headers 		= 'From: Carroll Supply Website <support@unfoldingsoftware.com>' . "\r\n" .
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