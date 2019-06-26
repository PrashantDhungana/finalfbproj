<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Checking mail</title>
</head>
<body>
	<?php

				require_once './vendor/autoload.php';

			// Create the Transport
			$transport = (new Swift_SmtpTransport('smtp.example.org', 25))
			  ->setUsername('sharma.prashant2000@gmail.com')
			  ->setPassword('9841501545')
			;

			// Create the Mailer using your created Transport
			$mailer = new Swift_Mailer($transport);

			// Create a message
			$message = (new Swift_Message('Wonderful Subject'))
			  ->setFrom(['sharma.prashant2000@gmail.com' => 'Dopamine'])
			  ->setTo(['prasanna.sharma2015@gmail.com' => 'A name'])
			  ->setBody('Here is the message itself')
			  ;

			// Send the message
			$result = $mailer->send($message);
	?>
</body>
</html>