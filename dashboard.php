<?php
include "core/auth.php";
?>

<link rel="stylesheet" href="assets/style.css">

<h2>Halo, <?=$_SESSION['user']?></h2>

<div class="card">
<form action="order.php" method="POST">
<input type="hidden" name="product" value="Panel Hosting Basic">
<button>Order Panel Hosting</button>
</form>
</div>

<a href="logout.php">Logout</a>
