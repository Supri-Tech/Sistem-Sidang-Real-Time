@extends('admin.layout')

@section('admin-header', 'Kelola Sidang')

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
                        <th>ID Perkara</th>
                        <th>Jenis Perkara</th>
                        <th>Terdakwa</th>
                        <th>Korban</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($sidang as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>
                            <a href="{{ route('admin.kelola-sidang.show', $item->id) }}">
                                {{ $item->perkara->no_perkara }}
                            </a>
                        </td>
                        <td>{{ $item->perkara->jenis_perkara }}</td>
                        <td>{{ $item->perkara->terdakwa }}</td>
                        <td>{{ $item->perkara->korban }}</td>
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
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
