<?php

/**
 * Simply require production entry point, framework will take care of things.
 */
define('__ROOT__', isset($_SERVER['DOCUMENT_ROOT'])
    ? $_SERVER['DOCUMENT_ROOT']
    : (dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR)
);
require_once __ROOT__ . "vendor/pckg/framework/src/production.php";
