let able = false
    function enableDebugBorders() {
    const debugColors = [
        '#FF0000', '#00FF00', '#0000FF', '#FFFF00', '#FF00FF', '#00FFFF',
        '#800000', '#008000', '#000080', '#808000', '#800080', '#008080',
        '#FFA500', '#A52A2A', '#DDA0DD', '#FF69B4', '#4B0082', '#7FFF00'
    ];

    const elementsToDebug = [
        'div', 'a', 'img', 'button', 'section', 'video', 'h1', 'p', 'span', 'ul', 'li', 'nav'
    ];

    elementsToDebug.forEach((tagName, index) => {
        const elements = document.getElementsByTagName(tagName);
        Array.from(elements).forEach(el => {
            el.style.border = `0.5px solid ${debugColors[index % debugColors.length]}`;
            el.style.boxSizing = 'border-box';
        });
    });
    }

    function disableDebugBorders() {
    const elementsToDebug = [
        'div', 'a', 'img', 'button', 'section', 'video', 'h1', 'p', 'span', 'ul', 'li', 'nav'
    ];

    elementsToDebug.forEach((tagName) => {
        const elements = document.getElementsByTagName(tagName);
        Array.from(elements).forEach(el => {
            el.style.border = '';
            el.style.boxSizing = '';
        });
    });
}



    document.addEventListener('keydown', function(event) {

    // Activer/désactiver le mode débogage avec la touche 'D'
    if (event.key === 'd' || event.key === 'D') {
        able=!able
        if (able==true){
            disableDebugBorders()
        } else{
            enableDebugBorders(); 
        }
        
    }
});



// Appeler cette fonction pour activer les bordures de débogage
// enableDebugBorders();


//si je suis sur la page x, le lien x sera désactivé

document.addEventListener("DOMContentLoaded", function() {
    const links = document.querySelectorAll('.menu a');
    links.forEach(link => {
        if (window.location.pathname === link.getAttribute('href')) {
            // Désactive le lien et change sa couleur
            link.style.pointerEvents = 'none';  // Désactive l'interaction
            link.style.color = 'gray';          // Change la couleur
        }
    });
});