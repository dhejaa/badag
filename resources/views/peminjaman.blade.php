<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>peminjaman</h1>
    <a href="{{route('peminjaman.create')}}">Tambah +</a>
    <table border="1 solid">
        <tr>
            <th>No.</th>
            <th>UserID</th>
            <th>BukuID</th>
            <th>TanggalPeminjaman</th>
            <th>StatusPeminjaman</th>
        </tr>
@php
$no = 1;
@endphp
@foreach($Peminjaman as $item)
<tr>
    <td>{{ $no++ }}</td>
    <td>{{ $item->UserID }}</td>
    <td>{{ $item->BukuID }}</td>
    <td>{{ $item->TanggalPeminjaman }}</td>
    <td>{{ $item->StatusPeminjaman }}</td>
    <td>
        <a href="{{route('peminjaman.edit', $item->id)}}">Edit</a>
    </td>
</tr>
@endforeach

</body>
</html>