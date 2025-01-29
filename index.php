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
    <link rel="stylesheet" type="text/css" href="creditos.css">
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
            <input id="nomemusic" type="text" class="music nome" placeholder="Título">
            <input id="urlmusic" type="text" class="music url" placeholder="Link">
            <label for="esccatec">Escolha uma categoria:</label>
            <select id="tiposCategorias" name="esccatec">
                <option value="sertanejo">Sertanejo</option>
                <option value="rap">RAP</option>
                <option value="pagode">Pagode</option>
                <option value="internacional">Internacional</option>
                <option value="funk">Funk</option>
            </select>
            <div class="botoes">
                <button class="salvar music">Salvar</button>
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
                <button class="salvar categoria">Salvar</button>
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
            <a href="creditos.html">
                <div class="menu-item">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-people" viewBox="0 0 16 16">
  <path d="M15 14s1 0 1-1-1-4-5-4-5 3-5 4 1 1 1 1zm-7.978-1L7 12.996c.001-.264.167-1.03.76-1.72C8.312 10.629 9.282 10 11 10c1.717 0 2.687.63 3.24 1.276.593.69.758 1.457.76 1.72l-.008.002-.014.002zM11 7a2 2 0 1 0 0-4 2 2 0 0 0 0 4m3-2a3 3 0 1 1-6 0 3 3 0 0 1 6 0M6.936 9.28a6 6 0 0 0-1.23-.247A7 7 0 0 0 5 9c-4 0-5 3-5 4q0 1 1 1h4.216A2.24 2.24 0 0 1 5 13c0-1.01.377-2.042 1.09-2.904.243-.294.526-.569.846-.816M4.92 10A5.5 5.5 0 0 0 4 13H1c0-.26.164-1.03.76-1.724.545-.636 1.492-1.256 3.16-1.275ZM1.5 5.5a3 3 0 1 1 6 0 3 3 0 0 1-6 0m3-2a2 2 0 1 0 0 4 2 2 0 0 0 0-4"/>
</svg>
                    <span>Créditos</span> 
                </div>
            </a>
        </div>
    
        <main>
            <div class="circle-container">
                <h1>Créditos</h1>
                    <p>Aqui estão os créditos para os autores do site:</p>
                <div class="creditos-item">
                        <h2>Caio</h2>
                        <img src="imgs/caio.jpg" alt="Caio" class="autor-imagem">
                        <p>Caio ajudou com a integração do frontend e com o desenvolvimento de novas funcionalidades para o site. </p>
                    </div>
                 <div class="creditos-item">
                        <h2>Daniella</h2>
                      <img src="imgs/daniella.jpg" alt="Daniella" class="autor-imagem">
                        <p>Daniella trabalhou na criação da identidade visual do Spotfive e no design das páginas.</p>
                    </div>
                <a class="link_categoria" href="musicas.html#sertanejo">
                    <p>Sertanejo</p>
                    <div class="circle">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRploOrwJOLiJHXyzs9SbqgrAaHkHRlY7RVw&s">
                    </div>
                </a>
                </div>
    
        <main>
            <section id="creditos_section">
                <div class="creditos-container">
                <a class="link_categoria" href="musicas.html#rap">
                    <p>RAP</p>
                    <div class="circle">
                    <img src="imgs/rap.jpg">
                    </div>
                </a>
                <a class="link_categoria" href="musicas.html#pagode">
                    <p>Pagode</p>
                    <div class="circle">
                    <img src="imgs/pagode.jpg">
                    </div>
                </a>
                <a class="link_categoria" href="musicas.html#internacional">
                    <p>Internacional</p>
                    <div class="circle">
                    <img src="imgs/internacional.jpg">
                    </div>
                </a>
                <a class="link_categoria" href="musicas.html#funk">
                    <p>Funk</p>
                    <div class="circle">
                    <img src="imgs/funk.jpg">
                    </div>
                </a>
            </div>
        </main>
    </section>
    <script src="header.js"></script>
    <script src="musica.js"></script>
</body>
</html>
