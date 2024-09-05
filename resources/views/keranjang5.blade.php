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
                <td><img src="https://down-id.img.susercontent.com/file/dad99380769e370e7af0490d7cb3be85" alt="" class="product-img"></td>
                <td>Mitu Baby Cologne Sweet Pink Spray 100ml - Parfum Bayi</td>
                <td>Rp21.500</td>
                <td>
                    <input type="number" value="" min="1" max="10">
                </td>
                <td>Rp21.500</td>
                <td class="actions">
                    <button>Update</button>
                    <button>Hapus</button>
                </td>
            </tr>
            <!-- Tambahkan produk lainnya di sini -->
        </tbody>
    </table>

    <div class="total">
        <h3>Total: Rp21.500</h3>
    </div>

    <a href="/beli5" class="checkout-btn">Checkout</a>
</div>
<script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</body>
</html>
