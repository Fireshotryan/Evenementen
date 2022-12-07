<?php
//Require DatabaseSelector to retrieving data
require_once dirname(__FILE__) . '/../classes/System/Databases/DatabaseSelector.php';

//Init the database
$db = new \System\Databases\DatabaseSelector(DB_HOST, DB_USER, DB_PASS, DB_NAME);

//Create new instance of evenementCollection & set evenementen
$evenementCollection = new \System\EvenementCollection\Collection();
$evenementCollection->set($db->getEvenementen());

//Get formatted evenement objects & total
$evenementen = $evenementCollection->get();
$totalEvenementen = $evenementCollection->getTotal();
