<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<title>Barrobello - Blocos e telhas cerâmicas</title>
<style>
body{font-family: MyriadPro-Regular, 'Myriad Pro Regular', MyriadPro, 'Myriad Pro', Helvetica, Arial, sans-serif;}
.menu{display:inline; line-height:60px; text-decoration:none; color:#9b9b9a; font-weight:bold; padding:0px 7px; text-align:center;}
.menu:hover{color:#f7a565;}
</style>
<script>
function mostratijolo(img,nome)
{	document.getElementById('detalhes').innerHTML="<div style='color:#0975BD; font-weight:bold; font-size:20px;'>"+nome+"</div><br><table><tr><td style='color:#9B9B99; font-weight:bold;'>Dimensão Real: <span>9x19x39</span><br>Nº Blocos/m: <span>6</span><br>Peso: <span>800g</span></td><td style='color:#9B9B99; font-weight:bold; padding-left:40px;'>Nº Blocos/Palete: <span>40</span><br>Peças por Carga: <span>500</span><br>Paletes por Carga: <span>8</span></td></tr></table>";
	document.getElementById('imgbloco').src='imagens/blocos/'+img+'.png';
}
</script>
</head>
<body style='margin:0px; background-image:url(imagens/bgblocos.png);'>
<div style='width:980px; margin:0px auto; background-image:url(imagens/bgtopoblocos.png); background-position:right; background-repeat:no-repeat;'>
	<div style='display:table-cell; width:360px; height:140px; text-align:center;'><a href="index.php"><img src="imagens/logo.png" border=0></a></div>
	<div style='display:table-cell; width:620px; height:140px; vertical-align:top;'>
		<div align="right" style='color:#5b5b5b; font-weight:bold; font-size:12px; padding:40px 8px 0px 0px;'>
			0800 - 703 1533<br />TEL/FAX: 21(19)3567-1533 - vendas@ceramicabarrobello.com.br
		</div>
		<div style="padding:0px; margin:20px; margin-right:45px; text-align:right;">
			<a class=menu href="ceramica.php">A CERÂMICA</a>
			<a class=menu href="blocos.php" style='padding-top:26px; background-image:url(imagens/cursor.png); background-position:center top; background-repeat:no-repeat;'>BLOCOS</a>
			<a class=menu href="telhas.php">TELHAS</a>
			<a class=menu href="fotos.php">FOTOS</a>
			<a class=menu href="contato.php">CONTATO</a>
		</div>
	</div>
</div><br><br>
<div style='width:980px; margin:0px auto;'>
	<h1 style='color:#0975BD; font-weight:bold; font-size:26px;'>Alvenaria Estrutural</h1><br>
	<div>
		<div style='display:table-cell; width:480px; color:#9B9B99; padding:12px;'>
			This is Photoshop's version  of Lorem Ipsum. Proin gravida nibh vel velit auctor aliquet. Aenean sollicitudin, lorem quis bibendum auctor, nisi elit consequat ipsum, nec sagittis sem nibh id elit. Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor a ornare odio. Sed non  mauris vitae erat consequat auctor eu in elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris in erat justo. Nullam ac urna eu felis dapibus condimentum sit amet a augue. Sed non neque elit. Sed ut imperdiet nisi. Proin condimentum fermentum nunc. Etiam pharetra, erat sed fermentum feugiat, velit mauris egestas quam, ut aliquam massa nisl quis neque. Suspendisse in orci enim.
		</div>
		<div style='display:table-cell; padding-left:10px;' valign=top>
			<div style='color:#0975BD; font-weight:bold; font-size:18px;'>Cadastre-se para receber em seu e-mail detalhes dos Processos Construtivos.</div>
			<?php
				if($_POST[email])
				{	echo "<br><br><div style='background-color:#ee3333; color:#ffffff; padding:8px; text-align:center;'>Enviamos um email para você</div>\n";
				}
			?>
			<form action=alvenaria.php method=post name=form1>
			<div style='color:#5A5A5A; font-size:15px; padding-top:10px;'>
				Nome<br>
				<input style='width:480px; border:1px solid #cccccc; margin:6px 0px; height:22px;' name=nome><br>
				E-mail<br>
				<input style='width:420px; border:1px solid #cccccc; margin:6px 0px; height:22px;' name=email>
				<img src=imagens/btnenviarblocos.png style='float:right; cursor:pointer;' onclick="form1.submit();">
			</div>
			</form>
		</div>
	</div><br><br>
	<div style='color:#0975BD; font-weight:bold; font-size:18px;'>
		Maior produtividade (redução no tempo de construção)<br><br>
		Menor consumo de aço<br><br>
		Menor consumo de concreto<br><br>
		Menor consumo de argamassa<br><br>
		Sem desperdício de material<br><br>
		Redução do entulho da obra<br><br>
		Elevação da alvenaria em conjunto com tubulação elétrica<br><br>
		Amarração perfeita da alvenaria sem quebra de bloco<br><br>
	</div>
	<div style='text-align:center;'><img src=imagens/vedacaobaixo.png></div>
	<div style='width:980px; margin:0px auto;'>
		<div style='display:table-cell; width:490px; height:140px; width:460px; color:#9B9B99; padding:12px;'>
			<a href=blocos.php style='color:#333333; text-decoration:none;'>
				<h3 style='color:#0975BD; font-weight:bold; font-size:20px;'>Produtos</h3>
				Saiba como proceder em todas as fases da obra, utilizando telhas Barrobello.
			</a>
		</div>
		<div style='display:table-cell; width:490px; height:140px; width:460px; color:#9B9B99; padding:12px;'>
			<a href=detalhesconstrutivos.php style='color:#333333; text-decoration:none;'>
				<h3 style='color:#0975BD; font-weight:bold; font-size:20px;'>Detalhes Construtivos</h3>
				Saiba como proceder em todas as fases da obra, utilizando telhas Barrobello.
			</a>
		</div><br><br>
	</div>
</div>
<div style='text-align:center; color:#5A5A5A; font-size:15px; background-color:#ffffff; padding:12px; font-weight:bold;'>
	Rodovia Anhanguera, saída 199 Km 01 Santa Cruz da Conceição/SP CEP 13625-000<br>
	© 2013 - Barrobello Blocos e Telhas Cerâmicas - Direitos Reservados
</div>
</body>
</html>