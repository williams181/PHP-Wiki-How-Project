

<?php


  try{

       require('conexao.php');
        $stmt = $conexao->prepare("insert into faleConosco (nome, email, comentario) values (?, ?, ?);");
        



        $nome = $_POST["nome"];
        $email = $_POST["email"];
        $comentario = $_POST["comentario"];

       

        $stmt->bindParam(1, $nome);
        $stmt->bindParam(2, $email);
        $stmt->bindParam(3, $comentario);


        $stmt->execute();

        header("Location: index.html");


  }catch(PDOException $e){
      echo $e->getMessage();
    }



 ?>

 