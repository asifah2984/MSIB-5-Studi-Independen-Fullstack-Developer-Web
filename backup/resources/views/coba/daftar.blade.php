@php

$no = 1;

$s1 = ['nama' => 'Ari', 'nilai' => 85];
$s2 = ['nama' => 'Abi', 'nilai' => 95];
$s3 = ['nama' => 'Adi', 'nilai' => 75];
$s4 = ['nama' => 'Ali', 'nilai' => 55];
$s5 = ['nama' => 'Aji', 'nilai' => 65];

$judul = ['No', 'Nama', 'Nilai', 'keterangan'];

$siswa = [$s1, $s2, $s3, $s4, $s5];

@endphp

<table border="1" align="center" cellpadding="10">
    <thead>
        <tr>
            @foreach($judul as $jd1)
            <th>{{ $jd1 }}</th>
            @endforeach
        </tr>
    </thead>
    <tbody>
        <tr>
            @foreach($siswa as $s)
            @php
            $ket = ($s['nilai'] >= 60) ? 'Lulus' : 'Gagal';
            @endphp
            <td>{{ $no++ }}</td>
            <td>{{ $s['nama'] }}</td>
            <td>{{ $s['nilai'] }}</td>
            <td>{{ $ket }}</td>
        </tr>
        @endforeach
    </tbody>
</table>