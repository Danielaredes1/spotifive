
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