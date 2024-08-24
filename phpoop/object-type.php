<?php

// class 1
class Produk {
    // properti sebagai variabel di class
    public $judul, $penulis, $penerbit, $harga;

    // constructor untuk menginisialisasi properti class ketika objek dibuat
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    // method mengembalikan string yang menggabungkan properti
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// class 2
class CetakInfoProduk {
    public function cetak ( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// instance dari class
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000);

// menampilkan instance dari produk1 dan produk2
echo "komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";

$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->cetak($produk2);

?>