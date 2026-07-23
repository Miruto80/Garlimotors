<?php

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

if (!isset($_SESSION['lang'])) {

    $browserLang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);

    $_SESSION['lang'] = ($browserLang === 'es') ? 'es' : 'en';
}

$lang = $_SESSION['lang'];

$text = require __DIR__ . '/../lang/' . $lang . '.php';

?>