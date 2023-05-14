<?php 
/**
 * Template Name: Custom Login Page
 */

 //custom_login_short

 /*
 get_header();
 if ( ! is_user_logged_in() ) {
     $args = array(
         'redirect' => admin_url(), // redirect to admin dashboard.
         'form_id' => 'custom_loginform',
         'label_username' => __( 'Username:' ),
         'label_password' => __( 'Password:' ),
         'label_remember' => __( 'Remember Me' ),
         'label_log_in' => __( 'Log Me In' ),
          'remember' => true
     );
 wp_login_form( $args );
 }

*/




get_header();?>


<style>
form#custom_loginform {
    margin: 50px !important;
    max-width: 500px;
    display: flex;
    flex-direction: column;
    align-self: center;
    gap: 0px !important;
}
</style>

<style>
.theposition {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 0px;

}

p.login-submit {
    z-index: 2;
}

p.forgot-password {
    padding-top: 80px;
    margin-left: -7px;
    z-index: 1;
}
</style>


<?php
if ( ! is_user_logged_in() ) {
    $args = array(
        'redirect' => '',
        'form_id' => 'custom_loginform',
        'label_username' => __( 'Username:' ),
        'label_password' => __( 'Password:' ),
        'label_remember' => __( 'Remember Me' ),
        'label_log_in' => __( 'Log Me In' ),
        'remember' => false,
        'id_username' => 'user_login',
        'id_password' => 'user_pass',
        'id_remember' => 'rememberme',
        'id_submit' => 'wp-submit',
        'class_container' => 'form-group',
        'class_submit' => 'btn btn-primary',
        'class_input' => 'form-control',
        'show_forgot_password' => true,
    );

    
    $user = wp_get_current_user(); ?>


<div class="container-fluid ms-5 ">

    <div class="row">
        <h1 style="font-size:22px; font-weight:400; margin-left:-10px; margin-top:15px; ">Login Form</h1>
    </div>

    <div class="row theposition">

        <?php
    if ( $args['show_forgot_password'] ) : ?>
        <p class="forgot-password">
            <a href="<?php echo wp_lostpassword_url(); ?>">
                <?php _e( 'Forgot Password?' ); ?>
            </a>
        </p>
        <?php endif; ?>
    </div>
</div>



<?php 
if ( in_array( 'editor', (array) $user->roles ) ) {
$args['redirect'] = admin_url();
}

if ( in_array( 'administrator', (array) $user->roles ) ) {
$args['redirect'] = admin_url();
}

else {
$args['redirect'] = home_url();
}

wp_login_form( $args );
}

else{

    ?>
<div class="container">
    <div class="row mt-3 mb-3">
        <div class="col-6">
            <h1 style="font-size:22px; font-weight:400; margin-left:-10px; margin-top:15px; ">You are already Logged In
            </h1>
            <button class="mt-3 mb-5" style="margin-left:-7px;"
                onclick=" window.location.href='<?php echo home_url( ) ?>'" style="color:white">
                Back To Home
            </button>
            <button class="mt-3 mb-5 ms-3" style="margin-left:-7px;"
                onclick=" window.location.href='<?php echo wp_logout_url(); ?>'" style="color:white">
                Log Out
            </button>

        </div>
    </div>
</div>
<?php
}






$err_codes = isset( $_SESSION["err_codes"] )? $_SESSION["err_codes"] : 0;
if( $err_codes !== 0 ){
echo display_error_message( $err_codes );
}
function display_error_message( $err_code ){
// Invalid username.
if ( in_array( 'invalid_username', $err_code ) ) {
$error = '<strong>ERROR</strong>: Invalid username.';
}
// Incorrect password.
if ( in_array( 'incorrect_password', $err_code ) ) {
$error = '<strong>ERROR</strong>: The password you entered is incorrect.';
}
// Empty username.
if ( in_array( 'empty_username', $err_code ) ) {
$error = '<strong>ERROR</strong>: The username field is empty.';
}
// Empty password.
if ( in_array( 'empty_password', $err_code ) ) {
$error = '<strong>ERROR</strong>: The password field is empty.';
}
// Empty username and empty password.
if( in_array( 'empty_username', $err_code ) && in_array( 'empty_password', $err_code )){
$error = '<strong>ERROR</strong>: The username and password are empty.';
}
return $error;
}
get_footer();










?>