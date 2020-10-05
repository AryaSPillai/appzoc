<?php wp_head(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="appzoc">
    <meta name="keywords" content="appzoc">
    <meta name="author" content="appzoc">
    <title>Appzoc</title>
</head>

<body>

    <!-- Quick Contact -->
    <div class="fixed-qk-button">
        <button class="btn-block btn ">
            <i class="fa fa-phone"></i>
        </button>
        <button class="btn-block btn ">
            <i class="fa fa-envelope"></i>
        </button>
    </div>
    <!-- Quick Contact END -->
    <!-- Header -->
    <header>

        <nav class="navbar">
            <div class="nav-container">
                <div class="navbar-logo">
                    <a href="index.php">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo/logo.png" class="img-fluid" alt="logo">
                    </a>
                </div>
                <div class="main-menu-wrapper">
                    <a href="" class="btn btn-qk-call mr-3 d-none d-md-block">+ 91 484 4052626</a>
                    <a href="" class="btn btn-get-quote mr-3">Get a Quote</a>
                    <div class="nav-toggler">
                        <button class="btn btn-toggle-menu js-menu-toggle">
                            <span class="line"></span>
                            <span class="line"></span>
                            <span class="line"></span>
                        </button>
                    </div>
                </div>
            </div>
        </nav>
    </header>


    <div id="nav" class="js-menu-wrapper">
        <div class="content">
            <div class="container flex-row">
                <div class="col-grid column-lg menu-link js-stagger">
                <ul class="js-main-menu">
                                    <?php
                                        if ( has_nav_menu( 'navbar' ) ) {
                                            $args = array(
                                                'theme_location'    => 'navbar',
                                                'menu_class'        => 'menu nepalbuzz-nav-menu',
                                                'container'         => false
                                            );
                                            wp_nav_menu( $args );
                                        }
                                    ?>
                                </ul>
                </div>
                <div class="col-grid quick-link js-stagger">
                    <div class="menu-items">
                        <div class="nav-title">Quick Links</div>
                        <ul class="js-quick-menu">
                        <?php
                                        if ( has_nav_menu( 'quickbar' ) ) {
                                            $argsd = array(
                                                'theme_location'    => 'quickbar',
                                                'menu_class'        => 'menu nepalbuzz-nav-menu',
                                                'container'         => false
                                            );
                                            wp_nav_menu( $argsd );
                                        }
                                    ?>
                           

                        </ul>
                    </div>
                    <div class="social-menus d-none d-md-block">
                        <a href="https://facebook.com">
                            <i class="fa fa-facebook" aria-hidden="true"></i>
                        </a>
                        <a href="https://twitter.com">
                            <i class="fa fa-twitter" aria-hidden="true"></i>
                        </a>
                        <a href="https://instagram.com">
                            <i class="fa fa-instagram" aria-hidden="true"></i>
                        </a>
                    </div>


                </div>

                <div class="col-grid qk-contact-link js-stagger">
                    <div class="menu-items">
                        <div class="nav-title">Get In Touch</div>
                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0">Email Us</h5>
                                <p><a href="">mail@webcastle.ae</a></p>
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-left">
                                <i class="fa fa-paper-plane"></i>
                            </div>
                            <div class="media-body">
                                <h5 class="mt-0">Email Us</h5>
                                <p><a href="">mail@webcastle.ae</a></p>
                            </div>
                        </div>
                    </div>
                    <div class="navigation-wrapper">
                        <button class="btn btn-navigate ">
                            Navigate
                        </button>
                    </div>


                </div>
            </div>

            <div class="svg-wrapper">
                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" viewBox="0 0 288 288">
                    <linearGradient id="PSgrad_0" x1="70.711%" x2="0%" y1="70.711%" y2="0%">
                        <stop offset="0%" stop-color="rgb(95,54,152)" stop-opacity="1" />
                        <stop offset="100%" stop-color="rgb(247,109,138)" stop-opacity="1" />
                    </linearGradient>
                    <path fill="url(#PSgrad_0)">
                        <animate repeatCount="indefinite" attributeName="d" dur="10s"
                            values="M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z; M51,171.3c-6.1-17.7-15.3-17.2-20.7-32c-8-21.9,0.7-54.6,20.7-67.1c19.5-12.3,32.8,5.5,67.7-3.4C145.2,62,145,49.9,173,43.4 c12-2.8,41.4-9.6,60.2,6.6c19,16.4,16.7,47.5,16,57.7c-1.7,22.8-10.3,25.5-9.4,46.4c1,22.5,11.2,25.8,9.1,42.6 c-2.2,17.6-16.3,37.5-33.5,40.8c-22,4.1-29.4-22.4-54.9-22.6c-31-0.2-40.8,39-68.3,35.7c-17.3-2-32.2-19.8-37.3-34.8 C48.9,198.6,57.8,191,51,171.3z; M37.5,186c-12.1-10.5-11.8-32.3-7.2-46.7c4.8-15,13.1-17.8,30.1-36.7C91,68.8,83.5,56.7,103.4,45 c22.2-13.1,51.1-9.5,69.6-1.6c18.1,7.8,15.7,15.3,43.3,33.2c28.8,18.8,37.2,14.3,46.7,27.9c15.6,22.3,6.4,53.3,4.4,60.2 c-3.3,11.2-7.1,23.9-18.5,32c-16.3,11.5-29.5,0.7-48.6,11c-16.2,8.7-12.6,19.7-28.2,33.2c-22.7,19.7-63.8,25.7-79.9,9.7 c-15.2-15.1,0.3-41.7-16.6-54.9C63,186,49.7,196.7,37.5,186z	" />
                    </path>
                </svg>
            </div>
        </div>
    </div>

    <!-- Header END -->