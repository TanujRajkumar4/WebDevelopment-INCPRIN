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

    <div id="container">
        <div id="video-top" style="width: 100%; overflow:hidden; height:530px ">
            <?php if ($homeDetails['pg_ban_typ'] == 1) { ?>
                <video width="100%" autoplay="" loop="" muted="">
                    <source src="<?php echo $homeDetails['pg_banner']; ?>" type="video/mp4">
                </video>
            <?php } else {
            ?>
                <img width="100%" style="object-fit:'fit'" class="img-fluid" src="<?php echo $homeDetails['pg_banner']; ?>">
            <?php } ?>
        </div>

        <!-- Start: Large Screen -->
        <div class="d-none d-md-block">
            <div class="custom-shape-divider-bottom-1636207871">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
        </div><!-- End: Large Screen -->
        <!-- Start: Small Screen -->
        <div class="d-md-none">
            <div class="custom-shape-divider-bottom-1636520146">
                <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                    <path d="M0,0V46.29c47.79,22.2,103.59,32.17,158,28,70.36-5.37,136.33-33.31,206.8-37.5C438.64,32.43,512.34,53.67,583,72.05c69.27,18,138.3,24.88,209.4,13.08,36.15-6,69.85-17.84,104.45-29.34C989.49,25,1113-14.29,1200,52.47V0Z" opacity=".25" class="shape-fill"></path>
                    <path d="M0,0V15.81C13,36.92,27.64,56.86,47.69,72.05,99.41,111.27,165,111,224.58,91.58c31.15-10.15,60.09-26.07,89.67-39.8,40.92-19,84.73-46,130.83-49.67,36.26-2.85,70.9,9.42,98.6,31.56,31.77,25.39,62.32,62,103.63,73,40.44,10.79,81.35-6.69,119.13-24.28s75.16-39,116.92-43.05c59.73-5.85,113.28,22.88,168.9,38.84,30.2,8.66,59,6.17,87.09-7.5,22.43-10.89,48-26.93,60.65-49.24V0Z" opacity=".5" class="shape-fill"></path>
                    <path d="M0,0V5.63C149.93,59,314.09,71.32,475.83,42.57c43-7.64,84.23-20.12,127.61-26.46,59-8.63,112.48,12.24,165.56,35.4C827.93,77.22,886,95.24,951.2,90c86.53-7,172.46-45.71,248.8-84.81V0Z" class="shape-fill"></path>
                </svg>
            </div>
        </div><!-- End: Small Screen -->
    </div>
    <hr class="d-block d-md-none" style="margin: 0px;">
    <div class="row row-cols-1 row-cols-sm-2 row-cols-md-2 row-cols-lg-4 row-cols-xl-4 row-cols-xxl-4 justify-content-center align-items-center" style="width: 100%;margin-right: 0px;margin-left: 0px;">
        <?php
        $market1 = getAllDataC1('inc_service', 'service_status', 'LIMIT 4');
        $count_market = 0;
        foreach ($market1 as $data) :
            if ($count_market % 2 == 0) {
        ?>
                <div class="align-items-center col-auto align-self-center" style="padding-right: 0px;padding-left: 0px;padding-top: 5px;padding-bottom: 5px;">
                    <div class="card" data-aos="fade" style="min-height:250px; background: #60a042;color: rgb(255,255,255);text-align: center;">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-shopping-bag" style="font-size: 45px;"></i></h4>
                            <h4 class="card-title" style="padding-top: 20px;padding-bottom: 20px;"><?php echo $data['service_name']; ?></h4>
                            <!-- <p class="card-text" style="padding-bottom: 20px;"><br>Apparel Branding and Labelling Solutions</p> -->
                            <button onclick="window.open('market-i1.php?s_id=<?php echo $data['service_id']; ?>')" class="btn btn-primary" type="button" style="background: rgba(13,110,253,0);font-weight: bold;padding-top: 2px;padding-bottom: 2px;padding-right: 8px;padding-left: 8px;border: 2.992806px dotted rgb(255,255,255);font-size: 12px;">READ MORE</button>
                        </div>
                    </div>
                </div>
            <?php } else {
            ?>
                <div class="align-items-center col-auto align-self-center" style="padding-right: 0px;padding-left: 0px;padding-top: 5px;padding-bottom: 5px;">
                    <div class="card" data-aos="fade" style="min-height:250px; background: #0074bd;color: rgb(255,255,255);text-align: center;">
                        <div class="card-body">
                            <h4 class="card-title"><i class="fa fa-tags" style="font-size: 45px;"></i></h4>
                            <h4 class="card-title" style="padding-top: 20px;padding-bottom: 20px;"><?php echo $data['service_name']; ?></h4>
                            <!-- <p class="card-text" style="padding-bottom: 20px;"><br>Consumer Packaged Labelling Solutions</p> -->
                            <button onclick="window.open('market-i1.php?s_id=<?php echo $data['service_id']; ?>')" class="btn btn-primary" type="button" style="background: rgba(13,110,253,0);font-weight: bold;padding-top: 2px;padding-bottom: 2px;padding-right: 8px;padding-left: 8px;border: 2.992806px dotted rgb(255,255,255);font-size: 12px;">READ MORE</button>
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
                <h1 style="text-align: center;font-size: 22px;font-weight: bold;padding-bottom: 15px;">ABOUT US</h1>
                <p class="text-start" style="font-size: 16px;"><?php echo $homeDetails['pg_desc']; ?></p>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center"><i class="fa fa-shopping-bag" style="font-size: 64px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 18px;font-weight: bold;">Robust Printing</h1>
                        <p>
                        <ul>
                            <li>Robust Printing and Finishing Infrastructure with ample capacity for mass production.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center"><i class="fas fa-box-open" style="font-size: 50px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 18px;font-weight: bold;">Packaging</h1>
                        <p>
                        <ul>
                            <li>Capability to produce all kinds of labels and packaging items catering to Apparel, FMCG, Electronics, Automotive, Pharma and Education industry.
                            </li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center"><i class="fas fa-microchip" style="font-size: 64px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 18px;font-weight: bold;">Industry Standard</h1>
                        <p>
                        <ul>
                            <li>Industry Standards Workflows & Automation Softwares in the entire production process.</li>
                        </ul>
                        </p>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center"><i class="fas fa-globe-americas" style="font-size: 64px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 18px;font-weight: bold;">Global Service</h1>
                        <p>
                        <ul>
                            <li>We are providing Pan India service.</li>
                            <li> Global service through our Global partner G-Locs</li>.
                        </ul>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-inline"><img style="height: 100%;width: 80%;" src="assets/img/SideImage1.jpg"></div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->

    <!-- Start: 1 Row 2 Columns -->
    <div class="container text-justify" data-aos="fade" style="padding-top: 20px;padding-bottom: 50px;width: 100%;">
        <div class="d-flex align-items-center justify-content-center row row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2">
            <div class="col">
                <img style="height: 100%;width: 80%;" src="assets/img/SideImage2.png">
            </div>

            <div class="col-auto d-none d-lg-inline">
                <div class="col-auto text-center align-self-center"><i class="fas fa-cogs" style="font-size: 64px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                <br>
                <h1 style="text-align: center;font-size: 22px;font-weight: bold;padding-bottom: 15px;">TECHNOLOGY</h1>
                <p class="text-center" style="font-size: 16px;">We are using cutting edge technology and robust production process in manufacturing in wash care labels, heat transfer, self-adhesive labels, RF, RFID, mono cartons, rigid boxes, etc.</p>
                <br>
                <hr>
                <br>
                <div class="col-auto text-center align-self-center"><i class="fab fa-pagelines" style="font-size: 70px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                <br>
                <h1 style="text-align: center;font-size: 22px;font-weight: bold;padding-bottom: 15px;">SUSTAINABILITY</h1>
                <p class="text-center" style="font-size: 16px;">Our main strategy is the usage of sustainability based raw materials & base material in labels and packaging production which will help us to align to India / Global carbon reduction program and green earth policies.</p>

            </div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->

    <!-- Start: Our Clients -->
    <h1 style="text-align: center;font-size: 22.5px;font-weight: bold;padding-bottom: 15px;padding-top: 15px;">OUR CLIENTS</h1><!-- End: Our Clients -->
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