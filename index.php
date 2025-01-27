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
            <a href="logout.php">Sair</a>
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
            <input type="text" class="categoria" placeholder="Nome da categoria">
            <div class="imgCategoria">
                <label for="imgperfil">Escolha uma foto:</label>
                <input type="text" id="imgperfil" placeholder="Link foto">
              </div>
            <div class="botoes">
                <button class="salvar">Salvar</button>
                <button class="cancelar">Cancelar</button>
            </div>
        </div>
    </dialog>

    <section>
        <div class="sidebar">
        <a href="index.php">
                <div class="menu-item">
                    <img src="imgs/homeicon.png" alt="">
                    <span>Inicio</span> 
                </div>
            </a>
            <a href="musicas.html">
                <div class="menu-item">
                    <img src="imgs/musicicon.png" alt="">
                    <span>Músicas</span>
                </div>
            </a>
            <a href="#">
                <div class="menu-item">
                    <img src="imgs/playlisticon.png" alt="">
                    <span>Playlists</span>
                </div>
            </a>
        </div>
    
        <main>
            <div class="circle-container">
                <a class="link_categoria" href="musicas.html#sertanejo">
                    <div class="circle">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRploOrwJOLiJHXyzs9SbqgrAaHkHRlY7RVw&s">
                    </div>
                    <p>Sertanejo</p>
                </a>
                <a class="link_categoria" href="musicas.html#rap">
                    <div class="circle">
                    <img src="imgs/rap.jpg">
                    </div>
                    <p>RAP</p>
                </a>
                <a class="link_categoria" href="musicas.html#pagode">
                    <div class="circle">
                    <img src="imgs/pagode.jpg">
                    </div>
                    <p>Pagode</p>
                </a>
                <a class="link_categoria" href="musicas.html#internacional">
                    <div class="circle">
                    <img src="imgs/internacional.jpg">
                    </div>
                    <p>Internacional</p>
                </a>
                <a class="link_categoria" href="musicas.html#funk">
                    <div class="circle">
                    <img src="imgs/funk.jpg">
                    </div>
                    <p>Funk</p>
                </a>
            </div>
        </main>
    </section>
    <script src="header.js"></script>
    <script src="musica.js"></script>
</body>
</html>
