<?php 
include_once '../inc/conectar.php'; 
if(!isset($_SESSION)){
	session_start();
}

$usuarioLogado = $_SESSION['usuario'];
if(empty($usuarioLogado)){
	header('Location: ../index.php');
}

    // Chamar a classe para conectar o banco
    $sql = new conectar();
 
    // Conecta-se ao banco de dados usando os valores padrões
    $sql->conecta();
        // Define e executa uma query SQL
    $busca = "SELECT * FROM tabalbuns";
    $sql->consulta($busca);
	
	//Nova conexao, para CAPA
	
	$sql2 = new conectar();
	$sql2->conecta();
	$busca2 = "SELECT * FROM tabimagensalbum";
	$sql2->consulta($busca2);
	
	$sql3 = new conectar();
	$sql3->conecta();
	$busca3 = "select distinct tabalbuns.idAlbuns, tabalbuns.ano, tabalbuns.nomeAlbum 
	from tabalbuns LEFT JOIN tabimagensalbum ON tabalbuns.idAlbuns = tabimagensalbum.fkIdAlbum";
	$sql3->consulta($busca3);
	
	$sql4 = new conectar();
	$sql4->conecta();
	$busca4 = "select distinct tabimagensalbum.idImgAlbum, tabimagensalbum.fkIdAlbum, tabimagensalbum.imagem, tabimagensalbum.descricao 
	from tabalbuns INNER JOIN tabimagensalbum ON tabalbuns.idAlbuns = tabimagensalbum.fkIdAlbum";
	$sql4->consulta($busca4);
	
	//Jogar esse white num bloco php
    /*while ($dados = $sql->resultado()) {
        echo $dados['ano'];
    } */

    
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
 <head>
 <meta charset="UTF-8">
   <title>Area administrativa - Ceramica Barrobello</title>
<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
		$('#frame').show(function(){
			$('#frameLstImg').hide();
			$('#frameCadAlbuns').hide();
			$('#frameCadImagens').hide();
			
			$('#lnkCadAlbuns').click(function(){
				$('#frameLstImg').hide();
				$('#frameCadAlbuns').hide();
				$('#frameCadImagens').hide();
				$('#frame').fadeIn(1500);
			});
			
			$('#lnkImagens').click(function(){
				$('#frame').hide();
				$('#frameCadAlbuns').hide();
				$('#frameCadImagens').hide();
				$('#frameLstImg').fadeIn(1500);
			});
			
			$('#lnkNovoAlbum').click(function(){
				$('#frame').hide();
				$('#frameCadAlbuns').fadeIn(1500);
				
			});
			
			$('#lnkNovaImagem').click(function(){
				$('#frameLstImg').hide();
				$('#frameCadImagens').fadeIn(1500);
				
			});
			
			$('#contentFrame2 select').change(function(){
				//Obtem apenas o TEXTO do option SELECIONADO
				var getOptAlbum = $(this).find('option:selected').text();
				$('#getResultOption').val(getOptAlbum);
				//alert(getOptAlbum);
			});
			
		});	
		
	});
</script>

<?php 
if(isset($_GET['pg'])){
	echo "
	<script type='text/javascript'>
	$(document).ready(function(){
		$('#frame').hide(function(){
			$('#frameLstImg').show();
			$('#frameCadAlbuns').hide();
			$('#frameCadImagens').hide();
			
			
			$('#contentFrame2 select').change(function(){
				//Obtem apenas o TEXTO do option SELECIONADO
				var getOptAlbum = $(this).find('option:selected').text();
				$('#getResultOption').val(getOptAlbum);
				//alert(getOptAlbum);
			});
			
		});	
		
	});
</script>";
}
?>
   
<style type="text/css">
body{
	margin: 0;
	padding: 0;
}
	#menu{
		width: 220px;
		height: auto;
		position: relative;
		float: left;
		
		border: 2px solid #F68A1F;
	}
	
	#frame, #frameCadAlbuns, #frameCadImagens, #frameLstImg{
		width: 600px;
		height: 500px;
		float: left;
		
		border: 2px solid #F68A1F;
	}
	
	#frame{
		width: auto;
		height: auto;
	}
	
	#frameLstImg{
		width: auto;
		height: auto;
	}
	
	#frameCadAlbuns{
		width: auto;
		height: auto;
	}
	#frameCadImagens{
		width: auto;
		height: auto;
	}
	
</style>
   
 </head>
 <body>
   <h1>Area administrativa</h1>
   <a href="logout.php">Logout</a> <!-- IMPLEMENTAR! -->
   <br><br>

<div id="menu">
	<p><b>GERENCIAR ALBUNS</b></p>
	<ul>
		<li><a id="lnkCadAlbuns" href="#">Cadastro de Albuns</a></li>
		<li><a id="lnkImagens" href="#">Imagens para o Album</a></li>
	</ul>
</div>

<div id="frame">
	<table width="100%" height="100%" border="1">
		<thead align="left">
		<tr>
			<td>ID</td>
			<td>ANO</td>
			<td>NOME DO ALBUM</td>
			<td>IMAGEM</td>
			<td>AÇÕES <a id='lnkNovoAlbum' href='#'><img src='../imagens/botoes/btnNew.png' /></a></td>
		</tr>
	</thead>
		
		</tr>
		<?php 
			while ($dados = $sql->resultado()) {
					echo "<tr>";
					echo "<td>".$dados['idAlbuns']."</td>";
					echo "<td>".$dados['ano']."</td>";
					echo "<td>".$dados['nomeAlbum']."</td>";
					echo "<td align='center'><img src='../".$dados['imgCapa']."' width='22' height='22' />   </td>";
					echo "<td align='center'>
							<a href='editarAlbum.php?idAlbum=".$dados['idAlbuns']."'><img src='../imagens/botoes/btnEdit.png' /></a> |
							<a href='deleteCapa.php?idAlbum=".$dados['idAlbuns']."'><img src='../imagens/botoes/btnDelete.png' /></a>
						</td>";
					echo "</tr>";
					}
		?>
	
		
	</table>
</div>   

<div id="frameLstImg">
<?php 
	$mysql_hostname = "localhost";
	$mysql_user = "hesk";
	$mysql_password = "programador321";
	$mysql_database = "barrobello";
	$prefix = "";
	
	$bd = mysql_connect($mysql_hostname, $mysql_user, $mysql_password) or die("Opps some thing went wrong");
	mysql_select_db($mysql_database, $bd) or die("Opps some thing went wrong");

	//######### INICIO Paginação
	$idAlbum = $_GET['idImgAlbum'];


		$numreg = 9; // Quantos registros por página vai ser mostrado
		if (!isset($_GET['pg'])) {
			$pg = 0;
		}
		$inicial =  $_GET['pg'] * $numreg;
		
	//######### FIM dados Paginação
		if(isset($idAlbum))
		{
			$filtro .= " AND tabimagensalbum.idImgAlbum = ".$idAlbum;
		}
		else{
			$filtro = "";
		}
		
		// Faz o Select pegando o registro inicial até a quantidade de registros para página
		$sql = mysql_query("select distinct tabimagensalbum.idImgAlbum, tabimagensalbum.fkIdAlbum, tabimagensalbum.imagem, tabimagensalbum.descricao 
	from tabalbuns INNER JOIN tabimagensalbum ON tabalbuns.idAlbuns = tabimagensalbum.fkIdAlbum $filtro LIMIT $inicial, $numreg");

		// Serve para contar quantos registros você tem na seua tabela para fazer a paginação
		$sql_conta = mysql_query("select distinct tabimagensalbum.idImgAlbum, tabimagensalbum.fkIdAlbum, tabimagensalbum.imagem, tabimagensalbum.descricao 
	from tabalbuns INNER JOIN tabimagensalbum ON tabalbuns.idAlbuns = tabimagensalbum.fkIdAlbum $filtro");
		
		$quantreg = mysql_num_rows($sql_conta); // Quantidade de registros pra paginação
		
		$pg = $_GET['pg'];

		$quant_pg = ceil($quantreg/$numreg);
		$quant_pg++;

		// Verifica se esta na primeira página, se nao estiver ele libera o link para anterior
		if ( $pg > 0) { 
		echo "<a id='lnkPaginacao' href=".$PHP_SELF."?pg=".($pg-1) ."class=pg><b>&laquo; anterior</b></a>";
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
		echo "&nbsp;<a id='lnkPaginacao' href=".$PHP_SELF."?pg=$i_pg2 class=pg><b>$i_pg</b></a>&nbsp;";
		}
		}

		// Verifica se esta na ultima página, se nao estiver ele libera o link para próxima
		if (($pg+2) < $quant_pg) { 
		echo "<a id='lnkPaginacao' href=".$PHP_SELF."?pg=".($pg+1)." class=pg><b>próximo &raquo;</b></a>";
		} else { 
		echo "<font color=#CCCCCC>próximo &raquo;</font>";
		}
	?>
	
		<table width="100%" height="100%" border="1">
		<thead align="left">
		<tr>
			<td>ID ALBUM</td>
			<td>IMAGEM</td>
			<td>DESCRIÇÃO</td>
			<td>AÇÕES <a id='lnkNovaImagem' href='#'><img src='../imagens/botoes/btnNew.png' /></a></td>
		</tr>
	</thead>
		</tr>
		
		<?php 
			while ($aux = mysql_fetch_array($sql)) {
					echo "<tr>";
					echo "<td>".$aux['fkIdAlbum']."</td>";
					echo "<td align='center'><img src='../".$aux['imagem']."' width='22' height='22' />   </td>";
					echo "<td>".$aux['descricao']."</td>";
					echo "<td>
							<a href='editarImagens.php?idImgAlbum=".$aux['idImgAlbum']."'><img src='../imagens/botoes/btnEdit.png' /></a> |
							<a href='deleteImagem.php?idImgAlbum=".$aux['idImgAlbum']."'><img src='../imagens/botoes/btnDelete.png' /></a>
						</td>";
					echo "</tr>";
					
			    } 
		?>	
		</div>
		</tr>

	</table>
</div>   

<div id="frameCadAlbuns">
	<div id="contentFrame">
		<form id="frmAlbuns" name="frmAlbuns" method="POST" enctype="multipart/form-data" action="../upload.php">
			<label for="ano">Ano</label>
  			<input type="text" name="ano" id="ano" maxlength="4"><br>
			<label for="imgagemCapa">Imagem da Capa:</label>
			<input type="file" name="file" id="file"><br>
			<label for="lblNomeAlbum">Nome do Album</label>
  			<input type="text" name="nomeAlbum" id="nomeAlbum" maxlength="12"><br>
			
			<input type="submit" name="submit" value="Cadastrar">
			
		</form>
	</div>
</div>   

<div id="frameCadImagens">
	<div id="contentFrame2">
		<form id="frmAlbuns" name="frmAlbuns" method="POST" enctype="multipart/form-data" action="../uploadImg.php">
			
			<label for="album">Selecione um album</label>
			 <select name="idAlbum">
			 <option>Selecione...</option>
			 
			 <?php 
			 while ($dados3 = $sql3->resultado()) { ?>
			 <option value="<?php echo $dados3['idAlbuns'] ?>"><?php echo $dados3['ano'].' - '.$dados3['nomeAlbum'] ?></option>
			 <?php } ?>
			
			<label for="imgagemCapa">Imagem:</label>
			<input type="file" name="file" id="file"><br>
			
			<label for="lblNomeAlbum">Descrição:</label>
  			<input type="text" name="descAlbum" id="descAlbum" maxlength="20"><br>
			
			<input type="hidden" name="getResultOption" id="getResultOption">
			
			<input type="submit" name="submit" value="Cadastrar">
			
		</form>
	</div>  
</div>	<!-- frameCadImagens -->
   
</body>
</html>