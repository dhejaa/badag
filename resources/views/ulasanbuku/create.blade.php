@extends('layout.main')
@section('konten')

<div class="content-wrapper">
    <section class="content-header">
        <h1>
            Tambah Data Ulasan Buku
        </h1>
    </section>
    <section class="content">
        <div class="box">
            <div class="box-body">
                <form action="{{ route('ulasanbuku.store') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="UserID">UserID</label>
                        <input type="number" class="form-control" id="UserID" name="UserID" required>
                    </div>
                    <div class="form-group">
                        <label for="BukuID">BukuID</label>
                        <input type="number" class="form-control" id="BukuID" name="BukuID" required>
                    </div>
                    <div class="form-group">
                        <label for="Ulasan">Ulasan</label>
                        <input type="text" class="form-control" id="Ulasan" name="Ulasan" required>
                    </div>
                    <div class="form-group">
                        <label for="Rating">Rating</label>
                        <input type="number" class="form-control" id="Rating" name="Rating" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </section>
</div>
@endsection