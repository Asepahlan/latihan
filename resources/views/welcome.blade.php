{{-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>login</title>
</head>
<body>
    <form action="{{ url('user/auth') }}" method="post">
    @csrf

    Email: <input type="email" name="email" id="email"><br>
    Password: <input type="password" name="password" id="password"><br>
    <input type="submit" value="Login" name="login">
    </form>
</body>
</html>
{{--  --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login | Dasboard</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="stylesheet" href="../assets/plugins/fontawesome-free/css/all.min.css">
    <link rel="stylesheet" href="../assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">

    <div class="login-box">
        <div class="card card-outline card-primary">
            <div class="card-header text-center">
                <a href="" class="h1"><b>PWPB</b></a>
            </div>
            <div class="card-body">
                <form action="{{ url('user/auth') }}" method="post">
                    @csrf
                    <div class="input-group mb-3">
                        <!-- Username -->
                        <input type="email" class="form-control" placeholder="email" autocomplete="off" name="email" id="email">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-envelope"></span>
                            </div>
                        </div>
                    </div>
                    <div class="input-group  mb-3">
                        <!-- Password -->
                        <input type="password" class="form-control" placeholder="Password" autocomplete="off" name="password" id="password">
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-lock"></span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-3 mb-3">
                        <button type="submit" class=" btn btn-primary btn-block mt-3">Login</button>
                    </div>
                    <hr>
                    <p class="mb-1 text-center">
                        <a href="#">Lupa Password</a>
                    </p>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
