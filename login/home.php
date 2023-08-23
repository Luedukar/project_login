<?php 

  include('config/protect.php');
  include('templetes/header.php');

?>

<title>home</title>
</head>


<body>
     
     Bem vindo a home, <?php echo $_SESSION['nome']; ?>

    <p>
     	<a href="logout.php">Sair</a>
    </p>

</body>
</html>