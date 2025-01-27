document.addEventListener("DOMContentLoaded", function() {
    const Itensmusica = document.querySelectorAll(".music-item");
    const Playnobaile = document.getElementById("audio-player");
    const audioSource = document.getElementById("audio-source");

  
    Itensmusica.forEach(function(item) {
        item.addEventListener("click", function(e) {
            e.preventDefault(); 

            const musicSrc = item.getAttribute("data-src"); 
            audioSource.setAttribute("src", musicSrc); 
            Playnobaile.load(); 
            Playnobaile.play(); 
        });
    });
});
