<?php
include 'db.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = mysqli_query($conn,
    "SELECT * FROM users WHERE username='$username'");

    $user = mysqli_fetch_assoc($result);

    if($user && password_verify($password,$user['password'])){
        $_SESSION['user'] = $username;
        header("Location:index.php");
    }else{
        echo "Invalid Login";
    }
}
?>

<form method="POST">
    Username:<br>
    <input type="text" name="username"><br>

    Password:<br>
    <input type="password" name="password"><br><br>

    <button name="login">Login</button>
</form>