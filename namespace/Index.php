<?php

require_once 'App/Init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk->tambahProduk($produk1);   
// $cetakProduk->tambahProduk($produk2);

// echo $cetakProduk->cetak();

// echo "<hr>";


use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUser;

// namespace Vendor\Namespace\SubNamespace;
new ServiceUser();
echo'<hr>';
new ProdukUser();