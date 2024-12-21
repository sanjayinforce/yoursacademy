<?php

$academicyear = $_POST['name'];
$nameofapplicant = $_POST['email'];
$dateofbirth = $_POST['message'];

//mail
$to = "sanjay@clouddreams.in";
$from = "From: your";
$subject = "ARB SCHOOL Contact Form";

$mailcontent = "Contact Details:\n\n" .
    "Academic Year: " . $academicyear . "\n" .
    "Name of Applicant: " . $nameofapplicant . "\n" .
    "Date of Birth: " . $dateofbirth . "\n" .
    

if (mail($to, $subject, $mailcontent, $from)) {
    $url = "mail-success.php";
    header("Location: " . $url);
} else {
    $url = "mail-sent-error.php";
    header("Location: " . $url);
}
?>
