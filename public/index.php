<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
//require_once(VIEW_PATH . '/login.php');

require_once(MODEL_PATH . '/Login.php');

$login = new Login(['email' => 'pamela@quickticket.com.br', 'password' => 'a']);

try {
    $login->checkLogin();
    echo 'Deu certo :)';
} catch(Exception $e) {
    echo 'Problema no login :p';
}