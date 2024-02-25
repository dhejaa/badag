@extends("layout.main")
@section("konten")
<div class="content-wrapper">
    <section class="content">
        <div class="box">
            <div class="box-header with-border">
                <h3 class="box-title">Daftar Buku</h3>
                <div class="box-tools pull-right">
                    <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm">Tambah Buku</a>
                    <a href="{{ route('buku.bukupdf') }}" class="btn btn-primary btn-sm">Unduh Data Buku</a>
                </div>
            </div>
            <div class="box-body">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No.</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @php $no = 1; @endphp
                        @foreach ($buku as $item)
                        <tr>
                            <td>{{ $no ++ }}</td>
                            <td>{{ $item->judul }}</td>
                            <td>{{ $item->penulis }}</td>
                            <td>{{ $item->penerbit }}</td>
                            <td>{{ $item->TahunTerbit }}</td>
                            <td>
                                <a class="btn btn-warning" href="{{route ('peminjam.create', $item->id)}}"><i
                                    class="fas fa-pencil-alt"></i></a>&nbsp; pinjam
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </section>
</div>
@endsection
