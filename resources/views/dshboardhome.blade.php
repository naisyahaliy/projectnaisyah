<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfume Dashboard</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: rgb(177, 159, 138);">
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
                        <a class="nav-link" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">About</a>
                    </li>
                </ul>
               
            </div>
        </div>
    </nav>

    <div class="main-content text-center" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
        <h2>Welcome to the Perfume Store Dashboard</h2>
    <div class="container-fluid py-4">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-black h-100" style="background-color: lightblue">
                    <div class="card-body">
                        <h5 class="card-title">Stok Habis</h5>
                        {{-- <p class="card-text">Rp 1,000,000</p> --}}
                    </div>
                    <div class="card-footer">
                        <small>Updated just now</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-black h-100" style="background-color: lightgreen">
                    <div class="card-body">
                        <h5 class="card-title">Total Products</h5>
                        {{-- <p class="card-text">120</p> --}}
                    </div>
                    <div class="card-footer">
                        <small>Updated just now</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-black h-100" style="background-color: lightgray">
                    <div class="card-body">
                        <h5 class="card-title">Orders Baru</h5>
                        {{-- <p class="card-text">15</p> --}}
                    </div>
                    <div class="card-footer">
                        <small>Updated just now</small>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="card text-black h-100" style="background-color: lightcoral">
                    <div class="card-body">
                        <h5 class="card-title">Total Penjualan</h5>
                        {{-- <p class="card-text">3</p> --}}
                    </div>
                    <div class="card-footer">
                        <small>Updated just now</small>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>