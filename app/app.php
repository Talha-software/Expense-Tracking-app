

<?php 

function gettransaction(string $dir)
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

?>