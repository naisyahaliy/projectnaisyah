<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
    <style>
        .logo img {
             width: 60px; 
             border-radius: 50%;
             height: auto; 
             margin: 20px 0;
        }
    </style>
</head>
<body>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}">
</head>
<body>
    <nav class="navbar navbar-expand-sm navbar-dark" style="background-color: rgb(177, 159, 138);">
        <div class="container-fluid">
            <div class="logo">
                <img src="{{ asset('images/logoo.jpg') }}" alt="logo">
            <a href="#" class="navbar-brand">Celestial Parfumes</a>
        </div>
    </nav>
    <div class="container">
        @if (Session::has('pesan'))
            <div class="alert alert-seccess">{{Session::get('pesan')}}</div>
        @endif
        <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card mt-5">
                    <div class="card-header text-center">
                        Login
                    </div>
                    <div class="card-body">
                        <form method="post" action="/auth">
                            @csrf
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                            </div>
                            <div class="form-group mt-1">
                                <label for="password">Password</label>
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password" name="password">
                            </div>
                            {{-- <input type="submit" value="Login" class="btn btn-secondary" /> --}}
                            <a href="/sudahlogin" class="btn btn" style="margin-left: 130px;background-color:rgb(177, 159, 138);">Login</a>
                            {{-- <form action="/sudahlogin" method="get">
                                @csrf
                                <div class="input-group">
                                    <button type="submit" class="btn-btn-primary" style="background-color: rgb(46, 58, 58); margin-left:40%; color:white;">Log In</button>
                                </div>
                            </form> --}}
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
<script src="{{ asset('asset/bootstrap/css/bootstrap.min.css')}}"></script>
</body>
</html>