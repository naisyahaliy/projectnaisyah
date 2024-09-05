<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        header h1 {
            margin: 0;
        }
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        .cart-table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
            background-color: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .cart-table th, .cart-table td {
            padding: 15px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }
        .cart-table th {
            background-color: #f4f4f4;
        }
        .cart-table img {
            width: 100px;
            border-radius: 8px;
        }
        .cart-item-title {
            font-size: 18px;
            color: #333;
        }
        .cart-item-price, .cart-item-quantity, .cart-item-total {
            font-size: 16px;
            color: #666;
        }
        .cart-item-quantity input {
            width: 50px;
            padding: 5px;
            text-align: center;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        .cart-summary {
            text-align: right;
            margin-top: 20px;
        }
        .cart-summary h3 {
            font-size: 22px;
            color: #333;
        }
        .cart-summary p {
            font-size: 18px;
            color: #777;
        }
        .checkout-btn {
            display: inline-block;
            margin-top: 10px;
            padding: 10px 20px;
            background-color: #28a745;
            color: #fff;
            text-decoration: none;
            border-radius: 4px;
        }
        .checkout-btn:hover {
            background-color: #218838;
        }
        footer {
            background-color: #333;
            color: #fff;
            padding: 10px 0;
            text-align: center;
            margin-top: 40px;
        }
    </style>
</head>
<body>

<div class="container">

    <table class="cart-table">
        <thead>
            <tr>
                <th>Product</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <img src="https://down-id.img.susercontent.com/file/dad99380769e370e7af0490d7cb3be85" alt="Product 4">
                    <span class="cart-item-title">Mitu Baby Cologne Sweet Pink Spray 100ml - Parfum Bayi</span>
                </td>
                <td class="cart-item-price">Rp21.500</td>
                <td class="cart-item-quantity"><input type="number" value="1"></td>
                <td class="cart-item-total">Rp21.500</td>
            </tr>
            {{-- <tr>
                <td>
                    <img src="product-image2.jpg" alt="Product 2">
                    <span class="cart-item-title">Product Name 2</span>
                </td>
                <td class="cart-item-price">$25.00</td>
                <td class="cart-item-quantity"><input type="number" value="2"></td>
                <td class="cart-item-total">$50.00</td>
            </tr> --}}
        </tbody>
    </table>

    <div class="cart-summary">
        <h3>Total: Rp21.500</h3>
        <p>Ongkos Kirim: Rp.5.000</p>
        <h3>Total Semua: Rp26.500</h3>
        <a href="/transaksi5" style="background-color: rgb(177, 159, 138);" class="checkout-btn">Checkout</a>
    </div>

</div>

<footer style="margin-top: 10%; background-color: rgb(177, 159, 138);"">
    <p>&copy; 2024 Celestial Perfumes. All Rights Reserved.</p>
        <p>Hubungi kami: CelParfume@gmail.com | +62 123 4567</p>
        <p>
            <a href="#">Kebijakan Privasi</a> | 
            <a href="#">Syarat & Ketentuan</a>
        </p>
</footer>
<script src="{{ asset('asset/bootstrap/js/bootstrap.min.js')}}"></script>
</body>
</html>
