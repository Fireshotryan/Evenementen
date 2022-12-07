<?php namespace System\Databases;

use System\EvenementCollection\Evenement;

/**
 * Class DatabaseSelector
 * @package System\Databases
 */
class DatabaseSelector extends Database
{
    /**
     * Get all evenementen from the database
     *
     * @return array
     */
    public function getEvenementen(): array
    {
        return $this->connection->query('SELECT * FROM evenementen')->fetchAll(\PDO::FETCH_CLASS, '\\System\\EvenementCollection\\Evenement');
    }

    /**
     * Get a specific evenement by its ID
     *
     * @param $id
     * @return Evenement
     * @throws \Exception
     */
    public function getEvenementById(int $id): Evenement
    {
        $statement = $this->connection->prepare('SELECT * FROM evenementen WHERE id = :id');
        $statement->execute([':id' => $id]);

        if (($evenement = $statement->fetchObject('\\System\\EvenementCollection\\Evenement')) === false) {
            throw new \Exception('ID is not available in the database');
        }

        return $evenement;
    }
}
