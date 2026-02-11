<?php
include "config/database.php";

if($_SERVER["REQUEST_METHOD"]=="POST"){
$username = $conn->real_escape_string($_POST['username']);
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);

$stmt = $conn->prepare("INSERT INTO users(username,password) VALUES(?,?)");
$stmt->bind_param("ss",$username,$password);
$stmt->execute();

echo "Register berhasil <a href='login.php'>Login</a>";
}
?>
<form method="POST">
<input name="username" placeholder="Username">
<input type="password" name="password" placeholder="Password">
<button>Register</button>
</form>
