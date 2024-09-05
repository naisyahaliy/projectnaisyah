<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href={{asset('asset/bootstrap/css/bootstrap.min.css')}}>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color:rgb(177, 159, 138);">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">CelParfume</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/homesaya">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">About</a>
                    </li>
                </ul>
               
            </div>
        </div>
    </nav>
        <div>
            @yield('content')
        </div>
    </body>
    <script src={{asset('asset/bootstrap/js/bootstrap.min.js')}}></script>