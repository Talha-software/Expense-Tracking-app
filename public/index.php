<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define("APP_PATH", $root . 'app' . DIRECTORY_SEPARATOR);
define("FILE_PATH", $root . 'transaction' . DIRECTORY_SEPARATOR);
define("SHOW_PATH", $root . 'show' . DIRECTORY_SEPARATOR);



require APP_PATH . 'app.php';

$files = gettransactionfile(FILE_PATH);
$transactions = [];
foreach ($files as $file) {
    $transactions = array_merge($transactions, gettransaction($file));
}

require SHOW_PATH . 'show.php';