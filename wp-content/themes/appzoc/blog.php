<?php 
/*
Template Name: Blog
*/
    get_header();
    the_post();
?>
<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="blog-page">
        <!-- Sub banner -->
        <?php 
            $allblog = get_field('blog');
            if($allblog):
               
        ?>
        <section class="pg-blog ">
            <div class="container ">
                <div class="row">
                    <div class="col-md-10 col-lg-8 mb-4">
                        <div class="card left-panel">
                            <div class="sub-heading-sm">
                            <p> <?php echo $allblog['blog_heading']; ?> </p>
                            </div>
                            <h1 class="main-heading-lg"><?php echo $allblog['blog_content']; ?> </h1>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Sub banner End -->

        <!-- Blog Listing -->
        <?php 
            $allbloglist = get_field('blog_list');
            if($allbloglist):
               
        ?>
        <section class="pg-blog-list">
            <div class="container">
                <div class="row">

                    <!-- Blogs -->
                    <div class="col-md-7 col-lg-8">
                        <div class="card border-none ">

                            <!-- Item -->
                            <div class="card blog-container">
                                <div class="blog-header">
                                    <h4 class="blog-title">
                                    <?php echo $allbloglist['blog_title']; ?> 
                                    </h4>
                                    <div class="d-flex w-100 justify-content-between sub-head">
                                        <div class="category">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                    <?php echo $allbloglist['blog_item']; ?>   
                                                    </li>
                                                    <li class="breadcrumb-item " aria-current="page"> <?php echo $allbloglist['blog_date']; ?> </li>
                                                </ol>
                                        </div>
                                        <div class="social-share">
                                            <ul>
                                                <li>Share <span>:</span></li>
                                                <li>
                                                    <a href="">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-body">
                                   
                                    <img src="<?php echo $allbloglist['blog_image']; ?>" class="media-img" alt="cover">
                                </div>
                                <div class="blog-footer">
                                    <div class="blog-text">
                                       <p> <?php echo $allbloglist['blog_text']; ?>  </p>
                                    </div>
                                    <a href="blog-single.php" class="btn-blog-view">Continue Reading</a>
                                </div>
                            </div>
                            <!-- Item END -->

                            <!-- Item -->
                            <div class="card blog-container">
                                <div class="blog-header">
                                    <h4 class="blog-title">
                                    <?php echo $allbloglist['blog_title1']; ?> 
                                    </h4>
                                    <div class="d-flex w-100 justify-content-between sub-head">
                                        <div class="category">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                    <?php echo $allbloglist['blog_item1']; ?> 
                                                    </li>
                                                    <li class="breadcrumb-item " aria-current="page"><?php echo $allbloglist['blog_date1']; ?> </li>
                                                </ol>
                                        </div>
                                        <div class="social-share">
                                            <ul>
                                                <li>Share <span>:</span></li>
                                                <li>
                                                    <a href="">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-body">
                                <img src="<?php echo $allbloglist['blog_image1']; ?>" class="media-img" alt="cover">
                                </div>
                                <div class="blog-footer">
                                    <div class="blog-text">
                                    <?php echo $allbloglist['blog_text1']; ?> 
                                    </div>
                                    <a href="blog-single.php" class="btn-blog-view">Continue Reading</a>
                                </div>
                            </div>
                            <!-- Item END -->

                            <!-- Item -->
                            <div class="card blog-container">
                                <div class="blog-header">
                                    <h4 class="blog-title">
                                    <?php echo $allbloglist['blog_title2']; ?> 
                                    </h4>
                                    <div class="d-flex w-100 justify-content-between sub-head">
                                        <div class="category">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                    <?php echo $allbloglist['blog_item2']; ?> 
                                                    </li>
                                                    <li class="breadcrumb-item " aria-current="page">  <?php echo $allbloglist['blog_date2']; ?> </li>
                                                </ol>
                                        </div>
                                        <div class="social-share">
                                            <ul>
                                                <li>Share <span>:</span></li>
                                                <li>
                                                    <a href="">
                                                        <i class="fab fa-facebook-f"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fab fa-linkedin-in"></i>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="">
                                                        <i class="fab fa-twitter"></i>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="blog-body">
                                <img src="<?php echo $allbloglist['blog_image2']; ?>" class="media-img" alt="cover">
                                </div>
                                <div class="blog-footer">
                                    <div class="blog-text">
                                        <p>  <?php echo $allbloglist['blog_text2']; ?> </p>
                                    </div>
                                    <a href="blog-single.php" class="btn-blog-view">Continue Reading</a>
                                </div>
                            </div>
                            <!-- Item END -->

                        </div>
                    </div>
                    <!-- Blogs END -->



                    <!-- Sidebar -->
                    <div class="col-md-5 col-lg-4">
                        <div class="card border-none">
                            <div class="category-wrapper">
                                <h4 class="categ-title"> <?php echo $allbloglist['sidebar_topic']; ?></h4>
                                <ul class="categ-list">
                                    <li class="active">
                                        <a href="">
                                        <?php echo $allbloglist['topic1']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['topic2']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['topic3']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['topic4']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['topic5']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['topic6']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['topic7']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['topic8']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['topic9']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['topic10']; ?>
                                        </a>
                                    </li>

                                </ul>
                            </div>
                            <!-- Articles -->
                            <div class="article-wrapper">
                                <h4 class="article-title"> <?php echo $allbloglist['article_title']; ?></h4>
                                <ul class="article-list">
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['article1']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['article2']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['article3']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['article4']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href=""> <?php echo $allbloglist['article5']; ?>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="">
                                        <?php echo $allbloglist['article6']; ?>
                                        </a>
                                    </li>


                                </ul>
                            </div>
                            <!-- Articles END -->
                        </div>
                    </div>
                    <!-- Sidebar END -->

                </div>
            </div>
        </section>
        <?php endif; ?>
        <!-- Blog Listing END-->


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
                                <div class="mb-3"> <img src="<?php echo $allcontact['image']; ?>" class="media-img" alt="cover">
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
                                    <img src="<?php echo $allcontact['mail_image']; ?>" class="media-img" alt="cover">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $allcontact['mail_heading']; ?></p>
                                        <h4><?php echo $allcontact['mail_id']; ?></h4>
                                    </div>
                                </div>
                            </a>


                            <a href="#
                    " class="object-center">
                                <div class="media mb-0">
                                    <div class="media-left">
                                    <img src="<?php echo $allcontact['skype_image']; ?>" class="media-img" alt="cover">
                                    </div>
                                    <div class="media-body">
                                        <p class="small-text"><?php echo $allcontact['skype_heading']; ?></p>
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
            $alllocations = get_field('location');
        ?>

        <section class="locations-sec">
            <div class="bg-image-layer" > <img src="<?php echo $alllocations['loc_image']; ?>" class="media-img" alt="cover">
            </div>
            <div class="container sec-gap-lg ">
                <div class="row">
                    <div class="col-md-6 mx-auto">
                        <h3 class="caption-bold"><?php echo $alllocations['loc_heading']; ?></h3>
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
                                        <img src="<?php echo $alllocations['du1']; ?>" class="media-img" alt="cover">
                                        </div>
                                        <div class="media-body">
                                            <h5><?php echo $alllocations['du2']; ?></h5>
                                            <p class="mail"><?php echo $alllocations['du3']; ?></p>
                                            <p class="phone"><?php echo $alllocations['du4']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card">
                                    <div class="media">
                                    <img src="<?php echo $alllocations['qa1']; ?>" class="media-img" alt="cover">

                                        <div class="media-body">
                                            <h5><?php echo $alllocations['qa2']; ?></h5>
                                            <p class="mail"><?php echo $alllocations['qa3']; ?></p>
                                            <p class="phone"><?php echo $alllocations['qa4']; ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-4 mb-4">
                                <div class="card address-card ">
                                    <div class="media">
                                    <img src="<?php echo $alllocations['in1']; ?>" class="media-img" alt="cover">
                                        <div class="media-body">
                                            <h5><?php echo $alllocations['in2']; ?></h5>
                                            <p class="mail"><?php echo $alllocations['in3']; ?></p>
                                            <p class="phone"> <?php echo $alllocations['in4']; ?></p>
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

