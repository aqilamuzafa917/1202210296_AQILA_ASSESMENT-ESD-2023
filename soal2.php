<?php

function cekPalindrom($kalimat) {
    // mengubah menjadi huruf kecil
    $kalimat = strtolower($kalimat);

    // Membalikkan kalimat
    $kalimatTerbalik = strrev($kalimat);

    // Memeriksa apakah kalimat merupakan palindrom atau tidak
    if ($kalimat == $kalimatTerbalik) {
        return "eureeka!";
    } else {
        return "suka blyat";
    }
}

// Contoh pemanggilan fungsi dengan input tertentu
$input1 = "Angsa";
echo "Kalimat: " . $input1 . "\n";
echo "Output: " . cekPalindrom($input1) . "\n";

$input2 = "KataK";
echo "Kalimat: " . $input2 . "\n";
echo "Output: " . cekPalindrom($input2) . "\n";

$input3 = "kasur empuk";
echo "Kalimat: " . $input3 . "\n";
echo "Output: " . cekPalindrom($input3) . "\n";

$input4 = "Aku Suka Kamu";
echo "Kalimat: " . $input4 . "\n";
echo "Output: " . cekPalindrom($input4) . "\n";

$input5 = "Ibu Ratna antar ubi";
echo "Kalimat: " . $input5 . "\n";
echo "Output: " . cekPalindrom($input5) . "\n";

?>
