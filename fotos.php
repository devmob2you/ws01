<?php 
include_once 'inc/conectar.php'; 

$linkAno = $_GET['ano'];
$filtro = "";
if(isset($linkAno))
{
	$filtro = " AND ano = ".$linkAno; 
}
else
{
	$filtro = "";
}
    // Chamar a classe para conectar o banco
    $sql = new conectar();
 
    //Conecta-se ao banco de dados usando os valores padrões
    $sql->conecta();
    // Define e executa uma query SQL

	
	if($filtro <> ""){
		$busca = "SELECT distinct idAlbuns, ano, imgCapa, nomeAlbum FROM tabalbuns WHERE idAlbuns > 0 $filtro ";
    	$sql->consulta($busca);
	}
	else
	{
		$busca = "SELECT distinct idAlbuns, ano, imgCapa, nomeAlbum FROM tabalbuns order by ano";
    	$sql->consulta($busca);
	}
    
	
	
	//Nova conexao, para CAPA
	$sql2 = new conectar();
	$sql2->conecta();
	if($filtro <> ""){
		$busca2 = "SELECT distinct idAlbuns, ano, imgCapa, nomeAlbum FROM tabalbuns WHERE ano =  ".$linkAno;
	}
	else
	{
		$busca2 = "SELECT distinct idAlbuns, ano, imgCapa, nomeAlbum FROM tabalbuns order by ano desc limit 3";
	}
	$sql2->consulta($busca2);
	
	//Nova conexao, apenas para data
	$sql3 = new conectar();
	$sql3->conecta();
	$filtro3 = "";
	if($filtro3 <> ""){
		$busca3 = "SELECT distinct ano FROM tabalbuns WHERE ano =  ".$linkAno." limit 5";
	}
	else
	{
		$busca3 = "SELECT distinct ano FROM tabalbuns limit 5";
	}
	$sql3->consulta($busca3);
	//Jogar esse white num bloco php
    /*while ($dados = $sql->resultado()) {
        echo $dados['ano'];
    } */
 
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<title>Barrobello - Blocos e telhas cerâmicas</title>
<script src="scripts/jquery-1.10.2.min.js"></script>
<script src="scripts/album.js"></script>
<link rel="stylesheet" media="all" href="style/albuns.css" />
<style>
body{font-family: MyriadPro-Regular, 'Myriad Pro Regular', MyriadPro, 'Myriad Pro', Helvetica, Arial, sans-serif;}
.menu{display:inline; line-height:60px; text-decoration:none; color:#9b9b9a; font-weight:bold; padding:0px 7px; text-align:center;}
.menu:hover{color:#f7a565;}
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
			<a class=menu href="fotos.php" style='padding-top:26px; background-image:url(imagens/cursor.png); background-position:center top; background-repeat:no-repeat;'>FOTOS</a>
			<a class=menu href="contato.php">CONTATO</a>
		</div>
	</div>
</div>
<br><br>

<div id="album">
<table id="tbAlbum">
	<thead align="left">
		<tr><td align="left">
			<ul id="linkAno">
			<?php 
			    while ($dados3 = $sql3->resultado()) {
					echo "<li><a href='fotos.php?ano=".$dados3['ano']."'>".$dados3['ano']."</a></li>";
			    } 
			?>
			</ul>
		</td></tr>
	</thead>
	
		<tr id="tglCapa">
		<?php 
		    while ($dados2 = $sql2->resultado()) {
				echo "<td id='capaAlbum'><a href='inc/paginacao/pagina.php?id=".$dados2['idAlbuns']."&ano=".$dados2['ano']."'><img src='".$dados2['imgCapa']."'width='255' height='171'/><p id='legendaAlbum'>".$dados2['nomeAlbum']."</p></a></td>";
		    } 
		?>
		</tr>
</table>
	
</div>

<div class="clear"></div>
<br><br>
<div style='text-align:center; color:#5A5A5A; font-size:15px; background-color:#ffffff; padding:12px; font-weight:bold;'>
	Rodovia Anhanguera, saída 199 Km 01 Santa Cruz da Conceição/SP CEP 13625-000<br>
	© 2013 - Barrobello Blocos e Telhas Cerâmicas - Direitos Reservados
</div>
</body>
</html>