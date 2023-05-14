<?php
function custom_slider_post_type() {
    $args = array(
      'labels' => array(
        'name' => 'Slider',
        'singular_name' => 'Slider',
      ),
      'public' => true,
      'has_archive' => true,
      'rewrite' => array('slug' => 'slider'),
    );
    register_post_type('slider', $args);
  }
  add_action('init', 'custom_slider_post_type');

  function custom_slider_meta_boxes() {
    add_meta_box('slider_image', 'Slide Image', 'custom_slider_image_callback', 'slider', 'normal', 'high');
    add_meta_box('slider_caption', 'Slide Caption', 'custom_slider_caption_callback', 'slider', 'normal', 'high');
    add_meta_box('slider_link', 'Slide Link', 'custom_slider_link_callback', 'slider', 'normal', 'high');
  }
  add_action('add_meta_boxes', 'custom_slider_meta_boxes');
  
  function custom_slider_image_callback($post) {
    $value = get_post_meta($post->ID, 'slider_image', true);
    echo '<input type="text" name="slider_image" value="' . esc_attr($value) . '" />';
  }
  
  function custom_slider_caption_callback($post) {
    $value = get_post_meta($post->ID, 'slider_caption', true);
    echo '<input type="text" name="slider_caption" value="' . esc_attr($value) . '" />';
  }
  
  function custom_slider_link_callback($post) {
    $value = get_post_meta($post->ID, 'slider_link', true);
    echo '<input type="text" name="slider_link" value="' . esc_attr($value) . '" />';
  }
  
  function custom_slider_save_postdata($post_id) {
    if (isset($_POST['slider_image'])) {
      update_post_meta($post_id, 'slider_image', sanitize_text_field($_POST['slider_image']));
    }
    if (isset($_POST['slider_caption'])) {
      update_post_meta($post_id, 'slider_caption', sanitize_text_field($_POST['slider_caption']));
    }
    if (isset($_POST['slider_link'])) {
      update_post_meta($post_id, 'slider_link', sanitize_text_field($_POST['slider_link']));
    }
  }
  add_action('save_post', 'custom_slider_save_postdata');

  $slider_query = new WP_Query(array(
    'post_type' => 'slider',
    'posts_per_page' => -1,
  ));
  
  if ($slider_query->have_posts()) {
    echo '<div class="slider">';
    while ($slider_query->have_posts()) {
      $slider_query->the_post();
      $image = get_post_meta(get_the_ID(), 'slider_image', true);
      $caption = get_post_meta(get_the_ID(), 'slider_caption', true);
      $link = get_post_meta(get_the_ID(), 'slider_link', true);
  
      echo '<div class="slide">';
      echo '<a href="' . esc_url($link) . '">';
      echo '<img src="' . esc_url($image) . '" alt="' . esc_attr($caption) . '" />';
      echo '<span class="caption">' . esc_html($caption) . '</span>';
      echo '</a>';
      echo '</div>';
    }
    echo '</div>';
  }
  
  wp_reset_postdata();


  function custom_slider_shortcode($atts) {
    // Retrieve slider content from custom post type
    $args = array(
      'post_type' => 'slider',
      'posts_per_page' => -1
    );
    $slider_query = new WP_Query($args);
  
    // Start slider HTML
    $output = '<div class="slider">';
  
    // Loop through slides
    while ($slider_query->have_posts()) : $slider_query->the_post();
      $image_url = get_post_meta(get_the_ID(), 'slider_image', true);
      $caption = get_post_meta(get_the_ID(), 'slider_caption', true);
      $link = get_post_meta(get_the_ID(), 'slider_link', true);
  
      // Generate slide HTML
      $slide = '<div class="slide">';
      $slide .= '<a href="' . $link . '">';
      $slide .= '<img src="' . $image_url . '" alt="">';
      $slide .= '<div class="caption">' . $caption . '</div>';
      $slide .= '</a>';
      $slide .= '</div>';
  
      // Add slide to slider HTML
      $output .= $slide;
    endwhile;
  
    // End slider HTML
    $output .= '</div>';
  
    // Reset post data
    wp_reset_postdata();
  
    return $output;
  }
  add_shortcode('custom_slider', 'custom_slider_shortcode');
  

 /* function custom_slider_scripts() {
    wp_enqueue_style('custom-slider', get_stylesheet_directory_uri() . '/css/custom-slider.css');
    wp_enqueue_script('custom-slider', get_stylesheet_directory_uri() . '/js/custom-slider.js', array('jquery'), '1.0', true);
    }
    add_action('wp_enqueue_scripts', 'custom_slider_scripts');

    */

    ?>

<style>
/* Add CSS styles in the `custom-slider.css` file: */

```css .slider {
    position: relative;
    overflow: hidden;
}

.slide {
    position: absolute;
    top: 0;
    left: 0;
    display: none;
}

.slide img {
    display: block;
    width: 100%;
    height: auto;
}

.slide .caption {
    position: absolute;
    bottom: 0;
    left: 0;
    width: 100%;
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 10px;
}

.slide.active {
    display: block;
}

.slider-controls {
    position: absolute;
    bottom: 0;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
}

.slider-control {
    margin: 0 10px;
    width: 10px;
    height: 10px;
    border-radius: 50%;
    background-color: #ccc;
    cursor: pointer;
}

.slider-control.active {
    background-color: #333;
}
</style>

<script>
jQuery(document).ready(function($) {
    var slider = $('.slider');
    var slides = slider.find('.slide');
    var controls = $('<div class="slider-controls"></div>');

    // Add controls
    slides.each(function(index) {
        var control = $('<div class="slider-control"></div>');
        control.data('index', index);
        controls.append(control);
    });
    slider.append(controls);

    // Set up slider
    var currentSlide = 0;
    slides.eq(currentSlide).addClass('active');
    controls.find('.slider-control').eq(currentSlide).addClass('active');

    // Handle control clicks
    controls.on('click', '.slider-control', function() {
        var control = $(this);
        var index = control.data('index');

        if (index != currentSlide) {
            slides.eq(currentSlide).removeClass('active');
            controls.find('.slider-control').eq(currentSlide).removeClass('active');

            slides.eq(index).addClass('active');
            control.addClass('active');

            currentSlide = index;
        }
    });

    // Auto rotate
    setInterval(function() {
        var nextSlide = currentSlide + 1;
        if (nextSlide >= slides.length) {
            nextSlide = 0;
        }
        controls.find('.slider-control').eq(nextSlide).trigger('click');
    }, 5000);
});
</script>