<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Buku PDF</title>
</head>
<body>
    <center>
        <h2>Data Buku Perpustakaan</h2>
        <h5>by Dheza Zahwa Kuswara</h5>
    </center>
    <table border="1" style="width: 100%">
        <thead>
            <tr>
                <th>No.</th>
                <th>User ID</th>
                <th>Buku ID</th>
                <th>Tanggal Peminjaman</th>
                <th>Tanggal Pengembalian</th>
                <th>Status Peminjaman</th>
            </tr>
        </thead>
        <tbody>
            @php $no = 1; @endphp
            @foreach($peminjaman as $item)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $item->UserID }}</td>
                <td>{{ $item->BukuID }}</td>
                <td>{{ $item->TanggalPeminjaman }}</td>
                <td>{{ $item->TanggalPengembalian}}</td>
                <td>{{ $item->StatusPeminjaman }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>