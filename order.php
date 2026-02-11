<?php
include "config/database.php";
include "core/auth.php";

$product = $_POST['product'];
$username = $_SESSION['user'];

$stmt = $conn->prepare("INSERT INTO orders(username,product) VALUES(?,?)");
$stmt->bind_param("ss",$username,$product);
$stmt->execute();

/* TELEGRAM NOTIFICATION */
$botToken = "8123712056:AAF_G7YZqvmLO0lvu8WGsHlBVUhjipDb6t0";
$chatID   = "6929624375";

$message = "Order Baru!\nUser: $username\nProduk: $product";

file_get_contents("https://api.telegram.org/bot$botToken/sendMessage?chat_id=$chatID&text=".urlencode($message));

echo "Order berhasil! Admin sudah menerima notifikasi.";
?>
