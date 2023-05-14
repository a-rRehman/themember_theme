<?php
/*
Template Name: Premium Volumes Template
*/

get_header(); ?>



<div class="container thecontainer">
    <div class="row therow">
        <section class="custom_slider thecustom">

            <?php
 
 $args = array( 'post_type' => 'volume' ); 
 $loop= new WP_Query($args);?>


            <?php
 while ($loop->have_posts() ) : $loop->the_post();
 
 ?>


            <div class="holder">
                <div class="image-container">
                    <a
                        href="<?php echo get_the_permalink() ?>"><?php the_post_thumbnail ('full',array("class"=>"beta")); ?></a>
                    <h2><a href="<?php echo get_the_permalink() ?>"><?php the_title();?></a></h2>

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
    height: auto;


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
                'post_type'   => 'volume',
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

<style>
.owl-carousel .owl-nav button.owl-next,
.owl-carousel .owl-nav button.owl-prev,
.owl-carousel button.owl-dot {

    font-size: 43px;
    color: #00000052 !important;
}
</style>
<!-- ///////////////////////////////////////// -->

<!-- ///////////////////////////////////////////////////////// -->
<div class="py-lg-16 py-10 bg-gray-200" style="background: url(http://localhost/testmember/wp-content/uploads/2023/05/pexels-pixabay-33129-1.jpg)no-repeat; background-size: cover; background-position: top center;
  min-height: 300px;
  background-attachment: fixed;
  background-position: center;
    ">
    <div class="container" style="padding-top:11.5rem; padding-bottom:7.5rem; margin-top:100px; margin-bottom:100px;">
        <!-- row -->
        <div class="row justify-content-center text-center">
            <div class="col-md-9 col-12 " style="background-color:#3a3a356b; padding-top:25px; padding-bottom:25px;">
                <!-- heading -->
                <h2 class="display-4" style="color:#ffffffd6;">Join more than 1 million learners worldwide</h2>
                <p class="lead  px-lg-12 mb-6" style="color:#ffffffd6;">Effective learning starts with assessment.
                    Learning a new skill is
                    hard work—Signal makes it easier.</p>
                <!-- button -->
                <div class="d-grid d-md-block">
                    <a href="#" class="btn btn-warning mb-2 mb-md-0">Start Learning for Free</a>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- ////////////////////////////////////////////////////////// -->

<!-- ////////////////////////////////////////////////////////////// -->

<?php
// Custom loop to fetch posts
$args = array(
	'post_type'      => 'volume',
	'posts_per_page' => 10,
);

$custom_query = new WP_Query( $args );
?>
<style>
.rowalpha {
    padding-top: 50px !important;
    padding-bottom: 50px !important;
    padding-left: 40px !important;
    padding-right: 50px !important;
}

.colalpha {
    padding-right: 0 !important;
}
</style>
<div class="container">
    <div class="row rowalpha">
        <?php
if ( $custom_query->have_posts() ) :
	while ( $custom_query->have_posts() ) :
		$custom_query->the_post();

		// Get the video URL from the post meta
		$video_url = get_post_meta( get_the_ID(), 'featured_video_url', true );
        

		// Display post title and video if available  ?>


        <div class="col-4 pl-0 pt-15 mt-10 colalpha">
            <?php echo '<h2><a href="' . esc_url( get_permalink() ) . '">' . esc_html( get_the_title() ) . '</a></h2>'; ?>
            <div class="embed-responsive embed-responsive-21by9 mt-3">
                <!-- <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=elR5VO8dbE8" allowfullscreen></iframe> -->
                <iframe width="350" height="200" src="<?php echo $video_url ?>"
                    title="Breathtaking Nature in Morning - Relaxation Film 4K - Peaceful Relaxing Music - 4k Video UltraHD"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>







        <?php
		
	endwhile;

	// Reset post data
	wp_reset_postdata();
endif;

?>

    </div>
</div>


<!-- /////////////////////////////////////////////////////////////////////////////////////// -->


<!-- /////////////////////////////////////////////////////////////////////////////////////// -->


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
        ?>
        <div class="col-lg-4 mb-4">
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
                <a class="btn btn-warning  text-white border-0 btn-md btn-arrow"><span>View
                        Details</span></a>
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
    /* background-image: url('http://localhost/testmember/wp-content/uploads/2023/05/pexels-martin-de-arriba-7171398.jpg'); */
    background-color: #f1ecec !important;

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



















<?php get_footer(); ?>