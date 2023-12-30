<?php

function dekripsiChat($teks) {
    $hasilDekripsi = '';
    // Loop untuk setiap karakter dalam teks
    for ($i = 0; $i < strlen($teks); $i++) {
        $karakter = $teks[$i];
        // Cek apakah karakter adalah huruf kecil
        if ($karakter >= 'a' && $karakter <= 'z') {
            // Dekripsi huruf kecil dengan perpindahan 5 karakter
            $hasilDekripsi .= chr((ord($karakter) - ord('a') + 21) % 26 + ord('a'));
        } else {
            // Jika bukan huruf kecil, tambahkan karakter langsung ke hasilDekripsi
            $hasilDekripsi .= $karakter;
        }
    }
    return $hasilDekripsi;
}

// Isi Chat yang dienkripsi
$isiChatTerenskripsi = "xfqfr bfmdz
gjxtp lzj rfz ifkyfw jxi snm
gwt, gjxtp qz rfz rfpfs in bfwlty lfp?
fpz xfdfsl pfrz, rfz lfp ofin ufhfwpz
dfsl pnwnr xynhpjw otrtp pz pnhp ifwn lwzu";

// Pemanggilan fungsi
$isiChatTerdekripsi = dekripsiChat($isiChatTerenskripsi);
// Menampilkan hasil dekripsi
echo "Isi Chat Terdekripsi:\n";
echo $isiChatTerdekripsi . "\n";

?>
