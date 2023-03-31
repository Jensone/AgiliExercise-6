<?php
// Chargement des fichiers nécessaire
require_once('./classes/Rental.php');

include './templates/header.html.php';


?>

<main>
    <h2>Liste des emprunts</h2>
    <table>
        <thead>
            <td>Livre emprunté</td>
            <td>Emprunteur(euse)</td>
            <td>Date d'emprunt</td>
            <td>Date de retour</td>
        </thead>
        <tbody>
            <?php include './templates/rentals.html.php' ?>
        </tbody>
    </table>
</main>


<?php include './templates/footer.html.php'; ?>