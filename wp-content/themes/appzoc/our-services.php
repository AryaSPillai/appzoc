<?php 
/*
Template Name: Service
*/
    get_header();
    the_post();
?>
<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="services-page">
        <!-- Sub banner -->
        <?php 
            $allservices = get_field('service');
            if($allservices):
               
        ?>
       <section class="pg-our-project">
            <div class="container ">
                <div class="row">
                    <div class="col-md-5 col-lg-5 mb-4">
                        <div class="card left-panel">
                            <div class="sub-heading-sm">
                            <?php echo $allservices['heading']; ?> 
                            </div>
                            <h1><?php echo $allservices['content']; ?></h1>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-7 mb-4">
                        <div class="card right-panel ">
                            <div class="sub-info-block">
                                <p><?php echo $allservices['sub_content']; ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Sub banner End -->

        <!-- project Listing -->
        <?php 
            $allservicelist = get_field('service_list');
        ?>
        <section class="pg-project-list">
        <div class="row service-cards">
            <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media">
                                 <img src="<?php echo $allservicelist['service_image']; ?>" class="media-img" alt="cover">&nbsp; &nbsp;
                                    <div class="media-body"><h4><?php echo $allservicelist['service_heading']; ?></h4>
                                        <p><?php echo $allservicelist['service_content']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media">
                                 <img src="<?php echo $allservicelist['service_image2']; ?>" class="media-img" alt="cover">&nbsp; &nbsp;
                                    <div class="media-body"><h4><?php echo $allservicelist['service_heading2']; ?></h4>
                                        <p><?php echo $allservicelist['service_content2']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media">
                                 <img src="<?php echo $allservicelist['service_image3']; ?>" class="media-img" alt="cover">&nbsp; &nbsp;
                                    <div class="media-body"><h4><?php echo $allservicelist['service_heading3']; ?></h4>
                                        <p><?php echo $allservicelist['service_content3']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media">
                                 <img src="<?php echo $allservicelist['service_image4']; ?>" class="media-img" alt="cover">&nbsp; &nbsp;
                                    <div class="media-body"><h4><?php echo $allservicelist['service_heading4']; ?></h4>
                                        <p><?php echo $allservicelist['service_content4']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media">
                                 <img src="<?php echo $allservicelist['service_image5']; ?>" class="media-img" alt="cover">&nbsp; &nbsp;
                                    <div class="media-body"><h4><?php echo $allservicelist['service_heading5']; ?></h4>
                                        <p><?php echo $allservicelist['service_content5']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media">
                                 <img src="<?php echo $allservicelist['service_image6']; ?>" class="media-img" alt="cover">&nbsp; &nbsp;
                                    <div class="media-body"><h4><?php echo $allservicelist['service_heading6']; ?></h4>
                                        <p><?php echo $allservicelist['service_content6']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media">
                                 <img src="<?php echo $allservicelist['service_image7']; ?>" class="media-img" alt="cover">&nbsp; &nbsp;
                                    <div class="media-body"><h4><?php echo $allservicelist['service_heading7']; ?></h4>
                                        <p><?php echo $allservicelist['service_content7']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media">
                                 <img src="<?php echo $allservicelist['service_image8']; ?>" class="media-img" alt="cover">&nbsp; &nbsp;
                                    <div class="media-body"><h4><?php echo $allservicelist['service_heading8']; ?></h4>
                                        <p><?php echo $allservicelist['service_content8']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-6 col-lg-4 mb-15 p-half">
                        <div class="card">
                            <a href="#">
                                <div class="media">
                                 <img src="<?php echo $allservicelist['service_image9']; ?>" class="media-img" alt="cover">&nbsp; &nbsp;
                                    <div class="media-body"><h4><?php echo $allservicelist['service_heading9']; ?></h4>
                                        <p><?php echo $allservicelist['service_content9']; ?></p>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

            </div>
        </section>
        <!-- project Listing END-->



        <!-- Contact -->
        <?php 
            $allcontact = get_field('contact');
        ?>
        <section class="contact-us">
            <div class="container">
                <div class="col-md-6 col-lg-4">
                    <div class="card transparent">
                        <div class="media bottom-up ">
                            <div class="media-body width-adjust ">
                                <h3 class="caption-bold"><?php echo $allcontact['con_heading']; ?>
                                   </h3>
                            </div>
                            <div class="media-right align-self-end mb-2">
                                <div class="mb-3"> <img src="<?php echo $allcontact['con_image']; ?>" class="img-fluid" alt="icon">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="form-wrapper">
                <div class="container relative z-index-100">
                    <div class="col-md-12 col-lg-5">
                        <div class="card contact-panel">

                            <a href="#">
                                <div class="media">
                                    <div class="media-left">
                                    <img src="<?php echo $allcontact['con_mail']; ?>" class="img-fluid" alt="icon">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $allcontact['con_mail_hedaing']; ?></p>
                                        <h4><?php echo $allcontact['mail_id']; ?></h4>
                                    </div>
                                </div>
                            </a>


                            <a href="#">
                                <div class="media mb-0">
                                    <div class="media-left">
                                    <img src="<?php echo $allcontact['skype_image']; ?>" class="img-fluid" alt="icon">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $allcontact['skype_heading']; ?></p>
                                        <h4><?php echo $allcontact['skype_id']; ?></h4>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <?php echo do_shortcode('[contact-form-7 id="290" title="Contact form 1"]'); ?>
                    <!-- <div class="form-container">
                        <div class="card card-layout">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col">
                                        <h4>Tell us about your
                                            project</h4>
                                    </div>
                                </div>
                                <div class="row align-items-center">
                                    <div class="col mt-4">
                                        <input type="text" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="Email">
                                    </div>
                                </div>

                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <input type="email" class="form-control" placeholder="Phone">
                                    </div>
                                </div>

                                <div class="row align-items-center mt-4">
                                    <div class="col">
                                        <textarea name="" id="" rows="3" class="form-control"
                                            placeholder="Message"></textarea>
                                    </div>
                                </div>

                                <div class="mt-4">
                                    <div class="d-flex justify-content-between w-100">
                                        <div class="algn-self-center my-auto mt-2">

                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                                <label class="custom-control-label" for="customCheck2">I accept the
                                                    Privacy
                                                    Policy</label>
                                            </div>
                                        </div>

                                        <div class="mt-2">
                                            <a class="btn btn-form-submit algn-self-center">Submit Form
                                                <span><img src="assets/images/icons/left-arrow-b.png" alt=""></span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> -->
                </div>
            </div>
        </section>
        <!-- Contact END -->
        <?php 
            $locationall = get_field('location');
            
            
        ?>

        <section class="locations-sec">
            <div class="bg-image-layer"> <img src="<?php echo $locationall['loc_image']; ?>" class="img-fluid" alt="icon">
                                       
            </div>
            <div class="container sec-gap-lg ">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <h3><?php echo $locationall['loc_heading']; ?></h3>
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
                                <div class="card address-card">
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
                                <div class="card address-card " >
                                    <div class="media">
                                     <img src="<?php echo $locationall['in_image']; ?>" class="img-fluid" alt="icon">
                                        <div class="media-body">
                                            <h5><?php echo $locationall['in_place']; ?></h5>
                                            <p class="mail"><?php echo $locationall['in_mail']; ?></p>
                                            <p class="phone"><?php echo $locationall['in_phone']; ?></p>
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
