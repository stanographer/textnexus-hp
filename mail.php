<?php

// Replace "yourdomain.com" to your real domain name

if (!empty($_POST)) {

	$sitemail = 'info@yourdomain.com';
	$subject = 'New message from yourdomain.com';
	$email = '';
	$message = '';
		
	$headers = array(
		'MIME-Version: 1.0',
		'From: ' . $sitemail,
		'Reply-To: ' . $sitemail,   
		'Content-Type: text/html; charset=utf-8'
	);

	foreach ($_POST as $key => $value)
		$message .= htmlspecialchars($value).' <br>';

	if (mail($email, $subject, $message, implode("\r\n", $headers)))
		echo 1;
} else {
	echo 0;
}
	
