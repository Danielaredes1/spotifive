<?php
include('config.php');

if(isset($_POST['email']) || isset($_POST['senha'])) {
    if(strlen($_POST['email']) == 0){
        echo "Preencha este e-mail";
    } 
    
    else if(strlen($_POST['senha']) == 0){
        echo "Preencha sua senha";
    }

    else if(strlen($_POST['genero']) == 0){
        echo "Selecione seu genero";
    }
    
    else if(strlen($_POST['data']) == 0){
        echo "Preencha sua data";
    }
    
    else if(strlen($_POST['nome']) == 0){
        echo "Preencha seu nome";
    }

    else{
        $email = $conexao->real_escape_string($_POST['email']);
        $senha = $conexao->real_escape_string($_POST['senha']);
        $genero = $conexao->real_escape_string($_POST['genero']);
        $data = $conexao->real_escape_string($_POST['data_']);
        $nome = $conexao->real_escape_string($_POST['nome']);

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha' AND genero = '$genero' AND data_ = '$data' AND nome = '$nome'";
        $sql_query = $conexao->query($sql_code) or die("Falha na execução do código SQL: " . $conexao->error);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1){
            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)){
                session_start();
            }

            $_SESSION['ID'] = $usuario['ID'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: login.php");

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
    <title>Cadastro Spotfive</title>
    <link rel="stylesheet" href="login.css">
</head>
<body>
    <div class="cadastro">
        <form action="" method="POST">
            <fieldset>
                <legend>Cadastro</legend>
                <br>
                <div class="input-cadastro">
                    <input type="text" name="nome" id="nome" class="input-usuario">
                    <label for="nome" class="label-usuario">Nome completo</label>
                </div>

                <br>

                <div class="input-cadastro">
                    <input type="text" name="email" id="email" class="input-usuario">
                    <label for="email" class="label-usuario">e-mail</label>
                </div>

                <br>

                <p>Gênero:</p>
                <input type="radio" id="fem" name="genero" value="feminino">
                <label for="fem">Feminino</label> <br>

                <input type="radio" id="masc" name="genero" value="masculino">
                <label for="masc">Masculino</label> <br>

                <input type="radio" id="outro" name="genero" value="outro">
                <label for="outro">Prefiro não informar</label>

                <br><br><br>


                <label for="nascimento">Data de nascimento:</label>
                <br><br>
                <input type="date" name="data_" id="nascimento">

                <br><br>
                
                <div class="input-cadastro">
                    <input type="password" name="senha" id="senha" class="input-usuario">
                    <label for="senha" class="label-usuario">Digite uma senha</label>
                </div>

                <br><br>
    
                <input type="submit" name="submit" id="submit">
        
            </fieldset>
        </form>
    </div>
</body>
</html>
