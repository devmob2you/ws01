<?php include "dbConfig.php";
if(!isset($_SESSION)){
	session_start();
}
$msg = "";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST["username"];
    $password = md5($_POST["password"]);
	 if ($name == '' || $password == '') {
        $msg = "Preencha todos os campos";
    } else {
        $sql = "SELECT * FROM users WHERE username = '$name' AND password = '$password'";
        $query = mysql_query($sql);

        if ($query === false) {
            echo "Sem sucesso ao executar consulta ($sql) no DB: " . mysql_error();
            exit;
        }

        if (mysql_num_rows($query) > 0) {
			$_SESSION['usuario'] = $name;
            header('Location: index.php');
            exit;
        }

        $msg = "Usuário ou Senha inválidos!";
    }
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Área administrativa - Cerâmica Barrobello</title>
<meta name="description" content=""/>
<meta name="keywords" content=""/>
<link href="style.css" rel="stylesheet" type="text/css">

</head>
<body>

	<form name="frmregister"action="<?= $_SERVER['PHP_SELF'] ?>" method="post" >
		<table class="form" border="0">

			<tr>
			<td></td>
				<td style="color:red;">
				<?php echo $msg; ?></td>
			</tr> 
			
			<tr>
				<th><label for="name"><strong>Nome:</strong></label></th>
				<td><input class="inp-text" name="username" id="username" type="text" size="30" /></td>
			</tr>
			<tr>
				<th><label for="name"><strong>Senha:</strong></label></th>
				<td><input class="inp-text" name="password" id="password" type="password" size="30" /></td>
			</tr>
			<tr>
			<td></td>
				<td class="submit-button-right">
				<input class="send_btn" type="submit" value="Entrar" alt="Submit" title="Submit" />
				
			</tr>
		</table>
	</form>


</body>
</html>
