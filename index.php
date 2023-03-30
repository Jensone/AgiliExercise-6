<?php

// Racine de l'application
/**
 * Cette application est une application de gestion de stock de livre de bibliothèque appelé "BiblioApp"
 * Fonctionnalités:
 * 1- Gestion des livres (ajout, modification, suppression, recherche)
 * 2- Gestion des emprunts (ajout, modification, suppression)
 */

 // Chargement des fichiers nécessaires
require_once('./classes/Book.php');

?>

<?php include 'templates/header.html.php'; ?>

        <header>
            <h1>Bienvenue sur BiblioApp</h1>
            <p>Une application de gestion de stock de livre de bibliothèque</p>
            <p>Vous pouvez naviguer dans l'application en utilisant le menu ci-dessous</p>
            <ul>
                <li><a href="livres.php">Gestion des livres</a></li>
                <li><a href="emprunts.php">Gestion des emprunts</a></li>
            </ul>
        </header>

<?php include 'templates/footer.html.php'; ?>
