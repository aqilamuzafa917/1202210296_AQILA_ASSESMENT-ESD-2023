<?php

// Data produk beserta kategorinya dan harganya
$produk = [
    ["TV", "elektronik", 1000],
    ["headphone", "elektronik", 200],
    ["baju", "fashion", 50],
    ["gitar", "musik", 300],
    ["sepatu", "olahraga", 80],
    ["kamera", "elektronik", 600],
];

// Data pelanggan beserta minat dan produk yang sudah dibeli
$pelanggan = [
    "Rina" => ["elektronik", "musik"],
    "Budi" => ["fashion", "musik"],
    "Hartono" => ["olahraga", "elektronik"],
];

function rekomendasiProduk($pelanggan, $produk) {
    $rekomendasi = [];

    // Iterasi melalui data pelanggan
    foreach ($pelanggan as $nama => $minat) {
        // Iterasi melalui data produk
        foreach ($produk as $item) {
            list($namaProduk, $kategori, $harga) = $item;

            // Cek apakah kategori produk ada dalam minat pelanggan dan produk belum dibeli
            if (in_array($kategori, $minat) && !in_array($namaProduk, $pelanggan[$nama])) {
                // Tambahkan produk ke rekomendasi untuk pelanggan tertentu
                $rekomendasi[$nama][] = $namaProduk;
            }
        }
    }

    return $rekomendasi;
}

// Dapatkan rekomendasi produk
$rekomendasi = rekomendasiProduk($pelanggan, $produk);

// Tampilkan rekomendasi produk untuk setiap pelanggan
foreach ($rekomendasi as $nama => $produkRekomendasi) {
    echo "$nama: " . json_encode($produkRekomendasi) . "\n";
}

?>
