<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Empfänger-E-Mail-Adresse
    $recipient = "aryload@gmail.com";

    // E-Mail-Betreff
    $subject = "Neue Nachricht von SpeedV Roleplay";

    // E-Mail-Inhalt
    $email_content = "Name: $name\n";
    $email_content .= "E-Mail: $email\n\n";
    $email_content .= "Nachricht:\n$message";

    // E-Mail-Header
    $email_headers = "From: $name <$email>";

    // E-Mail senden
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        http_response_code(200);
        echo "Vielen Dank! Ihre Nachricht wurde erfolgreich gesendet.";
    } else {
        http_response_code(500);
        echo "Oops! Etwas ist schief gelaufen. Bitte versuchen Sie es später erneut.";
    }
} else {
    http_response_code(405);
    echo 'Ungültige Anfrage. Bitte versuchen Sie es erneut.';
}
?>
