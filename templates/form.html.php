<?php

// Formulaire d'ajout d'emprunt

require_once('./classes/Rental.php');

?>

<?php if (isset($_GET['id'])) : ?>
    <form action="./add-rental.php" method="post">

        <!-- Information cachée, envoyant l'identifiant du livre -->
        <input type="hidden" name="book_id" value="<?= $_GET['id']; ?>">

        <!-- Information cachée, envoyant le titre du livre -->
        <input type="hidden" name="book_title" value="<?= $book['title']; ?>">

        <!-- Information de la personne qui emprunte -->
        <label for="client_name">Qui emprunte ?</label>
        <select type="text" id="client_name" name="client_id">
            <?php
                // Utilisation de la méthode statique getClients()
                $clients = Rental::getClients();

                // Boucle d'affichage de tous les clients : $clients
                foreach($clients as $client) :
            ?>
                <option>
                    <?php
                     echo $client['lastname'] . ' ' . $client['firstname'];
                     $client_id = $client['id'];
                     ?>
                </option>  
            <?php endforeach ?>
            ?>
        </select>

        <!-- <input type="hidden" value=""> -->

        <!-- Information de la date d'emprunt qui sera envoyée -->
        <label for="start_date">Date d'emprunt</label>
        <input type="date" id="start_date" placeholder="2022-01-21" name="start_date">

        <!-- Information de la date de fin qui sera envoyée -->
        <label for="end_date">Date de retour</label>
        <input type="date" id="end_date" placeholder="2022-02-21" name="end_date">

        <!-- Boutton d'envoi -->
        <input type="submit" name="emprunter" value="Emprunter">
    </form>
<?php endif; ?>