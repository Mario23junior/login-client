<?php
session_start();

require_once ("../model/Conexao.php");
require_once ("../model/users.php");

 $exibir_Dados = new Users();
 $exibir_Dados->dataUser();

?>
