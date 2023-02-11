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
</html> --}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>||||</title>
</head>
<body>
<form action="{{ url('user/auth') }}" method="post">
    <table>
        @csrf
        <tr>
            <td>Email :</td>
            <td><input type="email" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Password :</td>
            <td><input type="password" name="password" id="password"></td>
        </tr>
        <tr>
            <td><input type="submit" value="Login" name="login"></td>
        </tr>
    </table>
</form>
</body>
</html>
