@extends('admin.layout')

@section('admin-content')
<!-- Main Content -->
<main class="admin-main">
    <h1 class="title">Dashboard Admin</h1>
    <h2 class="subtitle">Ringkasan Sistem Pengadilan</h2>

    <!-- Stats Cards -->
    <div class="columns is-multiline">
        <div class="column is-one-quarter">
            <div class="stat-card card has-background-primary has-text-white">
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-left">
                            <div class="level-item">
                                <div>
                                    <p class="heading">Total Perkara</p>
                                    <p class="title">1,024</p>
                                </div>
                            </div>
                        </div>
                        <div class="level-right">
                            <div class="level-item">
                                <span class="icon is-large">
                                    <i class="fas fa-gavel fa-2x"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column is-one-quarter">
            <div class="stat-card card has-background-info has-text-white">
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-left">
                            <div>
                                <p class="heading">Sidang Hari Ini</p>
                                <p class="title">12</p>
                            </div>
                        </div>
                        <div class="level-right">
                            <span class="icon is-large">
                                <i class="fas fa-calendar-day fa-2x"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column is-one-quarter">
            <div class="stat-card card has-background-success has-text-white">
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-left">
                            <div>
                                <p class="heading">Dokumen Baru</p>
                                <p class="title">24</p>
                            </div>
                        </div>
                        <div class="level-right">
                            <span class="icon is-large">
                                <i class="fas fa-file-upload fa-2x"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="column is-one-quarter">
            <div class="stat-card card has-background-warning has-text-white">
                <div class="card-content">
                    <div class="level is-mobile">
                        <div class="level-left">
                            <div>
                                <p class="heading">Perkara Tertunda</p>
                                <p class="title">8</p>
                            </div>
                        </div>
                        <div class="level-right">
                            <span class="icon is-large">
                                <i class="fas fa-exclamation-triangle fa-2x"></i>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recent Cases and Activities -->
    <div class="columns">
        <div class="column is-two-thirds">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Perkara Terbaru</p>
                    <button class="card-header-icon" aria-label="more options">
                        <span class="icon">
                            <i class="fas fa-angle-down" aria-hidden="true"></i>
                        </span>
                    </button>
                </header>
                <div class="card-content">
                    <div class="table-responsive">
                        <table class="table is-fullwidth is-striped">
                            <thead>
                                <tr>
                                    <th>No. Perkara</th>
                                    <th>Jenis</th>
                                    <th>Tanggal</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>456/Pdt.G/2023/PN.Jkt</td>
                                    <td>Perdata</td>
                                    <td>20 Feb 2023</td>
                                    <td><span class="tag is-success">Aktif</span></td>
                                    <td>
                                        <button class="button is-small is-info">Kelola</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>789/Pid.B/2023/PN.Jkt</td>
                                    <td>Pidana</td>
                                    <td>18 Feb 2023</td>
                                    <td><span class="tag is-warning">Berkas</span></td>
                                    <td>
                                        <button class="button is-small is-info">Kelola</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>123/Pdt.G/2023/PN.Jkt</td>
                                    <td>Perdata</td>
                                    <td>15 Feb 2023</td>
                                    <td><span class="tag is-primary">Sidang</span></td>
                                    <td>
                                        <button class="button is-small is-info">Kelola</button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <footer class="card-footer">
                    <a href="#" class="card-footer-item">Lihat Semua</a>
                </footer>
            </div>
        </div>

        <div class="column is-one-third">
            <div class="card">
                <header class="card-header">
                    <p class="card-header-title">Aktivitas Terkini</p>
                </header>
                <div class="card-content">
                    <div class="content">
                        <div class="media">
                            <div class="media-left">
                                <span class="icon has-text-info">
                                    <i class="fas fa-file-upload"></i>
                                </span>
                            </div>
                            <div class="media-content">
                                <p><strong>Dokumen Baru</strong> <small>10 menit lalu</small></p>
                                <p>Surat Gugatan untuk 123/Pdt.G/2023/PN.Jkt</p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <span class="icon has-text-success">
                                    <i class="fas fa-calendar-plus"></i>
                                </span>
                            </div>
                            <div class="media-content">
                                <p><strong>Jadwal Sidang</strong> <small>1 jam lalu</small></p>
                                <p>Sidang 789/Pid.B/2023 ditetapkan 25 Feb 2023</p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <span class="icon has-text-warning">
                                    <i class="fas fa-user-plus"></i>
                                </span>
                            </div>
                            <div class="media-content">
                                <p><strong>Pengguna Baru</strong> <small>2 jam lalu</small></p>
                                <p>Pengacara: Dr. Bambang Sutoyo, S.H., M.H.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@stop