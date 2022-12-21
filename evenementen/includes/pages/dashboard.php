<?php
//If not logged in, redirect to login
/** @var System\Utils\Session $session */
if (!$session->keyExists('user')) {
    header('Location: login');
    exit;
}