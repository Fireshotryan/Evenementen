<?php
/** @var System\Utils\Session $session */
$session->destroy();
header('Location: ../index.php');
exit;