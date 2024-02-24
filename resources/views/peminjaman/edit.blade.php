@extends("layout.main")
@section("konten")
<div class="content-wrapper">
    <section class="content-header">
        <h1>
            edit Data peminjaman
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form action="/editpeminjaman/{{$peminjaman->id}}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="UserID">UserID</label>
                        <input type="text" class="form-control" id="UserID" name="UserID" value="{{$peminjaman->UserID}}" required autofocus>
                    </div>
                    <div class="form-group">
                        <label for="BukuID">BukuID</label>
                        <input type="text" class="form-control" id="BukuID" name="BukuID" value="{{$peminjaman->BukuID}}" required>
                    </div>
                    <div class="form-group">
                        <label for="TanggalPeminjaman">Tanggal Peminjaman</label>
                        <input type="date" class="form-control" id="TanggalPeminjaman" name="TanggalPeminjaman" value="{{$peminjaman->TanggalPeminjaman}}" required>
                    </div>
                    <div class="form-group">
                        <label for="TanggalPengembalian">Tanggal Pengembalian</label>
                        <input type="date" class="form-control" id="TanggalPengembalian" name="TanggalPengembalian" value="{{$peminjaman->TanggalPengembalian}}" required>
                    </div>
                    <div class="form-group">
                        <label for="StatusPeminjaman">Status Peminjaman</label>
                        <input type="text" class="form-control" id="StatusPeminjaman" name="StatusPeminjaman" value="{{$peminjaman->StatusPeminjaman}}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection