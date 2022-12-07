<?php namespace System\Form\Validation;

use System\EvenementCollection\Evenement;

/**
 * Class EvenementValidator
 * @package System\Form\Validation
 */
class EvenementValidator implements Validator
{
    private array $errors = [];

    /**
     * EvenementValidator constructor.
     *
     * @param Evenement $evenement
     */
    public function __construct(private readonly Evenement $evenement)
    {
    }

    /**
     * Validate the data
     */
    public function validate(): void
    {
        //Check if data is valid & generate error if not so
        if ($this->evenement->name == '') {
            $this->errors[] = 'Name cannot be empty';
        }
        if ($this->evenement->date == '') {
            $this->errors[] = 'Date cannot be empty';
        }
        if ($this->evenement->description == '') {
            $this->errors[] = 'description cannot be empty';
        }
    }

    /**
     * @return array
     */
    public function getErrors(): array
    {
        return $this->errors;
    }
}
