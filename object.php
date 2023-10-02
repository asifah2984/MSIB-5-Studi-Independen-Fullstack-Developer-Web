<?php
require_once 'lingkaran.php';
require_once 'persegi.php';
require_once 'segitiga.php';

$lingkaran = new Lingkaran(5);
$persegi = new PersegiPanjang(4, 6);
$segitiga = new Segitiga(3, 4);

$ar_judul = ['Nama Bidang','Keterangan Bidang','Luas Bidang','Keliling Bidang'];
$ar_bidang = [$lingkaran, $persegi, $segitiga];

?>

<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Daftar Percobaan Tugas Matematika</title>
    </head>
    <h3 align = "center">Daftar Percobaan Tugas Matematika</h3>
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
            <?php
                foreach ($ar_bidang as $key => $bidang) {
                    ?>
                    <tr>
                        <td><?= $bidang->namaBidang() ?></td>
                        <td><?= $bidang->keteranganBidang() ?></td>
                        <td><?= $bidang->luasBidang() ?></td>
                        <td><?= $bidang->kelilingBidang() ?></td>
                    </tr>
                <?php } ?>
        </tbody>
    </table>
</html>






<!-- // echo "<table border='1'>
//         <thead>
//             <tr>
//                 <th>No</th>
//                 <th>Nama Bidang</th>
//                 <th>Keterangan</th>
//                 <th>Luas Bidang</th>
//                 <th>Keliling Bidang</th>
//             </tr>
//         </thead>
//         <tbody>";

// foreach ($bidang as $key => $b) {
//     echo "<tr>
//             <td>" . ($key + 1) . "</td>
//             <td>" . $b->namaBidang() . "</td>
//             <td>" . $b->keteranganBidang() . "</td>
//             <td>" . $b->luasBidang() . "</td>
//             <td>" . $b->kelilingBidang() . "</td>
//           </tr>";
// }

// echo "</tbody></table>"; -->