<?php

function hitungUmur($thn_lahir, $thn_sekarang) {
    $umur = $thn_sekarang - $thn_lahir;
    return $umur;
}
function perkenalan($nama, $salam = "Assaalammualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya".$nama."<br/>";
    
    echo "saya berusia ". hitungUmur(2005, 2024) . " tahun<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Zaki");

?>