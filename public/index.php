<?php

require_once(dirname(__FILE__, 2) . '/src/config/config.php');
require_once(dirname(__FILE__, 2) . '/src/models/User.php');

$user = new User(['name' => 'Ricardo', 'email' => 'ricardo@cod3r.com.br']);
print_r($user);

echo 'Fim';