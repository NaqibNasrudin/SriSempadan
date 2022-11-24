@extends('layout')
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400&display=swap" rel="stylesheet">
<link rel="stylesheet" href="{{asset('css/gallery.css')}}">
@section('content')
<body>
<!-- Header -->
    <div class="header">
        <h1>Galeri</h1>
        <p>Galeri penduduk Kampung Seri Sempadan</p>
    </div>

    <!-- Photo Grid -->
    <div class="row">
        <div class="column">
            <img src="{{asset('img/bakery.jpg')}}" style="width:100%">
            <img src="{{asset('img/baraan2.jpg')}}" style="width:100%">
            <img src="/w3images/falls2.jpg" style="width:100%">
            <img src="/w3images/paris.jpg" style="width:100%">
            <img src="/w3images/nature.jpg" style="width:100%">
            <img src="/w3images/mist.jpg" style="width:100%">
            <img src="/w3images/paris.jpg" style="width:100%">
        </div>
        <div class="column">
            <img src="{{asset('img/bola1.jpg')}}" style="width:100%">
            <img src="/w3images/ocean.jpg" style="width:100%">
            <img src="/w3images/wedding.jpg" style="width:100%">
            <img src="/w3images/mountainskies.jpg" style="width:100%">
            <img src="/w3images/rocks.jpg" style="width:100%">
            <img src="/w3images/underwater.jpg" style="width:100%">
        </div>
        <div class="column">
            <img src="{{asset('img/kompang.jpg')}}" style="width:100%">
            <img src="/w3images/rocks.jpg" style="width:100%">
            <img src="/w3images/falls2.jpg" style="width:100%">
            <img src="/w3images/paris.jpg" style="width:100%">
            <img src="/w3images/nature.jpg" style="width:100%">
            <img src="/w3images/mist.jpg" style="width:100%">
            <img src="/w3images/paris.jpg" style="width:100%">
        </div>
        <div class="column">
            <img src="{{asset('img/yasinan.jpg')}}" style="width:100%">
            <img src="/w3images/rocks.jpg" style="width:100%">
            <img src="/w3images/falls2.jpg" style="width:100%">
            <img src="/w3images/paris.jpg" style="width:100%">
            <img src="/w3images/nature.jpg" style="width:100%">
            <img src="/w3images/mist.jpg" style="width:100%">
            <img src="/w3images/paris.jpg" style="width:100%">
        </div>
    </div>
</body>
@endsection

