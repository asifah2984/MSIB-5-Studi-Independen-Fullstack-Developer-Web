<?php
require_once 'abstract.php';
class Lingkaran extends Bentuk2D {
    public $jari2;

    public function __construct($jari2) {
        $this->jari2 = $jari2;
    }

    public function namaBidang() {
        $namal = "Lingkaran";
        return $namal;
    }

    public function luasBidang() {
        $luasLingkaran = 3.14 * $this->jari2 * $this->jari2;
        return $luasLingkaran;
    }

    public function kelilingBidang() {
        $kelilingLingkaran = 2 * 3.14 * $this->jari2;
        return $kelilingLingkaran;
    }

    public function keteranganBidang() {
        $keteranganLingkaran = "Keliling = 2 * π * jari-jari dan Luas = π * (jari-jari ^ 2)";
        return $keteranganLingkaran;
    }
}

?>