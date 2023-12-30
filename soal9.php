<?php

function analisisAnakNakal($namaAnak) {
    // Menghitung jumlah kemunculan setiap nama anak
    $jumlahNama = array_count_values($namaAnak);

    // Mengurutkan nama anak berdasarkan jumlah kemunculan secara descending
    arsort($jumlahNama);

    // Membuat daftar nama anak nakal yang paling banyak disebutkan
    $namaNakal = [];
    foreach ($jumlahNama as $nama => $jumlah) {
        if ($jumlah > 2) {
            $namaNakal[] = $nama;
        } else {
            break; // Jika sudah tidak ada yang lebih dari satu, berhenti
        }
    }

    // Menghasilkan output sesuai dengan hasil analisis
    if (empty($namaNakal)) {
        return "Semuanya anak baik";
    } else {
        return implode(" dan ", $namaNakal) . " Nackal";
    }
}

// Contoh penggunaan
$anakNakal1 = ["Bagas", "Dimas", "Bagas", "Bagas", "Indra", "Gilang", "Gilang", "Hana", "Fajar", "Fajar"];
$hasil1 = analisisAnakNakal($anakNakal1);
echo $hasil1 . "\n";

$anakNakal2 = ["Bagas", "Dimas", "Fajar", "Bagas", "Indra", "Gilang", "Gilang", "Bagas", "Fajar", "Fajar"];
$hasil2 = analisisAnakNakal($anakNakal2);
echo $hasil2 . "\n";

$anakNakal3 = ["Aisyah", "Bagas", "Dewi", "Dimas", "Eka", "Fajar", "Gilang", "Hana", "Indra", "Jihan"];
$hasil3 = analisisAnakNakal($anakNakal3);
echo $hasil3 . "\n";

?>
