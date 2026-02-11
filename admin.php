<?php
include "config/database.php";

$result = $conn->query("SELECT * FROM orders ORDER BY id DESC");

while($row=$result->fetch_assoc()){
echo "<div style='border:1px solid #444;padding:10px;margin:10px'>";
echo "User: ".$row['username']."<br>";
echo "Produk: ".$row['product']."<br>";
echo "Tanggal: ".$row['created_at']."<br>";
echo "</div>";
}
?>
