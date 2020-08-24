<?php

include "./hewans.php";
// include "./elang.php";

$harimau_1 = new harimau();
$harimau_1->setNama("Harimau_1");
$harimau_1->getInfoHewan();

echo "<br>";

$elang_1 = new elang();
$elang_1->setNama("Elang_1");
$elang_1->getInfoHewan();

echo "<br>";

// $harimau_1->serang($elang_1);
$harimau_1->diserang();
// $elang_1->diserang();