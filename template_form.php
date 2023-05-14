<?php

/**
 * Template Name:Template Form
 */


get_header() ?>
<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-8 col-12-medium">
                <article class="box post">



                    <?php


if(have_posts()) {
    while(have_posts()) {
        the_post(); ?>

                    <h2 class="mb-3"><?php the_title(); }} ?></h2>

                    <?php  echo do_shortcode("[my_user_registration]");
                    ?>
                </article>


            </div>
            <div class="col-4 col-12-medium">
                <article style="text-align:center;" class="box post">
                    <?php the_custom_logo( ) ?>
                    <a href="<?php echo home_url()?>"><img style="height:400px; width:280px; border-radius:7px;"
                            src="http://localhost/testmember/wp-content/uploads/2023/05/the.png" alt="" srcset=""></a>
                    <button class="member_form" onclick=" window.location.href='<?php echo wp_login_url(); ?>'"
                        style="color:white background:black !important;">Log
                        In </button>
                    <p class="mt-1">The Best Membership Theme</p>

                    <style>
                    .member_form {
                        background: #d52349;
                        width: 280px;
                        margin: 0;
                    }
                    </style>
                </article>


            </div>
        </div>
    </div>
</section>
<?php get_footer() ?>