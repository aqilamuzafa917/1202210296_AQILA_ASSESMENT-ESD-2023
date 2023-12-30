<?php

function generateUsernames($name, $maxLength) {

    // Untuk memenuhi syarat lowercase
    $name = strtolower($name);
    // Untuk memenuhi tanpa spasi
    $name = str_replace(" ","",$name);
    // Menghitung panjang nama
    $nameLength = strlen($name);

    $usernames = [];
    for ($i = 0; $i < $nameLength; $i++) {
        $currentUsername = '';

        for ($j = $i; $j < $nameLength && strlen($currentUsername) < $maxLength; $j++) {
            $currentUsername .= $name[$j];
            $usernames[] = $currentUsername;
        }
    }

    return array_unique($usernames);
}

$fullName = "Naip Lovyu";
$maxLength = 6;

$usernames = generateUsernames($fullName, $maxLength);

// Menampilkan jumlah username yang mungkin
echo "Jumlah username yang mungkin: " . count($usernames) . "\n";

echo "Daftar username yang mungkin:\n";
foreach ($usernames as $u) {
    echo $u . "\n";
}
?>