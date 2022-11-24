@extends('layout')
<link href="http://fonts.cdnfonts.com/css/ostrich-sans-2" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('css/welcome.css') }}">
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Barlow+Semi+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">

@section('content')
<body class='welcome-body' id="welcome-body">
        <div class="title">
            <div class="text">
                <h2 class="welcome">Selamat Datang Ke</h2>
                <h1 class="name">Kampung Seri Sempadan</h1>
                <p class="motto-title">"Unggul dan Sepakat Membawa Harmoni"</p>
                <div class="container2">
                    <a href="#c1" class="btn">
                    <svg width="277" height="62">
                      <defs>
                          <linearGradient id="grad1">
                              <stop offset="0%" stop-color="#FF8282"/>
                              <stop offset="100%" stop-color="#E178ED" />
                          </linearGradient>
                      </defs>
                       <rect x="5" y="5" rx="25" fill="none" stroke="url(#grad1)" width="266" height="50"></rect>
                    </svg>
                    <!--<span>Voir mes réalisations</span>-->
                      <span>Klik Di Sini</span>
                  </a>
                </div>
            </div>
            <p class="dev">Develop by <a href="/dev">Naqib Nasrudin</a></p>
        </div>

        {{-- <div class="content" id="c1">
            <h2 class="motto">Motto</h2>
            <p class="child-text">"Unggul dan Sepakat Membawa Harmoni"</p>
            <div class="child">

                <img class="card" src="{{asset('img/UNGGUL.png')}}" alt="">
                <div class="hidden">
                    <p class="motto-text">Masyarakat yang unggul dapat meningkatkan potensi diri dan membangunkan ekonomi</p>
                </div>
                <img class="card" src="{{asset('img/SEPAKAT.png')}}" alt="">
                <div class="hidden2">
                    <p class="motto-text">Masyarakat yang mengamalkan kebersamaan dengan sentiasa memegang pepatah 'berat sama dipikul, ringan sama dijinjing</p>
                </div>
                <img class="card" src="{{asset('img/HARMONI.png')}}" alt="">
                <div class="hidden3">
                    <p class="motto-text">Mewujudkan rasa aman dan nyaman</p>
                </div>
            </div>
            <div class="halfbg"></div>
        </div> --}}

        <div class="content" id="c1">
            <div class="motto">
                <h2 class="motto-header">MOTTO</h2>
            </div>
            <div class="moto-text">
                <p class="motto-quote">"Unggul dan Sepakat Membawa Harmoni"</p>
            </div>
            <div class="explain">
                <div class="unggul">
                    <img src="{{asset('img/UNGGUL.png')}}" alt="">
                    <p class="explain-text">Masyarakat yang unggul dapat meningkatkan potensi diri dan membangunkan ekonomi</p>
                </div>
                <div class="sepakat">
                    <p class="explain-text">Masyarakat yang mengamalkan kebersamaan dengan sentiasa memegang pepatah 'berat sama dipikul, ringan sama dijinjing</p>
                    <img class="card" src="{{asset('img/SEPAKAT.png')}}" alt="">
                </div>
                <div class="harmoni">
                    <img src="{{asset('img/HARMONI.png')}}" alt="">
                    <p class="explain-text">Mewujudkan rasa aman dan nyaman</p>
                </div>
            </div>
        </div>

        <div class="visimisi" id="visimisi">
            <div class="visimisi-text">
                <p class="visimisi-title">Target kami</p>
                <h2 class="visi-title">VISI</h2>
                <p class="visi-text">MASYARAKAT CEMERLANG KAMPUNG SEJAHTERA NEGARA GEMILANG</p>
                <p class="visimisi-title">Who are we, What we do</p>
                <h2 class="misi-title">MISI</h2>
                <p class="misi-text">MEWUJUDKAN MASYARAKAT YANG CEMERLANG DAN KAMPUNG SEAJAHTERA, SELAMAT, HARMONI DAN BERDAYA SAING.</p>
            </div>
        </div>
</body>

<script>
    var slideUp = {
        distance: '150%',
        origin: 'bottom',
        opacity: null
    };
    var slideRight = {
        distance:'1000%',
        origin: 'left',
        opacity: null,
        delay:'100'
    }
    ScrollReveal().reveal('.motto', { delay: 500 });
    ScrollReveal().reveal('.motto-quote', { delay: 600 });
    ScrollReveal().reveal('.unggul', slideUp);
    ScrollReveal().reveal('.sepakat', slideUp);
    ScrollReveal().reveal('.harmoni', slideUp);
    ScrollReveal().reveal('.visimisi-title,.visi-title,.visi-text,.misi-title,.misi-text', slideRight);
    ScrollReveal().reveal('.text', out);

</script>
@endsection
