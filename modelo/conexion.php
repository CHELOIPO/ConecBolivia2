<?php

class Conexion{
  
  static public function conectar(){
    $host="localhost";
    $db="bolivia_c_bd";
    $userDB="root";
    $passDB="";
    
    $link=new PDO("mysql:host=".$host.";"."dbname=".$db, $userDB, $passDB);
    $link->exec("set names utf8");
    return $link;
  } 
  
}