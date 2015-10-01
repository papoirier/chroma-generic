<?php
/*
 * Template Name: Registration Page
 */
?>

<?php
get_header();
global $woo_options;
woo_main_before(); 
?>
<?php 
if ( have_posts() ) :
while ( have_posts() ) : the_post();
?>   

<div class="container my-account-page top-pad"> 
    <?php
    if (has_post_thumbnail()) {
        $thumb_id = get_post_thumbnail_id();
        $thumb_url = wp_get_attachment_image_src($thumb_id,'large', true); ?>
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="portrait">
                    <img src="<?php echo $thumb_url[0]; ?>" class="img-circle center-block">
                </div>
            </div>
        </div>
   <?php } ?>

            
    <?php if ( get_option( 'woocommerce_enable_myaccount_registration' ) === 'yes' ) : ?>


    <div class="row">
        <div class="col-md-6 col-md-offset-3">



<div class="" id="customer_registration">

        <h4 class="text-center"><?php _e( 'Register', 'woocommerce' ); ?></h4>

        <form method="post" class="register">

            <?php do_action( 'woocommerce_register_form_start' ); ?>

            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_username' ) ) : ?>

                <p class="form-row form-row-wide">
                    <label for="reg_username"><?php _e( 'Username', 'woocommerce' ); ?> <span class="required">*</span></label>
                    <input type="text" class="input-text" name="username" id="reg_username" value="<?php if ( ! empty( $_POST['username'] ) ) echo esc_attr( $_POST['username'] ); ?>" />
                </p>

            <?php endif; ?>

            <p class="form-row form-row-wide">
                <label for="reg_email"><?php _e( 'Email address', 'woocommerce' ); ?> <span class="required">*</span></label>
                <input type="email" class="input-text" name="email" id="reg_email" value="<?php if ( ! empty( $_POST['email'] ) ) echo esc_attr( $_POST['email'] ); ?>" />
            </p>

            <?php if ( 'no' === get_option( 'woocommerce_registration_generate_password' ) ) : ?>

                <p class="form-row form-row-wide">
                    <label for="reg_password"><?php _e( 'Password', 'woocommerce' ); ?> <span class="required">*</span></label>
                    <input type="password" class="input-text" name="password" id="reg_password" />
                </p>

            <?php endif; ?>

            <!-- Spam Trap -->
            <div style="<?php echo ( ( is_rtl() ) ? 'right' : 'left' ); ?>: -999em; position: absolute;"><label for="trap"><?php _e( 'Anti-spam', 'woocommerce' ); ?></label><input type="text" name="email_2" id="trap" tabindex="-1" /></div>

            <?php do_action( 'woocommerce_register_form' ); ?>
            <?php do_action( 'register_form' ); ?>

            <p class="form-row">
                <?php wp_nonce_field( 'woocommerce-register' ); ?>
                <input type="submit" class="button btn btn-default" name="register" value="<?php esc_attr_e( 'Register', 'woocommerce' ); ?>" />
            </p>

            <?php do_action( 'woocommerce_register_form_end' ); ?>

        </form>

    </div> <!-- /#customer_registration -->

            
        </div> <!-- /.col-md-6 -->
    </div> <!-- /.row -->
    <?php endif; ?>

</div> <!-- /.container.top-pad -->
            
<?php endwhile; ?>
<?php endif; ?>     
<?php 
woo_main_after(); 
get_footer(); 
?>