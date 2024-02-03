<?php$name = 
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$email _form = 'info@yourwebsite.com';

$email _subject = 'New Form Submission';

$email _body = "User Name: $name.\n ".
$email _body = "User Email: $vistitor_email.\n ".
$email _body = "Subject: $subject.\n ".
$email _body = "User Message: $visitor_email_.\n ";

$to = '3belkader9@gamil.com';

$headers .= "Form: $visitor_email \r\n";

$headers .= "Replay-To: $visitor_email \r\n";

mail ($to,$email_subject,$email_body,$headers);

header("Location: contact.html");
?>