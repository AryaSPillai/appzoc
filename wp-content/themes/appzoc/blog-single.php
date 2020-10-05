
<?php 
/*
Template Name: Blog Single
*/
    get_header();
    the_post();
?>
<div data-barba="wrapper">
    <main data-barba="container" data-barba-namespace="blog-single-page">
    <?php 
     $singleblogs = get_field('blog_single');
           
               
        ?>
        <!-- Blog Listing -->
        <section class="pg-blog-single">
            <div class="container">
                <div class="row">

                    <!-- Blogs -->
                    <div class="col-md-12">
                        <div class="card border-none ">

                            <!-- Item -->
                            <div class="card blog-container">
                                <div class="blog-header">
                                    <div class="row">
                                        <div class="col-lg-11">
                                            <h4>
                                            <?php echo $singleblogs['blog_title']; ?>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="d-flex w-100 justify-content-between sub-head">
                                        <div class="category">
                                            <nav aria-label="breadcrumb">
                                                <ol class="breadcrumb">
                                                    <li class="breadcrumb-item">
                                                    <?php echo $singleblogs['blog_text']; ?>
                                                    </li>
                                                    <li class="breadcrumb-item "> <?php echo $alsingleblogslblog['blog_date']; ?></li>
                                                </ol>
                                        </div>
                                        <div class="social-share" data-aos="fade-up" data-aos-easing="ease"
                                            data-aos-delay="550">
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
                                <div class="blog-body" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="600">
                                    <img src="assets/images/blog/bpost-1.png" alt="blog" class="thumbnail-img">
                                </div>
                                <div class="blog-footer" data-aos="fade-up" data-aos-easing="ease" data-aos-delay="700">
                                    <div class="back-quote">
                                        <p>Quick Summary :- It is no brainer that advancements in technology have
                                            contributed drastically to the healthcare and fitness industry. Fitness
                                            enthusiasts have ever since dreamt of a comprehensive tech support that
                                            could assist them in achieving their desired results. And then came the
                                            ultimate technology that bridged the gap between the physical and virtual
                                            worlds– Augmented Reality (AR). Read the blog to understand the process of
                                            building such a fitness app for your business.</p>
                                    </div>

                                    <div class="blog-text" data-aos="fade-up" data-aos-easing="ease"
                                        data-aos-delay="400">
                                        <p class="para"> An AR based fitness app with a 360-degree 3D modelling can
                                            boost the entire workout experience. The interaction with the physical world
                                            can immensely bring virtuality and reality closer with real-time generated
                                            data. In 2023, the AR industry is expected to see a valuation of $18 billion
                                            due to the growing number of mobile AR users and popularity of AR headsets.
                                            This has hoisted up the chances for healthcare tech products and vendors to
                                            capture the market potential like never before.</p>

                                        <p class="para">Still wondering what does it mean to develop a AR enabled
                                            fitness app?</p>

                                        <p class="para">Renowned brands and vendors are thrilled with this industry
                                            demand and the opportunity which has arisen to encourage them to create and
                                            craft super cool AR-enabled and compatible accessories with wireless
                                            ability. Here are a few famous names: Adidas, Apple, Fitbit, Garmin,
                                            Jawbone, Nike, Samsung, Sony, AT&T. Furthermore, this encouraged adoption in
                                            not only gaming but also fashion, education, healthcare, and entertainment
                                            too.</p>
                                    </div>

                                    <!-- Articles -->
                                    <div class="popular-article">
                                        <h4 class="article-title">Popular Articles</h4>
                                        <ul class="article-list">
                                            <li>

                                                How to Build a Fitness App in 8 Easy Steps using ARKit

                                            </li>
                                            <li>

                                                How to do React Migration And Increase Your

                                            </li>
                                            <li>

                                                How to find the right development partner in San Francisco?

                                            </li>
                                            <li>

                                                13 Companies which use Node.js in production |

                                            </li>
                                            <li>
                                                How to find the right development partner in San Francisco?
                                                Mobile
                                                App Development

                                            </li>
                                            <li>

                                                13 Companies which use Node.js in production |

                                            </li>


                                        </ul>
                                    </div>
                                    <!-- Articles END -->

                                    <h3 class="bold-head mb-3 mb-md-5 mb-lg-5">
                                        Why do you Need AR to Boost Your Fitness App?
                                    </h3>
                                    <div class="blog-text">
                                        <p class="para"> With fitness enthusiasts opting for home workouts over gyms,
                                            the Health and
                                            Fitness app category has seen a tremendous growth of over 330%. This has
                                            raised
                                            the bar for app developers to build training experiences that are not only
                                            seamless but also interactive. Needless to say, to have a competitive edge,
                                            you’ve got to step up your game.</p>

                                        <p class="para"> Here’s when Augmented Reality comes into the picture! What
                                            makes this
                                            technology
                                            worth an integration is its ability to bring virtual fitness guidance to
                                            life,
                                            allowing users to visualize their exercises accurately. Additionally,
                                            personalized graphical representations of fitness goals, calorie
                                            consumption,
                                            and progress monitors work as boosters to motivate users to stay on track
                                            and
                                            achieve desired results.
                                        </p>
                                        <p class="para"> Here are a few top-rated fitness apps that have been supporting
                                            fitness
                                            geeks
                                            through their fitness journeys over the years.</p>

                                        <div class="ordered-list">
                                            <ol>
                                                <li>Nike Training Club – Workouts & Fitness Plans – a Nike product with
                                                    over
                                                    50,000,000+ downloads has been in buzz only in the recent few years
                                                    yet has
                                                    captured good user loyalty.</li>
                                                <li>Fitness app by Skimble – Workout Trainer: fitness coach with over
                                                    20,000,000+
                                                    downloads in recent years has been in the spotlight for many fitness
                                                    experts who
                                                    have been looking forward to developing an advanced version of
                                                    similar apps.</li>
                                                <li>
                                                    JEFIT Workout Tracker, Weight Lifting, Gym Log App – with over
                                                    70,000,000+
                                                    downloads and offering so much more with trainers interactions to
                                                    elite clubs
                                                    and so on serving and playing an integral role in many users’
                                                    fitness goals.

                                                    Nevertheless, if with technology advancement like prototyped here
                                                    fitness apps
                                                    can work wonders with AR feature.
                                                </li>
                                            </ol>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Item END -->



                        </div>
                    </div>
                    <!-- Blogs END -->
                </div>
            </div>
        </section>
        <!-- Blog Listing END-->



        <!-- What We do -->
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
                            <h2 class="bold-text" data-aos="fade-down" data-aos-offset="200" data-aos-delay="300"
                                data-aos-mirror="true" data-aos-anchor-placement="top-bottom">Our
                                <span class="text-block">
                                    Latest Blogs</span></h2>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="card">
                            <div class="text-right-pad my-auto">
                                <p data-aos="fade-down" data-aos-offset="200" data-aos-delay="500"
                                    data-aos-mirror="true" data-aos-anchor-placement="top-bottom">We’re helping
                                    businesses, startups, and products
                                    to
                                    perfect human interactions through
                                    handcrafted design, hearty content, modern technology, and digital communications.
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
                            <div class="card " data-aos="fade-up" data-aos-offset="200" data-aos-delay="300"
                                data-aos-mirror="true" data-aos-anchor-placement="top-bottom">
                                <div class="card-header">
                                    <img src="assets/images/blog/blog-03.png" class="img-fluid" alt="img">
                                </div>
                                <div class="card-body">
                                    <div class="posted">
                                        <p>14 SEP 2019</p>
                                    </div>
                                    <h4 class="card-text">
                                        Benefits of Social Media
                                        Marketing
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Blog END -->

                    <!-- Blog -->
                    <div class="col-md-6 col-lg-4 mb-3">
                        <a href="">
                            <div class="card" data-aos="fade-up" data-aos-offset="200" data-aos-delay="500"
                                data-aos-mirror="true" data-aos-anchor-placement="top-bottom">
                                <div class="card-header">
                                    <img src="assets/images/blog/blog-02.png" class="img-fluid" alt="img">
                                </div>
                                <div class="card-body">
                                    <div class="posted">
                                        <p>14 SEP 2019</p>
                                    </div>
                                    <h4 class="card-text">
                                        Best digital Agency
                                        <br>Award 2019
                                    </h4>
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- Blog END -->


                    <!-- Blog -->
                    <div class="col-md-6 col-lg-4 mb-3">
                        <a href="">
                            <div class="card " data-aos="fade-up" data-aos-offset="200" data-aos-delay="700"
                                data-aos-mirror="true" data-aos-anchor-placement="top-bottom">
                                <div class="card-header">
                                    <img src="assets/images/blog/blog-01.png" class="img-fluid" alt="img">
                                </div>
                                <div class="card-body">
                                    <div class="posted">
                                        <p>14 SEP 2019</p>
                                    </div>
                                    <h4 class="card-text">
                                        Brand Propulsion with <br>
                                        Digital Advertising
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
                    <button class="btn all-blog-list" data-aos="fade-up" data-aos-offset="200" data-aos-delay="800"
                        data-aos-mirror="true" data-aos-anchor-placement="top-bottom">
                        View all blogs
                    </button>
                </div>
            </div>


        </section>
        <!-- What We do END-->

    </main>
</div>
