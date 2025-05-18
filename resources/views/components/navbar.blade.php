<nav class="navbar is-transparent is-fixed-top" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
        <p class="navbar-item has-text-weight-bold">
            Jadwal Sidang Pengadilan Negeri Surabaya
        </p>

        <a role="button" class="navbar-burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
        </a>
    </div>

    <div id="navbarBasicExample" class="navbar-menu">
        <div class="navbar-start">

        </div>

        <div class="navbar-end">
            <a class="navbar-item">
                Beranda
            </a>

            <a class="navbar-item">
                Jadwal Sidang
            </a>

            <div class="navbar-item">
                <div class="buttons">
                    <a href="{{ route('get.login') }}" class="button is-light">
                        Log in
                    </a>
                </div>
            </div>
        </div>
    </div>
</nav>