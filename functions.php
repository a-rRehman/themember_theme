<?php
/*
* Theme Functions File
*/


//bootstarp adding



add_action( "wp_enqueue_scripts", "enqueue_bootstrap_theme");
function enqueue_bootstrap_theme() {
    wp_enqueue_script('jquery');
    wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/assets/bootstrap/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/assets/bootstrap/js/bootstrap.min.js', array( 'jquery' ), '5.2.3', true );
    wp_enqueue_style('style', get_stylesheet_uri());

    
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri().'/owl-carousel/assets/owl.carousel.min.css');
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri().'/owl-carousel/owl.carousel.min.js');
    wp_enqueue_script('myjs-js', get_template_directory_uri().'/assets/js/my-js.js');
    
    wp_enqueue_style('the-slicker-css', get_template_directory_uri().'/assets/slick/slick.css');
    wp_enqueue_style('the-slicker-theme-css', get_template_directory_uri().'/assets/slick/slick-theme.css');
    wp_enqueue_script('the-slicker-js', get_template_directory_uri().'/assets/slick/slick.min.js');
    
}


function html2wp_theme_setup() {
    
    add_theme_support('custom-logo');

    add_theme_support('title-tag');

    add_theme_support('post-thumbnails');

    add_image_size ('home-featured', 680, 400, array('center', 'center'));
    add_image_size ('single-post', 580, 272, array('center', 'center'));
    add_image_size ('portfolio-thumb', 374, 260, array('center', 'center'));

    add_theme_support('automatic-feed-links');

    register_nav_menus( array(
        'primary'   => __( 'Primary Menu', 'testmember' )
    ) );
    
};
add_action('after_setup_theme', 'html2wp_theme_setup');

function html2wp_scripts(){

    wp_enqueue_style('style', get_stylesheet_uri());

    wp_enqueue_script('jquery');

    wp_enqueue_script('html2wp-browser', get_template_directory_uri(). '/assets/js/browser.min.js');
    wp_enqueue_script('html2wp-breakpoints', get_template_directory_uri(). '/assets/js/breakpoints.min.js');
    wp_enqueue_script('html2wp-util', get_template_directory_uri(). '/assets/js/util.js');
    wp_enqueue_script('html2wp-browser', get_template_directory_uri(). '/assets/js/main.js');

}
add_action('wp_enqueue_scripts', 'html2wp_scripts');

function html2wp_widgets_init() {

    register_sidebar( array(
        'name'          => __( 'Primary Sidebar', 'html2wp' ),
        'id'            => 'main-sidebar',
        'description'   => 'Main Sidebar on Right Side',
        'before_widget' => '<section id="%1$s" class="box %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h3 class="widget-title">',
        'after_title'   => '</h3></header>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Home Banner', 'html2wp' ),
        'id'            => 'home-banner',
        'description'   => 'Banner Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Home Services', 'html2wp' ),
        'id'            => 'home-services',
        'description'   => 'Services Area on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );

    register_sidebar( array(
        'name'          => __( 'Paid Access', 'html2wp' ),
        'id'            => 'paid_access',
        'description'   => 'Paid access section on Homepage',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 1', 'html2wp' ),
        'id'            => 'footer-1',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 2', 'html2wp' ),
        'id'            => 'footer-2',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );
    register_sidebar( array(
        'name'          => __( 'Footer Widget 3', 'html2wp' ),
        'id'            => 'footer-3',
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<header><h2 class="widget-title">',
        'after_title'   => '</h2></header>',
    ) );

   
register_sidebar( array(
  'name'          => __( 'Paid Portfolio Banner', 'html2wp' ),
  'id'            => 'paid-portfolio-banner',
  'description'   => 'Banner Area on Paid Articles',
  'before_widget' => '<section id="%1$s" class="widget %2$s">',
  'after_widget'  => '</section>',
  'before_title'  => '<h3 class="widget-title">',
  'after_title'   => '</h3>',
) );
}
add_action( 'widgets_init', 'html2wp_widgets_init' );

//Custom Post Types
require get_template_directory().'/inc/portfolio.php';
require get_template_directory().'/inc/volume.php';
require get_template_directory().'/inc/newspaper.php';
require get_template_directory().'/inc/animals.php';




function add_video_meta_box() {
    add_meta_box(
      'video_urls',
      'Video URLs',
      'video_urls_callback',
      'post',
      'normal',
      'default'
    );
  }
  add_action( 'add_meta_boxes', 'add_video_meta_box' );
  
  function video_urls_callback( $post ) {
    wp_nonce_field( 'video_urls_nonce', 'video_urls_nonce' );
    $value = get_post_meta( $post->ID, '_video_urls', true );
    echo '<label for="video_urls_field">Enter the video URLs:</label>';
    echo '<div id="video_urls_container">';
    if ( is_array( $value ) && count( $value ) ) {
      foreach ( $value as $url ) {
        echo '<input type="text" class="video_url_field" name="video_urls[]" value="' . esc_attr( $url ) . '">';
      }
    } else {
      echo '<input type="text" class="video_url_field" name="video_urls[]" value="">';
    }
    echo '</div>';
    echo '<button id="add_video_url_button">Add Video URL</button>';
  }
  

  //add custom login page

  // Disable wp login 
  /*
function custom_login_page() {
    $new_login_page_url = home_url( 'index.php/login-page/' ); // new login page
    global $pagenow;
    if( $pagenow == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET') {
    wp_redirect($new_login_page_url);
    exit;
    }
    }
    if(!is_user_logged_in()){
    add_action('init','custom_login_page');
    }
*/


    function redirect_login_page() {
        $login_url  = home_url( 'index.php/login-page' );
        $url = basename($_SERVER['REQUEST_URI']); // get requested URL
        isset( $_REQUEST['redirect_to'] ) ? ( $url   = "wp-login.php" ): 0; // if users ssend request to wp-admin
        if( $url  == "wp-login.php" && $_SERVER['REQUEST_METHOD'] == 'GET')  {
            wp_redirect( $login_url );
            exit;
        }
    }
    add_action('init','redirect_login_page');

    function error_handler() {
        $login_page  = home_url( 'index.php/login-page' );
        global $errors;
        $err_codes = $errors->get_error_codes(); // get WordPress built-in error codes
        $_SESSION["err_codes"] =  $err_codes;
        wp_redirect( $login_page ); // keep users on the same page
        exit;
    }
    add_filter( 'login_errors', 'error_handler');


    //adding code when user logout it will be redirected to home page 
    add_action('wp_logout','custom_logout_redirect');
function custom_logout_redirect(){
  wp_redirect( home_url() );
  exit();
}



//hiding toolbar for all user code
// add_filter('show_admin_bar', '__return_false');


//setting a new size 
function my_custom_image_sizes_alpha() {
  add_image_size( 'alpha', 600, 300, true );
}
add_action( 'after_setup_theme', 'my_custom_image_sizes_alpha' );

//setting a new size 
function my_custom_image_sizes_beta() {
  add_image_size( 'beta', 1200, 600, true );
}
add_action( 'after_setup_theme', 'my_custom_image_sizes_beta' );



// Disable default "Forgot Password" link
function disable_lost_password_link() {
  return false;
}
add_filter( 'allow_password_reset', 'disable_lost_password_link' );


function custom_lostpassword_url( $lostpassword_url, $redirect ) {
  return home_url( 'index.php/forgot-password/' );
}
add_filter( 'lostpassword_url', 'custom_lostpassword_url', 10, 2 );



/*
//replacing featured image of portfolio type to video


// Add Featured Video metabox
function add_featured_video_meta_box() {
  add_meta_box(
      'featured-video',
      'Featured Video',
      'featured_video_meta_box_callback',
      'volume',
      'side',
      'default'
  );
}
add_action( 'add_meta_boxes', 'add_featured_video_meta_box' );

// Featured Video metabox callback
/*
function featured_video_meta_box_callback( $post ) {
  wp_nonce_field( 'featured_video_meta_box', 'featured_video_meta_box_nonce' );
  $featured_video_url = get_post_meta( $post->ID, '_featured_video_url', true );
  ?>
<p>
    <label for="featured-video-url"><?php _e( 'Video URL', 'textdomain' ); ?></label>
    <input class="widefat" type="text" name="featured_video_url" id="featured-video-url"
        value="<?php echo esc_attr( $featured_video_url ); ?>">
</p>
<?php
}
*/
// Save Featured Video metabox data
/*
function save_featured_video_meta_box_data( $post_id ) {
  if ( ! isset( $_POST['featured_video_meta_box_nonce'] ) ) {
      return;
  }
  if ( ! wp_verify_nonce( $_POST['featured_video_meta_box_nonce'], 'featured_video_meta_box' ) ) {
      return;
  }
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
      return;
  }
  if ( ! current_user_can( 'edit_post', $post_id ) ) {
      return;
  }
  if ( isset( $_POST['featured_video_url'] ) ) {
      $featured_video_url = sanitize_text_field( $_POST['featured_video_url'] );
      update_post_meta( $post_id, '_featured_video_url', $featured_video_url );
  }
}
add_action( 'save_post', 'save_featured_video_meta_box_data' );
*/

/*
function add_video_meta_box_1() {
  add_meta_box(
    'video_meta_box',
    'Featured Video',
    'render_video_meta_box',
    'portfolio',
    'normal',
    'high'
  );
}

function render_video_meta_box() {
  global $post;
  wp_nonce_field( basename( __FILE__ ), 'video_meta_box_nonce' );
  $video_url = get_post_meta( $post->ID, 'video_url', true );
  echo '<label for="video_url">Video URL:</label>';
  echo '<input type="text" id="video_url" name="video_url" value="' . esc_attr( $video_url ) . '" size="30" />';
}

function save_video_meta_box( $post_id ) {
  if ( ! isset( $_POST['video_meta_box_nonce'] ) || ! wp_verify_nonce( $_POST['video_meta_box_nonce'], basename( __FILE__ ) ) ) {
    return;
  }
  if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
    return;
  }
  if ( ! current_user_can( 'edit_post', $post_id ) ) {
    return;
  }
  if ( isset( $_POST['video_url'] ) ) {
    update_post_meta( $post_id, 'video_url', sanitize_text_field( $_POST['video_url'] ) );
  }
}

add_action( 'add_meta_boxes', 'add_video_meta_box_1' );
add_action( 'save_post', 'save_video_meta_box' );

*/