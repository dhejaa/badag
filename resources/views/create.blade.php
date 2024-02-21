<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Tambah Data Buku</h1>
    
    <form action="{{route('buku.store')}}" method="POST">
    @csrf
    <label for="judul">judul</label>
    <input type="text" name="judul" required>
    <br>
    <label for="penulis">penulis</label>
    <input type="text"  name="penulis" required>
    <br>
    <label for="penerbit">penerbit</label>
    <input type="text" name="penerbit" required>
    <br>
    <label for="TahunTerbit">tahun terbit</label>
    <input type="date" name="TahunTerbit" required>

    <button type="submit">submit</button>
    </form>
</body>
</html>