<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>kategoribuku</h1>
<a href="{{route('kategoribuku.create')}}">Tambah +</a>
    <table border="1 solid">
    <tr>
        <th>No.</th>
        <th>Namakategori</th>
    </tr>
    @php
        $no = 1;
    @endphp
    @foreach ($kategoribuku as $item)
    <tr>
        <td>{{ $no++ }}</td>
        <td>{{ $item->namakategori }}</td>
        <td>
            <a href="{{route('kategoribuku.edit', $item->id)}}">Edit</a>
        </td>
        </tr>
    @endforeach
    </table>
</body>
</html>