<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/kemasyarakatan.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Keagamaan & Bina Insan</title>
    <link rel="icon" href="{{asset('img/logonew.png')}}">
</head>
<body>
    <div class="back">
        <a href="/aktiviti"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
    </div>
    <h1>Keagamaan & Bina Insan</h1>
    <section class="timeline">
        <ul>
          <li>
            <div>
              <img src="{{asset('img/baraan2.jpg')}}" alt="">
              <h2>Baraan</h2>
              <p>Aktiviti marhabaan atau dikenali sebagai 'baraan' diadakan pada setiap kali Hari Raya Aidilfitri Menjelma.</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/yasinan.jpg')}}" alt="">
                <h2>Bacaan Yassin</h2>
                <p>Bacaan Yassin di rumah penduduk diadakan setiap Khamis mengikut giliran.</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/pertandingan_marhaban.jpg')}}" alt="">
                <h2>Pertandingan Marhaban Antara Mukim</h2>
                <p>Kampung Seri Sempadan juga mengambil bahagian dalam acara Pertandingan Marhaban Antara Mukim.</p>
            </div>
          </li>
        </ul>
    </section>

</body>
<script>
    (function () {
  "use strict";

  // define variables
  var items = document.querySelectorAll(".timeline li");

  // check if an element is in viewport
  // http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
  function isElementInViewport(el) {
    var rect = el.getBoundingClientRect();
    return (
      rect.top >= 0 &&
      rect.left >= 0 &&
      rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
      rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
  }

  function callbackFunc() {
    for (var i = 0; i < items.length; i++) {
      if (isElementInViewport(items[i])) {
        items[i].classList.add("in-view");
      }
    }
  }

  // listen for events
  window.addEventListener("load", callbackFunc);
  window.addEventListener("resize", callbackFunc);
  window.addEventListener("scroll", callbackFunc);
})();

</script>
</html>
