<?php namespace System\Databases;

use System\EvenementCollection\Evenement;

/**
 * Class DatabaseInserter
 * @package System\Databases
 */
class DatabaseInserter extends Database
{
    /**
     * Save a evenement to the database
     *
     * @param Evenement $evenement
     * @return bool
     */
    public function addEvenement(Evenement $evenement): bool
    {
        $query = 'INSERT INTO evenementen (name, date, description, image)
                  VALUES (:name, :date, :description, :image)';
        $statement = $this->connection->prepare($query);
        return $statement->execute([
            ':name' => $evenement->name,
            ':date' => $evenement->date,
            ':description' => $evenement->description,
            ':image' => $evenement->image
        ]);
    }
}
