<?php
require_once 'abstract.php';
class Segitiga extends Bentuk2D {
    public $alas;
    public $tinggi;

    public function __construct($alas, $tinggi) {
        $this->alas = $alas;
        $this->tinggi = $tinggi;
    }

    public function namaBidang() {
        $namas = "Segitiga";
        return $namas;
    }

    public function luasBidang() {
        $luasSegitiga = 0.5 * $this->alas * $this->tinggi;
        return $luasSegitiga;
    }

    public function kelilingBidang() {
        $sisiMiring = sqrt($this->alas ** 2 + $this->tinggi ** 2);
        $kelilingSegitiga = $this->alas + $this->tinggi + $sisiMiring;
        return $kelilingSegitiga;
    }

    public function keteranganBidang() {
        $keteranganSegitiga = "Keliling = Sisi1 + Sisi2 + Sisi3 dan Luas = (Alas × Tinggi) / 2";
        return $keteranganSegitiga;
    }
}

?>