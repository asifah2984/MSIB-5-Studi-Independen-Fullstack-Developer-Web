
<?php

// Buatlah Class KonversiSuhu dengan member class:
class KonversiSuhu {

    // - variabel : satuanSuhuAwal, besaranSuhu, satuanSuhuTujuan
    private $satuanSuhuAwal;
    public $besaranSuhu;
    protected $satuanSuhuTujuan;

    // - konstruktor : satuanSuhuAwal, besaranSuhu, satuanSuhuTujuan
    public function __construct($satuanSuhuAwal, $besaranSuhu, $satuanSuhuTujuan){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->besaranSuhu = $besaranSuhu;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
    }

    /* - method : 
    1. fungsi konversi dengan logika berdasarkan satuanSuhuAwal dan satuanSuhuTujuan 
       (Gunakan rumus konveri suhu):

        - CelciusToFahrenheit 
        - FahrenheitToCelcius
        - CelciusToRheamur
        - RheamurToCelcius */

    public function konversi($satuanSuhuAwal, $satuanSuhuTujuan, $besaranSuhu){
        $this->satuanSuhuAwal = $satuanSuhuAwal;
        $this->satuanSuhuTujuan = $satuanSuhuTujuan;
        $this->besaranSuhu = $besaranSuhu;
        switch ($satuanSuhuAwal) {
            case "Celsius":
                switch ($satuanSuhuTujuan) {
                    case "Fahrenheit":
                        return ($besaranSuhu * 9/5) + 32;
                    case "Rheamur":
                        return $besaranSuhu * 0.8;
                }
                break;
            case "Fahrenheit":
                switch ($satuanSuhuTujuan) {
                    case "Celsius":
                        return ($besaranSuhu - 32) * 5/9;
                }
                break;
            case "Rheamur":
                switch ($satuanSuhuTujuan) {
                    case "Celsius":
                        return $besaranSuhu / 0.8;
                }
                break;
        };
        return null;
    }


    /*  2. fungsi cetak untuk mencetak:

    Satuan Suhu Awal, Besaran Suhu, Satuan Suhu Tujuan, Hasil Konversi Suhu
    memanggil fungsi konversi yang sudah dibuat di atasnya.
    Cetaklah data menggunakan format tabel. */

    public function cetakHasilKonversi(){
        $HasilKonversiSuhu = $this->konversi();
        if ($$HasilKonversiSuhu !== null) {
            echo "<tr><td>{$this->satuanSuhuAwal}</td>
            <td>{$this->besaranSuhu}</td>
            <td>{$this->satuanSuhuTujuan}</td>
            <td>{$hasil}</td></tr>";
        } 
        else {
            echo "<tr><td colspan='4'>Satuan suhu tidak valid</td></tr>";
        }
    }

}


?>

