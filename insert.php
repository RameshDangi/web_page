<?php session_start();
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $addr = $_POST['addr'];
    $pwd = $_POST['pwd'];
    $cpwd = $_POST['cpwd'];

    if($pwd == $cpwd) {
        include './connection.php';
        $sql = "INSERT INTO users (email, address, password)
        VALUES ('$email', '$addr', '$pwd')";
        $res = mysqli_query($conn, $sql);
        if($res) {
            $_SESSION['msg'] = "User registration successfull";
            header("location: ./login.php");
        }else {
            $_SESSION['msg'] = "User registration failed";
            header("location: ./sign_up.php");
        }
    } else {
        $_SESSION['msg'] = "Password not matched";
        header("location: ./sign_up.php");
    } 
}
header("locatoin: ./list.php");