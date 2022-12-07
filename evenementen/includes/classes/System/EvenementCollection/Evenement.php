<?php namespace System\EvenementCollection;

/**
 * Class Evenement
 * @package System\EvenementCollection
 */
class Evenement
{
    public int $id;
    public string $name = '';
    public string $date = '';
    public string $description = '';
    public string $image;

    /**
     * @param \PDO $db
     * @return bool
     */
    public function update(\PDO $db): bool
    {
        $query = 'UPDATE evenementen
                  SET name = :name, date = :date, description = :description, image = :image
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([
            ':name' => $this->name,
            ':date' => $this->date,
            ':description' => $this->description,
            ':image' => $this->image,
            ':id' => $this->id
        ]);
    }

    /**
     * @param \PDO $db
     * @return bool
     */
    public function delete(\PDO $db): bool
    {
        $query = 'DELETE FROM evenementen
                  WHERE id = :id';
        $statement = $db->prepare($query);
        return $statement->execute([':id' => $this->id]);
    }
}
