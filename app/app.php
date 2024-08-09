

<?php 

function gettransactionfile(string $dir):array
{

    $file = [];

    foreach (scandir($dir) as $files) {
        if(is_dir($files)){
            continue;
        }

        $file[] = $dir . $files;
    }

    return $file;


}

function gettransaction(string $filename):array{

    
    if (!file_exists($filename)) {
        trigger_error(`file {$filename} no found`,E_USER_ERROR);
    }
    
    $file = fopen($filename, 'r');
    
    fgetcsv($file); 

    $transactions = [];
    

    while(($transaction = fgetcsv($file)) !== false) {
        $transactions[]=$transaction;
}
return $transactions;
}

?>