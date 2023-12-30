<?php

// Inisialisasi array suspect
$suspectList = ['Ningguang', 'Hutao', 'Xiao', 'Childe'];
echo "Kronologi :
1. Ningguang memeriksa kue sebelum memberikan kado.
2. Hutao langsung memberikan kado tanpa memperhatikan kue.
3. Xiao memiliki memotret apa pun yang dia lihat pertama kali di ruangan.
4. Childe membawa air mineral dan meletakkannya di meja sebelum memberikan kado.\n
";

$evidence = "Foto Xiao menunjukan Kue masih ada.";
echo "Evidence : $evidence\n";
$tidakBersalah = 'Xiao';
echo "Maka yang tidak bersalah adalah : $tidakBersalah\n";

// 
if ($tidakBersalah == 'Ningguang'){
    echo "Pelaku yang paling mungkin mengambil kue adalah: " .($suspectList[1]) . "\n";
}elseif ($tidakBersalah == 'Hutao'){
    echo "Pelaku yang paling mungkin mengambil kue adalah: " .($suspectList[2]) . "\n";
}elseif ($tidakBersalah == 'Xiao') {
    echo "Pelaku yang paling mungkin mengambil kue adalah: " .($suspectList[3]) . "\n";
}
?>
