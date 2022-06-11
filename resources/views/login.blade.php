<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
    <link rel="stylesheet" href="css/login.css"/>
    <title>Login</title>
</head>
<body>

    <div class="center">
        <h1>Login</h1>
        <form action="/loginuser" method="POST">
            @csrf
            <div class="txt_field">
                <input type="text" name="username" required>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" name="password" required>
                <label>Password</label>
            </div>
            <input type="submit" value="Login" id="submitBtn">
        </form>
        @if (Session::get('fail'))
            <div class="container alert alert-danger alert-dismissible fade show mb-4 mt-3" role="alert">
                {{ Session::get('fail') }}
            </div>
        @endif
    </div>
</body>
</html>
