@extends('layout')
<link rel="stylesheet" href="{{ asset('css/carta.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap" rel="stylesheet">
@section('content')
<body class="carta-body">
    {{-- <div class="ketua-kg">
        <div class="card">
            <div class="img-card">
                <h2>Ketua Kampung Seri Sempadan</h2>
                <img src="{{asset('img/Akim_nobg.png')}}" alt="Ketua Kampung">
            </div>
            <div class="bio">
                <p class="title">Nama</p>
                <p class="detail">MD Hakim bin Misdan</p>

                <p class="title">Alamat</p>
                <p class="detail">NO 3, Kampung Parit Kelantan Ayer Hitam Batu 18 1/2. Muar, Johor</p>

                <p class="title">Tarikh Lahir</p>
                <p class="detail">28 Mei 1973</p>

                <p class="title">Nombor Telefon</p>
                <p class="detail">017 7876494</p>

                <p class="title">Tahun Berkhidmat</p>
                <p class="detail">2021 - Kini</p>

                <p class="title">Harapan</p>
                <p class="detail">Menjadikan masyarakat Kampung Seri Sempadan sentiasa bersatupadu berlandaskan agama Islam,
                    memajukan ekonomi setempat secara sihat serta merealisasikan matlamat kampung UNGGUL SEPAKAT MEMBAWA HARMONI</p>
            </div>
        </div>
    </div> --}}

    <div class="ketuakg">
        <div class="ketuakg-img">
            <img src="{{asset('img/akim_nobg.png')}}" alt="">
        </div>
        <div class="bio">
            <h2>MAKLUMAT DIRI</h2>
            <p class="title">Nama</p>
            <p class="detail">MD Hakim bin Misdan</p>

            <p class="title">Jawatan</p>
            <p class="detail">Ketua Kampung</p>

            <p class="title">Alamat</p>
            <p class="detail">NO 3, Kampung Parit Kelantan Ayer Hitam Batu 18 1/2. Muar, Johor</p>

            <p class="title">Tarikh Lahir</p>
            <p class="detail">28 Mei 1973</p>

            <p class="title">Nombor Telefon</p>
            <p class="detail">017 7876494</p>

            <p class="title">Tahun Berkhidmat</p>
            <p class="detail">2021 - Kini</p>

            <p class="title">Harapan</p>
            <p class="detail">Menjadikan masyarakat Kampung Seri Sempadan sentiasa bersatupadu berlandaskan agama Islam,
                memajukan ekonomi setempat secara sihat serta merealisasikan matlamat kampung UNGGUL SEPAKAT MEMBAWA HARMONI</p>
        </div>
    </div>
    </div>
    <br><br>
    <div class="carta">
        <h3>Carta Organisasi Kampung Seri Sempadan</h3>
        <img class="carta-img" src="{{asset('img/carta_org.jpeg')}}" alt="" class="carta-img">
    </div>
</body>

@endsection
