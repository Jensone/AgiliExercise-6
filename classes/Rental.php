<?php
/**
 * Classe : Rental
 * -----------------
 * Classe regroupant toutes les propiétés et méthodes des Emprunts
 */

require_once('./classes/Book.php');

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

    // Gestion des emprunts :  Ajouter, modifier

    public static function add($idBook, $idUser, $startDate, $endDate)
    {
        // Initialisation de la connexion
        $pdo = connect();
        
        // Préparation de la requête
        $sql = "INSERT INTO rentals (book_id, client_id, start_date, end_date) VALUES (:idBook, :idUser, :startDate, :endDate)";
        $statement = $pdo->prepare($sql);
        
        // Liaison des paramètres
        $statement->bindValue(':idBook', $idBook, PDO::PARAM_INT);
        $statement->bindValue(':idUser', $idUser, PDO::PARAM_INT);
        $statement->bindValue(':startDate', $startDate, PDO::PARAM_STR);
        $statement->bindValue(':endDate', $endDate, PDO::PARAM_STR);
        
        // Exécution de la requête
        $statement->execute();
    }

    public static function update($idBook, $idUser, $startDate, $endDate)
    {
        $id = 11;
        // Initialisation de la connexion
        $pdo = connect();
        
        // Préparation de la requête book_id
        $sql = "UPDATE rentals SET book_id = :idBook, client_id = :idUser, start_date = :startDate, end_date = :endDate  WHERE id = :id";
        $statement = $pdo->prepare($sql);
        
        // Liaison des paramètres
        $statement->bindValue(':idBook', $idBook, PDO::PARAM_INT);
        $statement->bindValue(':idUser', $idUser, PDO::PARAM_INT);
        $statement->bindValue(':startDate', $startDate, PDO::PARAM_STR);
        $statement->bindValue(':endDate', $endDate, PDO::PARAM_STR);
        $statement->bindValue(':id', $id, PDO::PARAM_INT);
        
        // Exécution de la requête
        $statement->execute();
    }

    // Récupérer tous les livres : méthode getBooks()
    public static function getRentals()
    {
        // Initialisation de la connexion
        $pdo = connect();

        // Préparation de la requête
        $sql = 'SELECT 
        rentals.start_date, 
        rentals.end_date, 
        books.title AS book_title, 
        clients.lastname AS client_lastname, 
        clients.firstname AS client_firstname 
        FROM rentals 
        INNER JOIN books ON rentals.book_id = books.id 
        INNER JOIN clients ON rentals.client_id = clients.id';
        
        $statement = $pdo->prepare($sql);

        // Exécution de la requête
        $statement->execute();

        // Récupération des données
        $rentals = $statement->fetchAll();

        // Retour des données
        return $rentals;


    }

    // Récupérer tous les clients : méthode getClients()
    public static function getClients()
    {
        // Initialisation de la connexion
        $pdo = connect();

        // Préparation de la requête
        $sql = 'SELECT * FROM clients ORDER BY lastname ASC';
        $statement = $pdo->prepare($sql);

        // Exécution de la requête
        $statement->execute();

        // Récupération des données
        $clients = $statement->fetchAll();

        // Retour des données
        return $clients;

    }

    public static function getClientId($client_name)
    {
        $client_name = str_word_count($client_name, 1, 'àáãäôç-');

        // Initialisation de la connexion
        $pdo = connect();

        // Utilisation de ? pour indiquer que la donnée sera donnée lors du statement (liaison des paramètres)
        $sql = 'SELECT id FROM clients WHERE lastname = ? AND firstname = ?';
        
        $statement = $pdo->prepare($sql);

        // Liaison des paramètres
        $statement->bindValue(1, $client_name[0]);
        $statement->bindValue(2, $client_name[1]);

        // Exécution de la requête
        $statement->execute();

        // Récupération des données
        $client_id = $statement->fetchColumn();

        // Retour des données
        return $client_id;
    }

}

