<?php
$totalKursi = 45;
$kursiDitempati = 28;

$kursiKosong = $totalKursi - $kursiDitempati;

$persentaseKosong = ($kursiKosong / $totalKursi) * 100;

echo "Total kursi: $totalKursi<br>";
echo "Kursi ditempati: $kursiDitempati<br>";
echo "Kursi kosong: $kursiKosong<br>";
echo "Persentase kursi kosong: " . number_format($persentaseKosong, 2) . "%<br>";

?>