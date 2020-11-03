<?php
/*
  Plugin Name: Form Join Member
  Plugin URI: 
  Description: 
  Version: 1.0
  Author: Sang Đặng
 */

  function CreateForm($namedn, $email, $username, $password, $repass)
  {
  	include_once 'template/template.php';
  }

  function FormValidation($namedn, $email, $username, $password, $repass) 
  {
  	global $reg_errors;
  	$reg_errors = new WP_Error;
  	if (empty($namedn) || empty($username) || empty($password) || empty($email) || empty($repass)) {
  		$reg_errors->add('field', 'Thông tin không được để trống!');
  	}
  	if ( username_exists( $username ) )
  		$reg_errors->add('user_name', 'Tên tài khoản đã tồn tại!');
  	if ( strlen( $password ) < 8 ) {
  		$reg_errors->add( 'password', 'Mật khẩu phải có ít nhất 8 kí tự!' );
  	}
  	if (strcmp ($password, $repass) !== 0){
  		$reg_errors->add( 'password', 'Mật khẩu nhập lại ko đúng!' );
  	}
  	if ( email_exists( $email ) ) {
  		$reg_errors->add( 'email', 'Email đã tồn tại!' );
  	}
  	if (is_wp_error( $reg_errors)) {
  		foreach ($reg_errors->get_error_messages() as $error) {
  			echo '<div>';
  			echo '<strong>error</strong>:';
  			echo $error . '<br/>';
  			echo '</div>';
  		}
  	}
  }
  
  function CompleteRegistration() 
  {
  	global $reg_errors, $namedn, $email, $username, $password;
  	if (1 > count($reg_errors->get_error_messages())) {
  		$userdata = array(
        'last_name' => $namedn,
  			'user_email' => $email,
  			'user_login' => $username,
  			'user_pass'  => $password,
  		);
  		$user = wp_insert_user($userdata);
  		echo 'Đăng kí thành công. Vui lòng <a style="color: #569f21;" href="' . get_site_url() . '/wp-login.php">đăng nhập</a>.';   
  	}
  }

  function FormJoinMember() 
  {
    CreateForm($namedn, $email, $username, $password, $repass);
  	if ( isset($_POST['submit'])) {
  		FormValidation( $_POST['namedn'], $_POST['email'], $_POST['username'], $_POST['password'], $_POST['repass']);
  		global $namedn, $username, $password, $email;
      $namedn = sanitize_user($_POST['namedn']);
  		$email = sanitize_email($_POST['email']);
  		$username = sanitize_user( $_POST['username']);
  		$password = esc_attr($_POST['password']);
  		CompleteRegistration($namedn, $email, $username, $password);
  	}
  }
  add_action('admin_menu', 'GetShortcode');
  function GetShortcode(){
  	add_menu_page( 'Form Join Member', 'Form Join Member', 'manage_options','Join-member', 'cpanel_control'); 
  }
  function cpanel_control(){
  	echo "Sử dụng shortcode này để tạo form: cr_form_registration";
  }

  add_shortcode( 'cr_form_registration', 'custom_registration_shortcode' );
  function custom_registration_shortcode() {
  	ob_start();
  	FormJoinMember();
  	return ob_get_clean();
  }
  ?>