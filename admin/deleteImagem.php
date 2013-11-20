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
	$busca2 = "DELETE FROM tabimagensalbum WHERE idImgAlbum =".$idAlbum;
	$sql2->consulta($busca2);
	header('Location: index.php');
?>

</body>
</html>