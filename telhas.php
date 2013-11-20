<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<title>Barrobello - Blocos e telhas cerâmicas</title>
<style>
body{font-family: MyriadPro-Regular, 'Myriad Pro Regular', MyriadPro, 'Myriad Pro', Helvetica, Arial, sans-serif;}
.menu{display:inline; line-height:60px; text-decoration:none; color:#9b9b9a; font-weight:bold; padding:0px 7px; text-align:center;}
.menu:hover{color:#f7a565;}
span{color:#F7A565;}
</style>
<script>
function telha(t)
{	if(t=='portuguesa')
	{	document.getElementById('portuguesa').style.color='#F3813B';
		document.getElementById('romana').style.color='#9B9B99';
		document.getElementById('nometelha').innerHTML='Telha Portuguesa';
	}
	else
	{	document.getElementById('portuguesa').style.color='#9B9B99';
		document.getElementById('romana').style.color='#F3813B';
		document.getElementById('nometelha').innerHTML='Telha Romana';
	}
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
			<a class=menu href="blocos.php">BLOCOS</a>
			<a class=menu href="telhas.php" style='padding-top:26px; background-image:url(imagens/cursor.png); background-position:center top; background-repeat:no-repeat;'>TELHAS</a>
			<a class=menu href="fotos.php">FOTOS</a>
			<a class=menu href="contato.php">CONTATO</a>
		</div>
	</div>
</div><br><br>
<div style='width:980px; margin:0px auto;'>
	<h1 style='color:#0975BD; font-weight:bold; font-size:26px;'>Linha Completa de Produtos</h1><br>
	<div style='color:#9B9B99; font-size:15px;'>
		As Telhas Barrobello: Romana e Portuguesa são produzidas dentro de todos os padrões exigidos pela ABNT e são certificadas pelo CCB um organismo Acreditado pela coordenação geral do Inmetro. Destacam-se no mercado da construção civil devido à grande preocupação de seus técnicos em produzir telhas com a máxima qualidade.<br><br>
		A preocupação segue desde a extração de matéria-prima (através de uma escavadeira hidráulica de última geração, que proporciona maior autonomia de extração) passando pela produção (a empresa possui a maior extrusora monobloco em operação no Brasil, com capacidade de produção de 70ton/h) até a distribuição do produto (utiliza-se o sistema paletizado, o que confere agilidade, garantindo maior eficiência e reduz as perdas).
	</div><br><br>
	<div style='text-align:center;'><img src=imagens/prime.png></div>
	<div style='text-align:center;'><img src=imagens/vedacaotopo.png></div>
	<div>
		<div style='display:table-cell;'><img src=imagens/romana.png valign=absmiddle></div>
		<div style='display:table-cell; vertical-align:middle; padding:0px 30px; color:#F3813B; font-weight:bold; font-size:26px; cursor:pointer;' id=romana onclick="telha('romana');">Telha Romana</div>
		<div style='display:table-cell;'><img src=imagens/portuguesa.png valign=absmiddle></div>
		<div style='display:table-cell; vertical-align:middle; padding:0px 30px; color:#9B9B99; font-weight:bold; font-size:26px; cursor:pointer;' id=portuguesa onclick="telha('portuguesa');">Telha Portuguesa</div>
	</div><br><br><br><br>
	<div>
		<div style='display:table-cell;'><img src=imagens/telhasromanas.png></div>
		<div style='display:table-cell; vertical-align:middle; padding-left:30px; color:#9B9B99; font-weight:bold;'>
			<div style='color:#0975BD; font-weight:bold; font-size:26px;' id=nometelha>Telha Romana</div><br>
			<table>
				<tr>
					<td>
						Peso: <span>1,2kg</span><br>
						Quantidade: <span>3 peças/ml</span><br>
					</td>
					<td style='padding-left:50px;'>
						400 peças/palete<br>
						Medida do Palet: <span>1,2 x 1m</span><br>
					</td>
				</tr>
			</table><br><br>
			<span>*Natural</span><span style='padding:0px 30px;'>*Hidrofugada</span><span>*Resinada</span>
		</div>
	</div>
	<div style='text-align:center;'><img src=imagens/vedacaobaixo.png></div><br><br>
	<div style='color:#0975BD; font-weight:bold; font-size:24px;'>Calculadora de Telhas</div><br>
	<div style='font-size:16px; color:#A3A1A1;'>
		Saiba quanto você vai gastar e quantas telhas são necessárias para cobrir a área desejada.<br><br>
		<input type=radio name=tt id=rtr checked>Telha Romana <input type=radio name=tt id=rtp>Telha Portuguesa<br><br>
		Área a cobrir: <input style='width:50px; vertical-align:bottom;' value=10 id=area> m<sup>2</sup> <input type=button value=Calcular style='margin-left:20px;' onclick="if(parseInt(document.getElementById('area').value))alert('Serão nescessárias '+(parseInt(document.getElementById('area').value)*4)+' telhas');">
	</div>
</div><br><br>
<div style='text-align:center; color:#5A5A5A; font-size:15px; background-color:#ffffff; padding:12px; font-weight:bold;'>
	Rodovia Anhanguera, saída 199 Km 01 Santa Cruz da Conceição/SP CEP 13625-000<br>
	© 2013 - Barrobello Blocos e Telhas Cerâmicas - Direitos Reservados
</div>
</body>
</html>