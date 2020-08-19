<?php
    require('vendor/autoload.php');
    // Use the REST API Client to make requests to the Twilio REST API
    use Twilio\Rest\Client;

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
    <?php
        if (isset($_POST['acao'])) {
            $numero = $_POST['numero'];
            $mensagem = $_POST['mensagem'];

            if (preg_match('/[0-9]{9,10}/', $numero)) {
                if (preg_match('/[a-z,0-9]{1,255}/',$mensagem)) {
                    // Your Account SID and Auth Token from twilio.com/console
                    $sid = 'AC3242dd59bc447a1ceb97c3c1d091b986';
                    $token = 'dff650da1545f29704b9eb10799cf7b8';
                    $client = new Client($sid, $token);

                    // Use the client to do fun stuff like send text messages!
                    $client->messages->create(
                        // the number you'd like to send the message to
                        '+55'.$numero,
                        [
                            // A Twilio phone number you purchased at twilio.com/console
                            'from' => '+17606915322',
                            // the body of the text message you'd like to send
                            'body' => $mensagem
                        ]
                    );
                    echo '<script>alert("A mensagem foi enviada com sucesso!")</script>';
                }else{
                    echo '<script>alert("Use entre 1 e 255 caracteres!")</script>';
                }
            }else{
                echo '<script>alert("Número inválido!")</script>';
            }
        }
    ?>
    <section class="contato">
        <h1>Envio de SMS</h1>
        <form method="post">
            <input type="text" name="numero" placeholder="Destinatário...">
            <textarea name="mensagem" placeholder="Sua mensagem..."></textarea>
            <input type="submit" name="acao" value="Enviar!">
        </form>
    </section>
</body>
</html>