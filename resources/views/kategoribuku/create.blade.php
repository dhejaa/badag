@extends("layout.main")
@section("konten")
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah Data Kategori Buku
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ route('kategoribuku.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="NamaKategori">Kategori Buku</label>
                        <input type="text" class="form-control" id="NamaKategori" name="NamaKategori" required autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection
