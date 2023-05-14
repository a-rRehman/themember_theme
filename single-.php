<?php get_header() ?>
<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-8 col-12-medium">
                <?php
                    if(have_posts()) {
                        while(have_posts()) {
                            the_post(); ?>
                <!-- Content -->
                <article class="box post">
                    <a href="<?php the_permalink() ?>" class="image featured">
                        <?php the_post_thumbnail('alpha') ?>
                    </a>
                    <header>
                        <h2><?php the_title() ?></h2>
                    </header>

                    <?php the_content() ?>
                    <button class="mt-3 mb-5 ms-1" style="margin-left:-7px;"
                        onclick=" window.location.href='<?php echo home_url('/index.php/premium-animal'); ?>'"
                        style="color:white">
                        Back To home
                    </button>

                </article>
                <?php }
                    }
                    
                ?>


            </div>
            <?php get_sidebar() ?>
        </div>
    </div>
</section>
<?php get_footer() ?>