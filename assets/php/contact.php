<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST['name']) || empty($_POST['surname']) || empty($_POST['email']) || empty($_POST['department']) || empty($_POST['message'])) {
        echo "Tous les champs sont obligatoires.";
    } else {
        $name = htmlspecialchars($_POST['name']);
        $surname = htmlspecialchars($_POST['surname']);
        $email = htmlspecialchars($_POST['email']);
        $department = htmlspecialchars($_POST['department']);
        $message = htmlspecialchars($_POST['message']);

        $to = "gaspard.delvaux@gmail.com";

        $subject = "Formulaire de contact - $name $surname";

        $email_body = "Nom: $name\n";
        $email_body .= "Prénom: $surname\n";
        $email_body .= "Email: $email\n";
        $email_body .= "Département: $department\n";
        $email_body .= "Message:\n$message";

        $headers = "From: $email\n";
        $headers .= "Reply-To: $email\n";

        if (mail($to, $subject, $email_body, $headers)) {
            echo "Message envoyé avec succès !";
        } else {
            echo "Erreur lors de l'envoi du message. Veuillez réessayer.";
        }
    }
}