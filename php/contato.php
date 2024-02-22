<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $mensagem = $_POST["mensagem"];
    $data_visita = $_POST["data_visita"];
    $hora_visita = $_POST["hora_visita"];

    $destinatario = "odiloncorrea@gmail.com";
    $assunto = "Formulário de Contato - Pedido de Visita";

    $mensagem_email = "Nome: $nome\n";
    $mensagem_email .= "E-mail: $email\n";
    $mensagem_email .= "Mensagem:\n$mensagem\n";
    $mensagem_email .= "Data de Visita: $data_visita\n";
    $mensagem_email .= "Hora de Visita: $hora_visita\n";

    $headers = "From: $email";

    if (mail($destinatario, $assunto, $mensagem_email, $headers)) {
        echo "Obrigado por entrar em contato. Sua mensagem foi enviada com sucesso.";
    } else {
        echo "Desculpe, ocorreu um erro ao enviar sua mensagem.";
    }
}
?>