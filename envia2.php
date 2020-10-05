<?php 
if (isset($_POST['email']))
{
	$mailDest = $_POST['email'];
	$nome = $_POST['nome'];
	$fone = $_POST['fone'];
	$mensagem = $_POST['mensagem'];
	if (PATH_SEPARATOR ==":") {
		$quebra = "\r\n";
	} else {
		$quebra = "\n";
	}
	$headers = "MIME-Version: 1.1".$quebra;
	$headers .= "Content-type: text/plain; charset=iso-8859-1".$quebra;
	$headers .= "From: paulo@meinberg.biz".$quebra; //E-mail do remetente
	$headers .= "Return-Path: paulo@meinberg.biz".$quebra; //E-mail do remetente
	mail($mailDest, $nome, $fone, $mensagem, $headers, "-r". "paulo@meinberg.biz");
	print "Mensagem enviada com sucesso!";
}else{ ?>