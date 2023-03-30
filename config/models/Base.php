<?php
/**
 * Classe abstraite : Base
 * -----------------------
 * Classe abstraite qui contient les propriétés et méthodes communes à toutes les classes.
 * Dedans l'ensemble des fonctionnalités dont les classes enfants auront besoin pour respecter le principe DRY (Don't Repeat Yourself)
 */

// Chargement des fichiers nécessaires
require_once('./config/connect.php');

abstract class Base
{
    protected $pdo;

    /**
     * Constructeur 
     * --------------------
     * Le constructeur est une méthode qui est appelée automatiquement lors de l'instanciation de la classe
     */

    public function __construct()
    {
        $this->pdo = connect();
    }
}
