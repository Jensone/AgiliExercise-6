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
        <hr>
        <main>
            <h2>Liste des livres</h2>
            <table>
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Auteur</th>
                        <th>Stock</th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                        $superPhp = new Book(1234567890, "Super PHP", "Martin L.", 1);

                        $hopital = new Book(1234567890, "Hopital Président", "Martin L.", 3);

                        $paris = new Book(1234567890, "Paris en été", "Martin L.", 13);

                        //var_dump($superPhp);
                        $superPhp->addBook();
                        echo '<br>';
                        $hopital->sayYes();
                        echo '<br>';
                        $paris->sayYes();
                    ?>
                </tbody>
            </table>
            <hr>
            <h2>Ajouter un livre</h2>
            <?php include 'templates/form.html.php' ?>
        </main>

<?php include 'templates/footer.html.php'; ?>
