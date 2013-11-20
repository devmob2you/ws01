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
		
	$sql3 = new conectar();
	$sql3->conecta();
	$busca3 = "SELECT * FROM tabimagensalbum WHERE fkIdAlbum =".$idAlbum;
	$sql3->consulta($busca3);
	$a = null;
	while ($dados3 = $sql3->resultado()) {
			 $a = $a+1;
			  }		  
	
	if($a >=1){
		header('Location: erro.php');
	}
	else
	{
	$sql2 = new conectar();
	$sql2->conecta();
	$busca2 = "DELETE FROM tabalbuns WHERE idAlbuns =".$idAlbum;
	$sql2->consulta($busca2);
	echo '<script type="text/javascript">alert("Dados excluidos com sucesso!"); </script>';
		header('Location: index.php');
	}
?>

</body>
</html>