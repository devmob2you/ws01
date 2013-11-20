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

$idImgAlbum = $_POST['idImgAlbum'];
$fkIdAlbum = $_POST['fkIdAlbum'];
$descricao = $_POST['descAlbum'];
$imagem = $uploadfile;

/*
echo 'ID IMG ALBUM: '.$idImgAlbum.'<br>';
echo 'ID ALBUM: '.$fkIdAlbum.'<br>';
echo 'DESCRICAO: '.$descricao.'<br>';
echo 'IMAGEM: '.$imagem.'<br>';
*/

include_once 'inc/conectar.php'; 
		
	$sql3 = new conectar();
	$sql3->conecta();
	if(empty($_FILES['file']['name'])){
		$busca3 = "UPDATE tabimagensalbum SET descricao ='$descricao' WHERE idImgAlbum=".$idImgAlbum;
	}
	else{
		move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir . $_FILES['file']['name']);
		$busca3 = "UPDATE tabimagensalbum SET descricao ='$descricao', imagem = '$imagem' WHERE idImgAlbum=".$idImgAlbum;
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