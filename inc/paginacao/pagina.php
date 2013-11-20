<?php 
$mysql_hostname = "localhost";
$mysql_user = "root";
$mysql_password = "";
$mysql_database = "barrobello";
$prefix = "";
$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

//######### INICIO Paginação
$idAlbum = $_GET['id'];
$anoAlbum = $_GET['ano'];

//echo "ID DO ALBUM: " . $idAlbum ."<br />";
//echo "ANO DO ALBUM: " . $anoAlbum ."<br />";

	$numreg = 9; // Quantos registros por página vai ser mostrado
	if (!isset($_GET['pg'])) {
		$pg = 0;
	}
	$inicial =  $_GET['pg'] * $numreg;
	
//######### FIM dados Paginação
	if(isset($idAlbum))
	{
		$filtro .= " AND tabalbuns.idAlbuns = ".$idAlbum;
	}
	else{
		$filtro = "";
	}
	
	if(isset($anoAlbum))
	{
		$filtro .= " AND tabalbuns.ano = ".$anoAlbum;
	}
	else{
		$filtro = "";
	}
	
	// Faz o Select pegando o registro inicial até a quantidade de registros para página
	$sql = mysql_query("select tabalbuns.idAlbuns, tabalbuns.ano, tabimagensalbum.imagem 
	from tabalbuns, tabimagensalbum where tabalbuns.idAlbuns = tabimagensalbum.fkIdAlbum $filtro LIMIT $inicial, $numreg");

	// Serve para contar quantos registros você tem na seua tabela para fazer a paginação
	$sql_conta = mysql_query("select tabalbuns.idAlbuns, tabalbuns.ano, tabimagensalbum.imagem 
	from tabalbuns, tabimagensalbum where tabalbuns.idAlbuns = tabimagensalbum.fkIdAlbum $filtro");
	
	$quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra paginação
	
	//include("paginacao.php"); // Chama o arquivo que monta a paginação. ex: << anterior 1 2 3 4 5 próximo >>
    
?>
<!DOCTYPE HTML>
<html lang="pt-BR">
<head>
<title>Barrobello - Blocos e telhas cerâmicas</title>
<script src="../../scripts/jquery-1.10.2.min.js"></script>
<script src="../../scripts/album.js"></script>
<link rel="stylesheet" media="all" href="../../style/albuns.css" />

<!-- CSS PAGINACAO -->
<style type="text/css"> 
<!--
.pgoff {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #FF0000; text-decoration: none}
a.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #003366; text-decoration: none}
a:hover.pg {font-family: Verdana, Arial, Helvetica; font-size: 11px; color: #0066cc; text-decoration:underline}
-->
</style>

<!-- CSS RODRIGO -->
<style type="text/css">
body{font-family: MyriadPro-Regular, 'Myriad Pro Regular', MyriadPro, 'Myriad Pro', Helvetica, Arial, sans-serif;}
.menu{display:inline; line-height:60px; text-decoration:none; color:#9b9b9a; font-weight:bold; padding:0px 7px; text-align:center;}
.menu:hover{color:#f7a565;}
</style>

<!-- SCRIPT LIGHTBOX -->
    <script src="js/jquery-1.7.2.min.js"></script>
    <script src="js/lightbox.js"></script>
    <link href="css/lightbox.css" rel="stylesheet" />
       
</head>
<body style='margin:0px; background-image:url(../../imagens/bgblocos.png);'>
<div style='width:980px; margin:0px auto; background-image:url(../../imagens/bgtopoblocos.png); background-position:right; background-repeat:no-repeat;'>
	<div style='display:table-cell; width:360px; height:140px; text-align:center;'><a href="../../index.php"><img src="../../imagens/logo.png" border=0></a></div>
	<div style='display:table-cell; width:620px; height:140px; vertical-align:top;'>
		<div align="right" style='color:#5b5b5b; font-weight:bold; font-size:12px; padding:40px 8px 0px 0px;'>
			0800 - 703 1533<br />TEL/FAX: 21(19)3567-1533 - vendas@ceramicabarrobello.com.br
		</div>
		<div style="padding:0px; margin:20px; margin-right:45px; text-align:right;">
			<a class=menu href="../../ceramica.php">A CERÂMICA</a>
			<a class=menu href="../../blocos.php">BLOCOS</a>
			<a class=menu href="../../telhas.php">TELHAS</a>
			<a class=menu href="../../fotos.php" style='padding-top:26px; background-image:url(../../imagens/cursor.png); background-position:center top; background-repeat:no-repeat;'>FOTOS</a>
			<a class=menu href="../../contato.php">CONTATO</a>
		</div>
	</div>
</div>
<br><br>

<div id="album">
<div id="anoAlbum">
        <?php 
                $pg = $_GET['pg'];

                $quant_pg = ceil($quantreg/$numreg);
                $quant_pg++;

                // Verifica se esta na primeira página, se nao estiver ele libera o link para anterior
                if ( $pg > 0) { 
                echo "<a href=".$PHP_SELF."?pg=".($pg-1) ."class=pg><b>&laquo; anterior</b></a>";
                } else { 
                echo "<font color=#CCCCCC>&laquo; anterior</font>";
                }

                // Faz aparecer os numeros das página entre o ANTERIOR e PROXIMO
                for($i_pg=1;$i_pg<$quant_pg;$i_pg++) { 
                // Verifica se a página que o navegante esta e retira o link do número para identificar visualmente
                if ($pg == ($i_pg-1)) { 
                echo "&nbsp;<span class=pgoff>[$i_pg]</span>&nbsp;";
                } else {
                $i_pg2 = $i_pg-1;
                echo "&nbsp;<a href=".$PHP_SELF."?pg=$i_pg2 class=pg><b>$i_pg</b></a>&nbsp;";
                }
                }

                // Verifica se esta na ultima página, se nao estiver ele libera o link para próxima
                if (($pg+2) < $quant_pg) { 
                echo "<a href=".$PHP_SELF."?pg=".($pg+1)." class=pg><b>próximo &raquo;</b></a>";
                } else { 
                echo "<font color=#CCCCCC>próximo &raquo;</font>";
                }
        ?>
</div>
<table id="tbAlbum" >
	<thead align="left">
		<tr><td align="left">
			
		</td></tr>
	</thead>	
    <tr id="tglCapa">
    <?php 
            $quebraLinha = 0;
            while ($aux = mysql_fetch_array($sql)) {
                echo "<td id='capaAlbum'><a href='../../".$aux['imagem']."' rel='lightbox[roadtrip]'><img src='../../".$aux['imagem']."' width='255' height='171' /></a></td>";
                
                $quebraLinha += 1;

                if($quebraLinha == 3)
                {
                        echo '</tr>';
                        $quebraLinha = 0;
                }
            } 
    ?>

    </div>
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