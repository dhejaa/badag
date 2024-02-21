<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>ulasan buku</h1>
    <a href="{{route('ulasanbuku.create')}}">Tambah +</a>
    <table border="1 solid">
<tr>
    <th>No.</th>
    <th>UlasanID</th>
    <th>UserID</th>
    <th>BukuID</th>
    <th>Ulasan</th>
    <th>Rating</th>
</tr>
        @php
        $no = 1;
        @endphp
        @foreach($UlasanBuku as $item)
<tr>
    <td>{{ $no++ }}</td>
    <td>{{ $item->UlasanID }}</td>
    <td>{{ $item->UserID }}</td>
    <td>{{ $item->Ulasan }}</td>
    <td>{{ $item->Rating }}</td>
    <td>
        <a href="{{route('ulasanbuku.edit', $item->id)}}">Edit</a>
    </td>
</tr>
@endforeach

</body>
</html>