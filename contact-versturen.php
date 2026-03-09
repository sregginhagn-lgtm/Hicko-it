<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $to = "info@couquelet.be";
    $subject = $_POST['subject'];

    $message = "Naam: ".$_POST['voornaam']." ".$_POST['familienaam']."\n";
    $message .= "Bedrijf: ".$_POST['bedrijf']."\n";
    $message .= "Email: ".$_POST['email']."\n";
    $message .= "Telefoon: ".$_POST['telefoon']."\n";
    $message .= "Bericht:\n".$_POST['bericht'];

$headers = "From: Couquelet Website <website@couquelet.be>\r\n";
$headers .= "Reply-To: ".$_POST['email']."\r\n";
$headers .= "Return-Path: info@couquelet.be\r\n";
$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
	
    if(mail($to,$subject,$message,$headers)){
        echo "Bedankt! Je bericht is verzonden.";
    } else {
        echo "Er ging iets mis.";
    }
}