<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/kemasyarakatan.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Prasarana</title>
    <link rel="icon" href="{{asset('img/logonew.png')}}">
</head>
<body>
    <div class="back">
        <a href="/aktiviti"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
    </div>
    <h1>Prasarana</h1>
    <section class="timeline">
        <ul>
          <li>
            <div>
              <img src="{{asset('img/klinik.jpg')}}" alt="">
              <h2>Klinik</h2>
              <p>Kemudahan Klinik Desa memudahkan penduduk untuk melakukan sebarang pemeriksaan kesihatan dan juga mendapat nasihat doktor.</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/tadika.jpg')}}" alt="">
                <h2>Tadika KEMAS</h2>
                <p>Tadika KEMAS ini terletak di Kompleks Penghulu. Kemudahan tadika menyediakan pendidikan awal kepada kanak kanak yang tinggal di sekitar Seri Sempadan.</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/surau.jpg')}}" alt="">
                <h2>Surau</h2>
                <p>Disebabkan penduduk di Seri Sempadan adalah 100 peratus Muslim, kemudahan surau sememangnya penting untuk hal hal berkaitan Agama.</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/runcit.jpg')}}" alt="">
                <h2>Kedai Runcit Misdan</h2>
                <p>Penduduk boleh mendapatkan barangan runcit dengan adnya kemudahan Kedai Runcit ini.</p>
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
