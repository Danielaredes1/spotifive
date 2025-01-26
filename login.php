<?php
include('config.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {

    if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }
    
    else if(strlen($_POST['nome']) == 0){
        echo "Preencha seu nome";
    }

    else{
        $senha = $conexao->real_escape_string($_POST['senha']);
        $nome = $conexao->real_escape_string($_POST['nome']);

        $sql_code = "SELECT * FROM usuarios WHERE senha = '$senha' AND nome = '$nome'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['ID'] = $usuario['ID'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: index.php");

        }
        else{
            echo "Falha ao cadastrar!";
        }
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="login.css">
    <title>Spotfive</title>
</head>
<body>
    <div id="tela-login">
        <h1>Login</h1>
        <form action="" method="POST">
            <input type="text" placeholder="nome" name="nome" required>
            <br><br>
            <input type="password" placeholder="senha" name="senha" required>
            <br><br>
            <input type="submit" name="submit" id="submit">
        </form>
    </div>
</body>
</html>

