<?php
$loremIpsum = "Lorem ipsum dolor sit amet, consectetur adipiscing elit.
    Vestibulum efficitur, nisl quis tincidunt luctus, nunc nisl accumsan
    ligula, sit amet condimentum nisl lorem sit amet justo. Aliquam erat";

echo "<p>{$loremIpsum}</p>";
echo "panjang karakter: ".strlen($loremIpsum). "<br>";
echo "panjang kata: ".str_word_count($loremIpsum)."<br>";
echo "<p>".strtoupper($loremIpsum)."</p>";
echo "<p>".strtolower($loremIpsum)."</p>";
?>