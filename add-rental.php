<?php
// Traitement du formulaire d'ajout d'un emprunt

// Chargement des fichiers nécessaires
require_once('./classes/Rental.php');

if(isset($_POST['emprunter'])) {

    $idBook = (int) $_POST['book_id'];
    $idClient = (int) Rental::getClientId($_POST['client_id']);
    $startDate = (string) $_POST['start_date'];
    $endDate = (string) $_POST['end_date'];

    // var_dump($idBook, $idClient, $startDate, $endDate);

    // Méthode add de la classe Rental
    $add = Rental::add($idBook, $idClient, $startDate, $endDate);

    // Page de confirmation
    include './templates/header.html.php';
    include './templates/confirm.html.php';
    include './templates/footer.html.php';

} else {
    echo 'Une erreur s\'est produite ! Merci de réessayer.';
    // include './templates/error.html.php';
}