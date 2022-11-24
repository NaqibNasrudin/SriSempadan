@extends('layout')
<link rel="stylesheet" href="{{ asset('css/aktiviti.css') }}">


@section('content')
<body class="aktiviti-body">
    <section id="timeline">

        <div class="tl-item">

          <div class="tl-bg" style="background-image: url({{asset('img/gotongroyong.jpg')}})"></div>

          <div class="tl-year">
            <p class="f2 heading--sanSerif">Kemasyarakatan</p>
          </div>

          <div class="tl-content">

            <p>Aktiviti-aktiviti masyarakat Seri Sempadan yang bertujuan mengeratkan talian persaudaraan yang sedia terjalin</p>
            <a href="/aktiviti/kemasyarakatan">
                <button class="button-57" role="button">
                    <span class="text">Maklumat Lanjut</span>
                    <span><i class="fa fa-angle-double-right fa-2x" aria-hidden="true" ></i></span>
                </button>
            </a>
          </div>

        </div>
        <div class="tl-item">

          <div class="tl-bg" style="background-image: url({{asset('img/baraan.jpg')}})"></div>

          <div class="tl-year">
            <p class="f2 heading--sanSerif">Keagamaan & Bina Insan</p>
          </div>

          <div class="tl-content">
            <p>Aktiviti keagamaan dan bina insan bertujuan menguatkan lagi jati diri masyarakat Seri Sempadan</p>
            <a href="/aktiviti/keagamaan"><span>
                <button class="button-57" role="button">
                    <span class="text">Maklumat Lanjut</span>
                    <i class="fa fa-angle-double-right fa-2x" aria-hidden="true" ></i></span>
                </button>
            </a>
          </div>

        </div>

        <div class="tl-item">

          <div class="tl-bg" style="background-image: url({{asset('img/bola1.jpg')}})"></div>

          <div class="tl-year">
            <p class="f2 heading--sanSerif">Riadah</p>
          </div>

          <div class="tl-content">
            <a href="/aktiviti/riadah"><span>
                <button class="button-57" role="button">
                    <span class="text">Maklumat Lanjut</span>
                    <i class="fa fa-angle-double-right fa-2x" aria-hidden="true" ></i></span>
                </button>
            </a>
          </div>

        </div>

        <div class="tl-item">

          <div class="tl-bg" style="background-image: url({{asset('img/kedai_runcit.jpg')}})"></div>

          <div class="tl-year">
            <p class="f2 heading--sanSerif">Ekonomi</p>
          </div>

          <div class="tl-content">
                <p>Aktiviti aktiviti yang menjadi sumber pendapatan masyarakat Seri Sempadan</p>
                <a href="/aktiviti/ekonomi">
                    <button class="button-57" role="button">
                        <span class="text">Maklumat Lanjut</span>
                        <span><i class="fa fa-angle-double-right fa-2x" aria-hidden="true" ></i></span>
                    </button>
                </a>
          </div>

        </div>
        <div class="tl-item">

            <div class="tl-bg" style="background-image: url({{asset('img/prasarana_bg.jpg')}})"></div>

            <div class="tl-year">
              <p class="f2 heading--sanSerif">Prasarana</p>
            </div>

            <div class="tl-content">
                <p>Kemudahan-kemudahan yang disediakan di Kampung Seri Sempadan</p>
                <a href="/aktiviti/prasarana">
                    <button class="button-57" role="button">
                        <span class="text">Maklumat Lanjut</span>
                        <span><i class="fa fa-angle-double-right fa-2x" aria-hidden="true" ></i></span>

                    </button>
                </a>
            </div>

          </div>
      </section>
</body>
@endsection
