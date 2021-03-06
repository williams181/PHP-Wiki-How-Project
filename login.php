<!DOCTYPE html>
 <html>
     <head>
       <title>Login</title>
         <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="estilo/estilo.css">
        <link href='https://fonts.googleapis.com/css?family=Titillium+Web:400,300,600' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        <link rel="stylesheet" href="css/style.css">
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
        <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="cadastro.php"><span class="glyphicon glyphicon-list-alt"></span> Cadastre-se</a></li>
        <li><a href="faq.html"><span class="glyphicon glyphicon-question-sign"></span>FAQ</a></li>
        <li><a href="faleconosco.html"><span class="glyphicon glyphicon-envelope"></span>Fale conosco</a></li>
      </ul>
    </div>
  </div>
</nav>
          <div class="form">
          <div class="content">
         <div id="login">   
                  <h1>Bem Vindo de Volta!</h1>
                  
                  <form action="verificaLogin.php" method="post">
                  
                    <div class="field-wrap">
                    
                    <input type="email" required  name="login" placeholder="Digete seu email">
                  </div>
                  
                  <div class="field-wrap">
                 
                    <input type="password" required  name="senha" placeholder="Digite sua senha" >
                  </div>
                  
                  <button class="button button-block"/>Entrar</button>
                  
                  </form>

                </div>
                
                </div>
              </div><!--content -->

              <footer class="container-fluid text-center">
  <p>Créditos</p>
</footer>
     </body>
 </html>