@extends("layout.main")
@section("konten")
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            edit Data Ulasan Buku
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form action="/editulasanbuku/{{$UlasanBuku->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="UserID">UserID</label>
                        <input type="number" class="form-control" id="UserID" name="UserID" value="{{$UlasanBuku->UserID}}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="BukuID">BukuID</label>
                        <input type="number" class="form-control" id="BukuID" name="BukuID" value="{{$UlasanBuku->BukuID}}" required>
                    </div>
                    <div class="form-group">
                        <label for="Ulasan">Ulasan</label>
                        <input type="text" class="form-control" id="Ulasan" name="Ulasan" value="{{$UlasanBuku->Ulasan}}" required>
                    </div>
                    <div class="form-group">
                        <label for="Rating">Rating</label>
                        <input type="number" class="form-control" id="Rating" name="Rating" value="{{$UlasanBuku->Rating}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection