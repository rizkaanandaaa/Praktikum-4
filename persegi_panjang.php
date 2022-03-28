<?php
// Memanggil file atau class persegi panjang
require_once 'class_persegi panjang.php';
$persegipanjang1 = new Persegipanjang(2, 5);
$persegipanjang2 = new Persegipanjang(4, 6);

// Menghitung luas
echo "luas persegi panjang I adalah = " .$persegipanjang1->getluas();
echo "<br> luas persegi panjang II adalah = " .$persegipanjang2->getluas();
echo "<br>";

// Menghitung keliling
echo "<br> luas persegi panjang I adalah = " .$persegipanjang1->getKeliling();
echo "<br> luas persegi panjang II adalah = " .$persegipanjang2->getkeliling();
?>