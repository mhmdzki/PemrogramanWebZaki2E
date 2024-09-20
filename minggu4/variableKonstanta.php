<?php
$angka1 = 10;
$angka2 = 50;
$hasil = $angka1 + $angka2;
echo "hasil penjumlahan $angka1 + $angka2 adalah $hasil.";

$benar = true;
$salah = false;
echo "variable benar: $benar, variable salah: $salah.";

//mendefinisikan konstanta untuk nilai tetap
define("Nama_Situs", "Websiteku.com");
define("Tahun_Pendirian", 2023);

echo "Selamat datang di" . Nama_Situs . ", Situs yang didirikan pada Tahun " . Tahun_Pendirian . ".";
?>