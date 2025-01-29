$(document).ready(function() {
    $('#search').on('keypress', function(e) {
        if (e.which === 13) {
            let searchTerm = $(this).val().trim();
            if (searchTerm) {
                window.location.href = "musicas.html?search=" + encodeURIComponent(searchTerm);
            }
        }
    });

    $('#lupa_icon').on('click', function() {
        let searchTerm = $('#search').val().trim();
        if (searchTerm) {
            window.location.href = "musicas.html?search=" + encodeURIComponent(searchTerm);
        }
    });
});

$(document).ready(function() {
    function getQueryParam(param) {
        let urlParams = new URLSearchParams(window.location.search);
        return urlParams.get(param);
    }

    let searchTerm = getQueryParam('search');

    if (searchTerm) {
        searchTerm = searchTerm.trim().toLowerCase();

        $('.novamusica li').each(function() {
            let iframe = $(this).find('iframe');

            if (iframe.length > 0) {
                let musicName = iframe.attr('name') ? iframe.attr('name').toLowerCase() : '';

                $(this).toggle(musicName.includes(searchTerm));
            } else {
                $(this).show();
            }
        });
    }
});

