<?php
require_once("Conexao.php");

 class conexao {

     public static $instance;

       public static function get_instance(){
          if(!isset(self::$instance)){
             self::$instance = new PDO("mysql:host=localhost; dbname=dataBase;", "root", "sarutobi",
             array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
             self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
          }
           return self::$instance;
       }
 }

?>
