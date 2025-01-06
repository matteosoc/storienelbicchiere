document.addEventListener("DOMContentLoaded", function () {
    const searchIcon = document.getElementById('navbarSearchIcon');
    const searchBar = document.getElementById('searchBar');

    searchIcon.addEventListener('click', () => {
        searchBar.classList.toggle('display-none');
    });
});

document.getElementById('share-btn').addEventListener('click', async () => {

    const shareData = {
        title: document.title, // Titolo della pagina
        text: 'Leggi questo articolo!', // Testo opzionale
        url: window.location.href // URL della pagina corrente
    };

    try {
        if (navigator.share) {
            await navigator.share(shareData);
            console.log('Articolo condiviso con successo!');
        } else {
            alert('Condivisione non supportata su questo dispositivo.');
        }
    } catch (err) {
        console.error('Errore durante la condivisione:', err);
    }
});