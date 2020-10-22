<?php
/**
 * Flatsome functions and definitions
 *
 * @package flatsome
 */

require get_template_directory() . '/inc/init.php';

/**
 * Note: It's not recommended to add any custom code here. Please use a child theme so that your customizations aren't lost during updates.
 * Learn more here: http://codex.wordpress.org/Child_Themes
 */

 if(isset($_POST['BtnSubmit'])){
     global $wpdb;

     $data_array = array(
         'first_name' =>$_POST['first_name'],
         'last_name' =>$_POST['last_name'],
         'email' =>$_POST['email'],
         'mobile' =>$_POST['mobile'],
         'comment' =>$_POST['comment']
     );
     $table_name = 'contact_form';  
     $rowResult = $wpdb->insert($table_name, $data_array, $format=NULL);
     
 }