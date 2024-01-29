@php
$nama = "Akhmad";
$nilai = 60.49;
@endphp

@if ($nilai >= 57) @php $ket = "lulus"; @endphp
@else @php $ket = "Gagal"; @endphp
@endif

Siswa {{ $nama }} dengan nilai {{ $nilai }} dinyatakan {{ $ket }}