<?php
require("phpmailer/class.phpmailer.php");

$nome = $_POST['nome'];
$email = $_POST['email'];

$mail = new PHPMailer();
 
// Charset para evitar erros de caracteres
$mail->Charset = 'UTF-8';
 
// Dados de quem está enviando o email
$mail->From = 'icaro@betonico.com.br';
$mail->FromName = 'Cerâmica Barrobello';
 
// Setando o conteudo
$mail->IsHTML(true);
$mail->Subject = 'Assunto Teste';
$mail->Body     = 'Corpo com HTML embutido';
$mail->AltBody = 'Conteudo sem HTML para editores que não suportam, sim, existem alguns';
 
// Validando a autenticação
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Host     = "ssl://smtp.googlemail.com";
$mail->Port     = 465;
$mail->Username = 'icaro@betonico.com.br';
$mail->Password = 'chokfdc10';
 
// Setando o endereço de recebimento
$mail->AddAddress($email, $nome);
 
// Enviando o e-mail
if ($mail->Send())
{
    echo 'E-mail enviado com sucesso';
}
    
else
{
    echo 'Erro ao enviar e-mail';
}
    

/*
echo "<html>
 
<head>
<title> Processando... </title>
</head>";

$nome = $_POST['nome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$cargo = $_POST['cargo'];
$assunto = $_POST['assunto'];
$mensagem = $_POST['mensagem'];

// adicionei a captura do ip do remetente 
$ip = $_SERVER['REMOTE_ADDR'];

//Seu email, para onde irao as informaÃ§Ãµes do formulÃ¡rio
$mail_destino = "icaro@betonico.com.br";

echo "<body bgcolor=\"#FFFFFF\" leftmargin=\"10\" topmargin=\"10\" marginwidth=\"0\" marginheight=\"0\">
<center><font class=\"texto\">";

//Mensagem de cabeÃ§alho do email
$mail_header = "Contato - Cerâmica Barrobello";

//Mensagem para o email de resposta
$msg_reply = "\nSua solicitação foi enviada com sucesso!\n\nObrigado pelo seu contato!\n\n Esta é uma mensagem automática de confirmação.\n Por Favor não responda este e-mail.\n $ip";

//Mensagem de Erro
$msg_erro = "Atenção!!! O campo E-MAIL não podem estar em branco.";

//Obrigatoriedade
if (email!="")
{
        //Insere dados no banco
        //$sql = "INSERT INTO tbofertas (Email) VALUES ('$email')";
	//mysql_query($sql) or die("Erro ao inserir dados!");
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $cidade = $_POST['cidade'];
        $telefone = $_POST['telefone'];
        $cargo = $_POST['cargo'];
        $assunto = $_POST['assunto'];
        $mensagem = $_POST['mensagem'];
        //Monta corpo do e-mail
	$msg.="$mail_header\n\n";
        $msg.="Nome: $nome\n";
	$msg.="E-mail: $email\n";
        $msg.="Cidade: $cidade\n";
        $msg.="Telefone: $telefone\n";
        $msg.="Cargo: $cargo\n";
        $msg.="Assunto: $assunto\n";
        $msg.="Mensagem: $mensagem\n";
	$msg.="ip da origem: $ip";

	if (mail($mail_destino, "Contato - Cerâmica Barrobello", $msg, "From:SITE:<$email>"))
        {
            //Imprimindo confirmaÃ§Ã£o de envio
            echo 
            " </font></center>
            <html>
            <div align='center'><h2><a href=\"javascript:window.history.go(-1)\">Formulário preenchido com sucesso!</a></h2></div>";

            //Enviando mensagem de confirmaÃ§Ã£o para o email do internauta
            mail("Cerâmica Barrobello<$email>", "Re: Contato Cerâmica Barrobello", $msg_reply, "From:<$mail_destino>");
        }
        else
        echo
            "
            <div align='center'><h2><a href=\"javascript:window.history.go(-1)\">Formulário preenchido com sucesso!</a></h2></div>
            </html><center><br><br><font color=red>
            <b>Erro ao enviar e-mail!</b>
            </font></center>
            ";
	}

        else
        {
	//Alerta sobre os campos obrigatÃ³rios
	echo 
	"
        <br><br><center>
        $msg_erro <br><br>
        <a href=\"javascript:window.history.go(-1)\" class=\"links\">Por favor, volte e preencha corretamente.</a>
        </center>
        ";
	}
 
 */
?>