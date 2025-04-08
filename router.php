<?php
// router.php

$requested = $_SERVER['DOCUMENT_ROOT'] . $_SERVER['REQUEST_URI'];

if (php_sapi_name() === 'cli-server') {
    if (is_file($requested)) {
        return false;
    }
}

require_once __DIR__ . '/public/index.php';
