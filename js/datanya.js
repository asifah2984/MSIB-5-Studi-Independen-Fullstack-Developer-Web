
// Tugas JavaScript

// ==================

// Buatlah form Toko Online untuk pelanggan yg ingin membeli produk dengan element form:
// 1. Inputan nama pelanggan (name = nama )
// 2. Select Option Produk, gunakan struktur kendali switch case untuk menentukan harga produk:
//    TV 2jt, AC 3jt, Kulkas 4jt (name = produk) gunakan looping for u/ data produk
// 3. Inputan banyak item  produk dibeli (name = jumlah)
// 4. Tombol Beli (name = proses)

// Tampilkan Populasi Data Berbentuk alert JavaScript
// dengan mengasosiasikan fungsi (nama fungsi transaksi ) dan event handler onclick:

// masukan semua source code ke github dan Copy link ke LMS

// document.getElementById('hasil').innerHTML = data;

function produk(){
    var produk = document.getElementById("produk");
    var array = ["TV","AC","Kulkas"];
    var selectList = document.createElement("select");
    selectList.setAttribute("name", "mySelect");
    produk.appendChild(selectList);
    for (var i = 0; i < array.length; i++) {
        var option = document.createElement("option");
        option.setAttribute("value", array[i]);
        option.text = array[i];
        selectList.appendChild(option);
    }
    
}

// var produk = document.getElementById("produk");
 
// //Membuat nama paket kursus untuk di masukan kedalam pilihan menggunakan array
// var array = ["TV","AC","Kulkas"];
 
// //Membuat daftar pilih
// var selectList = document.createElement("select");
// selectList.setAttribute("id", "mySelect");
// produk.appendChild(selectList);
 
// //Membuat daftar paket kursus yang akan di pilih menggunakan perulangan for,
// //perulangan for di gunakan untuk mengulang nilai array yang telah kita masukan di atas
// for (var i = 0; i < array.length; i++) {
//     var option = document.createElement("option");
//     option.setAttribute("value", array[i]);
//     option.text = array[i];
//     selectList.appendChild(option);
// }


function proses(){
    let forms = document.getElementById('data');
    let nama = forms.nama.value;
    let produk = forms.produk.value;
    let jumlah = forms.jumlah.value;

    switch(produk){
        case "TV" : harga = 2000000; break;
        case "AC" : harga = 3000000; break;
        case "Kulkas" : harga = 4000000; break;
        default : harga = 0; break;
    }

// 5. Harga Kotor = Harga Satuan dikali Jumlah item produk yg dibeli    -----
    let hargakotor = harga * jumlah;

// 6. Diskon dengan multiple IF dengan ketentuan:
// - Jika beli Kulkas minimal 3 buah, diskon 30% dari Harga Kotor
// - Jika beli AC minimal 3 buah, diskon 20% dari Harga Kotor
// - Selain itu semua pelanggan dapat diskon 10% dari Harga Kotor
    if(jumlah > 3, produk == "Kulkas") diskon = 0.3 * hargakotor;
    else if (jumlah > 3, produk == "AC") diskon = 0.2 * hargakotor;
    else diskon = 0.1 * hargakotor;

// 7. Pajak Pertambahan Nilai (PPN) ditanggung pembeli , 10% dari Harga Kotor - Diskon
    let ppn = diskon - (0.1 * hargakotor);

// 8. Harga Bayar = (Harga Kotor - Diskon) + PPN
    let hargabayar = (hargakotor - diskon) + ppn;

// 1. Nama Pelanggan    -----
// 2. Produk yg dibeli  -----
// 3. Harga Satuan  -----
// 4. Jumlah Item Produk yg dibeli  -----
    let data = `
                <br> Nama : ${nama}
                <br> Nama produknya : ${produk}
                <br> jumlah satuan harga : ${harga}
                <br> jumlah produknya : ${jumlah}
                <br> Harga Kotor : ${hargakotor}
                <br> Harga Diskon : ${diskon}
                <br> Pajak Pertambahan Nilai (PPN) : ${ppn}
                <br> Harga Total : ${hargabayar}
                `;

    document.getElementById('hasil').innerHTML = data;
    // alert.document.getElementById('hasil').innerHTML = data;
}