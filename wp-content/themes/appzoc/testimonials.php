<?php 
/*
Template Name: testimonial
*/
    get_header();
    the_post();
?>
<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="page-testimonial">

        <!-- Sub banner -->
        <?php 
            $alltestimonial = get_field('testimonial');
            if($alltestimonial):
               
        ?>
        <section class="banner-testimonial ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mb-4">
                        <div class="card left-panel">
                            <div class="sub-heading-sm" >
                            <?php echo $alltestimonial['heading']; ?>
                            </div>
                            <h1 class="main-heading-lg">
                            <?php echo $alltestimonial['title']; ?> 

                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <div class="col-12">
                        <div class="all-service-link text-center ">
                            <a href="<?php echo get_page_link('788'); ?>" class="btn all-project-list">View all services</a>
                        </div>
                    </div>
        <!-- Sub banner End -->

        <!-- Testmonials Listing -->
        <?php 
            $alltestimoniallist = get_field('testimonial_list');
            if($alltestimoniallist):
               
        ?>
        <section class="pg-testimonials">

            <div class="container">
                <div class="row">
                    <div class="col-md-6 grid-gap-l">
                        <div class="card testimonial-box">
                            <div class="card-header">
                                <div class="media">
                                    <div class="avatar-img align-self-center" >
                                    <img src="<?php echo $alltestimoniallist['list1']; ?>" class="media-img" alt="cover">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="avatar-name">  <?php echo $alltestimoniallist['list2']; ?></h5>
                                        <p class="job-role">
                                        <?php echo $alltestimoniallist['list3']; ?></p>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body" >
                           <p><?php echo $alltestimoniallist['list4']; ?></p>
                            </div>

                        </div>

                        <div class="card testimonial-box" >
                            <div class="card-header">
                                <div class="media">
                                    <div class="avatar-img align-self-center">
                                    <img src="<?php echo $alltestimoniallist['list5']; ?>" class="media-img" alt="cover">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="avatar-name" ><?php echo $alltestimoniallist['list6']; ?></h5>
                                        <p class="job-role">
                                        <?php echo $alltestimoniallist['list7']; ?></p>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                          <p>  <?php echo $alltestimoniallist['list8']; ?></p>
                            </div>

                        </div>

                        <div class="card testimonial-box" >
                            <div class="card-header">
                                <div class="media">
                                    <div class="avatar-img align-self-center" >
                                          <img src="<?php echo $alltestimoniallist['list9']; ?>" class="media-img" alt="cover">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="avatar-name" > <?php echo $alltestimoniallist['list10']; ?></h5>
                                        <p class="job-role">
                                        <?php echo $alltestimoniallist['list11']; ?></p>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                           <p> <?php echo $alltestimoniallist['list12']; ?></p>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-6 grid-gap-r">
                        <div class="card testimonial-box mt-md-5" >
                            <div class="card-header">
                                <div class="media">
                                    <div class="avatar-img align-self-center">
                                        <img src="<?php echo $alltestimoniallist['list13']; ?>" class="media-img" alt="cover">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="avatar-name" ><?php echo $alltestimoniallist['list14']; ?></h5>
                                        <p class="job-role">
                                            <?php echo $alltestimoniallist['list15']; ?></p>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                          <p>  <?php echo $alltestimoniallist['list16']; ?></p>
                            </div>

                        </div>

                        <div class="card testimonial-box">
                            <div class="card-header">
                                <div class="media">
                                    <div class="avatar-img align-self-center">
                                    <img src="<?php echo $alltestimoniallist['list17']; ?>" class="media-img" alt="cover">
                                    </div>
                                    <div class="media-body align-self-center">
                                        <h5 class="avatar-name"><?php echo $alltestimoniallist['list18']; ?></h5>
                                        <p class="job-role" >
                                        <?php echo $alltestimoniallist['list19']; ?></p>

                                    </div>
                                </div>
                            </div>

                            <div class="card-body">
                           <p> <?php echo $alltestimoniallist['list20']; ?></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Testmonials Listing END-->

        <!-- Client Slider -->
        <?php 
                $testheadings = get_field('test_heading');
                
            ?>
        <section class="clident-logo-slide bottom-md-space">
            <div class="container mb-5">
                <div class="section-head text-center">
                    <h3 class="main-heading-lg"><?php echo $testheadings; ?></h3>
                </div>
            </div>
            <div class="marquee marquee-left">
                <div class="client-brands">
                    <div class="client-brands-items">
                    <?php 
                $allTestmonials = get_field('testmonials_image');
                foreach ($allTestmonials as $key => $value):?>
                        <div class="client-brands-item vertical-middle">
                        <img src="<?php echo $value['image']; ?>" class="img-fluid" alt="cover">
                        </div>
                        <?php endforeach; ?>
                       
                        
        
                    </div>
                </div>
            </div>

            <div class="marquee marquee-right">
                <div class="client-brands">
                    <div class="client-brands-items">
                    <?php 
                $reverseallTestmonials = get_field('reverse_image');
                foreach ($reverseallTestmonials as $key => $value):?>

                        <div class="client-brands-item vertical-middle">
                        <img src="<?php echo $value['rev_image']; ?>" class="img-fluid" alt="cover">
                        </div>
                        <?php endforeach; ?>
                        
                    </div>
                </div>
            </div>
        </section>
        <!-- Client Slider END -->
        <!-- Contact -->
        <?php 
                $allcontact = get_field('contact');
                
            ?>
        <section class="contact-us section-gap-project ">
            <div class="container">
                <div class="col-md-6 col-lg-4">
                    <div class="card transparent">
                        <div class="media bottom-up ">
                            <div class="media-body width-adjust ">
                                <h3 class="caption-bold "><?php echo $allcontact['text']; ?> </h3>
                            </div>
                            <div class="media-right align-self-end mb-2">
                                <div class="mb-3"> <img src="<?php echo $allcontact['image']; ?>" class="img-fluid" alt="cover">
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

                            <a href="#
                      " class="object-center">
                                <div class="media">
                                    <div class="media-left">
                                    <img src="<?php echo $allcontact['mail_image']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $allcontact['mail_text']; ?> </p>
                                        <h4><?php echo $allcontact['mail_id']; ?></h4>
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
                                        <p class="small-text"><?php echo $allcontact['skype_text']; ?></p>
                                        <h4><?php echo $allcontact['skype_id']; ?></h4>
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
        <!-- Contact END -->
        <?php 
            $locationall = get_field('location');
            
            
        ?>

        <section class="locations-sec">
            <div class="bg-image-layer" > <img src="<?php echo $locationall['loc_image']; ?>" class="img-fluid" alt="icon">
            </div>
            <div class="container sec-gap-lg ">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <h3 class="caption-bold" ><?php echo $locationall['loc_text']; ?></h3>
                    </div>
                </div>

                <!-- Loacation -->
                <div class="row">
                    <div class="col-md-12 col-lg-11   mx-auto">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card ">
                                    <div class="media">
                                        <div class="media-left">
                                        <img src="<?php echo $locationall['du_image']; ?>" class="img-fluid" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h5><?php echo $locationall['du_place']; ?></h5>
                                            <p class="mail"><?php echo $locationall['du_mail']; ?></p>
                                            <p class="phone"><?php echo $locationall['du_phone']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card" >
                                    <div class="media">
                                    <img src="<?php echo $locationall['qa_image']; ?>" class="img-fluid" alt="icon">
                                        <div class="media-body">
                                            <h5><?php echo $locationall['qa_place']; ?></h5>
                                            <p class="mail"><?php echo $locationall['qa_mail']; ?></p>
                                            <p class="phone"><?php echo $locationall['qa_phone']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card">
                                    <div class="media">
                                    <img src="<?php echo $locationall['in_image']; ?>" class="img-fluid" alt="icon">
                                        <div class="media-body">
                                            <h5><?php echo $locationall['in_place']; ?></h5>
                                            <p class="mail"><?php echo $locationall['in_mail']; ?></p>
                                            <p class="phone"> <?php echo $locationall['in_phone']; ?></p>
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
<?php get_footer(); ?>