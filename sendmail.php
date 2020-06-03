<?php
$to      = 'mohamed.elkomy1995@gmail.com';
$subject = $_POST['Name'] . $_POST['Mobilenumber'];
$message = $_POST['Message'];
$email = $_POST['Email'];
$headers = array(
    'From' => $email,
    'Reply-To' => $to,
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
header('location:index.html');
?>