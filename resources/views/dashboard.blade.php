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
                        <a class="nav-link" href="/homesaya">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/tentang">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
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
    <a href="/produk/create" class="btn btn-primary" style="background-color:rgb(177, 159, 138); margin-left:20px;">Tambah Data</a><br>
    <body>
        <form action="/dshboard/search" method="post">
            @csrf
            <div class="input-group" style="width: 50vw; margin-left:50%; ">
                <input type="search" placeholder="Search..." name="cari" class="form-control">
                <button type="submit" class="btn" style="background-color:rgb(177, 159, 138); color:white;">Search</button>
            </div>
        </form>
    </body>
    <div class="container-fluid py-4">
        <h3>Perfume List</h3>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kategori</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Jumlah</th>
                    <th scope="col">Stok</th>
                    <th scope="col">Foto</th>
                    <th scope="col">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $key => $item)
                <tr>
                    <td>{{$key+1}}</td>
                    <td>{{$item->nama}}</td>
                    <td>{{$item->kategori}}</td>
                    <td>{{$item->harga}}</td>
                    <td>{{$item->jumlah}}</td>
                    <td>{{$item->stok}}</td>
                    <td><img src="{{ asset('storage/foto/'.$item->foto) }}" alt="" style="width: 50px; height: 50px"></td>
                    <td>
                        <a href="/produk/delete/{{ $item->id }}" onclick="return window.confirm('Yakin hapus data ini?')" class="btn btn-danger">Hapus</a>
                        <a href="/produk/edit/{{ $item->id }}" class="btn btn-primary">Edit</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="{{ asset('asset/bootstrap/js/bootstrap.min.js')}}"></script>
</body>    
