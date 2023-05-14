<?php  
/**
 * Template Name:Portfolio Paid Version Template
 */
?>
<?php get_header(); ?>

<?php //dynamic_sidebar( 'paid-portfolio-banner' ); ?>



<!-- //////////////////////// -->
<!-- Hero -->
<div class="p-5 text-center bg-image rounded-3" style="
    background-image: url('http://localhost/testmember/wp-content/uploads/2023/05/pexels-aline-viana-prado-2465877-3.jpg');
    background-repeat: no-repeat;
    /* background-position: center center; */
    background-size: cover;
    /* background-attachment: fixed; */
    /* height: 500px; */
  ">
    <div class="mask"
        style="background-color: rgba(0, 0, 0, 0.6); margin-top:50px; margin-bottom:50px; margin-left:180px; margin-right:180px;">
        <div class="d-flex justify-content-center align-items-center h-200">
            <div class="text-white" style="padding-top:100px; padding-bottom:100px; width:800px;">
                <h1 class=" mb-3" style="color:white; font-size:28px; font-weight:400;">Heading</h1>
                <h4 class="mb-3" style="color:white; font-size:18px; font-weight:300;">Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Laborum et excepturi
                    voluptatum labore vero provident ad. Rem tempora delectus expedita quaerat voluptatum hic quidem
                    quasi! Aut ut corrupti vel laboriosam.</h4>
                <a class="btn btn-outline-light btn-lg" href="#!" role="button">Call to action</a>
            </div>
        </div>
    </div>
</div>
<!-- Hero -->
<!-- //////////////////////////////////////////////////////// -->



<!-- Main -->
<section id="main">
    <div class="container">
        <div class="row">
            <div class="col-12">

                <!-- Portfolio -->
                <section>
                    <header class="major">
                        <h2>Paid Portfolio's</h2>
                    </header>
                    <div class="row">

                        <?php
							$portfolio_args = array(
								'post_type'	=> 'portfolio',
								'posts_per_page'	=> 6
							);
							$portfolio_posts = new WP_Query($portfolio_args);
							while($portfolio_posts->have_posts()) {
								$portfolio_posts->the_post();
						?>

                        <div class="col-4 col-6-medium col-12-small">
                            <section class="box">
                                <a href="<?php the_permalink() ?>" class="image featured">
                                    <?php the_post_thumbnail('portfolio-thumb') ?>
                                </a>
                                <header>
                                    <h3><?php the_title() ?></h3>
                                </header>
                                <?php the_excerpt() ?>
                                <footer>
                                    <ul class="actions">
                                        <li><a href="<?php the_permalink() ?>" class="button alt">Find out more</a></li>
                                    </ul>
                                </footer>
                            </section>
                        </div>
                        <?php } ?>
                        <?php wp_reset_postdata() ?>

                    </div>
                </section>

            </div>
        </div>
    </div>
    </div>
</section>

<?php get_footer(); ?>