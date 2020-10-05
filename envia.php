<?

$mensagem = "Nome: ".$_POST['nome']." \n";

//email que o usuário preencheu
$mensagem .= "Email: ".$_POST['email']." \n";
$mensagem .= "Assunto: ".$_POST['assunto']." \n";
$mensagem .= "Telefone: ".$_POST['fone']." \n";
$mensagem .= "Mensagem: ". $_POST['mensagem'];
$headers = "";

//email do seu domínio hospedado
$emailsender = "paulo@meinberg.biz";

//email de quem vai receber
$emaildestinatario = "contato@fernandochiquito.com";
$assunto = "Mensagem do site";

// Envio dos dados do Formulário para seu e-mail:
if(!mail($emaildestinatario, $assunto, $mensagem, $headers ,"-r".$emailsender))

{

// Se for Postfix - hospedagem linux
$headers .= "Return-Path: " . $emailsender . $quebra_linha;

}

echo '

<script type="text/JavaScript">
alert("Seu e-mail foi enviado com sucesso. Obrigado");
location.href="index.html"

</script>

';

 

?>