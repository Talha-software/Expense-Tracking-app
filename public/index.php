

<?php 
$root = dirname(__DIR__). DIRECTORY_SEPARATOR;

define("APP_PATH", $root . 'app' . DIRECTORY_SEPARATOR);
define("FILE_PATH", $root . 'transaction' . DIRECTORY_SEPARATOR);
define("SHOW_PATH", $root . 'show' . DIRECTORY_SEPARATOR);



require APP_PATH . 'app.php';

$file = gettransaction(FILE_PATH);
print_r($file);
?>