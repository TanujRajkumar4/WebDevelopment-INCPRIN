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
$pg_qry = getAllDataC('inc_page', 'pg_status', 'AND pg_id = 4');
?>

<body style="font-family: 'Work Sans', sans-serif;">
    <!-- Start: Parallax Background -->
    <div data-bss-parallax-bg="true" style="height: 300px;background-image: url(<?php echo $pg_qry['pg_banner']; ?>);background-position: center;background-size: cover;"></div><!-- End: Parallax Background -->
    <hr><!-- Start: Article Dual Column -->
    <section class="article-dual-column">
        <div class="container">
            <div class="row" style="text-align: center;">
                <div class="col-md-10 offset-md-1">
                    <!-- Start: Intro -->
                    <div class="intro">
                        <!-- <h1 class="text-uppercase text-center" style="font-family: Work Sans, sans-serif; padding: 0px;color: rgb(86, 88, 91);"><?php //echo $pg_qry['pg_title']; ?></h1> -->
                    </div><!-- End: Intro -->
                </div>
            </div>
            <?php
            $qry = getAllDataC1('inc_gallery', 'photo_status', 'AND product_id = 4 and pg_typ=1');
            if (mysqli_num_rows($qry) > 0) {
            ?>
                <div class="row">
                    <div class="col-md-10 col-lg-7 offset-md-1 offset-lg-0">
                        <!-- Start: Text -->
                        <div class="text">
                            <?php echo $pg_qry['pg_desc']; ?>
                        </div><!-- End: Text -->
                    </div>
                    <div class="col text-center">
                        <div class="card-group">
                            <?php
                            foreach ($qry as $sql) {
                            ?>
                                <div class="card" style="padding-top: 5px;padding-right: 5px;padding-bottom: 5px;padding-left: 5px;"><a href="<?php echo $sql['file_url']; ?>" target="_blank"><img class="card-img-top w-100 d-block" src="assets/img/reports/rp.jpg"></a>
                                    <div class="card-body"><a href="<?php echo $sql['file_url']; ?>" target="_blank" class="btn btn-primary"><?php echo $sql['poto_desc']; ?></a></div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                <?php } else { ?>
                    <!-- Start: Text -->
                    <div class="text">
                        <?php echo $pg_qry['pg_desc']; ?>
                    </div><!-- End: Text -->
                <?php } ?>
                </div>
        </div>
    </section><!-- End: Article Dual Column -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js?h=2bf886d83119376f4bad144253b6de8f"></script>
</body>
<?php include('footer.php'); ?>

</html>