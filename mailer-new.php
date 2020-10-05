<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $telefone = $_POST['telefone'];
    $mailFrom = $_POST['mail'];
    $assunto = $_POST['assunto'];
    $message = $_POST['msg'];

    $mailTo = "contato@fernandochiquito.com";
    $headers = "Fom: ".$mailFrom;
    $txt = "Você Recebeu um email de ".$name.".\n\n".$message;



    mail($mailTo, $assunto, $txt, $headers);
    header("Location: index.php?mailsend");
}


?>