$(document).ready(function() {
    let categories = JSON.parse(localStorage.getItem('categories')) || [];
    
    categories.forEach(category => {
        let newCircle = $(`
            <a class="link_categoria" href="musicas.html#${category.categoria}">
                <p>${category.categoria}</p>
                <div class="circle">
                    <img src="${category.img}" alt="Categoria">
                </div>
                <button class="delete-category">Excluir</button> <!-- Botão de excluir -->
            </a>
        `);
        $('.circle-container').append(newCircle);

        let newSection = $(`
            <section class="playlist-section" id="${category.categoria}">
                <h2>${category.categoria} - Spotifive</h2>
                <div class="music-list">
                    <ul>
                    </ul>
                </div>
            </section>
        `);
        $('#main_musicas').append(newSection);
    });
});

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

    let newCircle = $(`
        <a class="link_categoria" href="musicas.html#${$categoria}">
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

    let categories = JSON.parse(localStorage.getItem('categories')) || [];
    categories.push({ categoria: $categoria, img: $categoriaEl });
    localStorage.setItem('categories', JSON.stringify(categories));

    $('input#imgperfil').val('');
    $('input.categoria').val('');
});

$(document).on('click', 'button.delete-category', function() {
    let categoria = $(this).siblings('p').text(); 
    $(this).closest('a').remove(); 
    $(`#${categoria}`).remove(); 

    let categories = JSON.parse(localStorage.getItem('categories')) || [];
    categories = categories.filter(category => category.categoria !== categoria); 
    localStorage.setItem('categories', JSON.stringify(categories)); 
});
