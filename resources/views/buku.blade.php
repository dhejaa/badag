<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>data buku</h1>
<a href="{{route('buku.create')}}">Tambah +</a>
    <table border="1 solid">
        <tr>
            <th>No.</th>
            <th>Judul</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>aksi</th>
        </tr>
       @php
           $no = 1;
       @endphp
        @foreach ($buku as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->judul }}</td>
                <td>{{ $item->penulis }}</td>
                <td>{{ $item->penerbit }}</td>
                <td>{{ $item->TahunTerbit }}</td>
                <td>
                    <a href="{{ route('buku.edit', $item->id) }}">Edit</a>
                        <form action="{{ route('buku.destroy', $item->id) }}" method="get" class="inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                        @csrf
                        @method('post')
                        <button type="submit">Hapus</button>
                        </form>
                    </div>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>
