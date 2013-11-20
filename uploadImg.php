<?php
if(!isset($_SESSION)){
	session_start();
}

$usuarioLogado = $_SESSION['usuario'];
if(empty($usuarioLogado)){
	header('Location: ../index.php');
}

include_once 'admin/dbConfig.php';

$trataAnoAlbum = $_POST['getResultOption'];
$ano = substr($trataAnoAlbum, 0, 4); 
$nomeAlbum = substr($trataAnoAlbum, -7, 12);
$idAlbum = $_POST['idAlbum'];
$descAlbum = $_POST['descAlbum'];

/*echo "ID ALBUM: ".$idAlbum."<br>";
echo "ANO E ALBUM: ".$trataAnoAlbum."<br>";
echo "APENAS ANO: ".$ano."<br>";
echo "APENAS ALBUM: ".$nomeAlbum."<br>";
echo "DESCRICAO FOTO: ".$descAlbum."<br>";
echo "IMAGEM: " . $uploadfile;
*/

$uploaddir = 'imagens/albuns/'.$ano.'/';
$uploadfile = $uploaddir . $_FILES['file']['name'];

$sql = "INSERT INTO tabimagensalbum (fkIdAlbum, imagem, descricao) VALUES('$idAlbum', '$uploadfile', '$descAlbum')";
        $query = mysql_query($sql);
if ($query === false) {
            echo "Sem sucesso ao executar consulta ($sql) no DB: " . mysql_error();
            exit;
        }
else
{
	if (move_uploaded_file($_FILES['file']['tmp_name'], $uploaddir . $_FILES['file']['name'])) {
    print "O arquivo é valido e foi carregado com sucesso. Aqui esta alguma informação:\n";
	echo "<div>DADOS INSERIDOS COM SUCESSO!</div>";
	header('Location: admin/index.php');	
	}
}		

?>