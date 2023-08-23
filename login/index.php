<?php
 
 include('config/valida.php');
 include('templetes/header.php');
 
?>

<title>Login</title>
</head>


<body>

  <!-- FUNDO -->

    <div class="background">
     <img src="https://maisplay.com/wp-content/uploads/2017/09/fundo-animado-de-games-de-luta-18.gif" alt="Fundo Animado" class="background-image">
    </div>


  <!-- BOX DE LOGIN -->

    <div class="content">
     <div class="box">


	      <h2 id="main-title">Sing-in</h2>

         <form id="create-form" action="" method="POST">

            
          <div class="form-grop">

            <label class="cor" for="name">Nome de usuario:</label>

            <input type="text" class="form-control" id="username" name="username" placeholder="Digite o seu e-mail..." required>

          </div>

          <div class="form-grop">

            <label class="cor" for="password">senha:</label>

              <input type="password" class="form-control" id="passeword" name="password" placeholder="Digite a senha..." required>

             <button type="submit" class="button">Validar</button>

             <p class="cadastro">Caso ainda não esteja cadastrado</p>

               <div id="back-link-container">

               <a href="cadastra.php" id="button2"> Cadastrar-se </a>

               </div>

           </div>

      </div>

      

</body>
</html>