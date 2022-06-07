<!DOCTYPE html>
<html>
<head>
	<title>Editar</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* 
       Remover a margem padrão da barra de navegação - bordas inferior e arredondadas */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* 
        Adiciona uma cor de fundo cinza e algum preenchimento ao rodapé */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
      margin-top: 15%;
    }


    
  .carousel-inner img {
      width: 100%; /*
                      Defina largura para 100% */
      margin: auto;
      min-height:200px;
  }

  /* 
      Oculta o texto do carrossel quando a tela tiver menos de 600 pixels de largura */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>
<nav class="navbar navbar-inverse">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="index.html">wikIFPE</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        
        <ul class="nav navbar-nav navbar-right">
          <li><a href="Poste_aqui.html"><span class="glyphicon glyphicon-globe"></span> Poste aqui</a></li>
          <li><a href="pag_edicao.php"><span class="glyphicon glyphicon-transfer"></span> Editar dados</a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
          <li><a href="cadastro.php"><span class="glyphicon glyphicon-list-alt"></span>Cadastre-se</a></li>
          <li><a href="faq.html"><span class="glyphicon glyphicon-question-sign"></span>FAQ</a></li>
          <li><a href="faleconosco.html"><span class="glyphicon glyphicon-envelope"></span>Fale conosco</a></li>
        
        </ul>
      </div>
    </div>
  </nav>
  <center>
  <div class="container">
      <h2>Dados do usuário</h2>
      <p>....................................................................</p>            
      <table class="table table-condensed" border="2">
        <tr>
           <th>Matrícula</th>
           <th>Nome</th>
           <th>Apelido</th>
           <th>Email</th>
           <!-- <th>Senha</th> -->
           <th>Campus</th>
           <th>Opção</th>
        </tr>

        <?php
                require('conexao.php');
                
                $resultado = $conexao->query("select * from usuario");

                foreach ($resultado as $row) {

        ?>
       <tr>
                <td> <?= $row["matricula"]?> </td>
                <td> <?= $row["nome_completo"]?> </td>
                <td> <?= $row["apelido"]?> </td>
                <td> <?= $row["email"]?> </td>
                <!-- <td> <?= # $row["senha"]?> </td> -->
                <td> <?= $row["campus"]?> </td>
                <td>  
                    <a href="pag_edicao.php?nome=<?=$row["nome"]?>">editar</a>
                </td>
        </tr>

            <?php
                }
            ?>

           </table>
        
    </div>  

      </div>
  </center>

<footer id="creditos">
<center>
  <p>Créditos</p>
  <p><a href="faleconosco.html"> Fale Conosco </a></p>
  <p><a href="faq.html">  FAQ</a> </p>
</center>
</footer>

</body>
</html>











	