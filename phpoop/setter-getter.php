<?php

// class Produk
class Produk {
    private $judul, 
           $penulis, 
           $penerbit,
           $harga;
    protected $diskon = 0;

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

    // set diskon
    public function setDiskon( $diskon ) {
        $this->diskon = $diskon;    
    }
    
    // get diskon
    public function getDiskon() {
        return $this->diskon;
    }

    // get harga
    public function getHarga(){
        return $this->harga - ( $this->harga * $this->diskon / 100 );
    }

    // set harga
    public function setHarga( $harga) {
        $this->harga = $harga;    
    } 

    // set judul
    public function setJudul( $judul ) {
        $this->judul = $judul;
    }
    // get judul
    public function getJudul() {
        return $this->judul;
    }

    // set penulis
    public function setPenulis( $penulis ) {
        $this->penulis = $penulis;
    }

    // get penulis
    public function getPenulis() {
        return $this->penulis;
    }
    
    // set penerbit
    public function setPenerbit( $penerbit ) {
        $this->penerbit = $penerbit;
    }
    // get penerbit
    public function getPenerbit() {
        return $this->penerbit;
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
echo "<hr>";


$produk1->setPenulis("Ali Reza Bahtiar");
echo $produk1->getPenulis();

?>