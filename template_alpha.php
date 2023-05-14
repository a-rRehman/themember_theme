<?php 
/**
 * Template Name:Alpha Template
 */
get_header();

?>

<!-- ///////////////////////////////////////// -->

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






<!-- ///////////////////////////////////////// -->
<div class="container mt-15">
    <div class="home-carousel row ml-0 mr-0 mt-5">
        <div class="owl-carousel">
            <?php 
            $args = array (
                'post_type'   => 'portfolio',
                'posts_per_page' => 10,
                'order'     => 'ASC'
            );
            $tech_posts = new WP_Query( $args );
            if ( $tech_posts->have_posts() ) : ?>
            <?php while ( $tech_posts->have_posts() ) : $tech_posts->the_post(); ?>
            <div class="item">
                <a
                    href="<?php the_permalink() ?>"><?php the_post_thumbnail('alpha',array( 'style' => 'border-color:red; border-width:2px;' ) ) ?></a>
                <a href="<?php the_permalink() ?>"><?php the_title( ) ?></a>
                <?php the_content( ) ?>
            </div>

            <?php endwhile; ?>
            <?php endif; ?>
            <?php wp_reset_postdata(); ?>
        </div>
    </div>
</div>
<!-- ///////////////////////////////////////// -->
<!-- Page Content -->
<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
    </h1>

    <div class="row">
        <?php
            // Custom query to retrieve portfolio posts
            $args = array(
                'post_type' => 'portfolio',
                'posts_per_page' => -1,
            );
            $query = new WP_Query( $args );

            // Loop through the posts and display the information
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
        ?>
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="<?php the_permalink(); ?>"><img class="card-img-top"
                        src="<?php the_post_thumbnail_url( 'large' ); ?>" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
        <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </div>
    <!-- /.row -->

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <?php
            // Pagination
            echo paginate_links();
        ?>
    </ul>
</div>
<!-- /.container -->



<!-- //////////////////////////////////////// -->

<div class="row">
    <?php
    $args = array(
        'post_type' => 'your_custom_post_type',
        'posts_per_page' => 4,
        'meta_query' => array(
            array(
                'key' => '_featured_video_url',
                'value' => '',
                'compare' => '!='
            )
        )
    );
    $query = new WP_Query( $args );
    if ( $query->have_posts() ) {
        while ( $query->have_posts() ) {
            $query->the_post();
            $featured_video_url = get_post_meta( get_the_ID(), '_featured_video_url', true );
            if ( empty( $featured_video_url ) ) {
                $video_attachment_id = get_post_thumbnail_id();
                $featured_video_url = wp_get_attachment_url( $video_attachment_id );
            }
            ?>
    <div class="col-md-3">
        <div class="featured-video">
            <?php echo wp_oembed_get( $featured_video_url ); ?>
        </div>
        <h3><?php the_title(); ?></h3>
        <?php the_excerpt(); ?>
    </div>
    <?php
        }
        wp_reset_postdata();
    }
    ?>
</div>


<!-- ///////////////////////////////////////// -->
<!-- Page Content -->

<div class="container">

    <!-- Page Heading -->
    <h1 class="my-4">Page Heading
        <small>Secondary Text</small>
    </h1>

    <div class="row">
        <?php
            // Custom query to retrieve portfolio posts
            $args = array(
                'post_type' => 'volume',
                'posts_per_page' => -1,
            );
            $query = new WP_Query( $args );

            // Loop through the posts and display the information
            if ( $query->have_posts() ) :
                while ( $query->have_posts() ) : $query->the_post();
            // 
            $featured_video_url = get_post_meta( get_the_ID(), 'pfv_featured_video_uploading', true );
            if ( $featured_video_url ) {
                // Display the video
                echo '<div class="featured-video">';
                echo wp_oembed_get( $featured_video_url );
                echo '</div>';}
            //
        ?>
        <div class="col-lg-6 mb-4">
            <div class="card h-100">
                <a href="<?php the_permalink(); ?>"><img class="card-img-top"
                        src="<?php the_post_thumbnail_url( 'large' ); ?>" alt=""></a>
                <div class="card-body">
                    <h4 class="card-title">
                        <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                    </h4>
                    <p class="card-text"><?php the_excerpt(); ?></p>
                </div>
            </div>
        </div>
        <?php
                endwhile;
                wp_reset_postdata();
            endif;
        ?>
    </div>
    <!-- /.row -->

    <!-- Pagination -->
    <ul class="pagination justify-content-center">
        <?php
            // Pagination
            echo paginate_links();
        ?>
    </ul>
</div>
<!-- /.container -->



<!-- //////////////////////////////////////// -->





<!-- Dynamic Categories Style 02 -->
<div class="bg-light py-5 service-3">
    <div class="container">
        <!-- Row  -->
        <div class="row">
            <?php
            $categories = get_categories();
            foreach ($categories as $category) {
            ?>
            <!-- Column -->
            <div class="col-md-6 wrap-service3-box">
                <div class="card border-0 card-shadow mb-4">
                    <div class="card-body d-flex">
                        <div class="my-3 mr-4 align-self-center display-2 text-success-gradiant">
                            <?php echo substr($category->name, 0, 1); ?></div>
                        <div class="align-self-center">
                            <h6 class="font-weight-medium"><a
                                    href="<?php echo get_category_link($category->term_id); ?>"
                                    class="linking"><?php echo $category->name; ?></a></h6>
                            <p class="mt-3 the_description"><?php echo $category->description; ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Column -->
            <?php } ?>
            <div class="col-md-12 mt-3 text-center">
                <a class="btn btn-success-gradiant text-white border-0 btn-md btn-arrow"><span>View Details</span></a>
            </div>
        </div>
    </div>
</div>

<style>
@import url(//fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700,800);

.service-3 {
    font-family: "Montserrat", sans-serif;
    color: #8d97ad;
    font-weight: 300;
}

.the_description {
    width: 400px;
}

.service-3 h1,
.service-3 h2,
.service-3 h3,
.service-3 h4,
.service-3 h5,
.service-3 h6 {
    color: #3e4555;
}

.service-3 .font-weight-medium {
    font-weight: 500;
}

.service-3 .bg-light {
    background-color: #f4f8fa !important;
}

.service-3 .subtitle {
    color: #8d97ad;
    line-height: 24px;
}

.service-3 .linking {
    color: #3e4555;
}

.service-3 .linking:hover {
    color: #316ce8;
}

.service-3 a {
    text-decoration: none;
}

.service-3 .text-success-gradiant {
    background: #2cdd9b;
    background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #1dc8cc 100%);
    background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#1dc8cc));
    background: -webkit-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
    background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
    background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
    -webkit-background-clip: text;
    background-clip: text;
    -webkit-text-fill-color: transparent;
    text-fill-color: transparent;
}


.service-3 .card.card-shadow {
    -webkit-box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
    box-shadow: 0px 0px 30px rgba(115, 128, 157, 0.1);
}

.service-3 .wrap-service3-box .card-body {
    padding: 40px;
}

.service-3 .btn-success-gradiant {
    background: #2cdd9b;
    background: -webkit-linear-gradient(legacy-direction(to right), #2cdd9b 0%, #1dc8cc 100%);
    background: -webkit-gradient(linear, left top, right top, from(#2cdd9b), to(#1dc8cc));
    background: -webkit-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
    background: -o-linear-gradient(left, #2cdd9b 0%, #1dc8cc 100%);
    background: linear-gradient(to right, #2cdd9b 0%, #1dc8cc 100%);
}

.service-3 .btn-success-gradiant:hover {
    background: #1dc8cc;
    background: -webkit-linear-gradient(legacy-direction(to right), #1dc8cc 0%, #2cdd9b 100%);
    background: -webkit-gradient(linear, left top, right top, from(#1dc8cc), to(#2cdd9b));
    background: -webkit-linear-gradient(left, #1dc8cc 0%, #2cdd9b 100%);
    background: -o-linear-gradient(left, #1dc8cc 0%, #2cdd9b 100%);
    background: linear-gradient(to right, #1dc8cc 0%, #2cdd9b 100%);
}

.service-3 .btn-md {
    padding: 15px 45px;
    font-size: 16px;
}
</style>
<!-- ///////////////////////////////////////////////////////// -->


<?php get_footer()?>