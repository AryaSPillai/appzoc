<?php 
/*
Template Name: Client
*/
    get_header();
    the_post();
?>
<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="client-page">
        <!-- Sub banner -->
        <?php 
            $allclients = get_field('clients');
            if($allclients):
               
        ?>
        <section class="pg-clients ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-10 col-lg-10 mb-4">
                        <div class="card left-panel">
                            <div class="sub-heading-sm">
                            <?php echo $allclients['title']; ?>
                            </div>
                            <h1 class="main-heading-lg">
                            <?php echo $allclients['heading']; ?>
                           
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Sub banner End -->

        <!-- project Listing -->
        <?php 
            $allimage = get_field('image');
            if($allimage):
               
        ?>
        <section class="pg-clients-list">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo">
                               
                                <img src="<?php echo $allimage['image1']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo">
                            <img src="<?php echo $allimage['image2']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo">
                            <img src="<?php echo $allimage['image3']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo" >
                            <img src="<?php echo $allimage['image4']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo">
                            <img src="<?php echo $allimage['image5']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo">
                            <img src="<?php echo $allimage['image6']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo">
                            <img src="<?php echo $allimage['image7']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo">
                            <img src="<?php echo $allimage['image8']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo">
                            <img src="<?php echo $allimage['image9']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo">
                            <img src="<?php echo $allimage['image10']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo" >
                            <img src="<?php echo $allimage['image11']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-3 mb-40">
                        <div class="card">
                            <div class="client-logo" >
                            <img src="<?php echo $allimage['image12']; ?>" class="media-img" alt="cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- project Listing END-->


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
                                <h3 class="caption-bold "><?php echo $allcontact['heading']; ?></h3>
                            </div>
                            <div class="media-right align-self-end mb-2">
                                <div class="mb-3"> <img src="<?php echo $allcontact['iamge']; ?>" class="img-fluid" alt="icon">
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
                                    <img src="<?php echo $allcontact['mail_image']; ?>" class="img-fluid" alt="icon">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $allcontact['mail_text']; ?></p>
                                        <h4><?php echo $allcontact['mail_id']; ?></h4>
                                    </div>
                                </div>
                            </a>


                            <a href="#
                " class="object-center">
                                <div class="media mb-0">
                                    <div class="media-left">
                                    <img src="<?php echo $allcontact['skype_image']; ?>" class="img-fluid" alt="icon">
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
            $alllocation = get_field('location');
           
               
        ?>

        <section class="locations-sec">
            <div class="bg-image-layer"> <img src="<?php echo $alllocation['image']; ?>" class="img-fluid" alt="icon">
            </div>
            <div class="container sec-gap-lg ">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <h3 class="caption-bold"><?php echo $alllocation['heading']; ?></h3>
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
                                        <img src="<?php echo $alllocation['du1']; ?>" class="img-fluid" alt="icon">
                                        </div>
                                        <div class="media-body">
                                            <h5><?php echo $alllocation['du2']; ?></h5>
                                            <p class="mail"><?php echo $alllocation['du3']; ?></p>
                                            <p class="phone"><?php echo $alllocation['du4']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card" >
                                    <div class="media">
                                    <img src="<?php echo $alllocation['qa1']; ?>" class="img-fluid" alt="icon">

                                        <div class="media-body">
                                            <h5><?php echo $alllocation['qa2']; ?></h5>
                                            <p class="mail"><?php echo $alllocation['qa3']; ?></p>
                                            <p class="phone"><?php echo $alllocation['qa4']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card ">
                                    <div class="media">
                                    <img src="<?php echo $alllocation['in1']; ?>" class="img-fluid" alt="icon">
                                        <div class="media-body">
                                            <h5><?php echo $alllocation['in2']; ?></h5>
                                            <p class="mail"><?php echo $alllocation['in3']; ?></p>
                                            <p class="phone"><?php echo $alllocation['in4']; ?></p>
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
