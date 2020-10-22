<?php
/**
 * Plugin name: Contact-form
 */

function contact_form_plugin()
{
    $content = '';
    $content .= '<h2>Contact Us!</h2>';
    $content .= '<form method="post" action="http://localhost/wordpress/thank-you/">';
    $content .='<label>Name</label>';
    $content .='<input type="text" name="your_name" class="form-control" placeholder="Enter your name" />';
    $content .= '<label for="your_email">Email</label>';
    $content .='<input type="email" name="your_email" class="form-control" place="Enter your email" />';
    $content .= '<label for="your_comments">Question or Comments</label>';
    $content .= '<textarea name="your_ comments" class="form-control" placeholder="Enter your Question or Comments"></textarea>';
    $content .='<br/><input type="submit" name="contact_from_submit" class="btn btn-md btn-primary" value="SEND YOUR INFORMATION" />';
    $content .='</from>';
    return $content;
}
add_shortcode('contact_form', 'contact_form_plugin');

function contact_form_capture()
{
    if(isset($_POST['contact_from_submit']))
    {
        $name = sanitize_text_field($_POST['your_name']);
        $email = sanitize_text_field($_POST['your_email']);
        $comments = sanitize_textarea_field($_POST['your_comments']);
        $to = 'nguyenhuuanquoc@gmail.com';
        $subject = 'Text form submit';
        $message = ''.$name.' - '.$email.' - '.$comments;
        wp_mail($to, $subject, $message);
    }
}
add_action('wp_head', 'contact_form_capture');
?>