<!DOCTYPE html>
<html class="no-js" lang="en">


<!-- Mirrored from elegencia-html.vercel.app/index-4.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Feb 2026 13:27:12 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Meta Tags -->
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="Thememarch" />
    <!-- Favicon Icon -->
    <link rel="icon" href="assets/upload/favicon.png" />
    <!-- Site Title -->
    <title>Green Heaven Resort - Where Nature Meets Luxury</title>
    <link rel="stylesheet" href="assets/css/plugins/bootstrap.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/lightgallery.min.css" />
    <link rel="stylesheet" href="assets/css/plugins/swiper.min.css" />
    <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        /* Spinner becomes the rotating ring */
.spinner {
    border: none !important;
    background: transparent !important;
    box-shadow: none !important;
    display: flex;
    justify-content: center;
    align-items: center;
    width: 170px;
    height: 170px;
    border-radius: 50%;
    position: relative;
}

/* Rotating ring around the logo */
.spinner::before {
    content: '';
    position: absolute;
    width: 170px;
    height: 170px;
    border-radius: 50%;
    border: 3px solid transparent;
    border-top-color: #148d55;     /* Change color to match your theme */
    border-right-color: #148d55;
    animation: ringRotate 1.5s linear infinite;
    top: 0;
    left: 0;
}

/* Logo image — round and still */
.preloader-img {
    width: 300px;
    height: 300px;
    border-radius: 50%;
    object-fit: cover;
    animation: none;
    position: relative;
    z-index: 1;
}

/* Ring rotation animation */
@keyframes ringRotate {
    0%   { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
    </style>

</head>

<body>
    <div id="minicircle"></div>
    <!-- Preloader -->
    <div id="preloader">
        <div id="ak-preloader" class="ak-preloader">
            <div class="animation-preloader">

                <!-- Replace spinner with your image -->
                <div class="spinner">
                    <img src="assets/upload/preloader.png" alt="Logo" style="width: 300px; height: 300px; object-fit: contain;" />
                </div>

                    <div class="txt-loading">
                        <span data-text-preloader="G" class="letters-loading">G</span>
                        <span data-text-preloader="R" class="letters-loading">R</span>
                        <span data-text-preloader="E" class="letters-loading">E</span>
                        <span data-text-preloader="E" class="letters-loading">E</span>
                        <span data-text-preloader="N" class="letters-loading">N</span>

                        <!-- Correct space span with data attribute -->
                        <span data-text-preloader=" " class="letters-loading" style="display: inline-block; width: 20px;">&nbsp;</span>

                        <span data-text-preloader="H" class="letters-loading">H</span>
                        <span data-text-preloader="E" class="letters-loading">E</span>
                        <span data-text-preloader="A" class="letters-loading">A</span>
                        <span data-text-preloader="V" class="letters-loading">V</span>
                        <span data-text-preloader="E" class="letters-loading">E</span>
                        <span data-text-preloader="N" class="letters-loading">N</span>
                    </div>
            </div>
            <div class="loader-section section-left"></div>
            <div class="loader-section section-right"></div>
        </div>
    </div>

    <?php include "common/header.php"; ?>

    <div id="scrollsmoother-container">
        <main>
            <!-- Start Hero -->
            <section>
                <div class="ak-hero ak-style2">
                    <div class="ak-slider ak-slider-6">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="assets/img/hotel_1.png" class="h-100 w-100 ak-bg slider-6-img" alt="...">
                                <div class="slider-text-info">
                                    <p class="slider-mini-title">Excusine Hotel & Resort</p>
                                    <h3 class="slider-title">Luxury Meets Serenity at our</h3>
                                    <h3 class="slider-title-two">Elite Hotel</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/hotel_2.png" class="h-100  w-100 ak-bg slider-6-img" alt="...">
                                <div class="slider-text-info">
                                    <p class="slider-mini-title">Excusine Hotel & Resort</p>
                                    <h3 class="slider-title">Luxury Meets Serenity at our</h3>
                                    <h3 class="slider-title-two">Elite Hotel</h3>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="assets/img/hotel_3.png" class="h-100  w-100 ak-bg slider-6-img" alt="...">
                                <div class="slider-text-info">
                                    <p class="slider-mini-title">Excusine Hotel & Resort</p>
                                    <h3 class="slider-title">Luxury Meets Serenity at our</h3>
                                    <h3 class="slider-title-two">Elite Hotel</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div>
                        <div class="ak-swiper-controll-two">
                            <div class="ak-swiper-navigation-wrap">
                                <div class="ak-swiper-button-prev-6">
                                    <div class="hero-swiper-prev">
                                        <div class="btn-cricle"></div>
                                        <div class="btn-arrow">
                                            <svg width="40" height="55" viewBox="0 0 54 52" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1166_8458)">
                                                    <path
                                                        d="M16.6309 25.4001L25.1406 16.8902C25.4463 16.5333 25.9835 16.4917 26.3405 16.7974C26.6974 17.1031 26.739 17.6403 26.4333 17.9973C26.4048 18.0306 26.3738 18.0617 26.3405 18.0901L19.2859 25.1532H52.9762C53.4461 25.1532 53.8271 25.5343 53.8271 26.0043C53.8271 26.4743 53.4461 26.8552 52.9762 26.8552H19.2859L26.3405 33.9098C26.6974 34.2155 26.739 34.7527 26.4333 35.1097C26.1275 35.4666 25.5904 35.5082 25.2334 35.2025C25.2001 35.174 25.1691 35.1429 25.1406 35.1097L16.6308 26.5999C16.3009 26.2681 16.3009 25.732 16.6309 25.4001Z"
                                                        fill="#FFD28D" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="ak-swiper-button-next-6">
                                    <div class="hero-swiper-next">
                                        <div class="btn-cricle"></div>
                                        <div class="btn-arrow">
                                            <svg width="40" height="55" viewBox="0 0 55 52" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <g clip-path="url(#clip0_1166_8452)">
                                                    <path
                                                        d="M38.0234 25.4001L29.5137 16.8902C29.208 16.5333 28.6708 16.4917 28.3138 16.7974C27.9569 17.1031 27.9153 17.6403 28.221 17.9973C28.2495 18.0306 28.2805 18.0617 28.3138 18.0901L35.3684 25.1532H1.6781C1.20816 25.1532 0.827148 25.5343 0.827148 26.0043C0.827148 26.4743 1.20816 26.8552 1.6781 26.8552H35.3684L28.3138 33.9098C27.9569 34.2155 27.9153 34.7527 28.221 35.1097C28.5268 35.4666 29.0639 35.5082 29.4209 35.2025C29.4542 35.174 29.4852 35.1429 29.5137 35.1097L38.0235 26.5999C38.3534 26.2681 38.3534 25.732 38.0234 25.4001Z"
                                                        fill="#FFD28D" />
                                                </g>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>

            </section>
            <!-- End Hero -->


              <!-- Start About -->
            <section class="ak-about-bg-color">
                <div class="ak-height-150 ak-height-lg-60"></div>
                <div class="container">
                    <div class="ak-about ak-style-3">
                        <div class="text-content">
                            <div class="ak-section-heading ak-sytle-2">
                                <div class="mini-title style-1">
                                    <div class="mini-title-border"></div>
                                    <p class="mini-text">Welcome</p>
                                </div>
                                <h2 class="section-title anim-title-2"><span>Experience the Pinnacle of Luxury at</span>
                                    "Excusine Resort"
                                </h2>
                                <p class="section-desp">Welcome to our resort, where culinary artistry meets exceptional
                                    dining experiences. At, we strive to create a gastronomic haven that tantalizes your
                                    taste buds and leaves you with unforgettable memories.
                                </p>
                            </div>
                            <div class="ak-signature">
                                <div class="text-btn">
                                    <a href="event-list.html" class="text-btn1 type-2 text-uppercase">
                                        View More
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="about-img-2">
                            <img src="assets/img/about3_2.jpg" class="about-img-two me-xl-2" alt="...">
                            <img src="assets/img/about3.jpg" alt="...">
                        </div>
                    </div>
                </div>
            </section>
            <!-- End About -->


            <!-- Start Room -->
            <section>
                <div class="ak-height-150 ak-height-lg-60"></div>
                <div class="container">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="ak-section-subtitle">Services</div>
                        <h2 class="ak-section-title anim-title">Our Signature Services</h2>
                    </div>
                    <div class="ak-height-65 ak-height-lg-30"></div>

                    <div class="room-section">
                        <div class="col">
                            <div class="room-card">
                                <div class="room-card-img">
                                    <img src="assets/img/room_1.jpg" class="room-card-img-top" alt="...">
                                    <div class="room-card-img-btn">
                                        <div class="text-btn">
                                            <a href="single-room.html" class="text-btn1 text-uppercase">
                                                Starts At $259
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-card-body">
                                    <a href="single-room.html" class="room-card-title">
                                        The Royal Serenity Suite
                                    </a>
                                    <div class="room-card-info">
                                        <p>120 m2</p>
                                        <p class="hr-colum"></p>
                                        <p>3 beds</p>
                                        <p class="hr-colum"></p>
                                        <p>1 Bathroom</p>
                                    </div>
                                    <p class="room-card-text">Contrary to popular belief, Lorem Ipsum is not simply
                                        random text. It has roots in a piece of classical Latin literature.
                                    </p>

                                </div>
                                <div class="room-footer">
                                    <a class="room-card-bottom-text" href="single-room.html">room details
                                        <span class="ms-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31"
                                                viewBox="0 0 31 31" fill="none">
                                                <g clip-path="url(#clip0_1355_128)">
                                                    <path
                                                        d="M30.3017 14.8709L23.4837 8.05279C23.2388 7.7668 22.8084 7.73346 22.5224 7.97843C22.2364 8.22335 22.203 8.65377 22.448 8.93976C22.4709 8.96642 22.4957 8.99133 22.5224 9.01412L28.1745 14.6731H1.18178C0.805268 14.6731 0.5 14.9784 0.5 15.355C0.5 15.7315 0.805268 16.0367 1.18178 16.0367H28.1745L22.5224 21.6889C22.2364 21.9338 22.203 22.3642 22.448 22.6502C22.693 22.9362 23.1234 22.9696 23.4093 22.7246C23.436 22.7017 23.4609 22.6769 23.4837 22.6502L30.3018 15.8321C30.5661 15.5663 30.5661 15.1368 30.3017 14.8709Z"
                                                        fill="#FFD28D" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1355_1285">
                                                        <rect width="30" height="30" fill="white"
                                                            transform="translate(0.5 0.351562)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="room-card">
                                <div class="room-card-img">
                                    <img src="assets/img/room_2.jpg" class="room-card-img-top" alt="...">
                                    <div class="room-card-img-btn">
                                        <div class="text-btn">
                                            <a href="single-room.html" class="text-btn1 text-uppercase">
                                                Starts At $259
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-card-body">
                                    <a href="single-room.html" class="room-card-title">
                                        The Royal Serenity Suite
                                    </a>
                                    <div class="room-card-info">
                                        <p>120 m2</p>
                                        <p class="hr-colum"></p>
                                        <p>3 beds</p>
                                        <p class="hr-colum"></p>
                                        <p>1 Bathroom</p>
                                    </div>
                                    <p class="room-card-text">Contrary to popular belief, Lorem Ipsum is not simply
                                        random text. It has roots in a piece of classical Latin literature.
                                    </p>
                                </div>
                                <div class="room-footer">
                                    <a class="room-card-bottom-text" href="single-room.html">room details
                                        <span class="ms-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31"
                                                viewBox="0 0 31 31" fill="none">
                                                <g clip-path="url(#clip0_1355_128)">
                                                    <path
                                                        d="M30.3017 14.8709L23.4837 8.05279C23.2388 7.7668 22.8084 7.73346 22.5224 7.97843C22.2364 8.22335 22.203 8.65377 22.448 8.93976C22.4709 8.96642 22.4957 8.99133 22.5224 9.01412L28.1745 14.6731H1.18178C0.805268 14.6731 0.5 14.9784 0.5 15.355C0.5 15.7315 0.805268 16.0367 1.18178 16.0367H28.1745L22.5224 21.6889C22.2364 21.9338 22.203 22.3642 22.448 22.6502C22.693 22.9362 23.1234 22.9696 23.4093 22.7246C23.436 22.7017 23.4609 22.6769 23.4837 22.6502L30.3018 15.8321C30.5661 15.5663 30.5661 15.1368 30.3017 14.8709Z"
                                                        fill="#FFD28D" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1355_1284">
                                                        <rect width="30" height="30" fill="white"
                                                            transform="translate(0.5 0.351562)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="room-card">
                                <div class="room-card-img">
                                    <img src="assets/img/room_2.jpg" class="room-card-img-top" alt="...">
                                    <div class="room-card-img-btn">
                                        <div class="text-btn">
                                            <a href="single-room.html" class="text-btn1 text-uppercase">
                                                Starts At $259
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-card-body">
                                    <a href="single-room.html" class="room-card-title">
                                        The Royal Serenity Suite
                                    </a>
                                    <div class="room-card-info">
                                        <p>120 m2</p>
                                        <p class="hr-colum"></p>
                                        <p>3 beds</p>
                                        <p class="hr-colum"></p>
                                        <p>1 Bathroom</p>
                                    </div>
                                    <p class="room-card-text">Contrary to popular belief, Lorem Ipsum is not simply
                                        random text. It has roots in a piece of classical Latin literature.
                                    </p>
                                </div>
                                <div class="room-footer">
                                    <a class="room-card-bottom-text" href="single-room.html">room details
                                        <span class="ms-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31"
                                                viewBox="0 0 31 31" fill="none">
                                                <g clip-path="url(#clip0_1355_128)">
                                                    <path
                                                        d="M30.3017 14.8709L23.4837 8.05279C23.2388 7.7668 22.8084 7.73346 22.5224 7.97843C22.2364 8.22335 22.203 8.65377 22.448 8.93976C22.4709 8.96642 22.4957 8.99133 22.5224 9.01412L28.1745 14.6731H1.18178C0.805268 14.6731 0.5 14.9784 0.5 15.355C0.5 15.7315 0.805268 16.0367 1.18178 16.0367H28.1745L22.5224 21.6889C22.2364 21.9338 22.203 22.3642 22.448 22.6502C22.693 22.9362 23.1234 22.9696 23.4093 22.7246C23.436 22.7017 23.4609 22.6769 23.4837 22.6502L30.3018 15.8321C30.5661 15.5663 30.5661 15.1368 30.3017 14.8709Z"
                                                        fill="#FFD28D" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1355_1284">
                                                        <rect width="30" height="30" fill="white"
                                                            transform="translate(0.5 0.351562)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="room-card">
                                <div class="room-card-img">
                                    <img src="assets/img/room_2.jpg" class="room-card-img-top" alt="...">
                                    <div class="room-card-img-btn">
                                        <div class="text-btn">
                                            <a href="single-room.html" class="text-btn1 text-uppercase">
                                                Starts At $259
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="room-card-body">
                                    <a href="single-room.html" class="room-card-title">
                                        The Royal Serenity Suite
                                    </a>
                                    <div class="room-card-info">
                                        <p>120 m2</p>
                                        <p class="hr-colum"></p>
                                        <p>3 beds</p>
                                        <p class="hr-colum"></p>
                                        <p>1 Bathroom</p>
                                    </div>
                                    <p class="room-card-text">Contrary to popular belief, Lorem Ipsum is not simply
                                        random text. It has roots in a piece of classical Latin literature.
                                    </p>
                                </div>
                                <div class="room-footer">
                                    <a class="room-card-bottom-text" href="single-room.html">room details
                                        <span class="ms-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31"
                                                viewBox="0 0 31 31" fill="none">
                                                <g clip-path="url(#clip0_1355_128)">
                                                    <path
                                                        d="M30.3017 14.8709L23.4837 8.05279C23.2388 7.7668 22.8084 7.73346 22.5224 7.97843C22.2364 8.22335 22.203 8.65377 22.448 8.93976C22.4709 8.96642 22.4957 8.99133 22.5224 9.01412L28.1745 14.6731H1.18178C0.805268 14.6731 0.5 14.9784 0.5 15.355C0.5 15.7315 0.805268 16.0367 1.18178 16.0367H28.1745L22.5224 21.6889C22.2364 21.9338 22.203 22.3642 22.448 22.6502C22.693 22.9362 23.1234 22.9696 23.4093 22.7246C23.436 22.7017 23.4609 22.6769 23.4837 22.6502L30.3018 15.8321C30.5661 15.5663 30.5661 15.1368 30.3017 14.8709Z"
                                                        fill="#FFD28D" />
                                                </g>
                                                <defs>
                                                    <clipPath id="clip0_1355_1284">
                                                        <rect width="30" height="30" fill="white"
                                                            transform="translate(0.5 0.351562)" />
                                                    </clipPath>
                                                </defs>
                                            </svg>
                                        </span>
                                    </a>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="ak-height-80 ak-height-lg-30"></div>
                
                </div>
            </section>
            <!-- End Room -->


            <!-- Start Core Aminities -->
            <section>
                <div class="ak-height-150 ak-height-lg-60"></div>
                <div class="container">
                    <div class="core-services row">
                        <div class="col-xl-4 col-lg-5 col-12">
                            <div class="ak-section-heading ak-sytle-2">
                                <div class="mini-title style-1">
                                    <div class="mini-title-border"></div>
                                    <p class="mini-text">Amenities</p>
                                </div>
                                <h2 class="section-title anim-title-2"><span>Core</span>Amenities</h2>
                            </div>
                            <div class="ak-height-30 ak-height-lg-10"></div>
                            <div class="services-list">
                                <div class="ak-serice-pagination swiper-pagination-clickable">
                                    <h4 class="feature-list swiper-pagination-bullet swiper-pagination-bullet-active"
                                        tabindex="0" aria-current="true"> 01 / Grand Banquet Halls </h4>
                                    <h4 class="feature-list swiper-pagination-bullet"> 02 / Expansive Lawn Areas
                                    </h4>
                                    <h4 class="feature-list swiper-pagination-bullet"> 03 / Large Guest Capacity
                                    </h4>
                                    <h4 class="feature-list swiper-pagination-bullet"> 04 / Open Sky Celebration Venue
                                    </h4>
                                    <h4 class="feature-list swiper-pagination-bullet"> 05 / Prime Location Access </h4>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7 col-lg-6 col-12">
                            <div class="ak-slider ak-slider-core-services">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <div class="core-services-img">
                                            <img class="services-img
                                            " src="assets/img/core-services.jpg" alt="...">
                                            <div class="img-overlap"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="core-services-img">
                                            <img class="services-img" src="assets/img/resort_service_2.jpg"
                                                alt="...">
                                            <div class="img-overlap"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="core-services-img">
                                            <img class="services-img" src="assets/img/resort_services_3.jpg"
                                                alt="...">
                                            <div class="img-overlap"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="core-services-img">
                                            <img class="services-img" src="assets/img/resort_service_4.jpg"
                                                alt="...">
                                            <div class="img-overlap"></div>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="core-services-img">
                                            <img class="services-img" src="assets/img/resort_services_5.jpg"
                                                alt="...">
                                            <div class="img-overlap"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- End Core Aminities -->

            <!-- Start Fun Fact Counter -->
            <div class="container">
                <div class="ak-height-150 ak-height-lg-60"></div>
                <div class="row align-items-center gap-lg-0 gap-5">
                    <div class="col-lg-3">
                        <div class="ak-funfact ak-style1">
                            <div class="ak-funfact-number">
                                <div>
                                    <span id="count1" class="amin-auto-count">99</span>
                                </div>
                                <span>+</span>
                            </div>
                            <div class="ak-funfact-text">
                                <p><span>01&nbsp;/&nbsp;</span>Booking Month</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ak-funfact ak-style1">
                            <div class="ak-funfact-number">
                                <div>
                                    <span id="count2" class="amin-auto-count">130</span>
                                </div>
                                <span>+</span>
                            </div>

                            <div class="ak-funfact-text">
                                <p><span>01&nbsp;/&nbsp;</span>Visitors daily</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ak-funfact ak-style1">
                            <div class="ak-funfact-number">
                                <div>
                                    <span id="count3" class="amin-auto-count">86</span>
                                </div>
                                <span>+</span>
                            </div>

                            <div class="ak-funfact-text">
                                <p><span>01&nbsp;/&nbsp;</span>Positive feedback</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="ak-funfact ak-style1">
                            <div class="ak-funfact-number">
                                <div>
                                    <span id="count4" class="amin-auto-count">23</span>
                                </div>
                                <span>+</span>
                            </div>

                            <div class="ak-funfact-text">
                                <p><span>01&nbsp;/&nbsp;</span>Awards & honors</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- End Fun Fact Counter -->


            <!-- Start Testimonial -->
            <div class="ak-height-150 ak-height-lg-60"></div>
            <section class="container">
                <div class="ak-slider ak-slider-3">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="testimonial-section">
                                    <div class="testimonial-icon-1">
                                        <img src="assets/img/testimonial_icon_l.svg" alt="...">
                                    </div>
                                    <div class="testimonial-info-section">
                                        <div class="testimonial-info">
                                            <img src="assets/img/testimonial_1.jpg" class="testimonial-info-img"
                                                alt="...">
                                            <h6 class="testimonial-info-title">Steven K. Roberts</h6>
                                            <p class="short-title">From USA</p>
                                            <p class="testimonial-info-subtitle">“Their talented team of passionate
                                                chefs masterfully crafts each dish, combining the finest ingredients
                                                with innovative techniques to present culinary creations that are as
                                                visually stunning as they are delicious.”</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-icon-1">
                                        <img src="assets/img/testimonial_icon_r.svg" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="testimonial-section">
                                    <div class="testimonial-icon-1">
                                        <img src="assets/img/testimonial_icon_l.svg" alt="...">
                                    </div>
                                    <div class="testimonial-info-section">
                                        <div class="testimonial-info">
                                            <img src="assets/img/testimonial_2.jpg" class="testimonial-info-img"
                                                alt="...">
                                            <h6 class="testimonial-info-title">Steven K. Roberts</h6>
                                            <p class="short-title">From USA</p>
                                            <p class="testimonial-info-subtitle">“Their talented team of passionate
                                                chefs masterfully crafts each dish, combining the finest ingredients
                                                with innovative techniques to present culinary creations that are as
                                                visually stunning as they are delicious.”</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-icon-1">
                                        <img src="assets/img/testimonial_icon_r.svg" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="container">
                                <div class="testimonial-section">
                                    <div class="testimonial-icon-1">
                                        <img src="assets/img/testimonial_icon_l.svg" alt="...">
                                    </div>
                                    <div class="testimonial-info-section">
                                        <div class="testimonial-info">
                                            <img src="assets/img/testimonial_3.jpg" class="testimonial-info-img"
                                                alt="...">
                                            <h6 class="testimonial-info-title">Steven K. Roberts</h6>
                                            <p class="short-title">From USA</p>
                                            <p class="testimonial-info-subtitle">“Their talented team of passionate
                                                chefs masterfully crafts each dish, combining the finest ingredients
                                                with innovative techniques to present culinary creations that are as
                                                visually stunning as they are delicious.”</p>
                                        </div>
                                    </div>
                                    <div class="testimonial-icon-1">
                                        <img src="assets/img/testimonial_icon_r.svg" alt="...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container">
                    <div class="ak-swiper-controll-3">
                        <div class="ak-swiper-navigation-wrap">
                            <div class="ak-swiper-button-prev-3">
                                <button class="btn-style-2 btn-size btn-style-round button-prev-next-2 rotate-svg"
                                    aria-disabled="false">
                                    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#fff" fill="none" fill-rule="evenodd">
                                            <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                        </g>
                                    </svg>
                                    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#fff" fill="none" fill-rule="evenodd">
                                            <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                        </g>
                                    </svg>
                                </button>

                            </div>
                            <div class="ak-swiper-button-next-3">
                                <button class="btn-style-2 btn-size btn-style-round button-prev-next-2"
                                    aria-disabled="false">
                                    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#fff" fill="none" fill-rule="evenodd">
                                            <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                        </g>
                                    </svg>
                                    <svg width="20" height="14" xmlns="http://www.w3.org/2000/svg">
                                        <g stroke="#fff" fill="none" fill-rule="evenodd">
                                            <path d="M12.743 1.343L18.4 7l-5.657 5.657M18.4 7H.4"></path>
                                        </g>
                                    </svg>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Testimonial -->


            <!-- Start Why Choose Us -->
            <section>
                <div class="ak-height-150 ak-height-lg-60"></div>
                <div class="container">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="ak-section-subtitle">Extra Features</div>
                        <h2 class="ak-section-title anim-title">Why Choose Us</h2>
                    </div>
                    <div class="ak-height-65 ak-height-lg-30"></div>
                </div>
                <div class="container">
                    <div class="row gap-md-0 gap-1">
                        <div class="col-md-6 border-right-1 pb-3">
                            <div class="feature-card">
                                <div class="feature-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="77" viewBox="0 0 76 77"
                                        fill="none">
                                        <path
                                            d="M49.1598 46.8053C46.0536 44.0443 42.0422 42.5193 37.8864 42.5193C33.7305 42.5193 29.7191 44.0443 26.6129 46.8053M58.1682 37.7968C52.6669 32.6527 45.4166 29.791 37.8849 29.791C30.3532 29.791 23.1029 32.6527 17.6016 37.7968"
                                            stroke="#FFD28D" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M66.1744 27.8471C58.3882 20.9012 48.3187 17.0625 37.8846 17.0625C27.4504 17.0625 17.3809 20.9012 9.59473 27.8471"
                                            stroke="#FFD28D" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M37.8849 62.3597C36.9511 62.3597 36.0381 62.0828 35.2616 61.564C34.4851 61.0451 33.8799 60.3077 33.5225 59.4449C33.1651 58.582 33.0716 57.6326 33.2538 56.7167C33.436 55.8007 33.8857 54.9594 34.5461 54.299C35.2065 53.6387 36.0478 53.1889 36.9638 53.0067C37.8797 52.8246 38.8291 52.9181 39.6919 53.2754C40.5547 53.6328 41.2922 54.238 41.811 55.0146C42.3299 55.7911 42.6068 56.704 42.6068 57.6379C42.6068 58.8902 42.1093 60.0912 41.2238 60.9767C40.3383 61.8623 39.1373 62.3597 37.8849 62.3597Z"
                                            fill="#FFD28D" />
                                    </svg>
                                </div>
                                <div class="feature-text">
                                    <h4><span>01 / </span>Free Wi-Fi Connection</h4>
                                    <p>Fast and reliable internet access available throughout the venue.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pb-3">
                            <div class="feature-card">
                                <div class="feature-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="77" height="77" viewBox="0 0 77 77"
                                        fill="none">
                                        <path
                                            d="M47.2937 40.5682H45.6574C44.6929 40.5682 43.768 40.1851 43.0861 39.5031C42.4041 38.8212 42.021 37.8962 42.021 36.9318C42.021 37.8962 41.6379 38.8212 40.9559 39.5031C40.274 40.1851 39.3491 40.5682 38.3846 40.5682C37.4202 40.5682 36.4953 40.1851 35.8133 39.5031C35.1314 38.8212 34.7483 37.8962 34.7483 36.9318C34.7483 37.8962 34.3652 38.8212 33.6832 39.5031C33.0013 40.1851 32.0763 40.5682 31.1119 40.5682H29.4755M26.5665 24.2045H32.021M32.4155 55.1136H44.3537C45.5872 55.1136 46.8004 55.4274 47.8793 56.0253C48.9582 56.6233 49.8672 57.4858 50.521 58.5318L50.6574 58.75H54.7483V18.75H22.021V58.75H26.1119L26.2483 58.5318C26.902 57.4858 27.8111 56.6233 28.8899 56.0253C29.9688 55.4274 31.182 55.1136 32.4155 55.1136ZM38.3846 47.8409C35.9736 47.8409 33.6613 46.8831 31.9564 45.1782C30.2515 43.4734 29.2937 41.1611 29.2937 38.75C29.2937 36.3389 30.2515 34.0266 31.9564 32.3218C33.6613 30.6169 35.9736 29.6591 38.3846 29.6591C40.7957 29.6591 43.108 30.6169 44.8129 32.3218C46.5178 34.0266 47.4755 36.3389 47.4755 38.75C47.4755 41.1611 46.5178 43.4734 44.8129 45.1782C43.108 46.8831 40.7957 47.8409 38.3846 47.8409Z"
                                            stroke="#FFD28D" />
                                    </svg>
                                </div>
                                <div class="feature-text">
                                    <h4><span>02 / </span> Bridal & Groom Luxury Suites</h4>
                                    <p>Private fully furnished rooms for the bride and groom to relax and get ready comfortably.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="border-bottom-1"></div>
                <div class="container">
                    <div class="row  gap-md-0 gap-1">
                        <div class="col-md-6 border-right-1 pt-3">
                            <div class="feature-card">
                                <div class="feature-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="73" height="73" viewBox="0 0 73 73"
                                        fill="none">
                                        <path
                                            d="M17.2451 62.3031C19.7321 56.4981 21.2771 54.1461 29.1011 48.9696C31.1906 43.2201 35.1551 40.0566 38.5421 37.4016C40.1381 31.0596 40.3571 24.3006 39.1181 21.5586C38.8031 23.3376 36.3371 25.5591 33.3731 27.1041C34.6496 30.1416 36.8711 32.8971 39.2501 34.0746"
                                            stroke="#FFD28D" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M53.4852 62.6624C52.3077 55.8164 51.0102 51.3479 55.7667 47.7434C49.5687 48.6809 45.3882 42.4829 45.3882 42.4829C39.6957 45.7259 35.8032 49.6169 31.7682 51.5639C25.5687 59.4914 23.4432 58.9874 17.2452 62.3024M17.2452 62.3024C17.2452 62.3024 17.7852 64.4999 17.6172 65.6894H13.3647C14.7222 64.6439 16.3077 64.2839 17.2452 62.3024ZM39.2502 34.0739C35.9352 33.5219 31.8627 31.0229 29.8932 28.5014M53.3142 20.4434C54.1077 27.2429 49.0167 29.9894 49.4967 35.7554"
                                            stroke="#FFD28D" stroke-linecap="round" stroke-linejoin="round" />
                                        <path
                                            d="M48.0041 15.2387C47.3891 15.8447 46.7471 16.2527 45.5171 16.2527C44.2871 16.2527 44.0246 13.4927 44.0531 12.0827C44.0816 10.6727 44.2511 7.22267 48.0506 7.18967C50.5781 7.16717 51.2261 8.86067 50.9741 11.9597C50.7221 15.0587 50.6246 16.5332 51.5141 17.6177C53.7491 17.1617 55.0466 18.2177 56.0066 19.6127C56.9666 21.0077 57.9536 24.4877 60.2366 27.4922C60.4511 33.6182 58.7216 36.7412 54.5411 39.1922C56.9441 36.9332 57.5921 32.0567 57.2801 29.0522C57.2801 29.0522 53.3396 26.0507 53.2886 23.9897M49.4966 35.7557C53.9651 38.3747 56.4701 41.1857 60.2531 45.0767C61.4426 51.0587 55.2866 50.8667 53.4851 62.6627M53.4851 62.6627C54.9746 63.6722 56.1746 65.2817 59.2976 65.6897H51.2276C51.0341 64.1282 53.4851 62.6627 53.4851 62.6627ZM42.9386 17.6447C42.9386 17.6447 40.3511 18.4097 39.1391 18.9152C35.5691 20.4032 32.2961 23.0717 29.8931 28.5002"
                                            stroke="#FFD28D" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </div>
                                <div class="feature-text">
                                    <h4><span>03 / </span>Valet Parking Service</h4>
                                    <p>Professional valet team for smooth vehicle handling during large events.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-3">
                            <div class="feature-card">
                                <div class="feature-date">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="76" height="76" viewBox="0 0 76 76"
                                        fill="none">
                                        <g clip-path="url(#clip0_1372_238)">
                                            <path
                                                d="M21.9455 45.4823C21.9455 48.7249 19.3169 51.3535 16.0742 51.3535C12.8318 51.3535 10.2031 48.7249 10.2031 45.4823C10.2031 42.2397 12.8318 39.611 16.0742 39.611C19.3169 39.611 21.9455 42.2397 21.9455 45.4823Z"
                                                stroke="#FFD28D" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M21.9453 47.832H55.9982" stroke="#FFD28D" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M16.9047 44.652L15.2441 46.3125" stroke="#FFD28D"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M67.7409 45.4823C67.7409 48.7249 65.1124 51.3535 61.8696 51.3535C58.6272 51.3535 55.9985 48.7249 55.9985 45.4823C55.9985 42.2397 58.6272 39.611 61.8696 39.611C65.1124 39.611 67.7409 42.2397 67.7409 45.4823Z"
                                                stroke="#FFD28D" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M61.0391 44.652L62.6996 46.3125" stroke="#FFD28D"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                            <path
                                                d="M10.2031 46.6578L4.53838 45.0393C3.02607 44.6072 1.9834 43.225 1.9834 41.6521V34.6401C1.9834 33.4558 2.86538 32.4567 4.04062 32.3098L8.38359 31.7669C10.3649 31.5192 12.2899 30.9365 14.0758 30.0434L19.6485 27.2571C21.9312 26.1157 24.4484 25.5216 27.0004 25.5216H37.4622C40.3655 25.5216 43.2083 26.3495 45.6577 27.9081L54.8241 33.7413C54.8241 33.7413 65.4684 33.7413 72.109 36.8251C73.7534 37.5888 74.7861 39.2574 74.7861 41.0708V44.969C74.7861 46.7867 73.7347 47.832 72.4377 47.832"
                                                stroke="#FFD28D" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path
                                                d="M24.2939 33.7402H22.029C20.4718 33.7402 18.9784 33.1216 17.8773 32.0205L16.0742 30.2176"
                                                stroke="#FFD28D" stroke-miterlimit="10" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M54.8238 33.7402H28.9907" stroke="#FFD28D" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M26.6426 43.1348H51.3015" stroke="#FFD28D" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M1.9834 37.2637H4.33184" stroke="#FFD28D" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M71.2637 39.6113H74.1014" stroke="#FFD28D" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M33.688 33.7402V25.5206" stroke="#FFD28D" stroke-miterlimit="10"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M20.1841 33.2637L21.7128 26.511" stroke="#FFD28D"
                                                stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_1372_62383">
                                                <rect width="75" height="75" fill="white"
                                                    transform="translate(0.884766 0.9375)" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </div>
                                <div class="feature-text">
                                    <h4><span>04 / </span>Airport Pickup Assistance</h4>
                                    <p>Assistance with pickup, drop, and smooth transportation arrangements for guests.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Why Choose Us -->


            <!-- Start gellary -->
            <section>
                <div class="ak-height-150 ak-height-lg-60"></div>
                <div class="container">
                    <div class="ak-section-heading ak-style-1 ak-type-1">
                        <div class="ak-section-subtitle">Gallery</div>
                        <h2 class="ak-section-title anim-title">Our Gallery</h2>
                    </div>
                    <div class="ak-height-65 ak-height-lg-30"></div>
                </div>
                <div class="ak-slider ak-slider-7">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="assets/img/gallery_show_1.jpg" class="card-img" alt="..." />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/gallery_show_2.jpg" class="card-img" alt="..." />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/gallery_show_3.jpg" class="card-img" alt="..." />
                        </div>
                        <div class="swiper-slide">
                            <img src="assets/img/gallery_show_4.jpg" class="card-img" alt="..." />
                        </div>
                    </div>
                </div>
            </section>
            <!-- End Gellary -->


        </main>
        <div class="ak-height-150 ak-height-lg-60"></div>

<?php include "common/footer.php"; ?>    