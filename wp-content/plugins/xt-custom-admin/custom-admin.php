<?php
/**
 * Plugin Name: XT Customize Admin Screen
 * Plugin URI: https://khamphataynguyen.xyz/XTCustomize
 * Description: Tùy biến lại trang quản trị của admin bitnami wordpress.
 * Version: 1.0
 * Author: Đoàn Xuân Tiến
 * Author URI: https://khamphataynguyen.xyz
 */
/**
 * Change Logo Login and Background-color
 */
function xt_custom_logo() {?>
 <style type="text/css">
      /*change background in here*/
    body {
            background: #34566f !important;
 
        }
        .login #nav a, .login #backtoblog a, .login label {
            color: #f3f3f3 !important;
        }
        .wp-core-ui .button-primary {
            background: #31b36b !important;
            border: none !important;
            text-shadow: none !important;
            box-shadow: none !important;
 
        }
        .login form {
            box-shadow: none !important;
            background: transparent !important;
        }
    /*change logo images in here*/     
    #login h1 a {
        background-image: url(<?php echo plugins_url('images/logoXT.png', __FILE__); ?>);
        background-size: 280px 80px;
        width: 280px;
        height: 80px;
    }
</style>
<?php }
add_action('login_enqueue_scripts', 'xt_custom_logo');
/**
 * Tự đánh dấu vào nút Remember Me để ghi nhớ lần đăng nhập sau
 */
function tp_rememberme_check() {
    add_filter( 'login_footer', 'tp_rememberme_checked' );
}
add_action( 'init', 'tp_rememberme_check' );
 
function tp_rememberme_checked() {
    echo "<script>document.getElementById('rememberme').checked = true</scrip>";
}