@extends('layout')

@section('content')
<section class="hero is-fullheight gradient-bg">
    <div class="hero-body">
        <div class="container">
            <div class="columns is-vcentered is-multiline">
                <div class="column is-6 has-text-centered-touch">
                    <h1 class="title is-1">
                        Sistem Informasi {{ env('APP_NAME') }} Terpadu
                    </h1>
                    <h2 class="subtitle mt-5">
                        Akses informasi perkara, jadwal sidang, dan layanan hukum secara transparan dan efisien.
                    </h2>
                </div>
                <div class="column is-6">
                    <figure class="image is-fullwidth">
                        <img src="https://asset-2.tstatic.net/surabaya/foto/bank/images/gedung-pengadilan-negeri-surabaya.jpg"
                            alt="Gedung Pengadilan">
                    </figure>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section has-background-white">
    <div class="container">
        <div class="has-text-centered mb-6">
            <h2 class="title is-2">Cara Menggunakan Sistem</h2>
            <h3 class="subtitle is-5 mt-2">Akses layanan kami dalam beberapa langkah mudah</h3>
        </div>

        <div class="columns is-vcentered is-multiline">
            <div class="column is-6 has-text-centered-touch">
                <figure class="image is-fullwidth">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRNSlgO2pAPLZSppB3Zle1nfFnDomI-wO37SA&s"
                        alt="Proses pengadilan">
                </figure>
            </div>
            <div class="column is-6">
                <div class="steps">
                    <div class="step">
                        <h4 class="title is-4"><span class="tag is-primary is-medium">1</span> Registrasi Akun</h4>
                        <p>Daftarkan diri Anda sebagai pengguna sistem dengan mengisi formulir pendaftaran.</p>
                    </div>
                    <div class="step mt-5">
                        <h4 class="title is-4"><span class="tag is-primary is-medium">2</span> Verifikasi Identitas</h4>
                        <p>Lengkapi proses verifikasi dengan mengunggah dokumen identitas yang valid.</p>
                    </div>
                    <div class="step mt-5">
                        <h4 class="title is-4"><span class="tag is-primary is-medium">3</span> Akses Layanan</h4>
                        <p>Mulai gunakan berbagai layanan informasi pengadilan yang tersedia.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

