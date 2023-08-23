<?php
 include('config/create.php');
 include('templetes/header.php');
 
?>


<title>Cadastro</title>
</head>


<body>

  <!-- FUNDO -->

    <div class="background">
     <img src="https://i.pinimg.com/originals/e6/d7/20/e6d7207d515a89b34a9b89b0da38c5ab.gif" alt="Fundo Animado" class="background-image">
    </div>
  


  <!-- BOX DE CADASTRO -->

    <div class="content">
     <div class="box2">


	      <h2 id="main-title">Sing-up</h2>

         <form id="create-form" action="" method="POST">

          <input type="hidden" name="type" value="create">

          <div class="form-grop">

            <label class="cor" for="name">Seu nome completo:</label>

            <input type="text" class="form-control" id="nome" name="nome" placeholder="Digite o nome completo..." required>

          </div>

            
          <div class="form-grop">

            <label class="cor" for="name">Nome de usuario:</label>

            <input type="email" class="form-control" id="username" name="username" placeholder="Digite o nome seu e-mail..." required>

          </div>

          <div class="form-grop">

            <label class="cor" for="password">Senha:</label>

              <input type="password" class="form-control" id="passeword" name="password" placeholder="Digite a senha..." required>

            </div>

            <div class="form-grop">

            <label class="cor" for="name">Insira seu numero de celular:</label>

            <input type="tel" class="form-control" id="tel" name="tel" placeholder="+xx xx xxxxx-xxxx" required>

          </div>

          <div class="form-grop">

            <label class="cor" for="name">Insira sua data de nascimento:</label>

            <input type="date" class="form-control" id="age" name="age" placeholder="Digite a sua idade..." required>

          </div>


             <div class="botão-container">

              <a href="index.php" class="button3"> voltar </a>

              <button type="submit" class="button3">Criar usuario</button>

               </div>

           </div>

      </div>

</body>
</html>