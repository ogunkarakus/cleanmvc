<?php

require_once 'main-config.php';
require_once 'database-config.php';

/*
 * execute DATABASE_ON defined
 */

if (DATABASE_ON == true) {
    require_once 'library/model.php';
} elseif (DATABASE_ON == false) {
    // Don't do anything! Because he/she don't want to use database
} else {
    die('You must look main-cofing.php and DATABASE_ON defined data!');
}

/*
 * execute $helpers
 */

if (!is_array($helpers)) {
    die('\$helpers must be an array!');
}

if (!empty($helpers)) {
    foreach ($helpers as $helper) {
        if (file_exists('helpers/' . $helper . '.php')) {
            require_once 'helpers/' . $helper . '.php';
        } else {
            die('There is no helper that name is ' . $helper);
        }
    }
}
?>
