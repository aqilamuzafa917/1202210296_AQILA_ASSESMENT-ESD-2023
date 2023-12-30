<?php

// Inisialisasi daftar menu
$menu = [
    ['Ayam Goreng Krispi', 'Makanan', 15000],
    ['Ayam Puk Puk (Bukan di geprek)', 'Makanan', 13000],
    ['Ayam Bakar', 'Makanan', 20000],
    ['Es teh', 'Minuman', 5000],
    ['Es Jeruk', 'Minuman', 7000],
];

// Inisialisasi aturan pajak
$pajakMakanan = 0.05; // 5% pajak untuk makanan
$pajakMinuman = 0.03; // 3% pajak untuk minuman
$pajakTransaksi = 0.15; // 15% pajak untuk setiap transaksi

// Inisialisasi pesanan masing-masing sahabat
$rehanWhangsapPesanan = [
    ['Ayam Bakar', 'Makanan', 2],
    ['Es teh', 'Minuman', 1],
];

$ambaRoniPesanan = [
    ['Ayam Puk Puk (Bukan di geprek)', 'Makanan', 1],
    ['Es teh', 'Minuman', 3],
];

$faizNgawiPesanan = [
    ['Ayam Goreng Krispi', 'Makanan', 1],
    ['Ayam Puk Puk (Bukan di geprek)', 'Makanan', 1],
    ['Ayam Bakar', 'Makanan', 1],
    ['Es teh', 'Minuman', 1],
    ['Es Jeruk', 'Minuman', 1],
];

// Fungsi untuk menghitung biaya pesanan
function hitungBiayaPesanan($pesanan, $menu, $pajakMakanan, $pajakMinuman) {
    $totalBiaya = 0;

    foreach ($pesanan as $item) {
        // Mencari menu yang sesuai dengan pesanan
        $menuItem = array_filter($menu, function ($m) use ($item) {
            return $m[0] == $item[0] && $m[1] == $item[1];
        });

        // Mengambil harga menu
        $harga = reset($menuItem)[2];

        // Menghitung pajak berdasarkan tipe menu
        $pajak = $item[1] == 'Makanan' ? $pajakMakanan : $pajakMinuman;

        // Menghitung biaya setelah pajak
        $biaya = $harga * $item[2] * (1 + $pajak);
        $totalBiaya += $biaya;
    }

    return $totalBiaya;
}

// Menghitung biaya pesanan masing-masing sahabat
$rehanWhangsapBiaya = hitungBiayaPesanan($rehanWhangsapPesanan, $menu, $pajakMakanan, $pajakMinuman);
$ambaRoniBiaya = hitungBiayaPesanan($ambaRoniPesanan, $menu, $pajakMakanan, $pajakMinuman);
$faizNgawiBiaya = hitungBiayaPesanan($faizNgawiPesanan, $menu, $pajakMakanan, $pajakMinuman);

// Menghitung pajak transaksi
$pajakTransaksiRehan = $rehanWhangsapBiaya * $pajakTransaksi;
$pajakTransaksiAmba = $ambaRoniBiaya * $pajakTransaksi;
$pajakTransaksiFaiz = $faizNgawiBiaya * $pajakTransaksi;

// Menampilkan hasil
echo "Biaya pesanan Rehan Whangsap: Rp. " . number_format($rehanWhangsapBiaya, 2) . "\n";
echo "Biaya pesanan Amba Roni: Rp. " . number_format($ambaRoniBiaya, 2) . "\n";
echo "Biaya pesanan Faiz Ngawi: Rp. " . number_format($faizNgawiBiaya, 2) . "\n";

echo "\nPajak transaksi Rehan Whangsap: Rp. " . number_format($pajakTransaksiRehan, 2) . "\n";
echo "Pajak transaksi Amba Roni: Rp. " . number_format($pajakTransaksiAmba, 2) . "\n";
echo "Pajak transaksi Faiz Ngawi: Rp. " . number_format($pajakTransaksiFaiz, 2) . "\n";

echo "\nTotal biaya Rehan Whangsap: Rp. " . number_format($rehanWhangsapBiaya + $pajakTransaksiRehan, 2) . "\n";
echo "Total biaya Amba Roni: Rp. " . number_format($ambaRoniBiaya + $pajakTransaksiAmba, 2) . "\n";
echo "Total biaya Faiz Ngawi: Rp. " . number_format($faizNgawiBiaya + $pajakTransaksiFaiz, 2) . "\n";
