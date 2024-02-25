@extends('layout.main')
@section('konten')
<div class="content-wrapper">

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Peminjaman</h3>
                        <div class="box-tools">
                            <a href="{{ route('peminjaman.create') }}" class="btn btn-primary btn-sm">Tambah Peminjaman</a>
                            <a href="{{ route('peminjaman.peminjamanpdf') }}" class="btn btn-primary btn-sm">Unduh Data peminjaman</a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>User ID</th>
                                    <th>Buku ID</th>
                                    <th>Tanggal Peminjaman</th>
                                    <th>Tanggal Pengembalian</th>
                                    <th>Status Peminjaman</th>
                                    <th>Aksi</th>
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
                                    <td>
                                        <a href="{{ route('peminjaman.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('peminjaman.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
                                            @csrf
                                            {{-- @method('delete') --}}
                                            <button type="submit" class="btn btn-danger btn-xs">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
@endsection
