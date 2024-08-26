<?php

abstract class Produk {
    protected $judul, 
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
    
    abstract public function getInfo();
}