<?php
$root = dirname(__DIR__) . DIRECTORY_SEPARATOR;

define("APP_PATH", $root . 'app' . DIRECTORY_SEPARATOR);
define("FILE_PATH", $root . 'transaction' . DIRECTORY_SEPARATOR);
define("SHOW_PATH", $root . 'show' . DIRECTORY_SEPARATOR);



require APP_PATH . 'app.php';

$files = getTransactionFile(FILE_PATH);
$transactions = [];
foreach ($files as $file) {
    $transactions = array_merge($transactions, getTransaction($file));
}
$total = calculateTransaction($transactions);
require SHOW_PATH . 'show.php';