<?php

function perkenalan($nama, $salam = "Assaalammualaikum") {
    echo $salam.", ";
    echo "Perkenalkan, nama saya".$nama."<br/>";
    echo "Senang berkenalan dengan anda<br/>";
}

perkenalan("Zaki", "Hallo");

echo "<hr>";

$saya = "Zaki";
$ucapsalam = "Selamat Pagi";

perkenalan($saya);
?>