@extends('admin.layout')

@section('admin-header', 'Detail Sidang')

@section('admin-content')
<!-- Main Content -->
<div class="container-fluid">
    <div class="mx-3 p-3 card">
        <div class="card-body">
            <h5>No Perkara: {{ $sidang->perkara->no_perkara }}</h5>

            <h6>Detail Perkara</h6>
            <p>Jenis Perkara: {{ $sidang->perkara->jenis_perkara }}</p>
            <p>Terdakwa: {{ $sidang->perkara->terdakwa }}</p>
            <p>Korban: {{ $sidang->perkara->korban }}</p>
            <p>Status Perkara: {{ $sidang->perkara->status_perkara }}</p>

            <h6>Detail Hakim</h6>
            <p>Hakim Ketua: {{ $sidang->hakim->hakim_ketua }}</p>
            <p>Hakim Anggota 1: {{ $sidang->hakim->hakim_anggota_1 }}</p>
            <p>Hakim Anggota 2: {{ $sidang->hakim->hakim_anggota_2 }}</p>
            <p>Panitera Pengganti: {{ $sidang->hakim->panitera_pengganti }}</p>

            <h6>Detail Putusan</h6>
            @forelse ($sidang->putusan as $putusan)
            <p>
                Isi Putusan:
                <br />
                {{ $putusan->isi_sidang }}
            </p>
            @empty
            @endforelse
        </div>
    </div>
</div>
@endsection
