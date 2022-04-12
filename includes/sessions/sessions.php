<?php

/**
 * Config session
 */

use FireSessions\Session;

$config = array(
    'driver' => Session::FILES_DRIVER,
    'cookie_name' => 'fsessions',
    'save_path' => __DIR__ . DIRECTORY_SEPARATOR . 'sessions',
    'expiration' => 7200,
    'regenerate_time' => 300,
    'destroy_on_regenerate' => false
);

$session = new Session($config);

var_dump($session);

$session->setUserdata('logged_username', 'myUsername');

echo $session->userdata('logged_username'); // outputs myUsername
echo "Hello World";