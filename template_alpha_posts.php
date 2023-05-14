<?php 
/**
 * Template Name:Slider slick
 */

 get_header(); ?>

<div class="container thecontainer">
    <div class="row therow">
        <section class="custom_slider thecustom">

            <?php
 
 $args = array( 'post_type' => 'portfolio' ); 
 $loop= new WP_Query($args);?>


            <?php
 while ($loop->have_posts() ) : $loop->the_post();
 
 ?>


            <div class="holder">
                <div class="image-container">
                    <?php the_post_thumbnail ('full',array("class"=>"beta")); ?>
                    <h2><?php the_title();?></h2>

                </div>
            </div>




            <?php endwhile; ?>
        </section>
    </div>
</div>


<style>
.thecontainer {
    width: 100% !important;
    margin: 0px;
}

.thecustom {
    padding: 0px !important;
    margin-top: 50px;

}



.beta {
    width: 100%;
    height: 600px;

}

.holder {
    position: relative;
}

.image-container {
    position: relative;

}

.image-container h2 {
    position: absolute;
    bottom: 0;
    left: 0;
    right: 0;
    margin: 0;
    padding: 20px;
    background: rgba(0, 0, 0, 0.7);
    color: #fff;
    font-size: 24px;
    line-height: 30px;
    text-align: center;
    opacity: 0;
    transition: opacity 0.3s ease;
    background-size: cover;
}

.image-container:hover h2 {
    opacity: 1;
}
</style>




<script type="text/javascript">
jQuery(document).ready(function($) {

    $('.custom_slider').slick({
        autoplay: true,
        autoplaySpeed: 2000,
        dots: true

    });

});
</script>

<?php get_footer(); ?>