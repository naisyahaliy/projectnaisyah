<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Parfum Store</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.5.1/uicons-regular-straight/css/uicons-regular-straight.css'>
    <style>
        body {
            background-color: white;
        }
        .navbar-brand {
            font-weight: bold;
            font-size: 1.3rem;
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
        .footer {
            background-color: #ffffff ;
            color:#343a40 ;
            padding: 20px 0;
            text-align: center;
        }
        .logo img {
             width: 60px; 
             border-radius: 50%;
             height: auto; 
             margin: 20px 0;
        }

    </style>
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:rgb(177, 159, 138);">
        <div class="logo">
            <img src="{{ asset('images/logoo.jpg') }}" alt="logo">
        <a class="navbar-brand " href="#" style="color: white;">Celestial Perfumes</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" style="color: white; margin-left:20vw; margin-top:-6vw;">Home</a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="/sudahlogin" style="color: white;">Shop</a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" href="/tentang" style="color: white; margin-left:10px; margin-top:-6vw;">About</a>
                </li>             
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-top: -6vw; margin-left:50vw;">
                    <a class="nav-link" href="/keranjangku" ><i class="fi fi-rr-shopping-cart" style="color: white;"></i></a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <li class="nav-item" style="margin-top: -6vw">
                    <a class="nav-link" href="/akun" ><i class="fi fi-rs-portrait" style="color:white; "></i></a>
                </li>
            </ul>
            
                {{-- <a class="nav-link" href="#" style="color: white; margin-left: 5%;">MASUK</a> --}}
                {{-- <a href="/masuklogin" class="btn btn-secondary" style="margin-left: 50">Masuk</a> --}}
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
                <img src="https://www.minedot.com/cdn/shop/files/family-cropped_700x.jpg?v=1613975266" class="d-block w-100" alt="Image 1">
              </div>
              {{-- <div class="carousel-item" style="width: 90%; margin-left: 60px;">
                <img src="utama2.jpg" class="d-block w-100" alt="Image 2">
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
            </button>
          </div> --}}
          
    <div class="container mt-5">
        <div class="text-center">
            <h2 style="color: white; font-size: 45px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">Our Categories</h2>
            <p style="color: white; font-size: 15px;">Explore our wide range of perfumes!</p>
        </div>
        <div class="row mt-4">
            <div class="col-md-4 text-center">
                <div class="category-title" style="color: white;">Men's Perfume</div>
                <div class="card product-card">
                    <img src="https://img.id.my-best.com/product_images/7ebc4b8280a74993a2b94c1114cb233b.jpg?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=66c80e49c39ed975693b695b1d5260f9" class="card-img-top" alt="Men's Perfume">
                    <div class="card-body">
                        <h5 class="card-title">Best Men's Perfume</h5>
                        <p class="card-text">Explore the best fragrance for men!</p>
                        <a href="/produkku" class="btn" style="background-color: rgb(177, 159, 138); color:white;">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="category-title" style="color: white;">Women's Perfume</div>
                <div class="card product-card">
                    <img src="https://img.id.my-best.com/product_images/fcdd97b89c0c6a863a8c4142af957ee7.png?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=2ff4949d22495a5f15d8d370ad641d7c" class="card-img-top" alt="Women's Perfume">
                    <div class="card-body">
                        <h5 class="card-title">Best Women's Perfume</h5>
                        <p class="card-text">Discover the finest fragrances for women!</p>
                        <a href="/beliii" class="btn" style="background-color: rgb(177, 159, 138); color:white;">Shop Now</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="category-title" style="color: white;">Top Perfume</div>
                <div class="card product-card">
                    <img src="https://imgcdn.femaledaily.com/2021/03/PARFUM-DENGAN-AROMA-SOAPY-UNTUK-MUSIM-PANAS-JO-MALONE-LONDON-ORANGE-BLOSSOM-COLOGNE.jpg" class="card-img-top" alt="Unisex Perfume">
                    <div class="card-body">
                        <h5 class="card-title">Top Perfume</h5>
                        <p class="card-text">Perfume for everyone.</p>
                        <a href="/detailtri" class="btn" style="background-color: rgb(177, 159, 138); color:white;">Shop Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <div class="text-center">
            <h3 style="color: white; font-size: 45px; font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;">children's perfume</h3>
            <p style="color: white; font-size: 15px;">There are various children's perfumes!</p>

            <div class="row mt-4">
                <div class="col-md-4">
                    <div class="category-title" style="color: white;">Baby Perfume</div>
                    <div class="card product-card">
                        <img src="https://images.tokopedia.net/img/cache/700/hDjmkQ/2024/6/19/316e3fbc-9fe2-4777-804b-a66dc79a7306.jpg" class="card-img-top" alt="Men's Perfume">
                        <div class="card-body">
                            <h5 class="card-title">Best Men's Perfume</h5>
                            <p class="card-text">Explore the best fragrance for men!</p>
                            <a href="/detailfor" class="btn" style="background-color: rgb(177, 159, 138); color:white;">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-title" style="color: white;">Girls Perfume</div>
                    <div class="card product-card">
                        <img src="https://down-id.img.susercontent.com/file/dad99380769e370e7af0490d7cb3be85" class="card-img-top" alt="Women's Perfume">
                        <div class="card-body">
                            <h5 class="card-title">Best Women's Perfume</h5>
                            <p class="card-text">Discover the finest fragrances for women!</p>
                            <a href="/detail5" class="btn" style="background-color: rgb(177, 159, 138); color:white;">Shop Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="category-title" style="color: white;">Perfume Top</div>
                    <div class="card product-card">
                        <img src="https://images.tokopedia.net/img/cache/700/VqbcmM/2023/10/5/0767b099-4566-4f80-b679-7c2273042d71.jpg" class="card-img-top" alt="Unisex Perfume">
                        <div class="card-body">
                            <h5 class="card-title">Top Perfume</h5>
                            <p class="card-text">Perfume for everyone.</p>
                            <a href="/detail6" class="btn" style="background-color: rgb(177, 159, 138); color:white;">Shop Now</a>
                        </div>
                    </div>
                </div>
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
