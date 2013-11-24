<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Barrobello - Blocos e telhas cerâmicas</title>
<style>
body{font-family: MyriadPro-Regular, 'Myriad Pro Regular', MyriadPro, 'Myriad Pro', Helvetica, Arial, sans-serif;}
.menu{display:inline; line-height:60px; text-decoration:none; color:#9b9b9a; font-weight:bold; padding:0px 7px; text-align:center;}
.menu:hover{color:#f7a565;}
input{margin:8px 0px; border:1px solid #cccccc; width:460px; height:24px;}
*{font-family: MyriadPro-Regular, 'Myriad Pro Regular', MyriadPro, 'Myriad Pro', Helvetica, Arial, sans-serif;}
</style>
</head>
<body style='margin:0px; background-image:url(imagens/bgblocos.png);'>
<div style='width:980px; margin:0px auto; background-image:url(imagens/bgtopoblocos.png); background-position:right; background-repeat:no-repeat;'>
	<div style='display:table-cell; width:360px; height:140px; text-align:center;'><a href="index.php"><img src="imagens/logo.png" border=0></a></div>
	<div style='display:table-cell; width:620px; height:140px; vertical-align:top;'>
		<div align="right" style='color:#5b5b5b;font-weight:bold;font-size:12px; padding:40px 8px 0px 0px;'>
			<span><a href="contato.php" style="text-decoration: none;color:#5b5b5b;font-weight:bold;font-size:12px;" href="#">0800 - 703 1533<br />
    TEL/FAX: 21(19)3567-1533 - vendas@ceramicabarrobello.com.br</a></span>
		</div>
		<div style="padding:0px; margin:20px; margin-right:45px; text-align:right;">
			<a class=menu href="ceramica.php">A CERÂMICA</a>
			<a class=menu href="blocos.php">BLOCOS</a>
			<a class=menu href="telhas.php">TELHAS</a>
			<a class=menu href="fotos.php">FOTOS</a>
			<a class=menu href="contato.php" style='padding-top:26px; background-image:url(imagens/cursor.png); background-position:center top; background-repeat:no-repeat;'>CONTATO</a>
		</div>
	</div>
</div><br><br>
<?php
if(isset($_POST['nome']))
{	
    echo "<div style='background-color:#dd2222; color:#ffffff; padding:12px; text-align:center; font-weight:bold;'>Recebemos sua mensagem. Aguarde que entraremos em contato.</div><br><br>\n";
}
?>
<form action=enviaContato.php method=post name=form1>
<div style='width:980px; margin:0px auto; color:#5B5B5B; font-size:15px;'>
	<div style='display:table-cell;'>
		Nome<br>
		<input type="text" name='nome'><br>
		E-mail<br>
		<input type="text" name='email'><br>
		Cidade<br>
		<input type="text" name='cidade'><br>
		Telefone<br>
		<input type="text" name='telefone'><br>
		Cargo/Profissão<br>
                <input type="text" name='cargo'>
	</div>
	<div style='display:table-cell; padding-left:30px;'>
		Assunto<br>
		<input type="text" name='assunto'><br>
		Mensagem<br>
		<textarea name='mensagem' style='margin:8px 0px; border:1px solid #cccccc; width:460px; height:150px;'></textarea>
		<div style='text-align:right;'>
			<img src=imagens/enviarcontato.png onclick="if(form1.nome.value==''||form1.email.value.indexOf('@')==-1){alert('Preencha todos os campos'); return false;}else form1.submit();">
		</div>
	</div>
</div>
</form><br><br>
<div style='width:980px; margin:0px auto; color:#5B5B5B; font-size:15px;'>
	<div style='display:table-cell; font-size:20px; width:470px; vertical-align:top;'>
		Rod. Anhanguera, Saída 199, KM 01<br>
		Santa Cruz da Conceição - SP<br>
		Caixa Postal 525, Leme - SP CEP 13625-000<br><br>
		<div style='color:#F7A565; font-weight:bold; font-size:30px;'>0800-703 1533<br>(19) 3567-1533</div><br><br>
		<div style='color:#5B5B5B; font-size:28px;'>Trabalhe Conosco</div>
		<div style='color:#5B5B5B; font-size:18px;'>
			<div style='display:table-cell;'>Clique no logotipo ao lado e cadastre o seu currículo.</div>
			<div style='display:table-cell; padding-left:12px;'><a href='http://www.catho.com.br' target=_blank><img src=imagens/catho.png style='vertical-align:middle; border:none;'></a></div>
		</div><br><br>
	</div>
	<div style='display:table-cell; vertical-align:top; padding-left:26px;'>
		<div style='color:#F7A565; font-weight>bold; font-size:30px;'>Veja como chegar:</div><br><br>
		
		<a target="blank_" href="http://maps.google.com/maps?saddr=-22.107887,+-47.418237+%40-22.107887,-47.418237&amp;hl=pt-BR&amp;sll=-22.107649,-47.419299&amp;sspn=0.005636,0.010568&amp;vpsrc=0&amp;doflg=ptk&amp;mra=mift&amp;t=m&amp;z=16&amp;iwloc=ddw0"><img src=imagens/mapa.png></a>
		
		
	</div>
</div><br><br><br><br>
<div style='text-align:center; color:#5A5A5A; font-size:15px; background-color:#ffffff; padding:12px; font-weight:bold;'>
	Rodovia Anhanguera, saída 199 Km 01 Santa Cruz da Conceição/SP CEP 13625-000<br>
	© 2013 - Barrobello Blocos e Telhas Cerâmicas - Direitos Reservados
</div>

</body>
</html>