<?php

if(isset($_POST['email']) && !empty($_POST['email'])) {

$nome = addslashes ($_POST[name]);
$email = addslashes ($_POST[email]);
$mensagem = addslashes ($_POST[message]);

$to = "contato@fernandochiquito.com";
$subject = "Contato - Site";
$body = "Nome: ".$nome. "\r\n".
        "Email: ".$email. "\r \n".
        "Mensagem: ".$mensagem;
$header = "From:paulo@meinberg.biz"."\r\n"
        "Reply-To:"$email."\e\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
  echo("Email enviado com sucesso. Retornaremos o mais rápido possivel");
}else{
  echo("O Email não pode ser enviado. Tente Novamente")";
}


}

?>