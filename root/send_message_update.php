<?php
    $visitor_name = $_POST['name'];
    $visitor_email = $_POST['email'];
    $visitor_phone = $_POST['phone'];
    $visitor_message = $_POST['message'];

    $email_from = '19039@lbc.school.nz';
	$email_subject = $visitor_name . "message";
	$email_body = $visitor_message . "<br> Phone Number: " . $visitor_phone;

    $to = "19039@lbc.school.nz";
    $headers = "From: $email_from \r\n";
    $headers .= "Reply-To: $visitor_email \r\n";
    mail($to, $email_subject, $email_body, $headers);

?>