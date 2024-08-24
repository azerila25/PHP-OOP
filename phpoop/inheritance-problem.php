<?php

// class 1
class Produk {
    // properti sebagai variabel di class
    public $judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe;

    // constructor untuk menginisialisasi properti class ketika objek dibuat
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", 
        $harga = 0, $jmlHalaman = 0, $waktuMain = 0, $tipe = "tipe") {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    // method mengembalikan string yang menggabungkan properti
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    // method informasi lengkap
    public function getInfoLengkap() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        if( $this->tipe == "komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if( $this->tipe == "game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        }
        return $str;
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
$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "komik");
$produk2 = new Produk("Uncharted", "Neil Druckman", "Sony Computer", 250000, 0, 50, "game");

// menampilkan instance
echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();

?>