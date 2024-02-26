<?php

// NAME

    $name = $_POST["name"];
    $email = $_POST["email"];
    $company = $_POST["company"];
    $message = $_POST["message"];


$EmailTo = "envisioncreative.pk@gmail.com";
$Subject = "Contact Message Received";

// prepare email body text
$Body = "";
$Body .= "Name:";
$Body .= $name;
$Body .= "\n";
$Body .= "Email:";
$Body .= $email;
$Body .= "\n";
$Body .= "Company:";
$Body .= $company;
$Body .= "\n";
$Body .= "Message:";
$Body .= $message;
$Body .= "\n";

// send email
$success = mail($EmailTo, $Subject, $Body, "From:".$email);
?>