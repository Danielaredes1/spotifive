$('.categoria.salvar').click(() => {
    let $categoriaEl = $('input#imgperfil').val();
    let $categoria = $('input.categoria').val();

    if (!$categoriaEl || !$categoria) {
        alert('Por favor, preencha todos os campos!');
        return;
    }

    if ($(`#${$categoria}`).length > 0) {
        alert('Esta categoria já foi adicionada!');
        return;
    }

    fetch("adicionar_categoria.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `imgperfil=${encodeURIComponent($categoriaEl)}&categoria=${encodeURIComponent($categoria)}`
    })
    .then(response => response.json()) 
    .then(data => {
        console.log("Resposta do PHP:", data);
        if (data.sucesso) {
            $categoriaEl = data.imgperfil;
            $categoria = data.categoria;
    
            console.log("Valores atualizados:");
            console.log("Imagem: ", $categoriaEl);
            console.log("Categoria: ", $categoria);

            let newCircle = $(`
                <a class="link_categoria" href="musicas.html#${$categoria}" id="${data.id}">
                    <p>${$categoria}</p>
                    <div class="circle">
                        <img src="${$categoriaEl}" alt="Categoria">
                    </div>
                    <button class="delete-category">Excluir</button>
                </a>
                
            `);

            $('.circle-container').append(newCircle);

            let newSection = $(`
                <section class="playlist-section" id="${$categoria}">
                    <h2>${$categoria} - Spotifive</h2>
                    <div class="music-list">
                        <ul class="novamusica">
                            <li>
                            </li>
                        </ul>
                    </div>
                </section>
            `);

            $('#main_musicas').append(newSection);

            let newOption = $(`
                <option value="${$categoria}">${$categoria}</option>
            `);

            $('#tiposCategorias').append(newOption);

            $('input#imgperfil').val('');
            $('input.categoria').val('');
        } else {
            alert(data.mensagem || "Ocorreu um erro!");
        }
    })
    .catch(error => {
        console.error("Erro ao enviar dados:", error);
    });
});

$(document).ready(function() {
    $.get("carregar_categorias.php", function(categorias) {
        if (categorias.length > 0) {
            categorias.forEach(categoria => {
                console.log(categorias);
                let newCategory = $(`
                    <a class="link_categoria" href="musicas.html#${categoria.nome}" id="${categoria.id}">
                        <p>${categoria.nome}</p>
                        <div class="circle">
                            <img src="${categoria.imagem_url}" alt="${categoria.nome}">
                        </div>
                        <button class="delete-category">Excluir</button>
                    </a>
                    
                `);
                $('.circle-container').append(newCategory);
                let newSection = $(`
                    <section class="playlist-section" id="${categoria.nome}">
                        <h2>${categoria.nome} - Spotifive</h2>
                        <div class="music-list">
                            <ul class="novamusica">
                                <li>
                                </li>
                            </ul>
                        </div>
                    </section>
                `);
                $('#main_musicas').append(newSection);

                let newOption = $(`
                    <option value="${categoria.nome}">${categoria.nome}</option>
                `);
    
                $('#tiposCategorias').append(newOption);
    
            });
        } else {
            console.log("Nenhuma categoria encontrada.");
        }
    })
    .fail(function() {
        console.error("Erro ao carregar categorias.");
    });
});

$(document).on('click', '.delete-category', function() {
    const $categoryElement = $(this).closest('.link_categoria');
    const categoriaId = $categoryElement.attr('id');
    const categoriaNome = $categoryElement.find('p').text();

    if (!categoriaId) {
        alert("ID da categoria não encontrado.");
        return;
    }

    $(this).prop('disabled', true).text('Excluindo...');

    fetch("excluir_categoria.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `id=${encodeURIComponent(categoriaId)}&nome=${encodeURIComponent(categoriaNome)}`
    })
    .then(response => response.json())
    .then(data => {
        if (!data || typeof data.sucesso === 'undefined') {
            throw new Error("Resposta inválida do servidor.");
        }

        if (data.sucesso) {
            $(`#${categoriaId}`).remove();
            $(`section[id="${categoriaId}"]`).remove();

            console.log("Categoria excluída com sucesso.");
        } else {
            alert(data.mensagem || "Erro ao excluir categoria.");
        }
    })
    .finally(() => {
        $(this).prop('disabled', false).text('Excluir');
    });
});


//Musica

$('.music.salvar').click(() => {
    let $musicEl = $('input#urlmusic').val(); 
    let $music = $('input#nomemusic').val();
    let $musicCategoria = $('select#tiposCategorias').val(); 

    if (!$musicEl || !$music || !$musicCategoria) {
        alert('Por favor, preencha todos os campos!');
        return;
    }

    fetch("adicionar_musica.php", {
        method: "POST",
        headers: {
            "Content-Type": "application/x-www-form-urlencoded"
        },
        body: `urlmusic=${encodeURIComponent($musicEl)}&nomemusic=${encodeURIComponent($music)}&tiposCategorias=${encodeURIComponent($musicCategoria)}`
    })
    .then(response => response.json()) 
    .then(data => {
        console.log("Resposta do PHP:", data);
        if (data.sucesso) {
            let newIframe = $(`
                <li>
                    <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/${data.urlmusic}?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy" name="${data.nomemusic}"></iframe>
                    
                </li>
            `);

            $(`#${$musicCategoria} .novamusica`).append(newIframe);

            $('input#urlmusic').val('');
            $('input#nomemusic').val('');
            $('select#tiposCategorias').val('');
        } else {
            alert(data.mensagem || "Ocorreu um erro!");
        }
    })
    .catch(error => {
        console.error("Erro ao enviar dados:", error);
    });
});

$(document).ready(function() {
    $.get("carregar_musica.php", function(musicas) {
        console.log("Resposta recebida:", musicas);

        if (Array.isArray(musicas) && musicas.length > 0) {
            musicas.forEach(music => {
                let newIframe = $(`
                    <li>
                         <iframe style="border-radius:12px" src="https://open.spotify.com/embed/track/${music.music_url}?utm_source=generator" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy" name="${music.nome}"></iframe>
                    </li>
                `);

                $(`#${music.categoria_nome} .novamusica`).append(newIframe);
            });
        } else {
            console.log("Nenhuma música encontrada.");
        }
    })
    .fail(function() {
        console.error("Erro ao carregar músicas.");
    });
});





