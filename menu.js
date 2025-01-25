$('button.salvar').click(() => {
    let $categoriaEl = $('input#color').val();
    
    let newCircle = $('<a href="#"><div>' + $('input.categoria').val() + '</div></a>')
      .addClass('circle')
      .css('background-color', $categoriaEl);

      $('#standard').replaceWith(newCircle);

      if ($categoriaEl.toUpperCase() === '#FFFFFF') {
        newCircle.css('color', 'black');
      }
      if ($('#standard').replaceWith(newCircle)) {
            $('.circle-container').append(newCircle);
      }
});