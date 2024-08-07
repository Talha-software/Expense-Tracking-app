

<?php 
$root = (__DIR__. DIRECTORY_SEPARATOR);

define("APP_PATH", $root . 'app' . DIRECTORY_SEPARATOR);
print_r(APP_PATH . 'app.php'. PHP_EOL) ;

require APP_PATH . 'app.php';
?>