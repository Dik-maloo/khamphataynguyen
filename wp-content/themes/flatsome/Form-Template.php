<?php
/*
Template name: Form-Template
*/
?>
<?php get_header(); ?>
<div class="container" style ="width:40%; margin-left: 205px; margin-top: 70px;">
    <form method="post" action="http://localhost/wordpress/thank-you/">
    <div class="form-group">
    <label for="pwd">First Name:</label>
    <input type="text" class="form-control" id="pwd" name="first_name">
    </div>
   

    <div class="form-group">
    <label for="pwd">Last Name:</label>
    <input type="text" class="form-control" id="pwd" name="last_name">
    </div>

    <div class="form-group">
    <label for="pwd">Email:</label>
    <input type="text" class="form-control" id="pwd" name="email">
    </div>

    <div class="form-group">
    <label for="pwd">Mobile Number:</label>
    <input type="text" class="form-control" name="mobile">
    </div>

    <div class="form-group">
    <label for="pwd">Comments:</label>
    <textarea class="form-control" name="comment"></textarea>
    </div>

    <button type="submit" name="BtnSubmit" class="btn btn-default">Send</button>
</form>
</div>





<?php get_footer();?>