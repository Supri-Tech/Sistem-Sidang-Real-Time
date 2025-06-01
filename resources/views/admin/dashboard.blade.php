@extends('admin.layout')

@section('admin-header', 'Dashboard')

@section('admin-content')
<!-- Main Content -->
<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1">
                        <i class="fas fa-user-graduate"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Hakim
                        </span>

                        <span class="info-box-number">
                            {{ $hakim }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-warning elevation-1">
                        <i class="fas fa-gavel text-white"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Sidang
                        </span>

                        <span class="info-box-number">
                            {{ $sidang }}
                        </span>
                    </div>
                </div>
            </div>

            <div class="col-12 col-sm-6 col-md-4">
                <div class="info-box">
                    <span class="info-box-icon bg-info elevation-1">
                        <i class="fas fa-users"></i>
                    </span>
                    <div class="info-box-content">
                        <span class="info-box-text">
                            Users
                        </span>

                        <span class="info-box-number">
                            {{ $user }}
                        </span>
                    </div>
                </div>
            </div>
        </div>

        <div class="card p-3">
            <h3>Data Sidang Terbaru</h3>
        </div>

        <div class="card p-3">
            <h3>Data User</h3>
        </div>
    </div>
</div>
@endsection
