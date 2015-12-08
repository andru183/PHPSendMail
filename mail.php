<?php

if($argv[1] == '--help')
{
	print "run the command as [mail.php to from subject message";
}

else
{
	$to      = $argv[1];
	$subject = $argv[3];
	$message = $argv[4];
	$headers = 'From: '.$argv[2] . "\r\n" .
	    'Reply-To: '.$argv[2]."\r\n" .
	    'X-Mailer: PHP/' . phpversion();

	mail($to, $subject, $message, $headers);
}
?>
