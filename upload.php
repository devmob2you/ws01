<?php
if(!isset($_SESSION)){
	session_start();
}

$usuarioLogado = $_SESSION['usuario'];
if(empty($usuarioLogado)){
	header('Location: ../index.php');
}

include_once 'admin/dbConfig.php';
$ano = $_POST['ano'];
$nomeAlbum = $_POST['nomeAlbum'];

$uploaddir = 'imagens/albuns/capa/';
$uploadfile = $uploaddir . $_FILES['file']['name'];

$sql = "INSERT INTO tabalbuns (ano, imgCapa, nomeAlbum) VALUES('$ano', '$uploadfile', '$nomeAlbum')";
        $query = mysql_query($sql);
if ($query === false) {
            echo "Sem sucesso ao executar consulta ($sql) no DB: " . mysql_error();
            exit;
        }
else
{
	if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir . $_FILES['file']['name'])) {
    print "O arquivo é valido e foi carregado com sucesso. Aqui esta alguma informação:\n";
	echo "<script>alert('Dados inseridos com sucesso!')</script>";
	header('Location: admin/index.php');	
	}
}		

?>