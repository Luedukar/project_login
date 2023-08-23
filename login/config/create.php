<?php 


   session_start();

   include_once("config/connect.php");

   

   $data = $_POST;

     // MODIFICAÇÕES NO BANCO

   if (!empty($data)) {


      // CRIAR CONTATO

      if ($data["type"] === "create") {
         
        $nome = $data["nome"];
        $username = $data["username"];
        $password  = $data["password"];
        $tel  = $data["tel"];
        $age  = $data["age"];

        $query = "INSERT INTO usuarios (nome, username, password, tel, age) VALUES (:nome, :username, :password, :tel, :age)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":nome", $nome);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->bindParam(":tel", $tel);
        $stmt->bindParam(":age", $age);

        try {
           
        $stmt->execute();
        $_SESSION['msg'] = "Cadastro realizado com sucesso! clique <a href='index.php'>aqui</a> para voltar e fazer login.";

      } catch(PODEException $e) {

        // ERRO na coneção

         $erro = $e->getMessage();

         echo "Erro: $error";
      }

    } header("location: sucesso.php");

  }

$conn = null;

?>