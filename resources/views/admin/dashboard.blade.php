@extends('admin.base')

@section('content')
    <div class="dashboard">

        <div class="dashboard-panel">
            <div class="dashboard-card">
                <p>Total Pendaftar</p>
                <p>{{ $totalsiswa }}</p>
            </div>

            <div class="dashboard-card">
                <p>Total Pendaftar yang diterima</p>
                <p>{{ $totalsiswaditerima }}</p>
            </div>

            <div class="dashboard-card">
                <p>Pendaftar Laki-laki yang diterima</p>
                <p>{{ $totalsiswalaki }}</p>
            </div>

            <div class="dashboard-card">
                <p>Pendaftar Perempuan yang diterima</p>
                <p>{{ $totalsiswaperempuan }}</p>
            </div>
        </div>

    </div>


    <div class="ds">
        <img src="{{ asset('images/local/logo.png') }}" class="dashboard-logo" />
        <h1>Aplikasi Penerimaan Siswa Baru</h1>
        <h1>MTs Negeri 3 Sragen</h1>
    </div>
@endsection
