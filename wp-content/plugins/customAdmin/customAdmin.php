<?php
/**
 * Plugin Name: TP Customize Admin Screen
 * Plugin URI: 
 * Description: Tùy biến lại trang quản trị của admin.
 * Version: 1.0
 * Author: Cuong
 * Author URI:Cuong
 */
function tp_custom_logo() { ?>
    <style type="text/css">
 
        body {
           
           background-image: url(<?php echo plugins_url('image/anh3.jpeg', __FILE__); ?>) !important;

        }
        .login #nav a, .login #backtoblog a, .login label {
            
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
        #login h1 a {
            background-image: url(<?php echo plugins_url('image/C1.png', __FILE__); ?>) !important;

            background-size: 380px 180px;
            position: relative;
            bottom: 50px;
           /* border: 1px solid red;*/
            margin-bottom: 100px: 
            width: 250px;
            height: 80px;


        }
      

    </style>
<?php }
add_action('login_enqueue_scripts', 'tp_custom_logo');
?>
