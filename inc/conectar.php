<?php
	class conectar {
 
    /*var $host       = 'localhost';
    var $usuario    = 'root';
    var $senha      = '';
    var $banco      = 'barrobello';*/
	
	var $host       = 'localhost';
    var $usuario    = 'hesk';
    var $senha      = 'programador321';
    var $banco      = 'barrobello';
 
    var $conexao    = null;
    var $query      = null;
 
    function conecta() {
        $this->conexao = mysql_connect($this->host, $this->usuario, $this->senha);
        $status = mysql_select_db($this->banco, $this->conexao);
        return $status;
    }
 
    function consulta($query) {
        $this->query = mysql_query($query);
        return $this->query;
    }
 
    function resultado() {
        return mysql_fetch_assoc($this->query);
    }
	
	
}
?>