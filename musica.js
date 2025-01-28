$('button.salvar').click(() => {
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
                        <ul>
                        </ul>
                    </div>
                </section>
            `);

            $('#main_musicas').append(newSection);

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
                            <ul>
                            </ul>
                        </div>
                    </section>
                `);
                $('#main_musicas').append(newSection);
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




