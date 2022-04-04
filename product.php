<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>INCPRIN</title>
    <?php include('header.php');
    ?>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=sans-serif">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,700&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css">
    <link rel="stylesheet" href="assets/css/styles.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=sans-serif">
</head>

<body style="min-height: 500px;">
    <?php
    // $markets = getAllData('inc_service', 'service_status');
    $markets = getAllDataC1('inc_service', 'service_status', 'AND `service_type` = 2');

    $page = getAllDataC('inc_page', 'pg_status', 'AND pg_id = 6');

    ?>

    <!-- Start: Parallax Background -->
    <div class="banner-fixed banner-dyn" style="background-image: url('<?php echo $page['pg_banner']; ?>');"></div>
    <!-- End: Parallax Background -->
    <!-- Start: Market1 -->
    <section class="article-dual-column" width="100%">
        <div class="container-md">
            <div class="row justify-content-center align-items-center w-100" style="width: 100%;padding: 15px;">
                <?php $i = 1;
                foreach ($markets as $market) :
                ?>
                    <!-- MARKET ROW1 - START -->
                    <div class="col-12 col-md-6 col-lg-4 px-3 py-3" >
                        <div class="flip-card">
                            <div class="flip-card-inner">
                                <div class="flip-card-front">
                                    <img src="<?php echo $market['service_img']; ?>" width="300px" height="200px">
                                </div>
                                <div class="flip-card-back px-2 py-2">
                                    <div class="row align-items-center justify-content-center">
                                        <div class="col-12 align-self-center">
                                            <p style="font-size: 18px;"><?php echo trim(strip_tags($market['service_name'])); ?></p>
                                        </div>
                                        <div class="col-12 align-self-center">
                                            <p class="text-center text-white"><?php echo substr(trim(strip_tags($market['service_desc'])), 0, 150); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- MARKET ROW1 - END -->
                <?php
                endforeach; ?>
            </div>
        </div>
    </section><!-- End: Market1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js?h=2bf886d83119376f4bad144253b6de8f"></script>
</body>

</html>
<?php include('footer.php'); ?>