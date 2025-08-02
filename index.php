<?php session_start();
if(isset($_POST['submit'])) {
    $email = $_POST['email'];
    $pwd = $_POST['pwd'];

    include './connection.php';
    sql = "SELECT id, email, password FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $sql);
    if($res -> num_rows > 0) {
        while($data = mysqli_fetch_assoc($res)){
            $hashedpwd = sha1($pwd);
            if($data['password'] == $hashedpwd) {
                $_SESSION['login_status'] = true;
                $_SESSION['msg'] = "Login Successful";
                header("location: ./home.php");
            } else {
                $_SESSION['msg'] = "Password not matched";
                header("location: ./index.php");
            }
        }
    } else {
        $_SESSION['msg'] = "Login Failed:";
        header("location: ./index.php");
    }
}


include './header.php'; ?>
    <form action="#" name="log_form">
        <div class="login_page">
            <h1>CCTV STORE</h1>
            <hr>
            <div class="login_user">
                <h2>Login</h2>
                <div class="field-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="Enter your email" value="">
                </div>
                <div class="field-group">
                    <label for="pwd">Password</label>
                    <input type="password" name="pwd" id="pwd" placeholder="Enter your password" value="">
                </div>
                <button type="submit">Login</button>
                <p>Don't have an account? <a href="./sign_up.html">Sign Up</a></p>
            </div>
        </div>
    </form>
<?php include './footer.php';
$_SESSION['msg'] = ' '; ?>