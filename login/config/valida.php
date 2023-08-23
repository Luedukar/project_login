<?php 
include('config/connect.php');

 if(isset($_POST['username']) || isset($_POST['password'])) {
   
    if(strlen($_POST['username']) == 0) {
      echo "Preencha seu nome de usuario";
    } else if(strlen($_POST['password']) == 0) {
      echo "Preencha sua senha";
    } else {

      $username = $mysqli->real_escape_string($_POST['username']);
      $password = $mysqli->real_escape_string($_POST['password']);

      $sql_code = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
      $sql_query = $mysqli->query($sql_code) or die("falha na execução do código SQL: " . $mysqli->error);

      $quantidade = $sql_query->num_rows;

      if ($quantidade == 1) {
        
        $usuario = $sql_query->fetch_assoc();

        if (!isset($_SESSION)) {
          session_start();
        }

        $_SESSION['id'] = $usuario['id'];
        $_SESSION['nome'] = $usuario['nome'];

        header("Location: home.php");
      } else {
        
        print '<p class="falha">Nome de usuário e/ou senha incorreto(s)</p>';
        

      }
    }
 }


 
$conn = null;
?>

