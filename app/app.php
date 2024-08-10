<?php

function getTransactionFile(string $dir): array
{

    $file = [];

    foreach (scandir($dir) as $files) {
        if (is_dir($files)) {
            continue;
        }

        $file[] = $dir . $files;
    }

    return $file;


}

function getTransaction(string $filename): array
{


    if (!file_exists($filename)) {
        trigger_error(`file {$filename} no found`, E_USER_ERROR);
    }

    $file = fopen($filename, 'r');

    fgetcsv($file);

    $transactions = [];


    while (($transaction = fgetcsv($file)) !== false) {
        $transactions[] = extractTransaction($transaction);
    }
    return $transactions;
}

function extractTransaction(array $transactionRow):array{

    [$date,$check,$description,$amount] = $transactionRow;
    $amount = (float) str_replace(['$',','],'',$amount);
    return [
        'date' => $date,
        'check' => $check,
        'description' => $description,
        'amount' => $amount,
    ];
}

function calculateTransaction(array $transactions):array
{
    $total = [
        'netTotal' => 0,
        'totalExpense' => 0,
        'totalIncome' => 0,
    ];

    foreach ($transactions as $transaction) {
        $total['netTotal'] += $transaction['amount'];

        if ($transaction['amount'] >= 0) {
            $total['totalIncome'] += $transaction['amount'];
        } else {
            $total['totalExpense'] += $transaction['amount'];
        }
    }
        return $total;
}


function formatAmount(float $amount):string
{
    $isNegative = $amount < 0;
    return ($isNegative ? '-': '') . '$' . number_format($amount,2);

}

?>