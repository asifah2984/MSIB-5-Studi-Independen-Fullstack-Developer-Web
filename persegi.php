<?php
require_once 'abstract.php';
class PersegiPanjang extends Bentuk2D {
    public $panjang;
    public $lebar;

    public function __construct($panjang, $lebar) {
        $this->panjang = $panjang;
        $this->lebar = $lebar;
    }

    public function namaBidang() {
        $namap = "Persegi Panjang";
        return $namap;
    }

    public function luasBidang() {
        $luasPersegi = $this->panjang * $this->lebar;
        return $luasPersegi;
    }

    public function kelilingBidang() {
        $kelilingPersegi = 2 * ($this->panjang + $this->lebar);
        return $kelilingPersegi;
    }

    public function keteranganBidang() {
        $keteranganPersegi = "Keliling = 2 × (Panjang + Lebar) dan Luas = Panjang × Lebar";
        return $keteranganPersegi;
    }
}

?>