<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" href="./public/style.css">
</head>
<body>
    <form action="./insert.php" name="log_form">
        <div class="login_page">
            <h1>CCTV STORE</h1>
            <hr>
            <div class="login_user">
                <h2>Sign In</h2>
                <div class="field-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" value="">
                </div>
                <div class="field-group">
                    <label for="addr">Address</label>
                    <input type="text" name="addr" id="addr" placeholder="Enter your address">
                </div>
                <div class="field-group">
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd" placeholder="Enter your password" value="">
                </div>
                <div class="field-group">
                    <label for="cpwd">Conform Password</label>
                    <input type="password" name="cpwd" id="cpwd" placeholder="Rewrite password" value="">
                </div>
                <button type="submit">Sign In</button>
                <p>Don't have an account? <a href="./login.html">Login</a></p>
            </div>
        </div>
    </form>
    <script src="./public/script.js"></script>
</body>
</html>