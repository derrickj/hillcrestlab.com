---
layout: base
title: mailer
---
<?php
$to = "&#109;&#097;&#105;&#108;&#116;&#111;&#058;&#100;&#101;&#114;&#114;&#105;&#099;&#107;&#064;&#104;&#105;&#108;&#108;&#099;&#114;&#101;&#115;&#116;&#108;&#097;&#098;&#046;&#099;&#111;&#109;"; // all messages go to my inbox
$reply_to = $_POST['email']; // the person that used the form to send a message. So I can reply to the person from my mail client if need be
$message = $_POST['message'];
$subject = "My subject";
$headers = "From:$from\r\nReply-To:$reply_to\r\n\r\n";
$success = mail($to, $subject, $message, $headers);
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Test Mail</title>
	</head>
	<body>
		<h1>Test Mail</h1>
		<div>
			<?php
			if ($success) {
				echo '
				Your message was successfully sent!
				';
			} else {
				echo '
				There was a problem (on our end) sending your message. Sorry. A copy of your message has been placed on this page so your hard work doesn\'t go to waste.
				
				<p>$message</p>
				';
			}
			?>
		</div>
	</body>
</html>