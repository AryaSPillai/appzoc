<?php 
    get_header();
    the_post();
?>
<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="homePage">
        <!-- Intro Block -->
        <section class="intro-slider-block">
            <!-- Slider Large -->
            <div class="parallax-block-lg">
                <!-- Parallax Slider -->
                <div class="swiper-container parallax-slider js-parallax-slider">
                    <div class="swiper-wrapper">
                    <?php 
                $parallaxs = get_field('parallax_slider');
                foreach ($parallaxs as $key => $value):?>
                        <!-- Slide Item -->
                        <div class="swiper-slide" data-tab="slide-0">
                            <div class="img-container">
                               
                                <img src="<?php echo $value['parallax_image']; ?>" class="img-fluid" alt="cover">
                             
                            </div>
                        </div>
                        <!-- Slide Item END -->

                        <!-- Slide Item -->
                       
                        <!-- Slide Item END -->
                        <!-- Slide Item -->
                      
                        <!-- Slide Item END -->
                        <!-- Slide Item -->
                     
                        <!-- Slide Item END -->
                        <!-- Slide Item -->
                      
                        <!-- Slide Item END -->
                        <!-- Slide Item -->
                      
                        <?php endforeach; ?>
                        <!-- Slide Item END -->
                    </div>
                </div>
                <!-- Parallax Slider END -->

                <!-- Slider Caption -->
                <div class="slider-caption">
                    <div class="slider-dat slider-block d-flex align-items-center h-100 justify-content-md-end justify-content-center absolute w-100"
                        id="slide-0">
                        <div class="card content-block relative ">
                            <div class="project-categ d-inline-block">
                                <span>Product</span>
                            </div>
                            <h1 class="bold-caption" data-splitting>Lulu Mall</h1>
                            <div class="word-wrap"></div>
                            <div class="descript">
                                <ul class="sub-text-header">
                                    <li>
                                        <h5>Agency</h5>
                                        <span class="line-before">
                                            Personal Project</span>
                                    </li>
                                    <li>
                                        <h5>Client </h5>
                                        <span class="line-before"> Lulu Group </span>
                                    </li>
                                    <li>
                                        <h5>published </h5>
                                        <span class="line-before"> 10 April 2020 </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="block mt-4 js-case-study">
                                <div class="btn-group-el">
                                    <a href="case-study-lulu.php" class="btn btn-case-study animate-this">
                                        View Case
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="slider-dat slider-block d-flex align-items-center h-100 justify-content-md-end justify-content-center absolute w-100"
                        id="slide-1">
                        <div class="card content-block relative ">
                            <div class="project-categ d-inline-block">
                                <span>Product</span>
                            </div>
                            <h1 class="bold-caption" data-splitting>My Study</h1>
                            <div class="descript">
                                <ul class="sub-text-header">
                                    <li>
                                        <h5>Agency</h5>
                                        <span class="line-before">Personal Project</span>
                                    </li>
                                    <li>
                                        <h5>Client </h5>
                                        <span class="line-before">My Study</span>
                                    </li>
                                    <li>
                                        <h5>Published </h5>
                                        <span class="line-before"> 10 April 2020 </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="block mt-4 js-case-study">
                                <div class="btn-group-el">
                                    <a href="case-study-study.php" class="btn btn-case-study animate-this">
                                        View Case
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="slider-dat slider-block d-flex align-items-center h-100 justify-content-md-end justify-content-center absolute w-100"
                        id="slide-2">
                        <div class="card content-block relative ">
                            <div class="project-categ d-inline-block">
                                <span>Product</span>
                            </div>
                            <h1 class="bold-caption" data-splitting>Jik Vik</h1>
                            <div class="descript">
                                <ul class="sub-text-header">
                                    <li>
                                        <h5>Agency</h5>
                                        <span class="line-before">Personal Project</span>
                                    </li>
                                    <li>
                                        <h5>Client </h5>
                                        <span class="line-before">Jik Vik</span>
                                    </li>
                                    <li>
                                        <h5>Published </h5>
                                        <span class="line-before"> 10 April 2020 </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="block mt-4 js-case-study">
                                <div class="btn-group-el">
                                    <a href="case-study-jik.php" class="btn btn-case-study animate-this">
                                        View Case
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="slider-dat slider-block d-flex align-items-center h-100 justify-content-md-end justify-content-center absolute w-100"
                        id="slide-3">
                        <div class="card content-block relative ">
                            <div class="project-categ d-inline-block">
                                <span>Product</span>
                            </div>
                            <h1 class="bold-caption" data-splitting>Moduu</h1>
                            <div class="descript">
                                <ul class="sub-text-header">
                                    <li>
                                        <h5>Agency</h5>
                                        <span class="line-before">Personal Project</span>
                                    </li>
                                    <li>
                                        <h5>Client </h5>
                                        <span class="line-before">Moduu</span>
                                    </li>
                                    <li>
                                        <h5>Published </h5>
                                        <span class="line-before"> 10 April 2020 </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="block mt-4 js-case-study">
                                <div class="btn-group-el">
                                    <a href="case-study-study.php" class="btn btn-case-study animate-this">
                                        View Case
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="slider-dat slider-block d-flex align-items-center h-100 justify-content-md-end justify-content-center absolute w-100"
                        id="slide-4">
                        <div class="card content-block relative ">
                            <div class="project-categ d-inline-block">
                                <span>Product</span>
                            </div>
                            <h1 class="bold-caption" data-splitting>Flipsell</h1>
                            <div class="descript">
                                <ul class="sub-text-header">
                                    <li>
                                        <h5>Agency</h5>
                                        <span class="line-before">Personal Project</span>
                                    </li>
                                    <li>
                                        <h5>Client </h5>
                                        <span class="line-before">Flipsell</span>
                                    </li>
                                    <li>
                                        <h5>Published </h5>
                                        <span class="line-before"> 10 April 2020 </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="block mt-4 js-case-study">
                                <div class="btn-group-el">
                                    <a href="case-study-study.php" class="btn btn-case-study animate-this">
                                        View Case
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="slider-dat slider-block d-flex align-items-center h-100 justify-content-md-end justify-content-center absolute w-100"
                        id="slide-5">
                        <div class="card content-block relative ">
                            <div class="project-categ d-inline-block">
                                <span>Product</span>
                            </div>
                            <h1 class="bold-caption" data-splitting>Real Estate</h1>
                            <div class="descript">
                                <ul class="sub-text-header">
                                    <li>
                                        <h5>Agency</h5>
                                        <span class="line-before">Personal Project</span>
                                    </li>
                                    <li>
                                        <h5>Client </h5>
                                        <span class="line-before">Real Estate</span>
                                    </li>
                                    <li>
                                        <h5>Published </h5>
                                        <span class="line-before"> 10 April 2020 </span>
                                    </li>
                                </ul>
                            </div>

                            <div class="block mt-4 js-case-study">
                                <div class="btn-group-el">
                                    <a href="case-study-study.php" class="btn btn-case-study animate-this">
                                        View Case
                                    </a>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
                <!-- Slider Caption END -->
            </div>
            <!-- Slider Large END -->

            <!-- Slider Small -->
            <div class="parallax-block-sm">
                <div class="slider-block js-slider-block">
                    <!-- Parallax Slider -->
                    <div class="swiper-container parallax-slider-sm js-parallax-thumb">
                        <div class="swiper-wrapper">

                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="img-container"
                                    style="background-image: url(./assets/images/slider/sm/study.png);">
                                </div>
                            </div>
                            <!-- Slide Item END -->

                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="img-container"
                                    style="background-image: url(./assets/images/slider/sm/jik.png);">
                                </div>
                            </div>
                            <!-- Slide Item END -->
                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="img-container"
                                    style="background-image: url(./assets/images/slider/sm/modu.png);">
                                </div>
                            </div>
                            <!-- Slide Item END -->

                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="img-container"
                                    style="background-image: url(./assets/images/slider/sm/flip.png);">
                                </div>
                            </div>
                            <!-- Slide Item END -->

                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="img-container"
                                    style="background-image: url(./assets/images/slider/sm/real.png);">
                                </div>
                            </div>
                            <!-- Slide Item END -->

                            <!-- Slide Item -->
                            <div class="swiper-slide">
                                <div class="img-container"
                                    style="background-image: url(./assets/images/slider/sm/lulu-m.png);">
                                </div>
                            </div>
                            <!-- Slide Item END -->

                        </div>
                    </div>
                </div>

                <div class="control-num">
                    <span class="sup"></span>
                </div>

            </div>
            <!-- Parallax Slider END -->


            <!-- Fixed bottom -->
            <div class="slid-control">
                <div class="controls">
                    <div class="prev-control js-swiper-button-prev swiper-button-prev">
                        <div class="arrow-icon">
                            <svg version="1.1" width="15" class="v-middle " fill="#fff"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 256 256" xml:space="preserve">
                                <polygon
                                    points="207.093,30.187 176.907,0 48.907,128 176.907,256 207.093,225.813 109.28,128">
                                </polygon>
                            </svg>
                        </div>
                        <div class="arrow-label right-align">
                            Prev
                        </div>
                    </div>

                    <div class="next-control js-swiper-button-next swiper-button-next">
                        <div class="arrow-icon">
                            <svg version="1.1" class="v-middle " width="15" fill="#fff"
                                xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px"
                                y="0px" viewBox="0 0 256 256" xml:space="preserve">
                                <polygon
                                    points="79.093,0 48.907,30.187 146.72,128 48.907,225.813 79.093,256 207.093,128">
                                </polygon>
                            </svg>
                        </div>
                        <span class="arrow-label left-align">
                            Next
                        </span>
                    </div>
                </div>

            </div>

            <!-- Fixed bottom END -->

            <!-- Progressbar -->
            <div class="progress-controls ">
                <div class="controls">
                    <div class="box-counter js-active-count">
                    </div>
                    <div class="relative h-100">
                        <div class="custom-pagination"></div>
                    </div>
                    <div class="box-counter js-total-slide">

                    </div>
                </div>
                
            </div>
            <!-- Progressbar END -->
        </section>
        <!-- Intro Block END -->



        <!-- Services -->
        <?php 
                $serviceslist = get_field('services');
                if($serviceslist):
            ?>
        <section class="hm-service-list">
            <div class="bg-layer">
                <div class="circle-small"></div>
                <div class="bg-dots">
                   
                    <img src="<?php echo $serviceslist['service_image']; ?>" class="img-fluid" alt="cover">
                </div>
            </div>
            <div class="container">
                <div class="row row-margin">
                    <div class="col-md-5">
                        <h3><?php echo $serviceslist['service_main_heading']; ?>
                        </h3>
                    </div>
                    <div class="col-md-7">
                        <p class="main-text "><?php echo $serviceslist['service_main_content']; ?>
                        </p>
                    </div>
                </div>
                <div class="row service-cards">
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card" >
                            <a href="#">
                                <div class="media">
                                  
                                    <img src="<?php echo $serviceslist['service1_image']; ?>" class="media-img" alt="cover">
                                    <div class="media-body">
                                        <h4><?php echo $serviceslist['service1_heading']; ?></h4>
                                        <p>
                                            <?php echo $serviceslist['service1_content']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media ">
                                   
                                    <img src="<?php echo $serviceslist['service2_image']; ?>" class="media-img" alt="cover">
                                    <div class="media-body">

                                        <h4> <?php echo $serviceslist['service2_heading']; ?></h4>
                                        <p> <?php echo $serviceslist['service2_content']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media ">
                                   
                                    <img src="<?php echo $serviceslist['service3_image']; ?>" class="media-img" alt="cover">
                                    <div class="media-body">

                                        <h4> <?php echo $serviceslist['service3_heading']; ?></h4>
                                        <p> <?php echo $serviceslist['service3_content']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media ">
                                   
                                    <img src="<?php echo $serviceslist['service4_image']; ?>" class="media-img" alt="cover">
                                    <div class="media-body">

                                        <h4> <?php echo $serviceslist['service4_heading']; ?></h4>
                                        <p> <?php echo $serviceslist['service4_content']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media ">
                                   
                                    <img src="<?php echo $serviceslist['service5_image']; ?>" class="media-img" alt="cover">
                                    <div class="media-body">

                                        <h4> <?php echo $serviceslist['service5_heading']; ?></h4>
                                        <p> <?php echo $serviceslist['service5_content']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media ">
                                   
                                    <img src="<?php echo $serviceslist['service6_image']; ?>" class="media-img" alt="cover">
                                    <div class="media-body">

                                        <h4> <?php echo $serviceslist['service6_heading']; ?></h4>
                                        <p> <?php echo $serviceslist['service6_content']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                  
                   
                  
                  
                    <div class="col-12">
                        <div class="all-service-link text-center ">
                            <a href="<?php echo get_page_link('851'); ?>" class="btn all-project-list" target="_blank">View all services</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
      
        <!-- Services END -->

        <!-- Portfolio -->
        <section class="hm-portfolio-wrapper">
            <div class="container">
                <div class="col-md-8 text-center mx-auto">
                <?php 
                            $captions = get_field('caption');
                            if($captions):
                        ?>
                    <h3 class="caption-narrow"><?php echo $captions['caption_text']; ?> </h3>
                    <?php endif; ?>
                </div>
            </div>
            <?php 
                            $artist = get_field('artist_booking');
                            if($artist):
                        ?>

            <div class="featured-work-block">
                <div class="fixed-bg-layer">
                   
                    <img src="<?php echo $artist['cover_image']; ?>" class="img-fluid" alt="cover">
                </div>

                <div class="container work-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="container-img">
                                    <div class="device" data-parallax='{"y": -50,  "smoothness": 20}'>
                                    <img src="<?php echo $artist['device_image']; ?>" class="img-fluid" alt="img">
                                    </div>
                                    <div class="device" data-parallax='{"y": -50,  "smoothness": 20}'>
                                        <img src="<?php echo $artist['device_image2']; ?>" class="img-fluid" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                      

                        <div class="col-md-6">
                            <div class="card">
                                <div class="container-text">
                                  
                                    <h4><?php echo $artist['heading']; ?> </h4>

                                  
                                        <p><?php echo $artist['content']; ?></p>
                                    <a href="" class="btn-work-all text-uppercase">View Work

                                    </a>
                                </div>
                            </div>
                        </div>
                      

                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php 
                            $cover2 = get_field('cover2_bg');
                            if($cover2):
                        ?>
            <div class="featured-work-block">
                <div class="fixed-bg-layer">
                  
                    <img src="<?php echo $cover2['cover_image2']; ?>" class="img-fluid" alt="cover">
                </div>

                <div class="container work-list">
                    <div class="row">
                        <div class="col-md-6 order-1 order-md-2">
                            <div class="card">
                                <div class="container-img">
                                    <div class="device" data-parallax='{"y": -50,  "smoothness": 20}'>
                                    <img src="<?php echo $cover2['cover2_device1']; ?>" class="img-fluid" alt="img">
                                    </div>
                                    <div class="device" data-parallax='{"y": -50,  "smoothness": 20}'>
                                      
                                        <img src="<?php echo $cover2['cover2_device2']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="container-text">
                                  
                                    <h4><?php echo $cover2['heading2']; ?> </h4>

                                  
                                        <p><?php echo $cover2['content2']; ?></p>
                                    <a href="" class="btn-work-all text-uppercase">View Work

                                    </a>
                                </div>
                            </div>
                        </div>

                       

                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php 
                $cover3 = get_field('cover3');
                if($cover3):
            ?>


            <div class="featured-work-block">
                <div class="fixed-bg-layer">
                   
                    <img src="<?php echo $cover3['cover3_bg']; ?>" class="img-fluid" alt="cover">
                </div>

                <div class="container work-list">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="container-img">
                                    <div class="device" data-parallax='{"y": -50,  "smoothness": 20}'>
                                       
                                        <img src="<?php echo $cover3['cover3_device1']; ?>" class="img-fluid" alt="img">
                                    </div>
                                    <div class="device" data-parallax='{"y": -50,  "smoothness": 20}'>
                                      
                                           <img src="<?php echo $cover3['cover3_device2']; ?>" class="img-fluid" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="container-text">
                                  
                                    <h4><?php echo $cover3['heading3']; ?> </h4>

                                  
                                        <p><?php echo $cover3['content3']; ?></p>
                                    <a href="" class="btn-work-all text-uppercase">View Work

                                    </a>
                                </div>
                            </div>
                        </div>

                      

                    </div>
                </div>
            </div>
            <?php endif; ?>
            <?php 
                $cover4 = get_field('cover4');
                if($cover4):
            ?>

            <div class="featured-work-block">
                <div class="fixed-bg-layer">
                   
                    <img src="<?php echo $cover4['cover4_bg']; ?>" class="img-fluid" alt="cover">
                </div>

                <div class="container work-list">
                    <div class="row">
                        <div class="col-md-6 order-1 order-md-2">
                            <div class="card">
                                <div class="container-img">
                                    <div class="device" data-parallax='{"y": -50,  "smoothness": 20}'>
                                       
                                        <img src="<?php echo $cover4['cover4_device1']; ?>" class="img-fluid" alt="img">
                                    </div>
                                    <div class="device" data-parallax='{"y": -50,  "smoothness": 20}'>
                                      
                                        <img src="<?php echo $cover4['cover4_device2']; ?>" class="img-fluid" alt="img">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="container-text">
                                  
                                    <h4><?php echo $cover4['heading4']; ?> </h4>

                                  
                                        <p><?php echo $cover4['content4']; ?></p>
                                    <a href="" class="btn-work-all text-uppercase">View Work

                                    </a>
                                </div>
                            </div>
                        </div>

                       
                    </div>
                </div>
            </div>
            <?php endif; ?>


            <div class="container all-projects-link mb-4">
                <div class="text-center">
                    <button class="btn all-project-list" data-aos="fade-down" data-aos-easing="ease"
                        data-aos-delay="400">
                        View all projects
                    </button>
                </div>
            </div>

        </section>
        <!-- Protfolio END -->

        <!-- About -->
        <?php 
                $about = get_field('about');
                if($about):
            ?>

        <section class="hm-about-us">
            <div class="bg-shapes">
                <div class="circle-large"> </div>
            </div>

            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-5">
                        <div class="card left-panel">
                            <div class="inner-margin">
                                <h2 class="caption-bold " data-aos="fade-up" data-aos-offset="200" data-aos-delay="300"
                                    data-aos-mirror="true" data-aos-anchor-placement="top-bottom">
                                  
                                    <h4><?php echo $about['heading']; ?> </h4>
                                </h2>

                                
                                        <p><?php echo $about['content']; ?></p>
                                      
                              

                                <a href="" class="btn-read-more " data-aos="fade-up" data-aos-offset="200"
                                    data-aos-delay="500" data-aos-mirror="true"
                                    data-aos-anchor-placement="top-bottom">Read
                                    More
                                    <span>
                                            <img src="<?php echo $about['image']; ?>" class="img-fluid" alt="icon"></span></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 col-lg-7 overlay-layer">

                      
                        <div class="awwards-bg">  <img src="<?php echo $about['about_bg']; ?>" class="img-fluid" alt="cover"></div>

                        
                        <div class="card right-panel image-layer counter-pg" id="counter">
                            <div class="inner-padd">
                                <div class="row">
                                    <div class="col">
                                        <div class="content right">
                                            <h3>
                                                <span class="counter-value" data-count="800">1000</span><sup>+</sup>
                                            </h3>
                                           
                                            <p><?php echo $about['about1']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="content left">
                                            <h3>
                                                <span class="counter-value" data-count="150">80</span><sup>+</sup>
                                            </h3>
                                           
                                            <p><?php echo $about['about2']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="content right">
                                            <h3>
                                                <span class="counter-value" data-count="100">30</span><sup>+</sup>
                                            </h3>
                                          
                                            <p><?php echo $about['about3']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col width-center">
                                        <div class="content center">
                                            <h3>
                                                <span class="counter-value" data-count="12">20</span><sup>+</sup>
                                            </h3>
                                          
                                            <p><?php echo $about['about4']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="content left">
                                            <h3>
                                                <span class="counter-value" data-count="200">50</span><sup>+</sup>
                                            </h3>
                                          
                                            <p><?php echo $about['about5']; ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="content right luxy-el" data-speed-y="3" data-offset="-280">
                                            <h3>
                                                <span class="counter-value" data-count="100">100</span><sup>%</sup>
                                            </h3>
                                           
                                            <p><?php echo $about['about6']; ?></p>
                                        </div>
                                    </div>
                                    <div class="col">
                                        <div class="content left luxy-el" data-speed-y="3" data-offset="-280">
                                            <h3>
                                                <span class="counter-value" data-count="100">100</span><sup>%</sup>
                                            </h3>
                                          
                                            <p><?php echo $about['about7']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- About END -->

        <!-- Awwards -->
       

        <section class="hm-awards-sec">
            <div class="container">
                <div class="card content-layout">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="section-head text-center">
                                <h3 data-aos="fade-down" data-aos-offset="200" data-aos-delay="300"
                                    data-aos-mirror="true" data-aos-anchor-placement="top-bottom"><h4><?php the_field('award_heading'); ?> </h4>
                                </h3>
                               
                              
                                   
                                    <?php the_field('content'); ?>
                            </div>
                        </div>
                    </div>

                    <!-- Slider -->
                    <div class="col-md-10 mx-auto awwards-carousel">

                            <div class="js-awwards-slider owl-carousel owl-theme">
                    <?php 
                $awardsliders = get_field('award_slider');
                foreach ($awardsliders as $key => $value):?>
                    <div class="swiper-slide">
                        <div class="card reviews">
                        <div class="card">
                        <div class="card-header">
                     
                        <img src="<?php echo $value['slider_image']; ?>" class="img-fluid" alt="cover">
                       
                                        
                            </div>
                            <div class="card-body">
                            <p class="card-text"><?php echo $value['content']; ?>
                              
                                <span class="text-block">  <?php echo $value['sub_content']; ?></span></p>
                               
                            </div>
                        </div>
                    </div>
                    </div>
                <?php endforeach; ?>
                </div>
            </div>
                   
                    <!-- Slider END -->
                </div>
            </div>
        </section>
      
        <!-- Awwards End -->

        <!-- Client Slider -->
        <section class="clident-logo-slide hm-client-gap">
            <div class="container">
                <div class="section-head text-center">
                    <h3 class="main-heading-lg"><?php the_field('client_heading'); ?></h3>
                </div>
            </div>
           

            <div class="marquee marquee-right">
                <div class="client-brands">
                    <div class="client-brands-items">
                    <?php 
                $clients = get_field('client');
                foreach ($clients as $key => $value):?>
                        <div class="client-brands-item vertical-middle">
                          
                            <img src="<?php echo $value['client_image']; ?>" class="img-fluid" alt="cover">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <div class="marquee marquee-right">
                <div class="client-brands">
                    <div class="client-brands-items">
                    <?php 
                $reverseclients = get_field('client_reverse_image');
                foreach ($reverseclients as $key => $value):?>
                        <div class="client-brands-item vertical-middle">
                          
                            <img src="<?php echo $value['reverse_image']; ?>" class="img-fluid" alt="cover">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
           


           
        </section>
        <!-- Client Slider END -->
        <?php 
                $bloglist = get_field('blog');
                if($bloglist):
            ?>

        <section class="section-blog hm-blog-container">
            <div class="bg-layer">
                <div class="circle-large">
                </div>
                <div class="circle-small"></div>
            </div>
            <div class="container text-container padd-40">
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <h2 class="bold-text"><?php echo $bloglist['blog_heading']; ?></h2>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card">
                            <div class="text-right-pad my-auto">
                                <p><?php echo $bloglist['blog_content']; ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Draggable container -->
            <div class="container blog-panel bg-element padd-40">
                <div class="row">

                    <!-- Blog -->
                    <div class="col-md-6 col-lg-4 mb-3">
                        <a href="">
                            <div class="card ">
                                <div class="card-header">
                                  
                                    <img src="<?php echo $bloglist['blog1_image']; ?>" class="img-fluid" alt="cover">
                                </div>
                                <div class="card-body">
                                    <div class="posted">
                                        <p><?php echo $bloglist['blog1_posted']; ?></p>
                                    </div>
                                    <h4 class="card-text">
                                    <?php echo $bloglist['blog1_subcontent']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Blog END -->

                    <!-- Blog -->
                    <div class="col-md-6 col-lg-4 mb-3">
                        <a href="">
                            <div class="card ">
                                <div class="card-header">
                                  
                                    <img src="<?php echo $bloglist['blog2_image']; ?>" class="img-fluid" alt="cover">
                                </div>
                                <div class="card-body">
                                    <div class="posted">
                                        <p><?php echo $bloglist['blog2_posted']; ?></p>
                                    </div>
                                    <h4 class="card-text">
                                    <?php echo $bloglist['blog2_subcontent']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Blog END -->


                    <!-- Blog -->
                    <div class="col-md-6 col-lg-4 mb-3">
                        <a href="">
                            <div class="card ">
                                <div class="card-header">
                                  
                                   
                                    <img src="<?php echo $bloglist['blogfull_image']; ?>" class="img-fluid" alt="cover">
                                </div>
                                <div class="card-body">
                                    <div class="posted">
                                        <p><?php echo $bloglist['blog3_posted']; ?></p>
                                    </div>
                                    <h4 class="card-text">
                                    <?php echo $bloglist['blog3_subcontent']; ?>
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Blog END -->


                </div>
            </div>

            <div class="container">
                <div class="text-center">
                    <button class="btn all-blog-list">
                        View all blogs
                    </button>
                   
                </div>
            </div>


        </section>
        <?php endif; ?>
        <!-- What We do END-->






        <!-- Testimonial Demo -->
        <section class="testimonial-carousel-hm">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-8 col-xl-6 mx-auto text-center">
                        <h3 class="caption-bold" >What People Say</h3>
                    </div>
                    <div class="col-md-11">
                        <div class="card">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">

                                <div class="carousel-inner">

                                <?php 
                $peoplesayall = get_field('people_say');
               
                foreach ($peoplesayall as $key => $value):?>


                                    <div class="carousel-item <?php if($key ==1){echo "active";} ?>"> 

                                        <div class="card">
                                            <div class="card-body">
<br><br><br>
                                                <p><?php echo $value['people_content']; ?> </p>
                                            </div>
                                            <div class="card-footer">
                                                <div class="avtar text-center">
                                                    <h4 class="name"><?php echo $value['people_name']; ?> </h4>
                                                    <p class="role"><?php echo $value['people_role']; ?> </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <?php endforeach; ?>
                                  
                                 
                                   
                                   
                                  
                                   
                                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                              

                                            <div class="marquee marquee-right">
                                <div class="client-brands-item vertical-middle">
                                <?php 
                $foundersall = get_field('founder');
                foreach ($foundersall as $key => $value):?>
                                   
                                            <img src="<?php echo $value['founder_image']; ?>" class="img-fluid avatar-img"
                                                alt="avatar">
                                                <?php endforeach; ?>
                                                </div>
                                       
                                       
                                        
                                       
                                      
                                       
                                        <!-- <li data-target="#carouselExampleIndicators" data-slide-to="7" class="active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/av-01.png" class="img-fluid avatar-img"
                        alt="avatar">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/av-01.png" class="img-fluid avatar-img"
                        alt="avatar">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/av-01.png" class="img-fluid avatar-img"
                        alt="avatar">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/av-01.png" class="img-fluid avatar-img"
                        alt="avatar">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/av-01.png" class="img-fluid avatar-img"
                        alt="avatar">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/av-01.png" class="img-fluid avatar-img"
                        alt="avatar">
                </li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/thumbnail/av-01.png" class="img-fluid avatar-img"
                        alt="avatar">
                </li> -->
                                  
                                </div>

                              


                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Testimonial Demo END-->

        <!-- Contact -->
        <?php 
                            $contactusall = get_field('contact_us');
                            if($contactusall):
                        ?>
        <section class="contact-us section-gap-project ">
            <div class="container">
                <div class="col-md-6 col-lg-4">
                    <div class="card transparent">
                        <div class="media bottom-up ">
                            <div class="media-body width-adjust ">
                                <h3 class="caption-bold "><?php echo $contactusall['contact_title']; ?></h3>
                            </div>
                            <div class="media-right align-self-end mb-2">
                                <div class="mb-3"><img src="<?php echo $contactusall['contact_image']; ?>"
                                        class="img-fluid icon-arrow" alt="img">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-wrapper">
                <div class="container relative">
                    <div class="col-md-12 col-lg-5">
                        <div class="card contact-panel">

                            <a href="#" class="object-center" >
                                <div class="media">
                                    <div class="media-left">
                                    <img src="<?php echo $contactusall['mail_image']; ?>" class="img-fluid" alt="icon">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $contactusall['mail_heading']; ?></p>
                                        <h4><?php echo $contactusall['mail_id']; ?></h4>
                                    </div>
                                </div>
                            </a>


                            <a href="#" class="object-center" >
                                <div class="media mb-0">
                                    <div class="media-left">
                                       
                                        
                                    <img src="<?php echo $contactusall['skype_image']; ?>" class="img-fluid" alt="icon">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $contactusall['skype_heading']; ?></p>
                                        <h4><?php echo $contactusall['skype_id']; ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <section>
                    <?php echo do_shortcode('[contact-form-7 id="290" title="Contact form 1"]'); ?>

                    </section>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Contact END -->
        <?php 
            $locationall = get_field('location');
            
            if($locationall):
        ?>

        <section class="locations-sec">
            
            <img src="<?php echo $locationall['location_image']; ?>" class="bg-image-layer" alt="icon">
            
            <div class="container sec-gap-lg ">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <h3 class="caption-bold"><?php echo $locationall['locations_title']; ?></h3>
                    </div>
                </div>

                <!-- Loacation -->
                <div class="row">
                    <div class="col-md-12 col-lg-11 mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card">
                                    <div class="media">
                                        <div class="media-left">
                                           
                                            <img src="<?php echo $locationall['location1_image']; ?>" class="bg-image-layer" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h5><?php echo $locationall['location1_place']; ?></h5>
                                            <p class="mail"><?php echo $locationall['location1_mail']; ?></p>
                                            <p class="phone"><?php echo $locationall['location1_phone']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card">
                                    <div class="media">
                                        <div class="media-left">
                                           
                                            <img src="<?php echo $locationall['location2_image']; ?>" class="bg-image-layer" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h5><?php echo $locationall['location2_place']; ?></h5>
                                            <p class="mail"><?php echo $locationall['location2_mail']; ?></p>
                                            <p class="phone"><?php echo $locationall['location2_phone']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card">
                                    <div class="media">
                                        <div class="media-left">
                                           
                                            <img src="<?php echo $locationall['location3_image']; ?>" class="bg-image-layer" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h5><?php echo $locationall['location3_place']; ?></h5>
                                            <p class="mail"><?php echo $locationall['location3_mail']; ?></p>
                                            <p class="phone"><?php echo $locationall['location3_phone']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>
                <!-- Loacation -->
            </div>
        </section>
        <?php endif; ?>
      

       
    </main>
</div>
<?php get_footer(); ?>