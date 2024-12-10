<?php $page = 'home'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>ARPL</title>
    <?php include 'include/header-script.php'; ?>
    <meta property="og:url" content="<?php echo $page_url ?>">
    <meta property="og:title" content="">
    <meta property="og:description" content="">
    <meta property="og:image" content="images/logo.png">
    <meta name="twitter:card" content="">
    <meta name="twitter:site" content="<?php echo $page_url ?>">
    <meta name="twitter:title" content="">
    <meta name="twitter:description" content="">
    <meta name="twitter:image" content="images/logo.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.19/css/intlTelInput.css" />
</head>

<body>
    <div class="wrapper">
        <?php include 'include/header.php'; ?>
        <div class="banner_home">
            <div class="containerFull">
                <div class="banner_home_inner">
                    <div>
                        <h1 class="large_heading fontHeading fontWeight800 text-center">
                            Aryazenic Resourcezenic Pvt Ltd
                        </h1>
                        <h2 class="mt-3 text-center">
                            Innovation with reliable solutions
                        </h2>

                        <!-- <div class="mt-5">
                            <a class="btn_1" href="">Explore More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                            <a class="btn_2 ms-2" href=""><i class="fa-solid fa-phone me-2"></i> +91-9192939940</a>
                        </div> -->
                    </div>


                </div>

            </div>
            <div class="banner_slider">
                <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="web-assets/images/factory-workshop-interior-machines-glass-industry-background-process-production.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="web-assets/images/factory-workshop-interior-machines-glass-industry-background-process-production.jpg"
                                class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
                </div>
            </div>
        </div>
    </div>
    <section class="about_section">
        <div class="containerFull">
            <div class="row">
                <div class="col-lg-6 ">
                    <small class="text_secondary fontWeight600">
                        About us
                    </small>
                    <h4 class="fontHeading mt-3  heading fontWeight700 h_underline">
                        Who we are
                    </h4>
                    <p class="mt-5">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus doloremque facere placeat
                        hic consectetur. Quae dolor sint ea sunt. Et expedita autem molestiae nemo quidem fugiat libero,
                        veritatis quae esse.
                    </p>
                    <p class="mt-3">
                        Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolorum officiis reiciendis enim
                        illum, reprehenderit labore doloribus iure aspernatur magnam quis alias voluptas adipisci totam
                        temporibus voluptate atque illo iste? Quia excepturi officiis quasi delectus possimus illum
                        corrupti voluptatum quaerat totam. Necessitatibus, inventore consequuntur officiis nemo
                        laboriosam recusandae provident eius hic?

                    </p>
                    <div class="mt-5">
                        <a class="btn_1" href="">Learn More <i class="fa-solid fa-arrow-right-long ms-2"></i></a>
                        <a class="btn_3 ms-2" href=""><i class="fa-solid fa-phone me-2"></i> +91-9192939940</a>
                    </div>

                </div>
                <div class="col-lg-6 ps-5">
                    <div class="img_box">

                        <img src="web-assets/images/aboutImg.png" alt="">
                    </div>

                </div>


            </div>

        </div>
    </section>
    <section class="mission_vission" style="background:#f7f7f7">
        <div class="containerFull">
            <div class=" row">
                <div class="col-lg-6">
                    <div class="img_box">

                        <img src="web-assets/images/mission.jpg" alt="">
                    </div>
                </div>
                <div class="col-lg-6 ">

                    <div class="shadow  item_vission ">
                        <h4 class="h_underline fontWeight700">
                            Our Mission
                        </h4>
                        <p class="mt-4 ">
                            Our mission reflects in every product and service we deliver to our clients with quality and
                            continuous innovation to ensure customer retention with value addition.
                        </p>

                    </div>
                    <div class="shadow  item_vission mt-4">
                        <h4 class="h_underline fontWeight700">
                            Our Vision
                        </h4>
                        <p class="mt-4 ">
                            To develop with partners and project manage solutions in flow equipment for heavy
                            industries,
                            and innovate equipment’s for upstream and downstream Oil and Gas.
                        </p>


                    </div>
                </div>


            </div>

        </div>

    </section>
    <div class="core_values row row-cols-lg-4  w-100">
        <div class="item_row">
            <div class="img_box">
                <img src="web-assets/images/icon/protection.png" alt="">
            </div>
            <h4>
                Health and Safety
            </h4>

        </div>
        <div class="item_row">
            <div class="img_box">
                <img src="web-assets/images/icon/engagement.png" alt="">
            </div>
            <h4>
                Human Capital
            </h4>

        </div>
        <div class="item_row">
            <div class="img_box">
                <img src="web-assets/images/icon/employee.png" alt="">
            </div>
            <h4>
                Ethics
            </h4>

        </div>
        <div class="item_row">
            <div class="img_box">
                <img src="web-assets/images/icon/sustainable-growth.png" alt="">
            </div>
            <h4>
                Profitability and Sustainability
            </h4>
        </div>
    </div>
    <section>
        <div class="containerFull">
            <h4 class="heading h_underline fontWeight700">
                Businesses Units
            </h4>



            <div class="business_grid mt-5">
                <div class="item_grid shadow">
                    <div class="img_box">
                        <img src="web-assets/images/ball-valves.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5 class="h_underline">
                            Ball Valves
                        </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, con ectetur a suhg vuihs
                        </p>
                    </div>
                </div>
                <div class="item_grid shadow">
                    <div class="img_box">
                        <img src="web-assets/images/ball-valves.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5 class="h_underline">
                            Butterfly Valves
                        </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, con ectetur a suhg vuihs
                        </p>
                    </div>
                </div>
                <div class="item_grid shadow">
                    <div class="img_box">
                        <img src="web-assets/images/ball-valves.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5 class="h_underline">
                            Gate Valves
                        </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, con ectetur a suhg vuihs
                        </p>
                    </div>
                </div>
                <div class="item_grid shadow">
                    <div class="img_box">
                        <img src="web-assets/images/ball-valves.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5 class="h_underline">
                            Globe Valves
                        </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, con ectetur a suhg vuihs
                        </p>
                    </div>
                </div>
                <div class="item_grid shadow">
                    <div class="img_box">
                        <img src="web-assets/images/ball-valves.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5 class="h_underline">
                            Check Valves
                        </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, con ectetur a suhg vuihs
                        </p>
                    </div>
                </div>
                <div class="item_grid shadow">
                    <div class="img_box">
                        <img src="web-assets/images/ball-valves.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5 class="h_underline">
                            Control & Relief Valves
                        </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, con ectetur a suhg vuihs
                        </p>
                    </div>
                </div>
                <div class="item_grid shadow">
                    <div class="img_box">
                        <img src="web-assets/images/ball-valves.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5 class="h_underline">
                            Actuators and Controls
                        </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, con ectetur a suhg vuihs
                        </p>
                    </div>
                </div>
                <div class="item_grid shadow">
                    <div class="img_box">
                        <img src="web-assets/images/ball-valves.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5 class="h_underline">
                            Actuated Industrial Dampeners
                        </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, con ectetur a suhg vuihs
                        </p>
                    </div>
                </div>

                <!-- <div class="item_grid shadow">
                    <div class="img_box">
                        <img src="web-assets/images/ball-valves.jpg" alt="">
                    </div>
                    <div class="content">
                        <h5 class="h_underline">
                            Expansion joints and bellows
                        </h5>
                        <p class="mt-4">
                            Lorem ipsum dolor sit amet, con ectetur a suhg vuihs
                        </p>
                    </div>
                </div> -->
            </div>

        </div>

        </div>
    </section>




    <div class="contact-form">
        <div class="containerFull">
            <div class="row">
                <div class="col-lg-6 col-md-6 contact_bar bg-white my-4 ">

                    <!-- <div class="contact-img">
                     <img src="images/about-2.jpg" alt="">
                  </div> -->
                    <div class="contact-details px-4 py-4 ">
                        <h3 class="small_heading fontWeight700  text-uppercase h_underline font-heading py-2 mb-2">
                            Aryazenic Resourcezenic Pvt Ltd</h3>
                        <ul class="mt-5">
                            <li>
                                <div class="contact-smallbox d-flex align-items-top justify-content-start gap-3 ">
                                    <div class="iconbox small_heading"><i class="fa-solid fa-location-dot"></i></div>
                                    <div class="icon-detail">
                                        <h5 class="title fontWeight700">Address</h5>
                                        <p class="mt-2">1234 Industrial Avenue
                                            Steel City, ST 56789
                                            United States</p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-smallbox mt-4 d-flex align-items-top justify-content-start gap-3 ">
                                    <div class="iconbox small_heading"><i class="fa-solid fa-phone"></i></div>
                                    <div class="icon-detail ">
                                        <h5 class="title fontWeight700">Mobile No.</h5>
                                        <p class="mt-2"><a class="text-black" href="#">+9192345678</a></p>
                                        <p class="mt-1"><a class="text-black" href="#">+9192345678</a></p>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="contact-smallbox mt-4 d-flex align-items-top justify-content-start gap-3 ">
                                    <div class="iconbox small_heading"><i class="fa-solid fa-envelope"></i></div>
                                    <div class="icon-detail">
                                        <h5 class="title fontWeight700">Email</h5>
                                        <p class="mt-2"><a class="text-black" href="#">example@rediffmail.com</a></p>
                                      
                                    </div>
                                </div>
                            </li>
                            <!-- <li>
                                <div class="contact-smallbox mt-4">

                                    <div class="icon-detail d-flex">
                                        <div class="social-icons-links"><i class="fa-brands fa-facebook-f"></i></div>
                                        <div class="social-icons-links"><i class="fa-brands fa-instagram"></i></div>
                                        <div class="social-icons-links"><i class="fa-brands fa-x-twitter"></i></div>
                                        <div class="social-icons-links"><i class="fa-brands fa-linkedin-in"></i></div>
                                    </div>
                                </div>
                            </li> -->
                        </ul>
                    </div>

                </div>




                <div class="col-lg-6 col-md-6 contact-section  ps-5">
                    <div class="w-100 h-100 d-flex justify-content-center align-items-center">
                        <div class="form-container">
                            <h3 class="form-heading mb-2 heading text-center">Drop us a line</h3>

                            <form class="mt-4">
                                <div class="row">
                                    <div class="mb-lg-3 mb-2  form-input">
                                        <input type="text" class="form-control" placeholder="Name" required="">
                                    </div>
                                    <div class="mb-lg-3 mb-2  form-input">
                                        <input type="text" class="form-control" placeholder="Phone No." required="">
                                    </div>
                                    <div class="mb-lg-3 mb-2  form-input">
                                        <input type="text" class="form-control" placeholder="E-mail" required="">
                                    </div>
                            
                                    <div class="mb-3 col-12 form-input">
                                        <textarea class="form-control">Write a massage...</textarea>
                                    </div>

                                    <div class="form-submit col-12 px-2 ">
                                        <button type="submit" class="btn_1 py-2 w-100"><span>Submit</span></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>


            </div>
        </div>
    </div>

    <?php include 'include/footer.php'; ?>
    <?php include 'include/footer-script.php'; ?>

    <script type="text/javascript">
        Fancybox.bind("[data-fancybox]", {});
    </script>


</body>

</html>