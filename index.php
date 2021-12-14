<!DOCTYPE html>
<html lang="en">

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

<body style="width: 100%;">
    <?php include('header.php');

    $homeDetails = getAllDataC('inc_page', 'pg_status', 'AND pg_id = 1');
    ?>

    <div id="container">
        <div id="video-top" style="width: 100%;">
            <?php if ($homeDetails['pg_ban_typ'] == 1) { ?>
                <video width="100%" height="315" autoplay="" loop="" muted="" style="width: 100%;height: 100%;">
                    <source src="<?php echo $homeDetails['pg_banner']; ?>" type="video/mp4">
                </video>
            <?php } else {
            ?>
                <img width="100%" src="<?php echo $homeDetails['pg_banner']; ?>">
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
        <div class="col align-self-center" style="padding-right: 0px;padding-left: 0px;padding-top: 5px;padding-bottom: 5px;">
            <div class="card" data-aos="fade" style="background: #60a042;color: rgb(255,255,255);text-align: center;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-shopping-bag" style="font-size: 45.3753px;"></i></h4>
                    <h4 class="card-title" style="padding-top: 20px;padding-bottom: 20px;">Garments</h4>
                    <p class="card-text" style="padding-bottom: 20px;">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac&nbsp;</p><button class="btn btn-primary" type="button" style="background: rgba(13,110,253,0);font-weight: bold;padding-top: 2px;padding-bottom: 2px;padding-right: 8px;padding-left: 8px;border: 2.992806px dotted rgb(255,255,255);font-size: 12px;">READ MORE</button>
                </div>
            </div>
        </div>
        <div class="col align-self-center" style="padding-right: 0px;padding-left: 0px;padding-top: 5px;padding-bottom: 5px;">
            <div class="card" data-aos="fade" style="background: #0c1127;color: rgb(255,255,255);text-align: center;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-tags" style="font-size: 45.3753px;"></i></h4>
                    <h4 class="card-title" style="padding-top: 20px;padding-bottom: 20px;">Packaging</h4>
                    <p class="card-text" style="padding-bottom: 20px;">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac&nbsp;</p><button class="btn btn-primary" type="button" style="background: rgba(13,110,253,0);font-weight: bold;padding-top: 2px;padding-bottom: 2px;padding-right: 8px;padding-left: 8px;border: 2.992806px dotted rgb(255,255,255);font-size: 12px;">READ MORE</button>
                </div>
            </div>
        </div>
        <div class="col align-self-center" style="padding-right: 0px;padding-left: 0px;padding-top: 5px;padding-bottom: 5px;">
            <div class="card" data-aos="fade" style="background: #60a042;color: rgb(255,255,255);text-align: center;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-microchip" style="font-size: 45.3753px;"></i></h4>
                    <h4 class="card-title" style="padding-top: 20px;padding-bottom: 20px;">Electronics</h4>
                    <p class="card-text" style="padding-bottom: 20px;">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac&nbsp;</p><button class="btn btn-primary" type="button" style="background: rgba(13,110,253,0);font-weight: bold;padding-top: 2px;padding-bottom: 2px;padding-right: 8px;padding-left: 8px;border: 2.992806px dotted rgb(255,255,255);font-size: 12px;">READ MORE</button>
                </div>
            </div>
        </div>
        <div class="col align-self-center" style="padding-right: 0px;padding-left: 0px;padding-top: 5px;padding-bottom: 5px;">
            <div class="card" data-aos="fade" style="background: #0c1127;color: rgb(255,255,255);text-align: center;">
                <div class="card-body">
                    <h4 class="card-title"><i class="fa fa-medkit" style="font-size: 45px;"></i></h4>
                    <h4 class="card-title" style="padding-top: 20px;padding-bottom: 20px;">Pharma</h4>
                    <p class="card-text" style="padding-bottom: 20px;">Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac&nbsp;</p><button class="btn btn-primary" type="button" style="background: rgba(13,110,253,0);font-weight: bold;padding-top: 2px;padding-bottom: 2px;padding-right: 8px;padding-left: 8px;border: 2.992806px dotted rgb(255,255,255);font-size: 12px;">READ MORE</button>
                </div>
            </div>
        </div>
    </div><!-- Start: 1 Row 2 Columns -->
    <div class="container text-center" data-aos="fade" style="padding-top: 50px;padding-bottom: 50px;width: 100%;">
        <div class="row row-cols-sm-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2 row-cols-xxl-2">
            <div class="col">
                <h1 style="text-align: center;font-size: 22px;font-weight: bold;padding-bottom: 15px;">WHO WE ARE</h1>
                <p class="text-start" style="font-size: 16px;"><?php echo $homeDetails['pg_desc']; ?></p>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center"><i class="fa fa-shopping-bag" style="font-size: 64px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 18px;font-weight: bold;">Expert in Garments</h1>
                        <p>Our people look at tomorrow with confidence. We believe in innovations that help enable the future of building technology.</p>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center"><i class="fa fa-chevron-circle-down" style="font-size: 64px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 18px;font-weight: bold;">Packaging</h1>
                        <p>Our people look at tomorrow with confidence. We believe in innovations that help enable the future of building technology.</p>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center"><i class="fas fa-microchip" style="font-size: 64px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 18px;font-weight: bold;">Leading in Electronics</h1>
                        <p>Our people look at tomorrow with confidence. We believe in innovations that help enable the future of building technology.</p>
                    </div>
                </div>
                <div class="row" style="padding-bottom: 15px;">
                    <div class="col-auto text-center align-self-center"><i class="fa fa-automobile" style="font-size: 64px;background: #60a042;border-radius: 50%;padding: 21px;text-align: center;color: rgb(255,255,255);"></i></div>
                    <div class="col" style="text-align: left;">
                        <h1 style="font-size: 18px;font-weight: bold;">Automobiles</h1>
                        <p>Our people look at tomorrow with confidence. We believe in innovations that help enable the future of building technology.</p>
                    </div>
                </div>
            </div>
            <div class="col-auto d-none d-lg-inline"><img style="height: 100%;width: 80%;" src="assets/img/SideImage1.jpg?h=c187750b0cd25ebf221d8cea6105d2da"></div>
        </div>
    </div><!-- End: 1 Row 2 Columns -->
    <!-- Start: Our Services Heading -->
    <h1 style="text-align: center;font-size: 22.520000000000003px;font-weight: bold;padding-bottom: 15px;padding-top: 15px;">OUR SERVICES</h1><!-- End: Our Services Heading -->
   
   
    <!-- Start: OurServicesSlider -->
    <div class="row" data-aos="fade" style="width: 100%;background: url(&quot;assets/img/ServicesBG1.png?h=697b83e2397adfbffe603d41056c6de7&quot;) center / cover;margin: 0px;">
        <div class="col" style="background: rgba(255,255,255,0);width: 100%;padding-right: 0;padding-left: 0;">
            <!-- Start: ClientsSlider -->
            <div class="container text-center my-3" style="background: rgba(255,255,255,0);width: 100%;padding-right: 0;padding-left: 0;">
                <div class="row mx-auto my-auto justify-content-center" style="background: rgba(255,255,255,0);width: 100%;">
                    <div id="recipeCarousel-1" class="carousel slide carousel2" data-bs-ride="carousel" style="background: rgba(255,255,255,0);width: 100%;">
                        <div class="carousel-inner" role="listbox" style="background: rgba(255,255,255,0);width: 100%;">
                        <?php
                        $services = getAllData('inc_service', 'service_status');
                        $active1 = true;
                        foreach ($services as $service) :
                        ?>
                        <?php if ($active1) { ?>
                           
                        <!-- Start: Carousel-Item_active -->
                            <div class="justify-content-center carousel-item active carousel-item2" style="background: rgba(255,255,255,0);">
                                <div class="col-md-3" style="background: rgba(255,255,255,0);">
                                    <div class="card" style="background: rgba(255,255,255,0);">
                                        <div class="card-img" style="background: rgba(255,255,255,0);">
                                            <div class="card" style="border-style: none;padding: 16px;background: rgba(255,255,255,0);"><img class="card-img-top w-100 d-block" src="<?php echo $service['service_img']; ?>">
                                                <div class="card-body" style="background: #0c1127;">
                                                    <h4 class="card-title" style="color: rgb(255,255,255);text-align: center;font-size: 18.704px;"><?php echo $service['service_name']; ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: Carousel-Item_active -->
                            <?php $active1 = false;
                                continue;
                            } ?>
                            <!-- Start: carousel-item -->
                            <div class="justify-content-center carousel-item carousel-item2" style="background: rgba(255,255,255,0);">
                                <div class="col-md-3" style="background: rgba(255,255,255,0);">
                                    <div class="card" style="background: rgba(255,255,255,0);">
                                        <div class="card-img" style="background: rgba(255,255,255,0);">
                                            <div class="card" style="border-style: none;padding: 16px;background: rgba(255,255,255,0);"><img class="card-img-top w-100 d-block" src="<?php echo $service['service_img']; ?>">
                                                <div class="card-body" style="background: #0c1127;">
                                                    <h4 class="card-title" style="color: rgb(255,255,255);text-align: center;font-size: 18.704px;"><?php echo $service['service_name']; ?></h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div><!-- End: carousel-item -->
                            <?php endforeach; ?>                            
                        </div><a class="carousel-control-prev bg-transparent w-auto" href="#recipeCarousel-1" role="button" data-bs-slide="prev"><span class="carousel-control-prev-icon" aria-hidden="true"></span></a><a class="carousel-control-next bg-transparent w-auto" href="#recipeCarousel-1" role="button" data-bs-slide="next"><span class="carousel-control-next-icon" aria-hidden="true"></span></a>
                    </div>
                </div>
            </div><!-- End: ClientsSlider -->
        </div>
    </div><!-- End: OurServicesSlider -->
    <!-- Start: Our Clients -->
    <h1 style="text-align: center;font-size: 22.520000000000003px;font-weight: bold;padding-bottom: 15px;padding-top: 15px;">OUR CLIENTS</h1><!-- End: Our Clients -->
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
                                <div class="justify-content-center carousel-item active carousel-item1" style="background: #e5e5e5;">
                                    <div class="col-md-3" style="background: #e5e5e5;">
                                        <div class="card" style="background: #e5e5e5;">
                                            <div class="card-img" style="background: #e5e5e5;"><img class="img-fluid" src="<?php echo $client['cl_logo']; ?>"></div>
                                        </div>
                                    </div>
                                </div><!-- End: Carousel-Item_active -->
                            <?php $active = false;
                                continue;
                            }
                            ?>
                            <!-- Start: carousel-item -->
                            <div class="justify-content-center carousel-item carousel-item1" style="background: #e5e5e5;">
                                <div class="col-md-3" style="background: #e5e5e5;">
                                    <div class="card" style="background: #e5e5e5;">
                                        <div class="card-img" style="background: #e5e5e5;"><img class="img-fluid" src="<?php echo $client['cl_logo']; ?>"></div>
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