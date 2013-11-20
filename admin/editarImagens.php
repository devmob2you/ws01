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

$idAlbum = $_GET['idImgAlbum'];

include_once '../inc/conectar.php'; 
		
$sql2 = new conectar();
$sql2->conecta();
$busca2 = "SELECT * FROM tabimagensalbum WHERE idImgAlbum =".$idAlbum;

$sql2->consulta($busca2);

$idImgAlbum = null;
$fkIdAlbum = null;
$imagem = null;
$descricao = null;

while ($dados2 = $sql2->resultado()) {
	$idImgAlbum = $dados2['idImgAlbum'];
	$fkIdAlbum = $dados2['fkIdAlbum'];
	$imagem = $dados2['imagem'];
	$descricao = $dados2['descricao'];
	}
	
/*
echo "ID IMAGEM: "	. $idImgAlbum . "<br>";
echo "FK ID IMAGEM: " .$fkIdAlbum . "<br>";
echo "IMAGEM: "	. $imagem . "<br>";
echo "DESCRICAO: "	. $descricao . "<br>";
*/

?>

<form id="frmEditarAlbum" name="frmEditarAlbum" method="POST" enctype="multipart/form-data" action="../atualizaImagem.php">
<div style="width: 650px; height: 230px; border: 1px solid blue; padding-top: 15px; padding-left: 5px;">
	<div id="descAlbum" style="float: left;">
		ID: &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
		<input type="text" name="idImgAlbum" value="<?php echo $idImgAlbum; ?>" readonly/>
		<br>ID ALBUM:   &nbsp&nbsp&nbsp&nbsp 
		<input type="text" name="fkIdAlbum" value="<?php echo $fkIdAlbum; ?>" readonly/>
		
		<br>IMAGEM: <input type="file" name="file" id="file">
		<br>DESCRI&Ccedil;&Atilde;O:  &nbsp
		<input type="text" name="descAlbum" value="<?php echo $descricao; ?>"/>
		
	</div>
	<div id="imgAlbum" style="float: left; margin-left: 25px;">
		<img width="255" height="171" src="<?php echo '../'.$imagem; ?>  "/>
	</div>
	<div style="clear: both;" align="center">
		<input type="submit" name="submit" value="Atualizar"/>
	</div>
</div>	
</form>

</body>
</html>