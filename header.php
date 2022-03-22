<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>INCPRIN</title>
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans&display=swap" rel="stylesheet">
    <?php
    require('./admin/database.php');
    require('functions.php');
    $data = getAllData('inc_media', 'status');
    $media_urls = [];
    $i = 0;
    foreach ($data as $media) {
        $media_urls[$i] = $media['url'];
        $i++;
    }
    ?>
</head>

<body style="font-family: 'Work Sans', sans-serif;">

    <!-- Start: Nav Bar -->
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean" style="width: 100%;">
        <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                <span class="visually-hidden">Toggle navigation</span>
                <span class="navbar-toggler-icon"></span></button>
            <a class="navbar-brand" href="index.php">
                <img class="img-fluid" id="Logo" src="assets/img/Logo.jpg" loading="lazy">
            </a>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="navbar-nav ms-auto pulse animated">
                    <li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="market.php">Market</a></li>
                    <li class="nav-item"><a class="nav-link" href="tech.php">Technology</a></li>
                    <li class="nav-item"><a class="nav-link" href="product.php">Products</a></li>
                    <li class="nav-item"><a class="nav-link" href="sustainability.php">Sustainability</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav><!-- End: Nav Bar -->
</body>