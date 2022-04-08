<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>INCPRIN</title>
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.png">

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
</head>

<body style="width: 100%;">
    <?php include('header.php');

    $homeDetails = getAllDataC('inc_page', 'pg_status', 'AND pg_id = 1');
    ?>

    <?php
    include('slider.php');
    ?>
    <!-- <hr class="d-block d-md-none" style="margin: 0px;"> -->
    <div class="row justify-content-center align-items-center" style="width: 100%;margin-right: 0px;margin-left: 0px;">
        <?php
        $market1 = getAllDataC1('inc_service', 'service_status', 'LIMIT 4');
        $count_market = 0;
        foreach ($market1 as $data) :
            if ($count_market % 2 == 0) {
        ?>
                <div class="col-sm-12 col-md-6 col-lg-3 align-items-center align-self-center home-service" style=" padding-right: 0px;padding-left: 0px;padding-top: 5px;padding-bottom: 5px;">
                    <div class="card" style="min-height:150px; background: #FFFFFF;color: black;text-align: center;">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-shopping-bag" style="font-size: 40px;"></i></h4>
                            <h4 class="card-title" style="padding-top: 20px;padding-bottom: 20px; text-transform:uppercase;"><?php echo $data['service_name']; ?></h4>
                        </div>
                    </div>
                </div>
            <?php } else {
            ?>
                <div class="col-sm-12 col-md-6 col-lg-3 align-items-center align-self-center home-service" style=" padding-right: 0px;padding-left: 0px;padding-top: 5px;padding-bottom: 5px;">
                    <div class="card" style="min-height:150px; background:#c7c7c7;color: black;text-align: center;">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-tags" style="font-size: 40px;"></i></h4>
                            <h4 class="card-title" style="padding-top: 20px;padding-bottom: 20px;text-transform:uppercase;"><?php echo $data['service_name']; ?></h4>
                        </div>
                    </div>
                </div>
        <?php
            }
            $count_market++;
        endforeach;
        ?>
    </div>
    <br>
    <!-- Start: 1 Row 2 Columns -->
    <div class="container text-center" data-aos="fade" style="padding-top: 50px;padding-bottom: 50px;width: 100%;">
        <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2">
            <div class="col">
                <h1 style="text-align: center;font-size: 24px;padding-bottom: 15px;">ABOUT US</h1>
                <p class="text-start" style="font-size: 16px;"><?php echo $homeDetails['pg_desc']; ?></p>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center d-none d-lg-inline"><i class="fa fa-shopping-bag" style="font-size: 64px;background: #FFFFFF;border-radius: 50%;padding: 21px;text-align: center;color: black;"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 20px; text-transform:uppercase;">Robust Printing</h1>
                        <p>
                        <ul>
                            <li>Robust Printing and Finishing Infrastructure with ample capacity for mass production.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center d-none d-lg-inline"><i class="fas fa-box-open" style="font-size: 50px;background: #FFFFFF;border-radius: 50%;padding: 21px;text-align: center;color: black;"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 20px; text-transform:uppercase;">Packaging</h1>
                        <p>
                        <ul>
                            <li>Capability to produce all kinds of labels and packaging items catering to Apparel, FMCG, Electronics, Automotive, Pharma and Education industry.
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center d-none d-lg-inline"><i class="fas fa-microchip" style="font-size: 64px;background: #FFFFFF;border-radius: 50%;padding: 21px;text-align: center;color: black;"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 20px;text-transform:uppercase;">Industry Standard</h1>
                        <p>
                        <ul>
                            <li>Industry Standards Workflows & Automation Softwares in the entire production process.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center d-none d-lg-inline"><i class="fas fa-globe-americas" style="font-size: 64px;background: #FFFFFF;border-radius: 50%;padding: 21px;text-align: center;color: black;"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 20px;text-transform:uppercase;">Global Service</h1>
                        <p>
                        <ul>
                            <li>We are providing Pan India service.</li>
                            <li>Global service through our Global partners present in Europe, America’s and African continents.</li>
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-inline">
                <img style="height: 100%;width: 80%;" src="assets/img/SideImage1.jpg">
            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->

    <!-- Start: 1 Row 2 Columns -->
    <div class="container text-justify" data-aos="fade" style="padding-top: 20px;padding-bottom: 50px;width: 100%;">
        <div class="d-flex align-items-center justify-content-center row row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2">
            <div class="col-auto d-none d-lg-inline">
                <img style="height: 100%;width: 80%;" src="assets/img/SideImage2.png">
            </div>

            <div class="col-auto">
                <div class="col-auto text-center align-self-center"><i class="fas fa-cogs" style="font-size: 64px;background: #FFFFFF;border-radius: 50%;padding: 21px;text-align: center;color: black;"></i></div>
                <br>
                <h1 style="text-align: center;font-size: 24px;text-transform:uppercase;padding-bottom: 15px;">TECHNOLOGY</h1>
                <p class="text-center" style="font-size: 16px;">We are using cutting edge technology and robust production process in manufacturing in wash care labels, heat transfer, self-adhesive labels, RF, RFID, mono cartons, rigid boxes, etc.</p>
                <br>
                <hr>
                <br>
                <div class="col-auto text-center align-self-center"><i class="fab fa-pagelines" style="font-size: 70px;background: #FFFFFF;border-radius: 50%;padding: 21px;text-align: center;color: #60a042;"></i></div>
                <br>
                <h1 style="text-align: center;font-size: 24px;text-transform:uppercase;padding-bottom: 15px;">SUSTAINABILITY</h1>
                <p class="text-center" style="font-size: 16px;">Our main strategy is the usage of sustainability based raw materials & base material in labels and packaging production which will help us to align to India / Global carbon reduction program and green earth policies.</p>

            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->

    <!-- Start: Our Clients -->
    <h1 style="text-align: center;font-size: 24px;text-transform:uppercase;padding-bottom: 15px;padding-top: 15px;">CERTIFICATIONS</h1><!-- End: Our Clients -->
    <!-- Start: Our Clients -->
    <div class="row justify-content-center align-items-center" style="text-align: center;background: #e5e5e5;width: 100%;margin: 0px;">
        <!-- Start: ClientsSlider -->
        <div class="container text-center my-3" style="background: #e5e5e5;">
            <div class="row mx-auto my-auto justify-content-center" style="background: #e5e5e5;">
                <div id="recipeCarousel" class="carousel slide carousel1" data-bs-ride="carousel" style="background: #e5e5e5;">
                    <div class="carousel-inner" role="listbox" style="background: #e5e5e5;">
                        <?php
                        $clients = getAllData('inc_client', 'cl_status');
                        $active = true;
                        foreach ($clients as $client) :
                        ?>
                            <?php if ($active) { ?>
                                <!-- Start: Carousel-Item_active -->
                                <div class="align-items-center justify-content-center carousel-item active carousel-item1" style="background: #e5e5e5;">
                                    <div class="col-md-3" style="background: #e5e5e5;">
                                        <div class="card" style="background: #e5e5e5;">
                                            <div class="card-img" style="background: #e5e5e5;"><img height="100px" class="img-fluid" src="<?php echo $client['cl_logo']; ?>"></div>
                                        </div>
                                    </div>
                                </div><!-- End: Carousel-Item_active -->
                            <?php $active = false;
                                continue;
                            }
                            ?>
                            <!-- Start: carousel-item -->
                            <div class="align-items-center justify-content-center carousel-item carousel-item1" style="background: #e5e5e5;">
                                <div class="col-md-3" style="background: #e5e5e5;">
                                    <div class="card" style="background: #e5e5e5;">
                                        <div class="card-img" style="background: #e5e5e5;"><img height="100px" class="img-fluid" src="<?php echo $client['cl_logo']; ?>"></div>
                                    </div>
                                </div>
                            </div><!-- End: carousel-item -->
                        <?php endforeach; ?>
                        ClientSliderActivate();
                    </div>
                    <a class="carousel-control-prev bg-transparent w-auto" href="#recipeCarousel" role="button" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span></a>
                    <a class="carousel-control-next bg-transparent w-auto" href="#recipeCarousel" role="button" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span></a>
                </div>
            </div>
        </div><!-- End: ClientsSlider -->
    </div><!-- End: Our Clients -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/6.4.8/swiper-bundle.min.js"></script>
    <script src="assets/js/script.min.js?h=2bf886d83119376f4bad144253b6de8f"></script>
</body>
<?php include('footer.php'); ?>

</html>