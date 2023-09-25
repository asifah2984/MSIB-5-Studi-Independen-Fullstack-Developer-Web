
<!-- Dari daftar mahasiswa dan nilai yang ada buatlah : -->
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Mahasiswa dan Nilai</title>
    </head>

    <body>
        
    <?php
    $m1 = ['nim' => '0111110', 'nama'=>'Ardiman','nilai' => 50];
    $m2 = ['nim' => '0111111', 'nama'=>'Adiguna','nilai' => 60];
    $m3 = ['nim' => '0111112', 'nama'=>'Adikara','nilai' => 70];
    $m4 = ['nim' => '0111113', 'nama'=>'Adinata','nilai' => 80];
    $m5 = ['nim' => '0111114', 'nama'=>'Baskara','nilai' => 90];
    $m6 = ['nim' => '0111115', 'nama'=>'Baswara','nilai' => 95];
    $m7 = ['nim' => '0111116', 'nama'=>'Gunawan','nilai' => 85];
    $m8 = ['nim' => '0111117', 'nama'=>'Handaru','nilai' => 75];
    $m9 = ['nim' => '0111118', 'nama'=>'Herjuno','nilai' => 65];
    $m10 = ['nim' => '0111119', 'nama'=>'Kresna','nilai' => 55];
    
    $ar_judul = ['No','NIM','Nama Mahasiswa','Nilai','Keterangan','Grade','Predikat'];
    $mahasiswa = [$m1,$m2,$m3,$m4,$m5,$m6,$m7,$m8,$m9,$m10];

    // 4. Buat agregate nilai dan gunakan aggregate function di array 
    // serta tampilkan hasilnya pada (tfoot) => nilai tertinggi, nilai terendah, 
    // nilai rata-rata, jumlah mahasiswa, jumlah keseluruhan nilai jika digabungkan
    $jumlah_mahasiswa = count($mahasiswa);
    $jumlah_nilai = array_column($mahasiswa,'nilai');
    $jumlah_total = array_sum($jumlah_nilai);
    $nilai_tinggi = max($jumlah_nilai);
    $nilai_rendah = min($jumlah_nilai);
    $nilai_rata = $jumlah_total / $jumlah_mahasiswa;
    $ar_ket = [
        'Jumlah Mahasiswa' => $jumlah_mahasiswa,
        'Nilai Tertinggi' => $nilai_tinggi,
        'Nilai Terendah' => $nilai_rendah,
        'Nilai Rata-Rata' => $nilai_rata,
        'Jumlah Keseluruhan Nilai' => $jumlah_total
    ];

    ?>

    <h3>Daftar Mahasiswa serta Nilai</h3>
    <table border = "1" cellpadding="10" cellspacing="3" width="100%">
        <thead>
            <tr>
                <?php
                foreach($ar_judul as $judul){
                    ?>
                    <th><?= $judul ?></th>

                <?php } ?>
            </tr>
        </thead>

        <tbody>
            <?php $no=1;
            foreach ($mahasiswa as $siswa){
                
                // 1. Keterangan => ternary minimal nilai 60 dinyatakan lulus
                $keterangan = ($siswa ['nilai'] >= 60 ) ? "Lulus" : "Gagal";

                // 2. grade if multi kondisi => A, B, C, D, E
                if ($siswa ['nilai'] >= 85 && $siswa ['nilai'] <= 100) $grade = "A";
                else if($siswa ['nilai'] >= 75 && $siswa ['nilai'] <= 84) $grade = "B";
                else if($siswa ['nilai'] >= 60 && $siswa ['nilai'] <= 74) $grade = "C";
                else if($siswa ['nilai'] >= 30 && $siswa ['nilai'] <= 59) $grade = "D";
                else if($siswa ['nilai'] >= 0 && $siswa ['nilai'] <= 29) $grade = "E";
                else $grade = "";

                // 3. Predikat Switch case dari Grade 
                switch($grade){
                    case "A" : $predikat = "Memuaskan"; break;
                    case "B" : $predikat = "Bagus"; break;
                    case "C" : $predikat = "Cukup"; break;
                    case "D" : $predikat = "Kurang"; break;
                    case "E" : $predikat = "Buruk"; break;
                    default : $predikat = '';
                }
                ?>
                <tr>
                <td><?= $no++ ?></td>
                <td><?= $siswa ['nim'] ?></td>
                <td><?= $siswa ['nama'] ?></td>
                <td><?= $siswa ['nilai'] ?></td>
                <td><?= $keterangan ?></td>
                <td><?= $grade ?></td>
                <td><?= $predikat ?></td>
                </tr>
            <?php } ?>
        </tbody>

        <tfoot>
            <?php
            foreach($ar_ket as $ket => $hasil){  
                ?>  
                <tr>
                    <th colspan="3"><?= $ket ?></th>
                    <th colspan="5"><?= $hasil ?></th>
                </tr>
            <?php } ?>
        </tfoot>
    </table>
    </body>
</html>