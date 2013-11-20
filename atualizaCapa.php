<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
        "http://www.w3.org/TR/html4/strict.dtd">
<html>
<head>
<title>Barrobello - Blocos e telhas cerâmicas</title>
<meta name="" content="" charset="UTF-8">
</head>
<body>
<?php 

$uploaddir = 'imagens/albuns/capa/';
$uploadfile = $uploaddir . $_FILES['file']['name'];

$idAlbum = $_POST['idAlbum'];
$ano = $_POST['ano'];
$nomeAlbum = $_POST['nomeAlbum'];
$imagem = $uploadfile;

include_once 'inc/conectar.php'; 
		
	$sql3 = new conectar();
	$sql3->conecta();
	if(empty($_FILES['file']['name'])){
		$busca3 = "UPDATE tabalbuns SET ano ='$ano', nomeAlbum ='$nomeAlbum' WHERE idAlbuns=".$idAlbum;
	}
	else{
		move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir . $_FILES['file']['name']);
		$busca3 = "UPDATE tabalbuns SET ano ='$ano', imgCapa = '$imagem', nomeAlbum ='$nomeAlbum' WHERE idAlbuns=".$idAlbum;
	}
	
	$sql3->consulta($busca3);
	
	if(!isset($sql3)){
		header('Location: admin/erro.php');
	}
	else
	{
		echo '<script type="text/javascript">alert("Dados excluidos com sucesso!"); </script>';
		header('Location: admin/index.php');
	}
?>

</body>
</html>