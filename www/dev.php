<?php

/**
 * Simply require development entry point, framework will take care of things.
 */
define('__ROOT__', isset($_SERVER['DOCUMENT_ROOT'])
    ? preg_replace('#www/$#', '', rtrim($_SERVER['DOCUMENT_ROOT'], DIRECTORY_SEPARATOR) . DIRECTORY_SEPARATOR)
    : (dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR)
);
require_once __ROOT__ . "vendor/pckg/framework/src/development.php";
