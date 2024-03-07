<?php
    $fullname = "Kalpa";
    $email = "kvirajpathirana805@gmail.com";
    $subject = "SENT FROM WEB";
    $message = "TESTING";

    $to = "kvirajpathirana805@gmail.com";
    $mail_subject = "Message from website";
    $email_body = "Message from COntact us page of the website";
    $email_body .= "<b>From:</b> {fullname} <br>";
    $email_body .= "<b>Subject:</b> {subject} <br>";
    $email_body .= "<b>Message:</b> {subject} <br>";

    $header = "From:{email}\r\n".
                "Content-Type:text/html";

    mail($to, $subject, $message, $header);

	
?>
