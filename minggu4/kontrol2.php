<?php
$hargaProduk = 120000;
$batasDiskon = 100000;
$persentaseDiskon = 20;

if ($hargaProduk > $batasDiskon) {
    $besarDiskon = ($persentaseDiskon / 100) * $hargaProduk;
    $hargaSetelahDiskon = $hargaProduk - $besarDiskon;
} else {
    $besarDiskon = 0;
    $hargaSetelahDiskon = $hargaProduk;
}
echo "Harga produk: Rp " . number_format($hargaProduk) . "<br>";
echo "Batas diskon: Rp " . number_format($batasDiskon) . "<br>";
echo "Persentase diskon: $persentaseDiskon%<br>";
echo "Besar diskon: Rp " . number_format($besarDiskon) . "<br>";
echo "Harga yang harus dibayar: Rp " . number_format($hargaSetelahDiskon) . "<br>";
?>