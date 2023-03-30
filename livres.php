<?php

// Chargement des fichiers nécessaires
require_once('./classes/Book.php');

?>

<?php include 'templates/header.html.php'; ?>

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
            <?php include 'templates/books.html.php'; ?>
        </tbody>
    </table>
</main>

<?php include 'templates/footer.html.php'; ?>
