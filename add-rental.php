<?php
// Traitement du formulaire d'ajout d'un emprunt

// Chargement des fichiers nécessaires
require_once('./classes/Rental.php');

if(isset($_POST['emprunter'])) {

    $idBook = $_POST['book_id'];
    $idClient = Rental::getClientId($_POST['client_id']);
    $startDate = $_POST['start_date'];
    $endDate = $_POST['end_date'];

    var_dump($idBook, $idClient, $startDate, $endDate);

    // Méthode add de la classe Rental
    $add = Rental::add($idBook, $idClient, $startDate, $endDate);

    // include './templates/confirm.html.php';

} else {
    echo 'Une erreur s\'est produite ! Merci de réessayer.';
    // include './templates/error.html.php';
}