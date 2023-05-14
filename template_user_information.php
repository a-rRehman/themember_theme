<?php 
/**
 * Template Name: User Information
 */

get_header();

?>




<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-8 col-12-medium">

                <article class="box post">
                    <?php if(is_user_logged_in()){ 
                        $current_user = wp_get_current_user();
                        $user_info = get_userdata($current_user->ID);
                        $user_role = $user_info->roles[0];
                        $role_price = get_option( $user_role. '_price' );
                        $phone_number= get_user_meta($current_user->ID,'phone_number',true);
                        
                        ?>
                    <h3>Welcome, <?php echo esc_html($user_info->display_name); ?>!</h3>
                    <h3>Your First Name : <?php echo esc_html($user_info->first_name); ?>!</h3>
                    <h3>Your Last Name : <?php echo esc_html($user_info->last_name); ?>!</h3>
                    <h3>Your Email Address : <?php echo esc_html($user_info->user_email); ?>!</h3>
                    <p>Your phone number is: <?php echo esc_html($phone_number); ?></p>
                    <h3 style="font-weight:400; font-size:18px;">Your membership level
                        is :<?php echo esc_html($user_info->roles[0]); ?></h3>
                    <p>Your <?php echo $user_role ?> membership price is: <?php echo esc_html($role_price); ?></p>
                    <button onclick="window.location.href='<?php echo home_url('index.php/pricing-tables') ?>'">Select
                        New
                        Plan</button>

                    <?php } else{ ?>
                    <h3>You Are Not registered user or You did not Logged in.</h3>
                    <button class="mt-3 me-2"
                        onclick="window.location.href='<?php echo home_url('index.php/membership-registration/'); ?>'">Sign
                        UP</button>
                    <button class="mt-3" onclick=" window.location.href='<?php echo wp_login_url() ?>'">Login</button>
                    <?php }?>

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






<?php 
get_footer();


?>