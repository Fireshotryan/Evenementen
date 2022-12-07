<?php
//Set default empty evenement & load POST logic
$evenement = new \System\EvenementCollection\Evenement();
require_once dirname(__FILE__) . '/includes/post-data.php';

//Special check for add form only
if (isset($formData) && $_FILES['image']['error'] == 4) {
    $errors[] = 'Image cannot be empty';
}

//Database magic when no errors are found
if (isset($formData) && empty($errors)) {
    require_once dirname(__FILE__) . '/../classes/System/Databases/DatabaseInserter.php';
    require_once dirname(__FILE__) . '/../classes/System/Utils/Image.php';

    //Store image & retrieve name for database saving
    $image = new \System\Utils\Image();
    $evenement->image = $image->save($_FILES['image']);

    //Init the database
    $db = new \System\Databases\DatabaseInserter(DB_HOST, DB_USER, DB_PASS, DB_NAME);

    //Save the record to the db
    if ($db->addEvenement($evenement)) {
        $success = 'Your new evenement has been added to the database!';

        //Override to see a new empty form
        $evenement = new \System\EvenementCollection\Evenement('', '', '', '', '', '');
    } else {
        $errors[] = 'Database error info: ' . $db->getConnection()->errorInfo()[0];
    }
}
