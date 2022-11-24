<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/layout.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Serif&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kg Seri Sempadan</title>
    <link rel="icon" href="{{asset('img/logonew.png')}}">
</head>

<body>
    <nav class="stroke" id="mySidenav">
        <ul id="myLinks">
            <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a></li>
            <li><a href="/">Home</a></li>
            <li><a href="/about">Mengenai Kami</a></li>
            <li><a href="/carta-organisasi">Carta Organisasi</a></li>
            <li><a href="/aktiviti">Aktiviti</a></li>
            <li><a href="/galeri">Galeri</a></li>
        </ul>
    </nav>
    <div class="open-bg">
        <span class="open" style="font-size:30px;cursor:pointer" onclick="openNav()">
            <i class="fa fa-bars"></i>
        </span>
    </div>
    <div class="container">
        @yield('content')
    </div>
</body>
<script>
    function openNav() {
      document.getElementById("mySidenav").style.width = "250px";
    }

    function closeNav() {
      document.getElementById("mySidenav").style.width = "0";
    }
</script>
</html>
