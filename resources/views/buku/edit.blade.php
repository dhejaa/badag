{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Perpustakaan1</title>
</head>
<body>
    <h1>Edit Data buku</h1>

    <form action="/editbuku/{{$buku->id}}" method="post">
        @csrf
        <label for="judul">Judul</label>
        <input type="text" name="judul" id="judul" value="{{$buku->judul}}" required>
        <br>
        <label for="penulis">Penulis</label>
        <input type="text" name="penulis" id="penulis" value="{{$buku->penulis}}" required>
        <br>
        <br>
        <label for="penerbit">Penerbit</label>
        <input type="text" name="penerbit" id="penerbit" value="{{$buku->penerbit}}" required>
        <br>
        <label for="TahunTerbit">Tahun Terbit</label>
        <input type="date" name="TahunTerbit" id="TahunTerbit" value="{{$buku->TahunTerbit}}" required>
        
        <button type="submit">Submit</button>
    </form>
</body>
</html> --}}

@extends("layout.main")
@section("konten")
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah Data Buku
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form action="/editbuku/{{$buku->id}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="judul">Judul</label>
                        <input type="text" class="form-control" id="judul" name="judul" value="{{$buku->judul}}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" class="form-control" id="penulis" name="penulis" value="{{$buku->penulis}}" required>
                    </div>
                    <div class="form-group">
                        <label for="penerbit">Penerbit</label>
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="{{$buku->penerbit}}" required>
                    </div>
                    <div class="form-group">
                        <label for="TahunTerbit">Tahun Terbit</label>
                        <input type="date" class="form-control" id="TahunTerbit" name="TahunTerbit" value="{{$buku->TahunTerbit}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
