<?php

require_once('./classes/Rental.php');

$rentals = Rental::getRentals();

// Affichage des emprunts
foreach($rentals as $rental) : ?>

<tr>
    <td>
        <?= $rental['book_title'] ?>
    </td>
    <td>
        <?= $rental['client_firstname'] . ' ' . $rental['client_lastname']?>
    </td>
    <td>
        <?= $rental['start_date'] ?>
    </td>
    <td>
        <?= $rental['end_date'] ?>
    </td>
</tr>

<?php endforeach ?>