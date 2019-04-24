<?php
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$subject = $_POST['subject'];

$inputcheck = $name . $message . $subject;

header('Content-Type: application/json');

if (!preg_match('/^[A-Za-z0-9]+$/', $inputcheck)) {
    print json_encode(array('message' => 'De velden bevatten niet toegestane symbolen', 'code' => 0));
    exit();
} 

if ($name === ''){
    print json_encode(array('message' => 'Niet alle velden zijn correct ingevoerd', 'code' => 0));
    exit();
}

if ($email === ''){
    print json_encode(array('message' => 'Niet alle velden zijn correct ingevoerd', 'code' => 0));
    exit();
} else {
if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
    print json_encode(array('message' => 'Niet alle velden zijn correct ingevoerd', 'code' => 0));
    exit();
}
}

if ($subject === ''){
    print json_encode(array('message' => 'Niet alle velden zijn correct ingevoerd', 'code' => 0));
    exit();
}
if ($message === ''){
    print json_encode(array('message' => 'Niet alle velden zijn correct ingevoerd', 'code' => 0));
    exit();
}

$content="From: $name \nEmail: $email \nMessage: $message";
$recipient = "23899@ma-web.nl";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");
print json_encode(array('message' => 'Uw e-mail is verzonden!', 'code' => 1));
exit();
?>