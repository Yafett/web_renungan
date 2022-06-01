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
        body{
    background:#FCFCFC;
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
    border: 1px solid rgba(0,0,0,.125);
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
    margin-bottom: .5rem!important;
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

small, time, .small {
    font-family: Roboto,sans-serif;
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
    color: rgba(77,82,89,0.7) !important;
}

.card-footer:last-child {
    border-radius: 0 0 calc(.25rem - 1px) calc(.25rem - 1px);
}

.card-footer {
    background-color: #fcfdfe;
    border-top: 1px solid rgba(77,82,89,0.07);
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
    -ms-flex-align: center!important;
    align-items: center!important;
}

.card-footer {
    padding: .75rem 1.25rem;
    background-color: rgba(0,0,0,.03);
    border-top: 1px solid rgba(0,0,0,.125);
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
    </style>

    <title>Hello, world!</title>

</head>

<body style="background-color: #fcfcfc">
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



    <div class="container">
        <div class="display-4" style="margin-bottom: 5%; margin-top: 5%;">
            <a href="" style="color: black"><svg xmlns="http://www.w3.org/2000/svg" width="48" height="48"
                    fill="currentColor" class="bi bi-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z" />
                </svg></a> Riwayat Konseling
        </div>
        <div class="col-md-12">



            <div class="card b-1 hover-shadow mb-20">
                <div class="media card-body">
                    <div class="media-left pr-12">
                        <img class="avatar avatar-xl no-radius" src="https://bootdey.com/img/Content/avatar/avatar3.png"
                            alt="...">
                    </div>
                    <div class="media-body">
                        <div class="mb-2">
                            <span class="fs-20 pr-16">judul</span>
                        </div>
                        <small class="fs-16 fw-300 ls-1">isi  
                            
                        </small>
                    </div>
                    {{-- <div class="media-right text-right d-none d-md-block">
                        <p class="fs-14 text-fade mb-12"><i class="fa fa-map-marker pr-1"></i>{{ $j->nama_guru }}</p>
                         <span class="text-fade"><i class="fa fa-money pr-1"></i> $40 per hourspan>
                    </div> --}}
                </div>

                <footer class="card-footer flexbox align-items-center">
                    <div>
                        <strong>Diikuti pada: </strong>
                        <span></span>
                        {{-- <span>{{ tgl_indo($j->created_at) }}</span> --}}
                    </div>
                    <div class="card-hover-show">
                        {{-- <a class="btn btn-xs fs-10 btn-bold btn-warning" href="#">Delete</a> --}}
                        <p class="fs-14 text-fade mb-12"><strong>Pembimbing : </strong><i
                                class="fa fa-map-marker pr-1"></i></p>

                    </div>
                </footer>
            </div>
        </div>
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
