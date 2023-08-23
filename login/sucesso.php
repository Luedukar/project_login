<?php 
include("config/create.php");
include('templetes/header.php');

if (isset($_SESSION['msg'])) {
     
       $printMsg = $_SESSION['msg'];

       $_SESSION['msg'] = '';
   }


?>

<?php if(isset($printMsg) && $printMsg != ''): ?>

          <p id="msg"><?= $printMsg ?></p>

       <?php endif; ?>


<title>Sucesso</title>
</head>

<body>

</body>
</html>

