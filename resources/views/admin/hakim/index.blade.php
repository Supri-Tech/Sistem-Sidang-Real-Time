@extends('admin.layout')

@section('admin-header', 'Kelola Hakim')

@section('admin-content')
<!-- Main Content -->
<div class="container-fluid">
    <div class="mx-3 p-3 card">
        <div class="card-header">
            <button class="btn btn-primary">
                <i class="fas fa-plus mr-1"></i>
                Tambah
            </button>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="20px">#</th>
                        <th>Hakim Ketua</th>
                        <th>Hakim Anggota 1</th>
                        <th>Hakim Anggota 2</th>
                        <th>Panitera Pengganti</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($hakim as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->hakim_ketua }}</td>
                        <td>{{ $item->hakim_anggota_1 }}</td>
                        <td>{{ $item->hakim_anggota_2 }}</td>
                        <td>{{ $item->panitera_pengganti }}</td>
                        <td>
                            <div>
                                <button class="btn btn-warning">
                                    <i class="fas fa-pencil-alt text-white"></i>
                                </button>
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash text-white"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">Data kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
            <div class="d-flex justify-content-center mt-3">
                {{ $hakim->links() }}
            </div>
        </div>
    </div>
</div>
@endsection
