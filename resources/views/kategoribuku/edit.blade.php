@extends('layout.main')
@section('konten')
    
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Edit Data Buku
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form action="/edit/{{$kategoribuku->id}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="NamaKategori">Nama Kategori</label>
                        <input type="text" class="form-control" id="NamaKategori" name="NamaKategori" value="{{$kategoribuku->NamaKategori}}" required autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>


@endsection