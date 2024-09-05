<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfum Store</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <style>
        body {
            background-color: white;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.3rem;
            margin-top: 5vw;
        }
        .product-card img:hover {
            transform: scale(1.05);
            transition: transform 0.3s;
        }
        .carousel-item img {
            height: 550px;
            width: 250px;
            object-fit: cover;
        }
        .category-title {
            font-size: 1.25rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .product-card img {
            height: 250px;
            object-fit: cover;
            border-radius: 8px;
        }
        .logo img {
             width: 60px; 
             border-radius: 50%;
             height: auto; 
             margin: 20px 0;
        }
        .footer {
            background-color: #ffffff ;
            color:#343a40 ;
            padding: 20px 0;
            text-align: center;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(177, 159, 138); ">
        <div class="logo">
            <img src="{{ asset('images/logoo.jpg') }}" alt="logo">
        <a class="navbar-brand " href="#" style="color: white; ">Celestial Perfumes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-left: 25vw; margin-top:-6vw;">
                    <a class="nav-link" href="#" style="color: white;">Home</a>
                </li>
                {{-- <li class="nav-item" style="margin-left: 2vw; margin-top:-6vw;">
                    <a class="nav-link" href="/" style="color: white;">Best Seller</a>
                </li>  --}}
                <li class="nav-item" style="margin-left: 2vw; margin-top:-6vw;">
                    <a class="nav-link" href="/login" style="color: white;">Shop</a>
                </li>
                <li class="nav-item" style="margin-left: 2vw; margin-top:-6vw;">
                    <a class="nav-link" href="/tentang" style="color: white;">About</a>
                </li>      
            </ul>
            <i class="fi fi-rr-shopping-cart" style="color: white; margin-left: 40%; margin-top:-8vw;"></i>
            <i class="fi fi-rr-heart" style="color: white; margin-left: 3%; margin-top:-8vw;"></i>

                <a href="/masuklogin" class="btn" style="margin-left: 50px; margin-top:-8vw; color:white;">Masuk</a>
                <a href="/admin" class="btn" style="margin-left: 30px; margin-top:-8vw; color:white;">Toko</a>
        </div>
        </nav>
    </nav>
        </div>    
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            {{-- <div class="carousel-indicators">
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div> --}}
            <div class="carousel-inner">
              <div class="carousel-item active" style="width: 70%; margin-left: 180px; margin-top:20px;">
                <img src="https://cnfstore.com/pub/media/Most-Wanted_Fragrances_for_Him.jpg" class="d-block w-100">
              </div>
              {{-- <div class="carousel-item" style="width: 90%; margin-left: 60px;">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTePu1v9uk825m4EB-FnT9gQhgztEUbn5pThA&s" class="d-block w-100" alt="Image 2">
              </div>
              <div class="carousel-item" style="width: 90%; margin-left: 60px;">
                <img src="diskon.png" class="d-block w-100" alt="Image 3">
              </div> --}}
            </div>
            {{-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button> --}}
          </div>
          
    <div class="container mt-5">
        <div class="text-center">
            <h2 style="color: white; font-size: 45px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Our Categories</h2>
            <p style="color: white; font-size: 15px;">Explore our wide range of perfumes!</p>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <div class="category-title" style="color: white;">Men's Perfume</div>
                <div class="card product-card">
                    <img src="https://thefragranceshopinc.com/cdn/shop/products/image_6291effb-a45c-4170-9581-f8ce453dd616_1024x1024.jpg?v=1615160131" class="card-img-top" alt="Men's Perfume">
                    <div class="card-body">
                        <h5 class="card-title">Best Men's Perfume</h5>
                        <p class="card-text">Explore the best fragrance for men!</p>
                        <a href="#" class="btn btn-danger">-50%</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="category-title" style="color: white;">Women's Perfume</div>
                <div class="card product-card">
                    <img src="https://dynamic.zacdn.com/uhvv9VoWo8elJBJu-8bkMoO9Zio=/filters:quality(70):format(webp)/https://static-id.zacdn.com/p/chanel-5153-3206922-2.jpg" class="card-img-top" alt="Women's Perfume">
                    <div class="card-body">
                        <h5 class="card-title">Best Women's Perfume</h5>
                        <p class="card-text">Discover the finest fragrances for women!</p>
                        <a href="#" class="btn btn-danger">-40%</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="category-title" style="color: white;">Baby Perfume</div>
                <div class="card product-card">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQBRVX2adU40-Y_mQrnu5Vwdaok_mg-KZ8nug&s" class="card-img-top" alt="Women's Perfume">
                    <div class="card-body">
                        <h5 class="card-title">Best Baby Perfume</h5>
                        <p class="card-text">Explore the best fragrance for baby!</p>
                        <a href="#" class="btn btn-danger">-40%</a>
                    </div>
                </div>
            </div>
            

    <!-- Footer -->
    <div class="footer mt-5 text-white" style="background-color: rgb(177, 159, 138);">
        <p>&copy; 2024 Celestial Perfumes. All Rights Reserved.</p>
        <p>Hubungi kami: CelParfume@gmail.com | +62 123 4567</p>
        <p>
            <a href="#">Kebijakan Privasi</a> | 
            <a href="#">Syarat & Ketentuan</a>
        </p>
    </div>
    <script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</html>
