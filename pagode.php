<!DOCTYPE html> 
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Pagode</title>
    <link rel="stylesheet" href="musica.css">
</head>
<body>
    <header>
        <div class="header-container">
            <div id="logotipo">
                <a href="index.php"><img id="logo" src="imgs/logo.png" alt="logotipo"></a>
                <h3 id="site_name">SPOTFIVE</h3>
            </div>
        </div>
    </header> 

    <section class="playlist-section">
        <h2>TOP Pagodes - Spotifive</h2>

        <div class="audio-player">
            <audio id="audio-player" controls>
                <source id="audio-source" src="" type="audio/mp3">
            </audio>
        </div>

 
        <div class="music-list">
            <ul>
                <li>
                    <a href="#" class="music-item" data-src="audios/Amor Dos Deuses.mp3">Amor dos Deuses</a>
                    <span class="music-legend">Grupo Fundo de Quintal</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Eu e você sempre (Ao vivo).mp3">Eu e Você Sempre</a>
                    <span class="music-legend">Jorge Aragão</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Arlindo Cruz - Meu Lugar.mp3">Meu Lugar</a>
                    <span class="music-legend">Arlindo Cruz</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Grupo Revelação - Deixa Alagar.mp3">Deixa Alagar</a>
                    <span class="music-legend">Grupo Revelação</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Belo - Defeito Meu (Áudio Oficial).mp3">Defeito Meu</a>
                    <span class="music-legend">Belo</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Gamei [WdTsYod2iXw].mp3">Gamei</a>
                    <span class="music-legend">Exaltasamba</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Será que é amor (Ao vivo).mp3">Será que é Amor</a>
                    <span class="music-legend">Arlindo Cruz</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Turma do Pagode - Surpresa de Amor ((Mania do Brasil Ao Vivo) [Clipe Oficial]).mp3">Surpresa de Amor</a>
                    <span class="music-legend">Turma do Pagode</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Burguesinha.mp3">Burguesinha</a>
                    <span class="music-legend">Seu Jorge</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Grupo Revelação - Essência Da Paixão.mp3">Essencia da Paixão</a>
                    <span class="music-legend">Grupo Revelação</span>
                </li>
            </ul>
        </div>
    </section>

    <footer>
        <p>&copy; 2025 Spotfive. Todos os direitos reservados.</p>
    </footer>

    <script src="musica.js"></script>
</body>
</html>
