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
        :root {
            --background-dark: #2d3548;
            --text-light: rgba(255, 255, 255, 0.6);
            --text-lighter: rgba(255, 255, 255, 0.9);
            --spacing-s: 8px;
            --spacing-m: 16px;
            --spacing-l: 24px;
            --spacing-xl: 32px;
            --spacing-xxl: 64px;
            --width-container: 1200px;
        }

        * {
            border: 0;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        html {
            height: 100%;
            font-family: "Montserrat", sans-serif;
            font-size: 14px;
        }

        body {
            height: 100%;
        }

        .hero-section {
            align-items: flex-start;
            background-image: linear-gradient(15deg, #0f4667 0%, #2a6973 150%);
            display: flex;
            min-height: 100%;
            justify-content: center;
            padding: var(--spacing-xxl) var(--spacing-l);
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            grid-column-gap: var(--spacing-l);
            grid-row-gap: var(--spacing-l);
            max-width: var(--width-container);
            width: 100%;
        }

        @media (min-width: 540px) {
            .card-grid {
                grid-template-columns: repeat(2, 1fr);
            }
        }

        @media (min-width: 960px) {
            .card-grid {
                grid-template-columns: repeat(4, 1fr);
            }
        }

        .card {
            list-style: none;
            position: relative;
        }

        .card:before {
            content: "";
            display: block;
            padding-bottom: 150%;
            width: 100%;
        }

        .card__background {
            background-size: cover;
            background-position: center;
            border-radius: var(--spacing-l);
            bottom: 0;
            filter: brightness(0.1) saturate(0.2) contrast(0.85);
            left: 0;
            position: absolute;
            right: 0;
            top: 0;
            transform-origin: center;
            trsnsform: scale(1) translateZ(0);
            transition: filter 200ms linear, transform 200ms linear;
        }

        .card:hover .card__background {
            transform: scale(1.05) translateZ(0);
        }

        .card-grid:hover>.card:not(:hover) .card__background {
            filter: brightness(0.5) saturate(0) contrast(1.2) blur(20px);
        }

        .card__content {
            left: 0;
            padding: var(--spacing-l);
            position: absolute;
            top: 0;
        }

        .card__category {
            color: var(--text-light);
            font-size: 0.9rem;
            margin-bottom: var(--spacing-s);
            text-transform: uppercase;
        }

        .card__heading {
            color: var(--text-lighter);
            font-size: 1.9rem;
            text-shadow: 2px 2px 20px rgba(0, 0, 0, 0.2);
            line-height: 1.4;
            word-spacing: 100vw;
        }

        .contenedor {
            height: 100%;
            padding: 5% 0;
        }

        h1 {
            color: #FCFBFA;
        }

        .container_foto {
            background-color: rgba(57, 62, 93, 0.7);
            padding: 0;
            overflow: hidden;
            max-width: 95%;
            margin: 5px;
        }

        .container_foto article {
            padding: 10%;
            position: absolute;
            bottom: 0;
            z-index: 1;
            -webkit-transition: all 0.5s ease;
            -moz-transition: all 0.5s ease;
            -o-transition: all 0.5s ease;
            -ms-transition: all 0.5s ease;
            transition: all 0.5s ease;
        }

        .container_foto h2 {
            color: #fff;
            font-weight: 800;
            font-size: 25px;
            border-bottom: #fff solid 1px;
        }

        .container_foto h4 {
            font-weight: 300;
            color: #fff;
            font-size: 16px;
        }

        .container_foto img {
            width: 100%;
            top: 0;
            left: 0;
            opacity: 0.4;
            -webkit-transition: all 4s ease;
            -moz-transition: all 4s ease;
            -o-transition: all 4s ease;
            -ms-transition: all 4s ease;
            transition: all 4s ease;
        }

        .ver_mas {
            background-color: #e1e7f6;
            position: absolute;
            width: 100%;
            height: 70px;
            bottom: 0;
            z-index: 1;
            opacity: 0;
            transform: translate(0px, 70px);
            -webkit-transform: translate(0px, 70px);
            -moz-transform: translate(0px, 70px);
            -o-transform: translate(0px, 70px);
            -ms-transform: translate(0px, 70px);
            -webkit-transition: all 0.2s ease-in-out;
            -moz-transition: all 0.2s ease-in-out;
            -o-transition: all 0.2s ease-in-out;
            -ms-transition: all 0.2s ease-in-out;
            transition: all 0.2s ease-in-out;
        }

        .ver_mas span {
            font-size: 40px;
            color: rgb(16, 14, 14);
            position: relative;
            margin: 0 auto;
            width: 100%;
            top: 13px;
        }

        /*hovers*/
        .container_foto:hover {
            cursor: pointer;
        }

        .container_foto:hover img {
            opacity: 0.1;
            transform: scale(1.5);
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

    </style>

    <title>Hello, world!</title>
</head>

<body>
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
    
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto" onclick="window.location='user/renungan';"">
            <div class="ver_mas text-center" >
                <span id="click" class="lnr lnr-eye"></span>
            </div>
            <article class="text-left">
                <a  class="text-white" style="font-size: 24px">Renungan</a>
            </article>
            <img src="{{ asset('img/renungan.jpg') }}" style="height: 340px;">
        </div>

    
    <div style="cursor: pointer;" onclick="window.location='/';">
        <div class="col-lg-4 col-md-4 col-sm-6 col-xs-12 container_foto mt-3">
            <div class="ver_mas text-center">
                <span id="click" class="lnr lnr-eye"></span>
            </div>    
            <article class="text-left">
                <a  class="text-white" style="font-size: 24px">Alkitab</a>
            </article>    
            <img src="{{ asset('img/alkitab.jpg') }}" style="height: 340px;">
        </div>    

    </div>    
    





    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>



</body>

</html>
