<?php

// class Produk
class Produk {
    // properti sebagai variabel di class
    // public bisa diakses oleh class 
    public $judul, 
           $penulis, 
           $penerbit;

    // protected bisa diakses dari dalam class dan subclass
    protected $diskon = 0;
    // private hanya bisa diakses dari dalam class itu sendiri
    private $harga;

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
    
    // harga
    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    // method informasi lengkap
    public function getInfoProduk() {
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";
        return $str;
    }
}


// class Komik child dari class Produk
class Komik extends Produk {
    public $jmlHalaman;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0 ){
        
        parent::__construct($judul, $penulis, $penerbit, $harga);   

        $this->jmlHalaman = $jmlHalaman;
    }

    public function getInfoProduk(){
        $str = "Komik : " . parent::getInfoProduk() . " - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}


// class Game child dari class Produk
class Game extends Produk {
    public $waktuMain;

    public function __construct( $judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0 ){

        parent::__construct( $judul, $penulis, $penerbit, $harga );

        $this->waktuMain = $waktuMain;
    }

    // diskon
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;    
    }

    public function getInfoProduk(){
        $str = "Game : " . parent::getInfoProduk() . " ~ {$this->waktuMain} Jam.";
        return $str;
    }
}


// class CetakInfoProduk
class CetakInfoProduk {
    public function cetak ( Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLabel()} (Rp. {$produk->harga})";
        return $str;
    }
}

// instance dari class
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckman", "Sony Computer", 250000, 50);

// menampilkan instance
echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();
echo "<hr>";


$produk2->setDiskon(50);

echo $produk2->getHarga();

?>