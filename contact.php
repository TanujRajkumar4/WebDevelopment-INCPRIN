<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>INCPRIN</title>
    <?php include('header.php'); ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=sans-serif">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css?h=ef9efa29ed5490562c2ff272112d2e97">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
</head>

<body>
    <!-- Start: Parallax Background -->
    <div data-bss-parallax-bg="true" style="height: 300px;background-image: url(https://unsplash.it/1800/900?image=1051);background-position: center;background-size: cover;"></div><!-- End: Parallax Background -->
    <hr><!-- Start: Map Clean -->
    <section class="text-center map-clean">
        <div class="container justify-content-xxl-end align-items-xxl-center">
            <!-- Start: Intro -->
            <div class="intro">
                <h1 class="text-center" style="font-family: sans-serif, serif;color: #212529;">Location </h1>
            </div><!-- End: Intro -->
        </div><iframe allowfullscreen="" frameborder="0" loading="lazy" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3886.8341074864657!2d80.15331041473628!3d13.046229316766413!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5261eed68c5a7b%3A0xac789ce8625b534a!2s133%2F2%2F95%2C%20Krishna%20Ind.%20Estate%2C%20Sunaresan%20Nagar%2C%20Porur%20Gardens%20Phase%20II%2C%20Mettukuppam%2C%20Vanagaram%2C%20Chennai%2C%20Tamil%20Nadu%20600095!5e0!3m2!1sen!2sin!4v1639815874682!5m2!1sen!2sin" width="80%" height="450"></iframe>
    </section><!-- End: Map Clean -->
    <hr><!-- Start: 1 Row 2 Columns -->
    <div class="container">
        <div class="row row-cols-1 row-cols-md-2">
            <div class="col">
                <h1 class="text-center" style="padding-bottom: 50px;padding-top: 50px;font-weight: bold;font-family: sans-serif, serif;color: #212529;">Contact Us</h1>
                <div class="row" style="padding-top: 10px;">
                    <p class="text-start" style="font-size: 20px;"><strong>INCPRIN LABELS AND PACKAGING SOLUTIONS PRIVATE LIMITED</strong></p>
                    <div class="col-auto text-start" style="padding-right: 5px;"><i class="fa fa-map-marker" style="color: #60a042;font-size: 30px;padding-right: 26px;"></i></div>
                    <div class="col-auto text-start" style="padding-left: 0px;">
                        <p class="text-start" style="font-size: 18px;">133/2, Krishna Industrial Estate,<br>
                                Mettukuppam,
                                Vanagaram,<br>
                                Chennai - 600095.<br>
                                Tamil Nadu, India..</p>
                    </div>
                </div>
                <div class="row" style="padding-top: 10px;">
                    <div class="col-auto" style="padding-right: 5px;"><i class="fa fa-phone" style="color: #60a042;font-size: 30px;padding-right: 26px;"></i></div>
                    <div class="col-auto" style="padding-left: 0px;">
                        <p class="text-start" style="font-size: 18px;">+91 91500 72140, +91 91500 72135 </p>
                    </div>
                </div>
                <div class="row" style="padding-top: 10px;">
                    <div class="col-auto" style="padding-right: 5px;"><i class="fa fa-envelope" style="color: #60a042;font-size: 30px;padding-right: 26px;"></i></div>
                    <div class="col-auto" style="padding-left: 0px;">
                        <p class="text-start" style="font-size: 18px;">cs01@incprin.com, cs02@incprin.com</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <!-- Start: Contact Form -->
                <section class="contact-clean" style="background: rgb(255,255,255);padding-top: 0px;" id="c">
                    <form method="POST" action="mailer.php" name="sendmail">
                        <h2 class="text-center" style="color: rgb(12,17,39);">Contact us</h2>
                        <div class="mb-3"><input class="form-control" type="text" name="name" placeholder="Name" required></div>
                        <div class="mb-3"><input class="form-control" type="email" name="email" placeholder="Email" style="background: rgb(255,255,255);" required></div>
                        <div class="mb-3"><input class="form-control" type="tel" name="phone" placeholder="Phone" style="background: rgb(255,255,255);" required></div>
                        <div class="mb-3"><textarea class="form-control" name="message" placeholder="Message" rows="14" required></textarea></div>
                        <div class="mb-3"><button class="btn" type="submit" name="sendmail" style="background: rgb(12,17,39);color: rgb(255,255,255);">send </button></div>
                    </form>
                </section><!-- End: Contact Form -->
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js?h=2bf886d83119376f4bad144253b6de8f"></script>
</body>
<?php include('footer.php'); ?>

</html>