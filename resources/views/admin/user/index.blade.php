@extends('admin.layout')

@section('admin-header', 'Kelola Users')

@section('admin-content')
<!-- Main Content -->
<div class="container-fluid">
    <div class="mx-3 p-3 card">
        <div class="card-header">
            <a href="{{ route('admin.kelola-user.create') }}" class="btn btn-primary">
                <i class="fas fa-plus mr-1"></i>
                Tambah
            </a>
        </div>
        <div class="card-body">
            @if (session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Berhasil!',
                    text: "{{ session('success') }}",
                    timer: 2000,
                    showConfirmButton: false
                })
            </script>
            @endif

            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th width="20px">#</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($users as $item)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role }}</td>
                        <td>
                            <div>
                                <a href="{{ route('admin.kelola-user.update', $item->id) }}" class="btn btn-warning">
                                    <i class="fas fa-pencil-alt text-white"></i>
                                </a>
                                <button class="btn btn-danger">
                                    <i class="fas fa-trash text-white"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5">Data kosong</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
