<?php

define ("DB_HOST", "localhost"); // set database host

define ("DB_USER", "root"); // set database user

define ("DB_PASS",""); // set database password

define ("DB_NAME","barrobello"); // set database name



$link = mysql_connect(DB_HOST, DB_USER, DB_PASS) or die("Não foi possível realizar a conexão.");
$db = mysql_select_db(DB_NAME, $link) or die("Impossível selecionar o banco de dados");

?>