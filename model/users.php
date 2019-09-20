<?php
require_once("Conexao.php");

   class Users extends conexao {

        public function setLogged($email, $password){
           $pdo = parent::get_instance();
           $sql = "SELECT * FROM sysBase WHERE email = :email AND password = :password";
           $sql = $pdo->prepare($sql);
           $sql->bindValue(":email", $email);
           $sql->bindValue(":password", $password);
           $sql->execute();

              if($sql->rowCount() > 0){
                 $sql = $sql->fetch();
                  $id = $sql['id'];

                  $_SESSION['user'] = $id;

                 header("Location: ../view/index.php?login_sucess");
              }else {
               echo "<script> alert('e-email e/ou senha incorretos. '); </script>";
               echo "<script> window.location.href = '../login.php' </script>";
               exit;
              }
        }


      //metodo para destruir seção de login
      public function logout(){
        unset($_SESSION['user']);
      }

      //listar dados do banco de dados do banco de dados
       public function dataUser(){

       $pdo = parent::get_instance();
         $sql = "SELECT * FROM users WHERE id = :id";
         $sql = $pdo->prepare($sql);
         $sql->bindParam(":id", $id);
         $sql->execute();

       }

 }

?>
