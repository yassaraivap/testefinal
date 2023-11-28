<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "estudosyassaraiva@outlook.com";
    $subject = "Nova mensagem de $name";
    $body = "Nome: $name\n";
    $body .= "E-mail: $email\n\n";
    $body .= "Mensagem:\n$message";
    $headers = "From: $email";

    mail($to, $subject, $body, $headers);
}
?>
