<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_from = "kontakt@bhp-marcinkedziora.pl";

$email_subject = 'Nowa wiadomość';
$email_body = "Wiadomość od: $name.\n".
            "E-mail użytkownika: $visitor_email.\n\n".
                "$message.\n";



$to = "marcin.kedziora@onet.eu";

$headers = "From: $email_from \r\n";

$headers .= "Reply-To: $visitor_email \r\n";

mail($to, $email_subject, $email_body, $headers);

header("Location: thankyou.html");

?>