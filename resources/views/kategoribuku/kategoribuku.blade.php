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
                        <h3 class="box-title">Daftar Kategori Buku</h3>
                        <div class="box-tools">
                            <a href="{{ route('kategoribuku.create') }}" class="btn btn-primary btn-sm">Tambah Kategori Buku</a>
                            <a href="{{ route('kategoribuku.kategoripdf') }}" class="btn btn-primary btn-sm">Unduh Kategori Buku</a>
                        </div>
                    </div><p>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>No.</th>
                                    <th>Nama Kategori</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php $no = 1; @endphp
                                @foreach ($kategoribuku as $item)
                                <tr>
                                    <td>{{ $no++ }}</td>
                                    <td>{{ $item->NamaKategori }}</td>
                                    <td>
                                        <a href="{{ route('kategoribuku.edit', $item->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('kategoribuku.destroy', $item->id) }}" method="POST" class="inline" onsubmit="return confirm('Apakah anda yakin ingin menghapus data ini?')">
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
