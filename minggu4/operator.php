<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

echo "$hasilTambah <br>";
echo "$hasilKurang <br>";
echo "$hasilKali <br>";
echo "$hasilBagi <br>";
echo "$sisaBagi <br>";
echo "$pangkat <br>";

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

echo "a = $a, b = $b <br>";
echo "a == b : " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "a != b : " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "a < b  : " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "a > b  : " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "a <= b : " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "a >= b : " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "a and b : " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "a or b  : " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "not a   : " . ($hasilNotA ? 'true' : 'false') . "<br>";
echo "not b   : " . ($hasilNotB ? 'true' : 'false') . "<br>";

$a += $b;
echo "a += b : $a <br>";

$a = 10; 
$a -= $b;
echo "a -= b : $a <br>";

$a = 10; 
$a *= $b;
echo "a *= b : $a <br>";
 
$a = 10; 
$a /= $b;
echo "a /= b : $a <br>";

$a = 10; 
$a %= $b;
echo "a %= b : $a <br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "a === b : " . ($hasilIdentik ? 'true' : 'false') . "<br>";
echo "a !== b : " . ($hasilTidakIdentik ? 'true' : 'false') . "<br>";
?>