<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Keranjang Saya</title>
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
            background: #fff;
            padding: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
        .container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid #ccc;
        }
        th, td {
            padding: 15px;
            text-align: center;
        }
        th {
            background-color:rgb(177, 159, 138);
            color: white;
        }
        .product-img {
            width: 50px;
            height: 50px;
            object-fit: cover;
        }
        .actions {
            display: flex;
            justify-content: center;
        }
        .actions button {
            background-color:rgb(177, 159, 138);
            color: #fff;
            padding: 8px 12px;
            border: none;
            margin: 0 5px;
            border-radius: 4px;
            cursor: pointer;
        }
        .actions button:hover {
            background-color:rgb(177, 159, 138);
        }
        .total {
            text-align: right;
            margin-top: 20px;
        }
        .checkout-btn {
            display: block;
            margin: 30px auto;
            padding: 12px 20px;
            background-color:rgb(177, 159, 138);
            color: white;
            text-align: center;
            border: none;
            border-radius: 4px;
            text-decoration: none;
            cursor: pointer;
        }
        .checkout-btn:hover {
            background-color: rgb(83, 41, 11)
            ;
        }
    </style>
</head>
<body>

<div class="container">
    <h2> My Keranjang</h2>
    <table>
        <thead>
            <tr>
                <th>Produk</th>
                <th>Nama</th>
                <th>Harga</th>
                <th>Jumlah</th>
                <th>Total</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><img src="https://img.id.my-best.com/product_images/7ebc4b8280a74993a2b94c1114cb233b.jpg?ixlib=rails-4.3.1&q=70&lossless=0&w=800&h=800&fit=clip&s=66c80e49c39ed975693b695b1d5260f9" alt="" class="product-img"></td>
                <td>Kahf Men Eau de Toilette Spray / Parfum Pria Semprot All Varian 100 ml</td>
                <td>Rp.135.000</td>
                <td>
                    <input type="number" value="" min="1" max="10">
                </td>
                <td>Rp.135.000</td>
                <td class="actions">
                    <button>Update</button>
                    <button>Hapus</button>
                </td>
            </tr>
            <!-- Tambahkan produk lainnya di sini -->
        </tbody>
    </table>

    <div class="total">
        <h3>Total: Rp.135.000</h3>
    </div>

    <a href="/beli" class="checkout-btn">Checkout</a>
</div>
<script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</body>
</html>
