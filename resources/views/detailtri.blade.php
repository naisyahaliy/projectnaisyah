<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 8px;
        }
        .product-image {
            max-width: 100%;
            height: auto;
        }
        .product-info {
            margin-top: 20px;
        }
        .product-info h1 {
            font-size: 24px;
            color: #333333;
        }
        .product-info p {
            font-size: 16px;
            color: #666666;
        }
        .product-info .price {
            font-size: 20px;
            color: #ff6347;
            margin-top: 10px;
        }
        .confirmation {
            margin-top: 20px;
            padding: 10px;
            background-color: #dff0d8;
            color: #3c763d;
            border: 1px solid #d6e9c6;
            border-radius: 4px;
            text-align: center;
        }
        .back-button {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background-color: #007bff;
            color: #ffffff;
            text-decoration: none;
            border-radius: 4px;
        }
        .back-button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <img src="https://www.rumahparfum.com/22187-big_default_2x/154-unisex.jpg" alt="Product Image" class="product-image">
        <div class="product-info">
            <h1>Jo Malone Cologne - english pear & freesia (100ml)</h1>
            <p>-50%</p>
            <p class="price">Rp.1.450.000,00</p>
        </div>
        <!-- <div class="confirmation">
            Produk telah berhasil ditambahkan ke keranjang!
        </div> -->
        <!-- <a href="index.html" class="back-button">Kembali ke Halaman Produk</a> -->
        <a href="/keranjang3" class="back-button" style="background-color:rgb(177, 159, 138);">Tambahkan Keranjang</a>
        <a href="/belitri" class="back-button" style="background-color:rgb(177, 159, 138);">Beli Sekarang</a>
    </div>

    <script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>
