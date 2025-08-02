<?php include './header.php'; ?>
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
<?php include './footer.php'; ?>