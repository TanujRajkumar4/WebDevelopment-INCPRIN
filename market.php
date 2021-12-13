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
    <link rel="stylesheet" href="assets/fonts/fontawesome5-overrides.min.css?h=ef9efa29ed5490562c2ff272112d2e97">
    <link rel="stylesheet" href="assets/css/styles.min.css?h=74455aae2904cb41e263ed78a2efed83">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=sans-serif">
</head>

<body>
    <?php
    $markets = getAllData('inc_service', 'service_status');
    $page = getAllDataC('inc_page', 'pg_status', 'AND pg_id = 2 ');

    ?>
    <!-- Start: Parallax Background -->
    <div data-bss-parallax-bg="true" style="height: 300px;background: url(<?php echo $page['pg_banner']; ?>) center / cover;"></div><!-- End: Parallax Background -->
    <hr>
    <h1 class="text-center" style="font-family:sans-serif;color: #56585b;">MARKETS</h1>
    <hr><!-- Start: Market1 -->
    <section class="article-dual-column">
        <div class="container-md">
            <?php $i = 1;
            foreach ($markets as $market) :
                if ($i % 2 != 0) {
            ?>

                    <!-- MARKET ROW1 - START -->
                    <div class="row row-cols-1 row-cols-md-2 justify-content-center align-items-center justify-content-sm-center justify-content-md-start" style="width: 100%;padding: 15px;">
                        <!-- Start: Image -->
                        <div class="col">
                            <div class="toc"><img src="<?php echo $market['service_img']; ?>" width="100%"></div>
                        </div><!-- End: Image -->
                        <!-- Start: Text -->
                        <div class="col">
                            <!-- Start: Text -->
                            <div class="text">
                                <h3><?php echo $market['service_name']; ?></h3>
                                <p class="text-start">
                                    <?php echo strip_tags($market['service_desc']); ?>
                                </p>
                                <a href="market-i1.php?s_id=<?php echo $market['service_id']; ?>">Read More</a>

                            </div><!-- End: Text -->
                        </div><!-- End: Text -->
                    </div>
                    <hr>
                    <!-- MARKET ROW1 - END -->
                <?php } else { ?>

                    <!-- MARKET ROW2 - START -->
                    <div class="row row-cols-1 row-cols-md-2 flex-row-reverse justify-content-center align-items-center justify-content-sm-center flex-md-row justify-content-md-start" style="width: 100%;padding: 15px;font-family:sans-serif;">
                        <!-- Start: Text -->
                        <div class="col">
                            <!-- Start: Text -->
                            <div class="text">
                                <h3><?php echo $market['service_name']; ?></h3>
                                <p class="text-start">
                                    <?php echo $market['service_desc']; ?>
                                </p>
                                <a href="market-i1.php?s_id=<?php echo $market['service_id']; ?>">Read More</a>
                            </div><!-- End: Text -->
                        </div><!-- End: Text -->
                        <!-- Start: Image -->
                        <div class="col">
                            <div class="toc"><img src="<?php echo $market['service_img']; ?>" width="100%"></div>
                        </div><!-- End: Image -->
                    </div>
                    <hr>
                    <!-- MARKET ROW2 - END -->
            <?php }
                $i = $i + 1;
            endforeach; ?>
        </div>
    </section><!-- End: Market1 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js?h=2bf886d83119376f4bad144253b6de8f"></script>
</body>
<?php include('footer.php'); ?>

</html>