<?php 
/*
Template Name: Project
*/
    get_header();
    the_post();
?>
<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="page-project">
        <!-- Introduction -->
        <?php 
                $allprojects = get_field('project');
               
            ?>
        <section class="works-block">
            <div class="container">
                <div class="container-padding">
                    <h4 class="subtitle"><?php echo $allprojects['project_heading']; ?></h4>

                    <div class="row">
                        <div class="col-md-6 col-lg-5 col-xl-5 mb-3">
                            <div class="card layout-left">
                                <h3 class="title-bold"><?php echo $allprojects['project_content']; ?></h3>
                            </div>
                        </div>

                        <div class="col-md-6 col-lg-7 col-xl-7 mb-3">
                            <div class="card layout-right">
                                <div class="note"> 
                                   <p> <?php echo $allprojects['project_sub_content']; ?></p>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        
        <!-- Introduction -->

        <!-- Project List -->
        <?php 
                $allprojectlist = get_field('project_list');
               
            ?>

        <section class="project-listing">
            <div class="container">
                <div class="row">

                    <div class="col-md-6  grid-wrapper">
                        <div class="image-box">
                            <a href="project-lulu.php">
                                <div class="tilt-wrapper">
                                  
                                    <img src="<?php echo $allprojectlist['project_list1']; ?>" class="img-fluid" alt="cover">
                                </div>
                                <div class="details">
                                    <h4><?php echo $allprojectlist['project_heading1']; ?>
                                    </h4>
                                    <p class="small-text">
                                        <?php echo $allprojectlist['project_content']; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6  grid-wrapper">
                        <div class="image-box">
                            <a href="project-details.php">
                                <div class="tilt-wrapper">
                                 
                                    <img src="<?php echo $allprojectlist['project_image2']; ?>" class="img-fluid" alt="cover">
                                </div>
                                <div class="details"><h4><?php echo $allprojectlist['project_heading2']; ?></h4>
                                    <p class="small-text"><?php echo $allprojectlist['project_content2']; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6  grid-wrapper">
                        <div class="image-box">
                            <a href="project-jik.php">
                                <div class="tilt-wrapper">
                                <img src="<?php echo $allprojectlist['project_image3']; ?>" class="img-fluid" alt="cover">
                                </div>
                                <div class="details">
                                    <h4><?php echo $allprojectlist['project_heading3']; ?></h4>
                                    <p class="small-text ">
                                    <?php echo $allprojectlist['project_content3']; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6  grid-wrapper">
                        <div class="image-box">
                            <a href="project-modu.php">
                                <div class="tilt-wrapper">
                                   
                                    <img src="<?php echo $allprojectlist['project_image4']; ?>" class="img-fluid" alt="cover">
                                </div>
                                <div class="details">
                                    <h4><?php echo $allprojectlist['project_heading4']; ?></h4>
                                    <p class="small-text ">
                                    <?php echo $allprojectlist['project_content4']; ?></p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6  grid-wrapper">
                        <div class="image-box">
                            <a href="project-mystudy.php">
                                <div class="tilt-wrapper">
                                <img src="<?php echo $allprojectlist['project_image5']; ?>" class="img-fluid" alt="cover">
                                </div>
                                <div class="details">
                                    <h4><?php echo $allprojectlist['project_heading5']; ?></h4>
                                    <p class="small-text " > <?php echo $allprojectlist['project_content5']; ?>
                                     </p>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="col-md-6  grid-wrapper">
                        <div class="image-box">
                            <a href="project-realestate.php">
                                <div class="tilt-wrapper">
                                <img src="<?php echo $allprojectlist['project_iamge6']; ?>" class="img-fluid" alt="cover">
                                </div>
                                <div class="details">
                                    <h4><?php echo $allprojectlist['project_heading6']; ?></h4>
                                    <p class="small-text ">
                                    <?php echo $allprojectlist['project_content6']; ?>  </p>
                                </div>
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Project List END-->

        <!-- Client Slider -->
      

        <section class="clident-logo-slide">
            <div class="container">
                <div class="section-head text-center">
                    <h3 class="main-heading-lg"><?php the_field('pro_client_title'); ?></h3>
                </div>
            </div>
            <div class="marquee marquee-left">
                <div class="client-brands">
                    <div class="client-brands-items">
                    <?php 
                $proclientsproject = get_field('project_client');?>
                  <?php  foreach ($proclientsproject as $key => $value):?>
                        <div class="client-brands-item vertical-middle">
                        <img src="<?php echo $value['pro_client_image']; ?>" class="img-fluid" alt="cover">
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
           
            <div class="marquee marquee-right">
                <div class="client-brands">
                    <div class="client-brands-items">
                    <?php 
                $reverseclientsprojects = get_field('reverseproject_client');?>
                  <?php  foreach ($reverseclientsprojects as $key => $value):?>
                        <div class="client-brands-item vertical-middle">
                        <img src="<?php echo $value['reverse_image']; ?>" class="img-fluid" alt="cover">
                        </div>
                       
                        <?php endforeach; ?>
                       
                     
                    
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Slider END -->


        <!-- Contact -->
        <?php
        $allcontact= get_field('contact'); ?>
        <section class="contact-us section-gap-project ">
            <div class="container">
                <div class="col-md-6 col-lg-4">
                    <div class="card transparent">
                        <div class="media bottom-up ">
                            <div class="media-body width-adjust ">
                                <h3><?php echo $allcontact['heading']; ?></h3>
                            </div>
                            <div class="media-right align-self-end mb-2">
                                <div class="mb-3"><img src="<?php echo $allcontact['image']; ?>" class="img-fluid" alt="cover">
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

                            <a href="#">
                                <div class="media">
                                    <div class="media-left">
                                    <img src="<?php echo $allcontact['mail_image']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $allcontact['mail_heading']; ?></p>
                                        <h4><?php echo $allcontact['mail_content']; ?></h4>
                                    </div>
                                </div>
                            </a>


                            <a href="#
                " class="object-center">
                                <div class="media mb-0">
                                    <div class="media-left">
                                    <img src="<?php echo $allcontact['skype_image']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $allcontact['skype_heading']; ?></p>
                                        <h4><?php echo $allcontact['skype_content']; ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                        <section>
                    <?php echo do_shortcode('[contact-form-7 id="558" title="project form"]'); ?>
                 </section>
                </div>
            </div>
        </section>
        <!-- Contact END -->
        <?php 
            $companylocationall = get_field('location');
            
           
        ?>

        <section class="locations-sec">
            <div class="bg-image-layer">
            <img src="<?php echo $companylocationall['location_image']; ?>" class="img-fluid" alt="icon">
            </div>
            <div class="container sec-gap-lg ">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <h3 ><?php echo $companylocationall['location_heading']; ?></h3>
                    </div>
                </div>

                <!-- Loacation -->
                <div class="row">
                    <div class="col-md-12 col-lg-11   mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card " >
                                    <div class="media">
                                        <div class="media-left">
                                        <img src="<?php echo $companylocationall['location1_image']; ?>" class="img-fluid" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h5><?php echo $companylocationall['location1_place']; ?></h5>
                                            <p class="mail"><?php echo $companylocationall['location1_mail']; ?></p>
                                            <p class="phone"><?php echo $companylocationall['location1_no']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card">
                                    <div class="media">
                                    <img src="<?php echo $companylocationall['location2_image']; ?>" class="img-fluid" alt="icon">

                                        <div class="media-body">
                                            <h5><?php echo $companylocationall['location2_place']; ?></h5>
                                            <p class="mail"><?php echo $companylocationall['location2_mail']; ?></p>
                                            <p class="phone"><?php echo $companylocationall['location2_no']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card " >
                                    <div class="media">
                                    <img src="<?php echo $companylocationall['location3_image']; ?>" class="img-fluid" alt="icon">
                                        <div class="media-body">
                                            <h5><?php echo $companylocationall['location3_place']; ?></h5>
                                            <p class="mail"><?php echo $companylocationall['location3_mail']; ?></p>
                                            <p class="phone"> <?php echo $companylocationall['location3_no']; ?></p>
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

    </main>
</div>


