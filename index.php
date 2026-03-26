<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Zahra Portfolio</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;700;800&display=swap" rel="stylesheet">

<link rel="stylesheet" href="style.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg fixed-top glass-nav">
<div class="container">
<a class="navbar-brand text-white fw-bold" href="#">Zara Page</a>

<button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse justify-content-end" id="menu">
<ul class="navbar-nav">
<li class="nav-item"><a class="nav-link text-white" href="#home">Home</a></li>
<li class="nav-item"><a class="nav-link text-white" href="#about">About</a></li>
<li class="nav-item"><a class="nav-link text-white" href="#projects">Projects</a></li>
<li class="nav-item"><a class="nav-link text-white" href="#certificates">Certificates</a></li>
</ul>
</div>
</div>
</nav>

<!-- HERO -->
<section id="home" class="hero-editorial">

<div class="big-text">PORTFOLIO</div>

<div class="container hero-content">
<div class="row align-items-center">

<div class="col-md-4 hero-left">
<h1 class="year-text">2026</h1>
</div>

<div class="col-md-4 text-center">
<img src="images/zara.png" class="zara">
</div>

<div class="col-md-4 hero-right">

<h2 class="hero-name">
Zahra Aulia Rahmah
</h2>

<p class="hero-desc">
Hai semuanya, aku Zara, seorang mahasiswa yang memiliki semangat belajar tinggi dan tertarik pada bidang teknologi.
</p>

<a href="#about" class="btn btn-baby mt-3">
Explore More
</a>

</div>
</div>
</div>

</section>

<!-- ABOUT -->
<section id="about" class="py-5 bg-white">

<div class="container">

<h2 class="text-center section-title mb-5">
About Me
</h2>

<div class="row align-items-center">

<div class="col-md-6">

<img src="images/laptop.jpg"
class="img-fluid rounded-4 shadow">

</div>

<div class="col-md-6">

<p class="about-text">
Sebagai mahasiswi Sistem Informasi, ini sebuah progress dan saya masih banyak belajar tentang pemrograman dan desain.
</p>

<?php

$query = mysqli_query($conn, "SELECT * FROM skill");

echo "<br>Jumlah data: " . mysqli_num_rows($query) . "<br>";

while ($row = mysqli_fetch_assoc($query)) {

?>

<label>
<?php echo $row['name']; ?>
</label>

<div class="progress mb-3">

<div class="progress-bar bg-info"
style="width: <?php echo $row['level']; ?>%;">

<?php echo $row['level']; ?>%

</div>

</div>

<?php } ?>

</div>
</div>
</div>

</section>

<!-- PROJECTS -->
<section id="projects" class="py-5 gradient-bg">

<div class="container">

<h2 class="text-center text-white mb-5">
Zara Projects
</h2>

<div class="row g-4">

<?php

$query = mysqli_query($conn, "SELECT * FROM project");

while($row = mysqli_fetch_assoc($query)){

?>

<div class="col-md-4">

<div class="card project-card h-100">

<img src="images/<?php echo $row['image']; ?>"
class="card-img-top">

<div class="card-body">

<h5>
<?php echo $row['title']; ?>
</h5>

<p>
<?php echo $row['description']; ?>
</p>

</div>

</div>

</div>

<?php } ?>

</div>
</div>

</section>

<!-- CERTIFICATES -->
<section id="certificates" class="py-5 bg-white">

<div class="container">

<h2 class="text-center section-title mb-5">
Certificates
</h2>

<div class="row g-4">

<?php

$query = mysqli_query($conn, "SELECT * FROM certificates");

while($row = mysqli_fetch_assoc($query)){

?>

<div class="col-md-3">

<div class="card cert-card text-center h-100">

<img src="images/<?php echo $row['image']; ?>"
class="card-img-top">

<div class="card-body">

<h6>
<?php echo $row['title']; ?>
</h6>

<small class="text-muted">
<?php echo $row['year']; ?>
</small>

</div>

</div>

</div>

<?php } ?>

</div>
</div>

</section>

<footer class="text-center py-4 gradient-bg text-white">
© Zahra Aulia Rahmah
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>