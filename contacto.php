<?php
if($_POST["submit"]) {
    $recipient="m.rolgranjo@sapo.pt"; //Enter your mail address
    $subject="Novo Contacto através do site"; //Subject 
    $sender=$_POST["name"];
    $senderEmail=$_POST["email"];
    $message=$_POST["comments"];
    $mailBody="Nome: $sender\nEmail: $senderEmail\n\nMensagem: $message";
    mail($recipient, $subject, $mailBody);
    sleep(1);
    header("Location:https://rolgranjo.com"); // Set here redirect page or destination page
}
?>