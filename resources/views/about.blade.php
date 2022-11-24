@extends('layout')
<link rel="stylesheet" href="{{ asset('css/about.css') }}">
<link href="http://fonts.cdnfonts.com/css/ostrich-sans-2" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://unpkg.com/scrollreveal@4.0.0/dist/scrollreveal.min.js"></script>

@section('content')
<body class="about-body">
    <div class="container">
        <div class="card">
            <h1>SEJARAH KAMPUNG SERI SEMPADAN</h1>
            <img class="card-image" src="{{asset('img/sejarahbg.jpg')}}" alt="">
           <div class="card-content">
                <p>
                    Sebelum kampung ini ditubuhkan, Kampung Seri
                    Sempadan berada di bawah pentadbiran kampung induk yang
                    dikenali sebagai Kampung Batu 17-20 yang diterajui oleh
                    Tuan Haji Hamdani Bin Abdul Fatah. Kampung induk tersebut
                    merangkumi lima kampung rangkaian yang ditadbir oleh
                    ketua masyarakat setempat.
                <br><br>
                    Tiga buah kampung induk di dalam Mukim Ayer Hitam
                    pada waktu tersebut ialah <br><br>
                    i). Kampung Batu 14-17 <br>
                    ii). Kampung Batu 17-20 <br>
                    iii). Kampung Parit Tengah-Parit Baharu
                <br><br>
                    Setiap kampung induk diurus oleh seorang Ketua
                    Kampung dan dibantu oleh Ahli Jawatankuasa Keselamatan
                    dan Kemajuan Kampung ( JKKK ).
                <br><br>
                    Ekoran jumlah penduduk yang semakin bertambah, maka
                    Jawatankuasa Mukim yang terdiri daripada Penghulu dan
                    wakil ketiga-tiga kampung induk iaitu Ketua dan Setiausaha
                    Masyarakat bersama wakil rakyat telah mengambil keputusan
                    untuk mencadangkan dan memohon pembahagian kawasan
                    daripada tiga kampung induk kepada enam kampung induk.

                    Setelah dipersetujui bersama , maka perkara tersebut
                    terus dimajukan kepada pihak kerajaan menerusi Pejabat
                    Daerah dan wakil rakyat ( ADUN ).
                <br><br>

                    Sesuai dengan hasrat kerajaan untuk meningkatkan tahap
                    pembangunan dan kemajuan kampung di luar bandar,
                    permohonan dan cadangan pembahagian kampung daripata
                    tiga kampung induk kepada enam kampung induk
                    dipersetujui dan diluluskan oleh pihak kerajaan pada tahun
                    1996. Pembahagian kampung induk adalah sebagaimana
                    yang berikut :- <br><br>
                    i. Kampung Batu 14 – 17 <br>
                    ii. Kampung Parit Haji Anuar <br>
                    iii. Kampung Parit Tengah / Kampung Parit Baharu <br>
                    iv. Kampung Batu 17 – 18 <br>
                    v. Kampung Batu 18 – 20
                    <br><br>
                    Oleh kerana kedudukan Kampung Batu 18 – 20 terletak
                    paling hujung di selatan Daerah Muar dan bersempadan
                    dengan Daerah Batu Pahat, maka nama telah ditukar kepada
                    Kampung Seri Sempadan sebagai nama rasmi.
                <br><br>

                    Secara rasminya, Kampung Seri Sempadan telah
                    ditubuhkan pada Oktober 1996 dan diketuai oleh Setiausaha
                    JKKK Kampung Batu 17-20 iaitu Tuan Haji Ahmad Sofa Bin
                    Abdullah sebagai Ketua Kampung yang dilantik. Beliau
                    kemudiannya telah menubuhkan barisan JKKK sebagaimana
                    yang diarahkan. Jawatankuasa yang dibentuk adalah
                    seperti berikut :
                </p>
                <table>
                    <tr>
                        <th>Bil.</th>
                        <th>Nama</th>
                        <th>Tahun Berkhidmat</th>
                    </tr>
                    <tr class="odd">
                        <td>1</td>
                        <td>Tuan Haji Ahmad @ Sofa Bin Abdullah</td>
                        <td>1996 - 2005</td>
                    </tr>
                    <tr class="even">
                        <td>2</td>
                        <td>Tuan Haji Ismail Bin Sakir</td>
                        <td>2005 - 2007</td>
                    </tr>
                    <tr class="odd">
                        <td>3</td>
                        <td>Tuan Haji Md Jamil Bin Madran</td>
                        <td>2007 - 2018</td>
                    </tr>
                    <tr class="even">
                        <td>4</td>
                        <td>Encik Muhamad Isa Bin Lamin </td>
                        <td>2019 - 2021</td>
                    </tr>
                    <tr class="odd">
                        <td>5</td>
                        <td>Encik Md Hakim Bin Misdan</td>
                        <td>2021 - kini</td>
                    </tr>
                </table>
          </div>
        </div>
    </div>
</body>
<script>
    var slideUp = {
        distance: '150%',
        origin: 'bottom',
        opacity: null
    };
    ScrollReveal().reveal('.card', slideUp);
</script>
@endsection
