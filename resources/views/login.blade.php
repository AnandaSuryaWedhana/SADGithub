<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel = "icon" href = "a.jpg" type = "image/x-icon">
    <link rel="stylesheet" href="login.css"/>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Audiowide">
    <title>Login</title>
</head>
<body>
    <div class="center">
        <h1>Login</h1>
        <form method="post">
            <div class="txt_field">
                <input type="text" required>
                <span></span>
                <label>Username</label>
            </div>
            <div class="txt_field">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="pass" href="{{ url('/forgotpassword') }}"><a href="{{ url('/forgotpassword') }}">Forgot Password?</a></div>
            <input type="submit" value="Login" id="submitBtn">
            <script>
            document.getElementById("submitBtn").addEventListener("click", login);
            function login() {
                window.location.href="href="{{ url('/home') }}"";
            }
            </script>
        </form>
    </div>
</body>
</html>
