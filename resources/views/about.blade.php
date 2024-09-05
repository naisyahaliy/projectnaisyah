<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
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
    </body>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: auto;
            overflow: hidden;
        }
        header {
            background: #333;
            color: #fff;
            padding-top: 30px;
            min-height: 70px;
            border-bottom: #0779e4 3px solid;
        }
        header a {
            color: #fff;
            text-decoration: none;
            text-transform: uppercase;
            font-size: 16px;
        }
        header ul {
            padding: 0;
            list-style: none;
        }
        header ul li {
            display: inline;
            padding: 0 20px 0 20px;
        }
        header #branding {
            float: left;
        }
        header #branding h1 {
            margin: 0;
        }
        section {
            padding: 20px 0;
        }
        .content {
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .content h2 {
            text-align: center;
            color: #333;
        }
        .content p {
            margin-bottom: 20px;
            color: #666;
            text-align: justify;
        }
        .content img {
            display: block;
            margin: 20px auto;
            max-width: 100%;
            border-radius: 8px;
        }
    </style>
</head>
<body>

    <section class="container">
        <div class="content">
            <h2 style="font-family: Georgia, 'Times New Roman', Times, serif">About</h2>
           <p style="margin-top: 50px">"Di Celestial Parfume, kami percaya bahwa setiap aroma
             menceritakan kisah yang unik.
             Terinspirasi oleh keindahan alam dan seni perfumery klasik, 
             kami menciptakan wewangian yang menghadirkan kenangan,
              emosi, dan pengalaman yang tak terlupakan. 
             Dengan bahan-bahan berkualitas tinggi dan proses pembuatan yang teliti,
              setiap botol parfum kami adalah simbol dari kemewahan dan keanggunan.
              Kami berdedikasi untuk memberikan Anda pengalaman olfaktori yang luar biasa,
             yang tidak hanya melengkapi penampilan Anda, 
              tetapi juga mengekspresikan kepribadian Anda."</p>
        </div>
    </section>

    

    <script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>
