<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Barrobello - Blocos e telhas cerâmicas</title>
<meta name="" content="" charset="UTF-8">
</head>
<body>

<?php 
if(!isset($_SESSION)){
	session_start();
}

$usuarioLogado = $_SESSION['usuario'];
if(empty($usuarioLogado)){
	header('Location: ../index.php');
}

$idAlbum = $_GET['idAlbum'];

include_once '../inc/conectar.php'; 
		
$sql2 = new conectar();
$sql2->conecta();
$busca2 = "SELECT * FROM tabalbuns WHERE idAlbuns =".$idAlbum;
$sql2->consulta($busca2);

$idAlbuns = null;
$ano = null;
$imgCapa = null;
$nomeAlbum = null;

while ($dados2 = $sql2->resultado()) {
	$idAlbuns = $dados2['idAlbuns'];
	$ano = $dados2['ano'];
	$imgCapa = $dados2['imgCapa'];
	$nomeAlbum = $dados2['nomeAlbum'];
	}
	
/*
echo "ID: "	. $idAlbuns . "<br>";
echo "ANO: "	. $ano. "<br>";
echo "IMAGEM: "	. $imgCapa. "<br>";
echo "ALBUM: "	. $nomeAlbum . "<br>";
*/	
?>

<form id="frmEditarAlbum" name="frmEditarAlbum" method="POST" enctype="multipart/form-data" action="../atualizaCapa.php">
<div style="width: 620px; height: 230px; border: 1px solid blue; padding-top: 15px; padding-left: 5px;">
	<div id="descAlbum" style="float: left;">
		ID: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="idAlbum" value="<?php echo $idAlbuns; ?>" readonly/>
		<br>ANO:   &nbsp&nbsp&nbsp&nbsp 
		<input type="text" name="ano" value="<?php echo $ano; ?>"/>
		<br>ALBUM:  <input type="text" name="nomeAlbum" value="<?php echo $nomeAlbum; ?>"/>
		<br>IMAGEM: <input type="file" name="file" id="file">
	</div>
	<div id="imgAlbum" style="float: left;">
		<img width="255" height="171" src="<?php echo '../'.$imgCapa; ?>  "/>
	</div>
	<div style="clear: both;" align="center">
		<input type="submit" name="submit" value="Atualizar"/>
	</div>
</div>	
</form>

</body>
</html>