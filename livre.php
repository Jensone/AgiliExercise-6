<?php

/**
 * Page d'un livre
 * ----------------
 */

// Classes
require_once('./classes/Book.php');
$book = Book::getBook($_GET['id']);

// Entete
include './templates/header.html.php';

?>

<h1><?= $book['title']?></h1>

<?php
// Contenu du livre
include './templates/book.html.php';

// Formulaire d'ajout d'emprunt
include './templates/form.html.php';

// Pied de page
include './templates/footer.html.php';

