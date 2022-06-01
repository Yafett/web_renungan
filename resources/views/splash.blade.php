<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- My Fonts --}}
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300&display=swap" rel="stylesheet">

    {{-- My CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <style>
        body {
            font-family: 'Quicksand', sans-serif;
            color: whitesmoke
        }

        #splash {
            position: absolute;
            top: 0;
            left: 0;
            background: #1b1b1b !important;
            height: 100vh;
            width: 100%;
            z-index: 9999;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            opacity: 1;
            transition: opacity 1s;
        }

        #splash img {
            width: 300px;
        }

        #splash.fade {
            opacity: 0;
        }

        .containerReg {
            text-align: right;
            color: blue;
        }

    </style>

    <title>splash</title>
</head>

<body>
    <div id='splash'>
        <h1>Renungan Harian</h1>
    </div>

    <div class="container" style="color: black">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mt-5">
                    <center>
                        <h2 class="mt-3">Login</h2>
                    </center>
                    <div class="card-body">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="row mb-3">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>

                                <div class="col-md-6">
                                    <input id="email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-3">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary mt-2">
                                        {{ __('Login') }}
                                    </button>
                                </div>
                            </div>

                            <div class="containerReg">

                                <small><a href="register">register</a></small>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        const element = document.getElementById("splash");
        setTimeout(() => {
            document.getElementById('splash').classList.toggle('fade');
        }, 2000);
        setTimeout(() => {
            element.remove();
        }, 3000)
    </script>
</body>

</html>
