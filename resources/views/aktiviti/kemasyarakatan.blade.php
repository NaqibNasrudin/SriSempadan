<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/kemasyarakatan.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Kemasyarakatan</title>
    <link rel="icon" href="{{asset('img/logonew.png')}}">
</head>
<body>
    <div class="back">
        <a href="/aktiviti"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
    </div>
    <h1>Kemasyarakatan</h1>
    <section class="timeline">
        <ul>
          <li>
            <div>
              <img src="{{asset('img/gotongroyong1.jpg')}}" alt="">
              <h2>Menanam Pokok</h2>
              <p>Gotong royong menanam pokok limau kasturi pada 26 Jun di Parit Arab</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/gotongroyong2.jpg')}}" alt="">
                <h2>Menambah Baik Surau</h2>
                <p>Gotong royong menambah baik surau dan fasiliti</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/kecerian.jpg')}}" alt="">
                <h2>Program Kecerian Kampung</h2>
                <p>Membersih dah menghias kawasan sekitar Seri Sempadan</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/bilikgerakan.jpg')}}" alt="">
                <h2>Menghias Bilik Gerakan Kampung</h2>
                <p>Mencantikkan bilik gerakan</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/rondaan.jpg')}}" alt="">
                <h2>Rodaan kampung</h2>
                <p>Rondaan di sekitar kampung pada waktu malam demi memastikan keselamatan penduduk terjamin</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/mesy.jpg')}}" alt="">
                <h2>Mesyuarat Kampung</h2>
                <p>Bertujuan membincangkan masalah-masalah kampung disamping mencari jalan pnyelesaian.</p>
            </div>
          </li>
          <li>
            <div>
                <video src="{{asset('vid/bubur.mp4')}}" controls></video>
                <h2>Program Bubur Lambuk</h2>
                <p>Program memasak bubur lambuk diadakan pada 6 Ogos bertempat di Kompleks Penghulu Ayer Hitam.</p>
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
