<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>404 - Not Found</title>
    <link rel="stylesheet" href="{{ asset('backend/css/main/app.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/css/pages/error.css') }}">
    <link rel="shortcut icon" href="{{ asset('backend/images/logo/favicon.svg" type="image/x-icon') }}">
    <link rel="shortcut icon" href="{{ asset('backend/images/logo/favicon.png" type="image/png') }}">
</head>

<body>
    <div id="error">

        <div class="error-page container">
            <div class="col-md-8 col-12 offset-md-2">
                <div class="text-center">
                    <img class="img-error" src="{{ asset('backend/images/samples/error-404.svg') }}" alt="Not Found">
                    <h1 class="error-title">NOT FOUND</h1>
                    <p class='fs-5 text-gray-600'>Halaman yang Anda cari tidak ditemukan.</p>
                    <a href="{{ url('/') }}" class="btn btn-lg btn-outline-primary mt-3">Ke Beranda</a>
                </div>
            </div>
        </div>

    </div>
</body>

</html>
