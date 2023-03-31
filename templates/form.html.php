<?php

// Formulaire d'ajout d'emprunt

require_once('./classes/Rental.php');

?>

<?php if (isset($_GET['id'])) : ?>
    <form action="" method="post">
        <input type="hidden" name="id" value="<?= $_GET['id'] ?>">

        <label for="client_name">Qui emprunte ?</label>
        <select name="text" id="client_name">
            <?php
                $clients = Rental::getClients();
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

        <label for="start_date">Date d'emprunt</label>
        <input type="date" placeholder="2022-01-21">

        <label for="start_date">Date de retour</label>
        <input type="date" placeholder="2022-02-21">


        <input type="submit" value="Emprunter">
    </form>
<?php endif; ?>