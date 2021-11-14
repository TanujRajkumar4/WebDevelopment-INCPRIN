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

<body>
    <?php
    if (!isset($_GET['s_id'])) {
        echo "<script>
        window.location.assign('market.php');
        </script>";
    } else {
        $s_id = $_GET['s_id'];
        $s_Details = getAllDataC('inc_service', 'service_status', 'AND service_id =' . $s_id);
        $p_Details = getAllDataC1('inc_product', 'product_status', 'AND service_id =' . $s_id);
    }
    ?>
    <!-- Start: Header -->
    <header class="header-blue" style="background: rgb(12,17,39);padding-bottom: 10px;padding-top: 10px;">
        <div class="container hero" style="margin-top: 0px;">
            <div class="row">
                <!-- Start: Text -->
                <div class="col-12 col-lg-6 col-xl-5 offset-xl-1 align-self-center text-center">
                    <h1><?php echo $s_Details['service_name']; ?></h1>
                    <p><?php echo $s_Details['service_desc']; ?></p>
                </div><!-- End: Text -->
                <div class="col-md-5 col-lg-5 offset-lg-1 offset-xl-0 text-center d-none d-lg-block align-self-center">
                    <!-- Start: iPhone -->
                    <div class="phone-mockup"><img class="" src="<?php echo $s_Details['service_img']; ?>" height="100%">
                        <div class="screen"></div>
                    </div><!-- End: iPhone -->
                </div>
            </div>
        </div>
    </header><!-- End: Header -->
    <?php
    $i = 1;
    foreach ($p_Details as $p) :
        if ($i % 2 != 0) { ?>
            <!-- Start: ContentDiv1 -->
            <div class="container" id="content-div-1" style="padding-top: 12px;padding-bottom: 12px;">
                <div class="row" data-bss-disabled-mobile="true" data-aos="fade" data-aos-once="true">
                    <div class="col-md-12">
                        <h1 class="text-center"><br><strong><?php echo $p['product_title']; ?></strong><br><br></h1>
                    </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 align-items-center">
                    <div class="col" data-bss-disabled-mobile="true" data-aos="slide-right" data-aos-once="true">
                        <?php if ($p['pr_ban_typ'] == 1) { ?>
                            <video width="100%" height="315" muted="" loop="" autoplay="" style="border-radius: 60px;border-width: 6px;border-color: rgba(33,37,41,0);border-top-color: rgb(33);border-right-color: 37;border-bottom-color: 41;border-left-color: 37;">
                                <source src="<?php echo $p['product_img']; ?>" type="video/mp4">
                            </video>
                        <?php } else {
                        ?>
                            <img width="100%" src="<?php echo $p['product_img']; ?>">
                        <?php } ?>
                    </div>
                    <div class="col" data-bss-disabled-mobile="true" data-aos="slide-left" data-aos-once="true">
                        <p style="margin-bottom: 0px;"><br><?php echo $p['product_desc']; ?></p>
                        <a href="market-i2.php?p_id=<?php echo $p['product_id']; ?>">Read More</a>
                    </div>
                </div>
            </div><!-- End: ContentDiv1 -->
        <?php } else { ?>
            <!-- Start: ContentDiv2 -->
            <div class="container" id="content-div-2" style="background: #0c1127;border-radius: 50px;margin-bottom: 20px;padding-bottom: 20px;padding-top: 20px;padding-right: 20px;padding-left: 20px;">
                <div class="row" data-bss-disabled-mobile="true" data-aos="fade" data-aos-once="true">
                    <div class="col-md-12">
                        <h1 class="text-center" style="color: rgb(255,255,255)!important;"><br><strong><?php echo $p['product_title']; ?></strong><br><br></h1>
                    </div>
                </div>s
                <div class="row row-cols-1 row-cols-md-2 align-items-center">
                    <div class="col" data-bss-disabled-mobile="true" data-aos="slide-right" data-aos-once="true">
                        <?php if ($p['pr_ban_typ'] == 1) { ?>
                            <video width="100%" height="315" muted="" loop="" autoplay="" style="border-radius: 60px;border-width: 6px;border-color: rgba(33,37,41,0);border-top-color: rgb(33);border-right-color: 37;border-bottom-color: 41;border-left-color: 37;">
                                <source src="<?php echo $p['product_img']; ?>" type="video/mp4">
                            </video>
                        <?php } else {
                        ?>
                            <img width="100%" src="<?php echo $p['product_img']; ?>">
                        <?php } ?>

                    </div>
                    <div class="col" data-bss-disabled-mobile="true" data-aos="slide-left" data-aos-once="true">
                        <p style="color: rgb(255,255,255);"><br><?php echo $p['product_desc']; ?><br><br></p>
                        <a href="market-i2.php" style="color: rgb(255,255,255);">Read More</a>
                    </div>
                </div>
            </div><!-- End: ContentDiv2 -->
    <?php }
        $i++;
    endforeach; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js?h=2bf886d83119376f4bad144253b6de8f"></script>
</body>
<?php include('footer.php'); ?>

</html>