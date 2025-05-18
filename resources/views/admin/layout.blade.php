<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Sistem Pengadilan</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --sidebar-width: 250px;
            --navbar-height: 3.25rem;
        }

        body {
            display: flex;
            min-height: 100vh;
            flex-direction: column;
        }

        .admin-container {
            display: flex;
            flex: 1;
            margin-top: var(--navbar-height);
        }

        .admin-sidebar {
            width: var(--sidebar-width);
            background: #2f3e4e;
            color: white;
            transition: transform 0.3s ease;
        }

        .admin-main {
            flex: 1;
            overflow-y: auto;
            padding: 1.5rem;
            background: #f5f7fa;
        }

        .sidebar-menu {
            padding: 1rem 0;
        }

        .sidebar-item {
            padding: 0.75rem 1.5rem;
            color: #cbd5e0;
            display: block;
            transition: all 0.2s;
        }

        .sidebar-item:hover,
        .sidebar-item.is-active {
            background: rgba(255, 255, 255, 0.1);
            color: white;
            border-left: 3px solid #4299e1;
        }

        .sidebar-item .icon {
            margin-right: 10px;
        }

        .stat-card {
            transition: all 0.3s;
            border-radius: 8px;
        }

        .stat-card:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1);
        }

        .table-responsive {
            overflow-x: auto;
        }

        @media screen and (max-width: 1023px) {
            .admin-sidebar {
                position: fixed;
                left: -100%;
                height: calc(100vh - var(--navbar-height));
                z-index: 100;
            }

            .admin-sidebar.is-active {
                left: 0;
            }
        }
    </style>
</head>

<body>
    <!-- Top Navigation Bar -->
    <nav class="navbar is-fixed-top is-dark">
        <div class="navbar-brand">
            <a class="navbar-item" href="#">
                <strong>Sistem Pengadilan</strong>
            </a>
            <a role="button" class="navbar-burger" id="navbarBurger" aria-label="menu" aria-expanded="false">
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
                <span aria-hidden="true"></span>
            </a>
        </div>
    </nav>

    <!-- Admin Container -->
    <div class="admin-container">
        <!-- Sidebar -->
        <aside class="admin-sidebar" id="adminSidebar">
            <?php
            $items = [
                ['icon' => 'fas fa-tachometer-alt', 'label' => 'Dashboard', 'link' => '#'],
                ['icon' => 'fas fa-calendar-alt', 'label' => 'Jadwal Sidang', 'link' => '#'],
                ['icon' => 'fas fa-balance-scale', 'label' => 'Perkara', 'link' => '#'],
                ['icon' => 'fas fa-users', 'label' => 'Hakim', 'link' => '#'],
                ['icon' => 'fas fa-cog', 'label' => 'Logout', 'link' => '#'],
            ];
            ?>
            <div class="sidebar-menu">
                <?php foreach ($items as $item): ?>
                    <a href="{{ $item['link'] }}" class="sidebar-item">
                        <span class="icon"><i class="{{ $item['icon'] }}"></i></span>
                        <span>{{ $item['label'] }}</span>
                    </a>
                <?php endforeach; ?>
            </div>
        </aside>

        @yield('admin-content')
    </div>

    <script>
        const navbarBurger = document.getElementById('navbarBurger');
        const sidebar = document.getElementById('adminSidebar');

        navbarBurger.addEventListener('click', () => {
            navbarBurger.classList.toggle('is-active');
            sidebar.classList.toggle('is-active');
        });
    </script>
</body>

</html>