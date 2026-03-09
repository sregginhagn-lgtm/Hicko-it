<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $to = "Dytoonn@hotmail.be";
    $subject = $_POST['subject'];
    $message = "Naam: ".$_POST['voornaam']." ".$_POST['familienaam']."\n";
    $message .= "Bedrijf: ".$_POST['bedrijf']."\n";
    $message .= "Email: ".$_POST['email']."\n";
    $message .= "Telefoon: ".$_POST['telefoon']."\n";
    $message .= "Adres: ".$_POST['straat']." ".$_POST['nummer']." ".$_POST['bus']."\n";
    $message .= "Postcode/Gemeente: ".$_POST['postcode']." ".$_POST['gemeente']."\n";
    $message .= "Bericht:\n".$_POST['bericht'];

    $headers = "From: ".$_POST['email'];

    if(mail($to, $subject, $message, $headers)){
        echo "Bedankt! Je bericht is verzonden.";
    } else {
        echo "Er is iets misgegaan. Probeer opnieuw.";
    }
}
?>
