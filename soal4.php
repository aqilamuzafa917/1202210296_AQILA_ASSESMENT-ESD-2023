<?php

function cekDuplikat($array) {
    // Menghitung jumlah elemen unik dalam array
    $jumlahUnik = count(array_unique($array));

    // Jika jumlah elemen unik kurang dari jumlah total elemen, berarti ada duplikat
    return $jumlahUnik !== count($array);
}

// Contoh pemanggilan fungsi dengan input tertentu
$dataAngka = [20, 1, 3, 2, 4, 6, 8, 5, 7, 9, 11, 13, 15, 10, 12, 14, 16, 18, 20, 17, 19];
echo "Input: " . json_encode($dataAngka) . "\n";

$output = cekDuplikat($dataAngka);
echo "Output: " . ($output ? 'True' : 'False') . "\n";
?>
