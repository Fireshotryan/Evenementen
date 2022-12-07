<?php
//Check if Post isset, else do nothing
if (isset($_POST['submit'])) {
    //Require form classes
    require_once dirname(__FILE__) . '/../../classes/System/Form/Data.php';
    require_once dirname(__FILE__) . '/../../classes/System/Form/Validation/Validator.php';
    require_once dirname(__FILE__) . '/../../classes/System/Form/Validation/EvenementValidator.php';

    //Set form data
    $formData = new \System\Form\Data($_POST);

    //Override object with new variables
    $evenement->name = $formData->getPostVar('name');
    $evenement->date = $formData->getPostVar('date');
    $evenement->description = $formData->getPostVar('description');

    //Actual validation
    $validator = new \System\Form\Validation\EvenementValidator($evenement);
    $validator->validate();
    $errors = $validator->getErrors();
}
