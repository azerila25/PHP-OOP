<?php

// cara 1
define("NAMA", "Ali Reza Bahtiar");
echo NAMA;
echo "<br>";

// cara 2
const UMUR = 32;
echo UMUR;
echo "<br>";

class Coba {
    const NAMA = 'Ali';
    public $kelas = __CLASS__;
}
echo Coba::NAMA;
echo "<br>";

function Haahlah() {
    return __FUNCTION__;
}

echo Haahlah();
echo "<br>";

$obj = new Coba();
echo $obj->kelas;




?>