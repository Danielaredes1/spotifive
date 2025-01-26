<?php

if(isset($_POST['submit'])) {
    include('config.php');

    $email = $_POST['email'];
    $senha =  $_POST['senha'];
    $genero = $_POST['genero'];
    $data = $_POST['data_'];
    $nome = $_POST['nome'];

    $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,genero,data_,senha)
    VALUES ('$nome', '$email', '$genero', '$data', '$senha')");

    header("Location: login.php");
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
