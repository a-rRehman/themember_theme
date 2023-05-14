<?php
/**
 * Template Name: Forgot Password
 */
get_header();

if ( isset( $_POST['user_login'] ) && $_POST['user_login'] != '' ) {
    // Process the password reset request
    $user_login = $_POST['user_login'];
    $user_data = get_user_by( 'login', $user_login );

    if ( $user_data ) {
        $user_email = $user_data->user_email;
        $reset_key = get_password_reset_key( $user_data );

        $reset_link = site_url( "/wp-login.php?action=rp&key=$reset_key&login=" . rawurlencode( $user_login ), 'login' );

        $subject = 'Password Reset Request';
        $message = "Someone has requested a password reset for the following account:\r\n\r\n";
        $message .= "Username: $user_login\r\n";
        $message .= "Email: $user_email\r\n\r\n";
        $message .= "If you did not request a password reset, please ignore this email.\r\n\r\n";
        $message .= "To reset your password, please click the following link:\r\n\r\n";
        $message .= $reset_link;

        wp_mail( $user_email, $subject, $message );

        echo '<p class="success-message">An email has been sent to your email address with instructions for resetting your password.</p>';
    } else {
        echo '<p class="error-message">Invalid username or email address.</p>';
    }
}
?>

<div class="container">
    <div class="row mt-2 mb-5">
        <div class="col-6">
            <form method="post">
                <div class="form-group">
                    <h1 style="font-size:24px; font-weight:400;">Reset Password : </h1>
                    <label class="mt-3" for="user_login"><?php _e( 'Username or Email' ); ?></label>
                    <input type="text" name="user_login" id="user_login" class="form-control" required>
                </div>
                <button type="submit" class="btn mt-3"
                    style="background-color:#d52349;"><?php _e( 'Reset Password' ); ?></button>
            </form>

        </div>
    </div>
</div>
<?php get_footer(); ?>