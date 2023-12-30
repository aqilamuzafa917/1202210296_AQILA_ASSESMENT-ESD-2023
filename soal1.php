<?php

function hitungRating($dataReview) {
    // Menghitung rating terendah
    $ratingTerendah = min($dataReview);

    // Menghitung rating tertinggi
    $ratingTertinggi = max($dataReview);

    // Menghitung rata-rata rating
    $rataRataRating = number_format(array_sum($dataReview) / count($dataReview), 1);

    // Menampilkan input
    echo "Input: " . json_encode($dataReview) . "\n";

    // Menampilkan output
    echo "Output: " . json_encode([$ratingTerendah, $ratingTertinggi, $rataRataRating], JSON_NUMERIC_CHECK) . "\n";
}

// Contoh pemanggilan fungsi dengan input tertentu
$inputData1 = array(4.5, 2.0, 1.5, 3.0, 2.5, 4.0, 5.0, 3.5, 2.0, 1.0);
hitungRating($inputData1);

$inputData2 = array(5, 4, 2.5, 5, 3.6, 1.1, 3.6, 4, 4.2, 1.5);
hitungRating($inputData2);

?>
