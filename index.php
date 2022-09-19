<?php 
require_once 'App/init.php';

// Xiaomi
$hx1 = new Xiaomi ("Xiaomi", "Note 9", 5);
$hx2 = new Xiaomi ("Xiaomi","Note 10", 3);

// Samsung

$hs1 = new Samsung ("Samsung","Galaxy Z Flip4", 0);

// Oppo

$ho1 = new Oppo("Oppo","Realme 9 Pro+", 0);


// Fungsi Xiaomi

// echo $hx1->nyalakan();

$k = new App();

$k->tambahHp($hx1);

$k->tambahHp($hx2);

$k->tambahHp($hs1);

$k->tambahHp($ho1);

echo $k->cetak();

echo $hx1->getTipe();
echo "<br>";
echo $hx1->volumeUp(3);
echo "<br>";
echo $hx1->volumeDown(2);
echo "<br>";
echo $hx1->getVolume();
echo "<br>";
echo $hx1->nyalakan();
echo "<br>";


 ?>