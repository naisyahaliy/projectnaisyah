<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Confirmation</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: rgb(177, 159, 138);
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header h1 {
            color: #333;
        }
        .order-details {
            margin-bottom: 30px;
        }
        .order-details h2 {
            color: #555;
        }
        .order-details p {
            margin: 5px 0;
            color: #666;
        }
        .order-items {
            margin-bottom: 30px;
        }
        .order-items table {
            width: 100%;
            border-collapse: collapse;
        }
        .order-items th, .order-items td {
            padding: 10px;
            border: 1px solid #ddd;
            text-align: left;
        }
        .order-items th {
            background-color: #f8f8f8;
        }
        .total {
            text-align: right;
            font-size: 1.2em;
            color: #333;
        }
        .thank-you {
            text-align: center;
            margin-top: 40px;
            font-size: 1.5em;
            color: #333;
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
        <div class="header">
            <h1 style="font-family: 'Courier New', Courier, monospace">Thank You for Your Purchase!</h1>
        </div>

        <div class="order-details">
            <h2>Order Details</h2>
            <p>Order Number: #987654311</p>
            <p>Order Date: September 6 2024</p>
            <p>Payment Method: COD</p>
        </div>

        <div class="order-items">
            <h2>Items Ordered</h2>
            <table>
                <thead>
                    <tr>
                        <th>Item</th>
                        <th>Quantity</th>
                        <th>Price</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- <tr>
                        <td>Gundam Model RX-78-2</td>
                        <td>1</td>
                        <td>$45.00</td>
                        <td>$45.00</td>
                    </tr> --}}
                    <tr>
                        <td>Mitu Baby Cologne Sweet Pink Spray 100ml - Parfum Bayi</td>
                        <td>1</td>
                        <td>Rp21.500</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="total">
            <p>Subtotal:Rp21.500 </p>
            <p>Shipping: Rp.5.000</p>
            <p><strong>Total: Rp26.500</strong></p>
        </div>

        <div class="thank-you">
            <p>Your order will be shipped soon. You will receive a confirmation email with the tracking details.</p>
        </div>
    </div>
    <script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>
