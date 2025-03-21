<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifie si les champs sont remplis
    $name = isset($_POST['name']) ? $_POST['name'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $message = isset($_POST['message']) ? $_POST['message'] : '';

    // Validation des champs (tu peux ajouter plus de validation si nécessaire)
    if (empty($name) || empty($email) || empty($message)) {
        echo "Tous les champs sont obligatoires.";
        exit;
    }

    // Adresse email où tu veux recevoir les messages
    $to = "depardieuantonin@gmail.com";  // Remplace avec ton adresse e-mail
    $subject = "Message de contact depuis le site";
    $body = "Nom: $name\nEmail: $email\nMessage: $message";

    // En-têtes de l'e-mail
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Envoi de l'email
    if (mail($to, $subject, $body, $headers)) {
        echo "Merci pour votre message, nous vous répondrons bientôt.";
    } else {
        echo "Une erreur est survenue. Veuillez réessayer plus tard.";
    }
} else {
    echo "Méthode non autorisée.";
}
?>
