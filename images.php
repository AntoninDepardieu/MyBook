<?php
// On récupère tous les fichiers images dans le dossier "book"
$files = glob("book/*.{jpeg,png,gif}", GLOB_BRACE);

// On remplace les barres obliques inversées par des barres normales
$files = array_map(function($file) {
    return "book/" . basename($file); // Génère des chemins relatifs à la racine
}, $files);

// On retourne les chemins d'accès des images sous forme de JSON
echo json_encode($files);
?>