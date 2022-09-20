<?php 
require_once 'App/init.php';

// Xiaomi
$hx2 = new Xiaomi ("Xiaomi","Note 10");

// Samsung

$hs1 = new Samsung ("Samsung","Galaxy Z Flip4", 0);

// Oppo

$ho1 = new Oppo("Oppo","Realme 9 Pro+", 0);

$hx1 = new Xiaomi ("Xiaomi", "Note 9");

// Fungsi Xiaomi

// echo $hx1->nyalakan();

$k = new App();

$k->tambahHp($hx1);

$k->tambahHp($hx2);

$k->tambahHp($hs1);

$k->tambahHp($ho1);

echo $k->cetak();

echo "<br>";

echo $hx2->nyalakan();

echo "<br>";
echo "<br>";

echo $hx2->getMerk();

echo "<br>";
echo "<br>";

echo $hx2->getTipe();

echo "<br>";
echo "<br>";

echo $hx2->getVolume();

echo "<br>";
echo "<br>";

$hx2->volumeUp();

echo "<br>";
echo "<br>";

$hx2->volumeUp();

echo "<br>";
echo "<br>";

$hx2->volumeUp();

echo "<br>";
echo "<br>";

$hx2->volumeUp();

echo "<br>";
echo "<br>";

$hx2->volumeUp();

echo "<br>";
echo "<br>";

$hx2->volumeUp();

echo "<br>";
echo "<br>";

echo $hx2->getVolume();

echo "<br>";
echo "<br>";

echo $hx2->volumeDown();

echo "<br>";
echo "<br>";

echo $hx2->getVolume();

echo "<br>";
echo "<br>";

echo $hx2->capture();

echo "<br>";
echo "<br>";

echo $hx2->matikan();



 ?>