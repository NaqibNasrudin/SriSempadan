<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/kemasyarakatan.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Ekonomi</title>
    <link rel="icon" href="{{asset('img/logonew.png')}}">
</head>
<body>
    <div class="back">
        <a href="/aktiviti"><i class="fa fa-arrow-left fa-2x" aria-hidden="true"></i></a>
    </div>
    <h1>Ekonomi</h1>
    <section class="timeline">
        <ul>
          <li>
            <div>
              <img src="{{asset('img/kompang.jpg')}}" alt="">
              <h2>Perusahan kompang</h2>
              <p>Perusahan kompang milik cik limi ini menggunakan kuit haiwan sebagai bahan utama dalam proses pembuatan kompang</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/madu.jpeg')}}" alt="">
                <h2>Perusahaan madu kelulut</h2>
                <p>Bread</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/kedai_runcit.jpg')}}" alt="">
                <h2>Perusahaan Barangan Runcit</h2>
                <p>Perusahan barangan runcit mulik Hj Misdan ini menyediakan pelbagai barangan runcit, sekali gus memudahkan.</p>
            </div>
          </li>
          <li>
            <div>
                <img src="{{asset('img/bakery.jpg')}}" alt="">
                <h2>Perusahaan Bakery</h2>
                <p>Penduduk boleh mendapatkan kek atau roti untuk majlis-majlis keramaian melalui perusahan bakery ini.</p>
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
