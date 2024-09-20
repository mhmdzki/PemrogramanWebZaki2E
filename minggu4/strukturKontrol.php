<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf: A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf: C";
} elseif ($nilaiNumerik <= 70) {
    echo "Nilai huruf: D ";
}

echo "<br>";
$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500km";

echo "<br>";
$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $buahPerLahan = $tanamanPerlahan * $buahPerTanaman;
    $jumlahBuah += $buahPerLahan;
}

echo "Jumlah buah yang dihasilkan adalah $jumlahBuah";

echo "<br>";
$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah $totalSkor";

echo "<br>";
$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if($nilai < 60) {
        echo "Nilai : $nilai (Tidak Lulus)<br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus)<br>";
}

echo "<br>";
$nilaiUjian = [90, 88, 85,79, 78, 75];

$jumlahNilai = count($nilaiUjian);
$totalNilai = array_sum($nilaiUjian);
$rataNilai = $totalNilai / $jumlahNilai;

echo "Total Nilai: $totalNilai<br>";
echo "Rata-rata Nilai: " . number_format($rataNilai, 2) . "<br>";

?>