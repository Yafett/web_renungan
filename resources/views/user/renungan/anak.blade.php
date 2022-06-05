<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <style>
        body {
            background: #FCFCFC;
        }

        .pr-12 {
            padding-right: 12px !important;
        }

        .mb-20 {
            margin-bottom: 20px !important;
        }

        .b-1 {
            border: 1px solid #ebebeb !important;
        }

        .card {
            border: 0;
            border-radius: 0;
            margin-bottom: 30px;
            -webkit-transition: .5s;
            transition: .5s;
        }

        .card {
            position: relative;
            display: -ms-flexbox;
            display: flex;
            -ms-flex-direction: column;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 1px solid rgba(0, 0, 0, .125);
            border-radius: .25rem;
        }

        .media {
            padding: 16px 12px;
            -webkit-transition: background-color .2s linear;
            transition: background-color .2s linear;
        }

        .media {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: start;
            align-items: flex-start;
        }

        .card-body {
            -ms-flex: 1 1 auto;
            flex: 1 1 auto;
            padding: 1.25rem;
        }

        .media .avatar {
            flex-shrink: 0;
        }

        .no-radius {
            border-radius: 0 !important;
        }

        .avatar-xl {
            width: 64px;
            height: 64px;
            line-height: 64px;
            font-size: 1.25rem;
        }

        .avatar {
            position: relative;
            display: inline-block;
            width: 36px;
            height: 36px;
            line-height: 36px;
            text-align: center;
            border-radius: 100%;
            background-color: #f5f6f7;
            color: #8b95a5;
            text-transform: uppercase;
        }

        img {
            max-width: 100%;
        }

        img {
            vertical-align: middle;
            border-style: none;
        }

        .mb-2 {
            margin-bottom: .5rem !important;
        }

        .fs-20 {
            font-size: 20px !important;
        }

        .pr-16 {
            padding-right: 16px !important;
        }

        .ls-1 {
            letter-spacing: 1px !important;
        }

        .fw-300 {
            font-weight: 300 !important;
        }

        .fs-16 {
            font-size: 16px !important;
        }

        .media-body>* {
            margin-bottom: 0;
        }

        small,
        time,
        .small {
            font-family: Roboto, sans-serif;
            font-weight: 400;
            font-size: 11px;
            color: #8b95a5;
        }

        .fs-14 {
            font-size: 14px !important;
        }

        .mb-12 {
            margin-bottom: 12px !important;
        }

        .text-fade {
            color: rgba(77, 82, 89, 0.7) !important;
        }

        .card-footer:last-child {
            border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px);
        }

        .card-footer {
            background-color: #fcfdfe;
            border-top: 1px solid rgba(77, 82, 89, 0.07);
            color: #8b95a5;
            padding: 10px 20px;
        }

        .flexbox {
            display: -webkit-box;
            display: flex;
            -webkit-box-pack: justify;
            justify-content: space-between;
        }

        .align-items-center {
            -ms-flex-align: center !important;
            align-items: center !important;
        }

        .card-footer {
            padding: .75rem 1.25rem;
            background-color: rgba(0, 0, 0, .03);
            border-top: 1px solid rgba(0, 0, 0, .125);
        }


        .card-footer {
            background-color: #fcfdfe;
            border-top: 1px solid rgba(77, 82, 89, 0.07);
            color: #8b95a5;
            padding: 10px 20px
        }

        .card-footer>*:last-child {
            margin-bottom: 0
        }

        .hover-shadow {
            -webkit-box-shadow: 0 0 35px rgba(0, 0, 0, 0.11);
            box-shadow: 0 0 35px rgba(0, 0, 0, 0.11)
        }

        .fs-10 {
            font-size: 10px !important;
        }

        .foto-profile {
            height: 40px;
            width: 40px;
            border-radius: 100%;
            background-size: cover;
            margin-left: 50%;
            margin-top: 3%;
        }

        .foto-profile img {
            height: 50px;
            width: 50px;
            border-radius: 100%;
            background-size: cover;
        }

        .container-profile {
            height: 50px;
            width: 220px;
            padding: 1;
        }

        .teks-profile {
            margin-top: 3%;
            margin-left: 3%;
        }

        .kotak-judul {
            background-color: rgb(255, 187, 187);
        }

        .kotak-bacaan {
            background-color: rgb(230, 230, 137);
        }

          .kotak-isi {
            background-color: green;
        }

        .kotak-kesimpulan {
            background-color: blue;
        }


    </style>

    <title>Hello, world!</title>

</head>

<body style="background-color: #fcfcfc">
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color : #c4c4af">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="container-profile row">

            <img class="foto-profile" src="{{ asset('img/profile.jpg') }}">
            <a class="navbar-brand teks-profile" href="#">User</a>
        </div>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Beranda <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Alkitab <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#">Renungan <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>

            </ul>

        </div>
    </nav>

    @php
        function tgl_indo($tanggal)
        {
            $bulan = [
                1 => 'Januari',
                'Februari',
                'Maret',
                'April',
                'Mei',
                'Juni',
                'Juli',
                'Agustus',
                'September',
                'Oktober',
                'November',
                'Desember',
            ];
            $pecahkan = explode('-', $tanggal);
            // variabel pecahkan 0 = tahun
            // variabel pecahkan 1 = bulan
            // variabel pecahkan 2 = tanggal
            return $pecahkan[2] . ' ' . $bulan[(int) $pecahkan[1]] . ' ' . $pecahkan[0];
        }
    @endphp




        <div class="kotak-judul p-3">
            <h2 class="display-5">
                ELEGI UNTUK BUMI
            </h2>
            <span><small>Si lintah mempunyai dua anak perempuan: “Untukku!” dan “Untukku!” (Amsal 30:15a)
            </small></span>
        </div>

        <div class="kotak-bacaan p-3">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veniam, animi.</p>
        </div>

        <div class="kotak-isi p-3">
            <p>Paradigma antroposentrisme memandang manusia sebagai pusat dari alam semesta. Nilai tertinggi melekat pada diri manusia, sedangkan alam beserta segala isinya hanya dianggap sebagai alat pemuas kepentingan dan kebutuhan hidup. Alam kerap kali dieksploitasi demi memenuhi keinginan manusia yang tak mengenal batas. Sebagai akibatnya, kerusakan alam menjadi tidak terhindarkan. Nyanyian untuk bumi pun mengalun membangkitkan ratapan terhadap keegoisan manusia.

                Sifat manusia yang egois cenderung membuatnya berpikir hanya untuk kepentingan diri sendiri (self-centered). Seperti yang diungkapkan oleh Agur bin Yake, sifat semacam ini hanya berpusat pada dua hal: untukku dan untukku (ay. 15). Mandat Tuhan untuk memenuhi bumi dan menaklukkannya (Kej. 1:28) ujung-ujungnya diselewengkan oleh manusia demi pemuasan diri sendiri. Penyelewengan ini bertendensi memanfaatkan alam tanpa memperhitungkan kelestariannya.

                Hidup yang self-centered membuat seseorang juga sanggup melakukan eksploitasi terhadap orang lain untuk kepentingan diri sendiri. Pada tataran ini kebutuhan orang lain, termasuk yang menyangkut generasi yang akan datang, cenderung diabaikan.

                Elegi untuk bumi pada dasarnya meratapi keserakahan manusia yang berujung pada kerusakan lingkungan. Kematian hati nurani melahirkan ratapan yang mengungkapkan dukacita mendalam terhadap alam yang semata-mata menjadi objek eksploitasi manusia.

                </p>
        </div>

        <div class="kotak-kesimpulan p-3">
            <p>
                HIDUP YANG BERPUSAT PADA DIRI SENDIRI
                HANYA MENCIPTAKAN NYANYIAN RATAPAN ATAS BUMI</p>
        </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous">
    </script>
    -->
</body>

</html>
