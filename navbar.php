<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css">

<link rel="stylesheet" href="style.css?v=<?php echo time(); ?>">
<title>My Store</title>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">

<a class="navbar-brand" href="index.php">
My Store
</a>

<button class="navbar-toggler"
type="button"
data-toggle="collapse"
data-target="#navbarNav">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="navbarNav">

<ul class="navbar-nav ml-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">Home</a>
</li>

<li class="nav-item">
<a class="nav-link" href="products.php">All Products</a>
</li>

<li class="nav-item">
<a class="nav-link" href="account.php">Account</a>
</li>

<li class="nav-item">
<a class="nav-link text-danger" href="logout.php">
Logout
</a>
</li>

</ul>

</div>

</nav>