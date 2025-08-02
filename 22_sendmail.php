<?php
$to = "thequan1211@gmail.com";
$subject = "Test e-mail";
$message = "This is an example for sending mail by mail() function.";
$header = "From: YourEmail@gmail.com";
$send = mail($to, $subject, $message, $header);
if ($send) {
    echo "Mail sent to $to address!!!";
} else {
    echo "Mail could not be sent to $to address!!!";
}
