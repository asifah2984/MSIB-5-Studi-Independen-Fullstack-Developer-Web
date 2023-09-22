
<!-- Buatlah form data diri dengan element sebagai berikut:

- method form: POST
- input nama, name => nama
- seleksi pekerjaan (select option), name => pekerjaan
  option pekerjaan : pekerjaan1 s/d pekerjaan 10
- Hobby (radio button), name => hobby
   hobby1 s/d hobby10
- tombol simpan, name => simpan

Tugas:

1. Buat Form
2. Tampilkan Populasi Data di atas dalam bentuk tabel, jika tombol simpan sudah di klik
3. Tabel dicetak dalam bentuk kolom:
   | Nama | Pekerjaan | Hobby | -->

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tugas 2 Pemrograman PHP</title>
    </head>

    <body>
        <h1>Form Data Diri Seseorang</h1><br><hr>
        <form method="POST">

            <label for="">Nama Lengkap : </label>
            <input type="text" name="nama" placeholder="Masukan nama"><hr>

            <label for="">Jenis Pekerjaan : </label>
            <select name="pekerjaan" id="">
                <option value="">-----Pilihan Pekerjaan-----</option>
                <option value="Full-Stack (WEB) Developer">Full-Stack (WEB) Developer</option>
                <option value="Software Engineer">Software Engineer</option>
                <option value="Mobile Developer">Mobile Developer</option>
                <option value="UI/UX Designer">UI/UX Designer</option>
                <option value="Network Engineer">Network Engineer</option>
                <option value="IT Developer Engineer">IT Developer Engineer</option>
                <option value="Data Scientist">Data Scientist</option>
                <option value="Database Engineer">Database Engineer</option>
                <option value="Data Analyst">Data Analyst</option>
                <option value="AI/ML Engineer">AI/ML Engineer</option>
            </select><hr>
            
            <label>Jenis Hobby : </label>
            <input type="radio" name="hobby" value="Olahraga" />Olahraga
            <input type="radio" name="hobby" value="Berenang" />Berenang
            <input type="radio" name="hobby" value="Berkemah" />Berkemah
            <input type="radio" name="hobby" value="Bersepeda" />Bersepeda
            <input type="radio" name="hobby" value="Berkebun" />Berkebun
            <input type="radio" name="hobby" value="Menari" />Menari
            <input type="radio" name="hobby" value="Menyanyi" />Menyanyi
            <input type="radio" name="hobby" value="Memasak" />Memasak
            <input type="radio" name="hobby" value="Menulis" />Menulis
            <input type="radio" name="hobby" value="Mendaki" />Mendaki<hr>
            
            <button name="simpan" type="submit">Simpan</button><hr>

        </form>

<?php

$nama = $_POST['nama'];
$pekerjaan = $_POST['pekerjaan'];
$hobby = $_POST['hobby'];
$simpan = $_POST['simpan'];

if(isset($simpan)){
    
?>

<table border="3" style="padding: 10; text-align: center; width: 100%;">
    <thead>
        <tr>
            <th>Nama</th>
            <th>Pekerjaan</th>
            <th>Hobby</th>
        </tr>
    </thead>

    <tbody>
        <td><?= $nama ?></td>
        <td><?= $pekerjaan ?></td>
        <td><?= $hobby ?></td>
    </tbody>
</table>

<?php } ?>

    </body>
</html>