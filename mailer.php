---
layout: base
title: mailer
---
<?php
$to = "info@hillcrestlab.com"; // all messages go to my inbox
$reply_to = $_POST['email']; // the person that used the form to send a message. So I can reply to the person from my mail client if need be
$message = $_POST['message'];
$subject = $_POST['subject'];
$headers = "From:$from\r\nReply-To:$reply_to\r\n\r\n";
$success = mail($to, $subject, $message, $headers);
?>

		<h1><?php if ($success) echo 'Mail Sent'; else echo 'Your Message was Not Sent'; ?></h1>
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
		
		<a href="contact.html">Back to Contact Page</a>