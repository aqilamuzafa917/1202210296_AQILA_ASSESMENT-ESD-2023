<?php

function hitungKembalian($totalPembayaran, $totalBelanja) {
    // Pecahan uang yang tersedia
    $pecahanUang = [100000, 50000, 20000, 10000, 5000, 2000, 1000, 500, 200, 100];
    
    // Menghitung jumlah kembalian
    $kembalian = $totalPembayaran - $totalBelanja;
    
    // Inisialisasi array untuk menyimpan hasil kembalian
    $hasilKembalian = [];

    // Menghitung jumlah lembar dan keping kembalian untuk setiap pecahan uang
    foreach ($pecahanUang as $pecahan) {
        $jumlah = floor($kembalian / $pecahan);
        if ($jumlah > 0) {
            $hasilKembalian["$pecahan"] = $jumlah;
            $kembalian -= $jumlah * $pecahan;
        }
    }

    // Mengurutkan array hasil kembalian berdasarkan kunci (nilai pecahan)
    ksort($hasilKembalian);

    return $hasilKembalian;
}

// Contoh penggunaan
$totalPembayaran1 = 10000;
$totalBelanja1 = 7500;
$result1 = hitungKembalian($totalPembayaran1, $totalBelanja1);
echo json_encode($result1) . "\n";

$totalPembayaran2 = 5000;
$totalBelanja2 = 1100;
$result2 = hitungKembalian($totalPembayaran2, $totalBelanja2);
echo json_encode($result2) . "\n";

$totalPembayaran3 = 178000;
$totalBelanja3 = 90500;
$result3 = hitungKembalian($totalPembayaran3, $totalBelanja3);
echo json_encode($result3) . "\n";
?>
