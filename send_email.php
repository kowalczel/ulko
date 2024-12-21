<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Pobranie danych z formularza
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Adres, na który zostanie wysłany e-mail
    $to = "biuro@ulkogeotechnika.pl";

    // Temat e-maila
    $subject = "Zapytanie ze strony internetowej";

    // Treść e-maila
    $body = "Imię i nazwisko: $name\n";
    $body .= "E-mail: $email\n";
    $body .= "Wiadomość:\n$message\n";

    // Nagłówki e-maila
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    // Wysyłanie wiadomości
    if (mail($to, $subject, $body, $headers)) {
        echo "Wiadomość została wysłana.";
    } else {
        echo "Wystąpił problem podczas wysyłania wiadomości.";
    }
} else {
    echo "Nieprawidłowe żądanie.";
}
?>