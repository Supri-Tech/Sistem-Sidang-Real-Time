<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Dashboard - Sistem Pengadilan')</title>
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/fontawesome-free/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ asset('AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.all.min.css') }}">
</head>

<body class="hold-transition sidebar-mini">
    <div class="wrapper">
        <!-- Navigation Bar -->
        @include('components.admin.navbar')

        <!-- Sidebar -->
        @include('components.admin.sidebar')

        <!-- Content -->
        <div class="content-wrapper">
            @include('components.admin.content-header')
            @yield('admin-content')
        </div>

        <!-- Footer -->
        @include('components.admin.sidebar')
    </div>

    <script src="{{ asset('AdminLTE-3.2.0/plugins/sweetalert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('AdminLTE-3.2.0/dist/js/adminlte.min.js') }}"></script>
</body>

</html>
