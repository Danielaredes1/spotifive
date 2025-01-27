$('button.salvar').click(() => {
    let $categoriaEl = $('input#imgperfil').val();
    
    let $categoria = $('input.categoria').val();
  
    let newCircle = $(`
        <a class="link_categoria" href="musicas.html#${$categoria}">
            <div class="circle">
                <img src="${$categoriaEl}" alt="Categoria">
            </div>
            <p>${$categoria}</p>
        </a>
    `);
  
    $('.circle-container').append(newCircle);
  });

