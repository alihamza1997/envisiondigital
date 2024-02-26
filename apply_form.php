<?php
// NAME
    $name = $_POST["name"];
    $email = $_POST["email"];
    $contact = $_POST["contact"]; 
    $attached = $_FILES['attached']['name'];
    $target = "data/".basename($attached);
    
$EmailTo = "envisioncreative.pk@gmail.com";
$Subject = "Job Application Received";

// prepare email body text

$Body = "";
$Body .= "Name:";
$Body .= $name;
$Body .= "\n";
$Body .= "Email:";
$Body .= $email;
$Body .= "\n";
$Body .= "Contact No.:";
$Body .= $contact;
$Body .= "\n";
$Body .= "CV:";
$Body .= $target;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
?>