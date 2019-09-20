<?php
 //arquivo de session para sair do sistema logado
session_start();

require_once ("../model/Conexao.php");
require_once ("../model/users.php");

 $users = new Users();
 $users->logout();

 header("Location: ../login.php?session_ending_success");
?>
