<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>INCPRIN</title>
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">
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
    <div class="row text-nowrap d-none d-md-flex align-items-start" style="text-align: left;width: 100%;margin: 0px;height: 50px;">
        <div class="col-6" style="background: black;padding-left: 30px;">
            <div class="row">
                <div class="col">
                    <button class="btn btn-primary" type="button" id="media-icon" onclick="window.open('<?php echo $media_urls[0]; ?>')">
                        <i class="fa fa-facebook" style="color: #7ee050;"></i>
                    </button>

                    <button class="btn btn-primary" type="button" id="media-icon" onclick="window.open('<?php echo $media_urls[1]; ?>')">
                        <i class="fa fa-twitter" style="color: #7ee050;"></i>
                    </button>

                    <button class="btn btn-primary" type="button" id="media-icon" onclick="window.open('<?php echo $media_urls[2]; ?>')">
                        <i class="fa fa-instagram" style="color: #7ee050;"></i>
                    </button>

                    <button class="btn btn-primary" type="button" id="media-icon" onclick="window.open('<?php echo $media_urls[3]; ?>')">
                        <i class="fa fa-linkedin" style="color: #7ee050;"></i>
                    </button>

                    <button class="btn btn-primary" type="button" id="media-icon" onclick="window.open('<?php echo $media_urls[4]; ?>')">
                        <i class="fa fa-youtube-play" style="color: #7ee050;"></i>
                    </button>

                </div>
            </div>
        </div>
        <div class="col-6 d-sm-flex d-md-flex justify-content-end" style="background: black;padding-top: 12px; height:100%">
            <div class="row align-items-center">
                <div class="col align-self-baseline">
                    <!-- Start: Nav1ContactInfo -->
                    <p class="text-end justify-content-center" id="Nav1ContactInfoPara" style="padding: 0;color: white;font-weight: bold;margin: 0;padding-right: 20px;">
                        <a href="contact.php" style="text-decoration: none; color: white">
                            <i class="fas fa-phone-volume"></i><span style="padding-left: 6px;"></span>Contact Us Now !!!
                        </a>
                    </p>
                    <!-- End: Nav1ContactInfo -->
                </div>
            </div>

        </div>
    </div><!-- Start: Nav Bar -->
    <nav class="navbar navbar-light navbar-expand-md sticky-top navigation-clean" style="width: 100%;">
        <div class="container-fluid"><button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1"><span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span></button><a class="navbar-brand" href="index.php"><img class="img-fluid" id="Logo" src="assets/img/Logo.jpg?h=3c2207f664b0bcc0ace0c4b27272697d" loading="lazy"></a>
            <div class="collapse navbar-collapse" id="navcol-1" style="font-weight: bold;">
                <ul class="navbar-nav ms-auto pulse animated">
                    <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="market.php">Market</a></li>
                    <li class="nav-item"><a class="nav-link" href="technology.php">Technology</a></li>
                    <li class="nav-item"><a class="nav-link" href="sustainability.php">Sustainability</a></li>
                    <li class="nav-item"><a class="nav-link" href="about.php">About Us</a></li>
                    <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav><!-- End: Nav Bar -->
</body>