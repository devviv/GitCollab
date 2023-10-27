<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $telephone = $_POST["telephone"];

    // Validation minimale (vous pouvez ajouter une validation plus robuste)
    if (empty($nom) || empty($email)) {
        echo "Veuillez remplir les champs obligatoires : Nom et Email";
    } else {
        // Configurer les paramètres d'envoi d'e-mails
        $destinataire = "votre_email@example.com"; // Remplacez par votre adresse e-mail
        $sujet = "Nouveau message de formulaire de contact";
        $message = "Nom: $nom\nEmail: $email\nTéléphone: $telephone";

        // Envoyer l'e-mail
        $headers = "From: $email";

        if (mail($destinataire, $sujet, $message, $headers)) {
            echo "Votre message a été envoyé avec succès.";
        } else {
            echo "Une erreur s'est produite lors de l'envoi du message. Veuillez réessayer ultérieurement.";
        }
    }
}
?>
