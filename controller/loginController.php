<?php
session_start();

require_once ("../model/Conexao.php");
require_once ("../model/users.php");


  $users = new Users();

   $email = addslashes($_POST['email']);
   $password = ($_POST['password']);

       if(isset($_POST['email']) && !empty($_POST['email'])) {
         $users->setLogged($email, $password);
       }else {

       }

?>
