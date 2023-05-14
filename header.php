<!DOCTYPE HTML>
<html>

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <?php wp_head() ?>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
</head>

<body <?php body_class('homepage is-preload') ?>>
    <div id="page-wrapper">

        <!-- Header -->
        <section id="header">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-4">
                        <?php if ( is_user_logged_in() ) { 
							$current_user = wp_get_current_user();
							$user_info = get_userdata($current_user->ID);?>
                        <a href="<?php echo home_url('/index.php/user-information')?>">
                            <p class="mt-4">Welcome, <?php echo esc_html($user_info->display_name); ?>!</p>
                        </a>
                        <?php } else { ?>
                        <button
                            onclick=" window.location.href='<?php echo home_url('/index.php/membership-registration/') ?>'"
                            style="color:white">Sign UP</button> <?php }?>
                    </div>

                    <div class="col-4">
                        <!-- Logo -->
                        <?php the_custom_logo( ) ?>


                    </div>

                    <div class="col-4">
                        <?php if ( is_user_logged_in() ) { 
							$current_user = wp_get_current_user();
							$user_info = get_userdata($current_user->ID);
	
							?>
                        <button onclick=" window.location.href='<?php echo wp_logout_url(); ?>'"
                            style=" color:white">LogOut</button>
                        <?php } else{ ?>
                        <button onclick=" window.location.href='<?php echo wp_login_url(); ?>'" style="color:white">Log
                            In </button>

                        <?php } ?>

                    </div>
                </div>
            </div>
            <!-- Nav -->
            <nav id="nav">
                <?php 
                        wp_nav_menu( array(
                            'theme_location' => 'primary',
                            'container' => ''
                        ) ); 
                    ?>
            </nav>

        </section>