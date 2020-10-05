<?php 
/*
Template Name: About-Us
*/
    get_header();
    the_post();
?>
 
<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="about-page">
    <?php 
                $aboutmain = get_field('main_about');
                if($aboutmain):
               
            ?>
        <!-- Sub banner -->
        <section class="pg-aboutus background-theme ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mb-4">
                        <div class="card left-panel">
                            <div class="sub-heading-lg"  data-aos="fade-up" data-aos-easing="ease" data-aos-delay="500">
                          <p> <?php echo $aboutmain['chat_content']; ?></p>
                            </div>
                            <h1 class="main-heading-lg" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="500">
                           <p> <?php echo $aboutmain['main_heading']; ?></p>
                            </h1>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-11 mb-4">
                        <div class="card right-panel panel-padding">
                            <div class="sub-info-block">
                               <p><?php echo $aboutmain['main_content']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- shape -->
            <div class="shape-sm-circle"></div>
        </section>
        <?php endif; ?>
        <!-- Sub banner End -->

        <?php 
                $allarrow = get_field('arrow');
               
            ?>
        <section class="pg-about-slide ">
            <div class="container">
                <div class="row">
                    <div class="col-md-2 order-2 order-md-1">
                        <div class="d-flex h-100 w-100">
                            <div class="slider-nav align-self-center">
                                <button class="nav-next" id="js-next-el">
                                   
                                    <img src="<?php echo $allarrow['image1']; ?>" class="img-fluid" alt="cover">
                                </button>
                                <button class="nav-prev" id="js-prev-el">
                                  
                                    <img src="<?php echo $allarrow['image2']; ?>" class="img-fluid" alt="cover">
                                    
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 order-1 order-md-2">
                        <div class="slider-wrapper js-negative-spacing">
                            <!-- shape -->
                            <div class="shape-grid">
                            </div>
                            <!-- shape -->
                            <div class="js-about-slider owl-carousel owl-theme">
                            <?php 
                $aboutcompanyall = get_field('about_project');
                foreach ($aboutcompanyall as $key => $value):?>
                                <div class="item">
                                    <div class="card card-layout">

                                        <div class="card-header">
                                            <h4 class="card-title"><?php echo $value['about1']; ?></h4>
                                        </div>
                                        <div class="card-body">
                                            <p class="card-text"><?php echo $value['about2']; ?></p>
                                        </div>

                                    </div>
                                </div>
                                <?php endforeach; ?>
                               
                              

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Mission -->
        <?php 
                $allmission = get_field('mission');
                if($allmission):
            ?>

        <section class="core-values" id="coreValue">
            <div class="container">
                <div class="container-padding ">

                    <div class="row">
                        <div class="col-md-5 mb-3">
                            <div class="card col-left">
                                <h2 class="text-bold"><?php echo $allmission['mission_heading']; ?>
                                  </h2>
                            </div>
                        </div>

                        <div class="col-md-7 mb-3">
                            <div class="card col-right ">
                                <div class="notes my-auto">
                                    <p data-aos="fade-down" data-aos-easing="ease" data-aos-delay="400"><?php echo $allmission['mission_content']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <!-- shapes -->
            <div class="lg-circle"></div>
            <div class="sm-circle"></div>
            <!-- shapes -->

        </section>
        <?php endif; ?>
         <?php 
                $allactivity = get_field('activity');
                if($allactivity):
            ?>

        <section class="negative-padd">
            <div class="container">
                <div class="container-padding   pb-shape relative">
                    <div class="row">

                        <div class="col-md-6 col-lg-4 mb-3">
                            <div class="card box-mission">
                                <div class="card-header">
                                    <div class="icon">
                                      
                                        <img src="<?php echo $allactivity['activity_image']; ?>" class="img-fluid" alt="cover">

                                    </div>
                                </div>
                                <div class="card-body" >
                                    <h4 class="card-title"><?php echo $allactivity['activity_heading']; ?></h4>
                                    <p><?php echo $allactivity['activity_content']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-3">
                            <div class="card box-mission">
                                <div class="card-header">
                                    <div class="icon">
                                     
                                        <img src="<?php echo $allactivity['activity_image1']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                </div>
                                <div class="card-body" >
                                    <h4 class="card-title"><?php echo $allactivity['activity_heading1']; ?></h4>
                                    <p><?php echo $allactivity['activity_content1']; ?></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-4 mb-3">
                            <div class="card box-mission ">
                                <div class="card-header">
                                    <div class="icon">
                                      
                                        <img src="<?php echo $allactivity['activity_image2']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                </div>
                                <div class="card-body">
                                    <h4 class="card-title"><?php echo $allactivity['activity_heading2']; ?></h4>
                                    <p><?php echo $allactivity['activity_content2']; ?></p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <!-- shape -->
                    <div class="shape-grid">
                    </div>
                    <!-- shape -->
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Mission End -->


        <!-- Teams -->
        <?php 
                $allteam = get_field('team');
                if($allteam):
            ?>
        <section class="faculty-block">
            <div class="container">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <div class="section-title text-center line-gap-bottom " >
                            <h3 class="heading-bold line-gap " ><?php echo $allteam['team_heading']; ?></h3>
                            <p class="sub-heading" ><?php echo $allteam['team_content']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card box-faculty">
                            <div class="card-header">

                              
                                <img src="<?php echo $allteam['team_image']; ?>" class="img-fluid" alt="cover">

                            </div>
                            <div class="card-body">
                                <h4 class="card-title"><?php echo $allteam['team_title']; ?></h4>
                                <p class="role "><?php echo $allteam['team_role']; ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="social-media">
                                    <a href="">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card box-faculty" >
                            <div class="card-header">

                            <img src="<?php echo $allteam['team_image1']; ?>" class="img-fluid" alt="cover">

                            </div>
                            <div class="card-body">
                            <h4 class="card-title"><?php echo $allteam['team_title1']; ?></h4>
                            <p class="role "><?php echo $allteam['team_role']; ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="social-media">
                                    <a href="">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card box-faculty">
                            <div class="card-header">

                            <img src="<?php echo $allteam['team_image2']; ?>" class="img-fluid" alt="cover">

                            </div>
                            <div class="card-body">
                            <h4 class="card-title"><?php echo $allteam['team_title2']; ?></h4>
                            <p class="role "><?php echo $allteam['team_role2']; ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="social-media">
                                    <a href="">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 col-lg-3 mb-4">
                        <div class="card box-faculty">
                            <div class="card-header">

                            <img src="<?php echo $allteam['team_image3']; ?>" class="img-fluid" alt="cover">

                            </div>
                            <div class="card-body">
                            <h4 class="card-title"><?php echo $allteam['team_title3']; ?></h4>
                            <p class="role "><?php echo $allteam['team_role3']; ?></p>
                            </div>
                            <div class="card-footer">
                                <div class="social-media">
                                    <a href="">
                                        <i class="fa fa-facebook" aria-hidden="true"></i>
                                    </a>
                                    <a href="">
                                        <i class="fa fa-twitter" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Teams END-->

        <!-- Awwards Block -->
        <?php 
                $allblock = get_field('award_block');
                if($allblock):
            ?>

        <section class="pg-about-awwards">
            <div class="container h-100">
                <div class="inner-container">
                    <div class="d-flex justify-content-between w-100 flex-block counter-pg-inner" id="counter">
                        <div class="col-left">
                            <div class="card">
                                <h3 class="number-counter"> <?php echo $allblock['award_block1']; ?>    
                                </h3>
                                <h4> <?php echo $allblock['award_block2']; ?></h4>
                            </div>

                            <div class="card">
                                <h3 class="number-counter">
                                <?php echo $allblock['award_block3']; ?>
                                </h3>
                                <h4><?php echo $allblock['award_block4']; ?></h4>
                            </div>

                        </div>
                        <div class="col-mid">
                            <div class="card">
                                <h3 class="number-counter">  <?php echo $allblock['award_block5']; ?>
                                   
                                </h3>
                                <h4>  <?php echo $allblock['award_block6']; ?></h4>
                            </div>
                            <div class="card">
                                <h3 class="number-counter">
                                <?php echo $allblock['award_block7']; ?>
                                </h3>
                                <h4>  <?php echo $allblock['award_block8']; ?></h4>
                            </div>
                            <div class="card">
                                <h3 class="number-counter">
                                <?php echo $allblock['award_block9']; ?>
                                </h3>
                                <h4 > <?php echo $allblock['award_block10']; ?></h4>
                            </div>
                        </div>
                        <div class="col-right">
                            <div class="card">
                                <h3 class="number-counter">
                                <?php echo $allblock['award_block11']; ?>
                                </h3>
                                <h4>  <?php echo $allblock['award_block12']; ?></h4>
                            </div>
                            <div class="card">
                                <h3 class="number-counter">  <?php echo $allblock['award_block13']; ?>
                             </h3>
                                <h4>  <?php echo $allblock['award_block14']; ?></h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
          <?php endif; ?>
        <!-- Awwards Block -->



        <!-- Awwards -->
        <?php 
                $allourawards = get_field('all_award');
               ?>
        <section class="awwards-block-in ">
            <div class="container z-index-over relative">
                <div class="card content-layout">
                    <div class="row">
                        <div class="col-md-10 mx-auto">
                            <div class="section-head text-center">
                                <h3> <?php echo $allourawards['our_award_heading']; ?>
                                </h3>
                                <p data-aos="fade-up">
                                    <?php echo $allourawards['our_award_content']; ?>
                                    </p>
                            </div>
                        </div>
                    </div>

                    <!-- Slider -->
                    <div class="row">
                        <div class="col-md-10 mx-auto">

                            <div class="awwards-slide js-awwards-slider owl-carousel owl-theme">

                                <!-- Slide -->
                                <?php 
                $allawardsoffice = get_field('our_awards');
                foreach ($allawardsoffice as $key => $value):?>
                            

                                <div class="card">
                                    <div class="card-header">
                                      
                                        <img src="<?php echo $value['award_image']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text"><?php echo $value['award_heading']; ?>
                                           </p>
                                    </div>
                                </div>
                                <?php endforeach; ?>

                                <!-- Slide EnD -->

                                <!-- Slide -->

                               

                                <!-- Slide EnD -->


                                <!-- Slide -->

                               

                                <!-- Slide EnD -->


                                <!-- Slide -->


                                <!-- Slide EnD -->

                                <!-- Slide -->

                               

                                <!-- Slide EnD -->

                            </div>

                        </div>
                    </div>
                    <!-- Slider END -->
                </div>
            </div>
        </section>
        <!-- Awwards End -->

        <!-- Teams -->
        <?php 
                $allmangcontent = get_field('mang_content');
               
            ?>
        <section class="section-teamblock relative">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-lg-7 col-xl-7 mb-3">
                        <div class="card text-card">
                            <div class="sub-heading-sm">
                              
                               <p> <?php echo $allmangcontent['mang_heading1']; ?></p>
                            </div>
                            <h4 class="main-heading-lg">
                              
                                <?php echo $allmangcontent['mang_heading2']; ?>
                            </h4>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-5 d-none d-md-block">
                        <div class="card slider-dots">
                            <div class="owl-theme">
                                <div class="owl-controls" data-aos="zoom-in" data-aos-easing="ease"
                                    data-aos-delay="400">
                                    <div id="customDots" class="owl-dots"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="container team-img-slider">
                <div class="row">
                    <div class="col-md-2 order-2 order-md-1">
                        <div class="d-flex h-100 w-100">
                            <div class="slider-nav align-self-center">
                                <button class="nav-next" id="js-nxt-el">
                                  
                                    <img src="<?php echo $allmangcontent['arrow_image1']; ?>" class="img-fluid" alt="cover">
                                </button>
                                <button class="nav-prev" id="js-prv-el">
                                   
                                    <img src="<?php echo $allmangcontent['arrow_image2']; ?>" class="img-fluid" alt="cover">
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-10 order-1 order-md-2">
                        <div class="slider-wrapper js-negative-spacing">

                            <div class="js-team-carousel  owl-carousel">
                            <?php 
                $allteammang = get_field('team_mang');
                foreach ($allteammang as $key => $value):?>
                                <div class="item">
                                    <div class="img-box">
                                       
                                        <img src="<?php echo $value['mang_image']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                </div>
                               
                                <?php endforeach; ?>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Teams END -->

        <!-- About Whitespace -->
        <div class="white-space-100"></div>


    </main>
</div>

<?php get_footer(); ?>