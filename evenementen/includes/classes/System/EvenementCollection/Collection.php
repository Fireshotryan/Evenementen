<?php namespace System\EvenementCollection;

/**
 * Class Collection
 * @package System\EvenementCollection
 */
class Collection
{
    private array $evenementen = [];

    /**
     * @return mixed
     */
    public function get(): array
    {
        return $this->evenementen;
    }

    /**
     * @param Evenement[] $evenementen
     */
    public function set(array $evenementen): void
    {
        $this->evenementen = $evenementen;
    }


    /**
     * @param Evenement $evenement
     */
    public function add(Evenement $evenement): void
    {
        $this->evenementen[] = $evenement;
    }

    /**
     * @return int
     */
    public function getTotal(): int
    {
        return count($this->evenementen);
    }
} 
