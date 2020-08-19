<?php
    require('vendor/autoload.php');


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Projeto SMS</title>
</head>
<body>
    
    <section class="contato">
        <h1>Envio de SMS</h1>
        <form method="post">
            <input type="text" name="numero" placeholder="Destinatário...">
            <textarea name="body" placeholder="Sua mensagem..."></textarea>
            <input type="submit" name="acao" value="Enviar!">
        </form>
    </section>
</body>
</html>