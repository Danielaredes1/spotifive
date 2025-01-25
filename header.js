
let $menuButton = $('#mais_icon');
let $menu = $('.menu');

$menuButton.click(() => {
    $menu.toggleClass('active');
    event.stopPropagation();
});

$(document).click(() => {
    $menu.removeClass('active');
});

$menu.click((event) => {
    event.stopPropagation();
});

$(document).ready(() => {
    $('button.music').click(() => {
      $('dialog.music')[0].showModal();
    });

    $('button.playlist').click(() => {
      $('dialog.playlist')[0].showModal();
    });

    $('button.categoria').click(() => {
      $('dialog.categoria')[0].showModal();
    });

    $('button.cancelar').click(function () {
      $(this).closest('dialog')[0].close();
    });
  });

  let $colorInput = $("#color");
  let $colorBox = $(".color-box");
  
  $colorInput.on("input", () => {
    let selectedColor = $colorInput.val();
  });