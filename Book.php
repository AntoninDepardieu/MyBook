<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="Style.css">
    <style>
        #gallery {
            display: flex;
            flex-direction: row;
            transition: transform 0.5s ease-in-out;

            /*justify-content: center;
            margin-top: 20px;*/

        }

        #gallery img {
            width: 100%;
            /*border-radius: 8px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.2);*/
            flex-shrink: 0;
            object-fit: cover;
        }

        #gallery img:hover {

        }
        button{
            /*mix-blend-mode: difference;*/
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            z-index: 10;
            height: 30%;
            width: 5%;

        }
        #right{
            color: black;
            right: 0;
            background: linear-gradient(-90deg, rgba(255, 255, 255, 100), rgba(255, 255, 255, 0));
        }
        #left{
            color: black;
            background: linear-gradient(90deg, rgba(255, 255, 255, 100), rgba(255, 255, 255, 0));
        }
        #slider {
            /*padding-top: 50px ;*/
            position: relative;
            max-width: 1200px;
            margin: auto;
            overflow: hidden; /* Cache les images qui dépassent */
        }
        body, html{
            margin: 0;
            padding: 0;
        }
    </style>
</head>

<body>
    <script src="script.js"></script>
    <title>Showreel</title>
    <?php include"header.php" ; ?>
    
<section class="section2">
    <div id="slider">
        <button id="right">></button>
        <button id="left"><</button>
        <div id="gallery"></div>
    </div>
</section>
<script>
        document.addEventListener("DOMContentLoaded", () => {
    fetch("/images.php")
    .then(response => response.json())
    .then(images => {
        const gallery = document.getElementById("gallery");
        let currentIndex = 0;

        // Ajouter les images au slider
        images.forEach(imagePath => {
            const img = document.createElement("img");
            img.src = imagePath;
            img.alt = "Image slider";
            gallery.appendChild(img);
        });

        const totalImages = images.length;

        // Fonction pour mettre à jour le slider
        function updateSlider() {
            const imgWidth = gallery.children[0].clientWidth; // Largeur dynamique de l'image
            gallery.style.transform = `translateX(${-currentIndex * imgWidth}px)`;
        }

        // Initialisation du slider
        updateSlider();

        // Fonction pour ajuster la largeur des images lors du redimensionnement
        let resizeTimeout;
        window.addEventListener("resize", () => {
            // Cacher le slider pendant le redimensionnement
            gallery.style.visibility = 'hidden';

            // Déclencher l'update après le redimensionnement
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                updateSlider();
                // Réafficher le slider une fois le redimensionnement terminé
                gallery.style.visibility = 'visible';
            }, 200); // Délai de 200ms avant de recalculer le slider
        });

        // Gestion des boutons
        document.getElementById("right").addEventListener("click", () => {
            if (currentIndex < totalImages - 1) {
                currentIndex++;
            } else {
                currentIndex = 0; // Revient au début
            }
            updateSlider();
        });

        document.getElementById("left").addEventListener("click", () => {
            if (currentIndex > 0) {
                currentIndex--;
            } else {
                currentIndex = totalImages - 1; // Va à la dernière image
            }
            updateSlider();
        });
    })
    .catch(error => {
        console.error("Erreur lors du chargement des images :", error);
    });
});








    /*fetch("/images.php")
    .then(response => response.json())
    .then(images => {
        const gallery = document.getElementById("gallery");
        images.forEach(imagePath => {
            const img = document.createElement("img");
            img.src = imagePath;  // Utilisation des chemins relatifs retournés par PHP
            img.alt = imagePath;   // Texte alternatif pour l'image
            gallery.appendChild(img);  // Ajout de l'image à la galerie
        });
    })
    .catch(error => {
        console.error("Erreur lors du chargement des images :", error);
    });*/


</script>
</body>
</html>


        