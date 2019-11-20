<?php include 'inc/config.php'; ?>
<?php include 'inc/template_start.php'; ?>
<?php include 'inc/page_head.php'; ?>

<!-- Intro -->
<section class="site-section site-section-light site-section-top themed-background-dark">
    <div class="container">
        <h1 class="text-center animation-slideDown"><strong>Our Product</strong></h1>
        <h2 class="h3 text-center animation-slideUp">We will be happy to work together and bring your ideas to life!</h2>
    </div>
</section>
<!-- END Intro -->

<!-- Content -->
<section class="site-content site-section">
    <div class="container">
    
        <!-- Portfolio Items -->
        <!-- Add the category value for each item in its data-category attribute (for the filter functionality) -->
        <div class="row portfolio">
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="design">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo11.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #1</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="logo">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo13.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #2</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="logo">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo17.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #3</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="design">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo19.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #4</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="logo">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo3.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #5</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="design">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo16.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #6</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="development">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo1.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #7</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="development">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo5.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #8</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="logo">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo6.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #9</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="logo">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo12.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #10</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="development">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo7.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #11</strong></span>
                </a>
            </div>
            <div class="col-sm-3 portfolio-item animation-fadeInQuick" data-category="design">
                <a href="<?php echo base_url('product/detail') ?>">
                    <img src="<?php echo base_url(); ?>assets/img/placeholders/photos/photo14.jpg" alt="Image" class="img-responsive">
                    <span class="portfolio-item-info"><strong>Product #12</strong></span>
                </a>
            </div>
        </div>
        <!-- END Portfolio Items -->
    </div>
</section>
<!-- END Content -->

<!-- Testimonials -->
<section class="site-content site-section">
    <div class="container">
        <!-- Testimonials Carousel -->
        <div id="testimonials-carousel" class="carousel slide carousel-html" data-ride="carousel" data-interval="4000">
            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#testimonials-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#testimonials-carousel" data-slide-to="1"></li>
                <li data-target="#testimonials-carousel" data-slide-to="2"></li>
            </ol>
            <!-- END Indicators -->

            <!-- Wrapper for slides -->
            <div class="carousel-inner text-center">
                <div class="active item">
                    <p>
                        <img src="<?php echo base_url(); ?>assets/img/placeholders/avatars/avatar12.jpg" alt="Avatar" class="img-circle">
                    </p>
                    <blockquote class="no-symbol">
                        <p>An awesome team that brought our ideas to life! Highly recommended!</p>
                        <footer><strong>Sophie Illich</strong>, example.com</footer>
                    </blockquote>
                </div>
                <div class="item">
                    <p>
                        <img src="<?php echo base_url(); ?>assets/img/placeholders/avatars/avatar7.jpg" alt="Avatar" class="img-circle">
                    </p>
                    <blockquote class="no-symbol">
                        <p>I have never imagined that our final product would look that good!</p>
                        <footer><strong>David Cull</strong>, example.com</footer>
                    </blockquote>
                </div>
                <div class="item">
                    <p>
                        <img src="<?php echo base_url(); ?>assets/img/placeholders/avatars/avatar9.jpg" alt="Avatar" class="img-circle">
                    </p>
                    <blockquote class="no-symbol">
                        <p>An extraordinary service that helped us grow way too fast!</p>
                        <footer><strong>Nathan Brown</strong>, example.com</footer>
                    </blockquote>
                </div>
            </div>
            <!-- END Wrapper for slides -->
        </div>
        <!-- END Testimonials Carousel -->
    </div>
</section>
<!-- END Testimonials -->

<?php include 'inc/page_footer.php'; ?>
<?php include 'inc/template_scripts.php'; ?>

<!-- Load and execute javascript code used only in this page -->
<script src="js/pages/portfolio.js"></script>
<script>$(function(){ Portfolio.init(); });</script>

<?php include 'inc/template_end.php'; ?>