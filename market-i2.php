<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>INCPRIN</title>
    <?php include('header.php'); ?>
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
<?php
if (!isset($_GET['p_id'])) {
    echo "<script>
        window.location.assign('market.php');
        </script>";
} else {
    $p_id = $_GET['p_id'];
    $page = getAllDataC('inc_page', 'pg_status', 'AND pg_id = 2 ');
    $p_Details = getAllDataC('inc_product', 'product_status', 'AND product_id =' . $p_id);
    $p_gallery = getAllDataC1('inc_gallery', 'photo_status', 'AND product_id =' . $p_id . ' AND pg_typ=0');
    $p_feature = getAllDataC1('inc_features', 'feature_status', 'AND product_id =' . $p_id . ' AND pg_typ=0');
    $p_service = getAllDataC1('inc_product', 'product_status', 'AND service_id =' . $p_Details['service_id']);
}
?>

<body>
    <!-- Start: Parallax Background -->
    <div data-bss-parallax-bg="true" style="height: 300px;background-image: url(<?php echo $page['pg_banner'];?>);background-position: center;background-size: cover;"></div><!-- End: Parallax Background -->
    <hr><!-- Start: Entire Page -->
    <div class="container">
        <div class="row">
            <!-- Start: SideBar -->
            <div class="col-2 d-none d-md-inline" style="padding-top: 8px;">
                <h5 style="text-align: center;font-weight: bold;">Other Products</h5>
                <ul>
                    <?php foreach ($p_service as $p_s) :
                        if ($p_id == $p_s['product_id']) {
                            continue;
                        } ?>
                        <li style="color: #2d2d2d;padding-top: 10px;"><a href="market-i2.php?p_id=<?php echo $p_s['product_id']; ?>" style="color: #2d2d2d;"><?php echo $p_s['product_title']; ?></a></li>
                    <?php endforeach; ?>
                </ul>
            </div><!-- End: SideBar -->
            <!-- Start: MainContent -->
            <div class="col">
                <div class="row">
                    <!-- Start: Content -->
                    <div class="col">
                        <h1 style="font-family: Lora, serif;"><?php echo $p_Details['product_title']; ?></h1>
                        <p><br><?php echo $p_Details['product_desc']; ?><br><br></p>

                    </div><!-- End: Content -->
                </div>
            </div><!-- End: MainContent -->
        </div>
    </div><!-- End: Entire Page -->
    <!-- Start: Gallery -->
    <section class="photo-gallery">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">Product Show-Case</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula.</p>
            </div><!-- End: Intro -->
            <!-- Start: Photos -->
            <div class="row photos" data-bss-baguettebox="">
                <?php foreach ($p_gallery as $p_g) : ?>
                    <div class="col-sm-6 col-md-4 col-lg-3 item"><a href="<?php echo $p_g['file_url']; ?>"><img class="img-fluid" src="<?php echo $p_g['file_url']; ?>"></a></div>
                <?php endforeach; ?>
            </div><!-- End: Photos -->
        </div>
    </section><!-- End: Gallery -->
    <!-- Start: Features Clean -->
    <section class="features-clean">
        <div class="container">
            <!-- Start: Intro -->
            <div class="intro">
                <h2 class="text-center">More Information</h2>
                <p class="text-center">Nunc luctus in metus eget fringilla. Aliquam sed justo ligula. Vestibulum nibh erat, pellentesque ut laoreet vitae. </p>
            </div><!-- End: Intro -->
            <!-- Start: Features -->
            <div class="row features">
                <?php foreach ($p_feature as $p_f) : ?>
                    <div class="col-sm-6 col-lg-4 item" style="padding-left: 0px;">
                        <h3 class="name"><?php echo $p_f['features_title']; ?></h3>
                        <p class="description"><?php echo $p_f['feature_desc']; ?></p>
                    </div>
                <?php endforeach; ?>
            </div><!-- End: Features -->
        </div>
    </section><!-- End: Features Clean -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js?h=2bf886d83119376f4bad144253b6de8f"></script>
</body>
<?php include('footer.php'); ?>

</html>