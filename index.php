<?php
include('security.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spotfive</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
</head>
<body>
    <div id="modal-overlay">
        <div id="creditos">
            <h2>Autores</h2>
            <p>Caio, Daniella, Davi e Samuel</p>
            <button id="close-modal">Fechar</button>
        </div>
    </div>
    <header>
        <div id="logotipo">
            <a href="index.php"><img id="logo" src="imgs/logo.png" alt="logotipo"></a>
            <h3 id="site_name">SPOTFIVE</h3>
        </div>
        <div id="pesquisar">
            <img src="imgs/iconlupa.png" id="lupa_icon" alt="">
            <input type="text" id="search" placeholder="Digite para pesquisar...">
        </div>
        <div id="adicionar">
            <button id="mais_icon">+</button>
        </div>
        
        <div id="conta">
            <button id="botao_log"> log </button>
        </div>

        <div>
            <ul class="profile">
                //<li><a href="profile.php" id="mydados">Meus dados</a></li>
                <li><a href="logout.php" id="bye">Desconectar</a></li>
            </ul>
        </div>
              
        <div>
            <ul class="menu">
                <li><button class="music">Nova música</button></li>
                <li><button class="playlist">Nova playlist</button></li>
                <li><button class="categoria">Nova categoria</button></li>
            </ul>
        </div>
    </header>
    
    <dialog class="music">
        <div class="popup">
            <h2><strong>Nova música</strong></h2>
            <input type="text" class="music" placeholder="Título">
            <input type="text" class="music" placeholder="Link">
            <div class="botoes">
                <button class="salvar">Salvar</button>
                <button class="cancelar">Cancelar</button>
            </div>
        </div>
    </dialog>

    <dialog class="playlist">
        <div class="popup">
            <h2><strong>Nova playlist</strong></h2>
            <input type="text" class="playlist" placeholder="Nome">
            <div class="botoes">
                <button class="salvar">Salvar</button>
                <button class="cancelar">Cancelar</button>
            </div>
        </div>
    </dialog>
    <dialog class="categoria">
        <div class="popup">
            <h2><strong>Nova categoria</strong></h2>
            <input type="text" class="categoria" placeholder="Categoria">
            <div class="colorCategoria">
                <label for="color">Selecione uma cor:</label>
                <input type="color" id="color">
              </div>
            <div class="botoes">
                <button class="salvar">Salvar</button>
                <button class="cancelar">Cancelar</button>
            </div>
        </div>
    </dialog>

    <section>
        <div class="sidebar">
            <div class="menu-item">
                <a href="#">
                    <img src="imgs/homeicon.png" alt="">
                    <span>Inicio</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="#">
                    <img src="imgs/musicicon.png" alt="">
                    <span>Músicas</span>
                </a>
            </div>
            <div class="menu-item">
                <a href="#">
                    <img src="imgs/playlisticon.png" alt="">
                    <span>Playlists</span>
                </a>
            </div>
        </div>
    
        <main>
            <div class="circle-container">
                <a href="#"><div id="standard" class="circle">Nenhuma categoria <br> criada</div></a>
              </div>
              
        </main>
    </section>
    <script src="header.js"></script>
    <script src="menu.js"></script>
</body>
</html>
