@extends('layout.main')
@section('konten')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Ulasan Buku</h3>
                        <div class="box-tools">
                            <a href="{{ route('ulasanbuku.create') }}" class="btn btn-primary btn-sm">Tambah Ulasan</a>
                            <a href="{{ route('ulasanbuku.ulasanbukupdf') }}" class="btn btn-primary btn-sm">Unduh Data ulasanbuku</a>
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
                                    <th>Ulasan</th>
                                    <th>Rating</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach($UlasanBuku as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->UserID }}</td>
                                    <td>{{ $item->BukuID }}</td>
                                    <td>{{ $item->Ulasan }}</td>
                                    <td>{{ $item->Rating }}</td>
                                    <td>
                                        <a href="{{ route('ulasanbuku.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('ulasanbuku.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
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
