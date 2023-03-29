<?php
/**
 * Classe : Rental
 * -----------------
 * Classe regroupant toutes les propiétés et méthodes des Emprunts
 */

class Rental extends Book
{
    // Propriétés (variables)
    public $idBook;
    public $idUser;
    public $startDate;
    public $endDate;

    // Méthodes (fonctions)
    public function __construct(
        int $isbn,
        string $title,
        string $author,
        int $stock,
        int $idBook,
        int $idUser,
        int $startDate,
        int $endDate
        )
    {
        parent::__construct($isbn, $title, $author, $stock);
        $this->idBook = $idBook;
        $this->idUser = $idUser;
        $this->startDate = $startDate;
        $this->endDate = $endDate;
    }
}

// Gestion des emprunts :  Ajouter, modifier, supprimer
