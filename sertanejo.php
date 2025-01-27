<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Playlist Sertanejo</title>
    <link rel="stylesheet" href="sertanejo.css">
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
        <h2>TOP Sertanejo - Spotifive</h2>

        <div class="audio-player">
            <audio id="audio-player" controls>
                <source id="audio-source" src="" type="audio/mp3">
            </audio>
        </div>

 
        <div class="music-list">
            <ul>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Henrique e Juliano - NA HORA DA RAIVA - DVD Novas Histórias - Ao vivo em Recife [X8jD3F9PI7Q].mp3">Na Hora da Raiva</a>
                    <span class="music-legend">Henrique & Juliano</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Henrique e Juliano - Flor E O Beija-Flor part. Marília Mendonça - DVD Novas Histórias [LmRrLl8aLfE].mp3">A Flor e o Beija-flor</a>
                    <span class="music-legend">Henrique & Juliano part. Marilia Mendonça</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Jorge & Mateus - Seu Astral - [Novo DVD Live in London] - (Clipe Oficial) [dW6QQE5GpOE].mp3">Seu Astral</a>
                    <span class="music-legend">Jorge & Matheus</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Murilo Huff - Anestesiado (DVD FORTALEZA) [qs3EwodfFgs].mp3">Anestesiado</a>
                    <span class="music-legend">Murilo Huff</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Zé Neto e Cristiano - NOTIFICAÇÃO PREFERIDA - #EsqueceOMundoLaFora [rYKOuKaWEjg].mp3">Notificação Preferida</a>
                    <span class="music-legend">Zé Neto & Cristiano</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Cristiano Araújo - Caso Indefinido (Oficial) [ho8KxDgO9DY].mp3">Caso Indefinido</a>
                    <span class="music-legend">Cristiano Araújo</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Henrique & Diego - Suíte 14 (Ao Vivo) ft. Mc Guimê [gmvFLIuVAbA].mp3">Suíte 14</a>
                    <span class="music-legend">Henrique & Diego ft. Mc Guimê</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Henrique e Juliano - Até Você Voltar (DVD Ao vivo em Brasília) [Vídeo Oficial] [S6JpneypYvc].mp3">Até Você Voltar</a>
                    <span class="music-legend">Henrique & Juliano</span>
                </li>
                <li>
                    <a href="#" class="music-item" data-src="audios/Iframe Henrique e Juliano - DE TRÁS PRA FRENTE - DVD O Céu Explica [r1SgAoRsJ98].mp3">De Trás pra Frente</a>
                    <span class="music-legend">Henrique & Juliano</span>
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
