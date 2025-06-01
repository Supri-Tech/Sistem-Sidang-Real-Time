@extends('admin.layout')

@section('admin-header', 'Edit User')

@section('admin-content')
<!-- Main Content -->
<div class="container-fluid">
    <div class="mx-3 p-3 card">
        <form action="{{ route('admin.kelola-user.edit', $user->id) }}" method="post">
            @csrf

            <div class="form-group">
                <label for="Name">Name</label>
                <input type="text" name="name" value="{{ $user->name }}"
                    class="form-control @error('name') is-invalid @enderror" placeholder="Name" />
                @error('name')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="Email">Email</label>
                <input type="email" name="email" value="{{ $user->email }}"
                    class="form-control @error('email') is-invalid @enderror" placeholder="Email" />
                @error('email')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="Password">New Password</label>
                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror"
                    placeholder="Password" />
                @error('password')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group">
                <label for="Role">Role</label>
                <select class="form-control" name="role">
                    <option {{ $user->role ==='admin' ? 'selected' : '' }} value="admin">Admin</option>
                    <option {{ $user->role ==='jaksa' ? 'selected' : '' }} value="jaksa">Jaksa</option>
                </select>

                @error('role')
                <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="form-group d-flex justify-content-end">
                <button type="submit" class="btn btn-success">
                    <i class="fas fa-save"></i>
                    Simpan
                </button>
            </div>
        </form>
    </div>
</div>
@endsection
