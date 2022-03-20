<!DOCTYPE html>
<html lang="en">
<?php include('header.php'); ?>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>INCPRIN</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css?h=ef9efa29ed5490562c2ff272112d2e97">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=74455aae2904cb41e263ed78a2efed83">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
</head>

<body style="font-family: 'Work Sans', sans-serif;">
    <?php
    if (!isset($_GET['s_id'])) {
        echo "<script>
        window.location.assign('market.php');
        </script>";
    } else {
        $s_id = $_GET['s_id'];
        $s_Details = getAllDataC('inc_service', 'service_status', 'AND service_id =' . $s_id);
        $p_Details = getAllDataC1('inc_product', 'product_status', 'AND service_id =' . $s_id);
        $p_gallery = getAllDataC1('inc_gallery', 'photo_status', 'AND product_id =' . $s_id . ' AND pg_typ = 2');
    }
    ?>

    <div class="row align-items-center justify-content-center py-5" width="100%" style="background: rgb(12,17,39);min-height:500px">
        <div class="col-md-6 col-12 px-5">
            <h2 class="text-center text-white"><?php echo $s_Details['service_name']; ?></h2>
            <p class="text-center" style="color: white; font-size: 15px;"><?php echo strip_tags($s_Details['service_desc']); ?></p>
        </div>
        <div class="col-lg-6 col-12 px-5">
            <img class="img-fluid" src="<?php echo $s_Details['service_img']; ?>" width="100%" style="border: none; border-radius:10%">
        </div>

    </div>
    <?php
    if (mysqli_num_rows($p_gallery) > 0) {
    ?>
        <!-- Start: Gallery -->
        <section class="photo-gallery">
            <div class="container">
                <!-- Start: Intro -->
                <div class="intro">
                    <h2 class="text-center">Product Show-Case</h2>
                </div><!-- End: Intro -->
                <!-- Start: Photos -->
                <div class="row photos align-items-center justify-content-center" data-bss-baguettebox="">
                    <?php foreach ($p_gallery as $p_g) : ?>
                        <div class="col-sm-6 col-md-4 col-lg-3 item ">
                            <a href="<?php echo $p_g['file_url']; ?>">
                                <img class="img-fluid" height="100px" width="200px" src="<?php echo $p_g['file_url']; ?>">
                            </a>
                        </div>
                    <?php endforeach; ?>
                </div><!-- End: Photos -->
            </div>
        </section><!-- End: Gallery -->
    <?php } ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js?h=2bf886d83119376f4bad144253b6de8f"></script>
</body>
<?php include('footer.php'); ?>

</html>