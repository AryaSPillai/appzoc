<?php 
/*
Template Name: Contact Us
*/
    get_header();
    the_post();
?>
<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="contact-page">
        <!-- Sub banner -->
        <?php 
                $allcontacts = get_field('contact_us');
               
            ?>
        <section class="pg-banner-contact">
            <div class="container ">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mx-auto">
                        <div class="card text-center transparent">
                            <div class="sub-heading-bold"><p><?php echo $allcontacts['contact_heading']; ?></p>
                            </div>
                            <p class="sm-note"><?php echo $allcontacts['contact_content']; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Shapes -->
            <div class="fixed-circle"></div>
            <div class="fixed-grid"></div>
            <!-- Shapes END -->
        </section>
        <!-- Sub banner End -->

        <!-- Contact -->
        <div class="contact-form-wrap">
            <div class="container">
                <div class="row">

                    <!--Side Panel-->
                    <?php 
                        $alladdress = get_field('address');
                    ?>
                    <div class="col-md-5 col-lg-5 mb-4">
                        <div class="card side-panel">
                            <h4 class="card-heading"><?php echo $alladdress['address_heading']; ?></h4>
                            <div class="address-container">
                                <div class="media">
                                    <div class="media-icon">
                                    <img src="<?php echo $alladdress['address_image']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="thin-caption color-primary-light"><?php echo $alladdress['office_heading']; ?></h4>
                                        <div class="address-info">
                                           <p><?php echo $alladdress['offic_address']; ?> </p>
                                        </div>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-icon">
                                    <img src="<?php echo $alladdress['mail_image']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="thin-caption color-primary-light"><?php echo $alladdress['mail_hedaing']; ?></h4>
                                        <div class="address-info">
                                            <a href="mailto:info@appzoc.com">
                                            <?php echo $alladdress['mail_id']; ?>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-icon">
                                    <img src="<?php echo $alladdress['call_image']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="thin-caption color-primary-light"><?php echo $alladdress['call_heading']; ?></h4>
                                        <div class="address-info">
                                            <a href="tel:7145540033"> <?php echo $alladdress['call_id']; ?></a>
                                        </div>
                                    </div>
                                </div>

                                <div class="media">
                                    <div class="media-icon">
                                    <img src="<?php echo $alladdress['skype_image']; ?>" class="img-fluid" alt="cover">
                                    </div>
                                    <div class="media-body">
                                        <h4 class="thin-caption color-primary-light"> <?php echo $alladdress['skype_heading']; ?></h4>
                                        <div class="address-info">
                                            <a href=""> <?php echo $alladdress['skype_id']; ?></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Side Panel-->

                    <!--Form-->
                    <div class="col-md-7 mb-md-0 mb-4">
                        <div class="card pg-contact-wrapper ">
                        <?php echo do_shortcode('[contact-form-7 id="613" title="Contact Us"]'); ?>

                           

                        </div>
                    </div>
                    <!--Form-->

                </div>
            </div>
        </div>
        <!-- Contact END -->

        <?php 
            $companylocationall = get_field('location');
            
           
        ?>
        <section class="contact-locations-sec">
            <div class="bg-image-layer">
            <img src="<?php echo $companylocationall['location_image']; ?>" class="img-fluid" alt="icon">
                              
            </div>
            <div class="container sec-gap-lg ">

                <!-- Loacation -->
                <div class="row">
                    <div class="col-md-12 col-lg-12   mx-auto negative-spacing">
                        <div class="row">
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card ">
                                    <div class="media">
                                        <div class="media-left">
                                        <img src="<?php echo $companylocationall['du_image']; ?>" class="img-fluid" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h5><?php echo $companylocationall['du_heading']; ?></h5>
                                            <p class="location">
                                        <?php echo $companylocationall['du_address']; ?>
                                            </p>
                                            <p class="mail"><?php echo $companylocationall['du_mail1']; ?></p>
                                            <p class="phone"><?php echo $companylocationall['du_phone1']; ?></p>
                                            <p class="phone"><?php echo $companylocationall['du_phone2']; ?></p>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-navigate ">
                                            Navigate
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card">
                                    <div class="media">
                                    <img src="<?php echo $companylocationall['qa_image']; ?>" class="img-fluid" alt="icon">

                                        <div class="media-body">
                                        <h5><?php echo $companylocationall['qa_heading']; ?></h5>
                                            <p class="location">
                                            <?php echo $companylocationall['qa_address']; ?>
                                            </p>
                                            <p class="mail"><?php echo $companylocationall['qa_mail']; ?></p>
                                            <p class="phone"><?php echo $companylocationall['qa_phone1']; ?></p>
                                            <p class="phone"><?php echo $companylocationall['qa_phone2']; ?></p>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-navigate ">
                                            Navigate
                                        </button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card " >
                                    <div class="media">
                                    <img src="<?php echo $companylocationall['in_image']; ?>" class="img-fluid" alt="icon">
                                        <div class="media-body">
                                        <h5><?php echo $companylocationall['in_heading']; ?></h5>
                                            <p class="location"><?php echo $companylocationall['in_address']; ?>
                                             
                                            </p>
                                            <p class="mail"><?php echo $companylocationall['in_mail']; ?></p>
                                            <p class="phone"><?php echo $companylocationall['in_phone1']; ?></p>
                                            <p class="phone"><?php echo $companylocationall['in_phone2']; ?></p>
                                        </div>
                                    </div>
                                    <div class="card-footer text-center">
                                        <button class="btn btn-navigate ">
                                            Navigate
                                        </button>
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
