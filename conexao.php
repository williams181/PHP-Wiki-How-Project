<?php 

  try{

      $conexao = new PDO('mysql:host=localhost;dbname=wikifpe', "root", "");

      $conexao->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);


    }catch(PDOException $e){
      echo $e->getMessage();
    }

?>