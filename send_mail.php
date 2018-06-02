<?php

$to = "nsumahers@gmail.com";
$from = $_GET['firstname'];
$subject = "Sent from porfolio site";
$first_name = $_GET['firstname'];
$message = $first_name . " wrote the following:" . "\n\n" . $_GET['message'];
$message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_GET['message'];

$headers = "From:" . $from;

mail($to, $subject, $message, $headers);

$language = $_GET['language'];

header('Location: ./?ln=' . $language);