<?php
$poinPemain = 450; 
$batasHadiah = 500;

$mendapatHadiah = ($poinPemain > $batasHadiah) ? "YA" : "TIDAK";

echo "Total skor pemain adalah: ($poinPemain)<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? ($mendapatHadiah)";
?>